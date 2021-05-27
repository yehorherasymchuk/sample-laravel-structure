<?php
/**
 * Description of ListCitiesController.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Yehor Herasymchuk <yehor@dotsplatform.com>
 */

namespace App\Http\Controllers\Api\Cities;


use App\Models\City;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ListCitiesController extends BaseCitiesController
{

    /**
     * Get all cities Data
     * @group Cities
     *
     * @response [{
     *   "id": 1,
     *   "country_code": "RU",
     *   "name": "Moscow",
     * }]
     *
     * @param Request $request
     * @return JsonResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function __invoke(Request $request): JsonResponse
    {
        $countryCode = $request->get('country_code', null);
        $limit = $request->get('limit', self::MODELS_PER_PAGE);
        $offset = $request->get('offset', 0);

        $this->validate($request, [
            'limit' => 'max:' . self::MAX_MODELS_PER_PAGE,
        ]);

        $qb = City::query();
        if ($countryCode) {
            $qb->where('country_code', $countryCode);
        }

        $qb->take($limit);
        $qb->skip($offset);

        return response()->json($qb->get());
    }

}
