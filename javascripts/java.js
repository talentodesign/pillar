$(document).ready(function(){
	$('.botao').not(".current").hover(
		function(){
			var end= $(this).attr('src');
			var hov = end.replace('_off.','_on.');
			$(this).attr('src', hov);
			},
		function(){
			var end= $(this).attr('src');
			var hov = end.replace('_on.','_off.');
			$(this).attr('src', hov);
			}		  
	);
	$(".current").each(function(){
		var end2= $(this).attr('src');
		var hov2 = end2.replace('_off.','_on.');
		$(this).attr('src', hov2);
		
		});
	$(".fade").hover(
		function(){
			$(this).stop().animate({opacity:1},"slow");
		},
		function(){
			$(this).stop().animate({opacity:0},"slow");
		}
		);
	$(".fade2").hover(
		function(){
			$(this).stop().animate({opacity:1},"slow");
		},
		function(){
			$(this).stop().animate({opacity:0.5},"slow");
		}
		);
		
		
	/* ------------ CONTATO  AJAX ---------------------*/
	$("#contato_enviando").on('hidden',function(){
			$("#contato_enviando p").html('<center><img src="images/loading2.gif" alt=""></center>');
			$("#contato_enviando h3").html('Enviando sua mensagem...');
		});
	var some=function(){$('#contato_enviando').modal('hide')};
	
	$("#cont_bt").click(function(){
		var nome=$("#nome").val();
		var email=$("#email").val();
		var tel=$("#tel").val();
		var mens=$("#mens").val();
		var dados="nome="+nome+"&email="+email+"&tel="+tel+"&mens="+mens;
		if(nome =='' || email =='' || tel =='' || mens==''){
			$('#contato_vazio').modal("show");
			}
		else{
			$('#contato_enviando').modal({backdrop:"static"});
			$('#contato_enviando').modal("show");
			$.ajax({
				type: "POST",
				url: "../mail_contato.php",
				data: dados,
				cache: false,
				success: function(){
					$("#contato_enviando p").html('<center><img src="../images/email-send-icon.png" alt=""></center>').find('center').hide().fadeIn("slow");
					$("#contato_enviando h3").html('Mensagem Enviada');
					$("input:text, textarea").val("");
					setTimeout(some,2000);
				}
				
				});
		}
		return false;
		});
	
	/* ------------ SLIDE JCYCLE ---------------------*/	
	$("#slider").cycle({fx:"fade"});
	
	$("#nahum #gal").carouFredSel({
		width: 535,
		height: 200,
		items: 4,
		prev: "#prev",
		next: "#next",
		scroll: {
			duration: 500,
			pauseOnHover: true
    },
		auto: 6000
	}).find("a").fancybox({
		padding:0,
		helpers : {
			overlay : {
				locked : false
			}
		}
	});

	$(".obra-a #gal").carouFredSel({
		width: 1100,
		//width: 680,
		height: 200,
		items: 7,
		prev: "#prev",
		next: "#next",
		scroll: {
			duration: 500,
			pauseOnHover: true
    },
		auto: 6000
	}).find("a").fancybox({
		padding:0,
		helpers : {
			overlay : {
				locked : false
			}
		}
	});

	$("#gal-area2 #gal").carouFredSel({
		width: 1100,
		height: 200,
		prev: "#prev",
		next: "#next",
		scroll: {
			duration: 500,
			pauseOnHover: true
    },
		auto: 6000
	}).find("a").fancybox({
		padding:0,
		helpers : {
			overlay : {
				locked : false
			}
		}
	});

    /* ------------ SCROLL ---------------------*/
    $('#txt').jScrollPane();

    /* ------------ POP MENU ---------------------*/
    $('#emp-menu').popover({html:true,placement:"bottom"});
    
});