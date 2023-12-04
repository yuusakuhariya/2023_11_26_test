<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//ページネーション指定？
// use Illuminate\Pagination\Paginator;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    // indexビューへの表示
    public function index()
    {
        return view('index');
    }


    // manageビューへの表示（変数contactを送っている）
    // Contactクラスを使ってpaginateも表示
    public function manage()
    {
        $contacts = Contact::paginate(5);

        return view('manage', ['contacts' => $contacts]);
    }


    // フォーム送信時のconfirmの表示（バリデーション表示）
    public function confirm(ContactRequest $request)
    {

        $contacts = [
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'gender' => $request->input('gender'),
            'email' => $request->input('email'),
            'postcode' => $request->input('postcode'),
            'address' => $request->input('address'),
            'building_name' => $request->input('building_name'),
            'opinion' => $request->input('opinion'),
        ];

        return view('confirm', ['contacts' => $contacts]);
    }


    // データベースへ保存機能
    public function store(Request $request)
    {
        $fullname = $request->input('first_name') . ' ' . $request->input('last_name');

        $contacts = [
            'fullname' => $fullname,
            'gender' => (int)$request->input('gender'),
            'email' => $request->input('email'),
            'postcode' => $request->input('postcode'),
            'address' => $request->input('address'),
            'building_name' => $request->input('building_name'),
            'opinion' => $request->input('opinion'),
        ];

        Contact::create($contacts);

        return view('thanks');
    }


    // 削除機能
    public function destroy(Request $request)
    {
        Contact::find($request->id)->delete();

        return redirect('/contacts/manage');
    }


    // 検索機能（名前、メールアドレス、日付範囲検索、性別）
    public function search(Request $request)
    {
        $fullname = $request->input('fullname');
        $email = $request->input('email');
        $from = $request->input('from');
        $until = $request->input('until');
        $gender = $request->input('gender');

        $contacts = Contact::FullnameSearch($fullname)->EmailSearch($email)->DateSearch($from, $until)->GenderSearch($gender)->paginate(5);

        return view('manage', ['contacts' => $contacts]);
    }




    // session作成 分からない
    // public function postSes(Request $request)
    // {
    //     $contacts = [
    //         'first_name' => $request->input('first_name'),
    //         'last_name' => $request->input('last_name'),
    //         'gender' => (int) $request->input('gender'),
    //         'email' => $request->input('email'),
    //         'postcode' => $request->input('postcode'),
    //         'address' => $request->input('address'),
    //         'building_name' => $request->input('building_name'),
    //         'option' => $request->input('option'),
    //     ];

    //     $request->session()->put('contacts', $contacts);

    //     return redirect('/');
    // }

    // public function getSes(Request $request)
    // {
    //     $contacts = $request->session()->get('contacts');

    //     return view('index', ['contacts' => $contacts]);
    // }

}
