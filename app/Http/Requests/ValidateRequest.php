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

            return true;

    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

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

        if ($this->has('tags')) {
            $rules['tags'] = 'json|regex:/^(?!.*\s).+$/u|regex:/^(?!.*\/).*$/u';
        }
        if ($this->has('img_name')) {
            $rules['img_name'] = 'file|image|mimes:jpeg,png,jpg|max:1100';
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
            'tags.regex' => 'タグ名にスペースと"/"は使えません。',
            'img_name.max' => 'ファイルサイズが1MBを超えています。',
        ];
    }

    public function passedValidation()
    {
        $this->tags = collect(json_decode($this->tags))
            ->slice(0, 5)
            ->map(function ($requestTag) {
                return $requestTag->text;
            });
    }

}
