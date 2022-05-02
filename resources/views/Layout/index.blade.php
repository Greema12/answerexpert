@include('Layout.header')



 
 <section class="doc_blog_classic_area sec_pad bg-disable">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        @foreach($que as $list)
                        <div class="blog_top_post shadow-sm blog_classic_item">
                            <!-- <img src="img/blog-classic/classic_01.jpg" alt=""> -->
                            @php 
                                
                                $q1 = preg_replace('/[^A-Za-z0-9\-]/', '-', $list->main_que);
                                $q2 =  substr_replace($q1, "", -1);
                                $q2 .= ".html";
                               
                                $answer =   preg_replace('/\b((https?|ftp|file):\/\/|com\.)[-A-Z0-9+&@#\/%?=~_|$!:,.;]*[A-Z0-9+&@#\/%=~_|$]/i', ' ', $list->main_ans);


                   @endphp
                       <div class="b_top_post_content">
                                <div class="post_tag">
                                    <!-- <a href="#"><i class="icon_calendar"></i>Sep 14, 2020</a>
                                    <a href="#"><i class="icon_clock_alt"></i> 9 Min Read</a>
                                    <a class="orange" href="#"><i class="icon_tag_alt"></i>Foram</a> -->
                                </div>
                                <a href="{{URL::to('/')}}/Blog/blogdetail/{{ $list->id }}/{{strtolower($q2)}}">
                                    <h3>{{ $list->main_que }}</h3>
                                </a>
                                <p> {{ Str_limit($answer,$limit = 200, $end='.......') }}  </p>
                                <div class="d-flex justify-content-between p_bottom">
                            <a href="{{URL::to('/')}}/Blog/blogdetail/{{ $list->id }}/{{ $q1 }}" class="learn_btn">
                                    Continue Reading<i class="arrow_right"></i></a>
                                    <div class="media post_author">
                                        <div class="round_img">
                                            <!-- <img src="img/blog-grid/author_1.jpg" alt=""> -->
                                        </div>
                                        <div class="media-body author_text">
                                            <a href="#">
                                               <!--  <h4>Jason Response</h4> -->
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            
                        </div>
         
@endforeach
              
                       


                        <nav class="navigation pagination" role="navigation">
                            <div class="nav-links">




                               <!--  <a class="prev page-numbers" href="#"><i class="arrow_carrot-left"></i></a>
                                <span aria-current="page" class="page-numbers current">1</span>
                                <a class="page-numbers" href="#">2</a>
                                <a class="page-numbers" href="#">3</a>
                                <a class="next page-numbers" href="#"><i class="arrow_carrot-right"></i></a> -->
                            </div>
                        </nav>
                    </div>
                    <div class="col-lg-4">
                         <div class="blog_sidebar pl-40">
                            <div class="widget search_widget">
                                <div class="icon-input-group right-icon">
                                    <form action="{{URL::to('/')}}/Layout/index" method="GET">


                                    <input class="form-control" type="text" id="search"  name="search" placeholder="Search">
                                    <i class="icon_search"></i>
                                </form>
                                </div>
                            </div> 
                            <!-- <div class="widget categorie_widget">
                                <h4 class="c_head">Post Categories</h4>
                                <ul class="list-unstyled categorie_list">
                                    <li><a href="#">Creative <span>(12)</span></a></li>
                                    <li><a href="#">Inspiration <span>(8)</span></a></li>
                                    <li><a href="#">Lifestyle <span>(3)</span></a></li>
                                    <li><a href="#">News <span>(4)</span></a></li>
                                    <li><a href="#">Photography <span>(12)</span></a></li>
                                    <li><a href="#">Skill <span>(15)</span></a></li>
                                    <li><a href="#">Tourist Tours <span>(10)</span></a></li>
                                    <li><a href="#">Inspire <span>(5)</span></a></li>
                                </ul>
                            </div> -->
                            <div class="widget recent_news_widget  "><br>
                                <h4 class="c_head" style="text-align:left; ">Reacent News</h4>

                               @foreach($new as $list)
                               
                                    <div class="media recent_post_item  ">
                                    <img src="{{asset('assets/img/blog-single/news_01.jpg')}}" alt="">
                                    <div class="media-body ">
                                        <a href="#">
                                            <h5>{{$list}}</h5>
                                        </a>
                                        <!-- <div class="entry_post_date">January 14, 2020</div> -->
                                    </div>
                                </div>
                                @endforeach
                               
                            </div>
                            <div class="widget tag_widget">
                               <!--  <h4 class="c_head">Tags</h4>
                                <ul class="list-unstyled w_tag_list">
                                    <li><a href="#">Design</a></li>
                                    <li><a href="#">Apps</a></li>
                                    <li><a href="#">Photography</a></li>
                                    <li><a href="#">Business</a></li>
                                    <li><a href="#">Foram</a></li>
                                    <li><a href="#">WordPress</a></li>
                                    <li><a href="#">Design</a></li>
                                    <li><a href="#">DocAll</a></li>
                                    <li><a href="#">Magento</a></li>
                                    <li><a href="#">Doc Design</a></li>
                                    <li><a href="#">ui/ux</a></li>
                                    <li><a href="#">Docs</a></li>
                                </ul> -->
                            </div>
                            <div class="widget instragram_widget">
                               <!--  <h4 class="c_head">Instragram</h4>
                                <div class="instragram_info">
                                    <a href="#" class="instragram_item">
                                        <img src="img/blog-single/image_01.jpg" alt="">
                                    </a>
                                    <a href="#" class="instragram_item">
                                        <img src="img/blog-single/image_02.jpg" alt="">
                                    </a>
                                    <a href="#" class="instragram_item">
                                        <img src="img/blog-single/image_03.jpg" alt="">
                                    </a>
                                    <a href="#" class="instragram_item">
                                        <img src="img/blog-single/image_04.jpg" alt="">
                                    </a>
                                    <a href="#" class="instragram_item">
                                        <img src="img/blog-single/image_05.jpg" alt="">
                                    </a>
                                    <a href="#" class="instragram_item">
                                        <img src="img/blog-single/image_06.jpg" alt="">
                                    </a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        @include('Layout.footer')