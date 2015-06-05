<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\User;
use App\Http\Requests\UserFormRequest;



class UserController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//list all users with db facade
		
		$list = \DB::table('users')->get();
		return view('users.index')->with( 'list', $list);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{		
		return view('users.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * 
	 * @param  UserFormRequest 
	 * @return Response
	 */
	public function store(UserFormRequest $request)
	{
		
		$user = new User;
		$user->name = $request->name;
		$user->email = $request->email;
		$user->password = \Hash::make($request->password);
		$user->save();

		return \Redirect::route('products.create')->with('message', 'Welcome as a new Customer!');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$user = User::findOrFail($id);

		return view('users.show')->with('user', $user);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$user = User::findOrFail($id);

		return view('users.edit')->with('user', $user);
	}

	/**
	 * Update the specified resource in storage.
	 * @param  UserFormRequest $request
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, UserFormRequest $request)
	{
		$user = User::findOrFail($id);
		$user->update($request->all());

		return view('users.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$user = User::findOrFail($id);
		$user = delete();

		return view('users.index');
	}

}
