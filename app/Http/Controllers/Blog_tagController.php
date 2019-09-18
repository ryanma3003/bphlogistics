<?php 

namespace App\Http\Controllers;

use App\Blog_tag;
use Illuminate\Http\Request;
use App\Http\Requests;
use Session;
use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\Blog_tagRequest;
use Illuminate\Support\Str;

class Blog_tagController extends Controller {

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
    $blog_tag_list = Blog_tag::all();
    return view('back.tag.index', compact('blog_tag_list'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return view('back.tag.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Blog_tagRequest $request, Blog_tag $blog_tag)
  {
    $input = $request->all();
    $input['slug'] = Str::slug($request->get('name'));
    $blog_tag = Blog_tag::create($input);
    Session::flash('flash_message', 'Data berhasil disimpan.');
    return redirect('backscreen/blog_tag');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show(Blog_tag $blog_tag)
  {
    return view('back.tag.show', compact('blog_tag'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit(Blog_tag $blog_tag)
  {
    return view('back.tag.edit', compact('blog_tag'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(Blog_tagRequest $request, Blog_tag $blog_tag)
  {
    $blog_tag->update($request->all());
    Session::flash('flash_message', 'Data berhasil disimpan.');
    return redirect('backscreen/blog_tag');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy(Blog_tag $blog_tag)
  {
    $blog_tag->delete();
    Session::flash('flash_message', 'Data berhasil dihapus.');
    Session::flash('penting', true);
    return redirect('backscreen/blog_tag');
  }
  
}

?>