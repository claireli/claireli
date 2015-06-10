$(document).ready(function(){
	
	var sp = (screen.width-868)/2;

	function myFunction() {
	var y = (screen.width-868)/2;
    var x = "Total Width: " + screen.width + "px<p>868 - " + screen.width + " = " + y;
    document.getElementById("demo").innerHTML = x;
	}
	
	$("body").css("background-position", "0px 0px");
	$("#spacer").css("width", sp+"px");
	$( ".box" ).hide();
	$( "#back_box" ).hide();
	$("#caption").hide();
	$(".tech_detail").hide();
	$( "#canvas" ).hide();
		
    $("#close_layer").click(function(){
		$( ".box" ).hide();
		$( "#back_box" ).hide();
		$( "#home" ).fadeIn( "slow", function() {
		});
    });
	 
	$(".x").click(function(){
		$( ".box" ).hide();
		$( "#back_box" ).hide();
		$( "#home" ).fadeIn( "slow", function() {
		});
    });
	


    $("#awards").click(function(){
		$( ".box" ).hide();
		$( "#home" ).hide();
        //$("body").css("background-position", "0px -50px");
		$( "#awards_box" ).fadeIn( "slow", function() {
		});
		
		$( "#back_box" ).fadeIn( "slow", function() {
		});
		
    });
	
	$("#projects").click(function(){
        //$("body").css("background-position", "-500px 0px");
		$( ".box" ).hide();
		$( "#home" ).hide();
		$( "#projects_box" ).fadeIn( "slow", function() {
		});
		$("#back_box").css("height", "650px");
		$( "#back_box" ).fadeIn( "slow", function() {
		});
	
	});
	
	$("#skillset").click(function(){
		$( ".box" ).hide();
		$( "#home" ).hide();
        $( "#skillset_box" ).fadeIn( "slow", function() {
		});
		$( "#back_box" ).fadeIn( "slow", function() {
		});
		$("#skillset_box").load("resume_reset.html");
		
		//$("body").css("background-position", "0px -300px");
    });

	$(".skillset_link").click(function(){
		$( ".box" ).hide();
		$( "#home" ).hide();
        $( "#skillset_box" ).fadeIn( "slow", function() {
			// Animation complete
		});
		$( "#back_box" ).fadeIn( "slow", function() {
			// Animation complete
		});
		
		//$("body").css("background-position", "0px -300px");
    });
	
	$("#graphic").click(function(){
        $( ".box" ).hide();
		$( "#home" ).hide();
		$( "#graphic_box" ).fadeIn( "slow", function() {
			// Animation complete
		});
		$( "#back_box" ).fadeIn( "slow", function() {
			// Animation complete
		});
		
		//$("body").css("background-position", "-500px -1100px");
    });
	
	$("#web").click(function(){
        $( ".box" ).hide();
		$( "#home" ).hide();
		$( "#web_box" ).fadeIn( "slow", function() {
			// Animation complete
		});
		
		$("#back_box").css("height", "850px");
		
		$( "#back_box" ).fadeIn( "slow", function() {
			// Animation complete
		});
		
		//$("body").css("background-position", "-400px -200px");
    });
	
	$("#portfolio").click(function(){
        $( ".box" ).hide();
		$( "#home" ).hide();
		$("#back_box").css("height", "950px");
		$( "#portfolio_box" ).fadeIn( "slow", function() {
			// Animation complete
		});
		$( "#back_box" ).fadeIn( "slow", function() {
			// Animation complete
		});
		
		//$("body").css("background-position", "-200px 0px");
    });
	
	$("#contact").click(function(){
        $( ".box" ).hide();
		$( "#home" ).hide();
		$( "#contact_box" ).fadeIn( "slow", function() {
			// Animation complete
		});
		$( "#back_box" ).fadeIn( "slow", function() {
			// Animation complete
		});
		
		//$("body").css("background-position", "-50px -400px");
    });

	$("#expand_resume").click(function(){
		$("#skillset_box").css("height", "2100px");
		$("#back_box").css("height", "2100px");
		$("#skillset_box").load("resume.html");
    });
	
	$("#close").click(function(){
		$(".box").hide();
		$("#back_box").hide();	
		$( "#home" ).show();
		
		$("#back_box").removeAttr('style');
    });
		
	$(".return_tech").click(function(){
		$(".tech_detail").hide();
		$( "#grid" ).fadeIn( "slow", function() {
		});
		$("#projects_box").css("height", "90%");
		$("#back_box").css("height", "650px");
    });
			
	$(".bubble").click(function(){
        $( "#grid" ).fadeOut();
		
		$(document).on('click', 'span', function () {
			alert(this.id);
		});
		
		if(this.id=="tech1") {
			
			$( "#tech1_detail" ).fadeIn( "slow", function() {
			});
		}
		else if(this.id=="tech2") {
			
			$( "#tech2_detail" ).fadeIn( "slow", function() {
			});
		}
		else if(this.id=="tech3") {
			//engineering projects
			$( "#tech3_detail" ).fadeIn( "slow", function() {
			});
			$("#projects_box").css("height", "700px");
			$("#back_box").css("height", "700px");
		}
		else if(this.id=="tech4") {
			
			$( "#tech4_detail" ).fadeIn( "slow", function() {
			});
			
		}
		else if(this.id=="tech5") {
			
			$( "#tech5_detail" ).fadeIn( "slow", function() {
			});
		}		
		else if(this.id=="tech6") {
			
			$( "#tech6_detail" ).fadeIn( "slow", function() {
			});
			
			$("#back_box").css("height", "1200px");
		}
		else if(this.id=="tech7") {
			
			$( "#tech7_detail" ).fadeIn( "slow", function() {
			});
			
		}		
		else if(this.id=="tech8") {
			
			$( "#tech8_detail" ).fadeIn( "slow", function() {
			});
		}
		
		//$("body").css("background-position", "-500px -1100px");
    });
	
	
	// ************HERE IS THE FUNCTIONALITY FOR MY GALLERY JS FUNCTIONS****************
	
	$('.thumbnail').click(function(event) {
		var status = $(this).attr('id');
		$(".box").hide();
		$("#back_box").fadeOut();	
		$( "#canvas" ).fadeIn( "slow", function() {
		});
		isolateGallery(status);
	});
	
	$('.thumbnail_web').click(function(event) {
		var status = $(this).attr('id');
		$(".box").hide();
		$("#back_box").fadeOut();	
		$( "#canvas" ).fadeIn( "slow", function() {
		});
		isolateGallery(status);
	});
	
	$(".full_img").click(function(){
		//$( "#canvas" ).hide();
		//alert(this.id);
		//alert("hi");
		//var x=document.getElementById("canvas");
		//var indicator = x.innerHTML;
		//retrieve_last(indicator);

		//alert(indicator);
    });
	
	$("#canvas").click(function(){
		$( "#canvas" ).hide();
		var x=document.getElementById("canvas");
		var indicator = x.innerHTML;
		
		var index = indicator.indexOf("id=");
		//alert(indicator);
		//alert(index);
		var res = indicator.substring(index+4);
		//alert(res);
		
		var end = res.indexOf("\"");
		res = res.substring(0, end);
		//alert(res);
		var clean = res.replace(/[0-9]/g, '');
		//alert(clean);
		retrieve_last(clean);
		
    });
	
	function isolateGallery(status) {
		
		//alert(status);
		var img = document.getElementById(status);
		var style = img.currentStyle || window.getComputedStyle(img, false);
		var bi = style.backgroundImage.slice(4, -1);
		
		console.log(style);
		console.log(bi);
		
		//alert(status);
		//alert ('<?php $origin='hello'; echo $origin; ?>');
		
		document.getElementById("canvas").innerHTML = "<img src='"+bi+"' class='full_img' id='"+status+"'><p>";
		
		//alert(document.getElementById('canvas').getAttribute('url'));
		//alert(document.getElementById("canvas").style.background);

	}
	
	function retrieve_last(indicator){
		
		//alert(indicator);
		$("#back_box").css("height", "650px");
		$( "#" + indicator + "_box" ).fadeIn( "slow", function() {
			// Animation complete
		});
		$( "#back_box" ).fadeIn( "slow", function() {
			// Animation complete
		});
		
	}
		
});