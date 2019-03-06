<?php

require_once  __DIR__.'\studentsService.php';


$studentsData = (new studentsData())->getStudentsData();

foreach ($studentsData as $studentName => $data) {
    $studentsData[$studentName] = new Student($data['firstName'], $data['secondName'], $data['gender'], $data['status'], $data['gpa']);
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
    echo $student.PHP_EOL;
    $student();
    PHP_EOL;
}
