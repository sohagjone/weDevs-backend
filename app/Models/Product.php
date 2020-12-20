<?php 

namespace App\Models;
use DB;

class Product
{
		function getProduct($skip , $limit)
		{
			$data = DB::table('product')->skip($skip)->take($limit)->get();
			return $data;
		}
		function getTotalProduct()
		{
			$data = DB::table('product')->get()->count();
			return $data;
		}
		function addProduct($data)
		{
			DB::table('product')->insert($data);
		}

		function deleteProduct($id)
		{
			DB::table('product')->where('id', $id)->delete();
		}
		function getOneProduct($id)
		{
			$data = DB::table('product')->where('id', $id)->get()->first();
			return $data;
		}
		function updateProduct($id, $data)
		{
			DB::table('product')->where('id', $id)->update($data);	
		}
}