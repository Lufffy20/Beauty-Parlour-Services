<footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-7">
                     <div class="row">
                        <div class="col-lg-6 col-md-12">
                           <div class="hedingh3 text_align_left">
                              <h3>About</h3>
                              <p> Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable sourc</p>
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                           <div class="hedingh3 text_align_left">
                              <h3>Blog</h3>
                              <p>Which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anythin</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-5">
                     <div class="row">
                        <div class="col-lg-6 col-md-12">
                           <div class="hedingh3 text_align_left">
                              <h3>Menu</h3>
                              <ul class="menu_footer">
                                 <li><a href="/">Home</a></li>
                                 <li><a href="about">About</a></li>
                                 <li><a href="service">Service</a></li>
                                 <li><a href="blog">Blog</a></li>
                                 <li><a href="contact">Contact us</a></li>
                              </ul>
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                           <div class="hedingh3  text_align_left">
                              <h3>Newsletter</h3>
                              <form id="colof" class="form_subscri" method="POST" action="{{ route('newsletter.store12') }}">
   @csrf
   <input class="newsl" placeholder="Email" type="text" name="Email">
   <button class="subsci_btn" type="submit">Subscribe</button>
</form>

                              <ul class="top_infomation">
                                 <li><i class="fa fa-phone" aria-hidden="true"></i>
                                    +91 1234567890
                                 </li>
                                 <li><i class="fa fa-envelope" aria-hidden="true"></i>
                                    <a href="Javascript:void(0)">meetparmar4648@gmail.com</a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="follow text_align_center">
                           <h3>Follow Us</h3>
                           <ul class="social_icon ">
                              <li><a href="Javascript:void(0)"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                              <li><a href="Javascript:void(0)"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                              <li><a href="Javascript:void(0)"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                              <li><a href="Javascript:void(0)"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <p>© 2025 All Rights Reserved.<a href="https://html.design/"></a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="{{asset('js/jquery.min.js')}}"></script>
      <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset('js/jquery-3.0.0.min.js')}}"></script>
      <script src="{{asset('js/owl.carousel.min.js')}}"></script>
      <script src="{{asset('js/bootstrap-datepicker.min.js')}}"></script>
      <script src="{{asset('js/custom.js')}}"></script>
   </body>


</html>