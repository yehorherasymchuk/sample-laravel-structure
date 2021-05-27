<?php
/**
 * Description of StoreCompaniesController.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Yehor Herasymchuk <yehor@dotsplatform.com>
 */

namespace App\Http\Controllers\Api\Companies;


use App\Http\Controllers\Api\Companies\Request\StoreCompaniesRequest;
use Illuminate\Http\JsonResponse;

class StoreCompaniesController extends BaseCompaniesController
{

    /**
     * Store Company Data Companies
     * @group Companies
     *
     * @param StoreCompaniesRequest $request
     * @return JsonResponse
     */
    public function __invoke(StoreCompaniesRequest $request): JsonResponse
    {
        $dto = $request->getDTO();
        $this->getCompaniesService()->storeCompany($dto);
        return response()->json($dto);
    }

}
