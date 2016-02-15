<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Product;
use App\Category;
use App\Message;

use App\Http\Requests\ProductRequest;

class ProductsController extends Controller {

	private $product;

    public function __construct(Product $product)
    {
        $this->middleware('auth');

        $this->product = $product;
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Message $message)
	{
		//
		$products = $this->product->orderBy('id', 'desc')->get();

        return view('products.index', compact('products', 'message'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(Message $message)
	{
		//
		$categories = Category::lists('firstname', 'id');

        return view('products.create', compact('categories', 'message'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(ProductRequest $request)
	{
		//
		$this->validate($request, [
            'image' => 'required'
        ]);
        
        $category_id    = \Input::get('category_id');
        $title          = \Input::get('title');
        $caption        = \Input::get('caption');
        $description    = \Input::get('description');

        $image          = 'example-image.jpg';
        $catalogue      = 'catalogue.pdf';
 
        if(\Input::hasFile('image'))
        {
            $image = \Input::file('image');
            $isiimage = file_get_contents($image);
            $upload = file_put_contents('file_upload/'.$image->getClientOriginalName(), $isiimage);
            //$upload = file_put_contents('file_upload/asli/'.$image->getClientOriginalName(), $isiimage);

            /*$image->move('file_upload', $image->getClientOriginalName());*/

            //resize
            //$imageRes = \Image::make(sprintf('file_upload/%s', $image->getClientOriginalName()))->resize(500, 375)->save();

            $image = $image->getClientOriginalName();
        }

        if(\Input::hasFile('catalogue'))
        {
            $catalogue = \Input::file('catalogue');
            $isic = file_get_contents($catalogue);
            $upload = file_put_contents('file_upload/catalogue/'.$catalogue->getClientOriginalName(), $isic);

            /*$image->move('file_upload', $image->getClientOriginalName());*/

            $catalogue = $catalogue->getClientOriginalName();
        }

        \DB::table('products')->insert([
            'category_id'   => $category_id,
            'title'         => $title,
            'caption'       => $caption,
            'description'   => $description,
            'image'         => $image,
            'catalogue'     => $catalogue
        ]);

        \Alert::success('Data berhasil ditambah!', 'Berhasil!');

        return redirect('products');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Product $product, Message $message)
	{
		//
		return view('products.show', compact('product', 'message'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Product $product, Message $message)
	{
		//
		$categories = Category::lists('firstname', 'id');

        return view('products.edit', compact('product', 'categories', 'message'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(ProductRequest $request, Product $product)
	{
		//
		$product->fill($request->input())->save();

        if(\Input::hasFile('image'))
        {
            $image = \Input::file('image');
            $isiimage = file_get_contents($image);
            $upload = file_put_contents('file_upload/'.$image->getClientOriginalName(), $isiimage);

            /*$image->move('file_upload', $image->getClientOriginalName());*/

            $image = $image->getClientOriginalName();

            /* proses simpan */
            $product->image = $image;
            $product->save();

        } 

        if(\Input::hasFile('catalogue'))
        {
            $catalogue = \Input::file('catalogue');
            $isic = file_get_contents($catalogue);
            $upload = file_put_contents('file_upload/catalogue/'.$catalogue->getClientOriginalName(), $isic);

            /*$image->move('file_upload', $image->getClientOriginalName());*/

            $catalogue = $catalogue->getClientOriginalName();

            $product->catalogue = $catalogue;
            $product->save();
        }

        \Alert::success('Data berhasil diedit!', 'Berhasil!');

        return redirect('products');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Product $product)
	{
		//
		$product->delete();

        \Alert::success('Data berhasil didelete!', 'Berhasil!');

        return redirect('products');
	}

}
