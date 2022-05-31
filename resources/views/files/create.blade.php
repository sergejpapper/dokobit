@extends('layouts.app-master')

@section('content')
    <form action="{{ route('files.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <input type="file" name="file"
                   accept=".jpg,.jpeg,.bmp,.png,.gif,.doc,.docx,.csv,.rtf,.xlsx,.xls,.txt,.pdf,.zip">
        </div>
        <button type="submit">Save</button>
    </form>
@endsection
