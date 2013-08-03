  <!---------login modal start here------------> 
  
     <div id="loginModal" class="reveal-modal">
          <div class="modal_header">
            <button type="button" class="close-reveal-modal"></button>            
            <h4>login to your account</h4> 
          </div>
          <div class="modal-body">
              <p>Hey! We're glad you're back! please login below  </p>                               
              <form>
                <div class="contact_info">
                  <label for="mail">Email</label>
                  <input type="text" id="mail" />
                </div>
                <div class="contact_info">
                  <label for="pass">Password</label>
                  <input type="password" id="pass" />
                </div>
                <div class=" rg_btn clearfix">
                  <a href="#" class="btn left modal-link offset_18" data-reveal-id="regverificationModal">submit</a> <a href="#" data-reveal-id="forgottenpasswordModal" class="right pull_18">forgotten password?</a>
                </div>
              </form>
          </div>
       </div> <!--login modal-->       
                       
     <div id="forgottenpasswordModal" class="reveal-modal">
        <div class="modal_header">
          <button type="button" class="close-reveal-modal"></button>            
          <h4>forgotten passsword</h4> 
        </div>
        <div class="modal-body">
            <p class="text_inhrt">Don't know your password? No problem,just enter the email you signed up we will send you a resent link!  </p>
            <form>
              <div class="contact_info">
                <label for="y_mail">your email</label>
                <input type="text" id="y_mail" />
              </div>                              
              <div class=" rg_btn clearfix">
                <a href="#" class="btn modal-link offset_18" data-reveal-id="resetpasswordModal">Reset Password</a> <a href="#" data-reveal-id="loginModal" class="right pull_18">return to login</a>
              </div>
            </form>
        </div>                          
      </div> <!--forgotten password modal-->        
      
     <div id="resetpasswordModal" class="reveal-modal">
        <div class="modal_header">
          <button type="button" class="close-reveal-modal"></button>            
          <h4>reset your passsword</h4> 
        </div>
        <div class="modal-body">
            <p class="text_inhrt">Oh good, you got our email! Go ahead and choose a new password below...and try not to forget this one!:  </p>
            <form>
              <div class="contact_info">
                <label for="n-pass">new password</label>
                <input type="text" id="n-pass" />
              </div>
              <div class="contact_info">
                <label for="v-pass">verify password</label>
                <input type="text" id="v-pass" />
              </div>                              
              <div class=" rg_btn clearfix">
                <a href="#" class="btn left modal-link offset_18" data-reveal-id="wrongpasswordModal">set your password</a>
              </div>
            </form>
        </div>                          
      </div> <!--reset your password-->
      
     <div id="wrongpasswordModal" class="reveal-modal"><!-- warning message modal-->
        <div class="modal_header">
          <button type="button" class="close-reveal-modal"></button>            
          <h4>reset your passsword</h4> 
        </div>
        <div class="modal-body">
            <p class="text_inhrt">Oh good, you got our email! Go ahead and choose a new password below...and try not to forget this one!:  </p>
            <p class="pink">Oops! Passwords didn't match..Take another shot.</p>
            <form>
              <div class="contact_info">
                <label for="n-pass">new password</label>
                <input type="text" id="n-pass" class="error" />
              </div>
              <div class="contact_info">
                <label for="v-pass">verify password</label>
                <input type="password" id="v-pass" class="error" />
              </div>                              
              <div class=" rg_btn clearfix">
                <a href="#" class="btn left modal-link offset_18">set your password</a>
              </div>
            </form>
        </div>                          
      </div> <!--warning message modal--> 
   
   <!--------register modal start here--------->
   
     <div id="regModal" class="reveal-modal"> <!--for registration -->
        <div class="modal_header">
          <button type="button" class="close-reveal-modal"></button>            
          <h4>registration</h4>           
        </div>
        <div class="modal-body"> 
            <p>ScrapOn membership is free, easy and free!</p>                                          
            <form>
              <div class="contact_info">
                <label for="f-name">First Name</label>
                <input type="text" id="f-name" />
              </div>
              <div class="contact_info">
                <label for="l-name">Last Name</label>
                <input type="text" id="l-name" />
              </div>
              <div class="contact_info">
                <label for="r-mail">Email</label>
                <input type="text" id="r-mail" />
              </div>
              <div class="contact_info">
                <label for="u-name">Username</label>
                <input type="text" id="u-name" />
                <span class="u-name-avail">Sweet! That username is available</span> <!--here is styled portion of notification which will appeared right next to the username input box when filled up the box by user. According to spec functionality will setup by ajax-->
              </div>
              <div class="contact_info">
                <label for="u-pass">Password</label>
                <input type="password" id="u-pass" />
              </div>
              <div class=" rg_btn clearfix">
                <a href="#" class="btn left modal-link offset_18" data-reveal-id="wrongregModal">register</a> <span class="a-mem">allready a member?</span> <a href="#" data-reveal-id="loginModal" class="right pull_18">log in</a>
              </div>
            </form>
        </div>
     </div> <!--for registration-->
     
     <div id="wrongregModal" class="reveal-modal"> <!--for error registration -->
        <div class="modal_header">
          <button type="button" class="close-reveal-modal"></button>            
          <h4>registration</h4>           
        </div>
        <div class="modal-body"> 
            <p>ScrapOn membership is free, easy and free!</p>
            <div class="error-block">
              <span class="reg-error">Please enter a First Name</span>
              <span class="reg-error">Please enter a Last Name</span>
              <span class="reg-error">Please enter a Valid Email Address Name</span>
              <span class="reg-error">Please choose a Password</span>     
            </div>                                                 
            <form>
              <div class="contact_info">
                <label for="r-f-name">First Name</label>
                <input type="text" id="r-f-name" class="error" />
              </div>
              <div class="contact_info">
                <label for="r-l-name">Last Name</label>
                <input type="text" id="r-l-name" class="error" />
              </div>
              <div class="contact_info">
                <label for="r-r-mail">Email</label>
                <input type="text" id="r-r-mail" class="error" />
              </div>
              <div class="contact_info">
                <label for="r-u-name">Username</label>
                <input type="text" id="r-u-name" class="error" />
                <span class="u-name-navail">Sorry! That username is allready taken.</span><!--here is styled portion of notification which will appeared right next to the username input box when filled up the box by user. According to spec functionality will setup by ajax-->
              </div>
              <div class="contact_info">
                <label for="r-u-pass">Password</label>
                <input type="password" id="r-u-pass" class="error" />
              </div>
              <div class=" rg_btn clearfix">
                <a href="#" class="btn left modal-link offset_18" data-reveal-id="conregModal">register</a> <span class="a-mem">allready a member?</span> <a href="#" data-reveal-id="loginModal" class="right pull_18">log in</a>
              </div>
            </form>
        </div>
     </div> <!--for error regsitration-->
     
     <div id="conregModal" class="reveal-modal"> <!--notification message -->
        <div class="modal_header">
          <button type="button" class="close-reveal-modal"></button>            
          <h4>registration</h4>           
        </div>
        <div class="modal-body">                         
            <p class="black">Sweet!<br> We've just sent you a confirmation email which should land in your inbox any second now. simly click the verification link within that email and enjoy your membership</p><br>
            <p>If you're a gifted digital scapbooker and are interested in selling you wares <a href="#" class="a-shop">apply for a shop &raquo;</a></p>
        </div>
     </div> <!--notification message -->
   
   <!--------drop a note modal start here-------->
   
     <div id="droploginModal" class="reveal-modal">
        <div class="modal_header">
          <button type="button" class="close-reveal-modal"></button>            
          <h4>Drop Awesome Ausi a note</h4> 
        </div>
        <div class="modal-body">
            <p>You must be logged in to drop a note to another user. </p>                               
            <form>
              <div class="contact_info">
                <label for="mail">Email</label>
                <input type="text" id="mail" />
              </div>
              <div class="contact_info">
                <label for="pass">Password</label>
                <input type="password" id="pass" />
              </div>
              <div class=" rg_btn clearfix">
                <a href="#" class="btn left modal-link offset_18" data-reveal-id="regverificationModal">log in</a> <a href="#" data-reveal-id="forgottenpasswordModal" class="right pull_18">forgotten password?</a>
              </div>
              
                <p class="n-member">Not a member? <a href="#" data-reveal-id="regModal" class="a-shop">Register today</a>, it's free and awesome. </p>
              
            </form>
        </div>
     </div> <!--when the user is not logged in-->
     
     <!--below commented code is for the user who are logged in so i kept it commented and i think the programmer will decide how to make the logic-->
     
     <div id="droploginModal" class="reveal-modal">
        <div class="modal_header">
          <button type="button" class="close-reveal-modal"></button>            
          <h4>Drop Awesome Ausi a note</h4> 
        </div>
        <div class="modal-body">
            <p>Send a private messeage to this artist using the form below. </p>                               
            <form>
              <div class="contact_info">
                <label for="msg">Message</label>
                <textarea id="msg"></textarea>
              </div>
              <div class=" rg_btn clearfix">
                <a href="#" class="btn left modal-link offset_18" data-reveal-id="dropnotModal">send this note</a> 
              </div>                            
            </form>
        </div>
     </div> <!--when the user is logged in-->
     
     <div id="dropnotModal" class="reveal-modal">
        <div class="modal_header">
          <button type="button" class="close-reveal-modal"></button>            
          <h4>Success!</h4> 
        </div>
        <div class="modal-body">
            
            <p>Thank you,<br><br>Your message has been sent successfully. </p>                               
            
        </div>
     </div> <!--notiification after sending the message-->
     
   <!--------report this product modal start here-------->
     
     <div id="reportModal" class="reveal-modal"> 
        <div class="modal_header">
          <button type="button" class="close-reveal-modal"></button>            
          <h4>Report this product</h4> 
        </div>
        <div class="modal-body">
            <p>If you believe this product may be inviolation of our <a href="#" class="a-shop">term of use</a> please complete the form below.</p>			
            <p>Member's please <a href="#" class="a-shop" data-reveal-id="loginModal">log in</a> first</p>                               
            <form>
              <div class="contact_info">
                <label for="y-name">Your Name</label>
                <input type="text" id="y-name" />
              </div>
              <div class="contact_info">
                <label for="y-mail">Your Mail</label>
                <input type="text" id="y-mail" />
              </div>
              <div class="contact_info">
                <label>Reason code</label>
                <div class="r-select">
                  <select>
                    <option>--Select one--</option>
                    <option>--Select two--</option>
                    <option>--Select three--</option>
                  </select>
                </div>                
              </div>     
              <div class="contact_info">
                <label for="expln">Explaination</label>
                <textarea id="expln"></textarea>
              </div>
              <div class="rg_btn clearfix">
                <a href="#" class="btn left modal-link offset_18">standard button</a> 
              </div>
            </form>
        </div>
     </div><!--when the user is not logged in-->
     
     <!--when the user is logged in the user will see below interface of the modal. The programmer will decide how to show it-->
     
     <div id="reportinModal" class="reveal-modal"> 
        <div class="modal_header">
          <button type="button" class="close-reveal-modal"></button>            
          <h4>Report this product</h4> 
        </div>
        <div class="modal-body">
            <p>If you believe this product may be inviolation of our <a href="#" class="a-shop">term of use</a> please complete the form below.</p>	
            <form>              
              <div class="contact_info">
                <label>Reason code</label>
                <div class="r-select">
                  <select>
                    <option>--Select one--</option>
                    <option>--Select two--</option>
                    <option>--Select three--</option>
                  </select>
                </div>                
              </div>     
              <div class="contact_info">
                <label for="expln">Explaination</label>
                <textarea id="expln"></textarea>
              </div>
              <div class="rg_btn clearfix">
                <a href="#" class="btn left modal-link offset_18">standard button</a> 
              </div>
            </form>
        </div>
     </div> <!--when the user is logged in-->
     
     
     <div id="reportnotModal" class="reveal-modal"> 
        <div class="modal_header">
          <button type="button" class="close-reveal-modal"></button>            
          <h4>Report this product</h4> 
        </div>
        <div class="modal-body">
            <p>Thank you for your report.</p>
            <p>We take violations to the ScrapOn <a href="#" class="a-shop">term of use</a> very seriously and appreciate you taking the time to bring this issue to our attention. We will review your report and take any action necessary to resolve the issue.</p>	
            <p>it the issue requres a response from ScrapOn:</p>
            <p>Non-Members will receive response via email.</p>
            <p>if you are a logged in member, we will reply through the ScrapOn message system.</p>
            
        </div>
     </div><!--notification message-->
     
   <!---------scrapbox modal start here--------->
   
     <div id="scrapModal" class="reveal-modal"> 
          <div class="modal_header">
            <button type="button" class="close-reveal-modal"></button>            
            <h4>Add this item to a scrapbox</h4> 
          </div>
          <div class="modal-body">
              <p>You have 3 active scrapboxes<br><a href="#" class="f-10 pink">Add new one</a></p>
              <div class="prodcut-item">
                My Favorite Patterns
                <span class="product-meta">21 Products | <a href="#" class="pink">view all</a></span>
              </div> 
               <div class="prodcut-item">
                little girl birthday stuff
                <span class="product-meta">21 Products | <a href="#" class="pink">view all</a></span>
              </div>
               <div class="prodcut-item">
                vintage photo border
                <span class="product-meta">21 Products | <a href="#" class="pink">view all</a></span>
              </div>
          </div>
       </div><!--product item with product list-->
       
     <!--below are the rest of the modal with style and the programmer will decide how to make it working-->
       
     <!--<div id="scrapModal" class="reveal-modal">
          <div class="modal_header">
            <button type="button" class="close-reveal-modal"></button>            
            <h4>Add this item to a scrapbox</h4> 
          </div>
          <div class="modal-body">
              <p>You have 3 active scrapboxes<br><a href="#" class="f-10 pink">Add new one</a></p>
              <div class="prodcut-item added">
                My Favorite Patterns
                <span class="product-meta">21 Products | <a href="#" class="pink">view all</a></span>
              </div> 
               <div class="prodcut-item">
                little girl birthday stuff
                <span class="product-meta">21 Products | <a href="#" class="pink">view all</a></span>
              </div>
               <div class="prodcut-item">
                vintage photo border
                <span class="product-meta">21 Products | <a href="#" class="pink">view all</a></span>
              </div>
          </div>
       </div>--><!--product item with product list when it is added-->
       
     <!--<div id="scrapModal" class="reveal-modal">
          <div class="modal_header">
            <button type="button" class="close-reveal-modal"></button>            
            <h4>Add this item to a scrapbox</h4> 
          </div>
          <div class="modal-body">
              <p>You have 3 active scrapboxes<br><a href="#" class="f-10 pink">Add new one</a></p>
              <div class="add-new">
                <input type="text" value="Name your new scrapbook" /><input type="submit" class="btn" value="Add Scrapbook"/>
              </div> 
              <div class="prodcut-item">
                my favorite patterns
                <span class="product-meta">21 Products | <a href="#" class="pink">view all</a></span>
              </div>
              <div class="prodcut-item">
                little girl birthday stuff
                <span class="product-meta">21 Products | <a href="#" class="pink">view all</a></span>
              </div>
               <div class="prodcut-item">
                vintage photo border
                <span class="product-meta">21 Products | <a href="#" class="pink">view all</a></span>
              </div>
          </div>
       </div>--> <!--when user wants to add a new product-->
         
     <!--<div id="scrapModal" class="reveal-modal">
          <div class="modal_header">
            <button type="button" class="close-reveal-modal"></button>            
            <h4>Add this item to a scrapbox</h4> 
          </div>
          <div class="modal-body">
              <p>You haven't created any Scrapboxes yet? Lets go ahead and start one for you now!</p>
              <div class="add-new">
                <input type="text" value="Name your new scrapbook" /><input type="submit" class="btn" value="Add Scrapbook"/>
              </div>
          </div>
       </div>--> <!--when a scrapbox haven't created yet-->
      
     <!--<div id="scrapModal" class="reveal-modal">
          <div class="modal_header">
            <button type="button" class="close-reveal-modal"></button>            
            <h4>Add this item to a scrapbox</h4> 
          </div>
          <div class="modal-body">
              <p>You now have 1 Scrapbox. Congratulations!<br><a href="#" class="f-10 pink">Add a new one</a></p>
              <div class="prodcut-item added">
                My Favorite Patterns
                <span class="product-meta">21 Products | <a href="#" class="pink">view all</a></span>
              </div>
          </div>
       </div>-->
     
   <!---------pay with credit modal---------->
   
	 <div id="payModal" class="reveal-modal">
        <div class="modal_header">
          <button type="button" class="close-reveal-modal"></button>            
          <h4>Buy with ScrapOn Credits</h4> 
        </div>
        <div class="modal-body">
            <p>You are about to purchase Vintage Paper Scrapbook Backgrounds(from the Backgrounds category) using your ScrapOn Credit balance.  </p>
            <p>Please review the item attributes to ensure this item suits your needs. We can only issue a refund if the item has not been downloaded, is faulty,or does not work as described on the item page.</p>                               
            <p>By clicking "make it mine" below you will immediateley purchase this item.</p>
            <a href="#" class="btn cancel">cancel</a><a href="#" class="btn modal-link">make it mine</a>
        </div>
     </div>  <!--when the user click pay with credit button this modal will appeared--> 
     
   <!--------contact modal------------------->
   
<!--   below are the three contact modal, the programmer will decide how to show them acroding to the user--> 
     
     <div id="contactModal" class="reveal-modal">
          <div class="modal_header">
            <button type="button" class="close-reveal-modal"></button>            
            <h4>Contact Us</h4> 
          </div>
          <div class="modal-body">
              <p>Question, comment or glowing compliments to give? tell us everything below. Registered users, <a href="#" class="pink" data-reveal-id="loginModal">login</a> to add this conversation to your Messages box. </p>                               
              <form>
                <div class="contact_info">
                  <label for="c-f-name">First Name</label>
                  <input type="text" id="c-f-name" />
                </div>
                <div class="contact_info">
                  <label for="c-l-name">Last Name</label>
                  <input type="text" id="c-l-name" />
                </div>
                <div class="contact_info">
                  <label for="c-mail">Email</label>
                  <input type="text" id="c-mail" />
                </div>
                <div class="contact_info">
                  <label for="sub">Subject</label>
                  <input type="password" id="sub" />
                </div>
                <div class="contact_info">
                  <label for="c-message" class="expand">Message</label>
                  <textarea class="contact-area" id="c-message"></textarea>
                </div>
                <div class="clearfix">
                  <a href="#" class="btn left modal-link" data-reveal-id="regverificationModal">send message</a> 
                </div>
              </form>
          </div>
       </div> <!--When a user is either a non-member or not logged in, they get the full version of the contact form which includes first and last names as well as email address.-->
       
     <!--<div id="contactModal" class="reveal-modal">
          <div class="modal_header">
            <button type="button" class="close-reveal-modal"></button>            
            <h4>Contact Us</h4> 
          </div>
          <div class="modal-body">
              <p>Hello Katja, what's on your mind?</p>                               
              <form>
                <div class="contact_info">
                  <label for="sub">Subject</label>
                  <input type="password" id="sub" />
                </div>
                <div class="contact_info">
                  <label for="c-message" class="expand">Message</label>
                  <textarea class="contact-area" id="c-message"></textarea>
                </div>
                <div class="clearfix">
                  <a href="#" class="btn left modal-link" data-reveal-id="regverificationModal">send message</a> 
                </div>
              </form>
          </div>
       </div>-->  
       
      <!-- When a user is logged in, all we need is the subject and message fields.-->
      
      <!--<div id="contactModal" class="reveal-modal">
          <div class="modal_header">
            <button type="button" class="close-reveal-modal"></button>            
            <h4>Contact Us</h4> 
          </div>
          <div class="modal-body">
              <p> Hey, Thanks!
We love hearing from our peeps and strive to respond to all messages in a timely manner, so keep an eye out for our reply.</p>               <p>-The ScrapOn Team</p>  
          </div>
       </div>--> <!--small thank you message after form is submitted-->
     

<!--  open a shop modal -->
   <div id="shopModal" class="reveal-modal">
          <div class="modal_header">
            <button type="button" class="close-reveal-modal"></button>            
            <h4>Apply for shop</h4> 
          </div>
          <div class="modal-body">
              <p>Please wirte us a little note about yourself and your experience creating digital scrapbooking products. Feel free to include links to any of your working online, or zip some examples adn upload them below.</p>                               
              <form>
                <div class="contact_info">
                  <textarea class="contact-area" id="c-message"></textarea>
                </div>
                <div class="clearfix">
                <a href="#" class="btn cancel">upload</a> a zip. file with example of your work
                </div>
                <br>
                <div class="clearfix">
                  <a href="#" class="btn left modal-link" data-reveal-id="replyModal">submit my application</a> 
                </div>
              </form>
          </div>
       </div>
       
       <div id="replyModal" class="reveal-modal">
          <div class="modal_header">
            <button type="button" class="close-reveal-modal"></button>            
            <h4>Apply for shop</h4> 
          </div>
          <div class="modal-body">
              <p class="blakish">Nice work!</p>
              <p>We review application in the order they are recieved and you will be notified by email when your shop is approved and ready for you to begain uploading products</p>                               
              
          </div>
       </div>
      
     
     