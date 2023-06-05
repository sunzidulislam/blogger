@extends('layouts.admin')

@section('admin-content')
    <div class="row">
            <div class="col-12">
                    <div class="card mt-4">
                        <div class="card-header">
                            <h2><i class="fas fa-edit"></i> Create Category</h2>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal" action="{{ route('category.store') }}" method="post" >
                                @csrf
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                <div class="form-group">
                                    <label for="Description">Description</label>
                                    <textarea class="form-control" id="productDescription" name="description" rows="12" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-info">Create Category</button>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
@endsection
