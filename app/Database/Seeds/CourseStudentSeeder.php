<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CourseStudentSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'course_id' => 1,
                'student_id' => 2,
            ],
            [
                'course_id' => 1,
                'student_id' => 3,
            ],
            [
                'course_id' => 1,
                'student_id' => 4,
            ],
            [
                'course_id' => 1,
                'student_id' => 5,
            ],
        ];

        $builder = $this->db->table('course_student');
        $builder->truncate();
        $builder->insertBatch($data);
        echo (string) $this->db->getLastQuery();
    }
}
