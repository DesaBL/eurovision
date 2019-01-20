<?php

namespace Tests\Unit;

use App\Country;
use App\Vote;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CheckCountriesTest extends TestCase
{
    /**
     * Check if the country seeder is executed
     *
     * @return void
     */
    public function testCheckIfCountrySeederIsExecuted()
    {
        $this->assertEquals(42, Country::count());
    }

    /**
     * Check if url for image is correct
     *
     * @return void
     */
    public function testCheckCountryImageUrl()
    {
        $country = Country::where('name', 'France')->firstOrFail();
        $this->assertEquals("https://www.countryflags.io/FR/shiny/64.png", $country->flag);
    }

    /**
     * Take the random country and check if that country already voted. After that, check if css class returned by Country class is correct
     *
     * @return void
     */
    public function testCheckClassOfCountry()
    {
        $country = Country::inRandomOrder()->firstOrFail();
        $votes = Vote::where('voted', $country->id)->count();
        if($votes > 0){
            $this->assertEquals('isDisabled', $country->hasVoted);
        } else {
            $this->assertEquals('', $country->hasVoted);
        }
    }
}
