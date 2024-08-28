<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Job
{
    public static function all(): array
    {
        return $jobs = [
            [
                'id' => '1',
                'title' => 'Director',
                'salary' => '$50,000',
            ],
            [
                'id' => '2',
                'title' => 'Programmer',
                'salary' => '$100,000',
            ],
            [
                'id' => '3',
                'title' => 'Artist',
                'salary' => '$25,000',
            ],
        ];

    }

    public static function find(int $id): array
    {
        $job = Arr::first(
            static::all(),
            fn($job) => $job['id'] == $id,
        );

        if (!$job) {
            abort(404);
        }

        return $job;
    }
}