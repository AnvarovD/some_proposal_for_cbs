<?php

namespace App\UseCase;

use Illuminate\Support\Facades\Log;
use JetBrains\PhpStorm\NoReturn;

abstract class BaseUseCase
{
    protected static $type = null;
    protected static $description = null;
    protected static $descriptionArg = null;
    protected static $payload = null;
    protected static $entity = null;

//    public function __construct()
//    {
//        $this->saveUseActivity();
//    }

    #[NoReturn] protected function saveUseActivity(): void
    {
        Log::info('info', [
            static::$description,
            static::$type,
            static::$descriptionArg,
            static::$payload,
            static::$entity,
        ]);


    }
}
