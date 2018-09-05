<?php

namespace Mindgeek\Model;

use Mindgeek\Entity\Student;
use Mindgeek\Error\StudentNotFoundError;
use ReflectionClass;

/**
 * Class StudentModel
 * @package Mindgeek\Model
 */
class StudentModel
{
    /**
     * @param Student $student
     * @return bool
     */
    public function add(Student $student)
    {
        //TODO

        return json_encode([
            'id'          => 1,
            'name'        => $student->getName(),
            'gradeList'   => implode(';', $student->getGradeList()),
            'schoolBoard' => (new ReflectionClass($student->getSchoolBoard()))->getShortName()
        ]);
    }

    /**
     * @param int $id
     * @return Student
     * @throws StudentNotFoundError
     */
    public function get(int $id) : Student
    {
        $student = null;

        switch ($id)
        {
            case 1:
                $student = new Student($id, 'Jocastra Silva', [7, 4.5, 8], new \Mindgeek\Model\SchoolBoardCsm());
                break;

            case 2:
                $student = new Student($id, 'Lutenilda Santos', [7, 4.5, 8], new \Mindgeek\Model\SchoolBoardCsmb());
                break;

            case 3:
                $student = new Student($id, 'Riomelda Lira', [7, 8], new \Mindgeek\Model\SchoolBoardCsmb());
                break;

            case 4:
                $student = new Student($id, 'Carlos Lima', [1, 5, 9, 8], new \Mindgeek\Model\SchoolBoardCsm());
                break;

            default:
                throw new StudentNotFoundError();
        }

        return $student;
    }
}