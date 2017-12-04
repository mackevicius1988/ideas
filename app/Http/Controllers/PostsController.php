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
        $posts = Posts::select('id', 'name', 'price', 'imageUrl')->orderBy('saves', 'DESC')->paginate(16);
        $tags = Category::all();
        $scroll = $request->get('page');

        return view('welcome', [
            'posts' => $posts,
            'tags' => $tags,
            'scroll' => $scroll,
            'price20' => '',
            'price50' => '',
            'savesClass' => 'categorySelected',
            'priceAscClass' => '',
            'priceDescClass' => ''
        ]);
    }

    public function find(Request $request)
    {

        $scroll = true;

        $query = $request->get('query');
        $priceFrom = $request->get('priceMin');
        $priceTo = $request->get('priceMax');
        $order = $request->get('order');
        $categoryIds = $request->get('tagsIds');
        $addTag = $request->get('addTag');

        $categoryIdsArray = [];
        $builder = Posts::select('id', 'name', 'price', 'imageUrl');
        if ($query != '') {
            $builder = $builder->where('name', 'LIKE', '%' . $query . '%');
        }

        if ($priceFrom) {
            $builder = $builder->where('priceIndex', '>', $priceFrom);
        }

        if ($priceTo) {
            $builder = $builder->where('priceIndex', '<', $priceTo);
        }


        $savesClass = $order == 'saves' ? 'categorySelected' : '';
        $priceAscClass = $order == 'priceAsc' ? 'categorySelected' : '';
        $priceDescClass  = $order == 'priceDesc' ? 'categorySelected' : '';


        if ($order) {
            $direction = $order == 'priceAsc' ? 'ASC' : 'DESC';
            $order = $order == 'priceAsc' || $order == 'priceDesc' ? 'priceIndex' : $order;
            $builder = $builder->orderBy($order, $direction);
        }

        Log::info($categoryIdsArray);
        if ($categoryIds) {
            $categoryIdsArray = explode(',', $categoryIds);
            Log::info(array_filter($categoryIdsArray));

            $builder = $builder->whereHas('tags', function($query) use($categoryIdsArray) {
                $query->whereIn('tagId', $categoryIdsArray);
            });
        }

        $posts = $builder->paginate(16);

        $tags = Category::all();

        foreach ($tags as $tag) {
                if (in_array($tag->id, $categoryIdsArray))
                    $tag['class'] = 'categorySelected';
        }


        $price20 = $priceTo == 20 ?  'categorySelected' : '';
        $price50 = $priceFrom == 50 ?  'categorySelected' : '';



        return view('welcome', [
            'posts' => $posts,
            'tags' => $tags,
            'scroll' => $scroll,
            'price20' => $price20,
            'price50' => $price50,
            'savesClass' => $savesClass,
            'priceAscClass' => $priceAscClass,
            'priceDescClass' => $priceDescClass
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
                    for($i = 0; $i <= $ratingIndex; $i++) {
                        array_push($stars, 'checked');
                    }
                }
        for($i = 0; $i < 5 - $ratingIndex; $i++) {
            array_push($stars, '');
        }
        Log::info($stars);

        return view('post', [
            'post' => $post,
            'comments' => $comments,
            'stars' => $stars
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
