<?php
/**
 * Created by PhpStorm.
 * User: LOR08
 * Date: 03.09.2016
 * Time: 22:43
 */
namespace lor08\Productso\Http\Controllers;

use App\Http\Controllers\Controller;
use lor08\Productso\Models\PrsoCategory as Category;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PrsoCategoryController extends Controller
{

    public function show($slug = 'root')
    {
        // Если запрос пришел не на конкретную категорию, а на раздел категорий, отдаем коллекцию категорий верхнего уровня
        if ($slug == 'root') {
            $nodes = Category::whereIsRoot()->get();
            $many = true;
            return view('Productso::category_show', compact('nodes', 'many'));
        }
        // Иначе отдаем запрашиваемую категорию c товарами
        if ($node = Category::where('slug', $slug)->first()) {

            $products = Category::find($node->id)->products()->paginate(Category::$productPerPage);
            $many = false;
            return view('Productso::category_show', compact('node', 'many', 'products'));
        }
        // ну или посылаем на 404 если нет такой
        abort(404);
    }
}