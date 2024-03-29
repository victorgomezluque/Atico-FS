<?php
/**
 * Class Payment_Method
 *
 * @package WooCommerce\Payments
 */

namespace WCPay\Constants;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

use MyCLabs\Enum\Enum;

/**
 * Possible enum values for the type of the PaymentMethod.
 * https://stripe.com/docs/api/payment_methods/object#payment_method_object-type
 *
 * @psalm-immutable
 */
class Payment_Method extends Enum {
	const CARD            = 'card';
	const SEPA            = 'sepa_debit';
	const CARD_PRESENT    = 'card_present';
	const US_BANK_ACCOUNT = 'us_bank_account';
	const BECS            = 'au_becs_debit';
	const INTERAC_PRESENT = 'interac_present';

	const IPP_ALLOWED_PAYMENT_METHODS = [
		self::CARD_PRESENT,
		self::INTERAC_PRESENT,
	];
}
