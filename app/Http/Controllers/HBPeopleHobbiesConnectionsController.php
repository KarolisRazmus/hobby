<?php namespace App\Http\Controllers;

use App\Models\HBPeopleHobbiesConnections;
use Illuminate\Routing\Controller;

class HBPeopleHobbiesConnectionsController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /hbpeoplehobbiesconnections
	 *
	 * @return Response
	 */
	public function index()
	{
		echo 'Connections';

		//return HBPeopleHobbiesConnections::all();
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /hbpeoplehobbiesconnections/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /hbpeoplehobbiesconnections
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /hbpeoplehobbiesconnections/{id}
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
	 * GET /hbpeoplehobbiesconnections/{id}/edit
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
	 * PUT /hbpeoplehobbiesconnections/{id}
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
	 * DELETE /hbpeoplehobbiesconnections/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}