<?php

namespace School\Model;

use School\Entity\Student;

/**
 * Class SchoolBoardCsm
 * @package School\Model
 */
class SchoolBoardCsm extends SchoolBoard
{
    /**
     * @param array $gradeList
     * @return float
     */
    public function calculateAverage(array $gradeList) : float
    {
        if (count($gradeList) == 0) {
            return 0;
        }

        return array_sum($gradeList) / count($gradeList);
    }

    /**
     * @param Student $student
     * @param float $average
     * @return string
     */
    public function getResult(Student $student, float $average) : string
    {
        return json_encode([
            'id'            => $student->getId(),
            'name'          => $student->getName(),
            'gradeList'     => $student->getGradeList(),
            'average'       => $average,
            'finalResult'   => ($average >= 7 ? self::FINAL_RESULT_PASS : self::FINAL_RESULT_FAIL)
        ]);
    }
}
