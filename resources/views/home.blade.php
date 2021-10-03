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
                            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                    </div>
                    <div class="card-info">
                        <p class="uppercase">{{ $comic['title'] }}</p>
                    </div>
              </div>
            @endforeach 
      </div>
    </section>
@endsection
