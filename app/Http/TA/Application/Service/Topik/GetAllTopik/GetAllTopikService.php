<?php

namespace App\Http\TA\Application\Service\Topik\GetAllTopik;

use App\Http\TA\Domain\Models\Topik;
use App\Http\TA\Domain\Service\Repository\TopikRepositoryInterface;

class GetAllTopikService
{
    public function __construct(
        private TopikRepositoryInterface $topik_repository
    ) {
    }

    public function execute()
    {

        return $this->topik_repository->getAll();
    }
}
