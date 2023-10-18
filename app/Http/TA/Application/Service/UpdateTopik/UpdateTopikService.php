<?php

namespace App\Http\TA\Application\Service\UpdateTopik;

use App\Http\TA\Domain\Models\Topik;
use App\Http\TA\Domain\Service\Repository\TopikRepositoryInterface;

class UpdateTopikService
{
    public function __construct(
        private TopikRepositoryInterface $topik_repository
    )
    {
    }

    public function execute(UpdateTopikRequest $request){
        //cekking apakah sudah ada

        // kalau ga adaa error

        $topik = new Topik(
            $request->getId(),
            $request->getJudul(),
            $request->getNamaDosen(),
            $request->getStatus(),
        );

        $this->topik_repository->persist($topik);
    }
}
