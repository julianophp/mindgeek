<?php

namespace Mindgeek\Model;

/**
 * Class SchoolBoard
 * @package Mindgeek\Model
 */
abstract class SchoolBoard
{
    /**
     * @param array $gradeList
     * @return float
     */
    public abstract function calculateAverage(array $gradeList) : float;
}