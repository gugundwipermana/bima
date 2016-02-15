<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;


use App\User;
use App\Http\Requests\UserRequest;
use App\Message;

class UsersController extends Controller {

	private $user;

    public function __construct(User $user)
    {
        $this->middleware('auth');

        $this->user = $user;
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Message $message)
	{
		//

		$users = $this->user->get();

        return view('users.index', compact('users', 'message'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(Message $message)
	{
		//
		return view('users.create', 'message');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(UserRequest $request, User $user)
	{
		//
		$this->validate($request, [
            'password' => 'required|min:6'
        ]);

        $_token     = \Input::get('_token');
        $name       = \Input::get('name');
        $email      = \Input::get('email');
        $password   = \Input::get('password');

        User::create([
          'name'    => $name,
          'email'   => $email,
          'password'=> bcrypt($password),
          'remember_token'  => $_token
        ]);

        \Alert::success('Data berhasil ditambah!', 'Berhasil!');

        return redirect('users');
	}

	/**
	 * Display the specified resource.
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
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(User $user, Message $message)
	{
		//
		return view('users.edit', compact('user', 'message'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(UserRequest $request, User $user)
	{
		//
		$user->fill($request->input())->save();
        if(\Input::get('password') != null)
        {
          $user->password = bcrypt(\Input::get('password'));
          $user->save();
        }

        \Alert::success('Data berhasil diedit!', 'Berhasil!');

        return redirect('users');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(User $user)
	{
		//
		$user->delete();

        \Alert::success('Data berhasil didelete!', 'Berhasil!');

        return redirect('users');
	}

}
