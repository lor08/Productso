<?php
namespace lor08\Productso\Http\Controllers;

use App\Http\Controllers\Controller;
use lor08\Productso\Models\PrsoProduct as Product;
use lor08\Productso\Models\PrsoCategory as Category;

class PrsoProductController extends Controller
{

    public function show($slug, $categoryid = null)
    {
        if ($product = Product::where('slug', $slug)->first()) {
            $parentCategores = $product->categories;
            $pathCategory = Category::find($categoryid);
            return view('Productso::product_show', compact('product', 'parentCategores', 'pathCategory'));
        }
        abort(404);
    }
}