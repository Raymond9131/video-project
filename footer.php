
<footer>
<div class="container">
<div class="row">
<div class="col-md-7">
<p>The <strong class="appbox">Video Submission App</strong>for video, creativity and innovation on the internet</p>
<ul>
<li><a href="our-collection.php">Our Collection</a></li>
<li><a href="about-us.php">About Us</a></li>
<li><a href="contact-us.php">Contact Us</a></li>
<li><a href="career.php">Jobs</a></li>
<li><a href="privacy-policy.php">Privacy Policy</a></li>
</ul>
<div class="follows">Follow Us On<a href="#"><i class="fa fa-facebook"></i></a>
<a href="#"><i class="fa fa-linkedin"></i></a>
<a href="#"><i class="fa fa-twitter"></i></a>
<a href="#"><i class="fa fa-instagram"></i></a>
</div>
</div>

<div class="col-md-5 text-right">
<p>New Videos updated by <strong>Solid</strong> On <strong>April 28,2020</strong> </p>

<a href="#" class="submit_btn">Submit Your Video</a>
</div>

</div>
</div>
</footer>
</div>
<!-- Search Form -->
<div id="search"> 
	<span class="close">X</span>
	<form role="search" id="searchform" action="/search" method="get">
		<input value="" name="q" type="search" placeholder="type to search"/>
	</form>
</div>

 <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src='js/intlTelInput.min.js'></script>
  <script src="js/circle-progress.js"></script>
  <script  src="js/script.js"></script>
<script id="rendered-js">

$(document).ready(function(){
  $(".reply_btn").click(function(){
    $(".replybox").css("display", "table");
	$(".btn_cenclb").show();
  });
  
  $(".btn_cenclb").click(function(){
    $(".replybox").hide();
	$(".btn_cenclb").hide();
  });
  
});


var rangeSlider = function(){
  var slider = $('.range-slider'),
      range = $('.range-slider__range'),
      value = $('.range-slider__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $(this).next(value).html(this.value);
    });
  });
};

rangeSlider();


$(document).ready(function ($) {
    function animateElements() {
        $('.progressbar').each(function () {
            var elementPos = $(this).offset().top;
            var topOfWindow = $(window).scrollTop();
            var percent = $(this).find('.circle').attr('data-percent');
            var animate = $(this).data('animate');
            if (elementPos < topOfWindow + $(window).height() - 30 && !animate) {
                $(this).data('animate', true);
                $(this).find('.circle').circleProgress({
                    // startAngle: -Math.PI / 2,
                    value: percent / 100,
                    size : 75,
                    thickness: 2,
                    fill: {
                        color: '#663399'
                    }
                }).on('circle-animation-progress', function (event, progress, stepValue) {
                    $(this).find('strong').text((stepValue*100).toFixed(0) + "");
                }).stop();
            }
        });
    }

    animateElements();
    $(window).scroll(animateElements);
});




function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
      $('#imagePreview').hide();
      $('#imagePreview').fadeIn(650);
    };
    reader.readAsDataURL(input.files[0]);
  }
}
$("#imageUpload").change(function () {
  readURL(this);
});
//# sourceURL=pen.js
    </script>
  
  
<script>
$(function() {
	var Accordion = function(el, multiple) {
		this.el = el || {};
		this.multiple = multiple || false;

		// Variables privadas
		var links = this.el.find('.link');
		// Evento
		links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
	}

	Accordion.prototype.dropdown = function(e) {
		var $el = e.data.el;
			$this = $(this),
			$next = $this.next();

		$next.slideToggle();
		$this.parent().toggleClass('open');

		if (!e.data.multiple) {
			$el.find('.submenu').not($next).slideUp().parent().removeClass('open');
		};
	}	

	var accordion = new Accordion($('#accordion'), false);
});


$(document).ready(function(){



    $(".filter-button").click(function(){
        var value = $(this).attr('data-filter');
        
        if(value == "all")
        {
            //$('.filter').removeClass('hidden');
            $('.filter').show('1000');
        }
        else
        {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
            $(".filter").not('.'+value).hide('3000');
            $('.filter').filter('.'+value).show('3000');
            
        }
    });
    
    if ($(".filter-button").removeClass("active")) {
$(this).removeClass("active");
}
$(this).addClass("active");



$(".js-nav-main").click(function(){
    $("body").addClass("nav-sidebar-open");
  });
  $(".js-close-menu").click(function(){
    $("body").removeClass("nav-sidebar-open");
  });
  
  



	$('a[href="#search"]').on('click', function(event) {                    
		$('#search').addClass('open');
		$('#search > form > input[type="search"]').focus();
	});            
	$('#search, #search button.close').on('click keyup', function(event) {
		if (event.target == this || event.target.className == 'close' || event.keyCode == 27) {
			$(this).removeClass('open');
		}
	});            
});

</script>
</body>
</html>