<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Job extends Model
{
    use HasFactory;
    //protected $fillable = ['title', 'salary', 'employer_id'];

    protected $guarded = [];
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

    public function tags()
    {
        return $this->belongsToMany(Tag::class, foreignPivotKey: 'job_listing_id');  // Foreing pivot key is what is the Parent table ( Job ) and used to get the small one 
    }
}