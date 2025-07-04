<?php

namespace App\Infrastructure\Http\Requests\Tickets;

use Illuminate\Foundation\Http\FormRequest;

class ResolveTicketRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'solution' => 'required|string',
            'comment' => 'nullable|string',
        ];
    }
}