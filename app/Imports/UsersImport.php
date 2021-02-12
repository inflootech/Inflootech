<?php
  
namespace App\Imports;
  
use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
  
class UsersImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new User([
            'last_name'     => $row['name'],
            'email_id'    => $row['mail'],
            'updated_at'    =>date('Y-m-d H:i:s'),
            'created_at'    =>date('Y-m-d H:i:s'),


            // 'password' => \Hash::make($row['password']),
        ]);
    }
}