<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/ind.css')}}">
</head>
<body>
    <div class="container ftco-section bg-light">
        <div class="advertisment">
            <h2>{{ $advertisment->title }}</h2>
            <p>{{ $advertisment->description }}</p>
            <h3>Price: {{ $advertisment->price }}</h3>
            <h4>Advantages:</h4>
            <ul>
                <li>{{ $advertisment->advantages }}</li>
            </ul>
            <h4>Links:</h4>
            <ul>
                <li><a href="{{ $advertisment->links }}" target="blank">Link of Advertisement</a></li>
            </ul>
            <h4>Images:</h4>
            <div class="row">
                <div class="col-md-6" style="text-align: center">
                    @if ($advertisment->adsImage)
                    @foreach ($advertisment->adsImage as $item)
                    <img src="https://admin.alfuraij.com/uploads/ads/{{ $item->image }}" height="40%" width="30%" alt="" srcset="">
                    @endforeach
                    @endif
                </div>
            </div>
            <h4>User:</h4>
            <p>Name: {{ $advertisment->user->name }}</p>
            <p>Phone: {{ $advertisment->user->phone }}</p>
            <p>Points: {{ $advertisment->user->points }}</p>
            <h4>Area:</h4>
            <p>Name: {{ $advertisment->area->name_en }}</p>
            <p>Price: {{ $advertisment->area->price }}</p>
            <h4>Category:</h4>
            <p>Name: {{ $advertisment->category->name_en }}</p>
            <p>Type: {{ $advertisment->category->type }}</p>
        </div>
    </div>
</body>
</html>
