<?php

namespace App\Http\TA\Presentation\Controller;

use App\Http\Controllers\Controller;
use App\Http\TA\Application\Service\CreateTopik\CreateTopikRequest;
use App\Http\TA\Application\Service\CreateTopik\CreateTopikService;
use App\Http\TA\Application\Service\UpdateTopik\UpdateTopikRequest;
use App\Http\TA\Application\Service\UpdateTopik\UpdateTopikService;
use App\Http\TA\Domain\Enum\StatusTopik;
use Illuminate\Http\Request;

class TopikController extends Controller
{
    public function __construct(
        private CreateTopikService $create_topik_service,
        private UpdateTopikService $update_topik_service
    )
    {
    }

    public function createTopik(Request $request){
        $request = new CreateTopikRequest(
            $request->input('judul'),
            $request->input('nama_dosen'),
            StatusTopik::tryFrom($request->input('status')),
        );

        return $this->executeService($this->create_topik_service, $request);
    }
    public function updateTopik(Request $request){
        $request = new UpdateTopikRequest(
            $request->input('id'),
            $request->input('judul'),
            $request->input('nama_dosen'),
            StatusTopik::tryFrom($request->input('status')),
        );

        return $this->executeService($this->update_topik_service, $request);
    }
}
