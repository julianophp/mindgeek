<?php

namespace Mindgeek\Model;

/**
 * Class SchoolBoardCsmb
 * @package Mindgeek\Model
 */
class SchoolBoardCsmb extends SchoolBoard
{
    /**
     * @param array $gradeList
     * @return float
     */
    public function calculateAverage(array $gradeList) : float {

        if (count($gradeList) == 0) {
            return 0;
        }

        if (count($gradeList) > 2) {
            $lowestGrade = [];

            foreach($gradeList as $key => $grade) {
                if (empty($lowestGrade) || $grade < key($lowestGrade)) {
                    $lowestGrade = [$grade => $key];
                }
            }

            if (!empty($lowestGrade)) {
                unset($gradeList[current($lowestGrade)]);
            }
        }

        return array_sum($gradeList) / count($gradeList);
    }
}