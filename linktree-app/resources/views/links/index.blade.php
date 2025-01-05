@extends('layers.header')
<body>
    <div class="container">
        <h1 align="center">Tempat Link URL</h1>
        <a href="{{ route('links.create') }}" class="btn btn-primary">Membuat Link</a>
        <a href="{{ route('links.preview') }}" class="btn btn-primary right">Preview Link</a>
        <ul id="sortable" class="list-group mt-3">
            @foreach ($links as $link)
                <li class="list-group-item" data-id="{{ $link->id }}">
                    {{ $link->title }} ({{ $link->url }})
                    <a href="{{ route('links.edit', $link->id) }}" class="btn btn-sm btn-secondary float-right">Edit</a>
                    <!--<a href="{{ route('links.preview', $link->id) }}" class="btn btn-sm btn-info float-right ml-3">Preview</a>-->
                    <form action="{{ route('links.destroy', $link->id) }}" method="POST" class="float-right mr-2">
                        @csrf
                        @method('DELETE')
                        <!--<button type="submit" class="btn btn-sm btn-danger">Hapus</button>-->
                        <button class="btn btn-sm btn-danger" type="submit" >Hapus</button>
                    </form>
                </li>
            @endforeach
        </ul>
    </div>
    @extends('layers.footer')   
</body>
</html>
