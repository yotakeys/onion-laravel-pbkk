<?php

namespace App\Http\TA\Domain\Service\Repository;

use App\Http\TA\Domain\Models\Topik;

interface TopikRepositoryInterface
{
    public function persist(Topik $topik);
    public function getById(int $topik_id): ?Topik;

}
