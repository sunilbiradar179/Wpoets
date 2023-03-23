<!DOCTYPE html>
<html>
<head>
	<title>3 Column Layout with Tabs and Image Slider</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<style>
		.column {
			display: inline-block;
			width: 30%;
			vertical-align: top;
			padding: 10px;
		}
		.tabs {
			display: block;
			margin-bottom: 10px;
		}
		.tab {
			display: inline-block;
			padding: 5px 10px;
			background-color: #f2f2f2;
			border: 1px solid #ccc;
			cursor: pointer;
		}
		.tab.active {
			background-color: #ccc;
		}
		.slider {
			position: relative;
			overflow: hidden;
			height: 300px;
		}
		.slider img {
			position: absolute;
			top: 0;
			left: 0;
			height: 100%;
			width: 100%;
			opacity: 0;
			transition: opacity 0.5s ease-in-out;
		}
		.slider img.active {
			opacity: 1;
		}




        button {
  display: block;
  color: black;
  padding: 18px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.5s ease-in;
  font-size: 17px;
  margin: 15px;
}
 
/* Change background color of buttons on hover */
button:hover {
  background-color: rgb(91, 161, 227);
 
}
 
/* Create an active/current "tab button" class */
 button.active {
  background-color: rgb(88, 88, 88);
  color: white;
}

 button{
    width: 100%;
    height:200px
    margin: 10px 0px;
    padding: 18px 10px;
  }
 

        .arrow {
  color: rgb(88, 88, 88);
  float: right;
  font-size: 26px;
  position: relative;
  left: 25px;
}

 .arrow {
    display: none !important;
  }
	</style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script>
		$(document).ready(function() {
			// set up the tabs
			$(".tab").click(function() {
				$(".tab").removeClass("active");
				$(this).addClass("active");
				var tabId = $(this).attr("data-tab-id");
				$(".slider img").removeClass("active");
				$(".slider img[data-tab-id='" + tabId + "']").addClass("active");
			});
			// start the slider
			var slideIndex = 0;
			var slides = $(".slider img");
			var numSlides = slides.length;
			showSlide(slideIndex);
			setInterval(function() {
				slideIndex++;
				if (slideIndex >= numSlides) {
					slideIndex = 0;
				}
				showSlide(slideIndex);
			}, 20000);
			function showSlide(index) {
				slides.removeClass("active");
				$(slides[index]).addClass("active");
				var tabId = $(slides[index]).attr("data-tab-id");
				$(".tab").removeClass("active");
				$(".tab[data-tab-id='" + tabId + "']").addClass("active");
			}
		});
	</script>
</head>
<body>

<h1 style="text-align:center">TASK</h1>
	<div class="column">
		<div class="tabs">
			<!-- <div class="tab active" data-tab-id="1"><img src="image1.png" style="width:400px;height:100px"></div>
			<br>
            <div class="tab active" data-tab-id="2"><img src="image2.png" style="width:400px;height:100px"></div>
			<br>
            <div class="tab active" data-tab-id="3"><img src="image3.png" style="width:400px;height:100px"></div>
			<br> -->

            <button class="tab " data-tab-id="1" >
      <i class="fas fa-laptop-code"></i>
       Learning
       <span id="arrow1" class="arrow fas fa-caret-right"></span>
      </button>

      <button class="tab " data-tab-id="2" >
      <i class="fas fa-laptop-code"></i>
        Communication
       <span id="arrow1" class="arrow fas fa-caret-right"></span>
      </button>

      <button class="tab " data-tab-id="3" >
      <i class="fas fa-laptop-code"></i>
      Technology
       <span id="arrow1" class="arrow fas fa-caret-right"></span>
      </button>

            <!-- <div class="tab" data-tab-id="2">Tab 2</div>
			<div class="tab" data-tab-id="3">Tab 3</div> -->
		</div>
	</div>
	<div class="column">
		<div class="slider">
			<img src="image1.png" data-tab-id="1" class="active">
			<img src="image2.png" data-tab-id="2">
			<img src="image3.png" data-tab-id="3">
		</div>
	</div>
    <div class="column">
		<div class="slider">
			<img src="image1.png" data-tab-id="1" class="active" >
			<img src="image2.png" data-tab-id="2">
			<img src="image3.png" data-tab-id="3">
		</div>
	</div>
    </body>	
    </html>