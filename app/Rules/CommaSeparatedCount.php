<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class CommaSeparatedCount implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($min = 5, $max = 9999)
    {
        $this->min = $min;
        $this->max = $max;
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
        if (count($keywords) < $this->min || count($keywords) > $this->max) {
            return false;
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
        return 'the number of :attribute must be more than '.$this->min.' and less than '.$this->max;
    }
}
