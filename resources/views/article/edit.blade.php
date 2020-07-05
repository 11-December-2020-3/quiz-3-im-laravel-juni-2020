<?php
date_default_timezone_set("Asia/Jakarta");
$now = new DateTime();
?>
@extends('layouts/master')
@section('content')
<div class="row m-2">
    <h3>Edit Artikel</h3>
</div>
<div class="card m-2">
    <div class="card-body">
        <form action="{{url('/artikel/'.$artikel->id)}}" method="POST">
            @csrf
            @method('put')
            <input type="hidden" name="date_created" value="{{$artikel->created_at}}">
            <input type="hidden" name="updated_at" value="<?php echo $now->format('Y-m-d H:i:s'); ?>">
            <div class="form-group">
                <label for="formGroupExampleInput">Judul Artikel</label>
                <input type="text" class="form-control" id="judul" placeholder="Judul artikel" name="judul" value="{{$artikel->judul}}">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Tag Artikel</label>
                <input type="text" class="form-control" id="tag" placeholder="Tag . . ." name="tag" value="{{$artikel->tag}}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Isi Artikel</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" placeholder="Isi artikel" name="isi">{{$artikel->isi}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary float-right">Update</button>
        </form>
    </div>
</div>
@endsection