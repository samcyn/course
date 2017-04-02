<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Applicant;
use Illuminate\Http\Request;
use Session;

class ApplicantsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            //add search params here
            $applicants = Applicant::with('course')->paginate($perPage);
        } else {
            $applicants = Applicant::with('course')->paginate($perPage);
        }

        return view('admin.applicants.index', compact('applicants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.applicants.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        Applicant::create($requestData);

        Session::flash('flash_message', 'Applicant added!');

        return redirect('admin/applicants');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $applicant = Applicant::findOrFail($id);

        return view('admin.applicants.show', compact('applicant'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $applicant = Applicant::findOrFail($id);

        $payment_statuses = ['pending', 'success'];

        return view('admin.applicants.edit', compact('applicant', 'payment_statuses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        
        $requestData = $request->all();
        
        $applicant = Applicant::findOrFail($id);
        $applicant->update($requestData);

        Session::flash('flash_message', 'Applicant updated!');

        return redirect('admin/applicants');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Applicant::destroy($id);

        Session::flash('flash_message', 'Applicant deleted!');

        return redirect('admin/applicants');
    }

}
