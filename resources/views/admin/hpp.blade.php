@extends('layout')
@section('title')
    Harga Pokok Produksi
@endsection
@section('judul')
    Harga Pokok Produksi
@endsection
@section('hppactive')
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
                        <h4 class="card-title">Harga Pokok Produksi</h4>
                        <div class="float-right">
                          <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#tambah" data-value="#"><i class="feather icon-plus"></i> Menu</button>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="card-body card-dashboard">
                            <div class="table-responsive">
                                <table class="table zero-configuration">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Harga</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Kopi</td>
                                            <td>Rp. 50.000</td>
                                            <td>
                                              <button type="button" style="padding: 0; border: none; background: none;" class="action-edit text-primary" data-toggle="modal" data-target="#ubah" data-value="#"><i class="feather icon-edit"></i></span>
                                              <button type="button" style="padding: 0; border: none; background: none;" class="action-edit text-danger" ><i class="feather icon-trash"></i></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Susu</td>
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
            <h4 class="modal-title" id="myModalLabel1">Tambah Menu</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="#" novalidate>
            <div class="modal-body">
              <div class="form-group">
                <label>Nama: </label>
                <div class="controls">
                  <input type="text" name="text" class="form-control" placeholder="Nama Menu" required data-validation-required-message="Tidak boleh kosong">
                </div>
              </div>

              <div class="form-group">
                <label>Harga: </label>
                <div class="controls">
                  <input type="text" name="text" class="form-control" placeholder="Harga Menu" data-validation-containsnumber-regex="(\d)+" data-validation-containsnumber-message="Hanya boleh diisi dengan angka." required data-validation-required-message="Tidak boleh kosong">
                </div>
              </div>

              <div class="form-group">
                <label>Gambar: </label>
                <div class="controls">
                  <input type="file" name="text" class="form-control" required data-validation-required-message="Tidak boleh kosong">
                </div>
              </div>

              <div class="form-group">
                <label>Bahan: </label>
                <div class="controls">
                  <div class="row">
                    <div class="col-9">
                      <input type="text" name="text" class="form-control" placeholder="Nama Bahan" required data-validation-required-message="Tidak boleh kosong">
                    </div>
                    <div class="col-3">
                      <input type="text" name="text" class="form-control" placeholder="Jumlah" data-validation-containsnumber-regex="(\d)+" data-validation-containsnumber-message="Hanya boleh diisi dengan angka." required data-validation-required-message="Tidak boleh kosong">
                    </div>
                  </div>
                </div>
              </div>
              <button type="button" class="btn btn-primary"><i class="feather icon-plus"></i> Bahan</button>

              <div class="modal-footer">
                <button type="submit" class="btn btn-success">Tambah</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    {{-- Modal Ubah --}}
    <div class="modal fade text-left" id="ubah" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel1" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel1">Tambah Menu</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="#" novalidate>
            <div class="modal-body">
              <div class="form-group">
                <label>Nama: </label>
                <div class="controls">
                  <input type="text" name="text" class="form-control" value="Kopi" placeholder="Nama Menu" required data-validation-required-message="Tidak boleh kosong">
                </div>
              </div>

              <div class="form-group">
                <label>Harga: </label>
                <div class="controls">
                  <input type="text" name="text" class="form-control" value="25000" placeholder="Harga Menu" data-validation-containsnumber-regex="(\d)+" data-validation-containsnumber-message="Hanya boleh diisi dengan angka." required data-validation-required-message="Tidak boleh kosong">
                </div>
              </div>
              
              <div class="form-group">
                <label>Gambar: </label>
                <div class="controls">
                  <img src="../../../app-assets/images/elements/ipad-pro.png" alt="Kopi" height="150" class="mb-1">
                </div>
              </div>
              
              <div class="form-group">
                <label>Ubah Gambar: (Jangan diisi bila tidak diubah)</label>
                <div class="controls">
                  <input type="file" name="text" class="form-control">
                </div>
              </div>

              <div class="form-group">
                <label>Bahan: </label>
                <div class="controls">
                  <div class="row">
                    <div class="col-9">
                      <input type="text" name="text" class="form-control" value="Kopi (gr)" placeholder="Nama Bahan" required data-validation-required-message="Tidak boleh kosong">
                    </div>
                    <div class="col-3">
                      <input type="text" name="text" class="form-control" value="100" placeholder="Jumlah" data-validation-containsnumber-regex="(\d)+" data-validation-containsnumber-message="Hanya boleh diisi dengan angka." required data-validation-required-message="Tidak boleh kosong">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-9">
                      <input type="text" name="text" class="form-control" value="Air Mineral (ml)" placeholder="Nama Bahan">
                    </div>
                    <div class="col-3">
                      <input type="text" name="text" class="form-control" value="250" placeholder="Jumlah">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-9">
                      <input type="text" name="text" class="form-control" value="Gula Pasir (gr)" placeholder="Nama Bahan">
                    </div>
                    <div class="col-3">
                      <input type="text" name="text" class="form-control" value="50" placeholder="Jumlah">
                    </div>
                  </div>
                </div>
              </div>
              <button type="button" class="btn btn-primary"><i class="feather icon-plus"></i> Bahan</button>

              <div class="modal-footer">
                <button type="submit" class="btn btn-success">Tambah</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
@endsection
@section('js')
    <script src="{{ asset('/app-assets/vendors/js/tables/datatable/pdfmake.min.js') }}"></script>
    <script src="{{ asset('/app-assets/vendors/js/tables/datatable/vfs_fonts.js') }}"></script>
    <script src="{{ asset('/app-assets/vendors/js/tables/datatable/datatables.min.js') }}"></script>
    <script src="{{ asset('/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js') }}"></script>
    <script src="{{ asset('/app-assets/vendors/js/tables/datatable/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('/app-assets/vendors/js/tables/datatable/buttons.print.min.js') }}"></script>
    <script src="{{ asset('/app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ asset('/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js') }}"></script>

    <script src="{{ asset('/app-assets/js/scripts/datatables/datatable.js') }}"></script>

    <script src="{{ asset('/app-assets/vendors/js/forms/validation/jqBootstrapValidation.js') }}"></script>
    <script src="{{ asset('/app-assets/js/scripts/forms/validation/form-validation.js') }}"></script>
@endsection