                      },
                      error: function(errorThrown) {
                       alert(errorThrown);
                      }
                 });
                 return false;
           });
         
             document.addEventListener( 'wpcf7submit', function( event ) {
               if ( '404' == event.detail.contactFormId ) {
                    var cont_number= $('.carrer-contact').val();
                   // do something productive
               }
           }, false );
         });
         jQuery(document).ready(function(){
            $(document).on('click','.tmclientImage-full',function(){
                 $('.video_iframe,.vid_overlay,.close_video').fadeIn();
                     $('.tabcontent').removeClass('show');
                     var data_thumb = $(this).attr('data-thumb');
                     var video_len= $('.video_iframe video').length;
                     for(var i=1;i<=video_len;i++) {
                         var vddata_thumb = $('.iframe-'+i).attr('data-thumb');
                         if(data_thumb == vddata_thumb) {
                             $('#tab-'+vddata_thumb).addClass('show');
                      }
                 }
              });
           $('.vid_overlay,.close_video').on('click',function() {
             $('.video_iframe,.close_video,.vid_overlay').fadeOut();
            });
         
         }); 
          
      </script>
      <script>
         $('.count').each(function () {
         $(this).prop('Counter',0).animate({
         Counter: $(this).text()
         }, {
         duration: 6000,
         easing: 'swing',
         step: function (now) {
            $(this).text(Math.ceil(now));
         }
         });
         });
      </script>

      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   </body>
</html>
