<script language="Javascript">

          MyBanners=new Array('ad1.png','ad2.png','ad3.png')
          banner=0
          function ShowLinks(){

          //  var url="http://exam.ioe.edu.np";
      //  document.location.href="http://exam.ioe.edu.np";
        // window.open(url, '_blank');

          }

          function ShowBanners()
          { if (document.images)
            { banner++
              if (banner==MyBanners.length) {
                   banner=0}
             document.ChangeBanner.src=MyBanners[banner]
                 setTimeout("ShowBanners()",1200)
              }

           }
</script>





