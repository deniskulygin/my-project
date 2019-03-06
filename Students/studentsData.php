<?php

Class studentsData
{
    /**
     * @var array
     */
    private $studentsData =
    [
        'mikebarnes' => [
            'firstName' => 'Mike',
            'secondName' => 'Barnes',
            'gender' => 'male',
            'status' => 'freshman',
            'gpa' => 4,
        ],
        'jimnickerson' => [
            'firstName' => 'Jim',
            'secondName' => 'Nickerson',
            'gender' => 'male',
            'status' => 'freshman',
            'gpa' => 3,
        ],
        'jackindabox' => [
            'firstName' => 'Jack',
            'secondName' => 'Indabox',
            'gender' => 'male',
            'status' => 'junior',
            'gpa' => 2.5,
        ],
        'janemiller' => [
            'firstName' => 'Jane',
            'secondName' => 'Miller',
            'gender' => 'female',
            'status' => 'senior',
            'gpa' => 3.6,
        ],
        'maryscott' => [
            'firstName' => 'Mary',
            'secondName' => 'Scott',
            'gender' => 'female',
            'status' => 'senior',
            'gpa' => 2.7,],
    ];


    /**
     * @var array
     */
    private $studentsStudyTime =
        [
            'mikebarnes' => '60',
            'jimnickerson' => '100',
            'jackindabox' => '40',
            'janemiller' => '300',
            'maryscott' => '1000',
        ];

    /**
     * @return array
     */
    public function getStudentsStudyTime(): array
    {
        return $this->studentsStudyTime;
    }

    /**
     * @return array
     */
    public function getStudentsData(): array
    {
        return $this->studentsData;
    }
}









