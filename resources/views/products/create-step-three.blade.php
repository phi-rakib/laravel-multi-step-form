@extends('layout.default')

@section('content')
    <div class="row">
        <div class="col-10">
            <form action="{{ route('products.create.step.three.post') }}" method="post">
                @csrf

                <div class="card">
                    <div class="card-header">
                        Step 3: Review Details
                    </div>

                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <td>Product Name</td>
                                <td>{{ $product->name }}</td>
                            </tr>
                            
                            <tr>
                                <td>Price</td>
                                <td>{{ $product->amount }}</td>
                            </tr>

                            <tr>
                                <td>Status</td>
                                <td>{{ $product->status ? 'Active' : 'Inactive' }}</td>
                            </tr>

                            <tr>
                                <td>Description</td>
                                <td>{{ $product->description }}</td>
                            </tr>

                            <tr>
                                <td>Stock</td>
                                <td>{{ $product->stock }}</td>
                            </tr>
                        </table>
                    </div>

                    <div class="card-footer">
                        <div class="row">
                            <div class="col-6 text-left">
                                <a href="{{ route('products.create.step.two') }}" class="btn btn-danger">Back</a>
                            </div>

                            <div class="col-6 text-right">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>


            </form>
        </div>
    </div>
@endsection