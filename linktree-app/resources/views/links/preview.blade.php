@extends('layers.header')
<body> 
    <div class="container"> 
    <div class="d-flex justify-content-center">
        <img class="rounded-full object-contain items-center" src="images/image.png">
    </div>
    <p class="text-lg-center">Davi Pramana Putra</p>
    <p class="text-md-center">Junior IT Developer</p>
    <div class="row">
        <div class="col text-center">
            <a href="{{ route('links.index') }}" class="btn btn-primary mb-2 ">Linktree Bio</a>
        </div>
    </div>
        <ul class="list-group"> @foreach ($links as $link) 
            <li class="list-group-item"> 
            <a href="{{ $link->url }}" target="_blank" class="d-flex justify-content-center">{{ $link->title }}</a> 
            </li> 
            @endforeach 
        </ul> 
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    
</body> 
</html>