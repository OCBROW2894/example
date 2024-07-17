<?php
namespace App\Models;

use Illuminate\Support\Arr;
class Job {
    public static function all(): array {
        return [
            ['id' => 1,
            'title'=> 'Software Engineer',
            'Salary'=> '$300,000'
        ], [
            'id' => 2,
            'title'=> 'Doctor',
            'Salary'=> '$1,000,000'
        ], [
            'id' => 3,
            'title'=> 'Lawyer',
            'Salary'=> '$500,000'
        ],[
            'id' => 4,
            'title'=> 'Pilot',
            'Salary'=> '$10,000,000'
        ]
      ];
    }

    public static function find(int $id): array {
        $jobs = self::all();
        return Arr::first(static::all(), fn($job) => $job['id'] == $id);
    }
}
