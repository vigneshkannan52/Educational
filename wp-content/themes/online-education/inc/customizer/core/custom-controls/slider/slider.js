/**
 * Slider control JS to handle the range of the inputs.
 *
 * File `slider.js`.
 *
 * @package Online_Education
 */
wp.customize.controlConstructor['online-education-slider'] = wp.customize.Control.extend( {

	ready : function () {

		'use strict';

		var control = this;

		// Update the text value.
		this.container.find( 'input[type=range]' ).on( 'input change', function () {
			var value        = jQuery( this ).val(),
				input_number = jQuery( this ).closest( '.slider-wrapper' ).find( '.online-education-range-value .value' );

			input_number.val( value );
			input_number.change();
		} );

		// Handle the reset button.
		this.container.find( '.online-education-slider-reset' ).click( function () {
			var wrapper       = jQuery( this ).closest( '.slider-wrapper' ),
			    input_range   = wrapper.find( 'input[type=range]' ),
			    input_number  = wrapper.find( '.online-education-range-value .value' ),
			    default_value = input_range.data( 'reset_value' );

			input_range.val( default_value );
			input_number.val( default_value );
			input_number.change();
		} );

		// Save changes.
		this.container.on( 'input change', 'input[type=number]', function () {
			var value = jQuery( this ).val();
			jQuery( this ).closest( '.slider-wrapper' ).find( 'input[type=range]' ).val( value );
			control.setting.set( value );
		} );

	}

} );
