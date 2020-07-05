@extends('layouts/master')
@section('content')
<div class="m-2">
    <h5>Judul: {{$artikel->judul}}</h5>
    <div class="card">
        <div class="card-header">
            Tag: 
            @foreach($artikel->explode_tag as $tag)
                <a href="#" class="btn btn-success btn-sm mr-1">{{$tag}}</a>
            @endforeach
            <a href="{{url('artikel')}}" class="btn btn-sm btn-primary float-right"> Kembali </a>
        </div>
        <div class="card-body">
            <p>
                {{$artikel->isi}}<br>               
            </p>
        </div>
        <div class="card-footer">
            Slug: {{$artikel->slug}}
        </div>
    </div>    
</div>
@endsection