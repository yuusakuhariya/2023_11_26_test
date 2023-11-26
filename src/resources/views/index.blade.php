@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')

<div class="contact-form__content">
    <div class="contact-form__heading">
        <h2>お問い合わせ</h2>
    </div>
    <form class="form" action="">
        <div class="form__group">
            <div class="form__group-title">お名前<span class="required__mark">※</span></div>
            <div class="form__group-name__flame">
                <div class="form__group-item">
                    <div class="form__input-inner">
                        <input name="first__name" type="name" value="">
                        <div class="form__group-item__inner-example">例）山田</div>
                    </div>
                </div>
                <div class="form__group-item">
                    <div class="form__input-inner">
                        <input name="last__name" type="name" value="">
                        <div class="form__group-item__inner-example">例）太郎</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">性別<span class="required__mark">※</span></div>
            <div class="form__group-gender__flame">
                <div class="form__group-item">
                    <div class="form__input-radio">
                        <input name="gender" type="radio" value="">
                        <div class="form__group-item__inner-gender">男性</div>
                    </div>
                </div>
                <div class="form__group-item">
                    <div class="form__input-radio">
                        <input name="gender" type="radio" value="">
                        <div class="form__group-item__inner-gender">女性</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">メールアドレス<span class="required__mark">※</span></div>
            <div class="form__group-item">
                <div class="form__input-inner">
                    <input name="email" type="email" value="">
                    <div class="form__group-item__inner-example">例）test@xxample.com</div>
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">郵便番号<span class="required__mark">※</span></div>
            <div class="form__group-item">
                <div class="form__input-inner">
                    <label class="post__logo">〒<input name="postcard" type="text" value=""></label>
                    <div class="form__group-item__inner-example">例）123-4567</div>
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">住所<span class="required__mark">※</span></div>
            <div class="form__group-item">
                <div class="form__input-inner">
                    <input name="address" type="text" value="">
                    <div class="form__group-item__inner-example">例）東京都渋谷区千駄ヶ谷1-2-3</div>
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">建物名</div>
            <div class="form__group-item">
                <div class="form__input-inner">
                    <input name="building_name" type="text" value="">
                    <div class="form__group-item__inner-example">例）千駄ヶ谷マンション</div>
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">ご意見<span class="required__mark">※</span></div>
            <div class="form__input-textarea">
                <textarea name="content" value=""></textarea>
            </div>
        </div>
        <div class="form__button">
            <button class="form__button-submit" type="submit">確認</button>
        </div>
    </form>
</div>


@endsection