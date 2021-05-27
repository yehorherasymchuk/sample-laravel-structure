<?php
/**
 * Description of StoreCitiesController.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Yehor Herasymchuk <yehor@dotsplatform.com>
 */

namespace App\Http\Controllers\Api\Cities;


use App\Models\City;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class StoreCitiesController extends BaseCitiesController
{

    /**
     * Update city
     * @group Cities
     *
     * @response {
     *   "id": 1,
     *   "country_code": "RU",
     *   "name": "Moscow",
     * }
     *
     * @param Request $request
     * @return JsonResponse
     * @throws \Illuminate\Auth\Access\AuthorizationException
     * @throws \Illuminate\Validation\ValidationException
     */
    public function __invoke(Request $request): JsonResponse
    {
        $this->validate($request, [
            'country_code' => 'required',
            'name' => 'required',
        ]);
        $city = City::create($request->all());

        return response()->json($city);
    }

}
