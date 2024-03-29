/**
 * External dependencies
 */
import { __ } from '@wordpress/i18n';
import { createBlock, registerBlockType } from '@wordpress/blocks';
import { useBlockProps } from '@wordpress/block-editor';
import { isFeaturePluginBuild } from '@woocommerce/block-settings';
import { Icon, category } from '@wordpress/icons';
import classNames from 'classnames';

/**
 * Internal dependencies
 */
import edit from './edit.js';

registerBlockType( 'woocommerce/attribute-filter', {
	apiVersion: 2,
	title: __( 'Filter Products by Attribute', 'woocommerce' ),
	icon: {
		src: (
			<Icon
				icon={ category }
				className="wc-block-editor-components-block-icon"
			/>
		),
	},
	category: 'woocommerce',
	keywords: [ __( 'WooCommerce', 'woocommerce' ) ],
	description: __(
		'Allow customers to filter the grid by product attribute, such as color. Works in combination with the All Products block.',
		'woocommerce'
	),
	supports: {
		html: false,
		color: {
			text: true,
			background: false,
		},
		...( isFeaturePluginBuild() && {
			__experimentalBorder: {
				radius: true,
				color: true,
				width: false,
			},
		} ),
	},
	example: {
		attributes: {
			isPreview: true,
		},
	},
	attributes: {
		attributeId: {
			type: 'number',
			default: 0,
		},
		showCounts: {
			type: 'boolean',
			default: true,
		},
		queryType: {
			type: 'string',
			default: 'or',
		},
		heading: {
			type: 'string',
			default: __(
				'Filter by attribute',
				'woocommerce'
			),
		},
		headingLevel: {
			type: 'number',
			default: 3,
		},
		displayStyle: {
			type: 'string',
			default: 'list',
		},
		showFilterButton: {
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
	transforms: {
		from: [
			{
				type: 'block',
				blocks: [ 'core/legacy-widget' ],
				// We can't transform if raw instance isn't shown in the REST API.
				isMatch: ( { idBase, instance } ) =>
					idBase === 'woocommerce_layered_nav' && !! instance?.raw,
				transform: ( { instance } ) =>
					createBlock( 'woocommerce/attribute-filter', {
						attributeId: 0,
						showCounts: true,
						queryType: instance?.raw?.query_type || 'or',
						heading:
							instance?.raw?.title ||
							__(
								'Filter by attribute',
								'woocommerce'
							),
						headingLevel: 3,
						displayStyle: instance?.raw?.display_type || 'list',
						showFilterButton: false,
						isPreview: false,
					} ),
			},
		],
	},
	edit,
	// Save the props to post content.
	save( { attributes } ) {
		const {
			className,
			showCounts,
			queryType,
			attributeId,
			heading,
			headingLevel,
			displayStyle,
			showFilterButton,
		} = attributes;
		const data = {
			'data-attribute-id': attributeId,
			'data-show-counts': showCounts,
			'data-query-type': queryType,
			'data-heading': heading,
			'data-heading-level': headingLevel,
		};
		if ( displayStyle !== 'list' ) {
			data[ 'data-display-style' ] = displayStyle;
		}
		if ( showFilterButton ) {
			data[ 'data-show-filter-button' ] = showFilterButton;
		}
		return (
			<div
				{ ...useBlockProps.save( {
					className: classNames( 'is-loading', className ),
				} ) }
				{ ...data }
			>
				<span
					aria-hidden
					className="wc-block-product-attribute-filter__placeholder"
				/>
			</div>
		);
	},
} );
