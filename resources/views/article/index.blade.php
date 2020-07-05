@extends('layouts/master')
@section('content')
<div class="row">
    <h3>All Articles</h3>
</div>
<div class="row">
	<a href="{{url('artikel/create')}}" class="btn btn-primary float float-right">Buat Artikel</a>
</div>
<div class="row mt-2">
<!-- <div class="col"> -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Judul</th>
                <th scope="col">Tag</th>
                <th scope="col">Slug</th>
                <th scope="col">Isi</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $a)
            <?php
                $tag_explode = explode(' ', $a->tag);
            ?>
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$a->judul}}</td>
                <td>
                    @foreach($tag_explode as $te)
                        <a href="#" class="badge badge-success mr-1">{{$te}}</a>
                    @endforeach
                </td>                
                <td>{{$a->slug}}</td>
                <td>{{$a->isi}}</td>
                <td class="text-center">
                	<a href="{{url('/artikel/'.$a->id)}}" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></a>
                    <a href="{{url('/artikel/'.$a->id.'/edit')}}" class="btn btn-sm btn-success"><i class="fas fa-edit"></i></a>
                    <form action="/artikel/{{$a->id}}" method="post" style="display: inline;">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
<!-- </div> -->
</div>
@endsection
@push('scripts')
<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    });
</script>
@endpush