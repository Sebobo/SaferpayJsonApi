<?php

namespace Ticketpark\SaferpayJson\Request;

use JMS\Serializer\Annotation\SerializedName;

class Payment
{
    /**
     * @var Ticketpark\SaferpayJson\Request\Amount
     * @SerializedName("Amount")
     */
    protected $amount;

    /**
     * @var string
     * @SerializedName("OrderId")
     */
    protected $orderId;

    /**
     * @var string
     * @SerializedName("Description")
     */
    protected $description;

    /**
     * @var string
     * @SerializedName("PayerNote")
     */
    protected $payerNote;

    /**
     * @return Ticketpark\SaferpayJson\Request\Amount
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param Ticketpark\SaferpayJson\Request\Amount $amount
     * @return Payment
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * @return string
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @param string $orderId
     * @return Payment
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return Payment
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string
     */
    public function getPayerNote()
    {
        return $this->payerNote;
    }

    /**
     * @param string $payerNote
     * @return Payment
     */
    public function setPayerNote($payerNote)
    {
        $this->payerNote = $payerNote;

        return $this;
    }


}