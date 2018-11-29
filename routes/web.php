<?php
use Illuminate\Http\Request;
use App\Models\Post;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::resource('/', 'FrontEnd\BlogController@index');
// Route::get('/post/{slug}', 'FrontEnd\BlogController@post');
Route::get('/', function (Request $request) {
	$post= Post::when($request->search, function($query) use($request) {
		$search = $request->search;

		return $query->where('title', 'like', "%$search%")
		->orWhere('body', 'like', "%$search%")
		->orWhere('slug', 'like', "%$search%");
	})->with('category')
                    // ->withCount('comments')
                    // ->published()
	->simplePaginate(5); 


        // dd($post);
	return view('frontend.index', compact('post')); 
});

Route::get('/post/{slug}', function(Request $request){
	$post= Post::where('slug',$request->slug)->with('category')
                    // ->withCount('comments')
                    // ->published()
	->first();
        // dd($post->file_name);
	return view('frontend.post', compact('post'));
});




Route::group(['prefix' => 'admin'], function () {
	Voyager::routes();
});
