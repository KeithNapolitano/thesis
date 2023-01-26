<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('build/assets/app.525f5899.css') }}">
</head>
<body>
<div class="w-4/5 mx-auto">
    <div class="text-center pt-20">
        <h1 class="text-3xl text-gray-700">
            Add new post
        </h1>
        <hr class="border border-1 border-gray-300 mt-10">
    </div>

<div>
    @if ($errors->any())
        <div>
             Something went wrong
        </div>
        <ul>
            @foreach ($errors->all() as $error )
                <li>
                    {{ $error }}
                </li>
                
            @endforeach
        </ul>
    @endif
</div>

<div class="m-auto pt-20">
    <form
        action="{{ route('trip.store') }}"
        method="POST"
        enctype="multipart/form-data">
        
        @csrf

        <input
            type="text"
            name="descr"
            placeholder="Route"
            class="bg-transparent block border-b-2 w-full h-20 text-2xl outline-none">

        <br>
        <input
        type="number"
        name="route_fare"
        placeholder="Fare"
        class="bg-transparent block border-b-2 w-full h-20 text-2xl outline-none">
        

        <br>
        <button
            type="submit"
            class="uppercase mt-15 bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
            Submit Post
        </button>
    </form>
</div>
</body>
</html>