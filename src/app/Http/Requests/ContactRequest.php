<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
        return [
            'first_name' => 'required',
            'last_name' => 'required',
            'gender' => 'required',
            'email' => 'required|email',
            'postcode' => 'required|regex:/^[0-9]{3}-[0-9]{4}$/u',
            'address' => 'required',
            'opinion' => 'required|max:120'
            
        ];
    }

    // // 郵便番号は全角の場合は自動で半角に変換
    // protected function prepareForValidation()
    // {
    //     // 入力データから郵便番号の値を習得
    //     $postcode = $this->input('postcode');

    //     // mb_convert_kana を使用して「郵便番号」値を変換
    //     // 'as' 引数は変換モード (全角から半角) を指定
    //     $convertedPostcode = mb_convert_kana($postcode, 'as');

    //     // 変更した「郵便番号」値をリクエストデータにマージして戻す
    //     $this->merge([
    //         'postcode' => $convertedPostcode,
    //     ]);
    // }

    // 上記の短縮形
    protected function prepareForValidation()
    {
        $this->merge([
            'postcode' => mb_convert_kana($this->input('postcode'), 'as'),
        ]);
    }

    public function messages()
    {
        return [
            'first_name.required' => '苗字を入力して下さい', 
            'last_name.required' => '名前を入力して下さい', 
            'gender.required' => '選択して下さい',
            'email.required' => 'メールアドレスを入力して下さい',
            'email.email' => '形式をメールアドレスにして下さい',
            'postcode.required' => '郵便番号を入力して下さい',
            'postcode.regex' => '郵便番号は半角の数字とハイフンの形式で入力してください',
            'address.required' => '住所を入力して下さい',
            'opinion.required' => '入力して下さい',
            'opinion.max' => '120字以内で入力して下さい',
        ];
    }
}
