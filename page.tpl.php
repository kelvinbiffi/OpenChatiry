  <?php $sitePath = $base_path . "/" . $directory ?>

<div id="header" class="header">
  <div class="sticky">
    <div class="container">
      <div class="col-sm-2">
        <a href="<?php print $front_page;?>">
          <img src="<?php print $sitePath;?>/images/OpenCharity.png" alt="<?php print $site_name;?>" />
        </a>
      </div>
      <div class="col-sm-10 links">
        <a href="#mission">ABOUT OPEN CHARITY</a>
        <a href="#">THE BLOG</a>
        <a href="#">JOIN US</a>
      </div>
    </div>
  </div>
</div>

<?php if (isset($_REQUEST["q"]) && $_REQUEST["q"] == "admin"): ?>
  <div id="wrapper">
    <div id="sidebar">
      <?php print render($page['sidebar_first']); ?>
    </div>
  </div>
<?php endif; ?>

<div class="slider">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">

    <div class="carousel-inner" role="listbox">
      <div class="descr">
        <p>Sharing ideas for charities</p>
        <p>Many charities' goals are similar, as is the functionality we require, but little shares working takes place.</p>
        <p>By working together, driving shared areas of interest and influencing open source development we cann bring efficiencies, improve the digital experience for our users, and have greate impact.</p>
        <p>Together we can make a bigger diference.</p>
      </div>
      <div class="item active" style="background-image: url('<?php print $sitePath;?>/images/slide1.png');"></div>
      <div class="item" style="background-image: url('<?php print $sitePath;?>/images/slide2.png');"></div>
      <div class="item" style="background-image: url('<?php print $sitePath;?>/images/slide3.png');"></div>
      <div class="item" style="background-image: url('<?php print $sitePath;?>/images/slide4.png');"></div>
    </div>
  </div>
</div>


<div class="row event-calender">
  <div class="container">
    <div class="col-sm-10">
      <p><span class="highlight">Next event:</span> June 23<span class="numeral">rd</span> 2016 18:30 - 21:00</p>
      <p>Cancer Research UK, Angel Building, 407 St John Street, London EC1V 4AD</p>
    </div>
    <div class="col-sm-2">
      <a href="#">Register</a>
    </div>
  </div>
</div>


<div class="get-involved">
  <h2>Get Involved</h2>
  <div class="row">
    <div class="container">
      <div class="col-sm-4">
        <img src="<?php print $sitePath;?>/images/meetup.png" alt="meet up" />
        <p>
          <span class="wedo">We do meetings</span>
        </p>
        <p>
          <span>We organise our meetings through the OpenCharity MeetUp group</span>
        </p>
        <a href="#" class="btn-primary">Meetup Group</a>
      </div>
      <div class="col-sm-4">
        <img src="<?php print $sitePath;?>/images/slack.png" alt="slack" />
        <p>
          <span class="wedo">We communicate</span>
        </p>
        <p>
          <span>OpenCharity have a slack group for daily communication</span>
        </p>
        <a href="#" class="btn-primary">Slack Group</a>
      </div>
      <div class="col-sm-4">
        <img src="<?php print $sitePath;?>/images/google-group.png" alt="google" />
        <p>
          <span class="wedo">We Colaborate</span>
        </p>
        <p>
          <span>We have a Wiki group set up share tools and documents</span>
        </p>
        <a href="#" class="btn-primary">Wiki Group</a>
      </div>
    </div>
  </div>
</div>

<div id="mission" class="our-mission">
  <div class="mission">
    <div class="container">
      <h2>Our Mission</h2>
      <p>
        Charities and Partners collaborating and sharing open solutions and idead to create value in the digital space.
      </p>
      <p>
        If you are a charity or a supplier, we are ready to welcome you
      </p>
    </div>
  </div>
  <div class="row">
    <div class="container virtues">
      <div class="col-sm-4 virtue">
        <div>
          <img src="<?php print $sitePath;?>/images/bulp.png" alt="bulp" />
          <p>
            <span class="wedo">We help charities</span>
          </p>
          <p>
            <span>share knowledge and working practice to make the best technology.</span>
          </p>
        </div>
      </div>
      <div class="col-sm-4 virtue">
        <div>
          <img src="<?php print $sitePath;?>/images/people.png" alt="people" />
          <p>
            <span class="wedo">We bring together</span>
          </p>
          <p>
            <span>charities and suppliers to the chatiry sector to share best pratices.</span>
          </p>
        </div>
      </div>
      <div class="col-sm-4 virtue">
        <div>
          <img src="<?php print $sitePath;?>/images/like.png" alt="like" />
          <p>
            <span class="wedo">We encorage</span>
          </p>
          <p>
            <span>collaboration and innovation for the good of the charity sector.</span>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="our-members">
  <div class="container title">
    <h2>Our Members</h2>
  </div>
  <div id="our-members" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#our-members" data-slide-to="0" class="active"></li>
      <li data-target="#our-members" data-slide-to="1"></li>
    </ol>

    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <div class="container">
          <img src="<?php print $sitePath;?>/images/cancer-research-uk.png" alt="people" />
          <img src="<?php print $sitePath;?>/images/compucorp.png" alt="people" />
          <img src="<?php print $sitePath;?>/images/kop.png" alt="people" />
          <img src="<?php print $sitePath;?>/images/zing.png" alt="people" />
          <img class="comic" src="<?php print $sitePath;?>/images/comic-relief.png" alt="people" />
        </div>
      </div>
      <div class="item">
        <div class="container">
          <img src="<?php print $sitePath;?>/images/up.png" alt="people" />
          <img src="<?php print $sitePath;?>/images/vassit.png" alt="people" />
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container blog hidden-xs">
  <h2>Blog</h2>
  <div class="col-xs-12">
    <div id="blog" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <div class="col-sm-3">
            <div class="col-xs-12 title">
              <span>Online Donations Special...</span>
            </div>
            <div class="col-xs-12 text">
              <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </span>
            </div>
            <div class="col-xs-12 date">
              <span>Nov 14 2014</span>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="col-xs-12 title">
              <span>Online Donations Special...</span>
            </div>
            <div class="col-xs-12 text">
              <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </span>
            </div>
            <div class="col-xs-12 date">
              <span>Nov 14 2014</span>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="col-xs-12 title">
              <span>Online Donations Special...</span>
            </div>
            <div class="col-xs-12 text">
              <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </span>
            </div>
            <div class="col-xs-12 date">
              <span>Nov 14 2014</span>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="col-xs-12 title">
              <span>Online Donations Special...</span>
            </div>
            <div class="col-xs-12 text">
              <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </span>
            </div>
            <div class="col-xs-12 date">
              <span>Nov 14 2014</span>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="col-sm-3">
            <div class="col-xs-12 title">
              <span>Online Donations Special...</span>
            </div>
            <div class="col-xs-12 text">
              <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </span>
            </div>
            <div class="col-xs-12 date">
              <span>Nov 14 2014</span>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="col-xs-12 title">
              <span>Online Donations Special...</span>
            </div>
            <div class="col-xs-12 text">
              <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </span>
            </div>
            <div class="col-xs-12 date">
              <span>Nov 14 2014</span>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="col-xs-12 title">
              <span>Online Donations Special...</span>
            </div>
            <div class="col-xs-12 text">
              <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </span>
            </div>
            <div class="col-xs-12 date">
              <span>Nov 14 2014</span>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="col-xs-12 title">
              <span>Online Donations Special...</span>
            </div>
            <div class="col-xs-12 text">
              <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </span>
            </div>
            <div class="col-xs-12 date">
              <span>Nov 14 2014</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#blog" role="button" data-slide="prev">
        <span class="fa fa-angle-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#blog" role="button" data-slide="next">
        <span class="fa fa-angle-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</div>


<div class="container blog visible-xs">
  <h2>Blog</h2>
  <div class="col-xs-12">
    <div class="carousel-inner" role="listbox">
      <div class="item">
        <div class="col-sm-3">
          <div class="col-xs-12 title">
            <span>Online Donations Special...</span>
          </div>
          <div class="col-xs-12 text">
            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </span>
          </div>
          <div class="col-xs-12 date">
            <span>Nov 14 2014</span>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="col-xs-12 title">
            <span>Online Donations Special...</span>
          </div>
          <div class="col-xs-12 text">
            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </span>
          </div>
          <div class="col-xs-12 date">
            <span>Nov 14 2014</span>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="col-xs-12 title">
            <span>Online Donations Special...</span>
          </div>
          <div class="col-xs-12 text">
            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </span>
          </div>
          <div class="col-xs-12 date">
            <span>Nov 14 2014</span>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="col-xs-12 title">
            <span>Online Donations Special...</span>
          </div>
          <div class="col-xs-12 text">
            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </span>
          </div>
          <div class="col-xs-12 date">
            <span>Nov 14 2014</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div id="footer" class="row footer">
  <div class="container">
    <span class="fa fa-facebook"></span>
    <span class="fa fa-twitter"></span>
    <span class="fa fa-google-plus"></span>
  </div>
  <div class="container">
    <span>
      This site was built as a collaboration between <a href="#">Manifesto Digital</a> and <a href="#">Compucorp</a>
    </span>
  </div>
</div>
