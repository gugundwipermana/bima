<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Factory;
use App\Message;

class FactoriesController extends Controller {

	private $factory;

    public function __construct(Factory $factory)
    {
        $this->middleware('auth');

        $this->factory = $factory;
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Message $message)
	{
		//
		$factories = $this->factory->get();

        return view('factories.index', compact('factories', 'message'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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
	public function edit(Factory $factory, Message $message)
	{
		//
		return view('factories.edit', compact('factory', 'message'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, Factory $factory)
	{
		//
		$factory->fill($request->input())->save();

        $title_signup    = \Input::get('title_signup1');
        if($title_signup != null) {

            $title_signup1              = \Input::get('title_signup1');
            $title_signup2              = \Input::get('title_signup2');
            $description1               = \Input::get('description1');
            $description2               = \Input::get('description2');

            $title_signup               = $title_signup1."indogdp".$title_signup2;
            $description                = $description1."indogdp".$description2;

            $factory->title_signup      = $title_signup;
            $factory->description       = $description;
            $factory->save();

        }


        \Alert::success('Data berhasil diedit!', 'Berhasil!');

        
        if($title_signup != null) {
            return redirect('messages');
        } else {
            return redirect('factories');
        }

        
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
