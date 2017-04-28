<?php namespace App\Http\Controllers;

use App\Models\HBPeople;
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
		return 'People';

	    //return HBPeople::all();
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