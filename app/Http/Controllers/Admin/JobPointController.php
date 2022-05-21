<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Job;
use App\Models\JobPoint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JobPointController extends Controller
{
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
            $jobpoint = JobPoint::where('taskdone', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $jobpoint = JobPoint::latest()->paginate($perPage);
        }

        return view('admin.job-point.index', compact('jobpoint'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $options = $this->getJobDropdownOptions();

        return view('admin.job-point.create', compact('options'));
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

        JobPoint::create($requestData);

        return redirect('admin/job-point')->with('flash_message', 'JobPoint added!');
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

        $jobpoint = JobPoint::findOrFail($id);

        return view('admin.job-point.show', compact('jobpoint'));
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
        $options = $this->getJobDropdownOptions();

        $jobpoint = JobPoint::findOrFail($id);

        $current_job = $jobpoint->job()->first();
        return view('admin.job-point.edit', compact('jobpoint','options','current_job'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $options = $this->getJobDropdownOptions();
        $requestData = $request->all();

        $jobpoint = JobPoint::findOrFail($id);
        $jobpoint->update($requestData);

        return redirect('admin/job-point')->with('flash_message', 'JobPoint updated!');
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
        JobPoint::destroy($id);

        return redirect('admin/job-point')->with('flash_message', 'JobPoint deleted!');
    }

    /**
     * @return mixed[]|string[]
     */
    public function getJobDropdownOptions(): array
    {
        return DB::table('jobs')
                ->select(DB::raw("concat (companyname,'-',positionname) displayname, id"))
                ->pluck('displayname', 'id')->toArray() + array('' => 'Select Instructor');
    }
}
