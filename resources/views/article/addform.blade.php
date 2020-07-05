<?php
date_default_timezone_set("Asia/Jakarta");
$now = new DateTime();
?>
@extends('layouts.master')
@section('content')
<div class="row">
    <h3>Create Article</h3>
</div>
<div class="row card">
    <div class="card-body">
        <form action="{{url('/artikel/')}}" method="post">
            @csrf
            <input type="hidden" name="created_at" value="<?php echo $now->format('Y-m-d H:i:s'); ?>">
            <input type="hidden" name="updated_at" value="<?php echo $now->format('Y-m-d H:i:s'); ?>">
            <div class="form-group">
                <label for="formGroupExampleInput">Judul Artikel</label>
                <input type="text" class="form-control" id="judul" placeholder="Judul . . ." name="judul">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Tag Artikel</label>
                <input type="text" class="form-control" id="tag" placeholder="Tag . . ." name="tag">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Isi Artikel</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" placeholder="Isi . . . " name="isi"></textarea>
            </div>
            <button type="submit" class="btn btn-primary float-right">Submit</button>
        </form>
    </div>
</div>
@endsection