<?php

/**
 * moduleVideo actions.
 *
 * @package    Vt_Portals
 * @subpackage moduleVideo
 * @author     ngoctv1
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class pageVideoActions extends sfActions
{
    /**
     * Executes index action
     *
     * @param sfRequest $request A request object
     */
    public function executeIndex(sfWebRequest $request)
    {
        $limit = sfConfig::get('app_limit_videos', 10);
        $pager = AdYoutubeTable::getInstance()->getListSqlVideoYT($limit, $request->getParameter('page', 1));
        $this->pager = $pager;
    }

    public function executeVideoDetail(sfWebRequest $request)
    {
        $slug = $request->getParameter('slug');
        $this->video = AdYoutubeTable::getInstance()->getVideoYTBySlug($slug);
    }
}