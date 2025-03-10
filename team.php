{% extends 'nav.php'%}

{% load static %}

 {% block content %}
<div class="page-heading normal-space" style="background-image: url('{% static '/img/team_bg.jpg' %}'); height: auto ;   center center no-repeat;">
    <div class="container">
      <div class="row ">
        <div class="col-lg-12">
          <h2>OUR TEAM</h2>
           </div>
      </div>
    </div>
  </div>
  <div class="page_contant text-white">
    <div class="container">
      <div class="row">
        <!-------------- Page Content --------------->
        <div class="col-lg-12">
          <div class="section-title text-center position-relative pb-3 mb-5">
          
            <h5 class="fw-bold text-primary12 text-uppercase mb-2">FireFly VFX</h5>
            <h1 class="mb-0">Our Professional Team</h1>
           
          </div>
        </div>
        <!-------------- Team List --------------->
              <div class="col-lg-6 wow zoomIn team_list" data-wow-delay="0.3s">
          <div class="member-item"> <img src="{% static '/img/sunil.jpg' %}" alt="">
            <div class="member-text">
              <h4 class="mb-2">Sunil Singha</h4>
              <h3>Founder & CEO</h3>
              <p>Team has over 17+ years of experience in the film and television industry and had worked on over 100 Films &amp; Episodes. Founders bring their years of experience, successfully blending the science of Business, Creativity, and Technology. These Founders are admired as one of the best Pipelines and have worked with the industry leaders. Worked on many Feature films, Web &amp; Television Episodes, and Advertising spaces. Best Academy Award-winning movies, as Supervising the shows.</p> </div>
          </div>
        </div>
              <div class="col-lg-6 wow zoomIn team_list" data-wow-delay="0.3s">
          <div class="member-item"> <img src="{% static '/img/sudeep.jpg' %}" alt="">
            <div class="member-text">
              <h4 class="mb-2">Sandeep Dutta</h4>
              <h3>Manager</h3>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrcaddaffre  rgrgg Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p> </div>
          </div>
        </div>
              <!-------------- Team List --------------->
      </div>
    </div>
  </div>
  {% endblock %}