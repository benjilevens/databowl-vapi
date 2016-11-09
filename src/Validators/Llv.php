<?php
namespace Databowl\Vapi\Validators;

use Databowl\Vapi\Contracts\IsRequest;

class Llv implements IsRequest
{
    /**
     * @var string
     */
    protected $phone;

    /**
     * @return string
     */
    public function getService()
    {
        return 'validate';
    }

    /**
     * @return string
     */
    public function getType()
    {
        return 'llv';
    }

    /**
     * @return array
     */
    public function getParameters()
    {
        return [
           'phone' => $this->phone,
        ];
    }

    /**
     * @return LlvResult
     */
    public function getResultObject()
    {
        return new LlvResult;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }
}
