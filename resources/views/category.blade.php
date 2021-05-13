@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card card-body">
             <h2>Category={{ $category->name }}</h2>
             @foreach ($category->posts as $post )
             <h3>{{ $post->title }}</h3>
             <h3>{{ $post->description }}</h3>
                 
             @endforeach
             
              

             
         </div>
        </div>
    </div>
</div>
@endsection
