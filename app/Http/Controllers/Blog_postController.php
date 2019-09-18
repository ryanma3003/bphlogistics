<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Blog_post;
use App\Blog_categories;
use App\Blog_post_tag;
use App\Blog_tag;
use App\Http\Requests\Blog_postRequest;
use Illuminate\Foundation\Http\FormRequest;
use Session;
use Storage;
use Illuminate\Support\Str;

class Blog_postController extends Controller {

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
    $blog_post_list = Blog_post::orderBy('title', 'asc')->paginate(10);
    $jumlah_blog_post = Blog_post::count();
    return view('back.blog.index', compact('blog_post_list', 'jumlah_blog_post'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return view('back.blog.create', compact('blog_categories_list'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Blog_postRequest $request, Blog_post $blog_post)
  {
    $input = $request->all();

    $input['slug'] = Str::slug($request->get('title'));

    //upload foto
    if ($request->hasFile('image')) 
    {
      $input['image'] = $this->uploadImage($request);
    }

    $blog_post = Blog_post::create($input);
    Session::flash('flash_message', 'Data berhasil disimpan.');
    return redirect('backscreen/blog_post');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show(Blog_post $blog_post)
  {
    return view('back.blog.show', compact('blog_post'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit(Blog_post $blog_post)
  {
    return view('back.blog.edit', compact('blog_post'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(Blog_post $blog_post, Blog_postRequest $request)
  {
    $input = $request->all();
    if ($request->hasFile('image')) {
      $this->deleteImage($blog_post);
      $input['image'] = $this->uploadImage($request);
    }
    $blog_post->update($input);
    Session::flash('flash_message', 'Data berhasil disimpan.');
    return redirect('backscreen/blog_post');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy(Blog_post $blog_post)
  {
    $blog_post->delete();
    Session::flash('flash_message', 'Data berhasil dihapus.');
    Session::flash('penting', true);
    return redirect('backscreen/blog_post');
  }
  
  private function uploadImage (Blog_postRequest $request)
  {
    $image = $request->file('image');
    $ext = $image->getClientOriginalExtension();

    if ($request->file('image')->isValid()) {
      $image_name = date('YmDHis'). ".$ext";
      $upload_path = 'imageblog';
      $request->file('image')->move($upload_path, $image_name);

      return $image_name;
    }
    return false;
  }

  private function deleteImage (Blog_post $blog_post)
  {
    $exist = Storage::disk('image')->exists($blog_post->image);

    if (isset($blog_post->image) && $exist) {
      $delete = Storage::disk('image')->delete($blog_post->image);
      if ($delete) {
        return true;
      }
      return false;
    }
  }

  public function cari (Request $request)
  {
    $kata_kunci = $request->input('kata_kunci');
    $query = Blog_post::where('title', 'LIKE', '%' . $kata_kunci . '%');
    $blog_post_list = $query->paginate(5);
    $pagination = $blog_post_list->appends($request->except('page'));
    $jumlah_blog_post = $blog_post_list->total();
    return view('back.blog.index', compact('blog_post_list', 'kata_kunci', 'pagination', 'jumlah_blog_post'));
  }

}

?>