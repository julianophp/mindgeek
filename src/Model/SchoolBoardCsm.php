<?php

namespace Mindgeek\Model;

/**
 * Class SchoolBoardCsm
 * @package Mindgeek\Model
 */
class SchoolBoardCsm extends SchoolBoard
{
    /**
     * @param array $gradeList
     * @return float
     */
    public function calculateAverage(array $gradeList) : float {
        if (count($gradeList) == 0) {
            return 0;
        }

        return array_sum($gradeList) / count($gradeList);
    }
}