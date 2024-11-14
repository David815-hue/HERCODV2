<?php

return [
    'required' => ':attribute es obligatorio.',
    'email' => 'El campo :attribute debe ser una dirección de correo electrónico válida.',
    'max_digits' => 'El campo :attribute debe tener como máximo :max dígitos.',
    'min_digits' => 'El campo :attribute debe tener al menos :min dígitos.',
    'digits' => 'El campo :attribute debe tener exactamente :digits dígitos.',
    'unique' => 'El :attribute ya está registrado y debe ser único.',
    'min' => [
        'string' => 'El campo :attribute debe tener al menos :min caracteres.',
    ],
    'max' => [
        'string' => 'El campo :attribute no debe tener más de :max caracteres.',
    ],
    'same' => 'El campo :attribute debe coincidir con :other.',
    'password' => [
        'mixed' => 'El campo :attribute debe contener al menos una letra mayúscula y una letra minúscula.',
        'symbols' => 'El campo :attribute debe contener al menos un símbolo especial (por ejemplo: !, @, #, ., $).',
    ],
];

