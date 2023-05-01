@extends('layout.index')

@section('content')
<h3 class="lokal-uppercase">Selamat Datang {{Auth::user()->name}}</h3>
<h2>APLIKASI WEB JUAL BELI BARANG DAN JASA</h2>

<br><br>
<table class="table align-middle mb-0 bg-white">
    <thead class="">
      <tr>
        <th>NAME</th>
        <th>NIM</th>
        <th>EMAIL</th>
        <th>CREATED AT</th>
      </tr>
    </thead>

    <tbody>
    @foreach ($data as $item)
      <tr>
        <td>
          <div class="d-flex align-items-center">
            <img
                src="{{asset("img/user/".$item->upicture)}}"
                alt=""
                style="width: 45px; height: 45px; margin-right:16px;"
                class="rounded-circle"
                />
            <div class="ms-3">
              <p class="fw-bold mb-1">{{$item->name}}</p>
            </div>
          </div>
        </td>
        <td>
          <p class="mb-1">{{$item->nim}}</p>
        </td>
        <td>
          <p class="mb-1">{{$item->email}}</p>
        </td>
        <td>
            <p class="mb-1">{{$item->created_at}}</p>
        </td>
        
      </tr>
    @endforeach
    </tbody>
  </table>
@endsection