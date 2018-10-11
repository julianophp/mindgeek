<?php

namespace School\Controller;

use School\Entity\Student;
use School\Validation\StudentValidation;
use School\ViewHelper\ViewHelper;
use School\Model\StudentModel;
use School\Model\SchoolBoardCsm;
use School\Model\SchoolBoardCsmb;
use Exception;

/**
 * Class StudentController
 * @package School\Controller
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
