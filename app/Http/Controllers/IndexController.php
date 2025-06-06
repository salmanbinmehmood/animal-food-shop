<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Product_category;
use App\Models\Blog;
use App\Models\Inquiry;
use App\Models\Product_image;
use Carbon\Carbon;
use Stevebauman\Location\Facades\Location;





class IndexController extends Controller


{
    public function topSellingProducts(){
        $products = Product::where('is_active', 1)->get();
        $all_top_selling = [];
        $startOfWeek = Carbon::now()->startOfWeek();

        // Loop through all products
        foreach ($products as $product) {
        // Merge each product's topSellingProducts into one big array
            foreach ($product->topSellingProducts as $item) {
                if ($item->updated_at >= $startOfWeek){
                    $all_top_selling[] = $item;
                }


    }
}
        // dd($top_sold);
        // Sort the array in descending order by 'sold' key
        // dd($all_top_selling);

        usort($all_top_selling, function($a, $b) {
            return $b['sold'] <=> $a['sold'];
        });
        // getting  product_id from topselling model
        $productIds = collect($all_top_selling)->pluck('product_id');
        // compare the product's id with topselling model stored product id in product_id column
        $top_products = Product::whereIn('id', $productIds)->get();
        return $top_products;

    }


    public function index(){
        $product_cat = Product_category::where('is_active', 1)->get();
        $products = Product::where('is_active', 1)->get();
        $blogs = Blog::all();
        $week_top_sold = $this->topSellingProducts();

        $sale = Product::where('is_active', 1)->where('is_sale',1)->first();
        $saleEndTime = $sale->deal_end_time;
        $is_sale = false;
        $sale_products = Product::where('is_active', 1)->where('is_sale',1)->get();

        if (empty($saleEndTime) || $saleEndTime == '0000-00-00 00:00:00') {
            $sale->deal_end_time = null; // or any default value
            $sale->save();

        }
        else {
            $now = Carbon::now();;
            $end = Carbon::parse($saleEndTime);
            // dd($end);

            if ($end->greaterThan($now)) {
                $diff = $now->diff($end);
                $is_sale = true;
            }
            else {
                $sale->deal_end_time = null; // Deal has ended
                $sale->save();
            }
            }



        // sending sale_products in blade to  fetch all sale-products
        if($is_sale){
            $data = compact('product_cat','products','sale_products','is_sale','diff','sale','week_top_sold','blogs');
        }
        else{
            $data = compact('product_cat','products','sale_products','is_sale','sale','week_top_sold','blogs');
        }



        return view('index')->with($data );
    }
    public function gallery(){
        return view('gallery');
    }
    public function about(){
        return view('about');
    }
    public function  contact(){
        return view('contact');
    }
    public function  submitContact(Request $request){
        $request->validate([
            'fname' => 'required|max:255',
            'lname' => 'required|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required',
            'phone' => 'required|max:255',
        ]);

        $inquiry = Inquiry::create([
            'fname' =>  $request['fname'],
            'lname' =>  $request['lname'],
            'email' =>  $request['email'],
            'message' =>  $request['message'],
            'phone' =>  $request['phone'],

        ]);

        return redirect('/');
    }
    public function blog(){
        $blogs = Blog::all();
        return view('blog',compact('blogs'));
    }

    public function blogDetail($id){
        $blog = Blog::findOrFail($id);
        return view('blog-detail',compact('blog'));

    }
    public function login(){
        return view('login');
    }

    public function productAjax($id)
{
    $image = Product_image::findOrFail($id);

    if (request()->ajax()) {
        return response()->json([
            'img_path' => $image->img_path,
        ]);
    }


}


    public function productDetail($id)
{
        // Get the main product by its ID
        $product = Product::findOrFail($id);

        // Get the category of that product And Get all products in that category
        $other_products = $product->category->products;

        // Get other images of products from product_images
        $other_images = $product->product_images;



        return view('product-detail', compact('product', 'other_products','other_images'));
}


//     public function productDetail($id)
// {

//         $category = Product_category::findOrFail($id);
//         $other_products = $category->products;
//         $product = Product::where('id', $id)->first();
//         dd($other_products);
//         return view('product-detail',compact('product','other_products'));
//     }



    public function product()
    {
        $products = Product::all();
        // dd($product);
        return view('product',compact('products'));
    }
    // public function productCategory(){
    //     $product = Product::all();
    //     // dd($product);
    //     return view('product',compact('product'));
    // }

    public function showByCategory($id)
    {
        $products = Product::where('category_id', $id)->get();
        $category = Product_category::findOrFail($id);
        // dd($category->title );

        return view('category', compact('products', 'category'));
    }

    public function cart(){
        return view('cart');
    }

}
