<?php
namespace App\classes;
class Student
{
    protected $text;
    protected $students;
    protected $result = [];

    public function __construct($post=null)
    {
        if(isset($post['search'])){
            $this->text = $post['search'];
        }
    }

    public function getAllStudent(){
            return [
                  0 => [
                      'name'        =>  'Rony',
                      'mobile'      =>  '012566987',
                      'email'       =>  'rony255@gmail.com',
                      'address'     =>  'Dhanmondi',
                  ],

                  1 => [
                    'name'        =>  'Shamim',
                    'mobile'      =>  '01245587',
                    'email'       =>  'shamim2675@gmail.com',
                    'address'     =>  'Dhaka',
                  ],

                  2 => [
                    'name'        =>  'Hasem',
                    'mobile'      =>  '012566987',
                    'email'       =>  'rony255@gmail.com',
                    'address'     =>  'Nilkhet',
                  ],

                3 => [
                    'name'        =>  'Akhi',
                    'mobile'      =>  '012566987',
                    'email'       =>  'rony255@gmail.com',
                    'address'     =>  'Nodda',
                ],

                4 => [
                    'name'        =>  'Topu',
                    'mobile'      =>  '012566987',
                    'email'       =>  'rony255@gmail.com',
                    'address'     =>  'Rajsahi',
                ],

                5 => [
                    'name'        =>  'Rafik',
                    'mobile'      =>  '012566987',
                    'email'       =>  'rony255@gmail.com',
                    'address'     =>  'Gajipur',
                ],

            ];
        }

        public function getAllStudentbBySearchText(){
            $this->students  = $this->getAllStudent();
             foreach ($this->students as $student){
                 if ($this->text == $student['name']){
                     $this->result = $student;
                     break;
                 }

             }
             return $this->result;

        }
}