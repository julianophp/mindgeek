<?php

namespace Mindgeek\Controller;

use Mindgeek\Model\SchoolSystem;
use Mindgeek\Model\StudentModel;
use Mindgeek\ViewHelper\JsonViewHelper;
use Mindgeek\ViewHelper\ErrorViewHelper;
use Exception;

/**
 * Class SchoolSystemController
 * @package Mindgeek\Controller
 */
class SchoolSystemController
{
    /**
     * @param int $idStudent
     */
    public function transfer(int $idStudent) {
        $schoolSystem = new SchoolSystem();
        $studentModel = new StudentModel();

        try {
            $student = $studentModel->get($idStudent);
            $average = $schoolSystem->calculateAverage($student);

            JsonViewHelper::json($schoolSystem->transfer($student, $average));
        } catch (Exception $e) {
            ErrorViewHelper::error($e);
        }
    }
}