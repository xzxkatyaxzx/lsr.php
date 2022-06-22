<?php

namespace App\Http\Controllers;

use App\Models\News as ModelNews;
use Faker\Factory;
use Bluemmb\Faker\PicsumPhotosProvider;

class News extends Controller
{
    function index() {
        $q = ModelNews::with(['comment'=>function($query) {
            return $query->latest();
        }])->paginate(3);

        return view('index', [
            'news' => $q
        ]);
    }

    public static function faker() {
        return view('add');
    }

    public function fakerCreate() {
        $new = new ModelNews();
        $faker = Factory::create();
        $faker->addProvider(new PicsumPhotosProvider($faker));

        $new->title = $faker->text();
        $new->text = $faker->text();
        $new->img = $faker->imageUrl(100, 100, true);
        $new->save();

        return redirect('/admin');
    }
}
