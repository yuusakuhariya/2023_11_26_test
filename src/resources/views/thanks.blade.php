@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
@endsection


@section('content')


<form class="thanks__content">
    <div class="thanks__heading">
        <h2>ご利用ありがとうございます</h2>
    </div>
    <div class="form__button">
        <a class="form__button-submit" href="/">トップページへ</a>
    </div>
</form>


@endsection