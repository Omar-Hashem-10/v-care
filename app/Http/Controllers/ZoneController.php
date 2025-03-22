<?php

namespace App\Http\Controllers;

use App\Models\Zone;
use App\ApiResponseTrait;
use App\Http\Requests\ZoneRequest;
use App\Http\Resources\ZoneResource;
use Illuminate\Http\Request;

class ZoneController extends Controller
{
    use ApiResponseTrait;

    public function index()
    {
        try {
            $zones = Zone::get();
            return $this->successResponse(ZoneResource::collection($zones));
        } catch (\Throwable $th) {
            return $this->responseNotFound();
        }
    }

    public function show($id)
    {
        try {
            $zone = Zone::findOrFail($id);
            return $this->successResponse(new ZoneResource($zone));
        } catch (\Throwable $th) {
            return $this->responseServerError($th->getMessage());
        }
    }

    public function store(ZoneRequest $request)
    {
        try {
            $zone = Zone::create($request->validated());
            return $this->successResponse(data: new ZoneResource($zone), status: 201);
        } catch (\Throwable $th) {
            return $this->responseServerError($th->getMessage());
        }
    }

    public function update(Zone $zone, ZoneRequest $request)
    {
        try {
            $zone->update($request->validated());
            return $this->responseNotContent();
        } catch (\Throwable $th) {
            return $this->responseServerError($th->getMessage());
        }
    }

    public function delete($id)
    {
        try {
            $zone = Zone::findOrFail($id);
            $zone->delete();
            return $this->responseNotContent();
        } catch (\Throwable $th) {
            return $this->responseServerError($th->getMessage());
        }
    }
}
