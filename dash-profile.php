<?php include 'header.php'; ?>
<script type="text/javascript">
$(document).ready(function($){
	  $('#accordion-1').dcAccordion({
		  eventType: 'click',
		  autoClose: true,
		  saveState: true,
		  disableLink: true,
		  speed: 'slow',
		  showCount: true,
		  autoExpand: true,
		  cookie	: 'dcjq-accordion-1',
		  classExpand	 : 'dcjq-current-parent'
	  });
});
</script>
        <div class="container">
          <div class="row">
            <div class="span-sidebar"> <!--category sidebar start here-->            
              <div class="dash-cat">
                <ul class="accordion"  id="accordion-1">
                  <li class="dashboard"><a href="#">dashboard</a><span class="menu-arrow"></span></li>
                  <li class="purchase"><a href="#">purchase<span class="pink"> 2 new! </span></a></li>
                  <li class="message"><a href="#">message <span class="pink"> 20 new! </span></a>                    
                  </li>
                  <li class="account"><a href="#">my account</a>
                    <ul>
                      <li><a href="#">profile</a></li>
                      <li><a href="#">change password</a></li>
                      <li><a href="#">email preferences</a> </li>
                      <li><a href="#">account history</a></li>
                    </ul>
                  </li>
                  <li class="myshop"><a href="#">my shop</a>
                    <ul>
                      <li><a href="#">shop settings</a></li>
                      <li><a href="#">my products</a></li>
                      <li><a href="#">new product</a></li>
                      <li><a href="#">sales</a></li>
                      <li><a href="#">cashout</a></li>
                    </ul>
                  </li>
                  <li class="scrapbox"><a href="#">scrapbox</a></li>
                  <li class="following"><a href="#">following</a></li>
                  <li class="follwers"><a href="#">followers</a></li>
                  <li class="comments"><a href="#">my comments</a></li>
                </ul>
              </div>
            </div> <!--category sidebar end here-->
            <div class="span-content">
               <div class="dash-header"> <!--dahsheader start here-->
                  <h3>Welcome Katja, it's great to see you again!</h3>
               </div> <!--dash header end here-->
               <div class="clearfix dashboard-phase">
                  <div class="dash-395">
                    <div class="dash-subheader clearfix"> <!--dash sub header start here-->
                      <span class="suv-pro">Profile Info</span>                
                    </div> <!--dash sub header end here-->
                    <hr>
                    <div class="contact-block">
                       <form>
                         <label for="p-u-name">user name</label>
                         <input class="" type="text" id="p-u-name" />
                         <label for="p-f-name">first name</label>
                         <input class="" type="text" id="p-f-name" />
                         <label for="p-l-name">last name</label>
                         <input class="" type="text" id="p-l-name" />
                         <label for="p-mail">email</label>
                         <input class="" type="text" id="p-mail" />
                         <label for="p-loca">location</label>
                         <input class="" type="text" id="p-loca" />
                         <label for="p-bio">bio<br><span class="sub-header">300 char max</span></label>
                         <textarea id="p-bio"></textarea>
                         <input type="button" class="btn" value="update profile" />                         
                       </form>
                    </div>
                   
                  </div> 
                  <div class="dash-325">
                    <div class="dash-subheader clearfix"> <!--dash sub header start here-->
                      <span class="suv-pic">Profile Picture</span>
                    </div> <!--dash sub header end here-->
                    <hr>
                    <div class="profile-block clearfix">
                      <div class="pro_pic_img">
                        <img src="image/con-profile.jpg" class="img-border" alt="profile picture"/> 
                      </div>
                      <div class="upload left">
                        <a href="#" class="btn">upload</a> 
                        <a href="#" class="megento">delete</a>
                        <span>200X200px jpg please</span>
                      </div>
                    </div>             
                    <div class="dash-subheader clearfix"> <!--dash sub header start here-->
                      <span class="suv-social">Social Profiles</span>
                    </div> <!--dash sub header end here-->
                    <hr>
                    <p>Add a social profile below to display it in your profile.</p>
                    <div class="social-profile">
                      <label class="s-twitter">twitter <br><span class="sub-header">300 char max</span></label>
                      <input type="text" id="s-twitter"/>
                      <label class="s-facebook">facebook <br><span class="sub-header">full URL please</span></label>
                      <input type="text" id="s-facebook"/>
                      <label class="s-pinterest">pinteresr <br><span class="sub-header">300 char max</span></label>
                      <input type="text" id="s-pinterest"/>
                    </div>
                  </div>                  
               </div>
            </div>
          </div>
        </div>        
  		
<?php include 'footer.php'; ?>   