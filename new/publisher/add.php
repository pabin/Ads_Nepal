
<script language="Javascript">

          MyBanners=new Array('1.jpg','2.jpg','3.jpg')

          banner=0
          function ShowLinks(){
          document.location.href="http://www.pcampus.edu.np"
          }

          function ShowBanners()
          { if (document.images)
            { banner++
              if (banner==MyBanners.length) {
                   banner=0}
             document.ChangeBanner.src=MyBanners[banner]
                 setTimeout("ShowBanners()",1000)
              }
           }
</script>



<body onload="ShowBanners()">
  <div id="main">
<center>
     <a href="javascript: ShowLinks()">
         <img src="1.jpg" width="400" height="250" name="ChangeBanner"/></a>
</center>

</div>
