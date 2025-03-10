{% extends 'nav.php'%}

{% load static %}

 {% block content %}
 <div class="page-heading normal-space" style="background-image: url('{% static '/img/asbg.jpg' %}');">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2>Our Stories</h2>
         </div>
      </div>
    </div>
  </div>
  <div class="page_contant">
    <div class="container">
      <div class="row">
        <!-------------- Page Content --------------->
        <div class="col-lg-12">
          <div class="section-title text-center position-relative pb-3 mb-5">
            <h5 class="fw-bold text-primary12 text-uppercase mb-2">FireFly VFX</h5>
            <h1 class="mb-0">Our Stories</h1>
          </div>
        </div>
        <div id="posts_content">
                  <div class="col-lg-4 wow zoomIn team_list" data-wow-delay="0.3s">
            <div class="services-wrap"> <img src="{% static '/img/story.jpg' %}" alt="">
              <div class="text">
                <div class="icon"><i class="fas fa-newspaper"></i></div>
                <h2>Charity programme in NGO</h2>
                <h3>5th Jan 2023</h3>
                <a href="story_details.php?story_id=2" class="btn-custom">View Full Story</a> </div>
            </div>
          </div>
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 pagidiv"> Showing : 1 </div>
        </div>
        <!-------------- Page Content --------------->
      </div>
    </div>
  </div>

 {% endblock %}