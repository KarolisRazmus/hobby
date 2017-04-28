<?php namespace App\Http\Controllers;

use App\Models\HBHobbies;
use App\Models\HBCities;
use App\Models\HBPeopleHobbiesConnections;
use App\Models\HBPeople;
use Faker\Factory;
use Illuminate\Routing\Controller;

class HBDataGeneratorController extends Controller {


	public function generateCities( int $count = 5 )
    {
        $faker = Factory::create ();

        for ( $i = 0; $i < $count; $i ++ ) {
            HBCities::create ( [
                'id' => $faker->uuid,
                'name' => $faker->city,
            ] );
        }
    }

	public function generateHobbies(int $count = 5)
	{
        $faker = Factory::create();

        for ( $i = 0; $i < $count; $i ++ ) {
            HBHobbies::create ( [
                'id' => $faker->uuid,
                'name' => $faker->randomElement(['sport_activities', 'reading', 'games']),
            ]);
        }
	}

    public function generatePeople( int $count = 5 )
    {
        $faker = Factory::create ();

        for ( $i = 0; $i < $count; $i ++ ) {
            HBPeople::create ( [
                'id' => $faker->uuid,
                'hb_cities_id' => HBCities::all ()->random ()->id,
                'name' => $faker->name,
                'email' => $faker->email,
                'phone' => $faker->phoneNumber,
            ] );
        }
    }

	public function generatePeopleHobbiesConnections( int $count = 5)
	{
		$faker = Factory::create();

		for ( $i = 0; $i < $count; $i ++ ) {
		    HBPeopleHobbiesConnections::create ( [
                'id' => $faker->uuid,
                'people_id' => HBPeople::all ()->random()->id,
                'hobbies_id' => HBPeople::all ()->random()->id,
            ]);
        }
	}
}