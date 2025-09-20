<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLoanRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'libro_id' => 'required|exists:libros,libro_id',
            'usuario_id' => 'required|exists:usuarios,usuario_id',
            'fecha_prestamo' => 'required|date',
            'fecha_devolucion_esperada' => 'required|date|after:fecha_prestamo',
            'estado' => 'required|in:activo,completado,atrasado',
        ];
    }
}
