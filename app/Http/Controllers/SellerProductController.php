<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\MProduct;
use App\MCategory;

class SellerProductController extends Controller
{
    //商品一覧の初期表示
    public function index(Request $request)
    {
        // 商品の情報を取得
        $product = new MProduct;
        $products = $product->all();

        // カテゴリの情報を取得
        $category = new MCategory;
        $categories = $category->getLists();

        $searchWord = $request->input('searchWord');
        $categoryId = $request->input('categoryId');

        // ページネーション
        $query = MProduct::query();
        $products = $query->orderBy('category_id', 'asc')->paginate(15);
        
        return view('seller_search_product',[
            'categories' => $categories,
            'products' => $products,
            'searchWord' => $searchWord,
            'categoryId' => $categoryId
        ]);
    }

    public function search(Request $request)
    {
        // 入力される値を定義する
        $searchWord = $request->input('searchWord'); //商品名
        $categoryId = $request->input('categoryId'); //カテゴリ名

        $query = MProduct::query();
        // 商品名が入力された場合、m_productsテーブルから一致する商品を検索する
        if(isset($searchWord))
        {
            $query->where('product_name', 'like', '%' . self::escapeLike($searchWord) . '%');
        }

        // カテゴリが選択された場合、m_categoriesテーブルからcategory_idが一致する商品を検索する
        if(isset($categoryId))
        {
            $query->where('category_id', $categoryId);
        }

        // category_idの昇順に並び替える('asc')
        $products = $query->orderBy('category_id', 'asc')->paginate(15);
        
        // category_nameとidを取得
        $category = new MCategory;
        $categories = $category->getLists();

        return view('seller_search_product',[
            'products' => $products,
            'categories' => $categories,
            'searchWord' => $searchWord,
            'categoryId' => $categoryId
        ]);
    }

    public static function escapeLike($str)
    {
        return str_replace(['\\', '%', '_'], ['\\\\', '\%', '\_'], $str);
    }
}
