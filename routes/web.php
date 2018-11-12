<?php

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

Route::get('/', function () {

    
    return view('lakomso');
});

Route::get('/blogs', function () {
    $todosNoDatubazes = \App\Todo::orderBy('updated_at', 'desc')->get();
    
    return view('blogs', [
        'todos' => $todosNoDatubazes,
    ]);
});


Route::any('/addnew', function () {

    $jaunsTodo = new  \App\Todo;

    $jaunsTodo->title = \Request('note');
    $jaunsTodo->body = \Request('body-text');
    $jaunsTodo->is_done = false;

    $jaunsTodo->save();

    return redirect('/home');
    

 });


 Route::get('/blogs/delete/{id}', function($id){
    $todo = \App\Todo::find($id);
    if ($todo != null ){
        $todo->delete();
    }
    
    return redirect('/blogs');
});

Route::get('/blogs/{id}', function($id) {
    $todo = \App\Todo::find($id);
    
    return view('blog-page', [
        'todo' => $todo
    ]);
    
    /*$todo = \App\Todo::find($id);
    return view('blog-page',[
        'todos'=>$todo,
    ]);
    
    $todosNoDatubazes = \App\Todo::find($id)->get();
    
    return view('blog-page', [
        'todos' => $todo->id,
    ]);*/
 });



Route::get('/contacts', function () {

    
    return view('contacts');
});

Route::get('/login', function () {

    
    return view('home');
});









/* Route::get('/', function () {

   $todosNoDatubazes = \App\Todo::orderBy('updated_at', 'asc')->get();


   
    return view('todo', [
        'todos' => $todosNoDatubazes,
    ]);
});


Route::any('/addnew', function () {

    $jaunsTodo = new  \App\Todo;

    $jaunsTodo->title = \Request('note');
    $jaunsTodo->body = 'Some default body';
    $jaunsTodo->is_done = false;

    $jaunsTodo->save();

    return redirect('/');

 });
 
Route::get('/delete/{id}', function($id){
    $todo = \App\Todo::find($id);
    if ($todo != null ){
        $todo->delete();
    }
    
    return redirect('/');
});

Route::get('/update/{id}', function($id){
    $todo = \App\Todo::find($id);
    if ($todo->is_done == true ){
        $todo->is_done = false;
    } else {
        $todo->is_done = true;
    }
    $todo->save();

    return redirect('/');
});
*/





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
