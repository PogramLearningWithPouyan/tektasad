@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Add Product</div>

                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('products.store') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="title">Title:</label>
                                <input type="text" id="title" name="title" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="price">Price:</label>
                                <input type="number" id="price" name="price" class="form-control" min="0">
                            </div>

                            <div class="form-group">
                                <label for="description">Description:</label>
                                <textarea id="description" name="description" class="form-control"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Add Product</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
