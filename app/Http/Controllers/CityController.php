<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\ApiResponseTrait;
use Illuminate\Http\Request;
use App\Http\Requests\CityRequest;
use App\Http\Resources\CityResource;

class CityController extends Controller
{
    use ApiResponseTrait;

    public function index()
    {
        try {
            $cities = City::get();
            return $this->successResponse(CityResource::collection($cities));
        } catch (\Throwable $th) {
            return $this->responseNotFound();
        }
    }

    public function show($id)
    {
        try {
            $city = City::findOrFail($id);
            return $this->successResponse(new CityResource($city));
        } catch (\Throwable $th) {
            return $this->responseServerError($th->getMessage());
        }
    }

    public function store(CityRequest $request)
    {
        try {
            $city = City::create($request->validated());
            return $this->successResponse(data: new CityResource($city), status: 201);
        } catch (\Throwable $th) {
            return $this->responseServerError($th->getMessage());
        }
    }

    public function update(City $city, CityRequest $request)
    {
        try {
            $city->update($request->validated());
            return $this->responseNotContent();
        } catch (\Throwable $th) {
            return $this->responseServerError($th->getMessage());
        }
    }

    public function delete( $id)
    {
        try {
            $city = City::findOrFail($id);
            $city->delete();
            return $this->responseNotContent();
        } catch (\Throwable $th) {
            return $this->responseServerError($th->getMessage());
        }
    }
}
