@extends('layouts.mainlayout')

@section('page-name')
    DC | HOME
@endsection
@section('main-content')
    <section id="home-main">
      <div class="container">
            {{-- card --}}
           @foreach ($comics as $comic)
              <div class="comics-card">
                    <div class="card-img">
                      <a href="{{route('comics.show')}}">
                        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                      </a>    
                    </div>
                    <div class="card-info">
                        <p class="uppercase">{{ $comic['series'] }}</p>
                    </div>
              </div>
            @endforeach 
      </div>
      <div class="load-button"> 
        <a href="#" class="btn blue-btn mx-auto">LOAD MORE</a>
      </div>
      
    </section>
@endsection
