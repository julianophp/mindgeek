<?php

namespace Mindgeek\Controller;

use Mindgeek\Model\SchoolSystem;
use Mindgeek\Model\StudentModel;
use Mindgeek\ViewHelper\ErrorViewHelper;
use Exception;

class SchoolSystemController
{
    public function transfer(int $idStudent) {
        $schoolSystem = new SchoolSystem();
        $studentModel = new StudentModel();

        try {
            $student = $studentModel->get($idStudent);

            $average = $schoolSystem->calculateAverage($student);

            echo $average;

        } catch (Exception $e) {
            ErrorViewHelper::error($e);
        }
    }
}