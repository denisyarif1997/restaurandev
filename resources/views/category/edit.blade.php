@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (Session::has('message'))
               <div class="alert alert-succes">
                {{Session::get('message')}} 
               </div>
            @endif
            <form action="{{route('category.update',[$category->id])}}" method="post">
            @csrf
            {{method_field('PUT')}}
            <div class="card">
                <div class="card-header">Update Food Category</div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" value="{{$category->name}}">
                    </input>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-outline-primary">Submit</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
