<?php

namespace School\Model;

use School\Entity\Student;
use School\Error\SchoolSystemTransferError;
use School\Log\Log;

/**
 * Class SchoolSystem
 * @package School\Model
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
