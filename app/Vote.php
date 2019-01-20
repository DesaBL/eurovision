<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    /**
     * Get country which voted
     *
     * @return Country
     */
    public function voted()
    {
        return $this->belongsTo(Country::class, 'voted');
    }

    /**
     * Get country which received a votes
     *
     * @return Country
     */
    public function votedFor()
    {
        return $this->belongsTo(Country::class, 'voted_for');
    }
}
