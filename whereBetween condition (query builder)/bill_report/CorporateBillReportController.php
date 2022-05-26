<?php

namespace App\Http\Controllers\Report\corporateReport;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Mpdf\Tag\Select;

class CorporateBillReportController extends Controller
{
    public function index(){
        $client_name = DB::table('corporate_client')->select('*')->get();
        return view('report.corporate_report.bill_report.index',compact('client_name'));
    }

    public function bill_show(Request $request){
       $client_name= $request->client_name;
       $starting_date =  date('Y-m-d', strtotime($request->starting_date));
       $ending_date = date('Y-m-d', strtotime($request->ending_date));

       $bill_show_report = DB::table('corporate_sale')->whereBetween('challan_date', [$starting_date, $ending_date])->where('client_id', $client_name)->get();
        return view('report.corporate_report.bill_report.bill_show',compact('bill_show_report'));
    }
      
}
