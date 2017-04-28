<?php namespace App\Http\Controllers;

use App\Models\HBCities;
use App\Models\HBHobbies;
use App\Models\HBPeople;
use App\Models\HBPeopleHobbiesConnections;
use Illuminate\Routing\Controller;

class HBPeopleController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /hbpeople
	 *
	 * @return Response
	 */
	public function index()
	{

	    //return HBPeople::all();
	}

    public function form()
    {
        $configuration['cities'] = HBCities::get()->pluck('name', 'id')->toArray();

        $configuration['hobbies'] = HBHobbies::get()->pluck('name', 'id')->toArray();

        //dd($configuration['hobbies']);

        return view('content.form_person', $configuration);
    }

    public function addPerson (  )
    {

        $data = request()->all();

        $record = HBPeople::create ([
            'name' => $data['person'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'hb_cities_id' => $data['city'],
        ]);


        $record->connection()->sync($data['hobbies']);

        //dd($record['id']);



        //connection( $data['hobbies'] );

//        foreach ($data['hobbies'] as $hobby) {
//            HBPeopleHobbiesConnections::create ( [
//                'people_id' => $record['id'],
//                'hobbies_id' => $hobby,
//                ] );
//        }

        $record['cities'] = HBCities::get()->pluck('name', 'id')->toArray();
        $record['hobbies'] = HBCities::get()->pluck('name', 'id')->toArray();

        return view('content.form_person', $record->toArray());
    }


    /**
	 * Show the form for creating a new resource.
	 * GET /hbpeople/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /hbpeople
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /hbpeople/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /hbpeople/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /hbpeople/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /hbpeople/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}