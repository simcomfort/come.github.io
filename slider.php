<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/style2.css.css">
  <!-- fontawesome link -->
  <script src="https://kit.fontawesome.com/e6bbfbc7ad.js" crossorigin="anonymous"></script>
  
  <title></title>
</head>
<body>
<!-- slider -->
    <div class="post-slider">
      	<h2 class="slider-title">Trending Posts</h2>
      	<i class="fas fa-chevron-Right next"></i>
      	<i class="fas fa-chevron-left previ"></i>
        
        <!-- post wrapper -->
        <div class="post-wrapper">
      	    <div class="post">
      		   <div class="course_demo1">
      <ul id="flexiselDemo1">
        <?php getbottomsliderposts("blogs");?>
      </ul>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="embed-responsive embed-responsive-21by9">
              <iframe src="https://www.youtube.com"></iframe>
            </div>
          </div>

        </div>
      </div>
    </div>
    </div>

<!-- slick slide-->
                            <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        

              <!-- //Custom-JavaScript-File-Links -->
             

              <script src="js/scripts.js"></script>

</body>
</html>



   
