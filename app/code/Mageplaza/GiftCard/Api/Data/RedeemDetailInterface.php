<?php
/**
 * Mageplaza
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Mageplaza.com license that is
 * available through the world-wide-web at this URL:
 * https://www.mageplaza.com/LICENSE.txt
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category    Mageplaza
 * @package     Mageplaza_GiftCard
 * @copyright   Copyright (c) Mageplaza (https://www.mageplaza.com/)
 * @license     https://www.mageplaza.com/LICENSE.txt
 */

namespace Mageplaza\GiftCard\Api\Data;

/**
 * Interface RedeemDetailInterface
 * @api
 */
interface RedeemDetailInterface
{
    /**
     * Constants defined for keys of array, makes typos less likely
     */
    const CUSTOMER_BALANCE = 'customer_balance';

    /**
     * @return string
     */
    public function getCustomerBalance();

    /**
     * @param string $value
     *
     * @return $this
     */
    public function setCustomerBalance($value);
}
