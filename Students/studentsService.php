<?php

require_once __DIR__ . '\studentsData.php';

Class Student
{
    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $lastName;

    /**
     * @var string
     */
    private $gender;

    /**
     * @var string
     */
    private $status;

    /**
     * @var integer
     */
    private $gpa;

    /**
     * @var integer
     */
    private $study_time = 0;

    public function __construct()
    {

    }

    /**
     * @param $firstName
     * @return Student
     */
    public function setFirstName($firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * @param $lastName
     * @return Student
     */
    public function setLastName($lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * @param string $gender
     * @return Student
     */
    public function setGender(string $gender): self
    {
        if ($gender === 'male' || $gender === 'female') {
            $this->gender = $gender;

            return $this;
        }

        throw new RuntimeException ('Gender can be only <male> or <female>');
    }

    /**
     * @param string $status
     * @return Student
     */
    public function setStatus(string $status): self
    {
        if ($status === 'freshman' || $status === 'sophomore' || $status === 'junior' || $status === 'senior') {
            $this->status = $status;

            return $this;
        }

        throw new RuntimeException ('Status can be only <freshman> or <sophomore> or <junior> or <senior>');

    }

    /**
     * @param int $gpa
     * @return Student
     */
    public function setGPA(int $gpa): self
    {
        $gpa > 4.0 ? $this->gpa = 4.0 : $this->gpa = $gpa;

        return $this;
    }

    /**
     * @param int $study_time
     * @return int
     */
    public function setStudyTime(int $study_time = 0): int
    {
        $this->study_time = $study_time;
        if ($this->study_time !== 0) {
            return $this->study_time = $this->gpa + log($this->study_time);
        }

        return $this->study_time;

    }

    /**
     * @return void
     */
    public function showMyself(): void
    {
        if (!isset($this->firstName)) {
            throw new RuntimeException('First Name is not set.');
        }
        echo "First Name: {$this -> firstName}" . PHP_EOL;

        if (!isset($this->lastName)) {
            throw new RuntimeException ('Last Name is not set.');
        }
        echo "Last Name: {$this -> lastName}" . PHP_EOL;

        if (!isset($this->gender)) {
            throw new RuntimeException ('Gender is not set.');
        }
        echo "Gender: {$this -> gender}" . PHP_EOL;

        if (!isset($this->status)) {
            throw new RuntimeException ('Status is not set.');
        } echo "Status: {$this -> status}" . PHP_EOL;

        if (!isset($this->gpa)) {
            throw new RuntimeException ('GPA is not set.');
        }
        echo "GPA: {$this -> gpa}" . PHP_EOL;

        echo "Study Time: {$this -> study_time}" . PHP_EOL;
    }

    public function __invoke()
    {
        $this->showMyself();
    }

}












