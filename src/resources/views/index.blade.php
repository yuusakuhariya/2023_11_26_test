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
                <div class="form__group-item">
                    <div class="form__input-inner">
                        <input name="first_name" type="name" value="">
                        <div class="form__group-item__inner-example">例）山田</div>
                    </div>
                </div>
                <div class="name__error">
                    @error('first_name')
                        {{ $message }}
                    @enderror
                </div>
                <div class="form__group-item">
                    <div class="form__input-inner">
                        <input name="last_name" type="name" value="">
                        <div class="form__group-item__inner-example">例）太郎</div>
                    </div>
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
                <div class="form__group-item">
                    <div class="form__input-radio">
                        <label for="male"><input name="gender" type="radio" value="1" checked>男性</label>
                    </div>
                </div>
                <div class="form__group-item">
                    <div class="form__input-radio">
                        <label for="female"><input name="gender" type="radio" value="2">女性</label>
                    </div>
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
            <div class="form__group-item">
                <div class="form__input-inner">
                    <input name="email" type="email" value="">
                    <div class="form__group-item__inner-example">例）test@example.com</div>
                </div>
            </div>
        </div>
        <div class="name__error">
            @error('email')
                {{ $message }}
            @enderror
        </div>
        <div class="form__group">
            <div class="form__group-title">郵便番号<span class="required__mark">※</span></div>
            <div class="form__group-item">
                <div class="form__input-inner">
                    <label class="post__logo">〒<input type="text" name="postcode" size="10" maxlength="8" onKeyUp="AjaxZip3.zip2addr(this,'','address','address');"></label>
                    
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
            <div class="form__group-item">
                <div class="form__input-inner">
                    <input type="text" name="address" size="60">
                    <div class="form__group-item__inner-example">例）東京都渋谷区千駄ヶ谷1-2-3</div>
                </div>
            </div>
        </div>
        <div class="name__error">
            @error('address')
                {{ $message }}
            @enderror
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
                <textarea name="opinion" value=""></textarea>
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
        <div class="reset__button">
            <a class="reset__button-submit" href="/">リセット</a>
        </div>
    </form>
</div>


@endsection