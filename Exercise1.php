<?php

Class Student
{

private $firstname;

private $lastname;

private $gender;

private $status;

private $gpa;

private $study_time;

public function setFirstName($firstname)
{
	$this -> firstname = $firstname;
}

public function setLastName($lastname)
{
	$this -> lastname = $lastname;
}

public function setGender($gender)
{
	if($gender === 'male' || $gender === 'male') {
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


public function studyTime(int $study_time)
{
	if(isset($this -> gpa)) {
			$this -> study_time = $this -> gpa + log($study_time);
		} else {
		 	throw new RuntimeException ('GPA is not set, we cannot calculate Study Time');
		}
}

public function showMyself()
{
	if (isset($this -> firstname)) {
			echo "First Name: {$this -> firstname}" . PHP_EOL;
		} else {
			throw new RuntimeExeption ('First Name is not set.');
	}
	if (isset($this -> lastname)) {
	 		echo "Last Name: {$this -> lastname}" . PHP_EOL;
	 	} else {
	 		new RuntimeExeption ('Last Name is not set.');
	}
	if (isset($this -> gender)) {
			echo "Gender: {$this -> gender}" . PHP_EOL;
		} else {
			new RuntimeExeption ('Gender is not set.');
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
	
	if (isset($this -> study_time)) {
			echo "Study Time: {$this -> study_time}" . PHP_EOL;
		} else {
			throw new RuntimeException ('Study Time is not set.');
		}
}

}

$a = new Student;
$a -> setFirstName('Denis');
$a -> setLastName('Kulygin');
$a -> setGender('male');
$a -> setStatus('senior');
$a -> setGPA(5);
$a -> studyTime(100);
$a -> showMyself();
