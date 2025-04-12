<?php

namespace App\Http\Controllers;

use App\ApiResponseTrait;
use App\Http\Requests\DoctorTitleRequest;
use App\Http\Resources\DoctorTitleResource;
use App\Models\DoctorTitle;
use App\Services\DoctorTitleService;

class DoctorTitleController extends Controller
{
    use ApiResponseTrait;

    function  __construct(public DoctorTitleService $service) {
    }
    public function index()
    {
        $titles = DoctorTitle::get();
        return $this->successResponse(DoctorTitleResource::collection($this->service->index())); // trait
        // return Response::success(DoctorTitleResource::collection($titles)); // macro
        // return $this->successResponse(DoctorTitleResource::collection($titles)); // controller
        // return response()->json(['data' => DoctorTitleResource::collection($titles)]); // normal
    }

    public function show(DoctorTitle $doctorTitle){
        return response()->json(['data' => new DoctorTitleResource($this->service->show($doctorTitle->id))]);
    }

    public function store(DoctorTitleRequest $request){
        try {
            return $this->successResponse(new DoctorTitleResource($this->service->store($request->validated())));
        } catch (\Throwable $th) {
            return $this->errorResponse($th->getMessage(), 500);
        }
    }

    public function edit(DoctorTitle $doctorTitle, DoctorTitleRequest $request)
    {
        $this->service->edit($doctorTitle->id, $request->validated());
        return response()->json([], 204);
    }

    public function delete(DoctorTitle $doctorTitle)
    {
        $this->service->delete($doctorTitle->id);
        return response()->json([], 204);
    }
}
