<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // return view('welcome-old');
        $result = DB::table('orders')
            ->select()
            ->get();
        return response()->json($result, 201);
    }

    public function post(Request $request)
    {
        $input = $request->all();
        DB::table('orders')->insert([
            'email' => $input['email'],
            'book_id' => $input['book_id'],
            'book_title' => $input['book_title'],
            'pickup_date' => $input['pickup_date']." 10:00:00"
        ]);

        $response = array(
            'status' => 'success',
            'message' => "Add order data successfully",
        );
        return response()->json($response, 200);
    }
}
