<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Chrisbjr\ApiGuard\Http\Controllers\ApiGuardController;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;
use App\Detail;
use DB;

class PostAPIController extends ApiGuardController
{
     /*protected $apiMethods = [
        'index' => [
            'keyAuthentication' => false
        ],
        'store' => [
            'keyAuthentication' => false
        ],
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('detail');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function sendResponse($result, $message)
    {
    $response = [
            'success' => true,
            'data'    => $result,
            'message' => $message,
        ];


        return response()->json($response, 200);
    }


    public function sendError($error, $errorMessages = [], $code = 404)
    {
    $response = [
            'success' => false,
            'message' => $error,
        ];


        if(!empty($errorMessages)){
            $response['data'] = $errorMessages;
        }


        return response()->json($response, $code);
    }
    

    public function store(Request $request)
    {
        //return json_encode($request->all());
                 $input = $request->all();
        $data = Input::all();
         $detail = $request->json()->all();
         

        $validator = Validator::make($detail, [
            'name' => 'required',
            'email_id' => 'required | email',
            'mobile'=>'required|min:10|numeric',
            'dob'=>'required',
            'city'=>'required',
            'loan_amount'=>'required|numeric',
            'occupation'=>'required',
            'mon_income'=>'required|numeric',
            'sal_rec'=>'required',
            'sal_dep'=>'required',
            'dt_trans'=>'required',
         ]);


        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
        $det = new Detail();
         $det->name = $detail['name'];
         $det->email_id = $detail['email_id'];
         $det->mobile = $detail['mobile'];
         $det->dob = date('Y-m-d', strtotime($detail['dob'])); 
         $det->city = $detail['city'];
         $det->loan_amount = $detail['loan_amount']; 
         $det->occupation = $detail['occupation'];
         $det->mon_income = $detail['mon_income'];
         $det->sal_rec = $detail['sal_rec']; 
         $det->sal_dep = $detail['sal_dep'];
         $det->dt_trans = date('Y-m-d', strtotime($detail['dt_trans'])); 

        //$post = Detail::create($input);
        $detail = $det->save();
        return $this->sendResponse($detail, 'Details saved successfully.');
    

    
}
public function show()
    {
        $detail = DB::table('details')->distinct()->get();
        return $this->sendResponse($detail, 'Data fetched successfully.');
    }
}
