<?php

namespace Mindgeek\Model;

use Mindgeek\Entity\Student;

/**
 * Class SchoolBoard
 * @package Mindgeek\Model
 */
abstract class SchoolBoard
{
    const FINAL_RESULT_PASS = 'PASS';
    const FINAL_RESULT_FAIL = 'FAIL';

    /**
     * @param array $gradeList
     * @return float
     */
    public abstract function calculateAverage(array $gradeList) : float;

    /**
     * @param Student $student
     * @param float $average
     * @return string
     */
    public abstract function getResult(Student $student, float $average) : string;
}