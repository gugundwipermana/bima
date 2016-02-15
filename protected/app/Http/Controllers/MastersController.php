<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Master;
use App\Message;

class MastersController extends Controller {

	private $master;

    public function __construct(Master $master)
    {
        $this->middleware('auth');

        $this->master = $master;
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Message $message)
	{
		//
		$masters = $this->master->get();

        return view('masters.index', compact('masters', 'message'));
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
	public function edit(Master $master, Message $message)
	{
		//
		$term_baru = explode('indogdp', $master->term);

        $master->term1 = $term_baru[0];
        $master->term2 = $term_baru[1];

        $privacy_baru = explode('indogdp', $master->privacy);
        $master->privacy1 = $privacy_baru[0];
        $master->privacy2 = $privacy_baru[1];


        return view('masters.edit', compact('master', 'message'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, Master $master)
	{
		//
		$term1              = \Input::get('term1');
        $term2              = \Input::get('term2');
        $privacy1           = \Input::get('privacy1');
        $privacy2           = \Input::get('privacy2');
        $facebook           = \Input::get('facebook');
        $twitter            = \Input::get('twitter');



        $term               = $term1."indogdp".$term2;
        $privacy            = $privacy1."indogdp".$privacy2;

        $master->term       = $term;
        $master->privacy    = $privacy;
        $master->facebook   = $facebook;
        $master->twitter    = $twitter;
        $master->save();

        \Alert::success('Data berhasil diedit!', 'Berhasil!');

        return redirect('masters');
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
