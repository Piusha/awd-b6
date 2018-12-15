(function($){


	var Entry = {
		BaseModule:null,

		init:function(extend){
			Entry.BaseModule = extend;
			
			Entry.actionListeners();
		},
		actionListeners:function(){

			$('#frm_sign_up').on('submit',function(e){
				e.preventDefault();
				Entry.BaseModule.post({
					method:'POST',
					action:'api/sign-up',
					data:Entry.BaseModule.serializeObject($(this)),
					dataType:"JSON"
				}).onSuccess(function(result){
					console.log(result)
				}).onError(function(e,message){
					console.error(e);
				});

				

			});
		}
		




	}





	$.entry = function(){
		Entry.init(new Http)
	}
	


})(jQuery);

