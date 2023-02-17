<?php

namespace App\Http\Controllers;

use App\Models\finalStudents_table;
use Illuminate\Http\Request;


class insertController extends Controller
{
    

    
    public function index(Request $request)
    {
        $finalApplicants = finalStudents_table::all();
        if ($request->has('Faculty')) {
            $finalApplicants = $finalApplicants->where('Faculty', $request->Faculty);
        }
        return view('finalApplicant', compact('finalApplicants'));
    }


    public function form($id, $name)
        {
        return view('form', compact('id', 'name'));
        }

        //update the status
        public function updateStatus(Request $request)
        {   
            //find that student
            $student = finalStudents_table::where('AppId', $request->AppId)->first();
            
            //if exists we change status and save
            if ($student) {
                $student->Status = $request->status;
                $student->save();
                return redirect()->back()->with('success', 'Status updated successfully');
            } else {
                return redirect()->back()->with('error', 'Student not found');
            }
        }
 
    //Takes data from the form-url and stores it to a new table in finatable model
    function DataInsert(Request $request){
        
        //get the data
        $appid = $request->input('AppId');
        $name = $request->input('name');
        $surname = $request->input('surname');
        $Prof1_Name = $request->input('Prof1_Name');
        $Prof2_Name = $request->input('Prof2_Name');
        $Prof3_Name = $request->input('Prof3_Name');
        $total = $Prof1_Name+$Prof2_Name+$Prof3_Name;
        $UGS_GPA = $request->input('UGS_GPA');
        $MAS_GPA = $request->input('MAS_GPA');
        $Bachelor_I_Ekuivalentuar = $request->input('Bachelor_I_Ekuivalentuar');
        $Inst_Status1 = $request->input('Inst_Status1');
        $Master_I_Ekuivalentuar = $request->input('Master_I_Ekuivalentuar');
        $Inst_Status2 = $request->input('Inst_Status2');
        $Suksesi_30 = $Bachelor_I_Ekuivalentuar+$Master_I_Ekuivalentuar;
        $Gjuha_20 = $request->input('Gjuha_20');
        $Punimet_20 = $request->input('Punimet_20');
        $Intervista_30 = $Prof1_Name+$Prof2_Name+$Prof3_Name;
        $Gjithsejt =  $Suksesi_30+$Gjuha_20+$Punimet_20+$Intervista_30;
        $UGS_Institution_Name = $request->input('UGS_Institution_Name');
        $MA_Institution_Name = $request->input('MA_Institution_Name');
        $Faculty = $request->input('Faculty');


         // check if student already exists by AppId
         $student = finalStudents_table::where('AppId', $appid)->first();

         // if student exists, update the record, otherwise insert a new record
         if ($student) {
            $isInserted  =  $student->update([
                 "Name"=>$name,
                 "surname"=>$surname,
                 "Prof1_Name"=>$Prof1_Name,
                 "Prof2_Name"=>$Prof2_Name,
                 "Prof3_Name"=>$Prof3_Name,
                 "Total"=>$total,
                 "UGS_GPA"=>$UGS_GPA,
                 "MAS_GPA"=>$MAS_GPA,
                 "Bachelor_I_Ekuivalentuar"=>$Bachelor_I_Ekuivalentuar,
                 "Inst_Status1"=>$Inst_Status1,
                 "Master_I_Ekuivalentuar"=>$Master_I_Ekuivalentuar,
                 "Inst_Status2"=>$Inst_Status2,
                 "Suksesi_30%"=>$Suksesi_30,
                 "Gjuha_20%"=>$Gjuha_20,
                 "Punimet_20%"=>$Punimet_20,
                 "Intervista_30%"=>$Intervista_30,
                 "Gjithsejt"=>$Gjithsejt,
                 "UGS_Institution_Name"=>$UGS_Institution_Name,
                 "MA_Institution_Name"=>$MA_Institution_Name,
                 "Faculty"=>$Faculty
             ]);
         } else {
        //insert the table
        $isInserted = finalStudents_table::insert([
            "AppId"=>$appid,
            "Name"=>$name,
            "surname"=>$surname,
            "Prof1_Name"=>$Prof1_Name,
            "Prof2_Name"=>$Prof2_Name,
            "Prof3_Name"=>$Prof3_Name,
            "Total"=>$total,
            "UGS_GPA"=>$UGS_GPA,
            "MAS_GPA"=>$MAS_GPA,
            "Bachelor_I_Ekuivalentuar"=>$Bachelor_I_Ekuivalentuar,
            "Inst_Status1"=>$Inst_Status1,
            "Master_I_Ekuivalentuar"=>$Master_I_Ekuivalentuar,
            "Inst_Status2"=>$Inst_Status2,
            "Suksesi_30%"=>$Suksesi_30,
            "Gjuha_20%"=>$Gjuha_20,
            "Punimet_20%"=>$Punimet_20,
            "Intervista_30%"=>$Intervista_30,
            "Gjithsejt"=>$Gjithsejt,
            "UGS_Institution_Name"=>$UGS_Institution_Name,
            "MA_Institution_Name"=>$MA_Institution_Name,
            "Faculty"=>$Faculty
        ]
        );}
        //if inserted send to finalapplicants
        if ($isInserted) {
            return redirect('/finalApplicants');
        }
    }
}
