<?php

namespace Mindgeek\Controller;

use Mindgeek\Entity\Student;
use Mindgeek\Validation\StudentValidation;
use Mindgeek\ViewHelper\ViewHelper;
use Mindgeek\Model\StudentModel;
use Mindgeek\Model\SchoolBoardCsm;
use Mindgeek\Model\SchoolBoardCsmb;
use Exception;

/**
 * Class StudentController
 * @package Mindgeek\Controller
 */
class StudentController
{
    /**
     * @param array $studentPost
     */
    public function add(array $studentPost)
    {
        $name       = trim($studentPost['name']);
        $gradeList  = explode(';', $studentPost['gradeList']);

        switch ($studentPost['schoolBoard'])
        {
            case 'CSMB':
                $schoolBoard = new SchoolBoardCsmb();
                break;

            default:
                $schoolBoard = new SchoolBoardCsm();
        }

        $studentValidation  = new StudentValidation();
        $studentModel       = new StudentModel();
        $student            = new Student(0, $name, $gradeList, $schoolBoard);

        try {
            if ($studentValidation->isValid($student)) {
                ViewHelper::response($studentModel->add($student));
            }
        } catch (Exception $e) {
            ViewHelper::error($e);
        }
    }
}