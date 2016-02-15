<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;


use App\Category;
use App\Http\Requests\CategoryRequest;
use App\Message;

class CategoriesController extends Controller {

	private $category;

    public function __construct(Category $category)
    {
        $this->middleware('auth');

        $this->category = $category;
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Message $message)
	{
		//
		$categories = $this->category->orderBy('id', 'desc')->get();

        return view('categories.index', compact('categories', 'message'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(Message $message)
	{
		//
		return view('categories.create', compact('message'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CategoryRequest $request)
	{
		//
		$this->validate($request, [
            'image' => 'required'
        ]);

        $firstname      = \Input::get('firstname');
        $lastname       = \Input::get('lastname');

        $image          = 'example-image.jpg';

        if(\Input::hasFile('image'))
        {
            $image = \Input::file('image');
            $isiimage = file_get_contents($image);
            $upload = file_put_contents('file_upload/'.$image->getClientOriginalName(), $isiimage);

            /*$image->move('file_upload', $image->getClientOriginalName());*/

            $image = $image->getClientOriginalName();
        }


        \DB::table('categories')->insert([
            'firstname'     => $firstname,
            'lastname'      => $lastname,
            'image'         => $image
        ]);

        \Alert::success('Data berhasil ditambah!', 'Berhasil!');

        return redirect('categories');
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
	public function edit(Category $category, Message $message)
	{
		//
		return view('categories.edit', compact('category', 'message'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(CategoryRequest $request, Category $category)
	{
		//
		$category->fill($request->input())->save();
        
        if(\Input::hasFile('image'))
        {
            $image = \Input::file('image');
            $isiimage = file_get_contents($image);
            $upload = file_put_contents('file_upload/'.$image->getClientOriginalName(), $isiimage);

            /*$image->move('file_upload', $image->getClientOriginalName());*/

            $image = $image->getClientOriginalName();

            /* proses simpan */
            $category->image = $image;
            $category->save();

        } 
        
        \Alert::success('Data berhasil diedit!', 'Berhasil!');

        return redirect('categories');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Category $category)
	{
		//
		$category->delete();

        \Alert::success('Data berhasil didelete!', 'Berhasil!');

        return redirect('categories');
	}

}
