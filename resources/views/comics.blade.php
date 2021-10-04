@extends('layouts.mainlayout')
@section('page-name')
    DC | COMICS
@endsection
@section('main-content')
<section id="comic-info">
    <div class="container">
        <div class="comic-detail w-50">
            <h1>{{$comic['title']}}</h1>
            <div class="available">
                <div class="w-75">
                    <div class="price-info">U.S. Price {{$comic['price']}} </div>
                    <div class="status">AVAILABLE</div>
                </div>
                <div class="w-25">
                    <p>Check Availability<i class="fas fa-angle-down"></i></p>
                </div>
            </div>
            <p>{{$comic['description']}}</p>
        </div>
        <div class="comic-poster w-25">
            <p>ADVERTISEMENT</p>
            <img src="{{asset('../images/adv.jpg')}}" alt="">
        </div>
    </div>
</section>
<section id="comic-statistics">
    <div class="container">
        <div class="w-50">
            <h2 class="py-1">Talent</h2>
            <div class="d-flex my-3">
                <div class="w-25 py-1">Art By: </div>
                <div class="w-75 py-1"></div>
            </div>
            <div class="d-flex my-3">
                <div class="w 25 py-1">Written By:</div>
                <div class="w-75 py-1"></div>
            </div>
        </div>
        <div class="w-25">
            <h2 class="py-1">Specs</h2>
            <div class="d-flex my-3">
                <div class="w-25 py-1">Series</div>
                <div class="w-75 py-1">{{$comic['series']}}</div>
            </div>
            <div class="d-flex my-3">
                <div class="w-25 py-1">U.S. Price </div>
                <div class="w-75 py-1">{{$comic['price']}}</div>
            </div>
            <div class="d-flex my-3">
                <div class="w-25 py-1">On Sale Date</div>
                <div class="w-75 py-1">{{$comic['sale_date']}}</div>
            </div>
        </div>
    </div>
</section>
@endsection