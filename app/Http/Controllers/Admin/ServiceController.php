<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceRequest;
use App\Models\Service;
use App\Services\ServiceService;
use Exception;
use Illuminate\Http\Response;

class ServiceController extends Controller {
    private $service;

    public function __construct(ServiceService $service) {
        $this->service = $service;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        $serviceList = $this->service->getServiceList()->get();
        return view('admin.service.index', compact('serviceList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        $categoryList = $this->service->getCategoryList();
        return view('admin.service.create', compact('categoryList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ServiceRequest $request
     * @param ServiceService $service
     * @return Response
     */
    public function store(ServiceRequest $request, ServiceService $service) {
        $service->store($request);
        return back()->with('success', trans('Saved successfully'));
    }

    /**
     * Display the specified resource.
     *
     * @param Service $service
     * @return void
     */
    public function show(Service $service) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Service $service
     * @return Response
     */
    public function edit(Service $service) {
        $categoryList = $this->service->getCategoryList();
        $seo = $service->seo;
        return view('admin.service.edit', compact('service', 'categoryList', 'seo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ServiceRequest $request
     * @param Service $service
     * @param ServiceService $service
     * @return Response
     */
    public function update(ServiceRequest $request, Service $service, ServiceService $serviceService) {
        $serviceService->update($service, $request);
        return redirect()->route('service.index')->with('success', trans('Updated successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Service $service
     * @return Response
     * @throws Exception
     */
    public function destroy(Service $service) {
        $service->delete();
        return back()->with('success', trans('Deleted successfully'));
    }
}
