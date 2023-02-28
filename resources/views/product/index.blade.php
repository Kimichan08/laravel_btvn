@extends('master')
@section('content')
    <div class="container">
        <a href="{{ route('product.create') }}" class="btn btn-success">Add Product</a>
        <table class="table">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Sale Price</th>
                    <th>Image</th>
                    <th>Category ID</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($product as $item)
                    <tr>
                        <td scope="row">{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->price }}</td>
                        <td>{{ $item->sale_price }}</td>
                        <td><img src="{{ url('uploads') }}/{{ $item->image }}" width="150px" alt=""></td>
                        <td>{{ $item->categories->name }}</td>
                        <td>{{ $item->description }}</td>
                        <td>
                            @if ($item->status)
                                <span class="badge badge-primary">Active</span>
                            @else
                                <span class="badge badge-danger">No Active</span>
                            @endif
                        </td>
                        <td class="d-flex">
                            <a href="{{ route('product.edit', $item->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('product.destroy', $item->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger ml-3">Delete</button>
                            </form>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $product->links() }}
    </div>
@endsection
