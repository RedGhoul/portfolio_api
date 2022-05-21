<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobPoint extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'job_points';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['taskdone', 'job_id'];


    public function job()
    {
        return $this->belongsTo(Job::class);
    }

}
