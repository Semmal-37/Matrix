<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matrix;
use DB;

class MatrixController extends Controller
{

    public function create()

    {
      //  $matx = DB::select('select * from matrix WHERE matrix.name=Company');
       /// $matx = DB::table('matrix')->where('name', 'Company')->first();
       // var_dump($matx->sponsor_id);
        return view('register');

    }



  /*  public function store()

    {

        $input = request()->validate([

            'name' => 'required|min:2|max:50',
      

            'sponsor_id' => 'required',            


        ], );



        //request();

        $matrix=new Matrix($input);

        $matrix->save();



        return back()->with('success', 'New Matrix created successfully.');
    }
*/

    public function store(Request $request)
    {
        
     
        $matx = DB::table('matrix')->where('name', $request->sponsor_id)->first();
     
        $matrix = new Matrix;
    
   
        $matrix->name = $request->name;
        $matrix->sponsor_id = $matx->Pe_id;
        $matrix->level_1 = $matx->sponsor_id;
        $matrix->level_2 = $matx->level_1;
        $matrix->level_3 = $matx->level_2;
        $matrix->level_4 = $matx->level_3;
        $matrix->level_5 = $matx->level_4;
        $matrix->level_6 = $matx->level_5;
        $matrix->level_7 = $matx->level_6;
        $matrix->level_8 = $matx->level_7;
        $matrix->level_9 = $matx->level_8;
        $matrix->level_10 = $matx->level_9;
     
      $matrix->save();
      
      return back()->with('success', 'New Matrix created successfully.');
    }



    public function data(){

   //     $matx = DB::table('matrix')->where('sponsor_id',1000 )->first();
   //     $matx = DB::table('matrix') ->where('level_1', 1000);
  
  
  
        $matx1 = DB::select('select * from matrix WHERE level_1=9');
        $matx2 = DB::select('select * from matrix WHERE level_2=9');
        $matx3 = DB::select('select * from matrix WHERE level_3=9');
        $matx4 = DB::select('select * from matrix WHERE level_4=9');
        $matx5 = DB::select('select * from matrix WHERE level_5=9');
        $matx6 = DB::select('select * from matrix WHERE level_6=9');
        $matx7 = DB::select('select * from matrix WHERE level_7=9');
        $matx8 = DB::select('select * from matrix WHERE level_8=9');
        $matx9 = DB::select('select * from matrix WHERE level_9=9');
        $matx10 = DB::select('select * from matrix WHERE level_10=9');
    
    ////    $level_1=9;
    //    $level_2=9;
     //   $level_3=9;
    //    $level_4=9;
   
    //    $l1= array_count_values(array_column($matx1, 'level_1'))[$level_1];
    //    $l2= array_count_values(array_column($matx2, 'level_2'))[$level_2];
    //    $l3= array_count_values(array_column($matx3, 'level_3'))[$level_3];
    //    $l4= array_count_values(array_column($matx4, 'level_4'))[$level_4];
      //  $l5= array_count_values(array_column($matx5, 'level_5'))[$level_5];
     //   $l6= array_count_values(array_column($matx6, 'level_6'))[$level_6];
      //  $l7= array_count_values(array_column($matx7, 'level_7'))[$level_7];
       // $l8= array_count_values(array_column($matx8, 'level_8'))[$level_8];
      //  $l9= array_count_values(array_column($matx9, 'level_9'))[$level_9];
      //  $l10= array_count_values(array_column($matx10, 'level_10'))[$level_10];
       
          
      if(count($matx1) == 0)
      {
          $l1=0;
      }
      else{
      $level_1=9;

      $l1= array_count_values(array_column($matx1, 'level_1'))[$level_1];
      }
      
      
      if(count($matx2) == 0)
      {
          $l2=0;
      }
      else{
      $level_2=9;
      $l2= array_count_values(array_column($matx2, 'level_2'))[$level_2];
      }
   
      if(count($matx3) == 0)
      {
          $l3=0;
      }
      else{
      $level_3=9;
      $l3= array_count_values(array_column($matx3, 'level_3'))[$level_3];
      }    
     

      if(count($matx4) == 0)
      {
          $l4=0;
      }
      else{
      $level_4=9;
      $l4= array_count_values(array_column($matx4, 'level_4'))[$level_4];
      }    
     
        
     

        if(count($matx5) == 0)
        {
            $l5=0;
        }
        else{
        $level_5=9;
          $l5= array_count_values(array_column($matx5, 'level_5'))[$level_5];
        }

        if(count($matx6) == 0)
        {
            $l6=0; 
        }
        else{
            $level_6=9;
          $l6= array_count_values(array_column($matx6, 'level_6'))[$level_6];
        }

        if(count($matx7) == 0)
        {
            $l7=0;
        }
        else{
            $level_7=9;
          $l7= array_count_values(array_column($matx7, 'level_7'))[$level_7];
        }

        if(count($matx8) == 0)
        {
            
            $l8=0;
        }
        else{
            $level_8=9;
          $l8= array_count_values(array_column($matx8, 'level_8'))[$level_8];
        }

        if(count($matx9) == 0)
        {
            $l9=0;
        }
        else{
            $level_9=9;
          $l9= array_count_values(array_column($matx9, 'level_9'))[$level_9];
        }

        if(count($matx10) == 0)
        {
            $l10=0;
        }
        else{
            $level_10=9;
          $l10= array_count_values(array_column($matx10, 'level_10'))[$level_10];
        }
       // return view('data', compact(['var1','var2',....'varN']));['matx'=>$matx]
      // return view('data',['l1'=>$l1]);
     //return view('data',['matx'=>$matx]);
    // return view('data',$matx);

    return view('data',compact('l1','l2','l3','l4','l5','l6','l7','l8','l9','l10'));
    }
}
