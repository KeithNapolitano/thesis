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
            Edit: {{ $trip->destination }} on {{ $trip->dates }}
        </h1>
        <hr class="border border-1 border-gray-300 mt-10">
    </div>

<div class="m-auto pt-20">
    <form
        action="{{ route('trip.update', $trip->id) }}"
        method="POST"
        enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <label for="trip_status" class="text-gray-500 text-2xl">
            Status
        </label>
        <br>
        <input
            type="checkbox"
            {{ $trip->trip_status === true ? 'checked' : '' }}
            class="bg-transparent block border-b-2 inline text-2xl outline-none"
            name="trip_status">
            

        <br>
        <input
            type="text"
            name="destination"
            value="{{ $trip->destination }}"
            class="bg-transparent block border-b-2 w-full h-20 text-2xl outline-none">
        
        {{-- <br>
        <input
            type="text"
            name="route"
            placeholder="Route..."
            class="bg-transparent block border-b-2 w-full h-20 text-2xl outline-none"> --}}

        <br>
        <input
        type="date"
        name="dates"
        value="{{ $trip->dates }}"
        class="bg-transparent block border-b-2 w-full h-20 text-2xl outline-none">

        <br>
        <input
            type="text"
            name="driver"
            value="{{ $trip->driver }}"
            class="bg-transparent block border-b-2 w-full h-20 text-2xl outline-none">
        
        <br>
        <input
        type="text"
        name="van"
        value="{{ $trip->van }}"
        class="bg-transparent block border-b-2 w-full h-20 text-2xl outline-none">

        <br>
        <input
        type="number"
        name="seats_left"
        value="{{ $trip->seats_left }}"
        class="bg-transparent block border-b-2 w-full h-20 text-2xl outline-none">
        
        <br>
        <input
            type="number"
            name="num_pass"
            value="{{ $trip->num_pass }}"
            class="bg-transparent block border-b-2 w-full h-20 text-2xl outline-none">
        
        <br>
        <input
        type="number"
        name="extra_fare"
        value="{{ $trip->extra_fare }}"
        class="bg-transparent block border-b-2 w-full h-20 text-2xl outline-none">
        
            
        {{-- <div class="bg-grey-lighter py-10">
            <label class="w-44 flex flex-col items-center px-2 py-3 bg-white-rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer">
                    <span class="mt-2 text-base leading-normal">
                        Select a file
                    </span>
                <input
                    type="file"
                    name="image"
                    class="hidden">
            </label>
        </div> --}}
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