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
        $posts = Posts::orderBy('saves', 'DESC')->paginate(16);
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
        $builder = new Posts();
        if ($query != '') {
            $builder = $builder->where('name', 'LIKE', '%' . $query . '%');
        }

        if ($priceFrom) {
            $builder = $builder->where('priceIndex', '>', $priceFrom);
        }

        if ($priceTo) {
            $builder = $builder->where('priceIndex', '<', $priceTo);
        }

        Log::info($order);
        $savesClass = $order == 'saves' ? 'categorySelected' : '';
        $priceAscClass = $order == 'priceAsc' ? 'categorySelected' : '';
        $priceDescClass  = $order == 'priceDesc' ? 'categorySelected' : '';

        Log::info($savesClass);
        Log::info($priceAscClass);
        Log::info($priceDescClass);

        if ($order) {
            $direction = $order == 'priceAsc' ? 'ASC' : 'DESC';
            $order = $order == 'priceAsc' || $order == 'priceDesc' ? 'priceIndex' : $order;
            $builder = $builder->orderBy($order, $direction);
        }

        Log::info($categoryIds);
        if ($addTag) {
            $categoryIdsArray = explode(',', $categoryIds);
            Log::info($categoryIdsArray);

            $builder = $builder->whereIn('categoryId', $categoryIdsArray);
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
