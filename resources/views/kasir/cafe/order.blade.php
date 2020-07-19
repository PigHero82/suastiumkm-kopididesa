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
                            @if ($item->kategori == 1)
                              <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="card border-primary text-center bg-transparent">
                                  <div class="card-content d-flex">
                                    <div class="card-body">
                                      <img src="{{ asset($item->gambar) }}" alt="element 06" height="150" class="mb-1">
                                      <p class="card-text">{{ $item->nama }}</p>
                                      <p class="card-text">Rp. {{ number_format($item->harga, 0, ',', '.') }}</p>
                                      <div class="row justify-content-center">
                                        <div class="col-3">
                                          <input type="number" class="form-control text-center" name="menu[{{ $item->id }}]" id="#" minlength="1" min="1" max="99" placeholder="0">
                                        </div>
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
                            @if ($item->kategori == 2)
                              <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="card border-primary text-center bg-transparent">
                                  <div class="card-content d-flex">
                                    <div class="card-body">
                                      <img src="{{ asset($item->gambar) }}" alt="element 06" height="150" class="mb-1">
                                      <p class="card-text">{{ $item->nama }}</p>
                                      <p class="card-text">Rp. {{ number_format($item->harga, 0, ',', '.') }}</p>
                                      <div class="row justify-content-center">
                                        <div class="col-3">
                                          <input type="number" class="form-control text-center" name="menu[{{ $item->id }}]" id="#" minlength="1" min="1" max="99" placeholder="0">
                                        </div>
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