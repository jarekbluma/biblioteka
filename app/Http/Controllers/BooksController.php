<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Book;
use Carbon\Carbon;


class BooksController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        return View('dodawanie.addbook');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return 'cos'; 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this -> validate($request, [
           'tytul' => 'required|min:1',
       ], [
           'required' => 'Pole nie może być puste!'
       ]);

        Book::create([
            'autor' => $request -> autor,
            'tytul' => $request -> tytul,
            'wydawnictwo' => $request -> wydawnictwo,
            'rok' => $request -> rok,

        ]);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return 'cos1';

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
       $edit = Book::FindOrFail($id);


       return view('edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $book = Book::FindOrFail($id);
        
        $book -> tytul = $request -> tytul;
        $book -> autor = $request -> autor;
        $book -> wydawnictwo = $request -> wydawnictwo;
        $book -> rok = $request -> rok;
        $book -> dateofborrow = $request -> dateofborrow;
        $book -> dateofreturn = Carbon::now()->addMonths(1);
        $book -> borrower = $request -> borrower;      
        $book -> save();
      
        return redirect()->action('HomeController@index');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::FindOrFail($id);
        $book -> delete();

        return redirect()->action('HomeController@index');
    }
}
