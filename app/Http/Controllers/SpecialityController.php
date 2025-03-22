<?php

namespace App\Http\Controllers;

use App\ApiResponseTrait;
use App\Models\Speciality;
use Illuminate\Http\Request;
use App\Http\Requests\SpecialityRequest;
use App\Http\Resources\SpecialityResource;

class SpecialityController extends Controller
{
    use ApiResponseTrait;

    public function index()
    {
        try {
            $specialities = Speciality::get();
            return $this->successResponse(SpecialityResource::collection($specialities));
        } catch (\Throwable $th) {
            return $this->responseNotFound();
        }
    }

    public function show($id)
    {
        try {
            $speciality = Speciality::findOrFail($id);
            return $this->successResponse(new SpecialityResource($speciality));
        } catch (\Throwable $th) {
            return $this->responseServerError($th->getMessage());
        }
    }

    public function store(SpecialityRequest $request)
    {
        try {
            $speciality = Speciality::create($request->validated());
            return $this->successResponse(data: new SpecialityResource($speciality), status: 201);
        } catch (\Throwable $th) {
            return $this->responseServerError($th->getMessage());
        }
    }

    public function update(Speciality $speciality, SpecialityRequest $request)
    {
        try {
            $speciality->update($request->validated());
            return $this->responseNotContent();
        } catch (\Throwable $th) {
            return $this->responseServerError($th->getMessage());
        }
    }

    public function delete($id)
    {
        try {
            $speciality = Speciality::findOrFail($id);
            $speciality->delete();
            return $this->responseNotContent();
        } catch (\Throwable $th) {
            return $this->responseServerError($th->getMessage());
        }
    }
}
