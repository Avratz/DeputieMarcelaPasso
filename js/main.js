//vars
var minHeight = "80px";
var maxHeight = "100px";
var dondeEstoy = "inicio";
var $usoMenu = false;
var num = 1;
var scrolling = false;
//lsa seciones


//----------------------------
//functions
//----------------------------


function go(place){
var $actual ="." + place.substr(1,3);
 $('html,body').animate({ scrollTop: $(place).offset().top - "80"}, 1000);
   if ($($actual).hasClass("selected")){
   }else {
     $(".mainnav").children(".selected").removeClass("selected");
     $($actual).addClass("selected");
   }
}

function showGestion (caja){
  var $h3 = caja + " h3";
  var $time = caja + " time";
  var $p = caja + " p";
  var $tColor = $($p).is(":visible");
    if (!$tColor){
        $($h3).css("background", "#5FC5EC");
        $($time).css("background", "#5FC5EC");
        $($p).fadeIn("slow");
        $tColor=false;
    } else {
        $($h3).css("background", "" );
        $($time).css("background", "" );
        $($p).fadeOut("fast");
        $tColor=true;
    }
}


$(window).scroll(function() {
  var $yPos = $(document).scrollTop();
    if ($yPos > 40){
      $("#bar").animate({height: minHeight},10);
      $("h1").hide();
      $(".wide").show();
      $("#bar h2").hide();
      $(".bar-left").css("height", minHeight);
      $("#bar").css("background-color", "rgba(33,52,98, 0.8)");
    }
    else {
      $("#bar").animate({height: maxHeight},10);
      $("#bar h2").show();
      $("h1").show();
      $(".wide").hide();
      $(".bar-left").css("height", maxHeight);
      $("#bar").css("background-color", "rgba(33,52,98, 1)");
    }
});


//----------------------------
// Main nav go to
//----------------------------


$(".bio").click(function (){
    go("#biografia");
});

$(".ges").click(function (){
    go("#gestion");
});

$(".ima").click(function (){
    $("#imagenes").show();
});

$("#imagenes").click(function (){
    $("#imagenes").hide();
});
$(".con").click(function (){
    go("#contacto");
});


//----------------------------
// GESTION Hide show info
//----------------------------

$(".gestion-1").click(function (){
  showGestion(".gestion-1");
});
$(".gestion-2").click(function (){
  showGestion(".gestion-2");
});
$(".gestion-3").click(function (){
  showGestion(".gestion-3");
});
$(".gestion-4").click(function (){
  showGestion(".gestion-4");
});
$(".gestion-5").click(function (){
  showGestion(".gestion-5");
});


// paginas
/*
  jQuery(function($) {
      $('.post-contain').on('click', '.pag a', function(e){
          e.preventDefault();
          var link = $(this).attr('href');
          $('.post-contain').fadeOut(500, function(){
              $(".post-contain").load(link + ' .news-container', function() {
                  $(this).fadeIn(500);
                  hover();
              });
          });
      });
  });
*/
