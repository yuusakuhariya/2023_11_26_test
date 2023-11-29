@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/manage.css') }}">
@endsection


@section('content')


<div class="contact-form__content">
    <div class="contact-form__heading">
        <h2>管理システム</h2>
    </div>
    <form class="form" action="/contacts/search" method="get">
        @csrf
        <div class="contact-form__inner">
            <div class="contact-form__group">
                <div class="contact-form__title">お名前</div>
                    <input class="input-name" type="name" name="fullname" value="{{ old('fullname') }}" />
                <div class="contact-form__group-gender">
                    <div class="title__gender">性別</div>
                        <input class="input-radio" type="radio" name="gender" value="" />
                    <div class="title__gender">全て</div>
                        <input class="input-radio" type="radio" name="gender" value="" />
                    <div  class="title__gender">男性</div>
                        <input class="input-radio" type="radio" name="gender" value="" />
                    <div class="title__gender">女性</div>
                </div>
            </div>
            <div class="contact-form__group">
                <div class="contact-form__title">登録日</div>
                <input class="input-save" type="date" name="from" placeholder="from_date" />
                    <span>~</span>
                <input class="input-save" type="date" name="until" placeholder="until_date" />
            </div>
            <div class="contact-form__group">
                <div class="contact-form__title">メールアドレス</div>
                <input class="input-email" type="email" name="email" value="" />
            </div>
            <div class="form__button">
                <button class="form__button-submit" type="submit">検索</button>
            </div>
            <div class="reset__button">
                <a class="reset__button-submit" href="/contacts/manage">修正する</a>
            </div>
        </div>
        
    </form>
        <div class="pagination">
            {{ $contacts->links() }}
        </div>

    <form class="form__table" action="/contacts/delete" method="post">
        @method('DELETE')
        @csrf
        <table class="table-inner">
            <tr class="table-row__title">
                <th class="table-column__id">ID</th>
                <th class="table-column__fullname">お名前</th>
                <th class="table-column__gender">性別</th>
                <th class="table-column__email">メールアドレス</th>
                <th class="table-column__content">ご意見</th>
            </tr>
            @foreach( $contacts as $contact )
            <tr class="table-row__save">
                <td class="table-column__id">
                    <input class="id" type="id" name="id" value="{{ $contact['id'] }}">
                    <input class="id" type="hidden" name="id" value="{{ $contact['id'] }}">
                </td>
                <td class="table-column__fullname">
                    <input class="name" type="name" name="fullname" value="{{ $contact['fullname'] }}">
                </td>
                <td class="table-column__gender">
                    <input class="gender" type="text" name="gender" value="{{ $contact['gender'] }}">
                </td>
                <td class="table-column__email">
                    <input class="email" type="email" name="email" value="{{ $contact['email'] }}">
                </td>
                <td class="table-column__opinion">
                    <input class="opinion" type="text" name="opinion" maxlength="25" value="{{ $contact['opinion'] }}">
                </td>
                <td class="delete__button">
                    <button class="delete__button-submit" type="submit">削除</button>
                </td>
            </tr>
            @endforeach
        </table>
    </form>
</div>


@endsection