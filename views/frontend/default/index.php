<?php
/* @var $this yii\web\View */
$this->title = 'WYP Sample Application';
$facebook_link = "https://www.facebook.com/kou92official/";
$twitter_link = "https://twitter.com/kou92official?ref_src=twsrc%5Etfw";
Yii::$app->db->createCommand()->insert('derss', ['id'=>'0','facebook_link'=>$facebook_link,'twitter_link'=>$twitter_link])->execute();
?>

<div class="site-index">

    <div class="jumbotron">
        <h1>Sosyal Medyada Biz</h1>
         <body>
         
         	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/tr_TR/sdk.js#xfbml=1&version=v2.11';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
 var facebook_jslink = "<?php echo $facebook_link; ?>";
 var twitter_jslink = "<?php echo $twitter_link; ?>";

</script>
         </body>
  
<div class="fb-page" data-href="<?php echo $facebook_link;?>" id = "fb_link" data-tabs="timeline" data-width="350" data-height="400" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="false">
	<blockquote cite="<?php echo $facebook_link; ?>" class="fb-xfbml-parse-ignore">
		<a href="<?php echo $facebook_link; ?>">Kocaeli Üniversitesi</a>

	</blockquote>
</div>

<br>
<br>
<br>
<br>
<br>

<a class="twitter-timeline" data-width="350" data-height="400" href="<?php echo $twitter_link;?>">Tweets by kou92official</a> 
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

    </div>
</div>
