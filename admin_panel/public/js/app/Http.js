function Http(){
	this.out = null;
}

Http.prototype.post = function(option){

	console.log(option)
	this.out = $.ajax(option)
	return this;
}
Http.prototype.onSuccess = function(callBack){

	this.out.done(callBack);
	return this;
}
Http.prototype.onError = function(callBack){

	this.out.fail(callBack);
	return this;
}
Http.prototype.serializeObject = function(form){

	var formDataObject = {};
	$.each(form.serializeArray(),function(index,value){
		
		formDataObject[value.name] = value.value;
	});
	return formDataObject;
	
}