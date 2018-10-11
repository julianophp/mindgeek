<?php

namespace School\Controller;

use School\Model\SchoolSystem;
use School\Model\StudentModel;
use School\ViewHelper\ViewHelper;
use Exception;

/**
 * Class SchoolSystemController
 * @package School\Controller
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
