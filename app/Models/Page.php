<?php

namespace App\Models;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Translatable\HasTranslations;


class Page extends Model
{
   use HasFactory , HasRoles, HasTranslations;

   public $translatable = ['name','description','slug'];
   
   protected $fillable = [
      'name',
      'description',
      'nave',
      'footer',
      'status',
      'slug',
      'parent_id',
   ];

 const STATUS = ['Active','Not Active'];

    public function scopeSearch($query):LengthAwarePaginator
    {
         $search = Request()->query('name');
         if(empty($search)){
         return $query->orderBy('id','asc')->paginate(10);
         }else{
         return $query
         ->orWhere('name', 'like' , "%{$search}%")
         ->orWhere('slug', 'like' , "%{$search}%")
         ->orderBy('id','asc')->paginate(10);
         }  
   }

   public function parent()
   {
     return $this->belongsTo(Page::class,'parent_id','id');
   }

   public function childes()
   {
     return $this->hasMany(Page::class,'parent_id','id');
   }

}
