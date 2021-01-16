<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class apicontroller extends Controller
{
   public function index(){

   		return response()->json(Product::all(), 200);

   }

   public function create(Request $request){

   	$product = new Product;
   	$product->name = $request->name;
   	$product->description = $request->description;
   	$product->price = $request->price;
   	$product->weight = $request->weight;
   	$product->status = $request->status;

   	$product->save();

   	return "Data berhasil ditambah"; 

   }

   public function update(Request $request, $id){

   	$name = $request->name;
   	$description = $request->description;
   	$price = $request->price;
   	$weight = $request->weight;
   	$status = $request->status;

   	$product = Product::find($id);


   	$product->name = $name;
   	$product->description = $description;
   	$product->price = $price;
   	$product->weight = $weight;
   	$product->status = $status;

   	$product->save();

   	return "Data berhasil diupdate"; 

   }

   public function delete(Request $request, $id){

   	$product = Product::find($id);
   	$product->delete();

   	return "Data berhasil di Hapus"; 

   }

}
