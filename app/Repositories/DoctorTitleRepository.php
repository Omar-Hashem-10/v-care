<?php

namespace App\Repositories;

use DateTimeInterface;
use App\Models\DoctorTitle;
use App\Repositories\Interfaces\DoctorTitleInterface;

class DoctorTitleRepository implements DoctorTitleInterface{

    public function getAll()
    {
        return DoctorTitle::get();
    }

    public function getById($id)
    {
        return DoctorTitle::findOrFail($id);
    }

    public function create($data)
    {
        return DoctorTitle::create($data);
    }

    public function update($id, $data)
    {
        return DoctorTitle::where('id', $id)->update($data);
    }

    public function delete($id)
    {
        return DoctorTitle::where('id', $id)->delete();
    }
}
