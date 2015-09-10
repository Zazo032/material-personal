<div class="nav-wrapper">
    <ul class="side-nav" id="mobile-demo">
        <h2 class="center">cz.me</h2>
        <div class="divider"></div>
        <li><a href="index" class="waves-effect waves-pink">Home</a></li>
        <li><a href="portfolio" class="waves-effect waves-pink">Portfolio</a></li>
        <li><a href="#contact" class="modal-trigger waves-effect waves-pink">Contact</a></li>
    </ul>
</div>

<div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
    <a class="btn-floating btn-large pink accent-3 waves-effect waves-circle waves-light modal-trigger" href="#contact">
        <i class="large material-icons">question_answer</i>
    </a>
</div>

<div id="contact" class="modal bottom-sheet" style="display: block; opacity: 0; bottom: -100%;">
  <div class="modal-content">
    <h4><i class="material-icons small left">question_answer</i>Contact</h4>
    <ul class="collection">
      <li class="collection-item avatar">
        <i class="fa fa-envelope circle waves-effect waves-light red"></i>
        <span class="title">Email</span>
        <p><a href="mailto:cristian.zazo@gmail.com">cristian.zazo@gmail.com</a></p>
      </li>
      <li class="collection-item avatar">
        <i class="fa fa-facebook circle waves-effect waves-light blue darken-4"></i>
        <span class="title">Facebook</span>
        <p><a href="https://www.facebook.com/zazo032" target="_blank">Cristian Zazo</a></p>
      </li>
      <li class="collection-item avatar">
        <i class="fa fa-google-plus circle waves-effect waves-light red"></i>
        <span class="title">Google+</span>
        <p><a href="https://plus.google.com/+CristianZazo" target="_blank">+CristianZazo</a></p>
      </li>
    </ul>
  </div>
</div>

<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script src="js/materialize.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.modal-trigger').leanModal();
        $(".button-collapse").sideNav();
    });
</script>