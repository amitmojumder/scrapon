
<?php include 'header.php'; ?>

<script type="text/javascript">
$(function () {
	$("#select-cat,#select-subcat,#select-feature").selectbox();
});
</script>
        
  		
        <div class="progress-block"> <!--progress block start here-->
          <div class="container">
            <div class="row">
              <div class="span6">
                <div class="progress">
                  <div class="bar" style="width:100%;">
                  
                  </div>
                </div>
                <span class="completion">100% complete</span>
              </div>
              <div class="span6">
                <div class="add-product right">
                 <form class="custom">
                 <label for="checkbox21">
                   <input type="checkbox" id="chekcbox21" style="display:none">
                   <span class="custom checkbox"></span>Available for sale
                 </label>
                 <input type="button" class="btn" value="save as draft" />
                 </form>
                </div>
              </div>
            </div>
          </div>
          <hr>
          <div class="container">  
            <div class="row">
              <div class="span12">
                <h4 class="pro-head">add a new product</h4>
                <hr>
              </div>         
            </div>
          </div>
        </div> <!--progress block end here-->
        <div class="container">
          <div class="row"> 
            <div class="span-content"><!--left content start here-->
              <div class="clearfix">
                <div class="pro-title">
                  <label for="p-title">product title </label> 
                  <span class="tooltip">
                    <img src="image/tooltipwhat.png" alt="what"/>
                    <span class="tooltip-hover">Demo text demo text Demo text demo text Demo text demo text Demo text demo text Demo text demo text Demo text demo text Demo text demo text </span>
                  </span>
                  <input type="text" id="p-title" placeholder="Give your product a title" class="expand" />
                </div>
                <div class="pro-sub">
                  <div class="clearfix">
                    <span class="blakish">category/Subcategory </span>
                       <span class="tooltip">
                      <img src="image/tooltipwhat.png" alt="what"/>
                      <span class="tooltip-hover">Demo text demo text Demo text demo text Demo text demo text Demo text demo text Demo text demo text Demo text demo text Demo text demo text </span>
                    </span>
                  </div>
                  <div class="clearfix">
                    <div class="cat-box">
                      <select name="country_id" id="select-cat" tabindex="1">
                          <option value="">category</option>
                          <option>grapics</option>
                          <option>background</option>
                          <option>vector</option>
                      </select>
                    </div>
                    <div class="sub-cat-box">
                      <select name="country_id" id="select-subcat" tabindex="1">
                          <option value="">sub-category</option>
                          <option>grapics</option>
                          <option>background</option>
                          <option>vector</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="clearfix">
                <div class="product-image-block">
                  <span class="blakish">Product image <img src="image/tooltipwhat.png" alt="what" /></span>
                  <div class="clearfix">
                    <div class="product-load img-border5">
                        <img src="image/editimage.jpg" alt="image"/>
                        <a href="#" class="killimage"></a>
                    </div>
                    <div class="secondary-img">
                      <ul>
                        <li class="addimage">
                          <img src="image/adimagethumb.jpg" alt="addimage"/>
                          <a href="#" class="add-kill"></a>
                          <!--<a href="#">add image</a>-->
                        </li>
                        <li class="addimagehover">
                          <a href="#" class="ash">add image</a>
                        </li>
                        <li class="addimagehover">
                          <a href="#" class="ash">add image</a>
                        </li>
                        <li class="addimagehover">
                          <a href="#" class="ash">add image</a>
                        </li>
                        <li class="addimagehover">
                          <a href="#" class="ash">add image</a>
                        </li>
                        <li class="addimagehover">
                          <a href="#" class="ash">add image</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div> 
                <div class="product-image-block">
                  <label for="pro-des">Product Description</label> <img src="image/tooltipwhat.png" alt="what"/>
                  <textarea id="pro-des" class="expand" placeholder="This is the product description, we only allow <strong>, <a>, and <ul><li> in the product description. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, <strong>quis nostrud</strong> exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. 

Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii ."></textarea>
                </div>
              </div> 
            </div> <!--left content end here-->
            <div class="span-sidebar"> <!--category sidebar start here-->
              <div class="product-sidebar">
                <div class="clearfix price">
                  <label for="price">Price $</label><input type="text" id="price"/> .00 <img src="image/tooltipwhat.png" alt="tooltip"/>
                </div>
                <p class="blakish">source file</p><span class="tooltip">
                    <img src="image/tooltipwhat.png" alt="what"/>
                    <span class="tooltip-hover">Demo text demo text Demo text demo text Demo text demo text Demo text demo text Demo text demo text Demo text demo text Demo text demo text </span>
                  </span>
                <div class="upload-box img-border5">
                  <a href="#">upload your zip file</a>
                  <a href="#" class="kill"></a>
                </div>
                <div class="product-feature">
                <h5>product features</h5>
                <div class="pro-feat clearfix">
                  <span class="left">date added</span>
                  <span class="right">03.13.2013</span>
                </div>
                <div class="pro-feat clearfix">
                  <span class="left">license</span>
                  <a href="#" class="right">scrap simple</a>
                </div>
                <div class="pro-feat clearfix">
                  <span class="left">file size</span>
                  <span class="right">234MB</span>
                </div>
                <div class="pro-feat clearfix">
                  <span class="left">DPI</span>
                  <span class="right"><input type="text" class="edit-input" value="300 dpi" /></span>
                  <a href="#" class="kill"></a>
                </div>
                <div class="pro-feat clearfix">
                  <span class="left">resolution</span>
                  <span class="right"><input type="text" class="edit-input" value="2100X2400" /></span>
                  <a href="#" class="kill"></a>
                </div>
                <div class="pro-feat clearfix">
                  <span class="left">requires</span>
                  <span class="right"><input type="text" class="edit-input" value="adove cs4+" /></span>
                  <a href="#" class="kill"></a>
                </div>
                <div class="pro-feat clearfix">
                  <span class="left">file type</span>
                  <div class="right format">
                    <form class="custom">
                    <span class="left"> 
                      <label for="checkbox21">
                        <input type="checkbox" id="chekcbox21" style="display:none">
                        <span class="custom checkbox"></span>PNG 
                      </label>
                    </span>
                    <span class="left"> 
                      <label for="checkbox21">
                        <input type="checkbox" id="chekcbox21" style="display:none">
                        <span class="custom checkbox"></span>JPG
                      </label>
                    </span>
                    <span class="left"> 
                      <label for="checkbox21">
                        <input type="checkbox" id="chekcbox21" style="display:none">
                        <span class="custom checkbox"></span>EPS 
                      </label>
                    </span>
                    </form>
                    <a href="#" class="kill"></a>
                  </div>
                </div>
                <div class="pro-feat clearfix">
                  <span class="left">vector</span>
                  <span class="right">YES</span>
                  <a href="#" class="kill"></a>
                </div>
                <div class="pro-feat clearfix">
                  <span class="left">Tileable</span>
                  <span class="right">YES</span>
                  <a href="#" class="kill"></a>
                </div>
                <div class="pro-feat clearfix">
                  <span class="left">Layered</span>
                  <span class="right">YES</span>
                  <a href="#" class="kill"></a>
                </div>
              </div>
                <div class="add-feature">
                  <a href="#">Add A Feature</a>                  
                </div>
                <!--The commented portion is dropdown of add feture item according to your vedio. if you unncomment this code you will see that portion in browser.-->
                <!--I am not sure about how the data will manage with this dropdown so i just keep it under css style.-->
                <!--The programmer will decide how to show it-->
                 
                <!--<ul class="feature-list">
                  <li class="filetype"><a href="#">File Types</a></li>
                  <li class="requiement"><a href="#">Requirements</a></li>
                  <li class="layer"><a href="#">Layered</a></li>
                  <li class="tileable"><a href="#">Tileable</a></li>
                  <li class="dimension"><a href="#">Dimensions</a></li>
                  <li class="dpi"><a href="#">DPI</a></li>
                  <li class="vector"><a href="#">Vector</a></li>
                </ul>--> <!--feature list end here-->
                
                <div class="add-tag">
                  <h5>Add Tags<img src="image/tooltipwhat.png" alt="tooltip"/></h5>
                  <input type="text" value="Type a tag and press enter...">
                  <div class="refinment">
                    <span class="term"><a href="#" class="refine"></a>repeating pattern</span>
                    <span class="term"><a href="#" class="refine"></a>pink</span>
                    <span class="term"><a href="#" class="refine"></a>colorful design</span>
                  </div>
                </div>
              </div>
            </div> <!--category sidebar end here-->
          </div>
        </div>  
        <div class="container">
            <div class="row">
              <div class="span6">
                <div class="progress">
                  <div class="bar" style="width:100%;">
                  
                  </div>
                </div>
                <span class="completion">100% complete</span>
              </div>
              <div class="span6">
                <div class="add-product right">
                <form class="custom">
                 <label for="checkbox21">
                   <input type="checkbox" id="chekcbox21" style="display:none">
                   <span class="custom checkbox"></span>Available for sale
                 </label>
                 <input type="button" class="btn" value="save change" />
                 </form>
                </div>
              </div>
            </div>
          </div>      
  		</form>
<?php include 'footer.php'; ?>   
