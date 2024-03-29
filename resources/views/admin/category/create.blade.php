@extends('layouts.admin')


@section('content')
<div class="row">
    <div class="col-md-12 ">
        <div class="card">
            <div class="card-header">
                <h3>Add Category <a href="{{url('admin/category')}}" class="btn btn-primary text-white btn-sm float-end ">BACK</a> </h3>
            </div>
            <div class="card-body">
                <form action="{{url('admin/category')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Name</label>
                            <input type="text" name="name" class="form-controle" required/>

                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Slug</label>
                            <input type="text" name="slug" class="form-controle" required />
                        </div>
                        <div class="col-md-12 mb-3">
                            <label>Description</label>
                            <textarea type="text" name="description" class="form-controle" required></textarea>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Image</label>
                            <input type="file" name="image" lcass="form-controle" required />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Status</label>
                            <input type="checkbox" name="status" /><br />
                        </div>
                        <div class="col-md-12">
                            <h4> SEO Tags</h4>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label>Meta Title</label>
                            <input type="text" name="meta_title" class="form-controle" required />
                        </div>
                        <div class="col-md-12 mb-3">
                            <label>Meta Keyword</label>
                            <textarea type="text" name="meta_keyword" class="form-controle" rows="3" required></textarea>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label>Meta Description</label>
                            <textarea type="text" name="meta_description" class="form-controle" rows="3" required></textarea>
                        </div>
                        <div class="col-md-12 mb-3">
                            <button type="submit" class="btn btn-primary float-end">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
