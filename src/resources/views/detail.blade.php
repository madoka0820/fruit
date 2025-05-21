@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/detail.css') }}">
@endsection

@section('content')
<div class="detail">
    <form class="detail_form" action="/products/{{$product->id}}/update" method="post">
        <div class="detail_form-route">
            商品一覧>{{$product->name}}
        </div>
        <div class="detail_form-content">
            <div class="detail__img">
                <img src="{{asset('storage/images/'.$product->image)}}" alt="" />
                <div class="detail__file">
                    <input type="file" name="image" />
                </div>
            </div>
            <div class="detail__item">
                <div class="detail__item-title">
                    商品名
                </div>
                <div class="detail__item-content">
                    <input type="text" name="name" placeholder="商品名を入力" />
                </div>
                <div class="detail__item-title">
                    値段
                </div>
                <div class="detail__item-content">
                    <input type="text" name="price" placeholder="値段を入力" />
                </div>
                <div class="detail__item-title">
                    季節
                </div>
                <div class="detail__item-checkbox">
                    <label><input type="checkbox" name="season[]" value="春"/>春</label>
                    <label><input type="checkbox" name="season[]" value="夏"/>夏</label>
                    <label><input type="checkbox" name="season[]" value="秋"/>秋</label>
                    <label><input type="checkbox" name="season[]" value="冬"/>冬</label>
                </div>
            </div>
        </div>
        <div class="detail__form-description">
            <div class="detail__item-title">
                商品説明
            </div>
            <div class="detail__item-content">
                <textarea name="description" cols="90" rows="10" placeholder="商品の説明を入力"></textarea>
            </div>
        </div>
        <div class="detail_form-button">
            <a class="detail_form-button-back"href="/products">
                戻る
            </a>
            <button type="submit" class="detail_form-button-edit">変更を保存</button>
        </div>
    </form>
</div>
@endsection