<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;


    public function jobs()
    {
        return $this->belongsToMany(Job::class, relatedPivotKey: 'job_listing_id'); // while related pivot key is what inside the small table ( tag )
    }

    public function employers()
    {
        return $this->belongsToMany(Employer::class);
    }
}
