<?php

/**
 * pageNewsDetails actions.
 *
 * @package    Vt_Portals
 * @subpackage pageNewsDetails
 * @author     ngoctv1
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class pageNewsComponents extends sfComponents
{
    public function executeCatNewNav(sfWebRequest $request)
    {
        // tin moi nhat
        $this->listNews = AdArticleTable::getInstance()->getListNewsV2(5);
        // tin xem nhieu nhat
        $this->listViews = AdArticleTable::getInstance()->getMostViewNewsV2(5);
    }

}
