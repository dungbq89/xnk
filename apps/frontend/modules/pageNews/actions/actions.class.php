<?php

/**
 * pageNewsDetails actions.
 *
 * @package    Vt_Portals
 * @subpackage pageNewsDetails
 * @author     ngoctv1
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class pageNewsActions extends sfActions
{
    public function executeIndex(sfWebRequest $request)
    {
        $categorys = VtpCategoryTable::getAllCategoryFront();
        if ($categorys) {
            $this->categorys = $categorys;

        } else {
            return $this->redirect404();
        }

    }

    public function executeCategoryNews(sfWebRequest $request)
    {
        $slug = $request->getParameter('slug');
        if ($slug) {
            $category = VtpCategoryTable::getCategoryBySlug($slug);
            if ($category) {
                $limit = 5;
                $this->catName = $category->getName();
                $this->url_paging = 'category_new';
                $this->page = $this->getRequestParameter('page', 1);
                $pager = new sfDoctrinePager('AdArticle', $limit);
                $pager->setQuery(AdArticleTable::getListArticle($category->getId()));
                $pager->setPage($this->page);
                $pager->init();
                $this->pager = $pager;
                $this->category = $category;
                $this->listArticle = $pager->getResults();
            } else {
                return $this->redirect404();
            }

        } else {
            return $this->redirect404();
        }

    }

    public function executeNewDetail(sfWebRequest $request)
    {
        $slug = $request->getParameter('slug');
        $article = AdArticleTable::getInstance()->createQuery()->andWhere('slug=?', $slug)->andWhere('lang=?', sfContext::getInstance()->getUser()->getCulture())
            ->andWhere('is_active=?', 2)->fetchArray();
        if (!empty($article)) {
            AdArticleTable::getInstance()->updateHitCounter($article[0]['id']);
            $this->article = $article[0];
        } else {
            return $this->redirect404();
        }
    }


    public function executeSearchArticle(sfWebRequest $request)
    {
        $type = $this->type = trim($request->getParameter('type', 3));
        $query = $this->query = trim($request->getParameter('s', ''));
        $page = $this->page = trim($request->getParameter('page', 1));
        $pager = false;
        $limit = 9;
        if ($query) {
            switch ($type) {
                case'1': {  // video
                    $pager = AdYoutubeTable::getInstance()->getListVideoYTSearch($query, $limit, $page);
                }
                    break;
                case'2': {  // tai lieu
                    $pager = AdDocumentDownloadTable::getInstance()->getListDocumentDownloadSearch($query, $limit, $page);
                }
                    break;
                default: {   // tin tuc
                    $pager = AdArticleTable::getInstance()->getListNewSearch($query, $limit, $page);
                }
            }
        }
        $this->pager = $pager;
    }

}
