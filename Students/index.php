<?php

require_once  __DIR__.'\studentsService.php';


$studentsData = (new studentsData())->getStudentsData();

foreach ($studentsData as $studentName => $data) {
    $studentsData[$studentName] = new Student();
    $studentsData[$studentName]
        ->setFirstName($data['firstName'])
        ->setLastName($data['secondName'])
        ->setGender($data['gender'])
        ->setStatus($data['status'])
        ->setGPA($data['gpa']);
}

echo '                          | Without Study Time |'.PHP_EOL;

foreach($studentsData as $student) {
    if (!($student instanceof Student)) {
        continue;
    }
    $student();
    PHP_EOL;
}

$studentsStudyTime = (new studentsData())->getStudentsStudyTime();

foreach ($studentsStudyTime as $studentName => $data) {
    $studentsData[$studentName]->setStudyTime($data);
}


echo '                          | With Study Time |'.PHP_EOL;

foreach($studentsData as $student) {
    if (!($student instanceof Student)) {
        continue;
    }
    $student();
    PHP_EOL;
}
