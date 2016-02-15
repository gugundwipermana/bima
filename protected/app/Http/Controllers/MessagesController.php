<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Message;
use App\Http\Requests\MessageRequest;

class MessagesController extends Controller {

	private $message;

    public function __construct(Message $message)
    {
        //$this->middleware('auth');

        $this->message = $message; 
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$messages = $this->message->orderBy('created_at', 'desc')->get();

        $factories = \DB::table('factories')->get();

        return view('messages.index', compact('messages', 'factories'));
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
	public function store(MessageRequest $request, Message $message)
	{
		//
		$message->create($request->all());

        \Alert::success('Data berhasil ditambah!', 'Berhasil!');

        return redirect('/en'); 
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Message $message)
	{
		//
		\DB::table('messages')
            ->where('id', $message->id)
            ->update(['status' => 1]);

        return view('messages.show', compact('message'));
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

	public function editdes($id)
    {
        //
        //return view('messages.edit', compact('factory'));
        $factory = \DB::table('factories')->where('id', '=', $id)->first();

        $title_baru = explode('indogdp', $factory->title_signup);

        $factory->title_signup1 = $title_baru[0];
        $factory->title_signup2 = $title_baru[1];

        $des_baru = explode('indogdp', $factory->description);
        $factory->description1 = $des_baru[0];
        $factory->description2 = $des_baru[1];
        
        return view('messages.edit', compact('factory'));
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
	public function destroy(Message $message)
	{
		//
		$message->delete();

        \Alert::success('Data berhasil didelete!', 'Berhasil!');

        return redirect('messages');
	}

}
