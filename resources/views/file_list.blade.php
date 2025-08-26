<!DOCTYPE html>
<html>
<head>
    <title>Uploaded Files</title>
</head>
<body>
    <h1>Uploaded Files</h1>

    <ul>
        @foreach($files as $file)
            <li>
                @if(preg_match('/\.(jpg|jpeg|png|gif)$/i', $file))
                    <img src="{{ $file }}" width="200"><br>
                @elseif(preg_match('/\.(mp4|webm)$/i', $file))
                    <video width="320" height="240" controls>
                        <source src="{{ $file }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video><br>
                @elseif(preg_match('/\.pdf$/i', $file))
                    <iframe src="{{ $file }}" width="600" height="400"></iframe><br>
                @endif
                <a href="{{ $file }}" target="_blank">{{ basename($file) }}</a>
            </li>
        @endforeach
    </ul>

    <a href="{{ route('upload') }}">Upload more files</a>
</body>
</html>
