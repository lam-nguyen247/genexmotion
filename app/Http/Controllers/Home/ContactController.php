<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Customer;
use App\Notifications\CustomerNotification;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Notification;

class ContactController extends Controller
{
    public function index()
    {
        $path = 'contact';
        if (request()->path() != trans($path)) {
            return redirect(trans($path));
        }
        return view('home.' . $path . '.index');
    }

    public function createContact(Request $request)
    {
        try{
            $customer = Customer::create($request->all());
            Notification::route('mail', 'lnguyen24794@gmail.com')->notify(new CustomerNotification($customer));
            return response([
                'data' => $customer,
                'success' => true,
                'message' => ''
            ], 200);
        }catch(Exception $e){
            Log::error($e);
            return response([
                'data' => $customer,
                'success' => true,
                'message' => ''
            ], 200);
        }
    }
}
