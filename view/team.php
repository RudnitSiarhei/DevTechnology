<li class="block-img-spisok-punkt">
    <div class="profil-info">
        <h2 class="name-peop"><?php echo $team['name'];?><span class="porfesion-peopl">/ <?php echo $team['position'];?></span></h2>
        <h3 class="more-info-peopl"><?php echo $team['info'];?></h3>
        <div class="social-people">
        <a class="fa fa-facebook icon-soc-peop" href="<?php echo $team['linkFacebook'];?>"></a>
        <a class="fa fa-twitter icon-soc-peop" href="<?php echo $team['linkTwitter'];?>"></a>
        <a class="fa fa-dribbble icon-soc-peop" href="<?php echo $team['linkDribbble'];?>"></a>
        <a class="fa fa-envelope icon-soc-peop" href="<?php echo $team['linkMail'];?>"></a>
        </div>
    </div>
    <img class="small-team-img" src="<?php echo $team['img'];?>" alt="team_1">
</li> 