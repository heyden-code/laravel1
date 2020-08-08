@extends ('master')

@section ('content')
<div class="card card-primary wrapper">
            <div class="card-header with-border">
              <h3 class="card-title">Input Pertanyaan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="/pertanyaan" method="POST">
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="judul">judul</label>
                  <input type="text" class="form-control" id="judul" name="judul" value="{{ old('judul', '') }}" placeholder="masukkan judul">
                  @error('judul')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="isi">isi</label>
                  <textarea type="text" class="form-control" id="isi" name="isi" value="{{ old('isi', '') }}" placeholder="Masukkan isi pertanyaan"></textarea>
                  @error('isi')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
              <!-- /.box-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
@endsection
