<?php

namespace Mindgeek\Model;

use Mindgeek\Entity\Student;
use Mindgeek\Error\SchoolSystemTransferError;
use Mindgeek\Log\Log;

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
     * @throws SchoolSystemTransferError
     */
    public function transfer(Student $student, float $average)
    {
        $result = $student->getSchoolBoard()->getResult($student, $average);

        /* ---- TRANSFER TO SCHOOL BOARD --- */
        /*                                   */
        /*                TODO               */
        /*                                   */
        /* ----------------------------------*/

        /* Simulating transmission failure */
        if ($student->getId() == 4) {
            Log::save('transmission failed');
            throw new SchoolSystemTransferError();
        }

        return $result;
    }
}
