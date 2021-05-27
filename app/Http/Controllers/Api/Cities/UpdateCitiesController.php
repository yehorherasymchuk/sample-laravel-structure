<?php
/**
 * Description of UpdateCitiesController.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Yehor Herasymchuk <yehor@dotsplatform.com>
 */

namespace App\Http\Controllers\Api\Cities;


use App\Models\City;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UpdateCitiesController extends BaseCitiesController
{

    /**
     * Update City Data
     * @group Cities
     *
     * @response {
     *   "id": 1,
     *   "country_code": "RU",
     *   "name": "Moscow",
     * }
     * @param Request $request
     * @param City $city
     * @return JsonResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function __invoke(Request $request, City $city): JsonResponse
    {
//        $this->authorize(Permissions::UPDATE_CITY, $city);

        $this->validate($request, [
            'country_code' => 'required',
            'name' => 'required',
        ]);
        $city = $city->update($request->all());

        return response()->json($city);
    }
}
