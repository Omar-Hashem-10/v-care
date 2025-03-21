<?php

namespace App\Http\Controllers;

use App\Http\Requests\DoctorTitleRequest;
use App\Http\Resources\DoctorTitleResource;
use App\Models\DoctorTitle;

class DoctorTitleController extends Controller
{
    public function index()
    {
        $titles = DoctorTitle::get();
        return response()->json(['data' => DoctorTitleResource::collection($titles)]);
    }

    public function show(DoctorTitle $doctorTitle){
        return response()->json(['data' => new DoctorTitleResource($doctorTitle)]);
    }

    public function store(DoctorTitleRequest $request){
        $title = DoctorTitle::create($request->validated());
        return response()->json(['data' => new DoctorTitleResource($title)], 201);
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
