@extends('layouts.app-master')

@section('content')
    <h1>Files</h1>
    <a href="{{ route('files.add') }}">Add File</a>
    <table>
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Size</th>
            <th scope="col">Type</th>
            <th scope="col">IP</th>
        </tr>
        </thead>
        <tbody>
        @foreach($files as $file)
            <tr>
                <td>{{ $file->id }}</td>
                <td>{{ $file->name }}</td>
                <td>{{ $file->size }}</td>
                <td>{{ $file->type }}</td>
                <td>{{ $file->ip }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
