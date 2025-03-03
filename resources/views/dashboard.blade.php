<?php
use App\Models\OrdenTaller;
$registros = OrdenTaller::where([['nit', '=', '1'],['vendedor', '=', 'Gustavo Bocanegra']])->orderBy('serial_fac', 'desc')->paginate(10);

?>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Rutas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <img src="/assets/images/LOGO_REFRITEC.jpg" alt="Banner" class=" w-1/4 h-auto">
                <div class="p-8">
                    <h1 class="text-2xl font-bold text-gray-800 dark:text-gray-200">Bienvenido a la aplicación de rutas</h1>
                    

                    <table class="table-auto w-full mt-8">
                        <thead>
                            <tr>
                                <th>Orden</th>
                                <th>Cliente</th>
                                <th>Falla</th>
                                <!-- Agrega más columnas según tu necesidad -->
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($registros as $registro)
                                <tr>
                                    <td>{{ $registro->num_fac_ven }}</td>
                                    <td>{{ $registro->nom_cli  }}</td>
                                    <td>{{ $registro->nota }}</td>
                                    <!-- Agrega más campos según tu modelo -->
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <!-- Agregar controles de paginación -->
                    <div>
                        {{ $registros->links() }}
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
