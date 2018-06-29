<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Response\RateResponse;

/**
 * The service section.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class Service
{
    /**
     * Total net section.
     *
     * @var TotalNet
     */
    private $TotalNet;

    /**
     * Charges section. Could be null!
     *
     * @var null|Charges
     */
    private $Charges;

    /**
     * This is the estimated date/time the shipment will be delivered by for the rated shipment and product listed.
     *
     * Both the date and time portions of the string are expected to be used. The date should not be a past date
     * or a date more than 10 days in the future. The time is the local time of the shipment based on the shipper's
     * time zone. The date component must be in the format: YYYY-MM-DD; the time component must be in the
     * format: HH:MM:SS using a 24 hour clock. The date and time parts are separated by the letter T
     * (e.g. 2006-06-26T17:00:00).
     *
     * @var \DateTime 
     */
    private $DeliveryTime;

    /**
     * This is the cutoff time for the service offered in the response. This represents the latest time
     * (local to origin) which the shipment can be tendered to the courier for that service on that day.
     *
     * The time is the local time of the shipment based on the shipper's time zone. The date component must be
     * in the format:YYYY-MM-DD; the time component must be in the format: HH:MM:SS using a 24 hour clock. The
     * date and time parts are separated by the letter T (e.g. 2006-06-26T17:00:00).
     *
     * @var \DateTime 
     */
    private $CutoffTime;

    /**
     * This indicator demonstrates whether the pickup date is the next business day (Y) or the requested
     * business day (N). If the requested ship date is beyond the cutoff for that business day (or it is
     * requested on weekend), the indicator will be set to Y.  If it is on the same business day as
     * requested, the value is set to N.
     *
     * @var null|string
     */
    private $NextBusinessDayInd;

    /**
     * This is the code for the product for which the delivery is feasible respecting the input data from the request.
     *
     * @var string
     */
    private $type;

    /**
     * The rate type of the charges for this package. Possible returned rate types are: PAYOR_ACCOUNT, RATED_ACCOUNT.
     *
     * @var null|string
     */
    private $account;

    /**
     * Returns the total net section.
     *
     * @return TotalNet
     */
    public function getTotalNet(): TotalNet
    {
        return $this->TotalNet;
    }

    /**
     * Returns the charges section.
     *
     * @return null|Charges
     */
    public function getCharges(): ?Charges
    {
        return $this->Charges;
    }

    /**
     * Returns the delivery time.
     *
     * @return null|false|\DateTime
     */
    public function getDeliveryTime(): mixed
    {
        if ($this->DeliveryTime === null) {
            return null;
        } else {
            try {
                return new \DateTime($this->DeliveryTime);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * Returns the cutoff time.
     *
     * @return null|false|\DateTime
     */
    public function getCutoffTime(): mixed
    {
        if ($this->CutoffTime === null) {
            return null;
        } else {
            try {
                return new \DateTime($this->CutoffTime);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * Returns the next business day indicator.
     *
     * @return null|string
     */
    public function getNextBusinessDayInd(): ?string
    {
        return $this->NextBusinessDayInd;
    }

    /**
     * Returns the type.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Returns the account.
     *
     * @return null|string
     */
    public function getAccount(): ?string
    {
        return $this->account;
    }
}
