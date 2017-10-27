<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

use App\Posts;
use Log;
use DB;

class PostsController extends Controller
{

    public function index(Request $request) {
        $posts = Posts::paginate(16);
        $tags = Category::all();

        if ($request->ajax()) {
            return response()->json(view('load', array('posts' => $posts))->render());
        }


        return view('welcome', [
            'posts' => $posts,
            'tags' => $tags,
        ]);

    }

    public function find($categoryIds, $priceFrom, $priceTo, $query, $order) {
        DB::connection()->enableQueryLog();
        $builder = new Posts();

        if ($categoryIds != '0') {
            $categoryIdsArray = explode(',', $categoryIds);
            $builder = $builder->findByCategories($categoryIdsArray);
        }



        if ($query != '0') {
            $builder = $builder->where('name', 'LIKE',  '%'.$query.'%');
        }



        Log::info($priceFrom);
        Log::info($priceTo);

        $builder = $builder->whereBetween('price', [$priceFrom, $priceTo]);


        $direction = $order === 'priceDesc' ? 'DESC' : 'ASC';
        $order = $order === 'priceDesc' ? 'price' : $order;
        $posts = $builder->orderBy($order, $direction)->paginate(16);

        $queries = DB::getQueryLog();
        Log::info($queries);



        $tags = Category::all();
        sleep(5) ;
        return view('load', [
            'posts' => $posts,
            'tags' => $tags,
        ]);
    }

    public function findByTag($tagId) {
        $posts = Posts::where('categoryId', $tagId)->paginate(16);
        return view('load', [
            'posts' => $posts
        ]);

    }

    public function post($postId) {
        $post = Posts::findOrFail($postId);
        return view('post', [
            'post' => $post
        ]);

    }
}
