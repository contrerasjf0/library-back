<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Datatables;

use App\Book;
use App\Category;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('layouts.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $book = new Book();

        $book->name = $request->input('name');
        $book->autor = $request->input('autor');
        $book->category_id = $this->search($request->input('category_id'));
        $book->published_date = $request->input('published_date');
        $book->borrowed = false;

        $book->save();

         return redirect()->route('book.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Book::find($id);

        return view('layouts.remove', ['book'=>$book]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Book::find($id);
        return view('layouts.edit', ['book'=>$book]);
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
        $book = Book::find($id);

        $book->name = $request->input('name');
        $book->autor = $request->input('autor');
        $book->category_id = $this->search($request->input('category_id'));
        $book->published_date = $request->input('published_date');
        $book->borrowed = false;

        $book->save();

         return redirect()->route('book.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $boook = Book::find($id)->delete();
        
        return redirect()->route('book.index');
    }

    public function list()
    {
        $books = Book::with('category')->select('books.*');

    

        return Datatables::eloquent($books)
                ->addColumn('actions', function($book){
                                        
                        $strActions = '<div class="btn__actions">'.
                                      ' <span class="btn__action-edit"><a  href="'. route("book.edit", ['book' => $book->id]).'"><i class="fa fa-pencil" aria-hidden="true"></i></a></span>'.
                                      ' <span class="btn__action-remove"><a  href="'. route("book.show", ['book' => $book->id]).'"><i class="fa fa-trash-o" aria-hidden="true"></i></a></span>'.
                                      '</div>';

                        return $strActions;
                })
                ->editColumn('borrowed', function($book){ 

                    $buttom = ($book->borrowed)? '<span><i class="fa fa-lock" aria-hidden="true"></i></span>' : '<span><i class="fa fa-unlock" aria-hidden="true"></i></span>' ;
                    $cssStatus = ($book->borrowed)? 'btn-danger': 'btn-success' ;
                    return '<button type="button" class="btn '.$cssStatus.' btn__borrowed">'.$buttom.' </button>';
                })
                ->rawColumns(['actions', 'borrowed'])

                ->make(true);
    }

    private function search($category){
        $categoryRow= Category::where('name', '=', $category)->get()->first();;

        return $categoryRow->id;
    }
}
