<?php

namespace App\Http\TA\Application\Service\Topik\GetTopikByID;

use App\Http\TA\Domain\Models\Topik;
use App\Http\TA\Domain\Service\Repository\TopikRepositoryInterface;
use GuzzleHttp\Psr7\Request;

class GetTopikByIDService
{
    public function __construct(
        private TopikRepositoryInterface $topik_repository
    ) {
    }

    public function execute(GetTopikByIDRequest $request)
    {
        $id_topik = $request->getId();

        return $this->topik_repository->getTopikByID($id_topik);
    }
}
