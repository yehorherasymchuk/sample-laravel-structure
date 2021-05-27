<?php
/**
 * Description of FormCompaniesRequest.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Yehor Herasymchuk <yehor@dotsplatform.com>
 */

namespace App\Http\Controllers\Api\Companies\Request;


use App\Services\Companies\DTO\StoreCompanyDTO;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class StoreCompaniesRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'city_id' => [
                'required',
            ],
            'name' => [
                'required',
                'min:3',
                'max:255',
            ],
            'description' => [
                'nullable',
                'max:1000',
            ],
        ];
    }

    public function getDTO(): StoreCompanyDTO
    {
        return StoreCompanyDTO::fromArray(array_merge($this->validated(), [
            'request_id' => $this->generateRequestId(),
        ]));
    }

    private function generateRequestId(): string
    {
        return Str::uuid()->toString();
    }

}
