@extends('layouts.admin')


@section('content')
    <div class="row">
        <div class="col-md-12 ">
            @if(session('message'))
               <div class="alert alert-success">
                   <h6>{{session('message')}}</h6>
               </div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h3>Category <a href="{{url('admin/category/create')}}" class="btn btn-primary btn-sm float-end ">Add Category</a> </h3>
                </div>
                <div class="card-body">

                </div>
            </div>
        </div>
    </div>
@endsection
