<li class="block-img-spisok-punkt">
<div class="profil-info">
<h2 class="name-peop"><?php echo $person['Name'];?><span class="porfesion-peopl">/ <?php echo $person['Position'];?></span></h2>
<h3 class="more-info-peopl"><?php echo $person['Info'];?></h3>
<div class="social-people">
    <a class="fa fa-facebook icon-soc-peop" href="<?php echo $person['LinkFacebook'];?>"></a>
    <a class="fa fa-twitter icon-soc-peop" href="<?php echo $person['LinkTwitter'];?>"></a>
    <a class="fa fa-dribbble icon-soc-peop" href="<?php echo $person['LinkGit'];?>"></a>
    <a class="fa fa-envelope icon-soc-peop" href="<?php echo $person['LinkEmail'];?>"></a>
</div>
</div>
<img class="small-team-img" src="<?php echo '/img/imagesPerson/'.$person['Img'];?>" alt="team_1">
</li> 
   
