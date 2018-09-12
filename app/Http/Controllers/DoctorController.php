<?php

namespace App\Http\Controllers;

use App\Doctor;
use Illuminate\Http\Request;

use App\Http\Resources\Doctor as DoctorResource;
use App\Http\Resources\Certificate as CertificateResource;


class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctor = Doctor::paginate(15);
        // Return collection of articles as a resource
        return DoctorResource::collection($doctor);
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
        $doctor = new Doctor();
        $doctor->fill($request->only([
            'firstname','lastname', 'email', 'phone','clinicName','city','gender','certificate_file','age'
        ]));
        $doctor->save();
/*
        $certificate = new \App\Certificate();
        $certificate->fill($request->only([
            'degree','graduationYear', 'universityName',
        ]));
        $certificate->doctor_id = $doctor->id;
        $doctor->certificate()->save($certificate);*/

        return new DoctorResource($doctor);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show(Doctor $doctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit(Doctor $doctor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doctor $doctor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctor $doctor)
    {
        //
    }
}
