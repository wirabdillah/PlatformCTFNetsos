<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contest extends Model
{

    public function tasks() {
        return $this->belongsToMany('App\Task')->withPivot('points', 'start_date', 'end_date');
    }

    public function hints() {
        return $this->belongsToMany('App\Hint');
    }

    public function participations() {
    	return $this->hasMany('App\Participation');
    }

    public function submissions()
    {
        return $this->hasManyThrough('App\Submission', 'App\Participation');
    }

}
