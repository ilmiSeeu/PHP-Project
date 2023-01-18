<?php

namespace App\Http\Controllers;

use Session;

use App\Models\Page;
use Illuminate\Http\Request;


class PagesController extends Controller{

  public function index(){
    return view('index');
  }



 //kode for å sende in csv!!
  public function uploadFile(Request $request){

    if ($request->input('submit') != null ){

      $file = $request->file('file');

      // File Details 
      $filename = $file->getClientOriginalName();
      $extension = $file->getClientOriginalExtension();
      $tempPath = $file->getRealPath();
      $fileSize = $file->getSize();
      $mimeType = $file->getMimeType();

      // Valid File Extensions
      $valid_extension = array("csv");

      // 2MB in Bytes
      $maxFileSize = 2097152; 

      // Check file extension
      if(in_array(strtolower($extension),$valid_extension)){

        // Check file size
        if($fileSize <= $maxFileSize){

          // File upload location
          $location = 'uploads';

          // Upload file
          $file->move($location,$filename);

          // Import CSV to Database
          $filepath = public_path($location."/".$filename);

          // Reading file
          $file = fopen($filepath,"r");

          $importData_arr = array();
          $i = 0;

          while (($filedata = fgetcsv($file, 1000, ",")) !== FALSE) {
             $num = count($filedata );
             
             
             for ($c=0; $c < $num; $c++) {
                $importData_arr[$i][] = $filedata [$c];
             }
             $i++;
          }
          fclose($file);

          // Insert to MySQL database
          foreach($importData_arr as $importData){

            $insertData = array(
               "AppId"=>$importData[0],
               "Name"=>$importData[1],
               "surname"=>$importData[2],
               "Date_of_birth"=>$importData[3],
               "City"=>$importData[4],
               "Country"=>$importData[5],
               "Faculty"=>$importData[6],
               "Study_program"=>$importData[7],
               "Email"=>$importData[8],
               "Phone1"=>$importData[9],
               "Phone2"=>$importData[10],
               "Study_language"=>$importData[11],
               "TOEFL"=>$importData[12],
               "TOEFL_Score"=>$importData[13],
               "TOEFL_Date"=>$importData[14],
               "Model_of_UGS"=>$importData[15],
               "UGS_outside_RM"=>$importData[16],
               "UGS_Nostrification"=>$importData[17],
               "UGS_Nostrification_Date"=>$importData[18],
               "UGS_Institution_Name"=>$importData[19],
               "UGS_Study_Program"=>$importData[20],
               "UGS_Title"=>$importData[21],
               "UGS_GPA"=>$importData[22],
               "Model_of_MA_Studies"=>$importData[23],
               "MA_in_English"=>$importData[24],
               "MA_Outside_RM"=>$importData[25],
               "MA_Nostrification"=>$importData[26],
               "MA_Nostrification_Date"=>$importData[27],
               "MA_Study_Program"=>$importData[28],
               "MA_Country"=>$importData[29],
               "MA_Title"=>$importData[30],
               "MAS_GPA"=>$importData[31],
               "UGS_in_English"=>$importData[32],
               "MA_Institution_Name"=>$importData[33],
               "SP_Code"=>$importData[34],
               "Application_Date"=>$importData[35],
               "Accepted"=>$importData[36],
               "App_Year"=>$importData[37],
               "ID_Number"=>$importData[38],
               "AppTerm"=>$importData[39],
               "UGS_Country"=>$importData[40],
               "UND_ECTS"=>$importData[41],
               "MAS_ECTS"=>$importData[42],
               "UGS+MA_ECTS"=>$importData[43],
               "ENTRY_LEVEL"=>$importData[44],
               "SPNAME_SPCODE"=>$importData[45],
               "DATE/MONTH/YEAR"=>$importData[46]);
               



            Page::insertData($insertData);

          }

     
        }

      }

    }

    // Redirect to index
    return redirect("applicants");
  }
}