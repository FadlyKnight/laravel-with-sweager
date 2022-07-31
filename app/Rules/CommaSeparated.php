<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class CommaSeparated implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $keywords = explode(',', $value);
        foreach($keywords as $keyword)
        {
            if(strlen($keyword) < 1)return false;
            if(strlen($keyword) > 30)return false;
        }
        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'each :attribute is must more than 1 char and less than 30 char';
    }
}
