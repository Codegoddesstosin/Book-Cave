<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use App\Review;
use App\Book;
use App\Http\Resources\Review as ReviewResource;
use Auth;

class ReviewController extends Controller

{

/**
 * @SWG\Get(
 *      path="/review",
 *      operationId="getReviews",
 *      tags={"Reviews"},
 *      summary="Get list of reviews",
 *      description="Returns list of reviews",
 *      @SWG\Response(
 *          response=200,
 *          description="successful operation"
 *       ),
 *       @SWG\Response(response=400, description="Bad request"),
 *       security={
 *           {"api_key_security_example": {}}
 *       }
 *     )
 *
 * Returns list of reviews
 */


    public function index()
    {
       
        $review = Review::orderBy('created_at', 'desc')->paginate(5);
        $book = Book::all(); 
        $review = Review::with('book')->get();
        return view('review.review')->with('review', $review);
        //return ReviewResource::collection($review); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('review.create');
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
	 * 		path="/review",
	 * 		tags={"Review"},
	 * 		operationId="createBookreview",
	 * 		summary="Create new Bookreview entry",
	 * 		@SWG\Parameter(
	 * 			name="review",
	 * 			in="body",
	 * 			required=true,
	 * 			@SWG\Schema(ref="#/definitions/Review"),
	 *		),
	 * 		@SWG\Response(
 *          response=200,
 *         description="success",
 *          
 *     @SWG\Schema(
 *          @SWG\Property(
 *              property="data",
 *              ref="#definitions/BaseFields"
 *          )
 *         )
 *         )
* 	     )
	 *
	 */


    public function store(Request $request)
    {
       auth()->user()->review()->create($request->all());
       $review = $request->isMethod('put') ? Review::findorFail
       ($request->review_id) : new Review;
       $review->id = $request->input('review_id');
       $review->rating = $request->input('rating');
       $review->description  = $request->input('description');
       $review->save();
       //return view('review.booksratings')->with('review', $review);;
        return redirect('review')->with('success', 'Book has been successfully added');
    //  return redirect('booksRatings')->with('success', 'Reviews added');
    /*if($review->save ())
        {
            return ReviewResource($review);
        } */
    }


}
