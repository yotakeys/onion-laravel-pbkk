<?php

namespace App\Http\TA\Application\Service\Topik\GetTopikByID;

use App\Http\TA\Domain\Enum\StatusTopik;

class GetTopikByIDRequest
{
    public function __construct(
        private string $id,
    ) {
        $this->id = $id;
    }

    public function getId(): string
    {
        return $this->id;
    }
}
