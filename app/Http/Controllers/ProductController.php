<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Rating;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ProductController extends Controller
{
    public function man(){
        $products = Product::where('category', 'man')->get();
        return view('base', [
            "products" => $products
        ]);
    }
    public function woman(){
        $products = Product::where('category', 'woman')->get();
        return view('base', [
            "products" => $products
        ]);
    }
    public function latest(){
        $products = Product::latest()->get();
        return view('base', [
            "products" => $products
        ]);
    }
    public function top(){
        $products = Product::orderBy('rating', 'DESC')->get();
        return view('base', [
            "products" => $products
        ]);
    }

    public function storeRating(Request $request){
        
        $rating = Rating::create([
            "product_id"=>$request->product_id,
            "rating"=>$request->rating,
        ]);
        $products = Product::where('id', $request->product_id)
                    ->withCount('rating', 'rating')
                    ->withSum('rating', 'rating')
                    ->first();
        $products->rating = $products->rating_sum_rating/$products->rating_count;
        $products->save();
    
        Alert::success('Success', 'Terima kasih Ratingnya ');
        return redirect()->back();
    }
}
