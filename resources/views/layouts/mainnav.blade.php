 <?php $nav = Route::getCurrentRoute()->getName(); ?>

<li><a <?php if($nav == 'index'){ echo 'class="current"'; } ?> href="/">Home</a></li>
<li><a <?php if($nav == 'about'){ echo 'class="current"'; } ?>href="/about">About</a></li>
<li><a <?php if($nav == 'deals'){ echo 'class="current"'; } ?>href="/deals">Deals</a></li>
<li><a <?php if($nav == 'how-it-works'){ echo 'class="current"'; } ?>href="/how-it-works">How it works</a></li>
<li><a href="#">Blog</a></li>
<li><a <?php if($nav == 'contact'){ echo 'class="current"'; } ?>href="/contact">Contact</a></li>
