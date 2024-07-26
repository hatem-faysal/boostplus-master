<?php
namespace App\Actions\Page;
use App\Models\Page;
use Illuminate\Support\Str;
class StorePageAction
{
    public function handle(array $data): Page
    {
        $pages = Page::create($data+['slug'=>[
            'en' => Str::slug($data['name']['en']),
            'ar' => Str::slug($data['name']['ar']),
        ]]);
        return $pages;
    }
}