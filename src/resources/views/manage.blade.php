@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/manage.css') }}">
@endsection


@section('content')


<div class="contact-form__content">
    <div class="contact-form__heading">
        <h2>管理システム</h2>
    </div>
    <form class="form" action="">
        <div class="contact-form__inner">
            <div class="contact-form__group">
                <div class="contact-form__group-fullname">
                    <div class="contact-form__title">お名前</div>
                    <input type="name" name="name" value="" />
                </div>
                <div class="contact-form__group-gender">
                    <div class="contact-form__title">性別</div>
                    <input type="radio" name="gender" value="" />
                        <span>全て</span>
                    <input type="radio" name="gender" value="" />
                        <span>男性</span>
                    <input type="radio" name="gender" value="" />
                        <span>女性</span>
                </div>
            </div>
            <div class="contact-form__group">
                <div class="contact-form__title">登録日</div>
                <input type="date" name="from" placeholder="from_date" />
                    <span>~</span>
                <input type="date" name="until" placeholder="until_date" />
            </div>
            <div class="contact-form__group">
                <div class="contact-form__title">メールアドレス</div>
                <input type="email" name="email" value="" />
            </div>
        </div>
        <div class="form__button">
            <button class="form__button-submit" type="submit">検索</button>
        </div>
        <div class="reset__button">
            <a class="reset__button-submit" href="/">修正する</a>
        </div>
    </form>
    <div class="peag">
        <div class="peag1"></div>
        <div class="peag2"></div>
    </div>
    <form class="form__table">
        <table class="table-inner">
            <tr class="table-row">
                <th class="table-column__id">ID</th>
                <th class="table-column__fullname">お名前</th>
                <th class="table-column__gender">性別</th>
                <th class="table-column__email">メールアドレス</th>
                <th class="table-column__content">ご意見</th>
            </tr>
            <tr class="table-row">
                <td class="table-column__id">
                    <input type="id" name="id" value="" />
                </td>
                <td class="table-column__fulname">
                    <input type="name" name="fullname" value="" />
                </td>
                <td class="table-column__gender">
                    <input type="text" name="gender" value="" />
                </td>
                <td class="table-column__email">
                    <input type="email" name="email" value="" />
                </td>
                <td class="table-column__content">
                    <input type="text" name="content" value="" />
                </td>
                <td class="delete-button">
                    <button class="delete-button__submit" type="submit">削除</button>
                </td>
            </tr>
        </table>
    </form>
</div>


@endsection