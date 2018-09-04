<?php

namespace Mindgeek\Model;

use Mindgeek\Entity\Student;

/**
 * Class SchoolSystem
 * @package Mindgeek\Model
 */
class SchoolSystem
{
    /**
     * @param Student $student
     * @return float
     */
    public function calculateAverage(Student $student) {
        return $student->getSchoolBoard()->calculateAverage($student->getGradeList());
    }

    /**
     * @param Student $student
     * @param float $average
     * @return string
     */
    public function transfer(Student $student, float $average)
    {
        $result = $student->getSchoolBoard()->getResult($student, $average);

        /* ---- TRANSFER TO SCHOOL BOARD --- */
        /*                                   */
        /*                TODO               */
        /*                                   */
        /* ----------------------------------*/

        return $result;
    }
}
