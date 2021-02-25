<?php

namespace Renooj\Exceptions;

class ApiException extends BaseRuntimeException
{
	public function getName()
    {
        return 'ApiException';
    }
}

?>
