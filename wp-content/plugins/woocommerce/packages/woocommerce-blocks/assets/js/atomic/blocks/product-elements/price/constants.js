/**
 * External dependencies
 */
import { __ } from '@wordpress/i18n';
import { currencyDollar, Icon } from '@wordpress/icons';

export const BLOCK_TITLE = __(
	'Product Price',
	'woocommerce'
);
export const BLOCK_ICON = (
	<Icon
		icon={ currencyDollar }
		className="wc-block-editor-components-block-icon"
	/>
);
export const BLOCK_DESCRIPTION = __(
	'Display the price of a product.',
	'woocommerce'
);
