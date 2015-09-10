<?php
    $quotes = array(
            '<i>Hello world?</i><br>
             <h6><i class="material-icons left tiny">comment</i>Jesuschrist</h6>',
            '<i>This website looks cool.</i><br>
             <h6><i class="material-icons left tiny">comment</i>Cristian Zazo</h6>',
            '<i>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer porttitor mauris at lacinia vestibulum.</i><br>
             <h6><i class="material-icons left tiny">comment</i>Lorem ipsum</h6>'
    );

    $all=(count($quotes)-1);
    $num=rand(0,$all);
?>

<header class="header indigo z-depth-1">
    <div class="container">
        <div class="row valign-wrapper">
            <div class="col s12 m10 offset-m1 l6 offset-l3 center">
                <div class="card white z-depth-1">
                    <div class="card-content">
                        <svg width="160" height="160">
                            <circle cx="80" cy="80" r="80" fill="#3f51b5" />
                            <text fill="#ffffff" font-size="120" font-family="Verdana" x="40" y="125">Z</text>
                        </svg>
                        <h4>Your Name</h4>
                        <span class="important activator" style="cursor:pointer;">&nbsp;humanoid&nbsp;</span>
                        <div id="mobile-nav" class="hide-on-large-only">
                            </br>
                            <a class="button-collapse waves-effect waves-light pink btn hide-on-large-only" data-activates="mobile-demo" href="#"><span class="white-text text-darken-2"><i class="material-icons left">menu</i>Menu</span></a>
                        </div>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4 row"><h5 class="center">About me<i class="material-icons right">close</i></h5></span>
                        <div class="divider"></div>
                        <div class="container">
                        <p class="flow-text row" style="font-size:19px;text-align:justify;">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer porttitor mauris at lacinia vestibulum. Integer iaculis ornare libero, ac rhoncus libero. Ut porttitor feugiat suscipit. Quisque vitae diam velit.
                        </p>
                        </div>
                    </div>
                </div>
                <div class="card white valign center hide-on-med-and-down">
                    <a class="waves-effect waves-pink btn-flat pink-text" href="index">&nbsp;&nbsp;&nbsp;home&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                    <a class="waves-effect waves-pink btn-flat pink-text" href="portfolio">portfolio</a>
                    <a class="waves-effect waves-pink btn-flat pink-text modal-trigger" href="#contact">contact</a>
                </div>
            </div>
        </div>
    </div>
</header>