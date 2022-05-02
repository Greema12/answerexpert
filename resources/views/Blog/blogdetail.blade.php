@include('Layout.header')

        <!--================End Forum Breadcrumb Area =================-->

        <section class="doc_blog_grid_area sec_pad forum-single-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <!-- Forum post top area -->
                        
                        <!-- Forum post content -->
                        <?php $count = 1; ?>
                       @foreach($que as $list)
                        <div class="q-title">
                            <span class="question-icon" title="Question">Q:</span>


                            <a href="">
                    
                            <h1>{{ $list->main_que }}</h1>
                            
                            </a>



                        </div>


                        <div class="forum-post-content">
                            <div class="content"  style="text-align: left; vertical-align: left;" >

                                <p> {{$list->main_ans}} </p>
                                
                            </div>
                        </div>








                            
                            <div class="forum-post-btm">
                               <!--  <div class="taxonomy forum-post-tags">
                                    <i class="icon_tags_alt"></i><a href="#">Bug</a>, <a href="#">Feature</a>, <a
                                        href="#">Error</a>
                                </div>
                                <div class="taxonomy forum-post-cat">
                                    <img src="img/forum/logo-favicon.png" alt=""><a href="#">Foram Support</a>
                                </div> -->
                            </div>
                            <div class="action-button-container action-btns">
                                <a href="#" class="action_btn btn_radious_none">Sub Question</a>
                                <!-- <a href="#" class="action_btn btn-ans ask-btn too-btn">I have this question too (20)</a> -->
                            </div>
                        </div>

                        <!-- Best answer -->
                        <div class="">
                            <div class="row">
                                <div class="col-lg-9">
                                    <div class="forum-post-top">
                                        <a class="author-avatar" href="#">
                                            <img src="img/forum/author-avatar.png" alt="">
                                        </a>
                                        <div class="forum-post-author">
                                           <!--  <a class="author-name" href="#"> Eh Jewel </a> -->
                                            <div class="forum-author-meta">
                                                <div class="author-badge">
                                                  
                                                </div>
                                                <div class="author-badge">
                                                    <!-- <i class="icon_calendar"></i>
                                                    <a href="#">January 16 at 10:32 PM</a> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="col-lg-3">
                                    <p class="accepted-ans-mark">
                                        <i class="icon_check"></i> <span>Accepted Solution</span>
                                    </p>
                                </div> -->
                            </div>
                            <div class="best-answer">
                            <div class="best-ans-content d-flex">
                                <!--<span class="question-icon" title="The Best Answer">Q:</span>-->
                                
                                 

                            </div>
                            <div class="forum-post-content">
                            <div class="content">

                                   <p> <b>Q: {{$list->people_also_ask_q1  }} </b></p>
                                 
                                   <p>     {{$list->people_also_ask_a1}} </p>
                                
                            </div></div> 
                            </div>
                                    
                            <div class="best-answer">    
                            <div class="best-ans-content d-flex">
                                <!--<span class="question-icon" title="The Best Answer">Q:</span>-->
                                
                                 
                                  

                            </div>
                            <div class="forum-post-content">
                            <div class="content">

                               <p> <b>Q: {{$list->people_also_ask_q2  }} </b></p>
                               <p>     {{$list->people_also_ask_a2}} </p>
                                
                            </div></div> 
                            </div>

                            <div class="best-answer">    
                            <div class="best-ans-content d-flex">
                                <!--<span class="question-icon" title="The Best Answer">Q:</span>-->
                                
                                 
                                  

                            </div>
                            <div class="forum-post-content">
                            <div class="content">

                              <p> <b>Q: {{$list->people_also_ask_q3  }} </b></p>
                              <p>     {{$list->people_also_ask_a3}} </p>
                                
                            </div></div> 
                            </div>


                            <div class="best-answer">
                            <div class="best-ans-content d-flex">
                                <!--<span class="question-icon" title="The Best Answer">Q:</span>-->
                                
                                

                            </div>
                            <div class="forum-post-content">
                            <div class="content">

                                 <p> <b> Q:{{$list->people_also_ask_q4  }} </b></p>
                                  
                                <p>     {{$list->people_also_ask_a4}} </p>
                                
                            </div></div> 
                            </div>



</div></div></div>

 
                            
                                
                                
                           


                            
                        </div>

                        <!-- All answer -->
                        <div class="all-answers">
                            <!-- <h3 class="title">All Replies</h3> -->
                            <!-- <div class="filter-bar d-flex">
                                <div class="sort">
                                    <select class="custom-select" id="sortBy">
                                        <option selected>Sort By</option>
                                        <option value="1">ASC</option>
                                        <option value="2">Desc</option>
                                        <option value="3">Vote</option>
                                    </select>
                                </div>
                                <p>Page 1 of 4</p>
                            </div> -->

                           

                            


@endforeach
                        <?php $count++; ?>


                           

                        </div>
                    </div>
                    

                    <!-- /.col-lg-8 -->

                    <!-- <div class="col-lg-3">
                        <div class="forum_sidebar">
                            <div class="widget status_widget">
                                <h4 class="c_head">Information</h4>
                                <p class="status">Support is <span class="offline">Offline</span></p>
                                <div class="open-hours">
                                    <h4 class="title-sm">Our office hours</h4>
                                    <p>
                                        Monday - Friday / 10am - 6pm (UTC +4) NewYork
                                    </p>
                                    <ul class="current-time list-unstyled">
                                        <li>
                                            <h4 class="title-sm">Your time</h4>
                                            <p>10:30:15 PM</p>
                                        </li>
                                        <li>
                                            <h4 class="title-sm">Your time</h4>
                                            <p>10:30:15 PM</p>
                                        </li>
                                    </ul>
                                </div> -->
                                <!-- /.open-hours -->
                            </div>

                            <!-- <div class="widget usefull_links_widget">
                                <h4 class="c_head">Usefull Links</h4>

                                <ul class="list-unstyled usefull-links">
                                    <li><i class="icon_lightbulb_alt"></i><a href="#">FAQs</a></li>
                                    <li><i class="icon_clock_alt"></i><a href="#">Popular</a></li>
                                    <li><i class="icon_piechart"></i><a href="#">Recent</a></li>
                                    <li><i class="icon_info_alt"></i><a href="#">Unanswered</a></li>
                                </ul>
                            </div> -->
                            <!-- <div class="widget ticket_widget">
                                <h4 class="c_head">Ticket Categories</h4>

                                <ul class="list-unstyled ticket_categories">
                                    <li><img src="img/home_support/cmm5.png" alt="category">
                                        <a href="#">Docs WordPress Theme</a> <span class="count">10</span>
                                    </li>
                                    <li><img src="img/home_support/cmm4.png" alt="category">
                                        <a href="#">Product Landing</a>
                                        <span class="count count-fill">13</span>
                                        <span class="count">54</span>
                                    </li>
                                    <li><img src="img/home_support/cmm2.png" alt="category">
                                        <a href="#">Knowledge Base</a><span class="count">142</span>
                                    </li>
                                    <li><img src="img/home_support/cmm8.png" alt="category">
                                        <a href="#">Startup and App</a> <span class="count">13</span>
                                    </li>
                                    <li><img src="img/home_support/cmm9.png" alt="category">
                                        <a href="#">Clean Email Template</a> <span class="count">123</span>
                                    </li>
                                    <li><img src="img/home_support/cmm10.png" alt="category">
                                        <a href="#">Apps WordPress Theme</a> <span class="count">18</span>
                                    </li>
                                </ul>
                            </div>
 -->
                            <!-- <div class="widget tag_widget">
                                <h4 class="c_head">Tags</h4>
                                <ul class="list-unstyled w_tag_list style-light">
                                    <li><a href="#">Swagger</a></li>
                                    <li><a href="#">Foram</a></li>
                                    <li><a href="#">weCare</a></li>
                                    <li><a href="#">Business</a></li>
                                    <li><a href="#">Download</a></li>
                                    <li><a href="#">Doc</a></li>
                                    <li><a href="#">WordPress</a></li>
                                    <li><a href="#">Design</a></li>
                                    <li><a href="#">ui/ux</a></li>
                                    <li><a href="#">Doc Design</a></li>
                                    <li><a href="#">DocAll</a></li>
                                    <li><a href="#">Productboard</a></li>
                                    <li><a href="#">Magento</a></li>
                                </ul>
                            </div> -->

                        </div>
                    </div>
                    <!-- /.col-lg-4 -->
                </div>
            </div>
        </section>

        <!-- <div class="call-to-action">
            <div class="overlay-bg"></div>
            <div class="container">
                <div class="action-content-wrapper">
                    <div class="action-title-wrap title-img">
                        <img src="img/home_support/chat-smile.png" alt="">
                        <h2 class="action-title">New to Communities?</h2>
                    </div>
                    <a href="#" class="action_btn">Join the community <i class="arrow_right"></i></a>
                </div>
                <!-- /.action-content-wrapper -->
            </div>
            <!-- /.container -->
        </div> 
        <!-- /.call-to-action -->
        <footer class="footer-3 ">
           <!--  <div class="footer-shapes">
                <div class="shape">
                    <img class="wow fadeInLeft" data-wow-delay="0.5s" src="img/footer/shape-1.png" alt="">
                </div>
                <div class="shape">
                    <img src="img/footer/shape-2.png" alt="">
                </div>
            </div> -->
            <div class="container">
               <!--  <div class="footer-top pt-105 pb-120">
                   <div class="row gy-lg-0 gy-4">
                         <div class="col-lg-4 col-sm-6 wow fadeInLeft">
                            <div class="footer-widget pr-20">
                                <a href="#"> <img src="img/logo-w.png" alt="logo"></a>
                                <p class="f-text mt-55">Join with your email address</p>
                                <div class="footer-sub-form-2">
                                    <form action="#">
                                        <div class="form-inp-container">
                                            <input type="text" placeholder="email@example.com">
                                            <button class="action_btn" type="submit">Join Now</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 ps-xl-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="footer-widget ps-lg-5">
                                <h6 class="widget-title mb-4">Company</h6>
                                <ul class="link-list list-unstyled">
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Contact</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Careers</a></li>
                                </ul>
                            </div>


                        </div>
                        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="footer-widget pl-lg-90">
                                <h6 class="widget-title mb-4">Product</h6>
                                <ul class="link-list list-unstyled">
                                    <li><a href="#">Designer</a></li>
                                    <li><a href="#">Interactions</a></li>
                                    <li><a href="#">CMS</a></li>
                                    <li><a href="#">Ecommerce</a></li>
                                </ul>
                            </div>



                        </div>
                        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                            <div class="footer-widget ps-lg-3">
                                <h6 class="widget-title mb-4">Get Help</h6>
                                <ul class="link-list list-unstyled">
                                    <li><a href="#">Forum</a></li>
                                    <li><a href="#">Contact</a></li>
                                    <li><a href="#">Community</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="footer-bottom pt-40 pb-40">
                    <div class="d-flex justify-content-between flex-wrap">

                        <p class="wow fadeInRight">Copyright 2021, All Rights Reserved</p>
                        <ul class="footer-menu list-unstyled wow fadeInLeft">
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Latest Projects</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- Back to top button -->
    <a id="back-to-top" title="Back to Top"></a>
@include('Layout.footer')