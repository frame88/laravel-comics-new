@extends('guest.layout.base')

@section('documentTitle')
    {{$nomePagina}}
@endsection

@section('content')
    <div class="bg-prod">
        <div class="container-90 relative">
            <div class="title jumbo-text">
                <h2>Current Series</h2>
            </div>
            <div class="products">
                @foreach($comics as $comic)
                <div class="product">
                    <div class="thumb">
                        <img src="{{$comic['thumb']}}" alt="">
                    </div>
                    <div class="comic-name">
                        <h2><a href="{{route('comic', $comic['id'])}}">{{$comic['title']}}</a></h2>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="bottom">
          <div class="container-90">
              <ul>
                  <li>
                      <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="Digital comics">
                      <span>Digital comics</span>
                  </li>
                  <li>
                      <img src="{{asset('img/buy-comics-merchandise.png')}}" alt="Digital comics">
                      <span>dc merchandise</span>
                  </li>
                  <li>
                      <img src="{{asset('img/buy-comics-subscriptions.png')}}" alt="Digital comics">
                      <span>subscription</span>
                  </li>
                  <li>
                      <img src="{{asset('img/buy-comics-shop-locator.png')}}" alt="Digital comics">
                      <span>comic shop locator</span>
                  </li>
                  <li>
                      <img src="{{asset('img/buy-dc-power-visa.svg')}}" alt="Digital comics">
                      <span>dc power visa</span>
                  </li>
              </ul>
            </div>
        </div>
@endsection

@section('scripts')
    <script src="{{asset('js/app.js')}}"></script>
@endsection