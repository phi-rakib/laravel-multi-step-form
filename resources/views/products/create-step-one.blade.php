@extends('layout.default')

@section('content')
    <div class="row">
        <div class="col-10">
            <form action="{{ route('products.create.step.one.post') }}" method="post">
                @csrf

                <div class="card">
                    <div class="card-header">
                        Step 1: Basic Info
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </div>
                        @endif

                        <div class="form-group">
                            <label for="name">Product Name</label>
                            <input type="text" class="form-control" value="{{ $product->name ?? '' }}" name="name">
                        </div>

                        <div class="form-group">
                            <label for="amount">Amount</label>
                            <input type="text" class="form-control" value="{{ $product->amount ?? '' }}" name="amount">
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" name="description" id="" cols="30" rows="10">
                                {{ $product->description ?? '' }}
                            </textarea>
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary float-right">Next</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
@endsection