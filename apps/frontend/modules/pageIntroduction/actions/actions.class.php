<?php

/**
 * pageNewsDetails actions.
 *
 * @package    Vt_Portals
 * @subpackage pageNewsDetails
 * @author     ngoctv1
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class pageIntroductionActions extends sfActions
{
    public function executeIndex(sfWebRequest $request)
    {
        $id = 55;
        $html = AdHtmlTable::getHtmlById($id);
        if ($html) {
            $this->html = $html;
        } else {
            return $this->redirect404();
        }
    }
}
