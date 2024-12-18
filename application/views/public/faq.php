<?php require_once(APPPATH.'views/public/includes/header.inc.php'); ?>
<?php require_once(APPPATH.'views/public/includes/light-navbar.inc.php'); ?>
    
    <!-- Home Start -->
    <section class="bg-half-170 d-table w-100 bg-light" style="background: url('assets/public/images/bg/page.png') top center;" id="home">
        <div class="container">
            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="title-heading text-center text-md-start">
                        <h3>FAQs</h3>
                        <p class="text-muted para-desc mt-3 mb-0">Question & Answer about hosting services</p> 
                        <nav aria-label="breadcrumb" class="d-inline-block mt-4">
                            <ul class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="<?= site_url('/') ?>">Dlockservices</a></li>
                                <li class="breadcrumb-item active" aria-current="page">FAQs</li>
                            </ul>
                        </nav>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div> <!--end container-->
    </section><!--end section-->
    <div class="position-relative">
        <div class="shape overflow-hidden text-white">
            <svg viewBox="0 0 1000 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M 0 0 c 0 0 200 50 500 50 s 500 -50 500 -50 v 101 h -1000 v -100 z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!-- Home End -->

    <!-- Start -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5 col-12 d-none d-md-block">
                    <div class="rounded-pill shadow p-4 component-wrapper">
                        <ul class="list-unstyled mb-0">
                            <li class="mb-4"><a href="#tech" class="mouse-down h6 text-dark">Technical Questions</a></li>
                            <li class="mb-4"><a href="#general" class="mouse-down h6 text-dark">General Questions</a></li>
                            <li><a href="#payment" class="mouse-down h6 text-dark">Payments Questions</a></li>
                        </ul>
                    </div>
                </div><!--end col-->

                <div class="col-lg-8 col-md-7 col-12">
                    <div class="section-title" id="tech">
                        <h4>Technical Questions</h4>
                    </div>
                    <div class="accordion mt-4 pt-2" id="accordionExamplethree">
                        <div class="accordion-item rounded shadow bg-white">
                            <h2 class="accordion-header" id="headingOneo">
                                <button class="accordion-button border-0 bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOneo"
                                    aria-expanded="true" aria-controls="collapseOneo">
                                    Features
                                </button>
                            </h2>
                            <div id="collapseOneo" class="accordion-collapse border-0 collapse show" aria-labelledby="headingOneo"
                                data-bs-parent="#accordionExamplethree">
                                <div class="accordion-body">
                                    <ul class="list-unstyled mb-0">
                                        <li class="text-muted my-2"><i data-feather="arrow-right-circle" class="fea icon-ex-md text-primary me-2"></i>CentOS 6/CentOS 7/Ubuntu 16.04/Fedora 23/Debian 8</li>
                                        <li class="text-muted my-2"><i data-feather="arrow-right-circle" class="fea icon-ex-md text-primary me-2"></i>Multiple locations</li>
                                        <li class="text-muted my-2"><i data-feather="arrow-right-circle" class="fea icon-ex-md text-primary me-2"></i>Private Network</li>
                                        <li class="text-muted my-2"><i data-feather="arrow-right-circle" class="fea icon-ex-md text-primary me-2"></i>Quick VNC access</li>
                                        <li class="text-muted my-2"><i data-feather="arrow-right-circle" class="fea icon-ex-md text-primary me-2"></i>rDNS support</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item rounded shadow bg-white mt-2">
                            <h2 class="accordion-header" id="headingTwoo">
                                <button class="accordion-button border-0 bg-light collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwoo" aria-expanded="false" aria-controls="collapseTwoo">
                                    Performance
                                </button>
                            </h2>
                            <div id="collapseTwoo" class="accordion-collapse border-0 collapse" aria-labelledby="headingTwoo"
                                data-bs-parent="#accordionExamplethree">
                                <div class="accordion-body">
                                    <ul class="list-unstyled mb-0">
                                        <li class="text-muted my-2"><i data-feather="arrow-right-circle" class="fea icon-ex-md text-primary me-2"></i>Top notch network built with Tier 1 ISPs</li>
                                        <li class="text-muted my-2"><i data-feather="arrow-right-circle" class="fea icon-ex-md text-primary me-2"></i>SSD Storage</li>
                                        <li class="text-muted my-2"><i data-feather="arrow-right-circle" class="fea icon-ex-md text-primary me-2"></i>Tier IV Data Center</li>
                                        <li class="text-muted my-2"><i data-feather="arrow-right-circle" class="fea icon-ex-md text-primary me-2"></i>Neustar’s DDoS protection</li>
                                        <li class="text-muted my-2"><i data-feather="arrow-right-circle" class="fea icon-ex-md text-primary me-2"></i>Backed by Juniper Networks</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item rounded shadow bg-white mt-2">
                            <h2 class="accordion-header" id="headingThreeo">
                                <button class="accordion-button border-0 bg-light collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThreeo" aria-expanded="false" aria-controls="collapseThreeo">
                                    Boosters
                                </button>
                            </h2>
                            <div id="collapseThreeo" class="accordion-collapse border-0 collapse" aria-labelledby="headingThreeo"
                                data-bs-parent="#accordionExamplethree">
                                <div class="accordion-body">
                                    <ul class="list-unstyled mb-0">
                                        <li class="text-muted my-2"><i data-feather="arrow-right-circle" class="fea icon-ex-md text-primary me-2"></i>cPanel (only with CentOS 7)</li>
                                        <li class="text-muted my-2"><i data-feather="arrow-right-circle" class="fea icon-ex-md text-primary me-2"></i>Plesk Onyx</li>
                                        <li class="text-muted my-2"><i data-feather="arrow-right-circle" class="fea icon-ex-md text-primary me-2"></i>WHMCS</li>
                                        <li class="text-muted my-2"><i data-feather="arrow-right-circle" class="fea icon-ex-md text-primary me-2"></i>SAN Storage</li>
                                        <li class="text-muted my-2"><i data-feather="arrow-right-circle" class="fea icon-ex-md text-primary me-2"></i>CDN</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item rounded shadow bg-white mt-2">
                            <h2 class="accordion-header" id="headingFouro">
                                <button class="accordion-button border-0 bg-light collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFouro" aria-expanded="false" aria-controls="collapseFouro">
                                    Semi-Managed Support
                                </button>
                            </h2>
                            <div id="collapseFouro" class="accordion-collapse border-0 collapse" aria-labelledby="headingFouro"
                                data-bs-parent="#accordionExamplethree">
                                <div class="accordion-body">
                                    <ul class="list-unstyled mb-0">
                                        <li class="text-muted my-2"><i data-feather="arrow-right-circle" class="fea icon-ex-md text-primary me-2"></i>Free cPanel Migrations</li>
                                        <li class="text-muted my-2"><i data-feather="arrow-right-circle" class="fea icon-ex-md text-primary me-2"></i>Plesk Migrations</li>
                                        <li class="text-muted my-2"><i data-feather="arrow-right-circle" class="fea icon-ex-md text-primary me-2"></i>Boot, Login, Network, Hardware, Rebuild</li>
                                        <li class="text-muted my-2"><i data-feather="arrow-right-circle" class="fea icon-ex-md text-primary me-2"></i>Basic server optimisation, patching & hardening</li>
                                        <li class="text-muted my-2"><i data-feather="arrow-right-circle" class="fea icon-ex-md text-primary me-2"></i>Basic setup of Applications & Firewall</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="section-title mt-5" id="general">
                        <h4>General Questions</h4>
                    </div>

                    <div class="accordion mt-4 pt-2" id="accordionExample">
                        <div class="accordion-item rounded shadow bg-white">
                            <h2 class="accordion-header" id="headingOne0">
                                <button class="accordion-button border-0 bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne0"
                                    aria-expanded="true" aria-controls="collapseOne0">
                                    How do I pick the right hosting plan?
                                </button>
                            </h2>
                            <div id="collapseOne0" class="accordion-collapse border-0 collapse show" aria-labelledby="headingOne0"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Think about what you need. For small websites or blogs, shared hosting works well. If your site gets more visitors or needs more power, go for VPS or cloud hosting. For big projects with high traffic, a dedicated server is the best option.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item rounded shadow bg-white">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button border-0 bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                    aria-expanded="true" aria-controls="collapseOne">
                                    What is Dedicated Server?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse border-0 collapse" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item rounded shadow bg-white mt-2">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button border-0 bg-light collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Do I need a Dedicated Server?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse border-0 collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item rounded shadow bg-white mt-2">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button border-0 bg-light collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    How can I get my website transferred for free?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse border-0 collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item rounded shadow bg-white mt-2">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button border-0 bg-light collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    What level of access do I get with my Dedicated Server?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse border-0 collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item rounded shadow bg-white mt-2">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button border-0 bg-light collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Which control panels are provided?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse border-0 collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item rounded shadow bg-white mt-2">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button border-0 bg-light collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    Do you offer any billing panels?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse border-0 collapse" aria-labelledby="headingSix"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item rounded shadow bg-white mt-2">
                            <h2 class="accordion-header" id="headingSeven">
                                <button class="accordion-button border-0 bg-light collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    How long will it take for my server to be ready for use?
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse border-0 collapse" aria-labelledby="headingSeven"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item rounded shadow bg-white mt-2">
                            <h2 class="accordion-header" id="headingEight">
                                <button class="accordion-button border-0 bg-light collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                    How do I access my Dedicated Server?
                                </button>
                            </h2>
                            <div id="collapseEight" class="accordion-collapse border-0 collapse" aria-labelledby="headingEight"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="section-title mt-5" id="payment">
                        <h4>Payments Questions</h4>
                    </div>

                    <div class="accordion mt-4 pt-2" id="accordionExampletwo">
                        <div class="accordion-item rounded shadow bg-white">
                            <h2 class="accordion-header" id="headingfiveo">
                                <button class="accordion-button border-0 bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefiveo"
                                    aria-expanded="true" aria-controls="collapsefiveo">
                                    How our Dlockservices work ?
                                </button>
                            </h2>
                            <div id="collapsefiveo" class="accordion-collapse border-0 collapse show" aria-labelledby="headingfiveo"
                                data-bs-parent="#accordionExampletwo">
                                <div class="accordion-body">
                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item rounded shadow bg-white mt-2">
                            <h2 class="accordion-header" id="headingsix">
                                <button class="accordion-button border-0 bg-light collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                                    What is the main process open account ?
                                </button>
                            </h2>
                            <div id="collapsesix" class="accordion-collapse border-0 collapse" aria-labelledby="headingsix"
                                data-bs-parent="#accordionExampletwo">
                                <div class="accordion-body">
                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item rounded shadow bg-white mt-2">
                            <h2 class="accordion-header" id="headingseven">
                                <button class="accordion-button border-0 bg-light collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                                    How to make unlimited data entry ?
                                </button>
                            </h2>
                            <div id="collapseseven" class="accordion-collapse border-0 collapse" aria-labelledby="headingseven"
                                data-bs-parent="#accordionExampletwo">
                                <div class="accordion-body">
                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item rounded shadow bg-white mt-2">
                            <h2 class="accordion-header" id="headingeight">
                                <button class="accordion-button border-0 bg-light collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseeight" aria-expanded="false" aria-controls="collapseeight">
                                    Is Dlockservices safer to use with my account ?
                                </button>
                            </h2>
                            <div id="collapseeight" class="accordion-collapse border-0 collapse" aria-labelledby="headingeight"
                                data-bs-parent="#accordionExampletwo">
                                <div class="accordion-body">
                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item rounded shadow bg-white mt-2">
                            <h2 class="accordion-header" id="headingnine">
                                <button class="accordion-button border-0 bg-light collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapsenine" aria-expanded="false" aria-controls="collapsenine">
                                    How can i contact your technical team ?
                                </button>
                            </h2>
                            <div id="collapsenine" class="accordion-collapse border-0 collapse" aria-labelledby="headingnine"
                                data-bs-parent="#accordionExampletwo">
                                <div class="accordion-body">
                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- End -->

<?php require_once(APPPATH.'views/public/includes/footer.inc.php'); ?>