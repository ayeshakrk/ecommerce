@extends('layouts.backend.back')
@section('content')
<div class="col-md-12">      

    <div class="card card-primary">
    <div class="card-header">
    <h3 class="card-title">{{__('Update Categories')}}</h3>
    </div> 
    <form action="{{route('category.update')}}" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="category_id" value="{{$category->id}}">
        @csrf
    <div class="card-body">
    <div class="form-group">
    <label for="title">{{__('Category Title')}}</label>
    <input type="text" name="title" class="form-control" id="title" placeholder="Enter Category Title" value="{{$category->title}}">
    </div>
    <div class="form-group">
    <label for="image">{{__('Category Image')}}</label>
    <div class="input-group">
    <div class="custom-file">
    <input type="file" class="custom-file-input" id="image" name="image" placeholder="Enter Category Image">
    <label class="custom-file-label" for="image">Choose file</label>
    </div>
    </div>
    </div>
    <div class="form-group">
        <img src="{{asset('/images')."/".$category->image}}" width="50" alt="">
    </div>
    </div>
    <div class="card-footer">
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </form>
   </div> 
    
    </div>
    @endsection