<?php
namespace App\Actions\Page;

use App\Models\Page;
use Illuminate\Support\Str;

class UpdatePageAction
{
    public function handle(Page $Page,array $data):Page
    {
        $Page->update($data+['slug'=>[
            'en' => Str::slug($data['name']['en']),
            'ar' => Str::slug($data['name']['ar']),
        ]]);
        return $Page;
    }
}
