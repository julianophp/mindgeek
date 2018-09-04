<?php

declare(strict_types = 1);

namespace Mindgeek\Entity;

/**
 * Class Student
 * @package Mindgeek\Entity
 */
class Student
{
    const SCHOOL_BOARD_CSM  = 'CSM';
    const SCHOOL_BOARD_CSMB = 'CSMB';
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
     * @var string
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
     * @param string $schoolBoard
     * @param string $finalResult
     */
    public function __construct(int $id, string $name, array $gradeList, string $schoolBoard, string $finalResult)
    {
        $this->id = $id;
        $this->name = $name;
        $this->gradeList = $gradeList;
        $this->schoolBoard = $schoolBoard;
        $this->finalResult = $finalResult;
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
     * @return string
     */
    public function getSchoolBoard(): string
    {
        return $this->schoolBoard;
    }

    /**
     * @param string $schoolBoard
     */
    public function setSchoolBoard(string $schoolBoard)
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