/**
 * Import Assets
 */
import '../scss/editor.scss';

/**
 * Block Dependencies
 */
import icons from './icons';
import classnames from 'classnames';
import Select from 'react-select';

/**
 * Internal Block Libraries
 */
const { __ }                = wp.i18n;
const { registerBlockType } = wp.blocks;
const {
	InnerBlocks,
	RichText,
	AlignmentToolbar,
	BlockControls,
	BlockAlignmentToolbar,
	InspectorControls,
} = wp.editor;
const {
	Toolbar,
	Button,
	Tooltip,
	PanelBody,
	PanelRow,
	FormToggle,
} = wp.components;

/**
 * Register secure block
 */
export default registerBlockType(
	'wp-fusion/secure-block-inner-secure',
	{
		title:       __( 'Inner', 'secure-blocks-for-gutenberg' ),
		category:   'layout',
		attributes: {},
		parent:     [ 'wp-fusion/secure-block' ],
		edit: ( props => {
			const { attributes: className, setAttributes } = props;
			return [
				<div className={ classnames( props.className ) }>
					<InnerBlocks
						templateLock={ false }
						/>
				</div>
			];
		} ),
		save: props => {
			return (
				<div>
					<InnerBlocks.Content />
				</div>
			);
		},
	},
);
