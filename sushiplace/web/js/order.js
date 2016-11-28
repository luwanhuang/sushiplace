/*
 * Show error messages if there is any invalid input content.
 * All text inputs should not be empty or there is a error message for this.
 * 
 * "First Name" and "Last Name" inputs only allow English letters.
 * 
 * "Birth Date" input needs a valid date in form of "YYYY/MM/DD" and
 * this date should not be a future date.
 * 
 * "Email" input needs a "@" and a ".", both "@" and "." should not be in
 * the beginning and end of the content users entered.
 * 
 * "Phone" inputs only allow numbers.
 * 
 * "Preferred Date" input needs a valid date in form of "YYYY/MM/DD" and
 * this date should not be a past date.
 * 
 * To submit the form successfully, the two check boxes need to be checked or
 * there will be the message telling users this is required.
 * 
 * Show submitted successfully message if the form is submitted successfully.
 * 
 * clicking on the reset button hides all error and the submitted successfully messages.
 */
$(function() {
	// Set blur function
	$('form :input')
			.blur(
					function validation() {
						var $parent = $(this).parent();
						var t = $(this).offset().top;
						var to = parseInt(t) - 255;
						var top = String(to) + "px";
						// Check name
						if ($(this).is('#first_name')
								|| $(this).is('#last_name')) {
							if (this.value == ""
									|| (this.value != "" && !(/^[a-zA-Z]+$/
											.test(this.value)))) {
								if (this.value == "") {
									var errorMsg = 'This should not be empty!';
									$parent
											.append('<span class="formtips onError">'
													+ errorMsg + '</span>');
									$('.formtips').css('top', top);
								} else {
									var errorMsg = 'Invalid name, please enter only English letters!';
									$parent
											.append('<span class="formtips onError">'
													+ errorMsg + '</span>');
									$('.formtips').css('top', top);
								}
							}
						}
						// Check email
						if ($(this).is('#email')) {
							if (this.value == ""
									|| (this.value != "" && !/.+@.+\.[a-zA-Z]{2,4}$/
											.test(this.value))) {
								if (this.value == "") {
									var errorMsg = 'This should not be empty!';
									$parent
											.append('<span class="formtips onError">'
													+ errorMsg + '</span>');
									$('.formtips').css('top', top);
								} else {
									var errorMsg = 'Invalid email, please a correct one!';
									$parent
											.append('<span class="formtips onError">'
													+ errorMsg + '</span>');
									$('.formtips').css('top', top);
								}
							}
						}

						// Check phone
						if ($(this).is('#phone')) {
							if (this.value == ""
									|| (this.value != "" && !(/^\d+$/
											.test(this.value)))) {
								if (this.value == "") {
									var errorMsg = 'This should not be empty!';
									$parent
											.append('<span class="formtips onError">'
													+ errorMsg + '</span>');
									$('.formtips').css('top', top);
								} else {
									var errorMsg = 'Invalid phone number, please enter numbers only!';
									$parent
											.append('<span class="formtips onError">'
													+ errorMsg + '</span>');
									$('.formtips').css('top', top);
								}
							}
						}

						// Validate the date
						if ($(this).is('#date') || $(this).is('#birthDate')) {
							var dateArr = this.value.split("/");
							var d = new Date();
							var day = d.getDate();
							var month = d.getMonth() + 1;
							var year = d.getFullYear();
							if (this.value == ""
									|| dateArr.length != 3
									|| isNaN(dateArr[0])
									|| isNaN(dateArr[1])
									|| isNaN(dateArr[2])
									|| dateArr[0] < year
									|| (dateArr[0] == year && dateArr[1] < month)
									|| (dateArr[0] == year
											&& dateArr[1] == month && dateArr[2] < day)
									|| dateArr[0] > year
									|| (dateArr[0] == year && dateArr[1] > month)
									|| (dateArr[0] == year
											&& dateArr[1] == month && dateArr[2] > day)
									|| (dateArr[1] < 1 || dateArr[1] > 12)
									|| (dateArr[2] < 1 || dateArr[2] > 31)) {
								// Check empty date
								if (this.value == "") {
									var errorMsg = 'This should not be empty!';
									$parent
											.append('<span class="formtips onError">'
													+ errorMsg + '</span>');
									$('.formtips').css('top', top);
								}
								// Check date format
								if (this.value != ""
										&& (dateArr.length != 3 || (dateArr.length == 3 && dateArr[2] == ""))) {
									var errorMsg = 'Invalid date form, should be YYYY/MM/DD!';
									$parent
											.append('<span class="formtips onError">'
													+ errorMsg + '</span>');
									$('.formtips').css('top', top);
								}
								// Check if there is any invalid input content
								if (this.value != ""
										&& dateArr.length == 3
										&& (isNaN(dateArr[0])
												|| isNaN(dateArr[1]) || isNaN(dateArr[2]))) {
									var errorMsg = 'Invalid date, please enter numbers and '
											+ "'/'" + ' only!';
									$parent
											.append('<span class="formtips onError">'
													+ errorMsg + '</span>');
									$('.formtips').css('top', top);

								}
								// Check if the date exists
								if (this.value != ""
										&& dateArr.length == 3
										&& !isNaN(dateArr[0])
										&& !isNaN(dateArr[1])
										&& !isNaN(dateArr[2])
										&& (!(dateArr[1] >= 1 && dateArr[1] <= 12) || !(dateArr[2] >= 1 && dateArr[2] <= 31))) {
									var errorMsg = 'Invalid date, there does not exist this date!';
									$parent
											.append('<span class="formtips onError">'
													+ errorMsg + '</span>');
									$('.formtips').css('top', top);
								}
								// Check if the date is a past date
								if ($(this).is('#date') && this.value != ""
										&& dateArr.length == 3
										&& !isNaN(dateArr[0])
										&& !isNaN(dateArr[1])
										&& !isNaN(dateArr[2])
										&& dateArr[2] != "" && dateArr[1] >= 1
										&& dateArr[1] <= 12 && dateArr[2] >= 1
										&& dateArr[2] <= 31) {
									if (dateArr[0] < year) {
										var errorMsg = 'Invalid date, this is a past date!';
										$parent
												.append('<span class="formtips onError">'
														+ errorMsg + '</span>');
										$('.formtips').css('top', top);
									}
									if (dateArr[0] == year
											&& dateArr[1] < month) {
										var errorMsg = 'Invalid date, this is a past date!';
										$parent
												.append('<span class="formtips onError">'
														+ errorMsg + '</span>');
										$('.formtips').css('top', top);
									}
									if (dateArr[0] == year
											&& dateArr[1] == month
											&& dateArr[2] < day) {
										var errorMsg = 'Invalid date, this is a past date!';
										$parent
												.append('<span class="formtips onError">'
														+ errorMsg + '</span>');
										$('.formtips').css('top', top);
									}
								}
								// Check if the date is a future date
								if ($(this).is('#birthDate')
										&& this.value != ""
										&& dateArr.length == 3
										&& !isNaN(dateArr[0])
										&& !isNaN(dateArr[1])
										&& !isNaN(dateArr[2])
										&& dateArr[2] != "" && dateArr[1] >= 1
										&& dateArr[1] <= 12 && dateArr[2] >= 1
										&& dateArr[2] <= 31) {
									if (dateArr[0] > year) {
										var errorMsg = 'Invalid date, this is a future date!';
										$parent
												.append('<span class="formtips onError">'
														+ errorMsg + '</span>');
										$('.formtips').css('top', top);
									}
									if (dateArr[0] == year
											&& dateArr[1] > month) {
										var errorMsg = 'Invalid date, this is a future date!';
										$parent
												.append('<span class="formtips onError">'
														+ errorMsg + '</span>');
										$('.formtips').css('top', top);
									}
									if (dateArr[0] == year
											&& dateArr[1] == month
											&& dateArr[2] > day) {
										var errorMsg = 'Invalid date, this is a future date!';
										$parent
												.append('<span class="formtips onError">'
														+ errorMsg + '</span>');
										$('.formtips').css('top', top);
									}
								}
							}
						}
					}).keyup(function() {
				// Key up function
				$(".formtips").remove();
				$(this).triggerHandler("blur");
			}).focus(function() {
				// Focus function
				$(".formtips").remove();
				$(this).triggerHandler("blur");
			});// end blur function

	// Submit and check again, if submit successfully, show a message for this
	$('#checkSub').click(
			function(e) {
				$("form :input.required").trigger('blur');
				var numError = $('form .formtips').length;
				if (numError || (!$("#check1").is(":checked"))
						|| (!$("#check2").is(":checked"))) {
					return false;
				}
				e.preventDefault();
				$('#submitHide').attr('id', 'submitShow');
			});

	// Reset all inputs and clear all messages on the page
	$('#checkRe').click(function() {
		$(".formtips").remove();
		$('#submitShow').attr('id', 'submitHide');
		$('#checkboxInfo1').attr('id', 'checkHide1');
		$('#checkboxInfo2').attr('id', 'checkHide2');
	});

	// Check check-box 1 and show error message if it is not checked
	$("#check1").click(function() {
		if (!$("#check1").is(":checked")) {
			$('#checkHide1').attr('id', 'checkboxInfo1');
		} else {
			$('#checkboxInfo1').attr('id', 'checkHide1');
		}
	})



})