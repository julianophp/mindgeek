<?php

namespace Mindgeek\Controller;

use Mindgeek\Entity\Student;
use Mindgeek\Validation\StudentValidation;
use Mindgeek\ViewHelper\ErrorViewHelper;
use Mindgeek\Model\StudentModel;
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
    public function add(array $studentPost) {
        $studentValidation  = new StudentValidation();
        $studentModel       = new StudentModel();
        $student            = new Student(
            $studentPost['id'],
            $studentPost['name'],
            $studentPost['gradeList'],
            $studentPost['schoolBoard']
        );

        try {
            if ($studentValidation->isValid($student)) {
                $studentModel->add($student);
            }
        } catch (Exception $e) {
            ErrorViewHelper::error($e);
        }
    }
}