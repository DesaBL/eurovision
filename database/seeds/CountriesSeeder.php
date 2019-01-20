<?php

use Illuminate\Database\Seeder;

class CountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->delete();
        $countries = array(
            array('code' => 'AL', 'name' => 'Albania'),
            array('code' => 'AT', 'name' => 'Austria'),
            array('code' => 'AZ', 'name' => 'Azerbaijan'),
            array('code' => 'BY', 'name' => 'Belarus'),
            array('code' => 'BE', 'name' => 'Belgium'),
            array('code' => 'BA', 'name' => 'Bosnia and Herzegovina'),
            array('code' => 'BG', 'name' => 'Bulgaria'),
            array('code' => 'HR', 'name' => 'Croatia (Hrvatska)'),
            array('code' => 'CY', 'name' => 'Cyprus'),
            array('code' => 'CZ', 'name' => 'Czech Republic'),
            array('code' => 'DK', 'name' => 'Denmark'),
            array('code' => 'EE', 'name' => 'Estonia'),
            array('code' => 'FI', 'name' => 'Finland'),
            array('code' => 'FR', 'name' => 'France'),
            array('code' => 'GE', 'name' => 'Georgia'),
            array('code' => 'DE', 'name' => 'Germany'),
            array('code' => 'GR', 'name' => 'Greece'),
            array('code' => 'HU', 'name' => 'Hungary'),
            array('code' => 'IS', 'name' => 'Iceland'),
            array('code' => 'IE', 'name' => 'Ireland'),
            array('code' => 'IL', 'name' => 'Israel'),
            array('code' => 'IT', 'name' => 'Italy'),
            array('code' => 'LV', 'name' => 'Latvia'),
            array('code' => 'LT', 'name' => 'Lithuania'),
            array('code' => 'LU', 'name' => 'Luxembourg'),
            array('code' => 'MK', 'name' => 'Macedonia'),
            array('code' => 'MT', 'name' => 'Malta'),
            array('code' => 'NL', 'name' => 'Netherlands'),
            array('code' => 'NO', 'name' => 'Norway'),
            array('code' => 'PL', 'name' => 'Poland'),
            array('code' => 'PT', 'name' => 'Portugal'),
            array('code' => 'RO', 'name' => 'Romania'),
            array('code' => 'RU', 'name' => 'Russian Federation'),
            array('code' => 'RS', 'name' => 'Serbia'),
            array('code' => 'SK', 'name' => 'Slovakia'),
            array('code' => 'SI', 'name' => 'Slovenia'),
            array('code' => 'ES', 'name' => 'Spain'),
            array('code' => 'SE', 'name' => 'Sweden'),
            array('code' => 'CH', 'name' => 'Switzerland'),
            array('code' => 'TR', 'name' => 'Turkey'),
            array('code' => 'UA', 'name' => 'Ukraine'),
            array('code' => 'GB', 'name' => 'United Kingdom'),
        );
        DB::table('countries')->insert($countries);
    }
}
