
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
                  <div class="bar" style="width:12%;">
                  
                  </div>
                </div>
                <span class="completion">12% complete</span>
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
                    <span class="blakish">category/Subcategory</span>
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
                        <a href="#" class="add-img">add your main image<br><span class="ash">optimal product image size is 750X495 pixels</span></a>
                    </div>
                    <div class="secondary-img">
                      <ul>
                        <li class="addimage">
                          <a href="#">add image</a>
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
                  <textarea id="pro-des" class="expand" placeholder="Give your product a description
"></textarea>
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
              </div>
                <div class="add-feature">
                  <a href="#">Add A Feature</a>
                </div>
                <div class="add-tag">
                  <h5>Add Tags<img src="image/tooltipwhat.png" alt="tooltip"/></h5>
                  <input type="text" value="Type a tag and press enter...">
                </div>
              </div>
            </div> <!--category sidebar end here-->
          </div>
        </div>  
        <div class="container">
            <div class="row">
              <div class="span6">
                <div class="progress">
                  <div class="bar" style="width:12%;">
                  
                  </div>
                </div>
                <span class="completion">12% complete</span>
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
<?php include 'footer.php'; ?>   
