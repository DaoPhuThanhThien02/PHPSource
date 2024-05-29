<?php

namespace App\Http\Controllers;

use App\Models\ProductModel;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('customer');
    }
    
    public function login()
    {
        $name = "Nguyễn Minh Anh!";
        return view('login') -> with('name', $name);
    }

    function getProducts()
    {
        $products = ProductModel::all();
        return view('admin.product.getProducts', ['products' => $products]);
    }

    function getProductsByBand(Request $request)
    {
        $band = $request -> input('selectBand');  # tim kiem theo Band
        $products = ProductModel::where('band', $band) -> get();  # band trong CSDL  $band lay tu select Band
        return view('admin.product.getProductsByBand', ['products' => $products]);  # form minh phai thiet ke
    }

    function editProduct($pid)
    {
        $product = ProductModel::where('pid', $pid) -> first();
        return view('admin/product/updateProduct', ['product' => $product]);
    }

    function updateProduct(Request $request, $pid)
    {
        $product = ProductModel::where('pid', $pid) -> first();
        $product -> pid = $request -> pid;
        $product -> pname = $request -> pname;
        $product -> company = $request -> company;
        $product -> band = $request -> selectBand;
        $product -> year = $request -> selectYear;
        if (isset($_FILES['ImageFile']) && $_FILES['ImageFile']['error'] === UPLOAD_ERR_OK) {
            $pimange = 'data:image/png;base64,'
                .base64_decode(file_get_contents($_FILES['ImageFile']['tmp_name']));
            $product -> pimage = $pimange;
        }
        $product -> save();
        return redirect('updateProduct/' . $pid)
        -> with("Note", "Sửa thành công");
    }

    function deleteProduct($pid)
    {
        $product = ProductModel::where('pid', $pid) -> first();
        $product -> delete();
        return redirect('getProducts/' )
        -> with("Note", "Xóa thành công");
    }
}
