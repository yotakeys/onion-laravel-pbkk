<?php

namespace App\Http\TA\Application\Service\CreateTopik;

use App\Http\TA\Domain\Enum\StatusTopik;

class CreateTopikRequest
{
    public function __construct(
        private string $judul,
        private string $nama_dosen,
        private StatusTopik $status,
    )
    {
    }

    public function getJudul(): string
    {
        return $this->judul;
    }

    public function getNamaDosen(): string
    {
        return $this->nama_dosen;
    }

    public function getStatus(): StatusTopik
    {
        return $this->status;
    }
}
