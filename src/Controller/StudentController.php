<?php

namespace Mindgeek\Controller;

use Mindgeek\Entity\Student;
use Mindgeek\Validation\StudentValidation;
use Mindgeek\ViewHelper\ErrorViewHelper;
use Exception;

class StudentController
{
    public function add() {
        $student = new Student(1, 'Maria Silva', [7, 4.5, 8], new \Mindgeek\Model\SchoolBoardCsm());

        $studentValidation = new StudentValidation();

        try {
            if ($studentValidation->isValid($student)) {
                //TODO
            }
        } catch (Exception $e) {
            ErrorViewHelper::error($e);
        }
    }
}