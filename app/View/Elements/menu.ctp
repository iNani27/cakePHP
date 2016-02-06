<?php
$c = $this->requestAction(array(
    "controller" => "categories",
    "action" => "getCat"
        ));

?>
<!-- menu collapse -->
<ul class ="nav navbar-nav">
    <li class=""><a href="#"><?php echo $c[0]["Category"]["lenom"]?></a></li>
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle ="dropdown" href="#"><?php echo $c[1]["Category"]["lenom"]?> <b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li><a href="#">Objet | But</a></li>
            <li><a href="#">CV | ExpÃ©riences</a></li>
            <li class="active"><a href="#">RÃ©alisations</a>
            <li class="active"><a href="#">FonctionalitÃ©s</a></li>
            <li class="active"><a href="#">Langages de programmation</a></li>
        </ul>  
    </li>
    <li><a href="#"><?php echo $c[2]["Category"]["lenom"]?></a></li>
    <li><a href="#"><?php echo $c[3]["Category"]["lenom"]?></a></li>
</ul>