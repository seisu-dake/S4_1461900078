<!DOCTYPE html>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

      </head>
    <body>
<div>
  <header class="p-3 bg-dark text-white">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
            <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
          </a>
  
          <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <li><a href="{{ url('/') }}" class="nav-link px-2 text-secondary">Beranda</a></li>
            <li><a href="{{ url('/dokter') }}" class="nav-link px-2 text-white">Dokter</a></li>
            <li><a href="{{ url('/pasien') }}" class="nav-link px-2 text-white">Pasien</a></li>
          </ul>
  
          <div class="text-end">                        
          </div>
        </div>
      </div>
    </header>  
    
    <div class="container">
      <center>
        <h4>Welcome</h4>
      </center>
    </div>

    {{-- <table class='table table-bordered'>
			<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Alamat</th>
					<th>Dokter</th>
					<th>Jabatan</th>
				</tr>
			</thead>
			<tbody>
				@php $i=1 @endphp
        @dd($data)
				@foreach($data as $s)
        @dd($s->nama)
				<tr>
					<td>{{ $i++ }}</td>
					<td>{{$s->nama}}</td>
					<td>{{$s->alamat}}</td>
					<td>{{$s->dokter}}</td>
					<td>{{$s->jabatan}}</td>
				</tr>
				@endforeach
			</tbody>
		</table> --}}

</div>
</body>

</html>