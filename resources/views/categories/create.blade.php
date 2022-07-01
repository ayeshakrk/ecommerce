@extends('layouts.backend.back')
@section('content')
<div class="col-md-12">      

    <div class="card card-primary">
    <div class="card-header">
    <h3 class="card-title">{{__('Add Categories')}}</h3>
    </div> 
    <form action="{{route('category.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="card-body">
    <div class="form-group">
    <label for="title">{{__('Category Title')}}</label>
    <input type="text" name="title" class="form-control" id="title" placeholder="Enter Category Title">
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
    </div>
    <div class="card-footer">
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </form>
   </div> 
    
    </div>
    @endsection