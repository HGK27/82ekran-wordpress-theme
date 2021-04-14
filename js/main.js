      $(".regular").slick({
        dots: true,
        arrows: false,
        slidesToShow: 3,
        slidesToScroll: 3,
        autoplaySpeed: 2000,
        responsive: [
          {
            breakpoint: 992,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2,
              autoplaySpeed: 2000,
              dots: true
            }
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              autoplaySpeed: 2000,
              dots: true
            }
          },
        ]
      });

      $(window).scroll(function () {
        if ($(this).scrollTop() > 100)
          // Sayfa ne kadar aşağı kayarsa buton görünsün. 100 sayısı = Kaydırma çubuğunun piksel konumu. Bu sayı değiştirilebilir.
          $("#upperScreen").fadeIn(500);
        // Yukarı çık butonu ne kadar hızla ortaya çıksın. 500 milisaniye = 0,5 saniye. Bu sayı değiştirilebilir.
        else $("#upperScreen").fadeOut(500); // Yukarı çık butonu ne kadar hızla ortadan kaybolsun. 500 milisaniye = 0,5 saniye. Bu sayı değiştirilebilir.
      });
      $(document).ready(function () {
        $("#upperScreen").click(function () {
          // Yukarı çık butonuna tıklanıldığında aşağıdaki satır çalışır.
          $("html, body").animate({ scrollTop: "0" }, 500); // Sayfa ne kadar hızla en yukarı çıksın.
          // 0 sayısı sayfanın en üstüne çıkılacağını belirtir.
          // 500 sayısı ne kadar hızla çıkılacağını belirtir. 500 milisaniye = 0,5 saniye. Bu sayı değiştirilebilir.
          return false;
        });
      });

      $( document ).ready(function() {
        
        $( ".honeyComb-col" ).hover(
          function() {
            var imgData = $( this ).attr( "data" );
            
              if (imgData =="image1") {
                $( ".honeyComb-title1" ).addClass( "honeyComb-hover" );
              }
              else if (imgData =="image2") {
                $( ".honeyComb-title2" ).addClass( "honeyComb-hover" );
              } 
              else if(imgData =="image3"){
                $( ".honeyComb-title3" ).addClass( "honeyComb-hover" );
              }
              else if(imgData =="image4"){
                $( ".honeyComb-title4" ).addClass( "honeyComb-hover" );
              }

          }, function() {
            $( ".honeyComb-title1" ).removeClass( "honeyComb-hover" );
            $( ".honeyComb-title2" ).removeClass( "honeyComb-hover" );
            $( ".honeyComb-title3" ).removeClass( "honeyComb-hover" );
            $( ".honeyComb-title4" ).removeClass( "honeyComb-hover" );
          }
        );
          
        $( ".searchButton" ).click(function() {         
          $(".openingSearch").css("display", "block");

          var openvar=-80;
          var openfunction = setInterval(function(){
            openvar++;
          $(".openingSearch").css("top", openvar);
          
          if(openvar==0){
            clearInterval(openfunction);
          }     
          },5);
        });

        $( ".openingSearch-close" ).click(function() {         
          

          var openvar=0;
          var openfunction = setInterval(function(){
            openvar--;
          $(".openingSearch").css("top", openvar);
          
          if(openvar==-100){
            clearInterval(openfunction);
            $(".openingSearch").css("display", "none");
          }     
          },5);
        });

      });     
      function openNav() {
        if (screen.width < 600) {
          document.getElementById("myNav").style.width = "100%";
        } 
        else if (screen.width < 992) {
          document.getElementById("myNav").style.width = "50%";
        }
        else{
          document.getElementById("myNav").style.width = "30%";
        }
      }
      //yan menü kapatma
      function closeNav() {
        document.getElementById("myNav").style.width = "0%";
      }