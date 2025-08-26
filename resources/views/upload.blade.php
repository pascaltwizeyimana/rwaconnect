{{-- resources/views/upload.blade.php --}}
@extends('layout')

@section('content')
<div class="upload-container" style="max-width:600px;margin:30px auto;padding:20px;border:1px solid #ddd;border-radius:10px;">
    <h1 style="text-align:center;">Upload Post</h1>

    {{-- Success Message --}}
    @if(session('success'))
        <p style="color: green; text-align:center;">{{ session('success') }}</p>
    @endif

    {{-- Error Messages --}}
    @if ($errors->any())
        <div style="color: red; margin-bottom:15px;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Upload Form --}}
    <form method="POST" action="{{ route('upload.store') }}" enctype="multipart/form-data" style="display:flex;flex-direction:column;gap:15px;">
        @csrf
        <input type="file" name="post_file" required style="padding:10px;border:1px solid #ccc;border-radius:5px;">
        <textarea name="caption" placeholder="Write a caption..." style="padding:10px;height:100px;border:1px solid #ccc;border-radius:5px;"></textarea>
        <button type="submit" style="padding:10px;background:#007bff;color:white;border:none;border-radius:5px;cursor:pointer;">
            Upload
        </button>
    </form>
</div>
@endsection
