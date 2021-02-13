<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Maintenance;
use App\Models\MaintenanceHistory;
use App\Models\Survey;
use App\Models\SurveyHistory;
use App\Models\Troubleshoot;
use App\Models\TroubleshootHistory;
use App\Models\Mounting;
use App\Models\MountingHistory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade as PDF;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // dd(Auth::user()->role);
        return view('home');
    }

    public function submit_data(Request $request)
    {
        $maintenance = new Maintenance();
        $maintenance->months = $request->months;
        $maintenance->year = $request->year;
        $maintenance->date = $request->date;
        $maintenance->purpose_work = $request->purpose_work;
        $maintenance->visitor_name = $request->visitor_name;
        $maintenance->visitor_company = $request->visitor_company;
        $maintenance->visitor_id = $request->visitor_id;
        $maintenance->visitor_department = $request->visitor_department;
        $maintenance->visitor_phone = $request->visitor_phone;
        $maintenance->validity = $request->validity;
        $maintenance->time_in = $request->time_in;
        $maintenance->time_out = $request->time_out;
        $maintenance->lokasi = $request->lokasi;
        $maintenance->akses = $request->akses;
        $maintenance->kabel = $request->kabel;
        $maintenance->length = $request->length;
        $maintenance->qty = $request->qty;
        $maintenance->area_from = $request->area_from;
        $maintenance->area_to = $request->area_to;
        $maintenance->rack_from = $request->rack_from;
        $maintenance->rack_to = $request->rack_to;
        $maintenance->background_objective = $request->background_objective;
        $maintenance->description_work = $request->description_work;
        $maintenance->kegiatan = $request->kegiatan;
        $maintenance->perlatan = $request->perlatan;
        $maintenance->resiko_dampak = $request->resiko_dampak;
        $maintenance->jenis_rack = $request->jenis_rack;
        $save = $maintenance->save();
        $maintenance_id = $maintenance->maintenance_id;

        $maintenanceHistory = new maintenanceHistory();
        $maintenanceHistory->maintenance_id = $maintenance_id;
        $maintenanceHistory->created_by = Auth::user()->id;
        $maintenanceHistory->status = 'created';
        $save = $maintenanceHistory->save();

        if (!$save) {
            // return redirect('/maintenance')->with(['failed' => 'Failed to saving data']);
            return response()->json(['status' => 'FAILED']);
        } else {
            // return redirect('/home')->with(['success' => 'Saving data success']);
            return response()->json(['status' => 'SUCCESS']);
        }
    }

    public function submit_data_survey(Request $request)
    {

        $survey = new Survey();
        $survey->months = $request->months;
        $survey->year = $request->year;
        $survey->date = $request->date;
        $survey->purpose_work = $request->purpose_work;
        $survey->visitor_name = $request->visitor_name;
        $survey->visitor_company = $request->visitor_company;
        $survey->visitor_id = $request->visitor_id;
        $survey->visitor_department = $request->visitor_department;
        $survey->visitor_phone = $request->visitor_phone;
        $survey->validity = $request->validity;
        $survey->time_in = $request->time_in;
        $survey->time_out = $request->time_out;
        $survey->lokasi = $request->lokasi;
        $survey->akses = $request->akses;
        $survey->save();
        $survey_id = $survey->survey_id;

        $surveyHistory = new SurveyHistory();
        $surveyHistory->survey_id = $survey_id;
        $surveyHistory->created_by = Auth::user()->id;
        $surveyHistory->status = 'created';
        $save = $surveyHistory->save();

        if (!$save) {
            // return redirect('/survey')->with(['failed' => 'Failed to saving data']);
            return response()->json(['status' => 'FAILED']);
        } else {
            // return redirect('/home')->with(['success' => 'Saving data success']);
            return response()->json(['status' => 'SUCCESS']);
        }
    }

    public function submit_troubleshoot(Request $request)
    {
        $troubleshoot = new Troubleshoot();
        $troubleshoot->tanggal = $request->tanggal;
        $troubleshoot->bulan = $request->bulan;
        $troubleshoot->tahun = $request->tahun;
        $troubleshoot->purpose_work = $request->purpose_work;
        $troubleshoot->visitor_name = $request->visitor_name;
        $troubleshoot->visitor_company = $request->visitor_company;
        $troubleshoot->visitor_id = $request->visitor_id;
        $troubleshoot->visitor_department = $request->visitor_department;
        $troubleshoot->visitor_phone = $request->visitor_phone;
        $troubleshoot->validity = $request->validity;
        $troubleshoot->time_in = $request->time_in;
        $troubleshoot->time_out = $request->time_out;
        $troubleshoot->lokasi = $request->lokasi;
        $troubleshoot->akses = $request->akses;
        $troubleshoot->background_objective = $request->background_objective;
        $troubleshoot->description_work = $request->description_work;
        $troubleshoot->resiko_dampak = $request->resiko_dampak;
        $troubleshoot->perlatan = $request->perlatan;
        $troubleshoot->kegiatan = $request->kegiatan;
        $troubleshoot->kabel = $request->kabel;
        $troubleshoot->length = $request->length;
        $troubleshoot->qty = $request->qty;
        $troubleshoot->area_from = $request->area_from;
        $troubleshoot->area_to = $request->area_to;
        $troubleshoot->rack_from = $request->rack_from;
        $troubleshoot->rack_to = $request->rack_to;
        $troubleshoot->jenis_rack = $request->jenis_rack;
        $troubleshoot->io = $request->io;
        $troubleshoot->merk = $request->merk;
        $troubleshoot->serial = $request->serial;
        $troubleshoot->jumlah = $request->jumlah;
        $troubleshoot->remarks = $request->remarks;
        $save = $troubleshoot->save();
        $troubleshoot_id = $troubleshoot->troubleshoot_id;

        $troubleshootHistory = new troubleshootHistory();
        $troubleshootHistory->troubleshoot_id = $troubleshoot_id;
        $troubleshootHistory->created_by = Auth::user()->id;
        $troubleshootHistory->status = 'created';

        $save = $troubleshootHistory->save();
        if (!$save) {
            return response()->json(['status' => 'FAILED']);
            // return redirect('/maintenance')->with(['failed' => 'Failed to saving data']);
        } else {
            return response()->json(['status' => 'SUCCESS']);
            // return redirect('/home')->with(['success' => 'Saving data success']);
        }
    }

    public function submit_mounting(Request $request)
    {
        $mounting = new Mounting();
        $mounting->tanggal = $request->tanggal;
        $mounting->bulan = $request->bulan;
        $mounting->tahun = $request->tahun;
        $mounting->purpose_work = $request->purpose_work;
        $mounting->visitor_name = $request->visitor_name;
        $mounting->visitor_company = $request->visitor_company;
        $mounting->visitor_id = $request->visitor_id;
        $mounting->visitor_department = $request->visitor_department;
        $mounting->visitor_phone = $request->visitor_phone;
        $mounting->validity = $request->validity;
        $mounting->time_in = $request->time_in;
        $mounting->time_out = $request->time_out;
        $mounting->lokasi = $request->lokasi;
        $mounting->akses = $request->akses;
        $mounting->background_objective = $request->background_objective;
        $mounting->description_work = $request->description_work;
        $mounting->resiko_dampak = $request->resiko_dampak;
        $mounting->peralatan = $request->peralatan;
        $mounting->kegiatan = $request->kegiatan;
        $mounting->kabel = $request->kabel;
        $mounting->length = $request->length;
        $mounting->qty = $request->qty;
        $mounting->area_from = $request->area_from;
        $mounting->area_to = $request->area_to;
        $mounting->jenis_rack = $request->jenis_rack;
        $mounting->rack_from = $request->rack_from;
        $mounting->rack_to = $request->rack_to;
        $mounting->io = $request->io;
        $mounting->merk = $request->merk;
        $mounting->serial = $request->serial;
        $mounting->jumlah = $request->jumlah;
        $mounting->remarks = $request->remarks;
        $save = $mounting->save();
        $mounting_id = $mounting->mounting_id;

        $mountingHistory = new MountingHistory();
        $mountingHistory->mounting_id = $mounting_id;
        $mountingHistory->created_by = Auth::user()->id;
        $mountingHistory->status = 'created';

        if (!$save) {
            return response()->json(['status' => 'FAILED']);
            // return redirect('/mount')->with(['failed' => 'Failed to saving data']);
        } else {
            return response()->json(['status' => 'SUCCESS']);
            // return redirect('/home')->with(['success' => 'Saving data success']);
        }
    }

    public function surveyview()
    {
        // $survey = Survey::all();
        $survey = DB::table('survey');
        return view('hasil_survey', ['survey' => $survey]);
    }

    public function cetak_survey_pdf()
    {
        $survey = Survey::all();
        $pdf = PDF::loadview('survey_pdf', ['survey' => $survey]);
        // return $pdf->download('laporan-survey-pdf');
        return $pdf->stream();
    }

    public function maintenance_view()
    {
        // $maintenance = Maintenance::all();
        $maintenance = DB::table('maintenance');
        return view('hasil_maintenance', ['maintenance' => $maintenance]);
    }

    public function cetak_maintenance_pdf()
    {
        $maintenance = Maintenance::all();

        $pdf = PDF::loadview('maintenance_pdf', ['maintenance' => $maintenance]);
        // return $pdf->download('laporan-pegawai-pdf');
        return $pdf->stream();
    }

    public function troubleshoot_view()
    {
        // $troubleshoot = Troubleshoot::all();
        $troubleshoot = DB::table('troubleshoot');
        return view('hasil_troubleshoot', ['troubleshoot' => $troubleshoot]);
    }

    public function cetak_troubleshoot_pdf()
    {
        $troubleshoot = Troubleshoot::all();

        $pdf = PDF::loadview('troubleshoot_pdf', ['troubleshoot' => $troubleshoot]);
        // return $pdf->download('laporan-pegawai-pdf');
        return $pdf->stream();
    }

    public function mounting_view()
    {
        // $mounting = Mounting::all();
        $mounting = DB::table('mounting');

        return view('hasil_mount', ['mounting' => $mounting]);
    }

    public function cetak_mounting_pdf()
    {
        $mounting = Mounting::all();

        $pdf = PDF::loadview('mounting_pdf', ['mounting' => $mounting]);
        // return $pdf->download('laporan-pegawai-pdf');
        return $pdf->stream();
    }
}
