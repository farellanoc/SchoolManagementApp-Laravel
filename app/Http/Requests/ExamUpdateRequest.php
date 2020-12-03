<?php

namespace App\Http\Requests;

use App\Helpers\WeekDays;
use Illuminate\Foundation\Http\FormRequest;

class ExamUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'subject_id' => ['required', 'integer', 'exists:subjects,id'],
            'user_id' => ['required', 'integer', 'exists:users,id'],
            'name' => ['required', 'string'],
            'mark' => [],
            'time_start' => ['required'],
            'time_end' => ['required'],  
            'days'=>[]
        ];
    }
    public function validated()
    {
        $item = $this->validator->validated();

        $item['days'] = WeekDays::arrayDaysToString($item['days']);

        return $item;
    }
}
