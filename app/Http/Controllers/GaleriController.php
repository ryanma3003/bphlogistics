<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\GaleriRequest;
use Illuminate\Foundation\Http\FormRequest;
use Session;
use Storage;
use App\Filter_galeri;
use App\Galeri;

class GaleriController extends Controller {

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
    $galeri_list = Galeri::all();
    return view('back.galeri.index', compact('galeri_list', 'filter_galeri_list'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return view('back.galeri.create', compact('filter_galeri_list'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(GaleriRequest $request, Galeri $galeri)
  {

    $input = $request->all();
    //upload foto
    if ($request->hasFile('gambar')) {
      $input['gambar'] = $this->uploadImage($request);
    }
    $galeri = Galeri::create($input);
    Session::flash('flash_message', 'Data berhasil disimpan.');
    return redirect('backscreen/galeri');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show(Galeri $galeri)
  {
    return view('back.galeri.show', compact('galeri'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit(Galeri $galeri)
  {
    return view('back.galeri.edit', compact('galeri'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(GaleriRequest $request, Galeri $galeri)
  {
    $input = $request->all();
    if ($request->hasFile('gambar')) {
      $this->deleteImage($galeri);
      $input['gambar'] = $this->uploadImage($request);
    }
    $galeri->update($input);
    Session::flash('flash_message', 'Data berhasil disimpan.');
    return redirect('backscreen/galeri');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy(Galeri $galeri)
  {
    $galeri->delete();
    Session::flash('flash_message', 'Data berhasil dihapus.');
    Session::flash('penting', true);
    return redirect('backscreen/galeri');
  }
  
  private function uploadImage (GaleriRequest $request)
  {
    $image = $request->file('gambar');
    $ext = $image->getClientOriginalExtension();

    if ($request->file('gambar')->isValid()) {
      $image_name = date('YmDHis'). ".$ext";
      $upload_path = 'galeri';
      $request->file('gambar')->move($upload_path, $image_name);

      return $image_name;
    }
    return false;
  }

  private function deleteImage (Galeri $galeri)
  {
    $exist = Storage::disk('gambar')->exists($galeri->gambar);

    if (isset($galeri->gambar) && $exist) {
      $delete = Storage::disk('gambar')->delete($galeri->gambar);
      if ($delete) {
        return true;
      }
      return false;
    }
  }
}

?>