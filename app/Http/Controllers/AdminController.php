<?php

namespace App\Http\Controllers;

use App\GalleryImage;
use App\Order;
use App\Product;
use App\ProductType;
use Illuminate\Http\Request;
use Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Session\Session;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('admin');
    }

    public function orders(){
        $orders = Order::all()->sortByDesc('created_at');
//        $orders = DB::select('SELECT * FROM orders ORDER BY created_at DESC');
        $orders->transform(function($order, $key){
            $order->cart = unserialize($order->order_details);
            return $order;
        });

        $results = array(
            'orders' => $orders,
        );

        return view('adminOrders')->with($results);
    }

    public function indexProductTypes()
    {
        $productTypes = DB::select('SELECT * FROM product_types ORDER BY created_at DESC');
        $results = array(
            'productTypes' => $productTypes,
        );
        return view('adminProductTypes')->with($results);
    }

    public function addProductType(Request $request){
        $productTypeName = $request->productTypeName;
        $productTypeCategory = $request->productTypeCategory;
        $productTypeImg = $request->productTypeImg;

        $dbName = 'website';
        $tableName = 'product_types';

        $info = DB::select('SELECT `AUTO_INCREMENT`FROM  INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = ? AND   TABLE_NAME   = ?',[$dbName,$tableName]);

        $autoInc = $info[0]->AUTO_INCREMENT;

        $imgName = "product_type".$autoInc;

        $extension = $productTypeImg->extension();

        $storeImg = $productTypeImg->storeAs( '' , $imgName.".".$extension , 'upload');

        $imgPath  = 'uploads/'.$storeImg;

        $p =new ProductType();
        $p->product_type_name =  $productTypeName;
        $p->product_type_category = $productTypeCategory;
        $p->product_type_img_name = $imgName;
        $p->product_type_img_location = $imgPath;
        $p->product_type_img_ext = $extension;
        $save = $p->save();

        return redirect('/adminProductTypes');
    }

    public function indexProducts()
    {
        $productTypes = DB::select('SELECT * FROM product_types');
        $products = DB::select('SELECT * FROM products ORDER BY created_at DESC');
        $results = array(
            'productTypes' => $productTypes,
            'products' => $products,
        );
        return view('adminProducts')->with($results);
    }

    public function addProduct(Request $request){
        $productCode = $request->productCode;
        $productName = $request->productName;
        $productDescription = $request->productDescription;
        $productType = $request->productType;
        $productPrice = $request->productPrice;
        $productImg = $request->productImg;

        $dbName = 'website';
        $tableName = 'products';

        $info = DB::select('SELECT `AUTO_INCREMENT`FROM  INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = ? AND   TABLE_NAME   = ?',[$dbName,$tableName]);

        $autoInc = $info[0]->AUTO_INCREMENT;

        $imgName = "product".$autoInc;

        $extension = $productImg->extension();

        $storeImg = $productImg->storeAs( '' , $imgName.".".$extension , 'upload');

        $imgPath  = 'uploads/'.$storeImg;

        $p =new Product();
        $p->product_code =  $productCode;
        $p->product_type = $productType;
        $p->product_desc = $productDescription;
        $p->product_name = $productName;
        $p->product_img_name = $imgName;
        $p->product_img_location = $imgPath;
        $p->product_img_ext = $extension;
        $p->product_price = $productPrice;
        $save = $p->save();

        return redirect('/adminProducts');
    }

    public function editProductType(Request $request){

        $id = $request->productTypeId;
        $name = $request->productTypeName;
        $category = $request->productTypeCategory;
        $img = $request->newImg;
        $prevImgPath = $request->prevImg;
        $imgName = "product_type".$id;

        if($img != ''){

            $prev_del_path = public_path()."/".$prevImgPath;
            unlink($prev_del_path);

            $extension = $img->extension();

            $storeImg = $img->storeAs( '' , $imgName.".".$extension , 'upload');

            $imgPath  = 'uploads/'.$storeImg;

            $updateImg = DB::update("UPDATE product_types SET product_type_img_location = ? , product_type_img_ext = ?
            where product_type_id = ?", [$imgPath,$extension,$id]);
        }

        $update = DB::update("UPDATE product_types SET product_type_name = ? , product_type_category = ?
        where product_type_id = ?", [$name,$category,$id]);

        $msg = "Data updated";

        $msgs = array(
            'msg' => $msg,
        );

        return back()->with($msgs);
    }

    public function deleteProductType(Request $request){
        $id = $request->productTypeId;
        $img = $request->productTypeImg;

        $del_path = public_path()."/".$img;
        unlink($del_path);

        $delete = DB::delete("DELETE FROM product_types WHERE product_type_id=?",[$id]);

        return Response::json(['msg'=>"Product type deleted"]);
    }

    public function editProduct(Request $request){

        $id = $request->productId;
        $code = $request->productCode;
        $name = $request->productName;
        $desc = $request->productDesc;
        $type = $request->productType;
        $price = $request->productPrice;

        $img = $request->newProductImg;
        $prevImgPath = $request->prevImg;
        $imgName = "product".$id;

        if($img != ''){

            $prev_del_path = public_path().$prevImgPath;
            unlink($prev_del_path);

            $extension = $img->extension();

            $storeImg = $img->storeAs( '' , $imgName.".".$extension , 'upload');

            $imgPath  = 'uploads/'.$storeImg;

            $updateImg = DB::update("UPDATE products SET product_img_location = ? , product_img_ext = ?
            where id = ?", [$imgPath,$extension,$id]);
        }

        $update = DB::update("UPDATE products SET 	product_code = ? , product_type = ? , product_desc = ? , product_name = ? , product_price = ?
        where id = ?", [$code,$type,$desc,$name,$price,$id]);

        $msg = "Data updated";

        $msgs = array(
            'msg' => $msg,
        );

        return back()->with($msgs);
    }

    public function deleteProduct(Request $request){

        $id = $request->productId;
        $img = $request->productImg;

        $del_path = public_path()."/".$img;
        unlink($del_path);

        $delete = DB::delete("DELETE FROM products WHERE id=?",[$id]);

        return Response::json(['msg'=>"Product deleted"]);
    }

    public function adminGallery(){
        $galleryImages = DB::select('SELECT * FROM gallery_images ORDER BY created_at DESC');
        $results = array(
            'galleryImages' => $galleryImages,
        );
        return view('adminGallery')->with($results);
    }

    public function addGalleryImage(Request $request){

        $img = $request->galleryImg;


        $dbName = 'website';
        $tableName = 'gallery_images';

        $info = DB::select('SELECT `AUTO_INCREMENT`FROM  INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = ? AND   TABLE_NAME   = ?',[$dbName,$tableName]);

        $autoInc = $info[0]->AUTO_INCREMENT;

        $imgName = "gallery_img".$autoInc;

        $extension = $img->extension();

        $storeImg = $img->storeAs( '' , $imgName.".".$extension , 'upload');

        $imgPath  = 'uploads/'.$storeImg;

        $gI =new GalleryImage();
        $gI->img_name = $imgName;
        $gI->img_location = $imgPath;
        $gI->img_extension = $extension;
        $save = $gI->save();

        return redirect('/adminGallery');
    }

    public function deleteGalleryImg(Request $request){
        $id = $request->galleryImgId;
        $img = $request->galleryImg;

        $del_path = public_path()."/".$img;
        unlink($del_path);

        $delete = DB::delete("DELETE FROM gallery_images WHERE id=?",[$id]);

        return Response::json(['msg'=>"Image deleted"]);
    }
}
