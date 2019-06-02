<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Book;
use App\Review;
use App\Http\Resources\Book as BookResource;
use Auth;
use App\Http\Requests\BookStoreRequest;


/**
 * @SWG\Definition(@SWG\Xml(name="Book"))
 */
class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */  
    
/**
    *   @SWG\Get(
    *       path="/book",
    *       tags={"Books"},
    *       operationId="listBooks",
    *       summary="List Books",
    *       @SWG\Parameter(
    *           name="Book",
    *           in="path",
    *           required=true,
    *           type="string",
    *           
    *       ),
    *       @SWG\Response(
    *           response=200,
    *           description="success",
    *           @SWG\Schema(ref="#/definitions/Book"),
    *       ),
    *       @SWG\Response(
    *           response="default",
    *           description="error",
    *       
    *       ),
    *   ),
    */

    public function index()
    {
       
         $book = book::orderBy('created_at', 'desc')->paginate(5);
         $review = Review::all(); 
         $book = Book::with('review')->get();
        return view('books.books')->with('book', $book);
        // return BookResource::collection($book); 
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getId()
    {
        return $this->id;
    }



   
    /**
     *
     * @SWG\Post(
     *      path="/books",
     *      tags={"books"},
     *      operationId="createBook",
     *      summary="Create new book entry",
     *      @SWG\Parameter(
     *          name="book",
     *          in="body",
     *          required=true,
     *          @SWG\Schema(ref="#/definitions/Book"),
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="success",
     *          @SWG\Schema(ref="#/definitions/Book"),
     *      ),
     *      @SWG\Response(
     *          response="default",
     *          description="error",
    
     *      ),
     *  )
     *
     */
    public function store(Request $request)
    {
       $book = $request->isMethod('put') ? Book::findorFail
       ($request->book_id) : new Book;
       $book->id = $request->input('book_id');
       $book->title  = $request->input('title');
       $book->description  = $request->input('description');
       $book->publisher = $request->input('publisher');
       $book->ISBN  = $request->input('ISBN');

      /* if($book->save ())
        {
            return new BookResource($book);
        } */
 
       $book->save();
       return redirect('books')->with('success', 'Book has been successfully added');
    

    }

     /**
     *
     * - Books ------------------------------------------------------
     *
     * @SWG\Get(
     *      path="/book/{id}",
     *      tags={"Books"},
     *      operationId="getBooks",
     *      summary="Fetch Book details",
     *      @SWG\Parameter(
     *          name="id",
     *          in="path",
     *          required=true,
     *          type="string",
     *          description="UUID",
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="success",
     *          @SWG\Schema(ref="#/definitions/Book"),
     *      ),
     *      @SWG\Response(
     *          response="default",
     *          description="error",

     *      ),
     *  )
     *
     */


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // get book
        $book = Book::findorFail($id);
       return view('books.show')->with('book', $book);
      // return new BookResource($book);
    }                                                                                                                                         


    /**
     * @SWG\Put(path="/book/{book}",
     *   tags={"Book"},
     *   summary="Updated book",
     *   description="This can only be done by the logged in user.",
     *   operationId="updatebook",
     *   produces={"application/xml", "application/json"},
     *   @SWG\Parameter(
     *     name="book",
     *     in="path",
     *     description="book that need to be updated",
     *     required=true,
     *     type="string"
     *   ),
     *   @SWG\Parameter(
     *     in="body",
     *     name="body",
     *     description="Updated Book object",
     *     required=true,
     *     @SWG\Schema(ref="#/definitions/Book")
     *   ),
     *   @SWG\Response(response=400, description="Invalid book supplied"),
     *   @SWG\Response(response=404, description="Book not found")
     * )
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $book = Book::findorFail($id);

        $book->update($request->all());

        return redirect('/books');
    }



/**
 * @SWG\Delete(
 *     path="/book/{id}",
 *     tags={"Books"},
 *     summary="Delete book",
 *     @SWG\Parameter(
 *          name="id",
 *          in="path",
 *          required=true,
 *          type="integer",
 *          description="UUID",
 *      ),
 *     @SWG\Response(
 *          response=204,
 *          description="Delete an book",
 *          @SWG\Schema(ref="#/definitions/Book")
 *      ),
 *     @SWG\Response(
 *          response="default",
 *          description="error",
 *          @SWG\Schema(ref="#/definitions/Book")
 *   )
 * ),
 */
     /**
     *
     *      

     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::findorFail($id);
        $book->delete();
        return redirect('/books');

        if ($book->delete())
        {
            return new BookResource($book); 
        } 
         
        
    }

    public function getRatings ()
    {
        $count = $this->review()->count();
        if(empty($count))
        {
            return 0;
        }
        $starCountSum = $this->review()->sum('ratings');
        $average = $starCountSum/$this->review()->count();
        return $average;
    }
    

}


