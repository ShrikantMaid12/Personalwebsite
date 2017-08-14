<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-10" />
<title>My Personal Webpage</title>

<link href="my.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>
</head>
<body>

<div id="container">
    
    <div id="header">
        <div id="site_title">
        <MARQUEE behavior="scroll" direction="left" width="890" scrollamount="4.5"> &nbsp;    Shrikant Maid</MARQUEE>
        </div>
    </div> <!-- end of header panel -->
    
    <div id="menu">
        <ul>
            <li><a href="index.htm">Home</a></li>
            <li><a href="profile.htm">Profile</a></li>
            <li><a href="gallery.htm">Gallery</a></li>
            <li><a href="project.html">Projects</a></li>
            <li><a href="about.php"  class="current">Contact</a></li>
           
        </ul>
    
    </div> <!-- end of menu -->
    
    <div id="top_panel">

        <div id="main6">
         <div class="sec6">
                    
                    
     <h2>Latest News</h2> 
        <div class="news">
            <div class="news_icon"><img src="images/testimonials_icon.gif" alt="" title="" /></div>   
            <div class="news_content">    
            <p>Another controversy mars the Metro Manila Film Festival, this year’s centers on the Best Picture. Laguna Gov. ER Ejercito raises the Best Film trophy. RICHARD REYES...<a href="latest news.htm">Read more</a></p> 

</div>
        </div>  
        
        
 
 
         <div class="news">
            <div class="news_icon"><img src="images/testimonials_icon.gif" alt="" title="" /></div>   
            <div class="news_content">    
<p>Traders blow paper horns as they celebrate the last trading day of 2011 at the Philippine Stock Exchange in Makati City on Thursday. The Philippine stock market was the best performer in Southeast Asia. AFP...<a href="latest news1.htm">Read more</a></p> 
            </div>
        </div>  
       
 
 
        <div class="news">
            <div class="news_icon"><img src="images/testimonials_icon.gif" alt="" title="" /></div>   
            <div class="news_content">  
<p>President Aquino troops the line during the flag-raising rites on the 115th death anniversary of national hero Jose Rizal at Rizal Park in Manila on Friday. Rizal was sentenced to die by firing squad by the Spanish colonial government after...<a href="latest news2.htm">Read more</a></p>          
</div>
        </div>  
       
        <div class="news">
            <div class="news_icon"><img src="images/testimonials_icon.gif" alt="" title="" /></div>   
            <div class="news_content">  
<p>BEFORE AND AFTER VIEWS Satellite and aerial shots of a bend of the Cagayan de Oro River which suffered the brunt of the deadly flash flood triggered by “Sendong” early dawn of Dec. 17. ...<a href="latest news3.htm">Read more</a></p>             
</div>
        </div> 
 
                </div>
                
                </div>
                
                 <div id="main4">
            <div class="box">
             <div class="section">
            <h2>Contact Information</h2>
            <div class="contact_info_box">
                <div class="contact_info_title"></div>  
            <div class="contact_info">
            <img src="images/phone_icon.gif" alt="" title="" class="box_img" />
           <strong>+919890964512</strong>
          
            </div>
            
             <div class="contact_info">
            <img src="images/contact_icon.gif" alt="" title="" class="box_img" />
            <strong>maidshrikant99@gmail.com</strong>
            
            </div> 
            
            <div class="adress">
           &nbsp; <strong>Kalyaninagar, pune 411001</strong>
            </div>

            </div>
            <div class="container">  
  
    <h3> Contact US</h3>
<form action="about.php" method="post">
<table>
<tr>
<td>
 <label>Name:</label>
  <td><input type="text" name="u_name" required></td>
 </td>
 </tr>
 <tr>
 <td>
 <label>Email:</label>
  <td><input type="email" name="u_email" required ></td>
 </td>
 </tr>
 <tr>
 <td>
<label>Subject:</label>
  <td><input type="text" name="subj" required></td>
 </td>
 </tr>
 <tr>
 <td>
<label>Message:</label>
  <td><input type="text" name="message"></td>
  </td>
  </tr>
  <tr>
  <td>
<input type="submit" value="Submit"><br>
</td>
</tr>
</table>
</form>
  <?php
 
require 'connection.php';
$conn    = Connect();
 
  die("Your request has been sucessfully sent");
 
$conn->close();
 
?>
    </div> <!-- end of top panel -->
       
                </div>
                </div>
                
            </div>
       
    </div> <!-- end of top panel -->
    
    <div id="templatemo_bottom_panel">

                <div class="image_box_02">
                    
                </div>
      
    </div> <!-- end of bottom panel -->
    
    <div id="footer">    
        Copyright © 2017 by S.M. All Rights Reserved.
    </div> <!-- end of footer -->
    <!-- Free Website Templates @ TemplateMo.com -->
</div> <!-- end of container -->
</body>
</html>