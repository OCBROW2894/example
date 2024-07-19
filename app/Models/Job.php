<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model {// or U can can change the Eloquent name to match the table name E.g. JobListing cause my table is job_listings
    protected $table = 'job_listings';

    protected $fillable = ['title', 'Salary'];
}

