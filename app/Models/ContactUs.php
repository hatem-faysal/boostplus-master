<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;

class ContactUs extends Model
{
    use HasFactory;
    protected $fillable = [
         'firstname',
         'lastname',
         'email',
         'message',
         'url',
         'type',
    ];
    
    public function scopeSearch($query):LengthAwarePaginator
    {
         $search = Request()->query('name');
         if(empty($search)){
         return $query->orderBy('id','asc')->paginate(50);
         }else{
         return $query
         ->orWhere('firstname', 'like' , "%{$search}%")
         ->orWhere('lastname', 'like' , "%{$search}%")
         ->orWhere('email', 'like' , "%{$search}%")
         ->orderBy('id','asc')->paginate(5);
         }  
   }
}