<?php
/**
 * Description of CompanyFormDTO.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Yehor Herasymchuk <yehor@dotsplatform.com>
 */

namespace App\Services\Companies\DTO;


use Illuminate\Contracts\Support\Arrayable;

class StoreCompanyDTO implements Arrayable
{

    private int $city_id;
    private string $name;
    private string $description;
    private string $request_id;

    private function __construct(
        int $city_id,
        string $name,
        string $description,
        string $request_id,
    ) {
        $this->city_id = $city_id;
        $this->name = $name;
        $this->description = $description;
        $this->request_id = $request_id;
    }

    public static function fromArray(array $data): self
    {
        return new static(
            $data['city_id'],
            $data['name'],
            $data['description'],
            $data['request_id'],
        );
    }

    public function toArray(): array
    {
        return [
            'city_id' => $this->getCityId(),
            'name' => $this->getName(),
            'description' => $this->getDescription(),
            'request_id' => $this->getRequestId(),
        ];
    }

    /**
     * @return int
     */
    public function getCityId(): int
    {
        return $this->city_id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getRequestId(): string
    {
        return $this->request_id;
    }

}
