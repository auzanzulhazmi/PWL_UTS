@extends('barangs.layout')
 
@section('content')
 
<div class="container mt-5">
 
 <div class="row justify-content-center align-items-center">
 <div class="card" style="width: 24rem;">
 <div class="card-header">
 Tambah Barang
 </div>
 <div class="card-body">
 @if ($errors->any())
 <div class="alert alert-danger">
 <strong>Whoops!</strong> There were some problems with your i
nput.<br><br>
 <ul>
 @foreach ($errors->all() as $error)
 <li>{{ $error }}</li>
 @endforeach
 </ul>
 </div>
 @endif
 <form method="post" action="{{ route('barangs.store') }}" id="myFo
rm">
 @csrf
 <div class="form-group">
 <label for="Id">Id</label> 
 <input type="text" name="Id" class="form-control" id="Id" aria-describedby="Id" > 
 </div>
 <div class="form-group">
 <label for="Kode">Kode</label> 
 <input type="Kode" name="Kode" class="form-control" id="Kode" aria-describedby="Kode" > 
 </div>
 <div class="form-group">
 <label for="Nama">Nama</label>  
 <input type="Nama" name="Nama" class="form-control" id="Nama" aria-describedby="Nama" > 
 </div>
 <div class="form-group">
 <label for="Kategori">Kategori</label> 
 <input type="Kategori" name="Kategori" class="form-control" id="Kategori" aria-describedby="Kategori" > 
 </div>
 <div class="form-group">
 <label for="Harga">Harga</label> 
 <input type="Harga" name="Harga" class="form-control" id="Harga" aria-describedby="Harga" > 
 </div>
 <div class="form-group">
    <label for="Qty">Qty</label> 
    <input type="Qty" name="Qty" class="form-control" id="Qty" aria-describedby="Qty" > 
    </div>
 <button type="submit" class="btn btn-primary">Submit</button>
 </form>
 </div>
 </div>
 </div>
 </div>
@endsection