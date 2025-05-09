@extends('admin.layouts.default')

{{-- Page title --}}
@section('title')
    News Details
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')

    <link rel="stylesheet" href="{{ asset('vendors/bootstrap-tagsinput/css/bootstrap-tagsinput.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/pages/blog.css') }}" />
    <!-- end of page level css -->
@stop

{{-- Page content --}}
@section('content')

    <section class="content-header">
        <!--section starts-->
        <h1>News Details</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="livicon" data-name="home" data-size="14" data-c="#000" data-loop="true"></i>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="#">News</a>
            </li>
            <li class="active">News Details</li>
        </ol>
    </section>
    <!--section ends-->
    <section class="content px-3">
        <!--main content-->
        <div class="row">
            <div class="col-sm-8 col-md-8 col-full-width-right">
                <div class="blog-detail-image">
                    <img data-src="holder.js/1900x263/#00BC8C:#fff" class="img-fluid" alt="Image">
                </div>
                <!-- /.blog-detail-image -->
                <div class="the-box no-border blog-detail-content">
                    <p>
                        <span class="badge bg-danger border-radius-0">July 11, 2014 @05:10:45 PM</span>
                    </p>
                    <p class="text-justify">
                        Cookie jelly beans soufflé icing. Gummi bears tootsie roll powder chupa chups cheesecake chocolate
                        jelly-o lollipop lollipop. Halvah applicake chupa chups. Marshmallow chocolate jujubes icing
                        lollipop gummi bears chupa chups pudding bonbon. Jelly beans jelly soufflé jujubes. Sesame snaps
                        lollipop icing donut lemon drops soufflé. Tilefish electric knifefish salmon shark southern Dolly
                        Varden. Pacific argentine tope golden shiner ilisha barreleye loosejaw catla, dogteeth tetra catfish
                        tenpounder nase scup Ragfish brotula." Codlet brook lamprey pleco, Japanese eel convict cichlid
                        titan triggerfish, plownose chimaera topminnow Black scalyfin. Walleye pollock, blue shark
                        Sacramento blackfish prickleback airbreathing catfish yellowfin cutthroat trout, goby southern
                        sandfish. North Pacific daggertooth dorab cepalin weever flying gurnard.
                    </p>
                    <blockquote>
                        <p>
                            Science cuts two ways, of course; its products can be used for both good and evil. But there's
                            no turning back from science.
                        </p>
                        <small>
                            Someone famous in
                            <cite title="Source Title">Source Title</cite>
                        </small>
                    </blockquote>
                    <h3>Sub heading here</h3>
                    <p class="text-justify">
                        Donut caramels gingerbread. Sweet roll macaroon pastry cotton candy oat cake sesame snaps biscuit
                        lemon drops dessert. Candy canes carrot cake danish carrot cake soufflé jelly chocolate cake muffin.
                        Topping brownie donut. Oat cake marzipan dragée cheesecake. Donut chocolate cake jujubes tart dragée
                        toffee.
                    </p>
                    <h3>Sub heading here</h3>
                    <p class="text-justify">
                        Cookie jelly beans soufflé icing. Gummi bears tootsie roll powder chupa chups cheesecake chocolate
                        jelly-o lollipop lollipop. Halvah applicake chupa chups. Marshmallow chocolate jujubes icing
                        lollipop gummi bears chupa chups pudding bonbon. Jelly beans jelly soufflé jujubes. Sesame snaps
                        lollipop icing donut lemon drops soufflé. Donut caramels gingerbread. Sweet roll macaroon pastry
                        cotton candy oat cake sesame snaps biscuit lemon drops dessert. Candy canes carrot cake danish
                        carrot cake soufflé jelly chocolate cake muffin. Topping brownie donut. Oat cake marzipan dragée
                        cheesecake. Donut chocolate cake jujubes tart dragée toffee. Tilefish electric knifefish salmon
                        shark southern Dolly Varden. Pacific argentine tope golden shiner ilisha barreleye loosejaw catla,
                        dogteeth tetra catfish tenpounder nase scup Ragfish brotula." Codlet brook lamprey pleco, Japanese
                        eel convict cichlid titan triggerfish, plownose chimaera topminnow Black scalyfin. Walleye pollock,
                        blue shark Sacramento blackfish prickleback airbreathing catfish yellowfin cutthroat trout, goby
                        southern sandfish. North Pacific daggertooth dorab cepalin weever flying gurnard.
                    </p>
                    <hr>
                    <p>
                        <span class="label bg-info square">LEAVE A COMMENT</span>
                    </p>
                    <form role="form">
                        <div class="mb-3">
                            <input type="text" class="form-control input-lg" placeholder="Your name" required>
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control input-lg" placeholder="Your email address" required>
                        </div>
                        <div class="mb-3">
                            <input type="url" class="form-control input-lg" placeholder="Your website" required>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control input-lg no-resize resize_vertical" placeholder="Your comment" required></textarea>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-success btn-md">
                                <i class="fa fa-comment"></i>
                                Submit comment
                            </button>
                        </div>
                    </form>
                </div>
                <!-- /the.box .no-border -->
            </div>
            <!-- /.col-sm-9 -->
            <div class="col-sm-4 col-md-4 col-full-width-left">
                <div class="the-box  no-border no-margin text-center more-padding">
                    <h4>Featured Authors</h4>
                    <br>
                    <div class="row">
                        <div class="col-3">
                            <p>
                                <a href="#fakelink">
                                    <img data-src="holder.js/22x22/#00bc8c:#fff" class="img-fluid rounded-circle"
                                        alt="riot">
                                </a>
                            </p>
                        </div>
                        <!-- /.col-xs-3 -->
                        <div class="col-3">
                            <p>
                                <a href="#fakelink">
                                    <img data-src="holder.js/22x22/#00bc8c:#fff" class="img-fluid rounded-circle"
                                        alt="riot">
                                </a>
                            </p>
                        </div>
                        <!-- /.col-xs-3 -->
                        <div class="col-3">
                            <p>
                                <a href="#fakelink">
                                    <img data-src="holder.js/22x22/#00bc8c:#fff" class="img-fluid rounded-circle"
                                        alt="riot">
                                </a>
                            </p>
                        </div>
                        <!-- /.col-xs-3 -->
                        <div class="col-3">
                            <p>
                                <a href="#fakelink">
                                    <img data-src="holder.js/22x22/#00bc8c:#fff" class="img-fluid rounded-circle"
                                        alt="riot">
                                </a>
                            </p>
                        </div>
                        <!-- /.col-xs-3 -->
                    </div>
                    <!-- /.row -->
                    <div class="d-grid">
                        <button class="btn btn-success">Browse all author</button>
                    </div>

                </div>
                <!-- /.the-box .bg-primary .no-border .text-center .no-margin -->
                <!-- BEGIN News Tags -->
                <div class="the-box no-border tags-cloud">
                    <div class="example example_markup">
                        <h3>News Tags</h3>
                        <p>Just add</p>
                        <div class="bs-example">
                            <input type="text" value="Canada, Business ,Music,Education,Money" data-role="tagsinput" />
                        </div>
                        <div class="accordion accordion-flush ">
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <a class="accordion-toggle font_size14" data-bs-toggle="collapse"
                                        href="#accordion_example_markup">Show code</a>
                                </div>
                                <div id="accordion_example_markup" class="accordion-collapse collapse">
                                    <div class="accordion-body highlight">
                                        <pre class="prettyprint linenums">&lt;input type=&quot;text&quot; value=&quot;Canada,Business,Music,Education,Money&quot; data-role=&quot;tagsinput&quot; /&gt;</pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="the-box no-border no-margin more-padding">
                    <h3>Tabs</h3>
                    <div class="tabbable tabbable-custom">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a data-bs-toggle="tab" href="#tab_1_1" class="nav-link active">Section 1</a>
                            </li>
                            <li>
                                <a data-bs-toggle="tab" href="#tab_1_2" class="nav-link">Section 2</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div id="tab_1_1" class="tab-pane active mt-2">
                                <p>I'm in Section 1.</p>
                                <p>
                                    Donut caramels gingerbread. Sweet roll macaroon pastry cotton candy oat cake sesame
                                    snaps biscuit lemon drops dessert. Candy canes carrot cake danish carrot cake soufflé
                                    jelly chocolate cake muffin. Topping brownie donut. Oat cake marzipan dragée cheesecake.
                                    Donut chocolate cake jujubes tart dragée toffee.
                                </p>
                            </div>
                            <div id="tab_1_2" class="tab-pane mt-2">
                                <p>Hi, I'm in Section 2.</p>
                                <p>
                                    Cookie jelly beans soufflé icing. Gummi bears tootsie roll powder chupa chups cheesecake
                                    chocolate jelly-o lollipop lollipop. Halvah applicake chupa chups. Marshmallow chocolate
                                    jujubes icing lollipop gummi bears chupa chups pudding bonbon. Jelly beans jelly soufflé
                                    jujubes. Sesame snaps lollipop icing donut lemon drops soufflé. Donut caramels
                                    gingerbread.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- BEGIN Recent News -->
                <div class="the-box no-border">
                    <h4 class="text-dark-emphasis">Recent News</h4>
                    <ul class="ps-0 mt-4 list-unstyled">
                        <li class="media">
                            <div class="media-body">
                                <h4 class="media-heading">
                                    <a href="#">Germany Basks in 4th World Cup After 24-Year Wait</a>
                                </h4>
                                <p class="date">
                                    <small>6 hours ago</small>
                                </p>
                            </div>
                        </li>
                        <hr>
                        <li class="media">
                            <div class="media-body">
                                <h4 class="media-heading">
                                    <a href="#">
                                        News World news Paris Anti-Israeli protesters attack Paris synagogue
                                    </a>
                                </h4>
                                <p class="date">
                                    <small>yesterday</small>
                                </p>
                            </div>
                        </li>
                        <hr>
                        <li class="media">
                            <div class="media-body">
                                <h4 class="media-heading">
                                    <a href="#">Egypt proposes Israel-Gaza ceasefire</a>
                                </h4>
                                <p class="date">
                                    <small>April 21, 2014</small>
                                </p>
                            </div>
                        </li>
                        <hr>
                        <li class="media">
                            <div class="media-body">
                                <h4 class="media-heading">
                                    <a href="#">Dying patients 'bewildered by array of services'</a>
                                </h4>
                                <p class="date">
                                    <small>February 20, 2014</small>
                                </p>
                            </div>
                        </li>
                        <hr>
                        <li class="media">
                            <div class="media-body">
                                <h4 class="media-heading">
                                    <a href="#">Murder victim's family want answers</a>
                                </h4>
                                <p class="date">
                                    <small>February 05, 2014</small>
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- /.the-box .no-border -->
            </div>
            <!-- /.col-sm-3 -->
        </div>
        <!--main content ends-->
    </section>
    <!-- content -->

@stop

{{-- page level scripts --}}
@section('footer_scripts')

    <script src="{{ asset('vendors/bootstrap-tagsinput/js/bootstrap-tagsinput.js') }}"></script>
    <script src="{{ asset('js/pages/news_item.js') }}"></script>

@stop
