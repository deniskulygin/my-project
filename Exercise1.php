<?php

Class Student
{

private $firstName;

private $lastName;

private $gender;

private $status;

private $gpa;

private $study_time = 0;

public function setFirstName($firstName)
{
	$this -> firstName = $firstName;
}

public function setLastName($lastName)
{
	$this -> lastName = $lastName;
}

public function setGender($gender)
{
	if($gender === 'male' || $gender === 'female') {
        $this -> gender = $gender;
    } else {
        throw new RuntimeException ('Gender can be only <male> or <female>');
	}
}


public function setStatus($status)
{
	if($status === 'freshman' || $status=== 'sophomore' || $status === 'junior' || $status === 'senior') {
        $this -> status = $status;
    } else {
        throw new RuntimeException ('Status can be only <freshman> or <sophomore> or <junior> or <senior>');
	}
}

public function setGPA($gpa)
{
	$gpa > 4.0 ? $this -> gpa = 4.0 : $this -> gpa = $gpa;
}


public function setStudyTime($study_time = 0)
{
    $this -> study_time = $study_time;
	if($this -> study_time !== 0) {
        return $this -> study_time = $this -> gpa + log($this -> study_time);
    } else {
        return $this -> study_time;
    }
}

public function showMyself()
{
	if (isset($this -> firstName)) {
        echo "First Name: {$this -> firstName}" . PHP_EOL;
    } else {
        throw new RuntimeException('First Name is not set.');
	}
	if (isset($this -> lastName)) {
        echo "Last Name: {$this -> lastName}" . PHP_EOL;
    } else {
        throw new RuntimeException ('Last Name is not set.');
	}
	if (isset($this -> gender)) {
        echo "Gender: {$this -> gender}" . PHP_EOL;
    } else {
        throw new RuntimeException ('Gender is not set.');
    }
	if (isset($this -> status)) {
        echo "Status: {$this -> status}" . PHP_EOL;
    } else {
        throw new RuntimeException ('Status is not set.');
    }
	if (isset($this -> gpa)) {
        echo "GPA: {$this -> gpa}" . PHP_EOL;
    } else {
        throw new RuntimeException ('GPA is not set.');
    }

    echo "Study Time: {$this -> study_time}" . PHP_EOL;
}
}

$studentList = ['mikebarnes', 'jimnickerson', 'jackindabox', 'janemiller', 'maryscott'];

foreach($studentList as $key => $v) {
    $studentList[$v] = new Student();
}


$studentList['mikebarnes'] -> setFirstName('Mike');
$studentList['mikebarnes'] -> setLastName('Barnes');
$studentList['mikebarnes'] -> setGender('male');
$studentList['mikebarnes'] -> setStatus('freshman');
$studentList['mikebarnes'] -> setGPA(4);


$studentList['jimnickerson'] -> setFirstName('Jim');
$studentList['jimnickerson'] -> setLastName('Nickerson');
$studentList['jimnickerson'] -> setGender('male');
$studentList['jimnickerson'] -> setStatus('freshman');
$studentList['jimnickerson'] -> setGPA(3);

$studentList['jackindabox'] -> setFirstName('Jack');
$studentList['jackindabox'] -> setLastName('Indabox');
$studentList['jackindabox'] -> setGender('male');
$studentList['jackindabox'] -> setStatus('junior');
$studentList['jackindabox'] -> setGPA(2.5);

$studentList['janemiller'] -> setFirstName('Jane');
$studentList['janemiller'] -> setLastName('Miller');
$studentList['janemiller'] -> setGender('female');
$studentList['janemiller'] -> setStatus('senior');
$studentList['janemiller'] -> setGPA(3.6);

$studentList['maryscott'] -> setFirstName('Mary');
$studentList['maryscott'] -> setLastName('Scott');
$studentList['maryscott'] -> setGender('female');
$studentList['maryscott'] -> setStatus('senior');
$studentList['maryscott'] -> setGPA(2.7);

foreach($studentList as $key => $v) {
    !is_object($studentList[$v]) ?: $studentList[$v] -> showMyself();
    PHP_EOL;
}

$studentList['mikebarnes'] -> setStudyTime(60);
$studentList['jimnickerson'] -> setStudyTime(100);
$studentList['jackindabox'] -> setStudyTime(40);
$studentList['janemiller'] -> setStudyTime(300);
$studentList['maryscott'] -> setStudyTime(1000);

foreach($studentList as $key => $v) {
    !is_object($studentList[$v]) ?: $studentList[$v] -> showMyself();
    PHP_EOL;
}








