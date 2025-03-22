<?php

namespace App\Http\Controllers;

use App\ApiResponseTrait;
use App\Http\Requests\CountryRequest;
use App\Http\Resources\CountryResource;
use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    use ApiResponseTrait;
    public function index()
    {
        $countries = Country::get();

        return $this->successResponse(CountryResource::collection($countries));
    }

    public function show($id)
    {
        try {
            $country = Country::findOrFail($id);
            return $this->successResponse(new CountryResource($country));
        } catch (\Throwable $th) {
            return $this->responseServerError($th->getMessage());
        }
    }

    public function store(CountryRequest $request)
    {
        try {
            $country = Country::create($request->validated());
            return $this->successResponse(data: new CountryResource($country), status: 201);
        } catch (\Throwable $th) {
            return $this->responseServerError( $th->getMessage());
        }
    }

    public function update(Country $country, CountryRequest $request)
    {
        try {
            $country->update($request->validated());
            return $this->responseNotContent();
        } catch (\Throwable $th) {
            return $this->responseServerError($th->getMessage());
        }
    }

    public function delete( $id)
    {
        try {
            $country = Country::findOrFail($id);
            $country->delete();
            return $this->responseNotContent();
        } catch (\Throwable $th) {
            return $this->responseServerError($th->getMessage());
        }
    }
}
