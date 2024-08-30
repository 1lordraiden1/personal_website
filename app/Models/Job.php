<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Job extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'salary'];
    protected $table = "job_listings";


    /*  public static function find(int $id): array
     {
         $job = Arr::first(
             static::all(),
             fn($job) => $job['id'] == $id,
         );

         if (!$job) {
             abort(404);
         }

         return $job;
     } */

    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }
}