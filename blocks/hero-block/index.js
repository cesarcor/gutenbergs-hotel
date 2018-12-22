// import './styles/style.scss';
// import './styles/editor.scss';

// import Inspector from './components/inspector';

const { Component } = wp.element;

const { registerBlockType } = wp.blocks;

const { withSelect } = wp.data;

const { __ } = wp.i18n;

const {
	AlignmentToolbar,
	URLInput,
	BlockControls,
	BlockAlignmentToolbar,
	MediaUpload,
	RichText,
} = wp.editor;

const {
	Button,
	withFallbackStyles,
	IconButton,
	Dashicon,
	Toolbar,
} = wp.components;

const heroBlockAttributes = {

  heading: {
      type: 'string',
      source: 'attribute',
      selector: 'h1'
  },

  bodyText: {
    type: 'string',
		source: 'text'
  },

  button: {
    type: 'string',
		source: 'text'
  },

  backgroundImageURL: {
    type: 'string',
    source: 'attribute',
    attribute: 'src',
    selector: 'img'
  },

  backgroundImageID: {
    type: 'number'
  }

}

registerBlockType( 'gutenbergs-hotel/hero-block', {
    title: 'Hero Block',
    description: __( 'Add a Hero Section', 'gutenbergs-hotel' ),
    icon: 'format-gallery',
    category: 'gh-blocks',

    attributes: heroBlockAttributes,

    edit: function( attributes, className ) {

        const {
          heading,
          backgroundImageURL,
          bodyText,
          button,
          backgroundImageID
        } = props.attributes;

        return (

        );
    },

    save: function( props ) {

        return (
        );
    },
} );
