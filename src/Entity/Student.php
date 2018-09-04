<?php

declare(strict_types = 1);

namespace Mindgeek\Entity;

use Mindgeek\Model\SchoolBoard;

/**
 * Class Student
 * @package Mindgeek\Entity
 */
class Student
{
    const FINAL_RESULT_PASS = 'PASS';
    const FINAL_RESULT_FAIL = 'FAIL';

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var array
     */
    private $gradeList;

    /**
     * @var SchoolBoard
     */
    private $schoolBoard;

    /**
     * @var string
     */
    private $finalResult;

    /**
     * Student constructor.
     * @param int $id
     * @param string $name
     * @param array $gradeList
     * @param SchoolBoard $schoolBoard
     */
    public function __construct(int $id, string $name, array $gradeList, SchoolBoard $schoolBoard)
    {
        $this->id = $id;
        $this->name = $name;
        $this->gradeList = $gradeList;
        $this->schoolBoard = $schoolBoard;
        $this->finalResult = '';
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return array
     */
    public function getGradeList(): array
    {
        return $this->gradeList;
    }

    /**
     * @param array $gradeList
     */
    public function setGradeList(array $gradeList)
    {
        $this->gradeList = $gradeList;
    }

    /**
     * @return SchoolBoard
     */
    public function getSchoolBoard(): SchoolBoard
    {
        return $this->schoolBoard;
    }

    /**
     * @param SchoolBoard $schoolBoard
     */
    public function setSchoolBoard(SchoolBoard $schoolBoard)
    {
        $this->schoolBoard = $schoolBoard;
    }

    /**
     * @return string
     */
    public function getFinalResult(): string
    {
        return $this->finalResult;
    }

    /**
     * @param string $finalResult
     */
    public function setFinalResult(string $finalResult)
    {
        $this->finalResult = $finalResult;
    }
}