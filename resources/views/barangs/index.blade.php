@extends('barangs.layout')
@section('content')
 <div class="row">
 <div class="col-lg-12 margin-tb">
 <div class="pull-left mt-2">
 <h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
 </div>
    <div class="float-right my-2">
    <a class="btn btn-success" href="{{ route('barangs.create') }}"> Input Barang</a>
    </div>
 </div>
 </div>
 
 @if ($message = Session::get('success'))
 <div class="alert alert-success">
 <p>{{ $message }}</p>
 </div>
 @endif
 
 <table class="table table-bordered">
<tr>
    <th>Id</th>
    <th>Kode</th>
    <th>Nama</th>
    <th>Kategori</th>
    <th>Harga</th>
    <th>Qty</th>
    <th width="280px">Action</th>
 </tr>
 @foreach ($barangs as $Barang)
 <tr>
 
    <td>{{ $Barang->Id }}</td>
    <td>{{ $Barang->Kode }}</td>
    <td>{{ $Barang->Nama }}</td>
    <td>{{ $Barang->Kategori }}</td>
    <td>{{ $Barang->Harga }}</td>
    <td>{{ $Barang->Qty }}</td>
<td>
 <form action="{{ route('barangs.destroy',$Barang->Id) }}" method="POST">
 
 <a class="btn btn-info" href="{{ route('barangs.show',$Barang->Id) }}">Show</a>
 <a class="btn btn-primary" href="{{ route('barangs.edit',$Barang->Id) }}">Edit</a>
 @csrf @method('DELETE')
 <button type="submit" class="btn btn-danger">Delete</button>
 </form>
 </td>
 </tr>
 @endforeach
 </table>
@endsection
