<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{BASE}}css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>
        {% block title %}{% endblock %}
    </title>
</head>
<body>
    {% include 'partials/header.twig.php' %}

    <div class="main">
        <div class="topbar">
            <a href="#" class="logo">Portifólio</a>
            <div class="toggle">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </div>
        </div>
    </div>

    {% block body %}{% endblock %}
</body>
</html>