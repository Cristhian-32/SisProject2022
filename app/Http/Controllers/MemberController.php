<?php

namespace App\Http\Controllers;

use App\Http\Requests\MemberPostRequest;
use App\Models\Members;
use App\Models\Student;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index(){
        $members=Members::all();
        //return $schools;
        return response()->json($members);
    }

    public function show(Members $members){
        $members=Members::find($members);
        return response()->json($members);
    }

    public function store(MemberPostRequest $request){
        $members = Members::create($request->all());

        return response()->json([
            'message' => "record saved successfully!",
            'members' => $members
        ], 200);
    }

    public function update(MemberPostRequest $request, Members $members){
        $members->update($request->all());

        return response()->json([
            'message' => "record updated successfully!",
            'members' => $members
        ], 200);
    }

    public function destroy(Student $student){
        $student->delete();
        return response()->json([
            'message' => "record deleted successfully!",
        ], 200);
    }
}
