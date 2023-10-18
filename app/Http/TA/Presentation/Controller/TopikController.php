<?php

namespace App\Http\TA\Presentation\Controller;

use App\Http\Controllers\Controller;
use App\Http\TA\Application\Service\Topik\CreateTopik\CreateTopikRequest;
use App\Http\TA\Application\Service\Topik\CreateTopik\CreateTopikService;
use App\Http\TA\Application\Service\Topik\GetAllTopik\GetAllTopikService;
use App\Http\TA\Application\Service\Topik\GetTopikByID\GetTopikByIDService;
use App\Http\TA\Application\Service\Topik\GetTopikByID\GetTopikByIDRequest;
use App\Http\TA\Application\Service\Topik\UpdateTopik\UpdateTopikRequest;
use App\Http\TA\Application\Service\Topik\UpdateTopik\UpdateTopikService;
use App\Http\TA\Domain\Enum\StatusTopik;
use Illuminate\Http\Request;

class TopikController extends Controller
{
    public function __construct(
        private CreateTopikService $create_topik_service,
        private UpdateTopikService $update_topik_service,
        private GetAllTopikService $get_all_topik_service,
        private GetTopikByIDService $get_topik_by_id_service,
    ) {
    }

    public function createTopik(Request $request)
    {
        $request = new CreateTopikRequest(
            $request->input('judul'),
            $request->input('nama_dosen'),
            StatusTopik::tryFrom($request->input('status')),
        );

        return $this->executeService($this->create_topik_service, $request);
    }
    public function updateTopik(Request $request)
    {
        $request = new UpdateTopikRequest(
            $request->input('id'),
            $request->input('judul'),
            $request->input('nama_dosen'),
            StatusTopik::tryFrom($request->input('status')),
        );

        return $this->executeService($this->update_topik_service, $request);
    }

    public function getAllTopik()
    {
        return $this->executeService($this->get_all_topik_service);
    }

    public function getTopikByID(Request $request)
    {
        $request = new GetTopikByIDRequest(
            $request->input('id'),
        );
        return $this->executeService($this->get_topik_by_id_service, $request);
    }
}
