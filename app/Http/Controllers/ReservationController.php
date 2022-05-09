<?php


namespace App\Http\Controllers;


use App\Exports\ReportReservations;
use App\Mail\AcceptedNotification;
use App\Mail\ReceiptNotification;
use App\Mail\rejectingNotification;
use App\Models\Reservation;
use App\Models\Sysconf;
use Carbon\Carbon;
use Codedge\Fpdf\Facades\Fpdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;

class ReservationController extends Controller
{

	public function searchDateDay($date)
	{
		return 	Reservation::where('date',Carbon::parse($date)->toDateString())->where('accept',true)->get();
	}

	public function searchDateDayCount($date)
	{
		$count = Reservation::where('date',Carbon::parse($date)->toDateString())->where('accept',true)->count();
		if($count){
			return $count;
		}
		return 	0;
	}

	public function lists()
	{
		return Reservation::where('accept',false)->where('status',false)->get();
	}
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

	public function acceptReserv($id)
	{
		$reservation = Reservation::find($id);
		Reservation::where('id',$id)->update(['accept'=>true]);
		Mail::to($reservation->email)->send(new AcceptedNotification($reservation));
		return response()->json(['success'=>true,'message'=>'Se acepto correctamente la reservación','data'=>$this->lists()],200);
}

	public function rejectingReserv($id)
	{
		$reservation = Reservation::find($id);
		Reservation::where('id',$id)->update(['status'=>true,]);
		Mail::to($reservation->email)->send(new rejectingNotification($reservation));
		return response()->json(['success'=>true,'message'=>'Se rechazo correctamente la reservación','data'=>$this->lists()],200);
}
	public function searchDate(Request $request)
	{
		$data = $request->all();
	$reservations=	Reservation::whereBetween('date',[Carbon::parse($data['date'])->firstOfMonth()->toDateString(),Carbon::parse($data['date'])->lastOfMonth()->toDateString()])->where('accept',true)->get();
	return $reservations;
    }

	public function reportExcel($mounth)
	{
		$date = Carbon::parse(date('Y').'-'.$mounth.'-01');
		//$reservations = Reservation::whereBetween('date',[$date->toDateString(),$date->endOfMonth()->toDateString()])->get();
		return Excel::download(new ReportReservations([$date->toDateString(),$date->endOfMonth()->toDateString()]),'report_month.xlsx');
    }
	public function reportPdf($mounth)
	{
$date = Carbon::parse(date('Y').'-'.$mounth.'-01');
		$fpdf = Fpdf::AddPage('P');
		$fpdf .= Fpdf::SetFont('Arial', 'BI', 16);
		$fpdf .= Fpdf::SetX(10);
		$fpdf .= Fpdf::Cell(0, 7, utf8_decode("A day in Roatan"), 0, 1, 'C');
		$fpdf .= Fpdf::Ln();

		$fpdf .= Fpdf::SetX(5);
		$fpdf .= Fpdf::SetFont('Arial', 'BI', 12);
		$fpdf .= Fpdf::Cell(22, 7, utf8_decode("Date"), 1, 0, 'C');
		$fpdf .= Fpdf::Cell(143, 7, utf8_decode("Name"), 1, 0, 'C');
		$fpdf .= Fpdf::Cell(15, 7, utf8_decode("Adults"), 1, 0, 'C');
		$fpdf .= Fpdf::Cell(15, 7, utf8_decode("Kids"), 1, 1, 'C');
		$fpdf .= Fpdf::SetX(5);

		$fpdf .= Fpdf::Cell(95, 7, utf8_decode("Tour"), 1,0, 'C');
		$fpdf .= Fpdf::Cell(100, 7, utf8_decode("Terminal"), 1, 1, 'C');

		$fpdf .= Fpdf::SetX(5);
		$fpdf .= Fpdf::Cell(0, 7, utf8_decode("Message"), 1, 1, 'C');

		$fpdf .= Fpdf::Ln();
		$reservations = Reservation::whereBetween('date',[$date->toDateString(),$date->endOfMonth()->toDateString()])->get();
		foreach ($reservations AS $reservation)
		{$fpdf .= Fpdf::SetX(5);
		$fpdf .= Fpdf::SetFont('Arial', 'BI', 10);
		$fpdf .= Fpdf::Cell(22, 7, utf8_decode($reservation->date), 1, 0, 'C');
		$fpdf .= Fpdf::Cell(143, 7, utf8_decode($reservation->name), 1, 0, 'C');
		$fpdf .= Fpdf::Cell(15, 7, utf8_decode($reservation->adults), 1, 0, 'C');
		$fpdf .= Fpdf::Cell(15, 7, utf8_decode($reservation->kids), 1, 1, 'C');
		$fpdf .= Fpdf::SetX(5);
			$fpdf .= Fpdf::Cell(95, 7, utf8_decode($reservation->tour), 1, 0, 'C');
		$fpdf .= Fpdf::Cell(100, 7, utf8_decode($reservation->terminal), 1,1, 'C');
			$fpdf .= Fpdf::SetX(5);
		$fpdf .= Fpdf::Cell(0, 7, utf8_decode($reservation->message), 1, 1, 'C');

			$fpdf .= Fpdf::Ln();
}
		Fpdf::Output('I', 'Report reservations.pdf');
		exit;
    }
}
