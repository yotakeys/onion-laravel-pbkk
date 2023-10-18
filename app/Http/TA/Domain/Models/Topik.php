<?php

namespace App\Http\TA\Domain\Models;

use App\Http\TA\Domain\Enum\StatusTopik;

class Topik
{
    public function __construct(
        private ?int $id,
        private string $judul,
        private string $nama_dosen,
        private StatusTopik $status,
    )
    {
    }

    public function getId(): ?int
    {
        return $this->id;
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
