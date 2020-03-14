<?php

namespace App\Http\Controllers\Books;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;


class BookController extends Controller
{
    public function index()
    {
        $bookModel = app(Book::class);
        $book = $bookModel->all();  
        return view('books/index',compact('book'));

    }
    public function create(){
        return view('books/create');
    }

    public function store(Request $request)
    {       
        $data = $request->all();
     
        $bookModel = app(Book::class);
        $book = $bookModel->create(       
         [
          'name'=>$data['name'],          
          'writer'=>$data['writer'],          
          'pages'=>$data['pages'],
         ]
       ); 
    return redirect()->route('book.index');        
    }

    public function destroy($id)
    {
        if(!empty($id)){
            $bookModel = app(Book::class);
            $book = $bookModel->find($id);
            if(!empty($book)){
                $book->delete();
                return response()->json([
                    'status'  => 'success',
                    'message' => 'book deletado com sucesso.',
                    'reload'  => true,
                ]);
            }
            else{
                return response()->json([
                    'status'  => 'error',
                    'message' => 'ID não está na requisição',
                    'reload'  => true,
                ]);
        
            }
        }     
        
    }    
    public function edit($id){

        $bookModel = app(book::class);
        $book = $bookModel->find($id);
        return view('books/edit', compact('book'));
        
    }
    public function update(Request $request,$id){
        $data = $request->all();    
        $bookModel = app(book::class);
        $book = $bookModel->find($id);
        $book->update([
            'name'=>$data['name'],          
            'writer'=>$data['writer'],          
            'pages'=>$data['pages'] ?? null,
        ]);
        return redirect()->route('book.index');
    }



}
