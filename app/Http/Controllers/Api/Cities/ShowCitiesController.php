<?php
/**
 * Description of ShowCitiesController.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Yehor Herasymchuk <yehor@dotsplatform.com>
 */

namespace App\Http\Controllers\Api\Cities;


use Illuminate\Http\JsonResponse;

class ShowCitiesController extends BaseCitiesController
{

    /**
     * Show city Data
     * @group Cities
     *
     * @response {
     *   "id": 1,
     *   "country_code": "RU",
     *   "name": "Moscow",
     * }
     *
     * @return JsonResponse
     */
    public function __invoke(string $id): JsonResponse
    {

        return response()->json();
    }
}
