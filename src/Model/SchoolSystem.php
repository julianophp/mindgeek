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

    public function transfer(Student $student, float $average)
    {

    }
}
