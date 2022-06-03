@extends('layouts.main')

@section('container')
<div class="row gx-0 gap-3 mt-5">
    @foreach($datas as $data)
    <div class="card col" style="width: 18rem;">
        <img src={{ $data->image }} class="card-img-top" alt="image car" width="100%" height="200px">
        <div class="card-body">
            <h5 class="card-title">{{ $data->title }}</h5>
            <p class="card-text">{{ $data->excerpt }}</p>
            <a href="product/{{ $data->id }}" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    @endforeach
</div>
@endSection