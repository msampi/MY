<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'last_name' ,'email', 'password', 'user_type_id', 'image','active'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    
    public function isAdmin(){
        
        if ($this->user_type_id == 1)
            return true;
        return false;
        
    }
    
    public function isInvestor(){
        
        if ($this->user_type_id == 3)
            return true;
        return false;
        
    }
    
    public function isCompany(){
        
        if ($this->user_type_id == 2)
            return true;
        return false;
        
    }
    
    public function getUserPrefix()
    {
        if ($this->isAdmin())
            return 'admin';
        if ($this->isInvestor())
            return 'investor';
        if ($this->isCompany())
            return 'company';
    }
    
    public function getImageAttribute($value)
    {
        if ($value == '')
            return 'user.png';
        return $value;
            
    }
    
    public function company()
    {
        return $this->belongsTo('App\Models\Company');
    }
    
    public function investor()
    {
        return $this->belongsTo('App\Models\Investor');
    }
}
