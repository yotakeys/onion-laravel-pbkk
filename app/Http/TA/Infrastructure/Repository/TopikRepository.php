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

    public function getTopikByID(string $topik_id): ?Topik
    {
        $topik = DB::table('topiks')->where('id', $topik_id)->first();

        return $topik;
    }

    public function getAll(): array
    {
        $topiks = DB::table('topiks')->get();

        return $topiks->toArray();
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
