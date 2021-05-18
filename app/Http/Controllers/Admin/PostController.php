<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Laravelista\Comments\Commentable;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paginator = Post::orderBy('created_at', 'desc')->paginate(5);
        $categories = Category::all()->where('parent_id', '>',  0);
        return view('layouts.products.index', compact('paginator', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::with('children')->where('parent_id', 0)->get();
        return view('layouts.products.create', [
            'post' => '',
            'categories' => $categories,
            'delimiter' => '',
            'image' => ''
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd(__METHOD__, $request->all());
        $post = Post::create($request->except('image'));
        if ($request->input('category_id')){
            $post->categories()->attach($request->input('categories'));
        }

        /*if(isset($post->id)){
            $post->storeImage($request, 'img-product');
            return redirect()
                ->route('product.edit', $post)
                ->with(['success' => 'Успешно сохранено']);
        }else{
            return back()
                ->withErrors(['msg' => 'Ошибка'])
                ->withInput();
        }*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories = ShopCategory::with('children')->where('parent_id', 0)->get();
        $image['src'] = $post->getImageUrl('img-product');
        return view('admin.products.create', [
            'shopProduct' => $post,
            'categories' => $categories,
            'delimiter' => '',
            'image' => $image
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
