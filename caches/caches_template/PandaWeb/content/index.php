<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
    <section class="allbanner">
				<div id="slider">
					<ul class="items">
						<li>
							<img src="<?php echo IMG_PATH;?>img1.jpg" width="1002" height="410" />
							<div class="banner">
								<span class="title"><span class="color2">浏览器升级</span><span class="color1">快来更新你的浏览器吧骚年！</span></span>
								<p>还在用IE7、IE8？神马？还IE6？再不更新就OUT啦！</p>
								<a href="/html/contact/" class="button1">查看更多</a>
							</div>
						</li>
						<li>
							<img src="<?php echo IMG_PATH;?>img2.jpg" width="1002" height="410" />
							<div class="banner">
								<span class="title"><span class="color2">特效兜儿</span><span class="color1">哇，这么多特效肿么实现的？</span></span>
								<p>快来感受HTML5的无穷魅力吧，嘛效果能实现！亲，要Hold住！</p>
								<a href="/html/study/html5/" class="button1">查看更多</a>
							</div>
						</li>
						<li>
							<img src="<?php echo IMG_PATH;?>img3.jpg" width="1002" height="410" />
							<div class="banner">
								<span class="title"><span class="color2">资源分享</span><span class="color1">哟，有破解软件下载？还有...雅蠛蝶</span></span>
								<p>开发工具有么？这个必须有！破解版？有！种子呢？这个可以有！无码？这个真木有...</p>
								<a href="/html/download/" class="button1">查看更多</a>
							</div>
						</li>
					</ul>
				</div>
		<script type="text/javascript"> Cufon.now(); </script>
		<script>
			$(window).load(function(){
				$('#slider')._TMS({
					banners:true,
					waitBannerAnimation:false,
					preset:'diagonalFade',
					easing:'easeOutQuad',
					pagination:true,
					duration:400,
					slideshow:8000,
					bannerShow:function(banner){
						banner.css({marginRight:-500}).stop().animate({marginRight:0}, 600)
					},
					bannerHide:function(banner){
						banner.stop().animate({marginRight:-500}, 600)
					}
					})
			})
		</script>
	    </section>
    <article class="guide">
      <ul>
        <li class="web left">
          <a href="/html/study/design/">
            <h3>WEB设计</h3>
            <p>来自各地的各种小清新、简洁的设计作品 像素级UI、GUI、ICON欣赏</p>
          </a>
        </li>
        <li class="study left">
          <a href="/html/study/css3/">
            <h3>HTML5+CSS3学习</h3>
            <p>最IN最潮的HTML5内容及交流，邪恶而伟大的技术宅这次要拯救人类</p>
          </a>
        </li>
        <li class="download left">
          <a href="/html/download/">
            <h3>资源下载</h3>
            <p>矮油，这么好玩的东西肿么能不分享勒？工具、技术、日剧、种子...</p>
          </a>
        </li>
       </ul>
    </article>
    <article class="content">
    	<div class="allabout">
        	<ul class="about left">
            	<h3>爱前端的伪设计师</h3>
                <img src="<?php echo IMG_PATH;?>myavatar.jpg" align="left" width="80" height="80" alt="MyAvatar">
                <p>"接触html的那一刻，我知道这就是我的选择"迫于就业，咱的工作证上职业那一栏现在还是写着高级网页设计师...但咱的心属于前端。<br>
              &nbsp;&nbsp;&nbsp;&nbsp;作为外表斯文、内心邪恶的宅男一枚，本人表示压力很大。<br><br> - Simplee</p>
          </ul>
            <ul class="contant left">
            	<h3>怎么找到我</h3>
                <li>我的QQ：<a href="http://wpa.qq.com/msgrd?v=3&uin=807730999&site=qq&menu=yes" target="_blank">807730999</a></li>
                <li>新浪微博：<a href="http://weibo.com/layouts" target="_blank">weibo.com/layouts</a></li>
                <li>给我写信：<a href="http://mail.qq.com/cgi-bin/qm_share?t=qm_mailme&email=-4iekZKals7Gxs_-iZaP0Y6O0ZyQkg" style="text-decoration:none;" target="_blank">807730999@qq.com</a></li>
                <li>手机号码：+86 15205625336</li>
                <li class="feed"><a href="<?php echo APP_PATH;?>index.php?m=content&c=rss&siteid=<?php echo get_siteid();?>" target="_blank">订阅我吧 亲</a></li>
            </ul>
            <ul class="news left">
            	<h3>互联网资讯</h3>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=0f4a03a9cf1b45ea7590033315e09aaa&action=lists&catid=6&num=5&order=id+DESC&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">淇敼</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'6','order'=>'id DESC','limit'=>'5',));}?>
                <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                <li><a href="<?php echo $v['url'];?>"><?php echo str_cut($v['title'],42,'...');?></a></li>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
        </div>
    </article>



<?php include template("content","footer"); ?>