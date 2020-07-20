@extends('layout')
@section('orderactive')
    active
@endsection
@section('title')
    Order
@endsection
@section('judul')
    Order
@endsection
@section('content')
    <!-- Order Menu -->
    <section id="bg-variants">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <form action="{{ route('kasir.cafe.pembayaran') }}" method="post">
                @csrf
                <div class="card-header">
                  <h4 class="card-title">Menu</h4>
                  <div class="float-right">
                    <button type="submit" class="btn btn-sm btn-success"><i class="feather icon-plus"></i> Pembayaran</button>
                  </div>
                </div>
                <div class="card-content">
                  <div class="card-body">
                    @if ($message = Session::get('success'))
                      <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert"><i class="feather icon-x"></i></button>
                        {{ $message }}
                      </div>
                    @endif
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="kopi-panas-tab" data-toggle="tab" href="#kopi-panas" role="tab" aria-controls="home" aria-selected="true">Kopi Panas</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="kopi-dingin-tab" data-toggle="tab" href="#kopi-dingin" role="tab" aria-controls="profile" aria-selected="false">Kopi Dingin</a>
                      </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                      
                      <div class="tab-pane fade show active" id="kopi-panas" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row">
                          @foreach ($menu as $item)
                            @if ($item->category_id == 1)
                              <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="card border-primary text-center bg-transparent">
                                  <div class="card-content d-flex">
                                    <div class="card-body">
                                      <img src="{{ asset($item->img) }}" alt="element 06" height="150" class="img-fluid">
                                      <p class="card-text mt-1">{{ $item->name }}</p>
                                      <p class="card-text">Rp. {{ number_format($item->old_price, 0, ',', '.') }}</p>
                                      <div class="row justify-content-center input{{ $item->id }}">
                                          <button type="button" class="btn btn-success beli" data-value="{{ $item->id }}"><i class="feather icon-shopping-cart"></i> Beli</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            @endif
                          @endforeach
                        </div>
                      </div>
                      <div class="tab-pane fade" id="kopi-dingin" role="tabpanel" aria-labelledby="kopi-dingin-tab">
                        <div class="row">
                          @foreach ($menu as $item)
                            @if ($item->category_id == 2)
                              <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="card border-primary text-center bg-transparent">
                                  <div class="card-content d-flex">
                                    <div class="card-body">
                                      <img src="{{ asset($item->img) }}" alt="element 06" height="150" class="mb-1">
                                      <p class="card-text">{{ $item->name }}</p>
                                      <p class="card-text">Rp. {{ number_format($item->old_price, 0, ',', '.') }}</p>
                                      <div class="row justify-content-center input{{ $item->id }}">
                                        <button type="button" class="btn btn-success beli" data-value="{{ $item->id }}"><i class="feather icon-shopping-cart"></i> Beli</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            @endif
                          @endforeach
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
    </section>
  <!-- Order Menu -->
@endsection
@section('js')
    <script>
      $(".beli").on( "click", function() {
        var id = $(this).attr('data-value');
        $(".input"+ id).html(`<div class="col-3">
                                <input type="number" class="form-control text-center" name="menu[`+ id +`]" value="1" minlength="1" min="1" max="99" placeholder="0">
                              </div>`);
      });
    </script>
@endsection