<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html>
<head>
	<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
    <meta name="keywords" content="<?php echo $SEO['keyword'];?>">
    <meta name="description" content="<?php echo $SEO['description'];?>">
    <meta property="qc:admins" content="04371766676105453176526375" />
    <!--[if IE]>
        <script>
        (function(){if(!/*@cc_on!@*/0)return;var e = "abbr,article,aside,audio,canvas,datalist,details,dialog,eventsource,figure,footer,header,hgroup,mark,menu,meter,nav,output,progress,section,time,video".split(','),i=e.length;while(i--){document.createElement(e[i])}})()
        </script>
    <![endif]-->
    <link href="<?php echo CSS_PATH;?>reset_panda.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo CSS_PATH;?>style.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="<?php echo JS_PATH;?>jquery-1.6.js" ></script>
	<script type="text/javascript" src="<?php echo JS_PATH;?>tms-0.3.js"></script>
	<script type="text/javascript" src="<?php echo JS_PATH;?>tms_presets.js"></script>
	<script type="text/javascript" src="<?php echo JS_PATH;?>jquery.easing.1.3.js"></script>
	<script type="text/javascript">
	(function() {
		var c = document.createElement('script'); c.type = 'text/javascript'; c.async = true;
		c.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'www.clicki.cn/boot/45018';
		var h = document.getElementsByTagName('head')[0]; h.appendChild(c);
	})();
	</script>
</head>
<body>
	<header>
    	<nav class="main_nav">
        	<a href="<?php echo siteurl($siteid);?>" class="left"><img src="<?php echo IMG_PATH;?>logo.jpg" height="68" width="258" alt="<?php echo $SEO['site_title'];?>" title="<?php echo $SEO['site_title'];?>"></a>
            <ul class="left">
    			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b43f1459ac702900c8d44c91a5e796dd&action=category&catid=0&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">淇敼</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
            	<li><a href="<?php echo siteurl($siteid);?>">首页</a></li>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            	<li><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></li>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				<?php echo runhook('glogal_menu')?>
            </ul>
        </nav>
    </header>
