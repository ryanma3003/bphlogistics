<?php 

namespace App\Http\Controllers;

use App\Blog_categories;
use App\Http\Requests;
use App\Http\Requests\Blog_categoriesRequest;
use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;
use Session;
use Illuminate\Support\Str;


class Blog_categoriesController extends Controller {

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
    $blog_categories_list = Blog_categories::all();
    return view('back.category.index', compact('blog_categories_list'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return view('back.category.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Blog_categoriesRequest $request, Blog_categories $blog_categories)
  {
    $input = $request->all();
    $input['slug'] = Str::slug($request->get('name'));
    $blog_categories = Blog_categories::create($input);
    Session::flash('flash_message', 'Data berhasil disimpan.');
    return redirect('backscreen/blog_categories');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show(Blog_categories $blog_categories)
  {
    return view('back.category.show', compact('blog_categories'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit(Blog_categories $blog_categories)
  {
    return view('back.category.edit', compact('blog_categories'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(Blog_categoriesRequest $request, Blog_categories $blog_categories)
  {
    $blog_categories->update($request->all());
    Session::flash('flash_message', 'Data berhasil disimpan.');
    return redirect('backscreen/blog_categories');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy(Blog_categories $blog_categories)
  {
    $blog_categories->delete();
    Session::flash('flash_message', 'Data berhasil dihapus.');
    Session::flash('penting', true);
    return redirect('backscreen/blog_categories');
  }
  
}

?>