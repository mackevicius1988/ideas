<?php

namespace App\Http\Controllers;

use App\Category;
use App\Posts;
use App\Comment;
use DB;
use Illuminate\Http\Request;
use Log;

class PostsController extends Controller
{

    public function index(Request $request)
    {
        $posts = Posts::orderBy('id', 'DESC')->paginate(32);
        $tags = Category::all();

        if ($request->ajax()) {
            return response()->json(view('load', array('posts' => $posts))->render());
        }


        return view('welcome', [
            'posts' => $posts,
            'tags' => $tags,
        ]);

    }

    public function find(Request $request)
    {

        DB::connection()->enableQueryLog();
        $query = $request->get('query');
        $priceFrom = $request->get('priceMin');
        $priceTo = $request->get('priceMax');
        $order = $request->get('sort');
        $categoryIds = $request->get('categoryIds');

        Log::info($categoryIds);

        $builder = new Posts();
        if ($query != '') {
            $builder = $builder->where('name', 'LIKE', '%' . $query . '%');
        }

        if ($priceFrom) {
            $builder = $builder->where('price', '>',  '$'.$priceFrom);
        }

        if ($priceTo) {
            $builder = $builder->where('price', '<',  '$'.$priceTo);
        }

        if ($order) {
            $direction = $order === 'priceLow' ? 'ASC' : 'DESC';
            $builder = $builder->orderBy($order, $direction);
        }

        if ($categoryIds) {
            $categoryIdsArray = explode(',', $categoryIds);
            $builder = $builder->findByCategories($categoryIdsArray);
        }

        $posts = $builder->paginate(32);
        $queries = DB::getQueryLog();
        Log::info($queries);


        /**
        DB::connection()->enableQueryLog();
        $builder = new Posts();

        if ($categoryIds != '0') {
            $categoryIdsArray = explode(',', $categoryIds);
            $builder = $builder->findByCategories($categoryIdsArray);
        }



        Log::info($priceFrom);
        Log::info($priceTo);

     //  $builder = $builder->whereBetween('price', [$priceFrom, $priceTo]);


        $direction = $order === 'priceDesc' ? 'DESC' : 'ASC';
        $order = $order === 'priceDesc' ? 'price' : $order;
        $posts = $builder->orderBy($order, $direction)->paginate(16);

        $queries = DB::getQueryLog();
        Log::info($queries);

**/
        $tags = Category::all();
        return view('welcome', [
            'posts' => $posts,
            'tags' => $tags,
        ]);
    }


    public function post($postId)
    {
        $post = Posts::findOrFail($postId);
        $comments = $post->comments;
        return view('post', [
            'post' => $post,
            'comments' => $comments
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
}
