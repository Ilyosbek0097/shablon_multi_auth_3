<?php

namespace App\Repositories;

use App\Models\Student;
use App\Repositories\Interfaces\StudentRepositoryInterfaces;

class StudentRepository implements StudentRepositoryInterfaces
{
    protected Student $student;
    public function __construct(Student $student)
    {
        $this->student = $student;

    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function all()
    {
        // TODO: Implement all() method.
        return $this->student->all();
    }

    /**
     * @param $id
     * @return void
     */
    public function get($id)
    {
        // TODO: Implement get() method.
    }

    /**
     * @param $data
     * @return void
     */
    public function store($data)
    {
        // TODO: Implement store() method.
        $requestData = $data->all();

        if($data->hasFile('image'))
        {
            $file = $data->file('image');
            $image_name = time().'.'.$file->getClientOriginalExtension();
            $file->move('site/images/', $image_name);
            $requestData['image'] = $image_name;
            return $this->student->create($requestData);
        }
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
