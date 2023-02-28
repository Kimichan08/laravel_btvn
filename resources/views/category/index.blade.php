@extends('master')
@section('content')
    <div class="container">
        <a href="{{ route('category.create') }}" class="btn btn-success m-3">Add Category</a>
        <table class="table">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Name</th>
                    <th>Status</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $item)
                    <tr>
                        <td scope="row">{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>
                            @if ($item->status)
                                <span class="badge badge-primary">Active</span>
                            @else
                            <span class="badge badge-danger">No Active</span>
                            @endif
                        </td>
                        <td class="d-flex">
                            <a href="{{ route('category.edit',$item->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('category.destroy',$item->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger ml-3">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $categories->links() }}
    </div>
@endsection
