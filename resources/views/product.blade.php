@extends('layouts.main')

@section('container')
<div class="card" style="width: 100%;">
    <img src={{ $product->image }} class="card-img-top" alt="image car">
    <div class="card-body">
        <h1>{{ $product->title }}</h1> {{-- Menampilkan string --}}
        {!! $product->description !!} {{-- Menampilkan tag html yang ada di dalam string --}}
    </div>
  </div>
@endSection