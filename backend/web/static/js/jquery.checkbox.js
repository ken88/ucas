(function($){
	$.fn.tzCheckbox = function(){
		return this.each(function(){
			var originalCheckBox = $(this);
			
			// Creating the new checkbox markup:
			var checkBox = $('<span >',{
				className	: originalCheckBox.attr('class') + ' tzCheckBox '+(this.checked?'checked':''),
				name: originalCheckBox.attr('name'),
				id: originalCheckBox.attr('name') + '_Id',
				html: '<span class="tzCBContent">'+
					  '</span><span class="tzCBPart"></span>'
			});

			// Inserting the new checkbox, and hiding the original:
			checkBox.insertAfter(originalCheckBox.hide());

			checkBox.click(function(){
				checkBox.toggleClass('checked');
				var isChecked = checkBox.hasClass('checked');
				// Synchronizing the original checkbox:
				originalCheckBox.attr('checked',isChecked);
				originalCheckBox.trigger('change');
			});
			
			// Listening for changes on the original and affecting the new one:
			originalCheckBox.bind('click',function(){
				checkBox.click();
			});
		});
	};
})(jQuery);