@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
<div class="register">
    <h1>商品登録</h1>
    <form class="register_form" action="/products/register" method="post" enctype="multipart/form-data">
    @csrf
        <div class="register_form-title">
            <span class="register_form-item">商品名</span>
            <span class="register_form-required">必須</span>
        </div>
        <div class="register_form-content">
            <input type="text" name="name" placeholder="商品名を入力" />
        </div>
        <div class="register_form-error">
            @error('name')
            {{$message}}
            @enderror
        </div>
        <div class="register_form-title">
            <span class="register_form-item">値段</span>
            <span class="register_form-required">必須</span>
        </div>
        <div class="register_form-content">
            <input type="text" name="price" placeholder="値段を入力" />
        </div>
        <div class="register_form-error">
            @error('price')
            {{$message}}
            @enderror
        </div>
        <div class="register_form-title">
            <span class="register_form-item">商品画像</span>
            <span class="register_form-required">必須</span>
        </div>
        <div class="register_form-image">
            <input type="file" name="image" />
        </div>
        <div class="register_form-error">
            @error('image')
            {{$message}}
            @enderror
        </div>
        <div class="register_form-title">
            <span class="register_form-item">季節</span>
            <span class="register_form-required">必須</span>
            <span class="register_form-message">複数選択可</span>
        </div>
        <div class="register_form-checkbox">
            <label><input type="checkbox" name="season[]" value="春"/>春</label>
            <label><input type="checkbox" name="season[]" value="夏"/>夏</label>
            <label><input type="checkbox" name="season[]" value="秋"/>秋</label>
            <label><input type="checkbox" name="season[]" value="冬"/>冬</label>
        </div>
        <div class="register_form-error">
            @error('season')
            {{$message}}
            @enderror
        </div>
        <div class="register_form-title">
            <span class="register_form-item">商品説明</span>
            <span class="register_form-required">必須</span>
        </div>
        <div class="register_form-content">
            <textarea name="description" cols="90" rows="10" placeholder="商品の説明を入力"></textarea>
        </div>
        <div class="register_form-error">
            @error('description')
            {{$message}}
            @enderror
        </div>
        <div class="register_form-button">
            <a class="register_form-button-back"href="/products">
                戻る
            </a>
            <button type="submit" class="register_form-button-register">登録</button>
        </div>
    </form>
</div>
@endsection