<?php

namespace App\Models;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Translatable\HasTranslations;

class Blogs extends Model implements  HasMedia
{

    use HasFactory, HasRoles, InteractsWithMedia, HasTranslations;

    const STATUS= ['Active','Not Active'];
    public $translatable = [
        'title',
         'sub_title',
         'title_tow',
         'sub_title_tow',
         'title_three',
         'sub_title_three',
         'title_four',
         'sub_title_four',
         'description',
         'sub_description',
         'button',
         'sub_button',
         'slug',
         'date',
         'button',
    ];


    protected $fillable = [
         'title',
         'sub_title',
         'title_tow',
         'sub_title_tow',
         'title_three',
         'sub_title_three',
         'title_four',
         'sub_title_four',
         'description',
         'sub_description',
         'button',
         'sub_button',
         'slug',
         'date',
         'button',
         'map',
        'route',
        'sort',
        'facebook',
        'twitter',
        'instagram',
        'status',
    ];
    

    public function scopeSearch($query):LengthAwarePaginator
    {
         $search = Request()->query('title');
         if(empty($search)){
         return $query->orderBy('id','asc')->paginate(50);
         }else{
         return $query
         ->orWhere('title', 'like' , "%{$search}%")
         ->orWhere('subtitle', 'like' , "%{$search}%")
         ->orderBy('id','asc')->paginate(50);
         }  
   }
}
