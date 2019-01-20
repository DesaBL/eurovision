<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    /**
     * Get flag for the country
     *
     * @return string Image url
     */
    public function getFlagAttribute()
    {
        return "https://www.countryflags.io/$this->code/shiny/64.png";
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function givenVotes()
    {
        return $this->hasMany(Vote::class, 'voted');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function myVotes()
    {
        return $this->hasMany(Vote::class, 'voted_for');
    }

    /**
     * Return votes for country
     *
     * @return integer Votes for country
     */
    public function getSumOfVotesAttribute()
    {
        return $this->myVotes()->sum('votes');
    }

    /**
     * If country already voted, return 'isDisabled', otherwise return empty string
     *
     * @return string
     */
    public function getHasVotedAttribute()
    {
        if($this->givenVotes()->count()){
            return "isDisabled";
        } else {
            return "";
        }
    }
}
