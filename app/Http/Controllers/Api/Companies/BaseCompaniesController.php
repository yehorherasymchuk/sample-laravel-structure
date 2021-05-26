<?php
/**
 * Description of BaseCompaniesController.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Yehor Herasymchuk <yehor@dotsplatform.com>
 */

namespace App\Http\Controllers\Api\Companies;


use App\Http\Controllers\Controller;
use App\Services\Companies\CompaniesService;

class BaseCompaniesController extends Controller
{

    protected function getCompaniesService(): CompaniesService
    {
        return app(CompaniesService::class);
    }

}
