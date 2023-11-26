@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection


@section('content')


<div class="contact-form__content">
    <div class="contact-form__heading">
        <h2>内容確認</h2>
    </div>
    <form class="form" action="">
        <div class="confirm-table">
            <table class="confirm-table__inner">
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">お名前</th>
                    <td class="confirm-table__text-inner">
                        <input type="name" name="first__name" value="" />
                        <input type="name" name="last__name" value="" />
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">性別</th>
                    <td class="confirm-table__text">
                        <input type="text" name="gender" value="" />
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">メールアドレス</th>
                    <td class="confirm-table__text">
                        <input type="email" name="email" value="" />
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">郵便番号</th>
                    <td class="confirm-table__text">
                        <input type="text" name="postcode" value="" />
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">住所</th>
                    <td class="confirm-table__text">
                        <input type="text" name="address" value="" />
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">建物名</th>
                    <td class="confirm-table__text">
                        <input type="text" name="building-name" value="" />
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">ご意見</th>
                    <td class="confirm-table__text">
                        <input type="text" name="content" value="" />
                    </td>
                </tr>
            </table>
        </div>
        <div class="form__button">
            <button class="form__button-submit" type="submit">確認</button>
        </div>
        <div class="reset__button">
            <a class="reset__button-submit" href="/">修正する</a>
        </div>
    </form>
</div>


@endsection