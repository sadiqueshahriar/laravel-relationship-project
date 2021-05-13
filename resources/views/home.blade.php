@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                   <form action="{!! route('posts.store') !!}" method="POST">
                        @csrf
                       @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="form-group">
                            <label for="exampleInputEmail1">title</label>
                            <input type="text" class="form-control" name="title" aria-describedby="emailHelp" placeholder="Enter title">
                        </div>
                       <div class="form-group">
                            <label for="exampleFormControlTextarea1">Description</label>
                            <textarea class="form-control" name="description" rows="3"></textarea>
                        </div>
                        <label for="category">Category</label>
                        <select name="category_id" class="form-control select2">
                            @foreach ($categories as $category )
                            <option value="{{ $category->id }}">{{ $category->name }}</option>              
                            @endforeach
                        </select>
                         <label for="tags">Tags</label>
                         <select name="tags[]" class="form-control select2" multiple>
                            @foreach ($tags as $tag )
                            <option value="{{ $tag->id }}">{{ $tag->name }}</option>              
                            @endforeach
                        </select>  
                        <button type="submit" class="btn btn-success mt-2">Submit</button>
                        </form>
                </div>
            </div>
         <div class="card card-body">
             <h2>All posts</h2>
             <div class="card card-body">

             @foreach ($posts as $post)
             <h3>{{ $post->title }} in <small><mark>
                 <a href="{!! route('category',$post->category->id) !!}">{{ $post->category->name }}</a></mark></small></h3>
             <div>
                 {!! $post->description !!}
             </div>   
             @endforeach
             </div>
         </div>
         <div>
             <h2>All tags</h2>
             @foreach ($post->tags as $tag )
             
             <span class="badge badge-primary">{{ $tag->name }}</span>
                 
             @endforeach
         </div>
         

        </div>
    </div>
</div>
@endsection

@section('scripts')
 <script>     
  $('.select2-multi').select2();
  $('.select2').select2();
 </script>
 @endsection

