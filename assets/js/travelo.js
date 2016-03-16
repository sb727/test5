$(document).ready(function(){
	loadSlides(0);

	$("#in_chkin, #in_chkout").datepicker();

	$("#back-top").click(function(){
		console.log($(window).scrollTop());
		$("body").animate({scrollTop : 0}, "slow");
	});

	$("#sch_btn").click(function(){
		loadSlides($("#in_dest").val());
	});

	$("#slide-box").on("click", "span", function(){
		console.log($(this).text());
	});

	$("#slide-box").on("click", "img", function(){
		console.log($(this).attr('alt'));
		showDetail($(this).attr('alt'));
	});

	$(".navbar-toggle").click(function(){
		$(".navbar .collapse").slideToggle( "slow" );
	});
});

function loadSlides(where){
	if (where == '') where=0;
	$("#sch_btn").attr("disabled", "disabled");
	$.ajax({
		type: "POST",
	  	url: "HomeCtrl/showSlide/" + where,
	  	success: function(data){
	  		$("#slide-box").html('');
	  		console.log(data);
	  		for (var i in data) {
	  			$("#slide-box").append('<section class="col-sm-6 col-md-3">'+
					'<img class="slide-thumb" alt="'+data[i].id+'" src="assets/img/slide_'+data[i].name+'.png">'+
					'<div class="slide-detail">'+
						'<span class="sub-title-sm">'+data[i].name+'</span>'+
						'<p class="sub-desc">'+data[i].destination+'</p>'+
					'</div>'+
				'</section>');
	  		}
	  		$("#sch_btn").removeAttr("disabled");
	  	},
	  	dataType: "json"
	});
}

function showDetail(id){
	$.ajax({
		type: "POST",
	  	url: "HomeCtrl/showDetailById/" + id,
	  	success: function(data){
	  		console.log(data);
	  		$('#detail-dlg').html('');
	  		$('#detail-dlg').append(
	  				$('<div class="detail_view">'+
				     '<img class="img-circle img-thumbnail" src="assets/img/slide_'+data.name+'.png">'+
				     '<div class="slide-detail">'+
				          '<span class="sub-title-sm">'+data.name+'</span>'+
				          '<p class="sub-desc-blu">'+data.destination+'</p>'+
				          '<p class="sub-desc-date">'+data.description+'</p>'+
				     '</div>'+
				    '</div>')
	  			);
	  		$('#detail-dlg').dialog({
			      autoOpen: false,
			      height: 400,
			      width: 500,
			      modal: true,
			      top:1000,
			      show: {
			        effect: "blind",
			        duration: 1000
			      },
			      hide: {
			        effect: "explode",
			        duration: 1000
			      }
			    });
	  		$( "#detail-dlg" ).dialog( "open" );
	  	},
	  	dataType: "json"
	});
}