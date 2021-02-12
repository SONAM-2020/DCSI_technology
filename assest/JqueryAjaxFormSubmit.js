/*
 *	JqueryAjaxFormSubmit Library Beta
 *
 *	Dependancy Jquery library (required v.1.6.4 and above)
 *	
 *	Tuesday September 27 2011 
 *	
 */

// addMethod - By John Resig (MIT Licensed)
function addMethod(object, name, fn) {
	var old = object[name];
	object[name] = function() {
		if (fn.length == arguments.length)
			return fn.apply(this, arguments);
		else if (typeof old == "function")
			return old.apply(this, arguments);
	};
}
// Extending the addMethod
function AjaxFormSubmit() {
	// Global variables declaration

	var jqFormReturnData = null;
	var jqStatus = null;
	var jqReadyState = null;
	var jqFormObject = null;
	var jqFormData = null;
	var jqFormAction = null;
	var jqFormMethod = null;
	var jqResultDiv = null;
	var jqResultDivEffect = null;	
	var jqSecondaryTarget = null;
	var ERROR_CODE = 0;
	var SUCCESS_CODE = 1;
	var resultData=null;
	var retVal=null;
	// Global variables declaration
	addMethod(this, "jqueryAjaxFormSubmit", function(arg) {
		// Left Blank.No modification should be made here.
		
		return null;
	});
	
	
	// Method for handling the data manually
	addMethod(this, "jqueryAjaxFormSubmit", function(formArg, actionURL,methodType, targetDiv, f) {
		
		//$('#ajaxLoader').toggle();
		if (formArg != null && actionURL != null && methodType != null&&f!=null) {			
			jqFormObject = (typeof formArg == "object") ? $("#" + formArg.id):(formArg.indexOf("=")<0)?$("#"+formArg):0;
			//document.getElementById(targetDiv).innerHTML="fdfd";
			
			//$("#" + targetDiv).children('div').html("<table width=\"100%\"><tr><td width=\"100%\" align=\"center\"><img src=\"resources/images/ajax-loader.gif\"/></td></tr></table>");		
			//
			jqFormData =(jqFormObject==0)?formArg:jqFormObject.serialize(); 	
			jqFormAction = actionURL;
			jqFormMethod = methodType;
			jqResultDiv = (typeof targetDiv == "object") ? targetDiv.id	: targetDiv;			
			// making the ajax call with the above params
			$.ajax({
				url : jqFormAction,
				type : jqFormMethod,
				data : jqFormData,
				async:false,
				cache : false,
				success : function(data, textStatus, jqXHR) {
					//alert("test");
					jqFormReturnData = data;
					//alert(data);
					//alert(targetDiv);
					//$("#" + targetDiv).children('div').html("<table width=\"100%\"><tr><td width=\"100%\" align=\"center\"><img src=\"resources/images/ajax-loader.gif\"/></td></tr></table>");
					
					//$('#ajaxLoader').toggle();
				},
				error : function(jqXHR, textStatus, errorThrown) {
					jqFormReturnData = null;
					retVal = ERROR_CODE;
				},
				complete : function(jqXHR, textStatus) {
					
					if(f!='load')
					{
					(f=="show")?$("#" + targetDiv).html(jqFormReturnData).show():("#" + targetDiv).html(jqFormReturnData).hide();
					}
				
				else if(f=='load') $("#" + targetDiv).html(jqFormReturnData);
				retVal = SUCCESS_CODE;
					
					jqStatus = jqXHR.status;
					jqReadyState = jqXHR.readyState;
					// printing at console.Remove at release.
					
				}
			});

		}
		return retVal;

	});
	
	addMethod(this, "getData", function() {		
		return resultData;
	});
}
