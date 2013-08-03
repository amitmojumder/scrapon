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
              <div class="dash-subheader clearfix"> <!--dash sub header start here-->
                <span class="suv-mail">Message <span class="ash"> &raquo; Subject of the message</span></span>
                <div class="right">
                  <a href="#"> &raquo; Back to message</a>
                </div>
              </div> <!--dash sub header end here-->
              <hr> 
              <ul class="comment message-list-comment">
                <li class="clearfix">
                    <div class="comment-img">
                      <img src="image/commentimage/image1.jpg" alt="image" class="img-border2"/>
                    </div>
                    <div class="comment-detail">
                      <p><span class="blakish">AwesomeAusi</span>January 2, 2013</p>
                      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>

<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
                     
                    </div>
                </li>
                <li class="clearfix">
                    <div class="comment-img">
                      <img src="image/commentimage/image1.jpg" alt="image" class="img-border2"/>
                    </div>
                    <div class="comment-detail">
                      <p><span class="blakish">AwesomeAusi</span>January 2, 2013</p>
                      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat - limited to 2 lines of characters before...</p>
                    </div>
                </li>
                <li class="clearfix">
                    <div class="comment-img">
                      <img src="image/commentimage/image1.jpg" alt="image" class="img-border2"/>
                    </div>
                    <div class="comment-detail">
                     <textarea></textarea>
                     <input type="submit" class="btn" value="submit reply" />
                    </div>
                </li>
              </ul>                        
            </div>
          </div>
        </div>        
  		
<?php include 'footer.php'; ?>   