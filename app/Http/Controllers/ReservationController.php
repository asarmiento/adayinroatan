<?php


namespace App\Http\Controllers;


use App\Mail\ReceiptNotification;
use App\Models\Reservation;
use App\Models\Sysconf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ReservationController extends Controller
{

    public function store(Request $request)
    {

        $validatedData =   $request->validateWithBag('post',
                [
                    'name'    =>'required',
                    'email'   =>'required|email',
                    'phone'   =>'required|numeric',
                    'kids'    =>'required|integer',
                    'terminal'=>'required',
                    'tour'    =>'required',
                    'adults'  =>'required|integer'
                ]);

                $reservation=new Reservation;
                $reservation->fill($request->all());
                if ($reservation->save()) {

                    Mail::to($request->get('email'))->send(new ReceiptNotification($reservation));
                    return back()->with('success','Se guardó con éxtio la solicitud');
                }


        return redirect('welcome')
            ->withErrors($validatedData)
            ->withInput();



    }
}
