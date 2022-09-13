@extends('students.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Create</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('students.index') }}"> Back</a>
        </div>
    </div>
</div>
     
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
     
<form action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data"> 
    @csrf
    
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>NIS:</strong>
                <input minlength="8" maxlength="8" type="text" name="nis" class="form-control" placeholder="NIS" autocomplete="off" required>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama:</strong>
                <input type="text" name="nama" class="form-control" placeholder="Nama" autocomplete="off" required>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Rombel:</strong>
                <input type="text" name="rombel" class="form-control" placeholder="Rombel" autocomplete="off" required>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Rayon:</strong>
                <input type="text" name="rayon" class="form-control" placeholder="Rayon" autocomplete="off" required>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Keterangan:</strong>
                <input type="radio" name="ket" value="Hadir" id="Hadir">
                <label for="Hadir"> Hadir</label>
                <input type="radio" name="ket" value="Sakit" id="sakit">
                <label for="sakit"> Sakit</label>
                <input type="radio" name="ket" value="Ijin" id="ijin">
                <label for="ijin"> Ijin</label>
                <input type="radio" name="ket" value="Alfa" id="alfa">
                <label for="alfa"> Alfa</label>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
@endsection