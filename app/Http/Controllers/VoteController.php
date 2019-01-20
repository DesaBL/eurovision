<?php

namespace App\Http\Controllers;

use App\Country;
use App\Vote;
use Illuminate\Http\Request;

class VoteController extends Controller
{
    /**
     * Return voting page
     *
     * @param Country $country
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function index(Country $country)
    {
        if($country->givenVotes()->count()){
            return redirect()->back()->withErrors(["You can't vote multiple times by same country"]);
        }

        $countries = Country::where('id', '<>', $country->id)->orderBy('name')->pluck('name', 'id');
        return view('voting')->with('country', $country)->with('countries', $countries);
    }

    /**
     * Store votes
     *
     * @param Country $country
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Country $country, Request $request)
    {
        $this->validate($request,[
           'country_1' => "required|exists:countries,id|not_in:$country->id",
           'country_2' => "required|exists:countries,id|not_in:$country->id",
           'country_3' => "required|exists:countries,id|not_in:$country->id",
           'country_4' => "required|exists:countries,id|not_in:$country->id",
           'country_5' => "required|exists:countries,id|not_in:$country->id",
           'country_6' => "required|exists:countries,id|not_in:$country->id",
           'country_7' => "required|exists:countries,id|not_in:$country->id",
           'country_8' => "required|exists:countries,id|not_in:$country->id",
           'country_10' => "required|exists:countries,id|not_in:$country->id",
           'country_12' => "required|exists:countries,id|not_in:$country->id",
        ]);
        $countryVotes = $request->only(['country_1', 'country_2', 'country_3', 'country_4', 'country_5', 'country_6', 'country_7','country_8','country_10', 'country_12']);
        $differentElements = array_count_values($countryVotes);
        /**
         * Check if some countries appears more than once in votes
         */
        if(count($differentElements) < 10){
            return redirect()->back()->withErrors(["You can't vote multiple times for same country"]);
        } else {
            foreach ($countryVotes as $votes => $votedForId) {
                $numberOfVotes = explode('_', $votes)[1];
                $vote = new Vote();
                $vote->votes = $numberOfVotes;
                $vote->voted = $country->id;
                $vote->voted_for = $votedForId;
                $vote->save();
            }
        }

        return redirect()->route('results');
    }

    /**
     * Get results page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function results()
    {
        $countries = Country::join('votes', 'votes.voted_for', '=', 'countries.id')->selectRaw('sum(votes) as sum, name, countries.id, code')->groupBy('voted_for')->orderBy('sum', 'desc')->get();

        if($countries->count() == 0){
            return view('results')->with('countries', $countries)->withErrors(["We are still waiting for first votes!"]);
        }

        return view('results')->with('countries', $countries);
    }
}
