@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (Session::has('message'))
                <div class="alert alert-success">
                    {{Session::get('message')}}
                </div>
            @endif
            <div class="card">
                <div class="card-header">All Category</div>

                <div class="card-body">
              {{-- @foreach ($categories as $category)
              <p>{{$category->name}}</p>
              @endforeach --}}

              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>
                    @if (count($categories)>0)
                    @foreach ($categories as $key=> $category)
                    <tr>
                        <th scope="row">{{$key+1}}</th>
                        <td>{{$category->name}}</td>
                        <td>
                            <a href="{{route('category.edit', [$category->id])}}">
                            <button class="btn btn-outline-success">Edit</button>
                        </td>
                        <td>
                            <a href="">
                                <form action="{{route('category.destroy',[$category->id])}}" method="post">
                                @csrf
                                {{method_field('DELETE')}}
                                <button class="btn btn-outline-danger">
                                Delete
                            </button></a>
                        </td>
                    </tr>
                        
                    @endforeach
                    @else
                    <td>
                        Tidak ada kategori yang dapat ditampilkan.
                    </td>
                    @endif
                </tbody>
              </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
