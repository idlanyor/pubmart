<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    return view('kategori.index');
  }
  public function listData()
  {
    $kategori = Kategori::orderBy('id', 'desc')->get();
    $no = 0;
    $data = array();
    foreach ($kategori as $list) {
      $no++;
      $row = array();
      $row[] = $no;
      $row[] = $list->nama_kategori;
      $row[] = $list->id_kategori;
      $data[]= $row;
    }
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    //
  }

  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(string $id)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    //
  }
}
