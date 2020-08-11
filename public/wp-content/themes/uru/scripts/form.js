if (window.matchMedia('screen and (min-width:768px)').matches) {
//768px以上のデスクトップでの処理 

$(function(){
	$("form").submit(function(){
	
		//エラーの初期化
		$("span.error").remove();
		$(".frm_group .left").removeClass("error");
		
		$(":text,input[type='tel'],input[type='email'],textarea,select").filter(".validate").each(function(){
			
			//必須項目のチェック
			$(this).filter(".required").each(function(){
				if($(this).val()==""){
					if($(this).parent().find('.error').size() === 0) {
						$(this).parent().append("<span style='color:red;display:block;padding-top: 3px;margin-left: 0px;' class='error'>必須項目です</span>");
					}
				}
			});
			
			//数値のチェック
			$(this).filter(".number").each(function(){
				if(isNaN($(this).val())){
					$(this).parent().append("<span class='error'>数値のみ入力可能です</span>");
				}
			});
			
			//メールアドレス確認のチェック
			$(this).filter(".mail_check").each(function(){
				if($(this).val() && $(this).val()!=$("input[name="+$(this).attr("name").replace(/^(.+)_check$/, "$1")+"]").val()){
					$(this).parent().append("<span style='color:red;display:block;padding-top: 3px;margin-left: 0px;'' class='error'>メールアドレスが確認用項目と異なります</span>");
				}
			});
			
		});
		
		//ラジオボタンのチェック
		$(":radio").filter(".validate").each(function(){
			$(this).filter(".required").each(function(){
				if($(":radio[name="+$(this).attr("name")+"]:checked").size() == 0){
				if($(this).parent().parent().parent().parent().find('.error').size() === 0) {
				$(this).parent().parent().parent().parent().append("<span class='error' style='color:red;display:block;padding-top: 3px;margin-left: 0px;''>選択してください</span>");
				}
				}
			});
		});
		
		//チェックボックスのチェック
		$(".checkboxRequired_1").each(function(){
			if($(":checkbox:checked",this).size()==0){
				$(this).append("<span style='color:red' class='error'>選択してください</span>");
			}
		});
		
		$(".checkboxRequired_2").each(function(){
			if($(":checkbox:checked",this).size()==0){
				$(this).append("<span style='color:red' class='error'>選択してください</span>");
			}
		});

		
		// その他項目のチェック
		$(".validate.add_text").each(function(){
			if($(this).attr("checked")==true && $("input[name="+$(this).attr("name").replace(/^(.+)$/, "$1_text")+"]").val()==""){
				$(this).parent().append("<span class='error'>その他の項目を入力してください。</span>");
			}
		});
		
		//エラーの際の処理
		if($("span.error").size() > 0){
				$('html,body').animate({ scrollTop: $("span.error:first").offset().top-40 }, 'slow');
				
				$("span.error").parent().addClass("error");
				return false;
		}
	});
});


}else{
//スクリーンサイズが768pxより小さい時の処理

$(function(){
	$("form").submit(function(){
	
		//エラーの初期化
		$("span.error").remove();
		$("tr td").removeClass("error");
		
		
		$(":text,input[type='tel'],input[type='email'],textarea,select").each(function(){
			
			//必須項目のチェック
			$(this).filter(".required").each(function(){
				if($(this).val()==""){
					if($(this).parent().find('.error').size() === 0) {
						$(this).parent().append("<span style='color:red;display:block;margin-left: 0px;' class='error'>必須項目です</span>");
					}
				}
			});
			
			//数値のチェック
			$(this).filter(".number").each(function(){
				if(isNaN($(this).val())){
					$(this).parent().append("<span class='error'>数値のみ入力可能です</span>");
				}
			});
			
			//メールアドレス確認のチェック
			$(this).filter(".mail_check").each(function(){
				if($(this).val() && $(this).val()!=$("input[name="+$(this).attr("name").replace(/^(.+)_check$/, "$1")+"]").val()){
					$(this).parent().append("<span style='color:red;display:block;margin-left: 0px;'' class='error'>メールアドレスが確認用項目と異なります</span>");
				}
			});
			
		});
		
		//ラジオボタンのチェック
		$(":radio").filter(".validate").each(function(){
			$(this).filter(".required").each(function(){
				if($(":radio[name="+$(this).attr("name")+"]:checked").size() == 0){
				if($(this).parent().parent().parent().parent().find('.error').size() === 0) {
				$(this).parent().parent().parent().parent().append("<span class='error' style='color:red;display:block;margin-left: 0px;''>選択してください</span>");
				}
				}
			});
		});
		
		// その他項目のチェック
		$(".validate.add_text").each(function(){
			if($(this).attr("checked")==true && $("input[name="+$(this).attr("name").replace(/^(.+)$/, "$1_text")+"]").val()==""){
				$(this).parent().append("<span class='error'>その他の項目を入力してください。</span>");
			}
		});
		
		//エラーの際の処理
		if($("span.error").size() > 0){
				$('html,body').animate({ scrollTop: $("span.error:first").offset().top-40 }, 'slow');
				
				$("span.error").parent().addClass("error");
				return false;
		}
	});
});	
}