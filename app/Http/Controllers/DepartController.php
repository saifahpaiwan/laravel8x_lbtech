<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\department;
use Illuminate\Support\Facades\DB;

class DepartController extends Controller
{
    public function departmentlist()
    {
        $data = array(
            "all" => department::all(),
            "find" => department::find(1),
            "where" => department::where('id', 2)->where('status', 'N')->first(),
        );
        return view('departmentlist', compact('data'));
    }

    public function save(Request $request)
    {
        $request->validate(
            [
                'name'   => 'required|max:255',
                'type'   => 'required',
                'status' => 'required',
                'tel' => 'required|digits:10',

                'email' => 'required|email',
                'username' => 'required|string|max:100',
                'password' => 'required|string|min:6|confirmed',
                'password_confirmation' => 'required'
            ],
            [
                'name.required' => "โปรดระบุข้อมูล",
                'name.max' => "กรุณากรอกอักษรไม่เกิน 255 อักษร",

                'type.required' => "โปรดระบุข้อมูล",
                'status.required' => "โปรดระบุข้อมูล",

                'tel.required' => "โปรดระบุข้อมูล",
                'tel.digits' => "กรุณากรอกเบอร์โทรให้ถูกต้อง",

                'email.required' => "โปรดระบุข้อมูล",
                'email.email' => "กรุณากรอก Email ให้ถูกต้อง",

                'username.required' => "โปรดระบุข้อมูล",
                'username.string' => "โปรดระบุข้อมูล ให้ถูกต้อง",
                'username.max' => "กรุณากรอกอักษรไม่เกิน 100 อักษร",

                'password.required' => "โปรดระบุข้อมูล",
                'password.string' => "โปรดระบุข้อมูล ให้ถูกต้อง",
                'password.min' => "กรุณากรอกอักษรอย่าง 6 ตัวอักษร", 
                'password.confirmed' => "confirmed  ให้ถูกต้อง",

                'password.password_confirmation' => "โปรดระบุข้อมูล",
            ]
        ); 

        $data = array(
            "msg1" => "xxxx1",
            "msg2" => "xxxx2",
            "msg3" => "xxxx3",
        );
        return redirect()->route('department.list')->with('success', compact('data')); 
        // return back();  
    }

    public function store()
    {
        // Eloquent ORM แบบที่ 1 Create//
        // $flight = new department; 
        // $flight->name       = "saifah phaiwan"; 
        // $flight->type       = "1"; 
        // $flight->status     = "Y"; 
        // $flight->created_at = new \DateTime();  // date('Y-m-d') 
        // $flight->updated_at = null;
        // if($flight->save()){
        //     echo "Ok ......";
        // }  

        // Eloquent ORM แบบที่ 2 Create//
        // $flight = department::create([
        //     'name' => 'London to Paris',
        //     'type' => '2',
        //     'status' => 'N',
        //     'created_at' => new \DateTime(),
        //     'updated_at' => null,
        // ]);
        // if($flight){
        //     echo "Ok ......";
        // }


        // Eloquent ORM แบบที่ 1 Update //
        // $flight = department::find(4);
        // $flight->name       = "saifah 555555";
        // $flight->type       = "1";
        // $flight->status     = "N";
        // $flight->created_at = null;
        // $flight->updated_at = new \DateTime();
        // if ($flight->save()) {
        //     echo "Update Ok ......";
        // }

        // Eloquent ORM แบบที่ 2 Update // 
        // $flight = department::where("status", "N") 
        //     ->update(['status' => "Y"]);
        //  if ($flight) {
        //     echo "Update Ok ......";
        // } 

        // Query Builder //
        // $data = DB::table('departments') 
        // ->select('departments.id as id', 'departments.name as departmentsName', 'type.name as TypeName')
        // ->leftJoin('type', 'departments.type', '=', 'type.id')
        // ->where('status', 'Y') 
        // ->get();  

        // $data = DB::select('select `departments`.`id` as `id`, `departments`.`name` as `departmentsName`, `type`.`name` as `TypeName` 
        // from `departments` left join `type` on `departments`.`type` = `type`.`id` where `status` = "Y"');
        // dd($data);


        // $data = DB::table('departments') 
        // ->where('id', 2) 
        // ->first();

        // $data = DB::table('departments')->find(3);
        // dd($data->name);

        // $data = array(
        //     "name" => "xxxxx",
        //     "type" => "2",
        //     "status" => "N",

        //     "created_at" => new \DateTime(),
        // );
        // DB::table('departments')->Insert($data); 
        // $data = array(
        //     "name" => "QQQQ",
        //     "type" => "1",
        //     "status" => "N",

        //     "updated_at" => new \DateTime(),
        // );
        // DB::table('departments')
        // ->where('id', 3)
        // ->update($data);
    }
}
