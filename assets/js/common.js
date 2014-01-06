/**
 * Form functions
 */

/**
 * Update the front end when the form is submitting
 * @param  {string} form         The element ID used to locate the form item
 * @param  {string} submitButton The element ID used to locate the submit button within a desired form
 * @param  {string} loadingIcon  The element ID used to locate the loading button within a desired form
 * @param  {string} formError    The element ID used to locate the form error paragraph within a desired form
 */
function formSubmitting (form, submitButton, loadingIcon, formError) {
	$(form + " " + loadingIcon).show();
	$(form + " " + formError).html('');
	$(form + " " + submitButton).attr('disabled', 'disabled');
}

/**
 * Capture and process the incoming data passed by the PHP.
 * @param  {string} form         The element ID used to locate the form item
 * @param  {string} submitButton The element ID used to locate the submit button within a desired form
 * @param  {string} loadingIcon  The element ID used to locate the loading button within a desired form
 * @param  {string} formError    The element ID used to locate the form error paragraph within a desired form
 * @param  {string} data         The incoming JSON data
 * @param  {function} succeeded  The function to be executed when the incoming JSON data indicated that 
 *                               the preivous action has successfully performed
 * @param  {function} failed     The function to be executed when the incoming JSON data indicated that 
 *                               the preivous action has failed to perform
 */
function formReturned (form, submitButton, loadingIcon, formError, data, succeeded, failed) {
	succeeded = typeof succeeded !== 'undefined' ? succeeded : function () {};
	failed = typeof failed !== 'undefined' ? failed : function () {};
	var status = data.idt;
	if (status === 'idt_error') {
		$(form + " " + formError).text(data.payload);
		failed();
		$(form + " " + loadingIcon).hide();
		$(form + " " + submitButton).removeAttr('disabled');
	} else if (status === 'idt_success') {
		$(form + " " + formError).html('');
		succeeded();
	}
}

/**
 * Fired when there is no response from server for a long time. Assume that the network is down.
 * @param  {string} form         The element ID used to locate the form item
 * @param  {string} submitButton The element ID used to locate the submit button within a desired form
 * @param  {string} loadingIcon  The element ID used to locate the loading button within a desired form
 * @param  {string} formError    The element ID used to locate the form error paragraph within a desired form
 */
function formRequestTimedOut (form, submitButton, loadingIcon, formError) {
		$(form + " " + formError).text('There seemed to be a problem with your network. Please try again.');
		$(form + " " + loadingIcon).hide();
		$(form + " " + submitButton).removeAttr('disabled');
}

/**
 * Process a standard form.
 * @param  {string} form         The element ID used to locate the form item
 * @param  {string} baseURL      The base URL to request the JSON file through AJAX.
 * @param  {array}  inputs       An array of inputs whose value should be passed through the query,
 *                               in order to retrieve the target JSON.
 * @param  {function} succeeded  The function to be executed when the incoming JSON data indicated that 
 *                               the preivous action has successfully performed
 * @param  {function} failed     The function to be executed when the incoming JSON data indicated that 
 *                               the preivous action has failed to perform
 * @param  {string} submitButton The element ID used to locate the submit button within a desired form
 * @param  {string} loadingIcon  The element ID used to locate the loading button within a desired form
 * @param  {string} formError    The element ID used to locate the form error paragraph within a desired form
 */
function formProcess (form, baseURL, inputs, succeeded, failed, submitButton, loadingIcon, formError) {
	succeeded = typeof succeeded !== 'undefined' ? succeeded : function () {};
	failed = typeof failed !== 'undefined' ? failed : function () {};
	submitButton = typeof submitButton !== 'undefined' ? submitButton : '.submit';
	loadingIcon = typeof loadingIcon !== 'undefined' ? loadingIcon : '.loading';
	formError = typeof formError !== 'undefined' ? formError : '.form-error';

	formSubmitting(form, submitButton, loadingIcon, formError);
	var length = inputs.length,
		element = null;
	var urlString = baseURL + "?";
	for (var i = 0; i < length; i++) {
		element = inputs[i];
		elementID = form + " [name=\"" + inputs[i] + "\"]";
		if ($(elementID).attr('type') !== 'checkbox') {
			if (i !== 0) {
				urlString = urlString + "&";
			}
			urlString = urlString + element + "=" + $(elementID).val();
		} else {
			if ($(elementID).is(':checked')) {
				if (i !== 0) {
					urlString = urlString + "&";
				}
				urlString = urlString + element + "=" + $(elementID).val();
			}
		}
	}
	$.ajax({
		url: urlString,
		type: 'GET',
		dataType: 'json',
		timeout: 25000,
		success: function(data, textStatus, xhr) {
			formReturned(form, submitButton, loadingIcon, formError, data, succeeded, failed);
		},
		error: function(xhr, textStatus, errorThrown) {
			formRequestTimedOut(form, submitButton, loadingIcon, formError);
		}
	});
}

