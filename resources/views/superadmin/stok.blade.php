@extends('layout')
@section('title')
    Stok Bahan
@endsection
@section('judul')
    Stok
@endsection
@section('stokactive')
    active
@endsection
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/tables/datatable/datatables.min.css') }}">
@endsection
@section('content')
    {{-- Tabel Stok --}}
    <section id="basic-datatable">
      <div class="row">
          <div class="col-12">
              <div class="card">
                  <div class="card-header">
                      <h4 class="card-title">Stok Bahan</h4>
                  </div>
                  <div class="card-content">
                      <div class="card-body card-dashboard">
                          <div class="table-responsive">
                              <table class="table zero-configuration">
                                  <thead>
                                      <tr>
                                          <th>Nama</th>
                                          <th>Jumlah</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td>Kopi</td>
                                          <td>100 gr</td>
                                      </tr>
                                      <tr>
                                          <td>Susu</td>
                                          <td>300 gr</td>
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
  {{-- / Tabel Stok --}}

  {{-- Modal Tambah --}}
  <div class="modal fade text-left" id="tambah" tabindex="-1" role="dialog"
  aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel1">Tambah Bahan</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="#" novalidate>
          <div class="modal-body">
            <div class="form-group">
              <label>Nama: </label>
              <div class="controls">
                <input type="text" name="text" class="form-control" placeholder="Nama Bahan" required data-validation-required-message="Tidak boleh kosong">
              </div>
            </div>

            <div class="form-group">
              <label>Satuan: </label>
              <div class="controls">
                <input type="text" name="text" class="form-control" placeholder="Satuan Bahan (gr, kg, ml, dll)" required data-validation-required-message="Tidak boleh kosong">
              </div>
            </div>

            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  {{-- Modal Ubah --}}
  <div class="modal fade text-left" id="ubah" tabindex="-1" role="dialog"
  aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel1">Ubah Bahan</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="#" novalidate>
          <div class="modal-body">
            <div class="form-group">
              <label>Nama: </label>
              <div class="controls">
                <input type="text" name="text" class="form-control" value="Kopi" placeholder="Nama Bahan" required data-validation-required-message="Tidak boleh kosong">
              </div>
            </div>

            <div class="form-group">
              <label>Satuan: </label>
              <div class="controls">
                <input type="text" name="text" class="form-control" value="gr" placeholder="Satuan Bahan (gr, kg, ml, dll)" required data-validation-required-message="Tidak boleh kosong">
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

  {{-- Modal Tambah Stok --}}
  <div class="modal fade text-left" id="tambahstok" tabindex="-1" role="dialog"
  aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel1">Tambah Stok</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="#" novalidate>
          <div class="modal-body">
            <div class="form-group">
              <label>Tambah Stok: </label>
              <div class="controls">
                <input type="text" name="text" class="form-control" placeholder="Penambahan Stok" data-validation-containsnumber-regex="(\d)+" data-validation-containsnumber-message="Hanya boleh diisi dengan angka." required data-validation-required-message="Tidak boleh kosong">
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
@endsection