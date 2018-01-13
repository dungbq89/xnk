<?php

/**
 * Created by PhpStorm.
 * User: conghuyvn8x
 * Date: 7/6/2017
 * Time: 3:25 PM
 */
class pageHomeComponents extends sfComponents
{
    public function executeSlide(sfWebRequest $request)
    {
        $this->slide = AdAdvertiseTable::getAdvertiseV2('homepage');
    }
    public function executeTeacher(sfWebRequest $request)
    {
        $this->teachers = AdGiangVienTable::getAllTeacher();
    }

    public function executeStudent(sfWebRequest $request)
    {
        $this->students = AdHocVienTable::getAllStudent();
    }

    public function executeMaps(sfWebRequest $request)
    {

    }
}
