<?php

namespace App\Services;

use App\Http\Requests\ServiceRequest;
use App\Models\MasterCategory;
use App\Models\Service;
use App\Models\Seo;
use Illuminate\Support\Facades\DB;

class ServiceService
{
    /**
     * @var ImageService
     */
    private $imageService;

    /**
     * @var SeoService
     */
    private $seoService;

    public function __construct(ImageService $imageService, SeoService $seoService)
    {
        $this->imageService = $imageService;
        $this->seoService = $seoService;
    }

    public function getServiceList()
    {
        return Service::where('language', 'vi')->orderBy('order_display', 'asc');
    }

    public function getCategoryList()
    {
        return MasterCategory::whereName('services')->first()->categoryList;
    }

    /**
     * Store service
     *
     * @param ServiceRequest $request
     */
    public function store(ServiceRequest $request)
    {
        $service = Service::create($request->except(array_merge(Seo::META_LIST, ['image', 'content'])));
        $this->save($service, $request);
    }

    /**
     * Update service
     *
     * @param Service $service
     * @param ServiceRequest $request
     */
    public function update(Service $service, ServiceRequest $request)
    {
        $service->update($request->except(array_merge(Seo::META_LIST, ['image', 'content'])));
        $this->save($service, $request);
    }

    /**
     * Save Service
     *
     * @param Service $service
     * @param ServiceRequest $request
     */
    private function save(Service $service, ServiceRequest $request)
    {
        if ($request->file) {
            $service->image = $this->imageService->store($request->file, config('constants.folder.service') . $service->id);
        }
        $service->content = $request['content'];
        $service->save();
        $service->category()->sync($request->category_id);
        $this->seoService->save($service, $request);
        DB::query('UPDATE services SET order_display = order_display + 1 WHERE order_display > ?', $service->order_display);
    }

}
