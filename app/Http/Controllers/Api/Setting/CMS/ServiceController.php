<?php

namespace App\Http\Controllers\Api\Setting\CMS;
use App\Models\Cms\CmsService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Traits\Api\ApiResponseTrait;
use App\Http\Resources\CMS\ServiceResources;

class ServiceController extends Controller {
    use ApiResponseTrait;

    public function index() {
        try {
            return $this->successResponse(ServiceResources::collection(CmsService::active()), 'data Return Successfully');
        } catch (\Exception $exception) {
            return $this->errorResponse('Something went wrong, please try again later');
        }
    }
}