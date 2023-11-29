<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function manage()
    {
        $contacts = Contact::paginate(2);

        return view('manage', ['contacts' => $contacts]);
    }


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


    // 検索機能
    // public function search(Request $request)
    // {
    //     $fullname = $request->input('fullname');
    //     $keyword = $request->input('keyword');

    //     $contacts = Contact::FullnameSearch($fullname)->ContactSearch($keyword)->get();

    //     return view('manage', ['contacts' => $contacts]);
    // }

    public function search(Request $request)
    {
        $fullname = $request->input('fullname');

        $contacts = Contact::FullnameSearch($fullname)->paginate(2);

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
