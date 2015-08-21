 <?php $Username=$_COOKIE["Username"]; ?>
<?php if ($Username): ?>  
                                                          
      
<?php 



$Username=$_COOKIE["Username"]; 
 $target_path = '/project/'.$Username.'/';
 $play=$_GET["play"]; 
$src=$target_path.$play;

 $play1=$_GET["play1"]; 
$src1=$target_path.$play1;

 chdir($target_path);
 // foreach (glob("*.mp4") as $filename) {
 //    // echo "$filename" . filesize($filename) . "\n";
 //        echo $play=$filename;
 //    }



?>

<!DOCTYPE HTML>
<html>
<head>

    <meta charset="utf-8">
    <title>Upload an Image</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Html5TemplatesDreamweaver.com">

    <link href="../photoui/scripts/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../photoui/scripts/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="../photoui/Drozone-downloads/css/dropzone.css" type="text/css" rel="stylesheet" />
    <script src="../photoui/Drozone-downloads/dropzone.min.js"></script>
 

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Icons -->
    <link href="../photoui/scripts/icons/general/stylesheets/general_foundicons.css" media="screen" rel="stylesheet" type="text/css" />  
    <link href="../photoui/scripts/icons/social/stylesheets/social_foundicons.css" media="screen" rel="stylesheet" type="text/css" />
    <!--[if lt IE 8]>
        <link href="scripts/icons/general/stylesheets/general_foundicons_ie7.css" media="screen" rel="stylesheet" type="text/css" />
        <link href="scripts/icons/social/stylesheets/social_foundicons_ie7.css" media="screen" rel="stylesheet" type="text/css" />
    <![endif]-->
    <link rel="stylesheet" href="../photoui/scripts/fontawesome/css/font-awesome.min.css">
    <!--[if IE 7]>
        <link rel="stylesheet" href="scripts/fontawesome/css/font-awesome-ie7.min.css">
    <![endif]-->

    <link href="../photoui/scripts/carousel/style.css" rel="stylesheet" type="text/css" /><link href="../photoui/scripts/camera/css/camera.css" rel="stylesheet" type="text/css" />
    <link href="../photoui/scripts/wookmark/css/style.css" rel="stylesheet" type="text/css" />  <link href="../photoui/scripts/yoxview/yoxview.css" rel="stylesheet" type="text/css" />

    <link href="http://fonts.googleapis.com/css?family=Syncopate" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Abel" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Maven+Pro" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">

    <link href="../photoui/styles/custom.css" rel="stylesheet" type="text/css" />   
    
</head>
<body id="pageBody">

<div id="divBoxed" class="container">

    <div class="transparent-bg" style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;z-index: -1;zoom: 1;"></div>

    <div class="divPanel notop nobottom">
            <div class="row-fluid">
                <div class="span12">                    

                    <!--Edit Site Name and Slogan here-->
                    <div id="divLogo">

                <a href="../photoui/index.html" id="divSiteTitle"><?php echo  $Username ?></a><br />

                        <a href="../photoui/index.html" id="divTagLine">Share your memories !!!!</a>
                    </div>

                </div>
            </div> 
            
            <div class="row-fluid">
                <div class="span12">                
                    <div class="centered_menu">                      
                    <!--Edit Navigation Menu here-->
                    <div class="navbar">
                        <button type="button" class="btn btn-navbar-highlight btn-large btn-primary" data-toggle="collapse" data-target=".nav-collapse">
                            NAVIGATION <span class="icon-chevron-down icon-white"></span>
                        </button>
                        <div class="nav-collapse collapse">
                            <ul class="nav nav-pills ddmenu">
                                
                                <li><a href="clientpage.php">Home</a></li>  
                                <li><a href="uploadForm.php">Uploads</a></li>   
                                <li><a href="replicatepage.php">Data replication</a></li>                           
                                <li><a href="galleryset.php">Gallery</a></li>
                                <li><a href="signout.php">Sign Out</a></li>  
                             
                            </ul>
                        </div>
                    </div>                     
                    </div>
                </div>
            </div>

            <div class="row-fluid">
            <div class="span12">

                <div id="headerSeparator"></div>
                <form action="uploader.php" class="dropzone" name="<?php echo  htmlspecialchars($_GET["Username"]) ; ?>">

</form>
               

                <div id="divHeaderText" class="page-content">
                    <div id="divHeaderLine1">Cherishing Memories</div>
                    </br>
                    <div id="divHeaderLine2">Let's live and share happiness</div><br />                    
                </div>
                
                <hr>

                <div id="headerSeparator2"></div>                       
                
            </div>
        </div>
    </div>


    <div class="contentArea">

        <div class="divPanel notop page-content"> 
         
         <!--    <div class="row-fluid">
                <div class="span12" id="divMain"> -->
                <!--Edit Main Content here-->
                    
                        <div class="text-center">
                                        <h3>Your Recent Videos</h3>
                        </div>
                        <br>
                        <div id="page-wrapper">
            <!--Edit Latest Content Area here-->            
                        <div class="row-fluid">
                                    <center><table>
                                     <tr>     
                                          <td><label for="default">Play a video</label></td>

                                    <td>
                                          <form action="uploadForm.php" method="get"> 
                                                      <?php 
                                                     echo '<td>'; echo '<input type="text" name="play" id="default" list="languages" value="" placeholder="Type video name">';
                                                     echo '</td>';
                                                        echo '<datalist id="languages">';
                                                        foreach (glob("*.mp4") as $filename) {
                                                        // echo "$filename" . filesize($filename) . "\n";
                                                            // echo $play=$filename;
                                                            echo '<option value='.$filename.'>';
                                                        }
                                                        echo '</datalist>';   ?>
                                                       
                                    </td></tr>
                                    
                                    </center></table>

                                    <br>
                                        <center><button class="btn btn-large btn-primary btn-right">Play now</button></center>

                                         </form>
  <br>
    <br>
                                    <center><video width="600" height="300" controls="controls" controls autoplay>
                                        <source src="http://photofire.net/<?php echo  $src ?>" type="video/mp4">
                                        <!-- <source src="/Users/pradil90/Desktop/test2.ogg" type="video/ogg"> -->
                                        Your browser doesn't support HTML5 Video
                                      </video>
                                  </center>

                                  <br>

                                  
                                   
                             
                                  <hr>
                                  <br>



                                  <div class="text-center">
                                        <h3>Your Recent Melodies</h3>
                                    </div>

                                <center><table>
                                     <tr>     
                                          <td><label for="default">My Song:</label></td>

                                            <td>
                                            <form action="uploadForm.php" method="get"> 
                                                      <?php 
                                                     echo '<td>'; echo '<input type="text" name="play1" id="default" list="languages1" value="" placeholder="My song">';
                                                     echo '</td>';
                                                        echo '<datalist id="languages1">';
                                                        foreach (glob("*.mp3") as $filename1) {
                                                        // echo "$filename" . filesize($filename) . "\n";
                                                            // echo $play=$filename;
                                                            echo '<option value='.$filename1.'>';
                                                        }
                                                        echo '</datalist>';   ?>
                                                       
                                            </td></tr>
                                    
                                    </center></table>

                                    <br>
                                        <center><button class="btn btn-large btn-primary btn-right">Start listening</button></center>

                                         </form>

                                    <br>
                                  <center><audio controls="controls">
                                    <!-- <source src="horse.ogg" type="audio/ogg"> -->
                                    <source src="http://photofire.net/<?php echo  $src1 ?>" type="audio/mpeg">
                                    Your browser doesn't support HTML5 Audio
                                </audio></center>
                <br>
                        </div>          
            <br>
            <!-- promo-box -->          
            <div class="row-fluid">
                
                <div class="span12">            
                <div class="shout-box">
                    <div class="row-fluid">
            
                    <div class="span9">
                    <h2>I love deadlines. I like the whooshing sound they make as they fly by.</h2>
                    <!-- <p><em>If you’re a procrastinator like Douglas Adams, this quote probably made you laugh.</em></p>                -->
                    </div>
              
                    <div class="span3">
                    <a href="#" class="btn btn-large btn-primary btn-right">About Mavericks</a>                
                    </div>                    
                          
                    </div>          

                    </div>
                </div>                
            </div>
                 
                
                </div>

            </div>
            <!--End Main Content Area here-->
            
            <!--Edit Footer here-->
            <div id="footerInnerSeparator"></div>
        </div>
    </div>

    <div id="footerOuterSeparator"></div>

    <div id="divFooter" class="footerArea shadow">

        <div class="divPanel">

            <div class="row-fluid">
               
                 <div class="span3" id="footerArea3">

                  
                </div>
                

                 <div class="span3" id="footerArea1">
                
                    <h3>About Us</h3>

                    <p>San Jose State University</p>
                    <p>Team:Mavericks</p>
                    
                    <p> 
                        <a href="#" title="Terms of Use">Terms of Use</a><br />
                        <a href="#" title="Privacy Policy">Privacy Policy</a><br />
                        <a href="#" title="FAQ">FAQ</a><br />
                        <a href="#" title="Sitemap">Sitemap</a>
                    </p>

                </div>
                <div class="span3" id="footerArea4">

                    <h3>Get in Touch</h3>  
                                                               
                    <ul id="contact-info">
                    <li>                                    
                        <i class="general foundicon-phone icon"></i>
                        <span class="field">Phone:</span>
                        <br />
                        (123) 456 7890 / 456 7891                                                                      
                    </li>
                    <li>
                        <i class="general foundicon-mail icon"></i>
                        <span class="field">Email:</span>
                        <br />
                        <a href="mailto:info@yourdomain.com" title="Email">pradil90@gmail.com</a>
                    </li>
                    <li>
                        <i class="general foundicon-home icon" style="margin-bottom:50px"></i>
                        <span class="field">Address:</span>
                        <br />
                        San Jose State University<br />
                        One Washington Square <br />
                        CA
                    </li>
                    </ul>

                </div>




                <div class="span3" id="footerArea3">

                  
                </div>
                
            </div>

            <br /><br />
            <div class="row-fluid">
            <div class="span12">
            <p class="copyright"> 
            Copyright © 2014 Your Company. All Rights Reserved.
            </p>

            <div class="social_bookmarks">                    
                <a href="#"><div class="icon_twitter"></div></a>
                <a href="#"><div class="icon_facebook"></div></a>
                <a href="#"><div class="icon_google"></div></a>
                <a href="#"><div class="icon_pinterest"></div></a>                   
            </div>
            </div>
            </div>

        </div>
    </div>
</div>
<br /><br /><br />

<script src="../photoui/scripts/jquery.min.js" type="text/javascript"></script> 
<script src="../photoui/scripts/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../photoui/scripts/default.js" type="text/javascript"></script>

<script src="../photoui/scripts/carousel/jquery.carouFredSel-6.2.0-packed.js" type="text/javascript"></script><script type="text/javascript">$('#list_photos').carouFredSel({ responsive: true, width: '100%', scroll: 2, items: {width: 320,visible: {min: 2, max: 6}} });</script><script src="../photoui/scripts/camera/scripts/camera.min.js" type="text/javascript"></script>
<script src="../photoui/scripts/easing/jquery.easing.1.3.js" type="text/javascript"></script>
<script type="text/javascript">function startCamera() {$('#camera_wrap').camera({ fx: 'simpleFade, mosaicSpiralReverse', time: 2000, loader: 'none', playPause: false, navigation: true, height: '38%', pagination: true });}$(function(){startCamera()});</script>

<script src="../photoui/scripts/wookmark/js/jquery.wookmark.js" type="text/javascript"></script>
<script type="text/javascript">$(window).load(function () {var options = {autoResize: true,container: $('#gridArea'),offset: 10};var handler = $('#tiles li');handler.wookmark(options);$('#tiles li').each(function () { var imgm = 0; if($(this).find('img').length>0)imgm=parseInt($(this).find('img').not('p img').css('margin-bottom')); var newHeight = $(this).find('img').height() + imgm + $(this).find('div').height() + $(this).find('h4').height() + $(this).find('p').not('blockquote p').height() + $(this).find('iframe').height() + $(this).find('blockquote').height() + 5;if($(this).find('iframe').height()) newHeight = newHeight+15;$(this).css('height', newHeight + 'px');});handler.wookmark(options);handler.wookmark(options);});</script>
<script src="../photoui/scripts/yoxview/yox.js" type="text/javascript"></script>
<script src="../photoui/scripts/yoxview/jquery.yoxview-2.21.js" type="text/javascript"></script>
<script type="text/javascript">$(document).ready(function () {$('.yoxview').yoxview({autoHideInfo:false,renderInfoPin:false,backgroundColor:'#ffffff',backgroundOpacity:0.8,infoBackColor:'#000000',infoBackOpacity:1});$('.yoxview a img').hover(function(){$(this).animate({opacity:0.7},300)},function(){$(this).animate({opacity:1},300)});});</script>

</body>
</html>

<?php else: ?>
             
              <script type="text/javascript">
            window.location.href = "http://photofire.net/index.html"
        </script>
                                                            
                                    <?php endif ?>