<?php

namespace App;


use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use App\Review;

  /**
 * @SWG\Definition(@SWG\Xml(name="Review"))
 */

class User extends \Jenssegers\Mongodb\Eloquent\Model implements
    AuthenticatableContract,
    AuthorizableContract,
    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword, Notifiable;
    /**
    * @SWG\Property(
    *      property="id",
    *      type="integer",
    *      
    * )
    * @SWG\Property(
    *      property="name",
    *      type="string",
    *      
    * )
     *@SWG\Property(
    *      property="email",
    *      type="string",
    *    
    * )
    
    */
 

    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getId()
      {
          return $this->id;
      }
   


      public function review()
      {
         return $this->hasOne(Review::class);
      }
   
   
    public function getAvatar()
    {
        return "http://www.gravatar.com/avatar/". md5($this->email).'?d=mm';
    }
}







































