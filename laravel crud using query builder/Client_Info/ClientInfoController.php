<?php

namespace App\Http\Controllers\Client_Info;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;

class ClientInfoController extends Controller
{
    public function index()
    {
        $client_ifo = DB::table('corporate_client')->SELECT('*')->get();
        return view('client_info.index', compact('client_ifo'));
    }
    public function create()
    {
        return view('client_info.create');
    }
    public function store(Request $request)
    {

        $clientName = $request->input('client_name');
        $clientContact = $request->input('contact_no');
        $clientAddress = $request->input('address');
        $data = array(
            'client_name' => $clientName,
            'contact_no' => $clientContact,
            'address' => $clientAddress
        );

        DB::table('corporate_client')->insert($data);
        $response  = [
            'status' => 200,
            'is_error' => false,
            'message' => "client setup successfully!!"
        ];

        return response()->json($response);
    }
    public function edit($id)
    {
        $client_id = Crypt::decrypt($id);
        $client_edit = DB::table('corporate_client')->where('id', $client_id)->first();
        return view('client_info.edit', compact('client_edit'));
    }

    public function update(Request $request){
        $clientName = $request->input('client_name');
        $clientContact = $request->input('contact_no');
        $clientAddress = $request->input('address');
        $edit_id = Crypt::decrypt($request->edit_id);
        $update_data = array(
            'client_name' => $clientName,
            'contact_no' => $clientContact,
            'address' => $clientAddress,
        );
        DB::table('corporate_client')->where('id', $edit_id)->update($update_data);
        $response  = [
            'status' => 200,
            'is_error' => false,
            'message' => "client update successfully!!"
        ];

        return response()->json($response);
    }
}
