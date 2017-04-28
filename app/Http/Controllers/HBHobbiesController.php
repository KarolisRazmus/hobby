<?php namespace App\Http\Controllers;

use App\Models\HBHobbies;
use Illuminate\Routing\Controller;

class HBHobbiesController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /hbhobbies
	 *
	 * @return Response
	 */
	public function index()
	{
		return 'Hobbies';

        //return HBHobbies::all();
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /hbhobbies/create
	 *
	 * @return Response
	 */


    public function form()
    {
        return view('content.form_hobby');
    }

    public function addHobby (  )
    {

        $data = request()->all();

        $record = HBHobbies::create ([
            'name' => $data['hobby'],

        ]);

        return view('content.form_hobby', $record->toArray());
    }

	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /hbhobbies
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /hbhobbies/{id}
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
	 * GET /hbhobbies/{id}/edit
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
	 * PUT /hbhobbies/{id}
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
	 * DELETE /hbhobbies/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}