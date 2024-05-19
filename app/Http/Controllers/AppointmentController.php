<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        try {

            //Obtenemos la fecha seleccionada del calendario del fichero HTML
            $selectedDate = $request->input('date');

            // Convertimos la fecha seleccionada a un objeto Carbon para obtener el día de la semana
            $selectedDateTime = Carbon::parse($selectedDate);
            $dayOfWeek = $selectedDateTime->dayOfWeek;

            $error = null;
            // Verificar si la fecha seleccionada es un sábado (día 6) o un domingo (día 0)
            if ($dayOfWeek === Carbon::SATURDAY || $dayOfWeek === Carbon::SUNDAY) {
                $error = 'No se pueden pedir citas los fines de semana.';
            }

            //Usamos Eloquent para buscar todas las citas existentes en la base de datos para la fecha seleccionada y extraer solo las fechas como un array
            $existingAppointments = Appointment::whereDate('date', $selectedDate)->pluck('date');

            //Iteramos sobre la colección de fechas existentes y convertimos cada una en una cadena de hora utilizando Carbon. Esta línea crea una colección de las horas reservadas.
            $bookedHours = $existingAppointments->map(function ($dateTime) {
                return Carbon::parse($dateTime)->format('H:i:s');
            });

            //Creamos un rango de horas desde las 10:00 hasta las 20:00 con un intervalo de 30 min
            $allHours = [];
            $startHour = Carbon::parse('10:00:00');
            $endHour = Carbon::parse('20:00:00');
            $interval = 30;
            $currentHour = $startHour->copy();

            //Usamos un bucle while para crear un array $allHours con todas las horas dentro del rango especificado.
            while ($currentHour < $endHour) {
                $allHours[] = $currentHour->format('H:i:s');
                $currentHour->addMinutes($interval);
            }

            // Eliminamos las horas donde no se trabaja (de 14:00 a 16:00)
            unset($allHours[8]);
            unset($allHours[9]);
            unset($allHours[10]);
            unset($allHours[11]);

            // Filtramos las horas disponibles
            $finallyAvailableHours = array_diff($allHours, $bookedHours->toArray());
            
            if ($error != null) {

                // Si hay un error, devuelve la vista con el mensaje de error
                return view('daySelection', ['error' => $error]);
            } else {
                return view('daySelection', ['finallyAvailableHours' => $finallyAvailableHours, 'date' => $selectedDate]);
            }
        } catch (\Exception $e) {

            return view('error');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
