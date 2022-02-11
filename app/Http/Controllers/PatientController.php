<?php

namespace App\Http\Controllers;

use App\Models\Nose;
use App\Models\OralCavity;
use App\Models\Patient;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function home(Request $request)
    {
        if ($request->id !== null)
        {
            $attributes = $request->validate([
                'id' => ['regex:/^(\d{3,6}|\d{6}-\d{0,5})$/']
            ]);
            $patients = Patient::where('id', 'like', $attributes['id'] . '%')->take(10)->get();
            return view('patients.home', ['patients' => $patients]);
        }
        return view('patients.home');
    }

    public function all()
    {
        $patients = Patient::all()->sortByDesc('created_at');
        return view('patients.all', ['patients' => $patients]);
    }

    public function softDelete($id)
    {
        $patient = Patient::find($id);
        $patient->delete();
        return redirect('/all-patients');
    }

    public function forceDelete($id)
    {
        $patient = Patient::find($id);
        $patient->forceDelete();
        return redirect('/all-patients');
    }

    public function createFirst()
    {
        return view('patients.createFirst');
    }

    public function storeFirst(Request $request)
    {
        $attributes = $request->validate([
            'date' => ['required'],
            'id' => ['regex:/^(\d{6}-\d{5})$/', 'unique:patients,id'],
            'name' => ['required', 'max:50'],
            'surname' => ['required', 'max:50'],
            'complaintsAndHistory' => ['required', 'max:2000'],
            'comorbidities' => ['required', 'max:200'],
            'drugIntolerance' => ['required', 'max:300'],
            'noseForm' => ['required', 'in:straight,deformed']
        ]);
        session($attributes);
        return redirect('/create2');
    }

    public function createSecond()
    {
        if (session('date') !== null) return view('patients.createSecond');
        return redirect('/');
    }

    public function storeSecond(Request $request)
    {
        $attributes = $request->validate([
            'mucousMembrane1' => ['required', 'in:pink,hyperemic,cyanotic,pale'],
            'mucousMembrane2' => ['required', 'in:swollen,atrophic,hypertrophic'],
            'passages.*' => ['required', 'in:clear,narrowed,adhesion,molding'],
            'phlegm.*' => ['nullable', 'in:serous,mucous,purulent,bloody'],
            'septum' => ['required', 'in:straight,deviated,perforated'],
            'breathing' => ['required', 'in:clear,labored'],
            'throat1.*' => ['required', 'in:pink,hyperemic,cyanotic,pale'],
            'throat2.*' => ['required', 'in:swollen,atrophic,hypertrophic'],
            'tonsils' => ['required', 'in:normal_size,increased'],
            'tonsilStones' => ['required', 'in:0,1']
        ]);
        $attributes['passages'] = implode(',', $attributes['passages']);
        $attributes['phlegm'] = implode(',', $attributes['phlegm']);
        $nose = Nose::create($attributes);
        $attributes['throat1'] = implode(',', $attributes['throat1']);
        $attributes['throat2'] = implode(',', $attributes['throat2']);
        $attributes['tonsil_stones'] = $attributes['tonsilStones'];
        $oralCavity = OralCavity::create($attributes);
        $attributes['id'] = session('id');
        $attributes['date'] = session('date');
        $attributes['name'] = session('name');
        $attributes['surname'] = session('surname');
        $attributes['complaints_and_history'] = session('complaintsAndHistory');
        $attributes['comorbidities'] = session('comorbidities');
        $attributes['drug_intolerance_and_allergies'] = session('drugIntolerance');
        $patient = Patient::make($attributes);
        $patient->nose_id = $nose->id;
        $patient->oral_cavity_id = $oralCavity->id;
        $patient->save();
        session()->flush();
        return redirect('/');
    }
}
