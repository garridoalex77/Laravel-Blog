<?php
class PostsController extends BaseController {

    public function __construct()
    {
        $this->beforeFilter('auth', array(
        	'except' => array(
        		'index',
        		'show'
        	)
        ));
    }

    public function validator()
    {
    	$validator = Validator::make(Input::all(), Post::$rules);
    	if ($validator->fails()) {
    		return Redirect::back()->withInput()->withErrors($validator);	
    	}
    }
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//how to use eager loading with paginate
		if (Input::has('q')) {
			$searchForm = Input::get('q');
			$posts = Post::where('title', 'like', '%$searchForm%')->paginate(4);
		} else {
			$posts = Post::with('user')->paginate(4);
		}
		return View::make('posts.index')->with('posts', $posts);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('posts.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$this->validator();
		$post = new Post();
		if (Input::hasFile('img')) {
	        $image = Input::file('img');
	        $originalName = $image->getClientOriginalName();
	        $imagePath = public_path() . '/img/';
	        $image->move($imagePath, $originalName);
			$post->img =  "/img/" . $originalName; 
		}
		$post->title = Input::get('title');
		$post->content = Input::get('content');
		$post->user_id = Auth::id();
		$post->save();
		Log::info($post);
		Session::flash('message', 'Post created');
		return Redirect::action('PostsController@show', $post->id);
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = Post::findOrFail($id);
		return View::make('posts.show')->with('post', $post);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = Post::find($id);
		return View::make('posts.edit')->with('post', $post);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
        $this->validator();
        $post = Post::find($id);
		$post->title = Input::get('title');
		$post->content = Input::get('content');
		$post->save();
		return Redirect::action('PostsController@show', $post->id);
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$post = Post::find($id);
		$post->delete();
		return Redirect::action('PostsController@index');
	}


}
