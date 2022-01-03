{% extends 'partials/body.twig.php' %}

{% block title %}HOME PAGE{% endblock %}

{% block body %}
<section class="banner" id="banner">
    <div class="content">
        <div class="imgBx"><img src="{{BASE}}/public/img/user.jpg" alt="user portifolio"></div>
        <h3>Daniel Anjos</h3>
        <p>Full Stack PHP Developer</p>
        <a href="{{BASE}}cv" class="btn" target="_blank">Baixe meu Currículo</a>
        <ul class="socialMedia">
            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
        </ul>
    </div>
</section>
{% endblock %}