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
                <span class="suv-following">Following<span class="ash">(7)</span></span>
                <span class="cat-search right">
                  <div class="search-arrow">
                    <select>
                      <option>Sort result</option>
                      <option>Date</option>
                      <option>Price</option>
                      <option>Popularity</option>
                    </select>
                  </div>
                </span>
              </div> <!--dash sub header end here-->
              <hr> 
              <ul class="follower-list clearfix">
                <li>
                  <a href="#"><img src="image/commentimage/image1.jpg" class="img-border2" alt="image1" /></a>
                  <span class="blakish">shopDanboard</span>
                  <span class="ash">member</span>
                  <a href="#" class="follow-cross"></a>
                </li>
                <li>
                  <a href="#"><img src="image/commentimage/image1.jpg" class="img-border2" alt="image1" /></a>
                  <span class="blakish">shopDanboard</span>
                  <span class="pink">shop</span>
                  <a href="#" class="follow-cross"></a>
                </li>
                <li>
                  <a href="#"><img src="image/commentimage/image1.jpg" class="img-border2" alt="image1" /></a>
                  <span class="blakish">shopDanboard</span>
                  <span class="ash">member</span>
                  <a href="#" class="follow-cross"></a>
                </li>
                <li>
                  <a href="#"><img src="image/commentimage/image1.jpg" class="img-border2" alt="image1" /></a>
                  <span class="blakish">shopDanboard</span>
                  <span class="pink">shop</span>
                  <a href="#" class="follow-cross"></a>
                </li>
                 <li>
                  <a href="#"><img src="image/commentimage/image1.jpg" class="img-border2" alt="image1" /></a>
                  <span class="blakish">shopDanboard</span>
                  <span class="pink">shop</span>
                  <a href="#" class="follow-cross"></a>
                </li>
                <li>
                  <a href="#"><img src="image/commentimage/image1.jpg" class="img-border2" alt="image1" /></a>
                  <span class="blakish">shopDanboard</span>
                  <span class="pink">shop</span>
                  <a href="#" class="follow-cross"></a>
                </li>
              </ul>
              <ul class="follower-list clearfix">
                <li>
                  <a href="#"><img src="image/commentimage/image1.jpg" class="img-border2" alt="image1" /></a>
                  <span class="blakish">shopDanboard</span>
                  <span class="ash">member</span>
                  <a href="#" class="follow-cross"></a>
                </li>
              </ul>
              <ul class="pager">
                  <li><a href="#">Previous</a></li>
                  <li>
                    <span class="view-result">Viewing results<span class="blakish">&nbsp;1- </span>&nbsp;<span class="blakish">18</span>&nbsp;of&nbsp;<span class="blakish"> 1,215</span></span>
                  </li>
                  <li><a href="#">Next</a></li>
                </ul>
            </div>
          </div>
        </div>        
  		
<?php include 'footer.php'; ?>   