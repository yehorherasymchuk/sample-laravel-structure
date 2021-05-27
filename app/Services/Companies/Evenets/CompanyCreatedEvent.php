<?php
/**
 * Description of CompanyCreatedEvent.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Yehor Herasymchuk <yehor@dotsplatform.com>
 */

namespace App\Services\Companies\Evenets;


class CompanyCreatedEvent
{

    private int $id;
    private string $requestId;

    public function __construct(
        int $id,
        string $requestId
    )
    {
        $this->id = $id;
        $this->requestId = $requestId;
    }

}
