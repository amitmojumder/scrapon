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
                  <div class="dash-subheader clearfix"> <!--dash sub header start here-->
                    <span class="suv-history">History</span> 
                    <div class="history-checkbox">
                      <form class="custom">
                         <label for="checkbox21">
                            <input type="checkbox" id="chekcbox21" style="display:none" />
                            <span class="custom checkbox"></span>Purchase 
                          </label>
                           <label for="checkbox21">
                            <input type="checkbox" id="chekcbox21" style="display:none" />
                            <span class="custom checkbox"></span>Sales 
                          </label>
                           <label for="checkbox21">
                            <input type="checkbox" id="chekcbox21" style="display:none" />
                            <span class="custom checkbox"></span>Credit Deposits 
                          </label>
                           <label for="checkbox21">
                            <input type="checkbox" id="chekcbox21" style="display:none" />
                            <span class="custom checkbox"></span>Credit Deposits
                          </label>
                      </form>
                    </div> 
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
                  <table class="history-table" width="100%">
                      <tr>
                        <th>Date</td>
                        <th>Type</td>
                        <th>Description</td>
                        <th>Amount</td>
                      </tr>
                      <tr>
                        <td>Jan 27, 2013</td>
                        <td>Purchase</td>
                        <td class="pink">Vintage Photo Corners Vector Set #7</td>
                        <td>$17.00</td>
                      </tr>
                      <tr>
                        <td>Jan 22, 2013</td>
                        <td>Purchase</td>
                        <td class="pink">Back In Blue Backgrounds</td>
                        <td>$2.00</td>
                      </tr>
                      <tr>
                        <td>Jan 12, 2013</td>
                        <td>Sale</td>
                        <td class="pink">Vintage Embellishments</td>
                        <td>$12.00</td>
                      </tr>
                      <tr>
                        <td>Jan 08, 2013</td>
                        <td>Sale</td>
                        <td class="pink">Baby Boy Birthday Announcement</td>
                        <td>$9.00</td>
                      </tr>
                      <tr>
                        <td>Jan 01, 2013</td>
                        <td>Sale</td>
                        <td class="pink">Baby Boy Birthday Announcement</td>
                        <td>$9.00</td>
                      </tr>
                      <tr>
                        <td>Dec 13, 2012</td>
                        <td>Cashout</td>
                        <td>to PayPal account katja@2epic.com</td>
                        <td>$120.00</td>
                      </tr>
                      <tr>
                        <td>Dec 02, 2012</td>
                        <td>Sale</td>
                        <td class="pink">Baby Boy Birthday Announcement</td>
                        <td>$9.00</td>
                      </tr>
                      <tr>
                        <td>Oct, 31, 2012</td>
                        <td>Purchase</td>
                        <td class="pink">Western Grunge Brushes IV</td>
                        <td>$12.00</td>
                      </tr>
                      <tr>
                        <td>May 02, 2012</td>
                        <td>Purchase</td>
                        <td class="pink">Chrome Layer Styles Set</td>
                        <td>$2.00</td>
                      </tr>
                      <tr>
                        <td>April 28, 2012</td>
                        <td>Credit Deposit</td>
                        <td>$20.00 Credit Deposit via PayPal</td>
                        <td>$20.00</td>
                      </tr>
                    </table>
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
        </div>        
  		
<?php include 'footer.php'; ?>   