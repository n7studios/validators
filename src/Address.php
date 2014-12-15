<?php namespace Carve\Validators;

class Address {

    /**
     * Validates a UK postal code
     * @param $attribute
     * @param $value
     * @param $parameters
     * @return bool
     */
    public function postcode($attribute, $value, $parameters)
    {
        $value = trim($value);
        $validation_expression = '/^(((([A-PR-UWYZ][0-9][0-9A-HJKS-UW]?)|([A-PR-UWYZ][A-HK-Y][0-9][0-9ABEHMNPRV-Y]?))\s{0,2}[0-9]([ABD-HJLNP-UW-Z]{2}))|(GIR\s{0,2}0AA))$/i';

        return (preg_match($validation_expression, $value) > 0 ? true : false);
    }

}
