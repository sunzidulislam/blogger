@extends('layouts.admin')

@section('admin-content')
    <div class="row">
            <div class="col-12">
                    <div class="card mt-4">

                        <div class="card-body">
                            <form class="form-horizontal" action="{{ route('settings.store') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="BlogTittle">Facebook </label>
                                    <input type="text" class="form-control" id="productName" name="facebook" >
                                </div>
                                <div class="form-group">
                                    <label for="BlogTittle">Twitter </label>
                                    <input type="text" class="form-control" id="productName" name="twitter" >
                                </div>

                                <div class="form-group">
                                    <label for="BlogTittle">Instagram </label>
                                    <input type="text" class="form-control" id="productName" name="instagram" >
                                </div>
                                <div class="form-group">
                                    <label for="BlogTittle">Linkedin </label>
                                    <input type="text" class="form-control" id="productName" name="linkedin" >
                                </div>
                                <div class="form-group">
                                    <label for="BlogTittle">Behance </label>
                                    <input type="text" class="form-control" id="productName" name="behance" >
                                </div>
                                <div class="form-group">
                                    <label for="BlogTittle">Mode </label>
                                    <select name="mode" id="mode" class="form-control">
                                        <option value="light">Light</option>
                                        <option value="dark">Dark</option>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-info">Create Post</button>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
@endsection
