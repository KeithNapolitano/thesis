<html>
<head>
    <meta charset="UTF-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    />
    <meta
        http-equiv="X-UA-Compatible"
        content="ie=edge"
    />
    <title>
        Laravel App
    </title>
    <link rel="stylesheet" href="{{ asset('build/assets/app.525f5899.css') }}">
</head>
<body class="w-full h-full bg-gray-100">
    <div class="w-4/5 mx-auto">
        <div class="text-center pt-20">
            <h1 class="text-3xl text-gray-700">
                All Trips
            </h1>
            <hr class="border border-1 border-gray-300 mt-10">
        </div>

        <div class="py-10 sm:py-20">
            <a class="primary-btn inline text-base sm:text-xl bg-green-500 py-4 px-4 shadow-xl rounded-full transition-all hover:bg-green-400"
               href="{{ route('trip.create') }}">
                New Trip
            </a>
        </div>
    </div>

    @if (session()->has('message'))
        <div>
            Warning
        </div>
        <div>
            {{ session()->get('message') }}
        </div>
        
    @endif

    
    @foreach($trips as $trip)
        <div class="w-4/5 mx-auto pb-10">
            <div class="bg-white pt-10 rounded-lg drop-shadow-2xl sm:basis-3/4 basis-full sm:mr-8 pb-10 sm:pb-0">
                <div class="w-11/12 mx-auto pb-10">
                    <h2 class="text-gray-900 text-2xl font-bold pt-6 pb-0 sm:pt-0 hover:text-gray-700 transition-all">
                        Route:
                        <a href="{{ route('trip.show', $trip->id) }}">
                            {{-- {{ $trip->route_id }} --}}
                            {{ $trip->route->descr }}
                        </a>
                    </h2>

                    
                    <p>
                        Trip by:
                        {{ $trip->user->name }}
                    </p>

                    <p class="text-gray-900 text-lg py-8 w-full break-words">
                        Trip date
                        {{ $trip->dates }}
                    </p>
                    
                <a href="{{ route('trip.edit', $trip->id) }}">Edit</a>

                <form action="{{ route('trip.destroy', $trip->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">
                        Delete
                    </button>
                </form>
                ---------------------------------
                </div>
            </div>
        </div>
    @endforeach

    <div>
        {{ $trips->links() }}
    </div>
</body>
</html>