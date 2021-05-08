<?php // Load and parse the XML document 
$id=$_GET['id'];
$rss =  @simplexml_load_file($id);

if ($rss == false) {
            header("location:/404.html");
        }

$title =  $rss->channel->title;
?>
<html xml:lang="zh-cn" lang="zh-cn">
<head>
<meta name=”viewport” content=”width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no” />
  <title><?php echo $title; ?></title>
<script language="javascript">

var t = null;

t = setTimeout(time,1000);//开始执行

function time()

{

clearTimeout(t);//清除定时器

dt = new Date();

var y=dt.getYear()+1900;

var mm=dt.getMonth()+1;

var d=dt.getDate();

var weekday=["星期日","星期一","星期二","星期三","星期四","星期五","星期六"];

var day=dt.getDay();

var h=dt.getHours();

var m=dt.getMinutes();

var s=dt.getSeconds();

if(h<10){h="0"+h;}

if(m<10){m="0"+m;}

if(s<10){s="0"+s;}

document.getElementById("timeShow").innerHTML =  +y+"年"+mm+"月"+d+"日"+weekday[day]+" "+h+":"+m+":"+s+"";

t = setTimeout(time,1000); //设定定时器，循环执行           

}

</script>	
</head>
<body>
<style type="text/css">
	h1.serif{ font-family:"STLiti",Georgia,Serif}
	 .post img{ 
 width:100%;
 height:auto;
 margin:5px;
	!important;

}

     .a video{height:auto; width:100px}
p{
  word-wrap: break-word;
  word-break: break-all;
  overflow: hidden;!important;
   
}
br{
  word-wrap: break-word;
  word-break: break-all;
  overflow: hidden;
	!important;
}
span{
  word-wrap: break-word;
  word-break: break-all;
  overflow: hidden;
	!important;
}
.div is-hidden-mobile{font-family:"STLiti",Georgia,Serif}
a{
  word-wrap: break-word;!important;
  word-break: break-all;!important;
  overflow: hidden;!important;
  color: var(--c1);
  background-color: transparent;
  cursor: pointer;
  text-decoration: none;
}
video{
  width:100%;
	!important;
}
.div bilibili-player-video-pause-panel-container-mask{
  width:100%;
	!important;
}

</style>
<script type="text/javascript" src="/jquery-1.8.2.js"></script>
<script src="/jquery.masonry.min.js"></script>


<script type="text/javascript">
jQuery(function(){
    jQuery(window).load(function(){
	$(function(){
    $('#container').masonry({
      // options 设置选项
      itemSelector : '.post',//class 选择器
      columnWidth : 50 ,//一列的宽度 Integer
          isAnimated:true,//使用jquery的布局变化  Boolean
          animationOptions:{
            //jquery animate属性 渐变效果  Object { queue: false, duration: 500 }
          },
          gutterWidth: 0 ,//列的间隙 Integer
          isFitWidth:true,// 适应宽度   Boolean
          isResizableL:true,// 是否可调整大小 Boolean
          isRTL:false,//使用从右到左的布局 Boolean
  });
});
});
});

</script>
	
<div id="title"style="height:200px;overflow: hidden;width: 100%;border-bottom:5px solid #000; ">			

<div class="is-hidden-mobile" style="margin-right: 2rem; width: 100%; display: flex; flex-direction: row; justify-content: space-between; flex-wrap: nowrap;font-family:"STLiti",Georgia,Serif;">
        
            <a href="?id=https://p.zzhsxy.workers.dev/https/siftrss.com/f/bLKeoVXela"style="font-family:"STLiti",Georgia,Serif">Dcard Sex</a>
        
            <a href="?id=https://love.dogcloud.workers.dev/https/siftrss.com/f/NrAVYXnM78X"style="font-family:"STLiti",Georgia,Serif">相沢みなみ</a>
        
            <a href="?id=http://555888.xyz/mi/bbs/board/567428">主题壁纸</a>
        
            <a href="?id=http://555888.xyz/mi/bbs/board/5575166">小米9</a>
        
            <a href="?id=http://555888.xyz/mi/bbs/board/5425803">小爱同学</a>
        
            <a href="/?cat=opinion">opinion</a>
        
            <a href="/?cat=programming">programming</a>
        
            <a href="/?cat=tech">tech</a>
        
        
    
</div>
<div class="t"style="margin:10px;padding:0px 10px 0px 10px;font-size:25px;">
<h1 class="serif"><?php echo $title; ?></h1>
</div>
<div id="timeShow" class="time1"style="float:left;margin:10px;padding:10px;"></div>
	
</div>

<div id="container">
<?php
// Here we'll put a loop to include each item's title and description
foreach (@$rss->channel->item as $item) {
	$des=str_replace("<img src=\"https://","<img class=\"cover\" src=\"https://p.zzhsxy.workers.dev/https/",$item->description);
  echo "<div id=\"root\" class=\"post\" style=\"width:268px; margin:0px;height:auto;margin:5px 5px 15px 5px;border:0.5px solid #e0c8d0; border-radius: 15px;  padding:10px;float: left;font-weight: 700!important; \">";
  echo "<h2><a>" . $item->title . "</a></h2>";
  echo "<h5><a>" . $item->author . "</a></h5>";
  echo "<h5><a>" . $item->pubDate . "</a></h5>";
  echo "<p>" . $des . "</p>";
  echo "<p><a href='" . $item->link . "'>"."阅读原文"."</a></p>";
  echo "</div>";
}
?>
</div>
</div>

</body>
</html>
