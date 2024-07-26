<?php
namespace App\Actions\Blogs;
use App\Helper\ImageHelper;
use App\Models\Blogs;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class UpdateBlogAction
{
    use ImageHelper;
    public function handle(Blogs $Blogs,array $data):Blogs
    {
        $Blogs->update((Arr::except($data+
        [ 'slug'=> ['en' => Str::slug($data['title']['en']),'ar' => Str::slug($data['title']['ar'])] ],
         'image','image2')));

        if(isset($data['image'])){
        $this->UpdateImage($data,$Blogs,'Blogs');
        }
        if(isset($data['image2'])){
        $this->UpdateImage2($data,$Blogs,'Blogs2');
        }
        return $Blogs;
    }
}