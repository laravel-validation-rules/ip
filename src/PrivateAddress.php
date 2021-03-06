<?php

namespace LVR\IP;

use Illuminate\Contracts\Validation\Rule;

class PrivateAddress implements Rule
{
    /**
     * Determine if the validation rule passes.
     *
     * @param  string $attribute
     * @param  mixed  $value
     *
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return (new Address($value))->isPrivate();
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The ip address is not private';
    }
}
