<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;


use App\Slide;
use App\Http\Requests\SlideRequest;
use App\Message;

class SlidesController extends Controller {

	private $slide;

    public function __construct(Slide $slide)
    {
        $this->middleware('auth');

        $this->slide = $slide;
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Message $message)
	{
		//
		$slides = $this->slide->get();

        return view('slides.index', compact('slides', 'message'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(Message $message)
	{
		//
		return view('slides.create', 'message');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(SlideRequest $request)
	{
		//
		$name      = \Input::get('name');
        $image          = 'example-image.jpg';

        if(\Input::hasFile('image'))
        {
            $image = \Input::file('image');
            $isiimage = file_get_contents($image);
            $upload = file_put_contents('file_upload/slides/'.$image->getClientOriginalName(), $isiimage);

            /*$image->move('file_upload', $image->getClientOriginalName());*/

            $image = $image->getClientOriginalName();
        }


        \DB::table('slides')->insert([
            'name'     => $name,
            'image'         => $image
        ]);

        \Alert::success('Data berhasil ditambah!', 'Berhasil!');

        return redirect('slides');
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
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
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
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Slide $slide)
	{
		//
		$slide->delete();

        \Alert::success('Data berhasil didelete!', 'Berhasil!');

        return redirect('slides');
	}

}
