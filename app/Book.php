<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use App\Review;
use App\User;



    /**
 * @SWG\Definition(@SWG\Xml(name="Book"))
 */
 class Book extends Eloquent {
     
   
    /**
    * @SWG\Property(
    *      property="id",
    *      type="integer",
    *      
    * )
    * @SWG\Property(
    *      property="title",
    *      type="string",
    *      
    * )
     *@SWG\Property(
    *      property="description",
    *      type="string",
    *    
    * )
     *@SWG\Property(
    *      property="publisher",
    *      type="string",
    *    
    * )
         *@SWG\Property(
    *      property="ISBN",
    *      type="string",
    *    
    * )
    */



    public function review()
    {
        return $this->hasMany(Review::class);
    }


   public function getUsersname()
   {
       return User::where('id', $this->user_id)->first()->name; 
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
   





   protected $fillable = [
        
    'title', 'description', 'publisher', 'ISBN'
  
];






}











   


  
   
