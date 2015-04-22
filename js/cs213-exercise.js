jQuery(document).ready(function() {
	jQuery('#toggle').on('click', Controls.toggle);
	jQuery('#update').on('click', Controls.update);
});

var Controls_class = function() {

	this.toggle = function() {
		jQuery('#output').toggle();
	};

	this.update = function() {
		bootbox.confirm('Are you sure you want to update?', function(result) {
			if (result) {
				jQuery('#output').css('background-color', jQuery('#color').val());
				jQuery('#text-to-append').text(jQuery('#text-to-append').text() + jQuery('#replace-text').val());
			}
		});
	};

	return this;
};

var Controls = new Controls_class();