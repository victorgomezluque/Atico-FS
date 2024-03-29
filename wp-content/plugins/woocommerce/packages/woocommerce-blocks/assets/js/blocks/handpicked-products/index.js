/**
 * External dependencies
 */
import { __ } from '@wordpress/i18n';
import { registerBlockType } from '@wordpress/blocks';
import { getSetting } from '@woocommerce/settings';
import { Icon, stack } from '@wordpress/icons';

/**
 * Internal dependencies
 */
import './editor.scss';
import Block from './block';

registerBlockType( 'woocommerce/handpicked-products', {
	title: __( 'Hand-picked Products', 'woocommerce' ),
	icon: {
		src: (
			<Icon
				icon={ stack }
				className="wc-block-editor-components-block-icon"
			/>
		),
	},
	category: 'woocommerce',
	keywords: [
		__( 'Handpicked Products', 'woocommerce' ),
		__( 'WooCommerce', 'woocommerce' ),
	],
	description: __(
		'Display a selection of hand-picked products in a grid.',
		'woocommerce'
	),
	supports: {
		align: [ 'wide', 'full' ],
		html: false,
	},
	example: {
		attributes: {
			isPreview: true,
		},
	},
	attributes: {
		/**
		 * Alignment of product grid
		 */
		align: {
			type: 'string',
		},

		/**
		 * Number of columns.
		 */
		columns: {
			type: 'number',
			default: getSetting( 'default_columns', 3 ),
		},

		/**
		 * Toggle for edit mode in the block preview.
		 */
		editMode: {
			type: 'boolean',
			default: true,
		},

		/**
		 * Content visibility setting
		 */
		contentVisibility: {
			type: 'object',
			default: {
				image: true,
				title: true,
				price: true,
				rating: true,
				button: true,
			},
		},

		/**
		 * How to order the products: 'date', 'popularity', 'price_asc', 'price_desc' 'rating', 'title'.
		 */
		orderby: {
			type: 'string',
			default: 'date',
		},

		/**
		 * The list of product IDs to display
		 */
		products: {
			type: 'array',
			default: [],
		},

		/**
		 * How to align cart buttons.
		 */
		alignButtons: {
			type: 'boolean',
			default: false,
		},

		/**
		 * Are we previewing?
		 */
		isPreview: {
			type: 'boolean',
			default: false,
		},
	},

	/**
	 * Renders and manages the block.
	 *
	 * @param {Object} props Props to pass to block.
	 */
	edit( props ) {
		return <Block { ...props } />;
	},

	save() {
		return null;
	},
} );
