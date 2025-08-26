@extends('layouts.app')

@section('content')
<div class="upload-page">
    <h2>Create a Post</h2>
    <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <textarea name="caption" placeholder="Write a caption..."></textarea>
        <input type="file" name="file">
        <button type="submit">Post</button>
    </form>
</div>
@endsection
