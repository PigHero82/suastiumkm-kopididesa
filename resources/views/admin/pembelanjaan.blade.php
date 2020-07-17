@extends('layout')
@section('title')
    Pembelanjaan
@endsection
@section('judul')
    Pembelanjaan
@endsection
@section('pembelanjaanactive')
    active
@endsection
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/tables/datatable/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('app-assets/css/plugins/forms/validation/form-validation.css') }}">
@endsection
@section('content')
    {{-- Tabel Pembelanjaan --}}
    <section id="basic-datatable">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Pembelanjaan Bulan Ini</h4>
                        <div class="float-right">
                          <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#tambah" data-value="#"><i class="feather icon-plus"></i> Pembelanjaan</button>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="card-body card-dashboard">
                            <div class="table-responsive">
                                <table class="table row-grouping">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Jumlah</th>
                                            <th>Tanggal</th>
                                            <th>Biaya</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Kopi</td>
                                            <td>100 gr</td>
                                            <td>29 April 2020</td>
                                            <td>Rp. 50.000</td>
                                            <td>
                                              <button type="button" style="padding: 0; border: none; background: none;" class="action-edit text-primary" data-toggle="modal" data-target="#ubah" data-value="#"><i class="feather icon-edit"></i></span>
                                              <button type="button" style="padding: 0; border: none; background: none;" class="action-edit text-danger" ><i class="feather icon-trash"></i></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Susu</td>
                                            <td>300 gr</td>
                                            <td>29 April 2020</td>
                                            <td>Rp. 30.000</td>
                                            <td>
                                              <button type="button" style="padding: 0; border: none; background: none;" class="action-edit text-primary" data-toggle="modal" data-target="#ubah" data-value="#"><i class="feather icon-edit"></i></span>
                                              <button type="button" style="padding: 0; border: none; background: none;" class="action-edit text-danger" ><i class="feather icon-trash"></i></span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- / Tabel Pembelanjaan --}}

    {{-- Modal Tambah --}}
    <div class="modal fade text-left" id="tambah" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel1" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel1">Tambah Pembelanjaan</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data" novalidate>
            @csrf
            <div class="modal-body">
              <div class="form-group">
                <label>Nota: </label>
                <div class="controls">
                  <input type="file" name="nota" accept="image/*" class="form-control-file" required data-validation-required-message="Tidak boleh kosong">
                </div>
              </div>

              <div class="form-group">
                <label>Bahan: </label>
                <div id="bahan">
                  <div class="controls mb-1 bahan">
                    <div class="row">
                      <div class="col-6">
                        <select name="nama[]" class="form-control">
                          @foreach ($stok as $item)
                              <option value="{{ $item->id }}">{{ $item->nama }} ({{ $item->satuan }})</option>
                          @endforeach
                        </select>
                      </div>
                      <div class="col-3">
                        <input type="text" name="jumlah[]" class="form-control" placeholder="Jumlah" data-validation-containsnumber-regex="(\d)+" data-validation-containsnumber-message="Hanya boleh diisi dengan angka." required data-validation-required-message="Tidak boleh kosong">
                      </div>
                      <div class="col-3">
                        <input type="text" name="harga[]" class="form-control" placeholder="Harga" data-validation-containsnumber-regex="(\d)+" data-validation-containsnumber-message="Hanya boleh diisi dengan angka." required data-validation-required-message="Tidak boleh kosong">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <button type="button" id="tambahbahan" class="btn btn-primary"><i class="feather icon-plus"></i> Bahan</button>

              <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Tambah</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    {{-- Modal Ubah --}}
    <div class="modal fade text-left" id="#" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel1">Tambah Pembelanjaan</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="#" novalidate>
            <div class="modal-body">
              <div class="form-group">
                <label>Nama: </label>
                <div class="controls">
                  <input type="text" name="text" class="form-control" value="Kopi (gr)" placeholder="Nama Bahan" required data-validation-required-message="Tidak boleh kosong">
                </div>
              </div>

              <div class="form-group">
                <label>Jumlah: </label>
                <div class="controls">
                  <input type="text" name="text" class="form-control" value="100" placeholder="Jumlah Bahan" data-validation-containsnumber-regex="(\d)+" data-validation-containsnumber-message="Hanya boleh diisi dengan angka." required data-validation-required-message="Tidak boleh kosong">
                </div>
              </div>

              <div class="form-group">
                <label>Biaya: </label>
                <div class="controls">
                  <input type="text" name="text" class="form-control" value="50000" placeholder="Biaya Bahan" data-validation-containsnumber-regex="(\d)+" data-validation-containsnumber-message="Hanya boleh diisi dengan angka." required data-validation-required-message="Tidak boleh kosong">
                </div>
              </div>

              <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Ubah</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  
@endsection
@section('js')
    <script src="{{ asset('/app-assets/vendors/js/tables/datatable/datatables.min.js') }}"></script>
    <script src="{{ asset('/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js') }}"></script>
    <script src="{{ asset('/app-assets/vendors/js/tables/datatable/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('/app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ asset('/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js') }}"></script>

    <script src="{{ asset('/app-assets/js/scripts/datatables/datatable.js') }}"></script>

    <script src="{{ asset('/app-assets/vendors/js/forms/validation/jqBootstrapValidation.js') }}"></script>
    <script src="{{ asset('/app-assets/js/scripts/forms/validation/form-validation.js') }}"></script>

    <script>
      $('#tambahbahan' ).on( 'click', function(e) {
        e.preventDefault();
        $('#bahan').append(`<div class="form-group">
                                  <div class="controls mb-1">
                                    <div class="row">
                                      <div class="col-6">
                                        <select name="nama[]" class="form-control">
                                          @foreach ($stok as $item)
                                              <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                          @endforeach
                                        </select>
                                      </div>
                                      <div class="col-3">
                                        <input type="text" name="jumlah[]" class="form-control" placeholder="Jumlah" data-validation-containsnumber-regex="(\d)+" data-validation-containsnumber-message="Hanya boleh diisi dengan angka." required data-validation-required-message="Tidak boleh kosong">
                                      </div>
                                      <div class="col-3">
                                        <input type="text" name="harga[]" class="form-control" placeholder="Harga" data-validation-containsnumber-regex="(\d)+" data-validation-containsnumber-message="Hanya boleh diisi dengan angka." required data-validation-required-message="Tidak boleh kosong">
                                      </div>
                                    </div>
                                  </div>
                                </div>`);
      });
    </script>
@endsection