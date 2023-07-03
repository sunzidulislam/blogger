@extends('layouts.admin')

@section('admin-content')
    <div class="row">
        <div class="col-12">
            <div class="card mt-4">
                <div class="card-header">
                    <h2><i class="fas fa-edit"></i> Edit Post</h2>
                </div>
                <div class="card-body">
                    <form class="form-horizontal" action="{{ route('post.update', $post->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="BlogTittle">Tittle</label>
                            <input type="text" class="form-control" id="productName" value="{{ $post->title ?? "" }}" name="title" required>
                        </div>
                        <div class="form-group">
                            <label for="Description">Description</label>
                            <textarea class="form-control" id="productDescription" value="{{ $post->description ?? "" }}" name="description" rows="12" required></textarea>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="categorySelect">Select Category</label>
                                    <select class="form-control" id="categorySelect" name="cat_id">
                                        @foreach($categories as $cat)
                                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="imageUpload">File Upload</label>
                                    <input type="file" class="form-control-file" id="imageUpload" name="image">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="tags">Tags</label>
                                    <input type="text" class="form-control" id="tags" value="{{ $post->tags ?? "" }}" name="tags" placeholder="Give space for separate tags.">
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" name="is_featured" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Is Featured?
                                    </label>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-info">Update Post</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
