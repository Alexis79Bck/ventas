<?php

namespace App\Http\Traits;

trait FormFields
{
    public static function setFieldRules(string $field, string $rules): array
    {
        return  [$field  => $rules]  ;

    }

    public function setMessages(array $array)
    {

    }

}
