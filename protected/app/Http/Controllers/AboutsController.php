<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\About;
use App\Message;

class AboutsController extends Controller {

	private $about;

    public function __construct(About $about)
    {
        $this->middleware('auth');

        $this->about = $about;
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Message $message)
	{
		//
		$abouts = $this->about->get();

        return view('abouts.index', compact('abouts', 'message'));
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
	public function edit(About $about, Message $message)
	{
		//
		$title_baru = explode('indogdp', $about->title);

        $about->title1 = $title_baru[0];
        $about->title2 = $title_baru[1];

        $des_baru = explode('indogdp', $about->description);
        $about->description1 = $des_baru[0];
        $about->description2 = $des_baru[1];

        return view('abouts.edit', compact('about', 'message'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, About $about)
	{
		//
		$title1             = \Input::get('title1');
        $title2             = \Input::get('title2');
        $description1       = \Input::get('description1');
        $description2       = \Input::get('description2');

        $title              = $title1."indogdp".$title2;
        $description        = $description1."indogdp".$description2;

        $about->title       = $title;
        $about->description = $description;
        $about->save();

        \Alert::success('Data berhasil diedit!', 'Berhasil!');

        return redirect('abouts');
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
