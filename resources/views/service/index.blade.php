<x-app-layout>
    @if($services)
    <div class="container mx-auto">
        @foreach ($services as $serv)
        <p class="flex justify-center">
            <x-nav-link :href="route('createAppointment')" :value="$serv" class="services w-3/4 md:w-1/2 flex justify-between items-center px-4 py-2 bg-white hover:bg-gray-300 rounded-lg text-lg font-medium text-gray-800 dark:bg-white dark:text-gray-200 dark:hover:bg-gray-600 dark:hover:text-gray-100 transition duration-300 ease-in-out" style="text-decoration: none" role="button">
                <span id="elegido">{{$serv->name}}</span>
                <span>{{$serv->price}}€</span>
            </x-nav-link>
        </p>
        @endforeach
    </div>
    @endif
</x-app-layout>