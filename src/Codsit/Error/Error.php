<?php
namespace Codsit\Error;


class CodsitException extends \Exception {
    protected $message = "Base Culqi Exception";
}

namespace Codsit\Error;

class InputValidationError extends CodsitException {
    protected $message = "Input validation error. Error en alguno de los campos";
}

namespace Codsit\Error;

class AuthenticationError extends CodsitException {
    protected $message = "Error de autenticación";
}

namespace Codsit\Error;

class NotFound extends CodsitException {
    protected $message = "Resource not found";
}

namespace Codsit\Error;

class MethodNotAllowed extends CodsitException {
    protected $message = "Method not allowed";
}

namespace Codsit\Error;

class UnhandledError extends CodsitException {
    protected $message = "Unhandled error";
}

namespace Codsit\Error;

class InvalidApiKey extends CodsitException {
    protected $message = "API Key invalido";
}

class UnableToConnect extends CodsitException {
    protected $message = "Imposible conectar a Culqi API";
}
