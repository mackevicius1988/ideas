<?php

namespace App\Http\Controllers;

use App\Category;
use App\Posts;
use App\Comment;
use DB;
use Illuminate\Http\Request;
use Log;

/**
 * Class PostsController
 * @package App\Http\Controllers
 *
 */
class PostsController extends Controller
{

    public function index(Request $request)
    {
        $posts = Posts::select('id', 'name', 'price', 'imageUrl', 'rating')->orderBy('saves', 'DESC')->paginate(16);
        $tags = Category::orderBy('order', 'ASC')->get();
        $scroll = $request->get('page');
        $catName = 'FAKINGOODIDEAS';
        $catDesc = 'Exclusive ideas for you';

        return view('welcome', [
            'posts' => $posts,
            'tags' => $tags,
            'scroll' => $scroll,
            'price20' => '',
            'price50' => '',
            'savesClass' => 'categorySelected',
            'priceAscClass' => '',
            'priceDescClass' => '',
            'catName' => $catName,
            'catDesc' => $catDesc
        ]);
    }

    public function find(Request $request)
    {
        DB::connection()->enableQueryLog();
        $scroll = true;

        $query = $request->get('query');
        $priceFrom = $request->get('priceMin');
        $priceTo = $request->get('priceMax');
        $order = $request->get('order');

        $categoryId = $request->get('addTag');
        Log::info( $categoryId);
        $categoryIdsArray = [];
        $builder = Posts::select('id', 'name', 'price', 'imageUrl', 'rating');
        if ($query != '') {
            $builder = $builder->where('name', 'LIKE', '%' . $query . '%');
        }

        if ($priceFrom) {
            $builder = $builder->where('priceIndex', '>', $priceFrom);
        }

        if ($priceTo) {
            $builder = $builder->where('priceIndex', '<', $priceTo);
        }

        if ($categoryId) {
            $builder = $builder->where('categoryId', '=', $categoryId);
        }

        $savesClass = $order == 'saves' ? 'categorySelected' : '';
        $priceAscClass = $order == 'priceAsc' ? 'categorySelected' : '';
        $priceDescClass  = $order == 'priceDesc' ? 'categorySelected' : '';


        if ($order) {
            $direction = $order == 'priceAsc' ? 'ASC' : 'DESC';
            $order = $order == 'priceAsc' || $order == 'priceDesc' ? 'priceIndex' : $order;
            $builder = $builder->orderBy($order, $direction);
        }


        /**
        Log::info($categoryIdsArray);
        if ($categoryIds) {
            $categoryIdsArray = explode(',', $categoryIds);
            Log::info(array_filter($categoryIdsArray));

            $builder = $builder->whereHas('tags', function($query) use($categoryIdsArray) {
                $query->whereIn('tagId', $categoryIdsArray);
            });
        }
         * **/

        $posts = $builder->paginate(16);
        Log::info($posts);
        $tags = Category::orderBy('order', 'ASC')->get();
        $catName = 'FAKINGOODIDEAS';
        $catDesc = 'Exclusive ideas for you';
        foreach ($tags as $tag) {
                if ($tag->id == $categoryId) {
                    $tag['class'] = 'categorySelected';
                    $catName = $tag->name;
                    $catDesc = $tag->desc;
                }

        }


        $price20 = $priceTo == 20 ?  'categorySelected' : '';
        $price50 = $priceFrom == 50 ?  'categorySelected' : '';

        $queries = DB::getQueryLog();
        Log::info($queries);

        return view('welcome', [
            'posts' => $posts,
            'tags' => $tags,
            'scroll' => $scroll,
            'price20' => $price20,
            'price50' => $price50,
            'savesClass' => $savesClass,
            'priceAscClass' => $priceAscClass,
            'priceDescClass' => $priceDescClass,
            'catName' => $catName,
            'catDesc' => $catDesc
        ]);
    }


    public function post($postId)
    {
        $post = Posts::findOrFail($postId);
        $comments = $post->comments;

        $stars = [];
        $ratingIndex = 0;
        if ($post->ratingIndex != 0)
            $ratingIndex = round($post->ratingIndex);
                if ($ratingIndex != 0) {
                    for($i = 0; $i < $ratingIndex; $i++) {
                        array_push($stars, 'checked');
                    }
                }
        for($i = 0; $i < 5 - $ratingIndex; $i++) {
            array_push($stars, '');
        }
        Log::info($stars);

        $categoyId = $post->categoryId;
        $raletdItems =  Posts::select('id', 'name', 'price', 'imageUrl')->orderBy('saves', 'DESC')->where('categoryId', $categoyId)->limit(4)->get();

        return view('post', [
            'post' => $post,
            'comments' => $comments,
            'stars' => $stars,
            'raletdItems' => $raletdItems
        ]);

    }

    public function memory()
    {
        return view('memory');
    }

    public function memories($postIds)
    {
        $posts = [];
        if ($postIds != '0') {
            $postIdsArray = explode(',', $postIds);
            $posts = Posts::find($postIdsArray);
        }
        return view('memories', [
            'posts' => $posts,
        ]);
    }


    public function postComment(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');
        $id = $request->input('id');

        $comment = new Comment();
        $comment->name = $name;
        $comment->email = $email;
        $comment->message = $message;
        $comment->postId = $id;
        $comment->save();

        return $comment->id;
    }


    public function about(Request $request)
    {
        Log::info('Start');
        return view('about');
    }
}
