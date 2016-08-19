$(function() {
	$("#reading_more").click(function(){
		$("#trends_detail_msg_middle").toggleClass("trends_detail_msg_footer_active");
		if ($(".reading_more").css("display") == "block") {
			$(".reading_more").css("display","none");
			$(".reading_less").css("display","block");
		}else{
			$(".reading_more").css("display","block");
			$(".reading_less").css("display","none");
		}
	})
	waterfall();
	function waterfall(){
		var inter_c_con = $("#inter_c_con");
		var inter_c_card =$(".inter_c_card");
		var boxW = inter_c_card.eq(0).width();
		var boxH = inter_c_card.eq(0).height();
		var hArr = new Array();
		for(var i=0; i<inter_c_card.length;i++){
			if(i<2){
				hArr.push(inter_c_card[i].offsetHeight);
				$(inter_c_card[i]).css("top",0+"px");
				$(inter_c_card[i]).css("left",1+50*i+"%"); 
			}else{
				var minH = Math.min.apply(null,hArr); //利用Apply的参数数组化
				$(inter_c_card[i]).css("top",minH+10+"px");
				if((i%2==0?1:0)==1){
					$(inter_c_card[i]).css("left",1+"%");  //offsetLeft	
				}else{
					$(inter_c_card[i]).css("left",51+"%");  //offsetLeft
				}
				var minIndex = getMinIndex(minH,hArr);
				hArr[minIndex]=inter_c_card[i].offsetHeight+minH+10;
			}
		}
	}
	function getMinIndex(val,arr){
	for(var i in arr){
		if(arr[i] == val){
			return i;
		}
	}
}
})