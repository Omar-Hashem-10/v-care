<?php

namespace App\Http\Controllers;

use App\ApiResponse;
use App\ApiResponseTrait;
use App\Http\Requests\DoctorTitleRequest;
use App\Http\Resources\DoctorTitleResource;
use App\Models\DoctorTitle;
use Illuminate\Support\Facades\Response;

class DoctorTitleController extends Controller
{
    use ApiResponseTrait;
    public function index()
    {
        $titles = DoctorTitle::get();
        return $this->successResponse(DoctorTitleResource::collection($titles)); // trait
        // return Response::success(DoctorTitleResource::collection($titles)); // macro
        // return $this->successResponse(DoctorTitleResource::collection($titles)); // controller
        // return response()->json(['data' => DoctorTitleResource::collection($titles)]); // normal
    }

    public function show(DoctorTitle $doctorTitle){
        return response()->json(['data' => new DoctorTitleResource($doctorTitle)]);
    }

    public function store(DoctorTitleRequest $request){
        try {
            $title = DoctorTitle::create($request->validated());
            return $this->successResponse(new DoctorTitleResource($title));
        } catch (\Throwable $th) {
            return $this->errorResponse($th->getMessage(), 500);
        }
    }

    public function edit(DoctorTitle $doctorTitle, DoctorTitleRequest $request)
    {
        $doctorTitle->update($request->validated());
        return response()->json([], 204);
    }

    public function delete(DoctorTitle $doctorTitle)
    {
        $doctorTitle->delete();
        return response()->json([], 204);
    }
}
