@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/products.css') }}">
@endsection

@section('content')
<div class="products">
    <div class="product_content_heading">
        <h1 class="products_content_heading-title">
            商品一覧
        </h1>
        <div class="product_content_heading-button">
            <a class="product_content_heading-submit" href="/products/add">
            +商品を追加
            </a>
        </div>
    </div>
    <div class="product_content">
        <form class="product_content-function">
            <div class="product_content-search">
                <input type="text" name="name" placeholder="商品名で検索" />
            </div>
            <div class="product_content-button">
                <button class="product_content-submit">
                    検索
                </button>
            </div>
            <h2>価格順で表示</h2>
            <div class="product_content-select">
                <select name="select">
                    <option value="">価格順で並べ替え</option>
                    <option value="高い順に表示">高い順に表示</option>
                    <option value="低い順に表示">低い順に表示</option>
                </select>
            </div>
            <div class="product_content-select-result">
                <div class="product_content-select-result-expensive">
                    高い順に表示
                </div>
                <div class="product_content-select-result-delete">
                    <button class="product_content-select-result-button">×</button>
                </div>
            </div>
        </form>
        <div class="product_content-cards">
            @foreach($products as $product)
            <a class="card" href="{{route('products.detail',['id'=>$product->id])}}">
                <div class="card__img">
                    <img src="{{asset('storage/images/'.$product->image)}}" alt="" />
                </div>
                <div class="card__content">
                    <div class="card__content-name">{{$product->name}}
                    </div>
                    <div class="card__content-price">¥{{$product->price}}
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</div>
{{$products->links()}}
@endsection