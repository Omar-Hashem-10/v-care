<?php

namespace App\Services;

use App\Repositories\Interfaces\DoctorTitleInterface;

class DoctorTitleService{

    function __construct(public DoctorTitleInterface $repository) {

    }
    public function index()
    {
        return $this->repository->getAll();
    }

    public function show($id)
    {
        return $this->repository->getById($id);
    }

    public function store($data)
    {
        return $this->repository->create($data);
    }

    public function edit($id, $data)
    {
        return $this->repository->update($id, $data);
    }

    public function delete($id)
    {
        return $this->repository->delete($id);
    }
}
