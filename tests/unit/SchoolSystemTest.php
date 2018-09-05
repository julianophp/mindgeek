<?php

use PHPUnit\Framework\TestCase;
use Mindgeek\Entity\Student;
use Mindgeek\Model\SchoolSystem;
use Mindgeek\Model\SchoolBoardCsm;
use Mindgeek\Model\SchoolBoardCsmb;

/**
 * Class SchoolSystemTest
 */
class SchoolSystemTest extends TestCase
{
    /**
     * @var SchoolSystem
     */
    private $schoolSystem;

    /**
     * SchoolSystemTest constructor.
     * @param null $name
     * @param array $data
     * @param string $dataName
     */
    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);

        $this->schoolSystem = new SchoolSystem();
    }

    /**
     * Test to calculate the Average
     */
    public function testCalculateAverage()
    {
        $student1 = new Student(1, 'Maria Silva',  [7, 4.5, 8], new SchoolBoardCsm());
        $student2 = new Student(2, 'Pedro Santos', [7, 4.5, 8], new SchoolBoardCsmb());
        $student3 = new Student(3, 'Marta Lira',   [7, 8],      new SchoolBoardCsmb());

        $this->assertEquals($this->schoolSystem->calculateAverage($student1), 6.5);
        $this->assertEquals($this->schoolSystem->calculateAverage($student2), 7.5);
        $this->assertEquals($this->schoolSystem->calculateAverage($student3), 7.5);
    }

    /**
     * Test to transfer
     */
    public function testTransfer()
    {
        $student1 = new Student(1, 'Maria Silva',  [7, 4.5, 8], new SchoolBoardCsm());
        $student2 = new Student(2, 'Pedro Santos', [7, 4.5, 8], new SchoolBoardCsmb());
        $student3 = new Student(3, 'Marta Lira',   [7, 8],      new SchoolBoardCsmb());

        $average1 = $this->schoolSystem->calculateAverage($student1);
        $average2 = $this->schoolSystem->calculateAverage($student2);
        $average3 = $this->schoolSystem->calculateAverage($student3);

        $result1 = $this->schoolSystem->transfer($student1, $average1);
        $result2 = $this->schoolSystem->transfer($student2, $average2);
        $result3 = $this->schoolSystem->transfer($student3, $average3);

        $this->assertContains('"finalResult":"FAIL"', $result1);
        $this->assertContains('<finalResult>PASS</finalResult>', $result2);
        $this->assertContains('<finalResult>PASS</finalResult>', $result3);
    }
}