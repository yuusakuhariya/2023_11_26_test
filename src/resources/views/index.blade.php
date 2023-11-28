@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')

<div class="contact-form__content">
    <div class="contact-form__heading">
        <h2>お問い合わせ</h2>
    </div>
    <form class="form" action="/contacts/confirm" method="post">
        @csrf
        <div class="form__group">
            <div class="form__group-title">お名前<span class="required__mark">※</span></div>
            <div class="form__group-name__flame">
                <div class="form__group-name__inner-left">
                    <input class="input-name" type="name" name="first_name" value="">
                    <div class="form__group-item__inner-example">例）山田</div>
                </div>
                <div class="name__error">
                    @error('first_name')
                        {{ $message }}
                    @enderror
                </div>
                <div class="form__group-name__inner-right">
                    <input class="input-name" type="name" name="last_name" value="">
                    <div class="form__group-item__inner-example">例）太郎</div>
                </div>
                <div class="name__error">
                    @error('last_name')
                        {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">性別<span class="required__mark">※</span></div>
            <div class="form__group-gender__flame">
                <div class="form__input-radio__left">
                    <!-- <label for="male"><input class="input-radio" type="radio" name="gender" value="1" checked>男性</label> -->
                    <input class="input-radio" type="radio" name="gender" value="1" checked>
                    <div class="label">男性</div>
                </div>
                <div class="form__input-radio__right">
                    <!-- <label for="female"><input class="input-radio" type="radio" name="gender" value="2">女性</label> -->
                    <input class="input-radio" type="radio" name="gender" value="1" checked>
                    <div class="label">女性</div>
                </div>
            </div>
        </div>
        <div class="name__error">
            @error('gender')
                {{ $message }}
            @enderror
        </div>
        <div class="form__group">
            <div class="form__group-title">メールアドレス<span class="required__mark">※</span></div>
            <div class="form__input-inner">
                <input class="input-email" type="email" name="email" value="">
                <div class="form__group-item__inner-example">例）test@example.com</div>
            </div>
        </div>
        <div class="name__error">
            @error('email')
                {{ $message }}
            @enderror
        </div>
        <div class="form__group">
            <div class="form__group-title">郵便番号<span class="required__mark">※</span></div>
            <div class="form__group-postcode__flame">
                <div class="post__logo">〒</div>
                <div class="form__group-postcode__inner">
                    <input class="input-postcode" name="postcode" type="text" size="10" maxlength="8" onKeyUp="AjaxZip3.zip2addr(this,'','address','address');">
                        
                    <div class="form__group-item__inner-example">例）123-4567</div>
                </div>
            </div>
        </div>
        <div class="name__error">
            @error('postcode')
                {{ $message }}
            @enderror
        </div>
        <div class="form__group">
            <div class="form__group-title">住所<span class="required__mark">※</span></div>
            <div class="form__input-inner">
                <input class="input-address" name="address"type="text" size="60">
                <div class="form__group-item__inner-example">例）東京都渋谷区千駄ヶ谷1-2-3</div>
            </div>
        </div>
        <div class="name__error">
            @error('address')
                {{ $message }}
            @enderror
        </div>
        <div class="form__group">
            <div class="form__group-title">建物名</div>
            <div class="form__input-inner">
                <input class="input-building_name" type="text" name="building_name" value="">
                <div class="form__group-item__inner-example">例）千駄ヶ谷マンション</div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">ご意見<span class="required__mark">※</span></div>
            <div class="form__input-textarea">
                <textarea name="opinion" cols="120" value=""></textarea>
            </div>
        </div>
        <div class="name__error">
            @error('opinion')
                {{ $message }}
            @enderror
        </div>
        <div class="form__button">
            <button class="form__button-submit" type="submit">確認</button>
        </div>
    </form>
</div>


@endsection