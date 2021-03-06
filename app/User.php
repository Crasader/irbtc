<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['email', 'password', 'nname', 'created_fa', 'login_time'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public function userRole()
    {
        return $this->hasOne('App\Role', 'role');
    }

    public function userBalance()
    {
        return $this->hasMany('App\Balance', 'owner');
    }

    public function userTrade()
    {
        return $this->hasMany('App\Trade', 'owner');
    }

    public function userBank()
    {
        return $this->hasMany('App\Bank', 'owner');
    }

    public function userTransaction()
    {
        return $this->hasMany('App\Transaction', 'owner');
    }

    public function isAdmin()
    {
        if($this->role == 1)
            return true;
        else
            return false;
    }
}
