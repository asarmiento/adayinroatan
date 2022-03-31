<?php

namespace App\Exports;

use App\Models\Reservation;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ReportReservations implements FromCollection, WithHeadings, ShouldAutoSize
{

	/**
	 * @var array
	 */
	private $dates;

	public function __construct(array $dates)
	{

		$this->dates=$dates;

	}
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {$reports = Reservation::whereBetween('date',$this->dates)->get();
    $reports->map(function ($r){
    	if($r->status) {
		    $r->status='Accept';
	    }else{
    		$r->status='rejecting';
	    }

    	if($r->accept) {
		    $r->accept='Accept';
	    }else{
    		$r->accept='rejecting';
	    }
    });
        return  $reports;
    }

	/**
	 * @return array
	 */
	public function headings():array
	{
		return [
			"N°",
			"Name",
			"Phone",
			"Email",
			"Terminal",
			"Adults",
			"Kids",
			"Tour",
			"Date",
			"Message",
			"Status",
			"Accept",
		];// TODO: Implement headings() method.
	}
}
