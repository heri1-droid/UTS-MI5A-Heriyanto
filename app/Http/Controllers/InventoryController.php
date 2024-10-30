<?php

namespace App\Http\Controllers;

use App\Models\inventory;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function show(inventory $inventory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(inventory $inventory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, inventory $inventory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(inventory $inventory)
    {
        //
    }
    public function getInventory(){
        $response['data'] = inventory::all();
        $response['message'] = 'List data inventory';
        $response['success'] = true;

        return response()->json($response, 200);
    }

    public function storeInventory(Request $request){
       
        $input = $request->validate([
            "namaBarang"      => "required|unique:inventories",
            "jumlah"     => "required",
            "kategori" => "required",
            "harga" => "required",
            "statusBarang" => "required",
            "stokBarang" => "required"

        ]);

        // simpan
        $hasil = inventory::create($input);
        if($hasil){ // jika data berhasil disimpan
            $response['success'] = true;
            $response['message'] = $request->nama." berhasil disimpan";
            return response()->json($response, 201); // 201 Created
        } else {
            $response['success'] = false;
            $response['message'] = $request->nama." gagal disimpan";
            return response()->json($response, 400); // 400 Bad Request
        }
    }

    public function destroyInventory($id)
    {
        // cari data di tabel fakultas berdasarkan "id" fakultas
        $inventory = inventory::find($id);

        $hasil = $inventory->delete();
        if($hasil){ // jika data berhasil disimpan
            $response['success'] = true;
            $response['message'] = "inventory berhasil dihapus";
            return response()->json($response, 200);
        } else {
            $response['success'] = false;
            $response['message'] = "inventory gagal dihapus";
            return response()->json($response, 400);
        }
    }
    

   /* public function updateInventory(Request $request){
       
        $input = $request->validate([
            "namaBarang"      => "required|unique:inventories",
            "jumlah"     => "required",
            "kategori" => "required",
            "harga" => "required",
            "statusBarang" => "required",
            "stokBarang" => "required"

        ]);

        // simpan
        $hasil = inventory::update($input);
        if($hasil){ // jika data berhasil disimpan
            $response['success'] = true;
            $response['message'] = $request->nama." berhasil disimpan";
            return response()->json($response, 201); // 201 Created
        } else {
            $response['success'] = false;
            $response['message'] = $request->nama." gagal disimpan";
            return response()->json($response, 400); // 400 Bad Request
        }
    }*/

}
