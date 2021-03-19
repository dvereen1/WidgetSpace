<?php include_once('headNoNav.php');?> 
            <title>The Widget Space</title>
            <link href = "/CSS/allProjectsModal.css" rel = "stylesheet" type = "text/css">
            <link href = "widgetSpace.css" rel = "stylesheet" type = "text/css">
            <link href = "accordianDropDown/accordianDropDown.css" rel = "stylesheet" type = "text/css">
            <link href = "modalPopUp/modalPopUp.css" rel = "stylesheet" type = "text/css">
            <link href = "navDropDown/navDropDown.css">
            <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap" rel="stylesheet">
        </head>
        <body>
            <?php include_once("Classes/projectInfoModal.php");
                createProjectModal("Widget Space", $projectModalArr);
            ?>
            <header>
                <a href = "/"> DJV </a>
                <a href = "#" class = "hamburger-btn">
                    <span class = "hamburger-btn-line"></span>
                </a>
                <nav>
                    <ul>
                        <li>
                            <a href = "#accordian-section" class = "menu-link">
                                Accordian Drop Down
                            </a>
                        </li>
                        <li>
                            <a href = "#modal-section" class = "menu-link">
                                Pop-up Modal
                            </a>
                        </li>
                        <li>
                            <a href = "#carousel-section" class = "menu-link">
                                Carousel Slider <span>- Coming Soon</span>
                            </a>
                        </li>
                        <li>
                            <a href = "#" class = "menu-link" onclick = "alert('Currently testing the code across multiple browsers, both desktop and mobile. Project code will be available on GitHub soon.');">
                                view code
                            </a>
                        </li>
                        <li>
                            <a href = "/#portfolio-" class = "menu-link">
                                Portfolio
                            </a>
                        </li>
                    </ul>
                </nav>
            </header>
            <section class = "widget-container">
                <div class = "hero">
                    <div class = "hero-content">
                        <div>
                            <h1 class = "hero-title">
                                Which Widget?
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="widget-faq">
                    <p>
                        There are plenty of libraries that handle add-ins like pop-ups, expanding and collapsing on-screen elements,
                        carousel scrolling and swiping, etc. In an effort to learn more I've tried my hand at some custom widgets which will be plugged in here and there around the website.
                    </p>
                </div>
            </section>
            <section class = "accordian" id = "accordian-section">
                <div class = "accordian-content">
                    <div class="accordian-options">
                        <div class = "accordian-options-h1">
                            <h1>Accordian Options</h1>
                        </div>
                        <div class="input-block-cont">
                            <div class = "input-block">
                                <input type = "radio" id = "radio-btn1" name = "radio-grp" value = "All Remain Open" checked>
                                <!--<div class="radio-btn"></div>-->
                                <label for ="radio-btn1">All Remain Open</label>
                            </div>
                            <div class = "input-block">
                                <input type = "radio" id ="radio-btn2" name = "radio-grp" value = "One and Done">
                                <!--<div class="radio-btn"></div>-->
                                <label for = "radio-btn2">One and Done</label>
                            </div>
                        </div>
                    </div>
                    <div class = "drop-down-content">
                        <div class = "drop-down" aria-expanded = "false">
                            <div class = "dd-title" data-image = "pexels-ruvim-3560044.jpg">
                                <h1>Cloud Factoid 1</h1>
                                <!--<div class = "dd-btn">-->
                                    <div class = "dd-btn-line1"></div>
                                    <div class = "dd-btn-line2"></div>
                                <!--</div>-->
                            </div>
                            <div class = "dd-text">
                                <div class="dd-text-content">
                                    <p>
                                        Clouds are made up of condensed water droplets or ice crystals and are found in the lowest layer of the Earth's atmosphere, the troposphere.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class = "drop-down" aria-expanded = "false">
                                <div class = "dd-title" data-image ="pexels-andrew-beatson-3742711.jpg">
                                    <h1>Cloud Factoid 2</h1>
                                    <!--<div class = "dd-btn">-->
                                        <div class = "dd-btn-line1"></div>
                                        <div class = "dd-btn-line2"></div>
                                    <!--</div>-->
                                </div>
                                <div class = "dd-text">
                                    <div class="dd-text-content">
                                        <p>
                                            Clouds are classified based on appearance and placed into four main categories: Cirrus, Stratus, Cumulus and Nimbus. They can also be grouped based on based on altitude.
                                        </p>
                                    </div>
                                </div>
                        </div>
                        <div class = "drop-down" aria-expanded="false">
                                <div class = "dd-title" data-image="pexels-stanislav-kondratiev-2909077.jpg">
                                    <h1>Cloud Factoid 3</h1>
                                    <!--<div class = "dd-btn">-->
                                        <div class = "dd-btn-line1"></div>
                                        <div class = "dd-btn-line2"></div>
                                    <!--</div>-->
                                </div>
                                <div class = "dd-text">
                                    <div class="dd-text-content">
                                        <p>
                                            An average cumulus cloud can weigh up to an outstanding 1 million pounds.
                                            A cloud floats because its weight isn't clumped into one space but spread out over the large distance it covers. 
                                        </p>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class = "modal" id = "modal-section">
                <div class="modal-content">
                    <button class = "modal-open-btn">Launch Modal</button>
                    <div class = "modal-bg">
                        <div class = "modal-modal-content">
                            <button class = "modal-modal-closer">
                                <div class = "modal-modal-close"></div>
                                <div class="modal-modal-close2"></div>
                            </button>
                            <div class = "modal-modal-text">
                                <h1>
                                    Random Facts
                                </h1>
                                <p>
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem, voluptate reprehenderit itaque aut molestias ut consectetur enim. Placeat delectus doloribus pariatur et rem qui, dolorum saepe ut corrupti laudantium provident! Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi facilis corrupti temporibus alias eius laudantium in aliquam distinctio saepe eveniet accusantium amet blanditiis ducimus error dolorem, suscipit, odio fuga ut.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
           
        <script src = "/JS/allProjectsModal.js"></script>
        <script src = "widgetSpace.js" type = "text/javascript"></script>
        <script src = "accordianDropDown/accordianDropDown.js" ></script>
        <script src = "modalPopUp/modalPopUp.js" type = "text/javascript"></script>
        <!--<script src = "carouselSlider/carouselSlider.js" type = "text/javascript"></script>-->

        </body>
</html>