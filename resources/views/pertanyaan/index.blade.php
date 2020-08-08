@extends ('master')

@section ('content')
<div class="ml-3 mr-3 mt-3">
	<div class="card">
      <div class="card-header">
        <h3 class="card-title">Daftar pertanyaan</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
      	@if(session('success'))
      		<div class="alert alert-success">
      			{{ session('success')}}
      		</div>	
      	@endif

      	<a class="btn btn-primary" href="/pertanyaan/create">Menambah Pertanyaan</a>
        <div class="mt-4">
        <table class="table table-bordered">
          <thead>                  
            <tr>
              <th style="width: 10px">#</th>
              <th>Judul</th>
              <th>Isi</th>
              <th style="width: 40px">Label</th>
            </tr>
          </thead>
          <tbody>
          	@foreach($pertanyaan as $key => $tpertanyaan)
          		<tr>
          			<td> {{ $key + 1 }} </td>
          			<td> {{ $tpertanyaan->judul }}</td>
          			<td> {{ $tpertanyaan->isi }}</td>
          			<td style="display: inline-flex;">
          				<a href="/pertanyaan/{{$tpertanyaan->id}}" class="btn btn-info btn-sm">show</a>
          				<a href="/pertanyaan/{{$tpertanyaan->id}}/edit" class="btn btn-info btn-sm">edit</a>
          			</td>
          		</tr>
          	@endforeach
          </tbody>
        </table>
    	</div>
      </div>
      <!-- /.card-body -->
    </div>
</div>
@endsection