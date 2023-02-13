<?php

namespace App\Http\Controllers\GuestControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RequestQuote;
use Validator;

class RequestQuoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $validate = Validator::make($data, [
            'full_names' => ['required', 'string', 'min:3', 'max:50'],
            'email' => ['required', 'string', 'email', 'min:3', 'max: 50'],
            'phone_number' => ['required', 'numeric'],
            'postal_code' => ['string', 'min:7', 'max:15'],
            'quote' => ['required', 'string', 'min:25', 'max:255'],
            'file_upload' => ['mimes:pdf,doc,docx', 'max:10000']
        ]);

        if($validate->fails()) {
            return redirect()->back()->withErrors($validate->errors())->withInput();
        } else {
            if(!empty($data["file_upload"])) {
                // Get filename with the extension
                $fileUploadWithExt = $request->file('file_upload')->getClientOriginalName();
                // Get just filename
                $fileUploadName = pathinfo($fileUploadWithExt,PATHINFO_FILENAME);
                // Get just ext
                $fileUploadExtension = $request->file('file_upload')->getClientOriginalExtension();
                // Filename to store
                $fileUploadNameToStore = $fileUploadName.'_'.time().'.'.$fileUploadExtension;
                // Path to stored file upload
                $fileUploadPath = $request->file('file_upload')->storeAs('public/file_uploads',$fileUploadNameToStore);

                $request_quote_data = RequestQuote::create([
                    'full_names' => $request->input('full_names'),
                    'email' => $request->input('email'),
                    'phone_number' => $request->input('phone_number'),
                    'postal_code' => $request->input('postal_code'),
                    'quote' => $request->input('quote'),
                    'file_upload' => $fileUploadPath,
                ]);

            } else {
                $request_quote_data = RequestQuote::create([
                    'full_names' => $request->input('full_names'),
                    'email' => $request->input('email'),
                    'phone_number' => $request->input('phone_number'),
                    'postal_code' => $request->input('postal_code'),
                    'quote' => $request->input('quote'),
                    'file_upload' => null,
                ]);
            }

            if($request_quote_data) {
                return redirect()->back()->with("quote-request-successfull", "Your request has successfully been submitted");
            } else {
                return redirect()->back()->with("quote-request-failed", "Your request submission failed. Please try again later");
            } 
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
}
