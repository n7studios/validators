<?php namespace Carve\Validators;

class Bank {

    /**
     * The bank account sortcode validator using some simple regex
     * Matches: 20-04-96
     * NO Matches: 200496
     * @param $attribute
     * @param $value
     * @param $parameters
     * @return bool
     */
    public function sortcode($attribute, $value, $parameters)
    {
        $validation_expression = '/^(\d){2}-(\d){2}-(\d){2}$/i';

        return (preg_match($validation_expression, $value) > 0 ? true : false);
    }

    /**
     * The bank account number validation method.
     * @param $attribute
     * @param $value
     * @param $parameters
     * @return bool
     */
    public function accountNumber($attribute, $value, $parameters)
    {
        // For accounts that only have 7 digits (some banks do)
        // then we'll prepend the string with a leading zero.
        if (strlen($value) == 7)
            $value = '0' . $value;

        $validation_expression = '/^(\d){8}$/i';

        return (preg_match($validation_expression, $value) > 0 ? true : false);
    }

}
