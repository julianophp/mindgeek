<?php

namespace Mindgeek\Validation;

use Mindgeek\Entity\Student;
use Mindgeek\Error\{StudentNameError, StudentGradeError, StudentSchoolBoardError};
use Mindgeek\Model\SchoolBoard;

/**
 * Class StudentValidation
 * @package Mindgeek\Validation
 */
class StudentValidation
{
    /**
     * @param Student $student
     * @return bool
     * @throws StudentGradeError
     * @throws StudentNameError
     * @throws StudentSchoolBoardError
     */
    public function isValid(Student $student)
    {
        if (empty(trim($student->getName())))
        {
            throw new StudentNameError();
        }

        $gradeList = $student->getGradeList();

        if (!is_array($gradeList)) {
            throw new StudentGradeError();
        }

        if (count($gradeList) == 0 || count($gradeList) > 4) {
            throw new StudentGradeError();
        }

        $filteredGrade = array_filter($gradeList, function($grade) {
            return is_numeric($grade) && $grade >= 0 && $grade <= 10;
        });

        if (count($filteredGrade) != count($gradeList)) {
            throw new StudentGradeError();
        }

        if (!$student->getSchoolBoard() instanceof SchoolBoard) {
            throw new StudentSchoolBoardError();
        }

        return true;
    }
}