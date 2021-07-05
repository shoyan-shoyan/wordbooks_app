<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // if ($this->path() === '/')
        // {
        //     //リクエストのパスが"/"のときだけ、このクラスで定義した
        //     //バリデーションルールを適用する
            return true;
        // }
        // else
        // {
            // return false;
        // }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        // return [
        //     'content' => 'required',
        //     'answer' => 'required',
        //     'bookname' => 'required',
        //     // 'name'  => 'required',
        // ];
        
        // バリデーションルールをまとめる配列です。
        $rules = [];

        // $this->has()は$request->has()のことです。
        // has()で指定した項目の有無を確認し、あればルールを追加します。    
        if ($this->has('content')) {
            $rules['content'] = 'required|max:255';
        }
        
        if ($this->has('answer')) {
            $rules['answer'] = 'required|max:255';
        }
        
        if ($this->has('bookname')) {
            $rules['bookname'] = 'required|max:50';
        }

        return $rules;
        
    }
    
    public function messages()
    {
        return [
            'content.required' => '単語は必須入力です。',
            'content.max' => '255文字以内で入力してください。',
            'answer.required' => '解答は必須入力です。',
            'answer.max' => '255文字以内で入力してください。',
            'bookname.required' => '必須入力です。',
            'bookname.max' => '50文字以内で入力してください。',
        ];
    }
}
