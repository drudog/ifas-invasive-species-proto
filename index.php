<?php include('templates/markup/site-head.inc'); ?>
<?php include('templates/markup/site-nav.inc'); ?>

        <!--- NOTES: -->
        <!--- sections can have 4 different backgrounds, b-clear, b-med-lines, b-white, b-dark -->
        <!--- panels are content holders and can stack up inside 'sections' -->
        <!--- 'main-text-containers' can contain a headline and a subtext along with and body copy -->
        <!--- 'panel-text' can contain a circle image or a blockquote -->

        <header>
            <div class="outer-container">
                <div class="panel panel-text">
                    <h1>What Are Invasive Species?</h1>
                </div>
            </div>
        </header>
        <section class="b-clear"> <!-- section sets the background color/pattern -->
            <div class="outer-container">
                <div class="panel panel-large-image"> <!-- panels for various content types -->
                    <figure>
                        <img src="/devifas/templates/img/Starling-flapping-11111-lr.jpg" alt=""/>
                        <figcaption>
                            <p><strong>Example:</strong> About 60 starlings introduced in Central Park in New York City in 1890s by Eugene Scheiffelin – he wanted to introduce all the birds in Shakespeare's works to North America.</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="panel panel-text"> <!-- several panels can be inside one section -->
                    <div class="blockquote">
                        “Non-native to the ecosystem under consideration and whose introduction causes or is likely to cause economic or environmental harm or harm to human health”
                        <q>Executive Order 13112, Feb 3, 1999; also established the National Invasive Species Council</q>
                    </div>
                    <div class="headline">
                        <h1>Historical Context:</h1>
                    </div>
                    <div class="subtext">
                        <p>Synonyms: exotic, alien, non-indigenous, non-native</p>
                    </div>
                    <p>Here we are concerned with non-native (would not be in that habitat without human activities) invasive (cause ecological or economic harm or harm to human health) species.</p>
                    <p>Important: there are native invasive species and there are non-native species that are not invasive. Maybe give examples and show pictures and then ask questions to test if this idea makes sense.</p>
                </div>
                <div class="panel panel-text">
                    <h1>Hello world! This is HTML5 Boilerplate.</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur cupiditate eaque est laudantium quos recusandae velit, vitae? Accusamus dicta illo neque nobis reiciendis sed vel, velit? Accusantium sapiente soluta sunt.</p>
                </div>
            </div>
        </section>
        <section class="b-med-lines"> <!-- this class format is background type -->
            <div class="outer-container">
                <div class="panel panel-video">
                    <div class="headline">
                        <h1>Historical Context:</h1>
                    </div>
                    <div class="subtext">
                        <p>Synonyms: exotic, alien, non-indigenous, non-native</p>
                    </div>
                    <div class="video-container">
                        <iframe src="//www.youtube.com/embed/k3N5t70aJ2A" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="panel panel-text">
                    <h1>Hello world! This is HTML5 Boilerplate.</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur cupiditate eaque est laudantium quos recusandae velit, vitae? Accusamus dicta illo neque nobis reiciendis sed vel, velit? Accusantium sapiente soluta sunt.</p>
                </div>
            </div>
        </section>
        <section class="b-dark">
            <div class="outer-container">
                <div class="panel panel-text">
                    <div class="round-image">
                        <div class="round-image-container">
                            <span style="background-image: url(templates/img/european_starling_home.jpg);" alt=""></span>
                        </div>
                    </div>
                    <h1>Historical Context</h1>
                    <p>Umami whatever Pinterest ea aliqua ad, pop-up mlkshk placeat cillum odio PBR deserunt selfies labore. Occaecat McSweeney's ugh cred, Kickstarter excepteur Thundercats PBR aliquip culpa ethical elit est sartorial. Keytar cray paleo et freegan nostrud anim kale chips Williamsburg, chambray deep v banjo bicycle rights American Apparel. Dolor slow-carb VHS Pitchfork, quinoa Austin stumptown. Delectus cardigan cray retro. Flannel tattooed fingerstache you probably haven't heard of them. Asymmetrical next level non, literally shabby chic food truck mustache Brooklyn Pitchfork normcore letterpress.</p>
                </div>
            </div>
        </section>
        <section class="b-white">
            <div class="outer-container">
                <div class="panel panel-text">
                    <h1>Hello world! This is HTML5 Boilerplate.</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur cupiditate eaque est laudantium quos recusandae velit, vitae? Accusamus dicta illo neque nobis reiciendis sed vel, velit? Accusantium sapiente soluta sunt.</p>
                </div>
                <div class="panel panel-accordion">
                    <div class="headline">
                        <h1>Historical Context:</h1>
                    </div>
                    <div class="subtext">
                        <p>Synonyms: exotic, alien, non-indigenous, non-native</p>
                    </div>
                    <dl>
                        <dt>There is some really interesting information just below here but we've hidden it until you click me!</dt>
                        <dd><strong>Fooled you!</strong> Umami whatever Pinterest ea aliqua ad, pop-up mlkshk placeat cillum odio PBR deserunt selfies labore. Occaecat McSweeney's ugh cred, Kickstarter excepteur Thundercats PBR aliquip culpa ethical elit est sartorial. Keytar cray paleo et freegan nostrud anim kale chips Williamsburg, chambray deep v banjo bicycle rights American Apparel. Dolor slow-carb VHS Pitchfork, quinoa Austin stumptown. Delectus cardigan cray retro. Flannel tattooed fingerstache you probably haven't heard of them. Asymmetrical next level non, literally shabby chic food truck mustache Brooklyn Pitchfork normcore letterpress.</dd>

                        <dt>There is some really interesting information just below here but we've hidden it until you click me!</dt>
                        <dd><strong>Fooled you!</strong> Umami whatever Pinterest ea aliqua ad, pop-up mlkshk placeat cillum odio PBR deserunt selfies labore. Occaecat McSweeney's ugh cred, Kickstarter excepteur Thundercats PBR aliquip culpa ethical elit est sartorial. Keytar cray paleo et freegan nostrud anim kale chips Williamsburg, chambray deep v banjo bicycle rights American Apparel. Dolor slow-carb VHS Pitchfork, quinoa Austin stumptown. Delectus cardigan cray retro. Flannel tattooed fingerstache you probably haven't heard of them. Asymmetrical next level non, literally shabby chic food truck mustache Brooklyn Pitchfork normcore letterpress.</dd>

                        <dt>There is some really interesting information just below here but we've hidden it until you click me!</dt>
                        <dd><strong>Fooled you!</strong> Umami whatever Pinterest ea aliqua ad, pop-up mlkshk placeat cillum odio PBR deserunt selfies labore. Occaecat McSweeney's ugh cred, Kickstarter excepteur Thundercats PBR aliquip culpa ethical elit est sartorial. Keytar cray paleo et freegan nostrud anim kale chips Williamsburg, chambray deep v banjo bicycle rights American Apparel. Dolor slow-carb VHS Pitchfork, quinoa Austin stumptown. Delectus cardigan cray retro. Flannel tattooed fingerstache you probably haven't heard of them. Asymmetrical next level non, literally shabby chic food truck mustache Brooklyn Pitchfork normcore letterpress.</dd>
                    </dl>
                </div>
            </div>
        </section>
        <section class="b-med-lines">
            <div class="outer-container">
                <div class="panel panel-text">
                    <h1>Slide Show</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur cupiditate eaque est laudantium quos recusandae velit, vitae? Accusamus dicta illo neque nobis reiciendis sed vel, velit? Accusantium sapiente soluta sunt.</p>
                </div>
                <div class="panel panel-slideshow">
                    <div class="headline">
                        <h1>Historical Context:</h1>
                    </div>
                    <div class="subtext">
                        <p>Synonyms: exotic, alien, non-indigenous, non-native</p>
                    </div>
                    <div class="r-slides-nav-container"></div>
                    <ul class="rslides" id="slider4">
                        <li>
                            <img src="templates/img/1.jpg" alt="">
                            <div class="content" style="display: none;">
                                <p class="r-caption">The first caption</p>
                            </div>
                        </li>
                        <li>
                            <img src="templates/img/2.jpg" alt="">
                            <div class="content" style="display: none;">
                                <p class="r-caption">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor fugiat harum libero magni, mollitia non odio. Accusantium animi asperiores consectetur corporis eius facilis, maxime nihil, possimus provident rerum soluta, velit?</p>
                            </div>
                        </li>
                        <li>
                            <img src="templates/img/3.jpg" alt="">
                            <div class="content" style="display: none;">
                                <p class="r-caption">The third caption</p>
                            </div>
                        </li>
                    </ul>
                    <div id="slide_content_panel"></div>
                </div>
                <div class="panel panel-text">
                    <a class="button" href="#">Next Section</a>
                </div>
            </div>
        </section>

<?php include('templates/markup/site-footer.inc'); ?>