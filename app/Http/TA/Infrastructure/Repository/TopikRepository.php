<?php

namespace App\Http\TA\Infrastructure\Repository;

use App\Http\TA\Domain\Models\Topik;
use App\Http\TA\Domain\Service\Repository\TopikRepositoryInterface;
use Illuminate\Support\Facades\DB;

class TopikRepository implements TopikRepositoryInterface
{
    public function persist(Topik $topik)
    {
        $data = $this->createPayload($topik);
        DB::table('topiks')->upsert(
            $data,
            'id'
        );
    }

    public function getById(int $topik_id): ?Topik
    {
        // TODO: Implement getById() method.
    }

    private function createPayload(Topik $topik)
    {
        return [
            'id' => $topik->getId(),
            'dosen' => $topik->getNamaDosen(),
            'judul' => $topik->getJudul(),
            'status' => $topik->getStatus()->value,
        ];
    }
}
