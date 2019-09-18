<?php 

namespace App\Http\Controllers;

use App\Blog_post_tag;
use App\Blog_post;
use App\Blog_tag;
use App\Http\Requests;
use Illuminate\Http\Request;
use Session;
use App\Http\Requests\Blog_post_tagRequest;
use Illuminate\Foundation\Http\FormRequest;

class Blog_post_tagController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function __construct()
  {
    $this->middleware('auth');
  }
  
  public function index()
  {
    $blog_post_tag_list = Blog_post_tag::all();
    return view ('back.post_tag.index', compact('blog_post_tag_list'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return view('back.post_tag.create', compact('blog_post', 'blog_tag'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Blog_post_tagRequest $request)
  {
    Blog_post_tag::create($request->all());
    Session::flash('flash_message', 'Data berhasil disimpan.');
    return redirect('backscreen/blog_post_tag');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show(Blog_post_tag $blog_post_tag)
  {
    return view('back.post_tag.show', compact('blog_post_tag'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit(Blog_post_tag $blog_post_tag)
  {
    return view('back.post_tag.edit', compact('blog_post_tag'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(Blog_post_tagRequest $request, Blog_post_tag $blog_post_tag)
  {
    $blog_post_tag->update($request->all());
    Session::flash('flash_message', 'Data berhasil disimpan.');
    return redirect('backscreen/blog_post_tag');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy(Blog_post_tag $blog_post_tag)
  {
    $blog_post_tag->delete();
    Session::flash('flash_message', 'Data berhasil dihapus.');
    Session::flash('penting', true);
    return redirect('backscreen/blog_post_tag');
  }
  
}

?>