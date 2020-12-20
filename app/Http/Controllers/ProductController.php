<?php 

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use DB;
class ProductController extends Controller
{
	function getProduct(Request $request)
	{
		$skip = $request->skip;
		$limit = $request->limit;
		$ProductModel = new Product();
		$data = $ProductModel->getProduct($skip, $limit);
		$totalCount = $ProductModel->getTotalProduct();
		$response['data'] = $data;
		$response['totalRecord'] = $totalCount;
		return response()->json($response);
	}

	function addProduct(Request $request)
	{
	
		$file = $request->file('file');
		$uploadPath = "public/image";
		$originalImage = $file->getClientOriginalName();
		$file->move($uploadPath, $originalImage);
		$productData = json_decode($request->data, true);
		$productData['image'] =$originalImage; 
		$response['message'] = "Product Added Successfully";
		$ProductModel = new Product();
		$ProductModel->addProduct($productData);	
	}
	function deleteProduct(Request $request)
	{
		$id=$request->id;	
		$ProductModel = new Product();
		$ProductModel->deleteProduct($id);	
	}
	function updateProduct(Request $request)
	{
		$id=$request->id;
		$ProductModel = new Product();
		$ProductModel->updateProduct($id, $request->all());
	
	}
	function getOneProduct(Request $request)
	{
		$id=$request->id;	
		$ProductModel = new Product();
		$data = $ProductModel->getOneProduct($id);	
		return response()->json($data);
	}
}