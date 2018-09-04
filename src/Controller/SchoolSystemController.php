<?php

namespace Mindgeek\Controller;

use Mindgeek\Model\SchoolSystem;
use Mindgeek\Model\StudentModel;
use Mindgeek\ViewHelper\ViewHelper;
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

            ViewHelper::response($schoolSystem->transfer($student, $average));
        } catch (Exception $e) {
            ViewHelper::error($e);
        }
    }
}