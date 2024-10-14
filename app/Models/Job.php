<?php

namespace App\Models;

class Job
{
    public static function getAllJobs(): array
    {
        return [
            [
                'id' => '1',
                'title' => 'Director',
                'salary' => '$50,000',
            ],
            [
                'id' => '2',
                'title' => 'Programmer',
                'salary' => '$40,000',
            ],
            [
                'id' => '3',
                'title' => 'Doctor',
                'salary' => '$30,000',
            ],

        ];
    }
}
