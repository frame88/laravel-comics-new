@extends('guest.layout.base')

@section('documentTitle')
{{$nomePagina}}
@endsection

@section('content')
{{-- @dd($comic) --}}
<div class="bg-prod">
    <div class="container-90 relative">
    <div class="title jumbo-img">
        <img src="{{$comic['thumb']}}" alt="">
    </div>
    <div class="comic-title">
        <h2>{{$comic['title']}}</h2>
        <span>{{$comic['price']}}</span>
    </div>
    <div class="comic-top">
            <div class="justify-between">
                <div class="info-comic">
                    <div class="avaible">
                        <div class="left">
                            <h3>STATUS:</h3>
                            <span>AVAIBLE</span>
                        </div>
                        <div class="right">
                            <h3>Check avaibility</h3>
                            <i class="fa-solid fa-sort-down"></i>
                        </div>
                    </div>
                    <p class="info-comic">{{$comic['description']}}</p>
                    <div class="credits justify-between">
                        <div class="artist">
                            <h2>Artist:</h2>
                            <ul>
                                @foreach($comic['artists'] as $artist)
                                    <li><a href="">{{$artist}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="writers">
                            <h2>Writers:</h2>
                            <ul>
                                @foreach($comic['writers'] as $writer)
                                     <li><a href="">{{$writer}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <img src="{{asset('img/adv.jpg')}}" alt="">
            </div>
        </div>
    </div>
</div>
@endsection