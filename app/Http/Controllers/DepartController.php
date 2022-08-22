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
        // dd($request->server('HTTP_USER_AGENT'));
        dd($request);
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