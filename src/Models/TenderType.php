<?php

declare(strict_types=1);

namespace Square\Models;

/**
 * Indicates a tender's type.
 */
class TenderType
{
    /**
     * A credit card.
     */
    public const CARD = 'CARD';

    /**
     * Cash.
     */
    public const CASH = 'CASH';

    /**
     * A credit card processed with a card processor other than Square.
     *
     * This value applies only to merchants in countries where Square does not
     * yet provide card processing.
     */
    public const THIRD_PARTY_CARD = 'THIRD_PARTY_CARD';

    /**
     * A Square gift card.
     */
    public const SQUARE_GIFT_CARD = 'SQUARE_GIFT_CARD';

    /**
     * This tender represents the register being opened for a "no sale" event.
     */
    public const NO_SALE = 'NO_SALE';

    /**
     * An ACH payment.
     */
    public const BANK_TRANSFER = 'BANK_TRANSFER';

    /**
     * A form of tender that does not match any other value.
     */
    public const OTHER = 'OTHER';
}
