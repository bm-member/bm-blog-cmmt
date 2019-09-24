@extends('backend.layouts.master')

@section('title', 'View Category')

@section('content')

    <div class="container">
        <h1>View Category</h1>

        @include('alerts')

        <div class="row">
            <a href="{{ url('admin/category/create') }}" class="btn btn-primary btn-sm my-3"><i class="fas fa-plus-circle"></i> Create</a>
            <div class="col-md-12">
                <table class="table">
                    <tr>
                        <td>ID</td>
                        <td>Name</td>
                        <td>Action</td>
                    </tr>
                    @foreach($category as $cat)
                        <tr>
                            <td>{{ $cat->id }}</td>
                            <td>{{ $cat->name }}</td>
                           <td> <a href="{{ url('admin/category/' . $cat->id . '/edit') }}" class="btn btn-success btn-sm"><i class="fas fa-edit"></i> Edit</a>
                               <a href="{{ url("admin/category/$cat->id/destroy") }}" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>

    </div>
@endsection