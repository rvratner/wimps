<?php $pageName = "records"; ?>

<?php include 'partials/_header.php';?>


<?php

function isMobile() {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}

if(isMobile()){ ?>

<!-- MOBILE -->

<!-- SUITCASE-->
<a href="http://thesewimps.bandcamp.com/album/suitcase" target="_blank"><img src="https://f1.bcbits.com/img/a4226811116_4.jpg"></a>
<!-- SUPER ME -->
<a href="http://thesewimps.bandcamp.com/album/super-me" target="_blank"><img src="https://f1.bcbits.com/img/a3911542793_4.jpg"></a>
<!-- COUCHES -->
<a href="http://thesewimps.bandcamp.com/album/couches-ep" target="_blank"><img src="https://f1.bcbits.com/img/a3084936663_4.jpg"></a>
<!-- PONY TIME / WIMPS SPLIT -->
<a href="http://thesewimps.bandcamp.com/album/wimps-pony-time-split" target="_blank"><img src="https://f1.bcbits.com/img/a2333922637_4.jpg"></a>
<!-- PARTY AT THE WRONG TIME -->
<a href="http://thesewimps.bandcamp.com/album/party-at-the-wrong-time" target="_blank"><img src="https://f1.bcbits.com/img/a4044872072_4.jpg"></a>
<!-- REPEAT -->
<a href="http://thesewimps.bandcamp.com/album/repeat" target="_blank"><img src="https://f1.bcbits.com/img/a1698005629_4.jpg"></a>
<!-- DEMO -->
<a href="http://thesewimps.bandcamp.com/album/demo" target="_blank"><img src="https://f1.bcbits.com/img/a2466359430_4.jpg"></a>


<?php } else { ?>

<!-- SUITCASE-->
<iframe style="border: 0;" src="https://bandcamp.com/EmbeddedPlayer/album=3808468925/size=large/bgcol=ffffff/linkcol=0687f5/minimal=true/transparent=true/" seamless><a href="http://thesewimps.bandcamp.com/album/suitcase">Suitcase Me by wimps</a></iframe>
<!-- SUPER ME -->
<iframe style="border: 0;" src="https://bandcamp.com/EmbeddedPlayer/album=2386713785/size=large/bgcol=ffffff/linkcol=0687f5/minimal=true/transparent=true/" seamless><a href="http://thesewimps.bandcamp.com/album/super-me">Super Me by wimps</a></iframe>
<!-- COUCHES -->
<iframe style="border: 0;" src="https://bandcamp.com/EmbeddedPlayer/album=404667862/size=large/bgcol=ffffff/linkcol=0687f5/minimal=true/transparent=true/" seamless><a href="http://thesewimps.bandcamp.com/album/couches-ep">Couches EP by wimps</a></iframe>
<!-- PONY TIME / WIMPS SPLIT -->
<iframe style="border: 0;" src="https://bandcamp.com/EmbeddedPlayer/album=897503027/size=large/bgcol=ffffff/linkcol=0687f5/minimal=true/transparent=true/" seamless><a href="http://thesewimps.bandcamp.com/album/wimps-pony-time-split">Wimps / Pony Time Split by wimps</a></iframe>
<!-- PARTY AT THE WRONG TIME -->
<iframe style="border: 0;" src="https://bandcamp.com/EmbeddedPlayer/album=4162989572/size=large/bgcol=ffffff/linkcol=0687f5/minimal=true/transparent=true/" seamless><a href="http://thesewimps.bandcamp.com/album/party-at-the-wrong-time">Party at the Wrong Time by wimps</a></iframe>
<!-- REPEAT -->
<iframe style="border: 0;" src="https://bandcamp.com/EmbeddedPlayer/album=3278434278/size=large/bgcol=ffffff/linkcol=0687f5/minimal=true/transparent=true/" seamless><a href="http://thesewimps.bandcamp.com/album/repeat">Repeat by wimps</a></iframe>
<!-- DEMO -->
<iframe style="border: 0;" src="https://bandcamp.com/EmbeddedPlayer/album=2429173239/size=large/bgcol=ffffff/linkcol=0687f5/minimal=true/transparent=true/" seamless><a href="http://thesewimps.bandcamp.com/album/demo">demo by wimps</a></iframe>

<?php } ?>

<?= $device ?>

<!-- POSTERS HERE? -->
<?php include 'partials/_footer.php';?>