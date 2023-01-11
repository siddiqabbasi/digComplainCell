<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Complain;

class ComplainController extends Controller
{
    //
    function addComplain(Request $req){
        $complain = new Complain;
        $complain->complainant_name=$req->input('complainant_name');
        $complain->complainant_mobile_no=$req->input('complainant_mobile_no');
        $complain->offence_date=$req->input('offence_date');
        $complain->offence_month=$req->input('offence_month');
        $complain->offence_year=$req->input('offence_year');
        $complain->complain_date=$req->input('complain_date');
        $complain->complain_month=$req->input('complain_month');
        $complain->crime_type=$req->input('crime_type');
        $complain->imei_no=$req->input('imei_no');
        $complain->location=$req->input('location');
        $complain->make=$req->input('make');
        $complain->model=$req->input('model');
        $complain->color=$req->input('color');
        $complain->registration_no=$req->input('registration_no');
        $complain->engine_no=$req->input('engine_no');
        $complain->chasis_no=$req->input('chasis_no');
        $complain->police_station=$req->input('police_station');
        $complain->district=$req->input('district');
        $complain->location=$req->input('location');
        $complain->incident_time=$req->input('incident_time');
        $complain->incident_date=$req->input('incident_date');
        $complain->status_crime_type=$req->input('status_crime_type');
        $complain->fir_no=$req->input('fir_no');
        $complain->date_of_fir=$req->input('date_of_fir');
        $complain->crime_status=$req->input('crime_status');
        $complain->user_id=$req->input('user_id');
        $complain->file_path=$req->input('file_path');
        // $complain->file_path=$req->file('file')->store('products');
        $complain->save();
        return $complain;
        // return $req->input();
        // return $req->file('file')->store('products');
    }

    function list(){
        return Complain::all();
    }

    function delete($id){
        $result = Complain::where("id",$id)->delete();
        if($result){
            return ["result"=>"This complain has been deleted"];
        }else{
            return ["result"=>"Operation failed"];
        }
        // return $id;
    }

    function updateComplain(request $req){
        $result = Complain::where("id", $req['id'])
        ->update($req->toArray());
        if($result){
            return ["result"=>"This complain has been updated"];
        }else{
            return ["result"=>"Operation failed"];
        }

        // remove key "id" and its value from associative array
        // unset($req['id']);
        // return $req;
    }

    function getComplain($id){
        return Complain::find($id);
        // return $id;
    }
}
