<?php

namespace App\Http\Requests;

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
            'days'=>['required', 'string']
        ];
    }
    public function validated()
    {
        $item = $this->validator->validated();

        if(empty($item['active'])){
            $item['active'] = false;
        }

        if(!is_bool($item['active'])){
            $item['active'] = $item['active'] == 'on';
        }

        $item['days'] = WeekDays::arrayDaysToString($item['days']);

        return $item;
    }
}
