@extends('layout.default')

@section('content')
    <div class="row">
        <div class="col-12">
            <form action="{{ route('products.create.step.two.post') }}" method="post">
            @csrf

            <div class="card">
                <div class="card-header">
                    Step 2: Status & Stock
                </div>

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

                    <div class="form-group">
                        <label for="status">Product Status</label>
                        
                        <label class="radio-inline">
                            <input type="radio" name="status" value="1" {{ (isset($product->status) && $product->status == '1') ? 'checked' : '' }}>Active
                        </label>

                        <label class="radio-inline">
                            <input type="radio" name="status" value="0" {{ (isset($product->status) && $product->status == '0') ? 'checked' : '' }}>Inactive
                        </label>
                    </div>

                    <div class="form-group">
                        <label for="stock">Product Stock</label>
                        <input type="text" name="stock" class="form-control" value="{{ $product->stock ?? '' }}">
                    </div>
                </div>

                <div class="card-footer">
                    <div class="row">
                        <div class="col-6 text-left">
                            <a href="{{ route('products.create.step.one') }}" class="btn btn-danger">Previous</a>
                        </div>
                        <div class="col-6 text-right">
                            <button type="submit" class="btn btn-primary">Next</button>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
@endsection