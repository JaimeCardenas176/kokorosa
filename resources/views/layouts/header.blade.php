
<div class="grid grid-cols-2 gap-4 text-center">
    <!-- Logo centrado y más grande -->
    <div class="col-span-2 flex justify-center">
        <x-application-logo class=""></x-application-logo>
    </div>
    <div class="border border-black dark:border-gray-600 h-36 flex items-center justify-center">
        <div>
            <!-- Icono de ubicación -->
            <i class="bi bi-geo-alt text-red-500 col-12 my-1" style="font-size: 1.6rem; font-weight: bold;"></i>
            <span class="block mt-1 text-gray-800 dark:text-gray-200">Calle Inventada Nº 14, 08009 Barcelona</span>
        </div>
    </div>
    <div class="border border-black dark:border-gray-600 h-36 flex items-center justify-center">
        <div>
            <!-- Icono de teléfono -->
            <i class="bi bi-telephone text-red-500 col-12 my-1" style="font-size: 1.6rem; font-weight: bold;"></i>
            <span class="block mt-1 text-gray-800 dark:text-gray-200">600203040</span>
        </div>
    </div>
</div>
<div class="text-center pt-4">
    <x-nav-link class="btn bg-gray-800 dark:bg-gray-700 text-white text-lg px-8 py-3 rounded-full btn-cita" :href="route('services')" role="button">
        <span class="inline-block align-middle">Pedir cita</span>
    </x-nav-link>
</div>
