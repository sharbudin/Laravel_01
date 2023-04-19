<?php

namespace App\Imports;

use App\Models\Employee;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $count = NULL;

        $count = Employee::where('id',$row[0])->first();

        if(isset($count)) {

            Employee::where('id', $row[0])
                    ->update([
                        'first_name'=>$row[1],
                        'last_name'=>$row[2],
                        'email'=>$row[3],
                        'phone'=>$row[4],
                        'post'=>$row[5],
                        'avatar'=>$row[6]
                    ]);
            return;
        }
        else {
            return new Employee([
                'first_name'=>$row[1],
                'last_name'=>$row[2],
                'email'=>$row[3],
                'phone'=>$row[4],
                'post'=>$row[5],
                'avatar'=>$row[6]
            ]);
        }
    }
}
