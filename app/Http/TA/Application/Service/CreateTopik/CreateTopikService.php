<?php

namespace App\Http\TA\Application\Service\CreateTopik;

use App\Http\TA\Domain\Models\Topik;
use App\Http\TA\Domain\Service\Repository\TopikRepositoryInterface;

class CreateTopikService
{
    public function __construct(
        private TopikRepositoryInterface $topik_repository
    )
    {
    }

    public function execute(CreateTopikRequest $request){
        $topik = new Topik(
            null,
            $request->getJudul(),
            $request->getNamaDosen(),
            $request->getStatus(),
        );

        $this->topik_repository->persist($topik);
    }
}
