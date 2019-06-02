<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
//use Illuminate\Database\Eloquent\Model;
use App\Book;
use App\User;
    
    /**
 * @SWG\Definition(@SWG\Xml(name="Review"))
 */
class Review extends Eloquent {

    
    /**
    * @SWG\Property(
    *      property="id",
    *      type="integer",
    *      
    * )
    * @SWG\Property(
    *      property="rating",
    *      type="string",
    *      
    * )
     *@SWG\Property(
    *      property="description",
    *      type="string",
    *    
    * )
    
    */

    protected $fillable = [

      'book_id', 'rating', 'description',  

    ];


    public function book()
    {
        return $this->belongsTo(Book::class)->withDefault();
    }


    public function getUsersname()
   {
       return User::where('id', $this->user_id)->first()->name; 
   } 




}
