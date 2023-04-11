<?php

namespace App\Repositories;

use App\Models\Teacher;
use App\Repositories\Interfaces\TeacherRepositoryInterfaces;

class TeacherRepository implements TeacherRepositoryInterfaces
{
    protected Teacher $teacher;

    public function __construct(Teacher $teacher)
    {
        $this->teacher = $teacher;
    }
    public function all()
    {
        // TODO: Implement all() method.
        return Teacher::all();
    }
    public function get($id)
    {
        // TODO: Implement get() method.
    }
    public function store(array $data)
    {
        // TODO: Implement store() method.
    }
    public function update($id, array $data)
    {
        // TODO: Implement update() method.
    }
    public function delete($id)
    {
        // TODO: Implement delete() method.
    }
}
