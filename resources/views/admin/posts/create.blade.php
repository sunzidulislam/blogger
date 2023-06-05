@extends('layouts.admin')

@section('admin-content')
    <div class="row">
            <div class="col-12">
                    <div class="card mt-4">
                        <div class="card-header">
                            <h2><i class="fas fa-edit"></i> Create Post</h2>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal" action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="BlogTittle">Tittle</label>
                                    <input type="text" class="form-control" id="productName" name="title" required>
                                </div>
                                <div class="form-group">
                                    <label for="Description">Description</label>
                                    <textarea class="form-control" id="productDescription" name="description" rows="12" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="imageUpload">File Upload</label>
                                    <input type="file" class="form-control-file" id="imageUpload" name="image">
                                </div>
                                <div class="form-group">
                                    <label for="categorySelect">Select Category</label>
                                    <select class="form-control" id="categorySelect" name="cat_id">
                                        @foreach($categories as $cat)
                                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <button type="submit" class="btn btn-info">Create Post</button>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
@endsection
