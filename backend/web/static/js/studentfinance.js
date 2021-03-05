$(document).ready(function() {

	// Add a click handler to the Yes and Don't Know apply for finance buttons
	$("#applyFinanceYesRadio,#applyFinanceDontKnowRadio").click(function() {
		// Show the share details sections
		$("#radioShareDetails").show();
		$("#radioEmailReminder").show();
		
		// Clear the error
		clearError("#radioApplyFinance");
	});

	// Add a click handler to the No apply for finance buttons
	$("#applyFinanceNoRadio").click(function() {
		// Show the share details sections
		$("#radioShareDetails").hide();
		$("#radioEmailReminder").hide();
		
		// Clear out the selections
		$("input[name='radioShareDetails']:checked").removeAttr("checked");
		$("input[name='radioEmailReminder']:checked").removeAttr("checked");
		
		// Clear the errors
		clearError("#radioApplyFinance");
		clearError("#radioShareDetails");
		clearError("#radioEmailReminder");
	});

	// Add a click handler to the Share Details radio buttons
	$("input[name='radioShareDetails']").click(function() {
		// Clear the error
		clearError("#radioShareDetails");
	});

	// Add a click handler to the Email Reminder radio buttons
	$("input[name='radioEmailReminder']").click(function() {
		// Clear the error
		clearError("#radioEmailReminder");
	});

	// initially hide share and reminder if there is no selection for radio
	if ($("#applyFinanceYesRadio:checked,#applyFinanceDontKnowRadio:checked").size() == 0) {
		$("#radioShareDetails").hide();
		$("#radioEmailReminder").hide();
	}

});

// This removes the errorTxt class from around the div and then hides any <p/> descendants
function clearError(id) {
	$(id).removeClass("errorTxt");
	$(id + " p ").hide();
}
