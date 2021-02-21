<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public static function rules()
    {
        return [
            'productName' => 'required|string|max:20',
            'categoryId' => 'required|numeric|exists:m_categories,id',
            'price' => 'required|numeric',
            'saleStatusId' => 'required|numeric|exists:m_sales_statuses,id',
            'productStatusId' => 'required|numeric|exists:m_products_statuses,id',
            'description' => 'required|max:191',
            'product_image' => 'required',
        ];
    }

    public function messages()
    {
        return [
            "productName.required" => "商品名は必須項目です。",
            "productName.string" => "商品名は文字で入力してください。",
            "productName.max" => "商品名は20文字以内で入力してください。",
            "categoryId.required" => "商品カテゴリは必須項目です。",
            "categoryId.exists:m_categories,id" => "指定された商品カテゴリは存在しません。",
            "price.required" => "販売単価は必須項目です。",
            "price.numeric" => "販売単価は数字で入力してください。",
            "saleStatusId.required" => "販売状態は必須項目です。",
            "saleStatusId.exists:m_sales_statuses,id" => "指定された販売状態は存在しません。",
            "productStatusId.required" => "商品状態は必須項目です。",
            "productStatusId.exists:m_products_statuses,id" => "指定された商品状態は存在しません。",
            "description.required" => "商品説明は必須項目です",
            "description.max" => "商品説明は191文字いないで記入してください",
            "product_image.required" => "ファイルを選択してください",
            "product_image.image" => "指定されたファイルが画像(jpg、png、bmp、gif、svg)ではありません。",
        ];
    }
}
