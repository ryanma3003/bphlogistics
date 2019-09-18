<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\Filter_galeriRequest;
use Illuminate\Foundation\Http\FormRequest;
use Session;
use App\Galeri;
use App\Filter_galeri;

class Filter_galeriController extends Controller {

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
    $filter_galeri_list = Filter_galeri::all();
    return view('back.filter.index', compact('filter_galeri_list'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return view('back.filter.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Filter_galeriRequest $request)
  {
    Filter_galeri::create($request->all());
    Session::flash('flash_message', 'Data berhasil disimpan.');
    return redirect('backscreen/filter_galeri');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show(Filter_galeri $filter_galeri)
  {
    return view('back.filter.show', compact('filter_galeri'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit(Filter_galeri $filter_galeri)
  {
    return view('back.filter.edit', compact('filter_galeri'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(Filter_galeriRequest $request, Filter_galeri $filter_galeri)
  {
    $filter_galeri->update($request->all());
    Session::flash('flash_message', 'Data berhasil disimpan.');
    return redirect('backscreen/filter_galeri');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy(Filter_galeri $filter_galeri)
  {
    $filter_galeri->delete();
    Session::flash('flash_message', 'Data berhasil disimpan.');
    Session::flash('penting', true);
    return redirect('backscreen/filter_galeri');
  }
  
}

?>