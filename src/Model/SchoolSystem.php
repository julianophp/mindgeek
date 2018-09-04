<?php

namespace Mindgeek\Model;

use Mindgeek\Entity\Student;

class SchoolSystem
{
    public function calculateAverage(Student $student) {
        return $student->getSchoolBoard()->calculateAverage($student->getGradeList());
    }
}
