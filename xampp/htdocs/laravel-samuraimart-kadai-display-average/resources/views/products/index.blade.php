@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-2">
        @component('components.sidebar', ['categories' => $categories, 'major_categories' => $major_categories])
        @endcomponent
    </div>
    <div class="col-9">
        <div class="container">
            @if ($category !== null)
                <a href="{{ route('products.index') }}">トップ</a> > <a href="#">{{ $major_category->name }}</a> > {{ $category->name }}
                <h1>{{ $category->name }}の商品一覧{{$total_count}}件</h1>
            @elseif ($keyword !== null)
                <a href="{{ route('products.index') }}">トップ</a> > 商品一覧
                <h1>"{{ $keyword }}"の検索結果{{$total_count}}件</h1>
            @endif
        </div>

        <div>
            Sort By
            @sortablelink('id', 'ID')
            @sortablelink('price', 'Price')
        </div>

        <div class="container mt-4">
            <div class="row w-100">
                @foreach($products as $product)
                    <div class="col-3">
                        <a href="{{route('products.show', $product)}}">
                            @if ($product->image !== "")
                                <img src="{{ asset($product->image) }}" class="img-thumbnail">
                            @else
                                <img src="{{ asset('img/dummy.png')}}" class="img-thumbnail">
                            @endif
                        </a>
                        <div class="row">
                            <div class="col-12">
                                <p class="samuraimart-product-label mt-2">
                                    {{$product->name}}<br>
                                    <label>￥{{$product->price}}</label>
                                </p>

                                @php
                                    $averageRating = $product->reviews->avg('score') ?? 0;  // レビューが無い場合0に設定
                                    $roundedRating = round($averageRating * 2) / 2;  // 四捨五入して0.5刻みの評価にする
                                    $maxRating = 5;
                                @endphp

                                <div class="star-rating">
                                    @for ($i = 1; $i <= $maxRating; $i++)
                                        @if ($i <= floor($roundedRating))
                                            ★
                                        @elseif ($i - 0.5 == $roundedRating)
                                            &#9733; <!-- 半分の星 -->
                                        @else
                                            ☆
                                        @endif
                                    @endfor
                                    <span>{{ number_format($averageRating, 1) }}</span><!-- 平均値を小数点第1位まで表示 -->
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        {{ $products->appends(request()->query())->links() }}
    </div>
</div>
@endsection
