<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Job extends Model {// or U can can change the Eloquent name to match the table name E.g. JobListing cause my table is job_listings
    use HasFactory;
    protected $table = 'job_listings';

    protected $fillable = ['employer_id', 'title', 'Salary'];
    /*
     * The line below disables all the guarded fields when left blank
     * Else can be used to guard the specified fields
     */
    // protected $guarded = [];


    public function employer(): BelongsTo
    {

        return $this->belongsTo(Employer::class);
    }

    public function tags(): BelongsToMany
    {

        return $this->belongsToMany(Tag::class, foreignPivotKey:"job_listing_id");
    }
}

