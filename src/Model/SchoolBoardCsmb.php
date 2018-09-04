<?php

namespace Mindgeek\Model;

use Mindgeek\Entity\Student;
use SimpleXMLElement;

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
    public function calculateAverage(array $gradeList) : float
    {
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

    /**
     * @param Student $student
     * @param float $average
     * @return string
     */
    public function getResult(Student $student, float $average) : string
    {
        $xml = new SimpleXMLElement("<?xml version=\"1.0\"?><root></root>");

        $xml->addChild('id',            $student->getId());
        $xml->addChild('name',          htmlspecialchars($student->getName()));
        $xml->addChild('gradeList',     implode(';', $student->getGradeList()));
        $xml->addChild('average',       $average);
        $xml->addChild('finalResult',   ($average >= 7 ? self::FINAL_RESULT_PASS : self::FINAL_RESULT_FAIL));

        return $xml->asXML();
    }
}