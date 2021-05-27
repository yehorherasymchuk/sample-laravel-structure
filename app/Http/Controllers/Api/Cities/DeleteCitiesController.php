<?php
/**
 * Description of DeleteCitiesController.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Yehor Herasymchuk <yehor@dotsplatform.com>
 */

namespace App\Http\Controllers\Api\Cities;


use App\Models\City;
use App\Models\User;
use Illuminate\Http\JsonResponse;

class DeleteCitiesController extends BaseCitiesController
{

    public function __invoke(): JsonResponse
    {
        $this->authorizeDeletion();
        return response()->json();
    }

    private function authorizeDeletion(City $city, User $user): void
    {
        if (! $user->isAdmin()) {
            abort(403);
        }
        if ($user->id !== $city->created_by_user_id) {
            abort(403);
        }
    }
}
