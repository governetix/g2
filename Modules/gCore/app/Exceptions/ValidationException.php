<?php

namespace Modules\GCore\Exceptions;

use Illuminate\Validation\ValidationException as LaravelValidationException;

class ValidationException extends LaravelValidationException
{
    // Puedes añadir lógica personalizada aquí si es necesario
}
