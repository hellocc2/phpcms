<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
    <section class="allbanner">
				<div id="slider">
					<ul class="items">
						<li>
							<img src="<?php echo IMG_PATH;?>img1.jpg" width="1002" height="410" />
							<div class="banner">
								<span class="title"><span class="color2">���������</span><span class="color1">������������������ɧ�꣡</span></span>
								<p>������IE7��IE8��������IE6���ٲ����¾�OUT����</p>
								<a href="/html/contact/" class="button1">�鿴����</a>
							</div>
						</li>
						<li>
							<img src="<?php echo IMG_PATH;?>img2.jpg" width="1002" height="410" />
							<div class="banner">
								<span class="title"><span class="color2">��Ч����</span><span class="color1">�ۣ���ô����Ч��ôʵ�ֵģ�</span></span>
								<p>��������HTML5�����������ɣ���Ч����ʵ�֣��ף�ҪHoldס��</p>
								<a href="/html/study/html5/" class="button1">�鿴����</a>
							</div>
						</li>
						<li>
							<img src="<?php echo IMG_PATH;?>img3.jpg" width="1002" height="410" />
							<div class="banner">
								<span class="title"><span class="color2">��Դ����</span><span class="color1">Ӵ�����ƽ�������أ�����...����</span></span>
								<p>����������ô����������У��ƽ�棿�У������أ���������У����룿�����ľ��...</p>
								<a href="/html/download/" class="button1">�鿴����</a>
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
            <h3>WEB���</h3>
            <p>���Ը��صĸ���С���¡����������Ʒ ���ؼ�UI��GUI��ICON����</p>
          </a>
        </li>
        <li class="study left">
          <a href="/html/study/css3/">
            <h3>HTML5+CSS3ѧϰ</h3>
            <p>��IN���HTML5���ݼ�������а���ΰ��ļ���լ���Ҫ��������</p>
          </a>
        </li>
        <li class="download left">
          <a href="/html/download/">
            <h3>��Դ����</h3>
            <p>���ͣ���ô����Ķ�����ô�ܲ������գ����ߡ��������վ硢����...</p>
          </a>
        </li>
       </ul>
    </article>
    <article class="content">
    	<div class="allabout">
        	<ul class="about left">
            	<h3>��ǰ�˵�α���ʦ</h3>
                <img src="<?php echo IMG_PATH;?>myavatar.jpg" align="left" width="80" height="80" alt="MyAvatar">
                <p>"�Ӵ�html����һ�̣���֪��������ҵ�ѡ��"���ھ�ҵ���۵Ĺ���֤��ְҵ��һ�����ڻ���д�Ÿ߼���ҳ���ʦ...���۵�������ǰ�ˡ�<br>
              &nbsp;&nbsp;&nbsp;&nbsp;��Ϊ���˹�ġ�����а���լ��һö�����˱�ʾѹ���ܴ�<br><br> - Simplee</p>
          </ul>
            <ul class="contant left">
            	<h3>��ô�ҵ���</h3>
                <li>�ҵ�QQ��<a href="http://wpa.qq.com/msgrd?v=3&uin=807730999&site=qq&menu=yes" target="_blank">807730999</a></li>
                <li>����΢����<a href="http://weibo.com/layouts" target="_blank">weibo.com/layouts</a></li>
                <li>����д�ţ�<a href="http://mail.qq.com/cgi-bin/qm_share?t=qm_mailme&email=-4iekZKals7Gxs_-iZaP0Y6O0ZyQkg" style="text-decoration:none;" target="_blank">807730999@qq.com</a></li>
                <li>�ֻ����룺+86 15205625336</li>
                <li class="feed"><a href="<?php echo APP_PATH;?>index.php?m=content&c=rss&siteid=<?php echo get_siteid();?>" target="_blank">�����Ұ� ��</a></li>
            </ul>
            <ul class="news left">
            	<h3>��������Ѷ</h3>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=0f4a03a9cf1b45ea7590033315e09aaa&action=lists&catid=6&num=5&order=id+DESC&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'6','order'=>'id DESC','limit'=>'5',));}?>
                <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                <li><a href="<?php echo $v['url'];?>"><?php echo str_cut($v['title'],42,'...');?></a></li>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
        </div>
    </article>



<?php include template("content","footer"); ?>