<?

$exitLink = 'https://tidycarcan.com/product/salespage.php?affId='.$_GET['affId'].'&c1='.$_GET['c1'].'&c2='.$_GET['c2'];

?>
<html>
<head>
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<? date_default_timezone_set('America/Los_Angeles'); ?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no">

<script src="../js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
<script src="../js/jquery.min.js"></script>
<script src="../js/jquery-ui.min.js"></script>
<script src="../js/angular.min.js"></script>

<link rel="icon" type="image/png" href="../img/icon.png">

<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">



<style type="text/css">
body{
  margin: 0 0 0 0;
  font-family: 'Open Sans', sans-serif;
  background: #d5d4d0;
  padding-top: 15px;
}
a:link,
a:visited{
	text-decoration: inherit;
	color: inherit;
}
a.articleLink:link,
a.articleLink:visited{
  text-decoration: inherit;
	color:#205cc3;
  font-weight: bold;
}
a.articleLink:hover{
  color:#2b75f5;
  text-decoration: underline;
}
.clear{
	clear: both;
}
.addedTop{
  width: 100%;
  height: auto;
  text-align: center;
  color: #333;
  font-size: 17px;
  padding: 4px 0px;
}
#mainBox{
  width: 1600px;
  height: auto;
  background: #fff;
  margin: 0 auto;
  box-shadow: 0px 0px 7px #000;
}
#header{
  width: 100%;
  height: auto;
  margin: 0 auto;
  border-bottom: 2px solid #ccc;
  padding-top: 7px;
  padding-bottom: 7px;
}
#headerInner{
  width: 1250px;
  height: auto;
  margin: 0 auto;
}
#logoLeft{
  height: 70px;
  width: auto;
  float: left;
}
#textRight{
  height: 70px;
  width: auto;
  float: right;
  line-height: 70px;
  font-style: italic;
  color: #333;
  font-size: 17px;
}
#titleBox{
  width: 100%;
  height: auto;
  margin: 0 auto;
}
#titleInner{
  width: 1250px;
  height: auto;
  margin: 0 auto;
  text-align: center;
  padding-top: 20px;
}
#headline{
  width: 100%;
  height: auto;
  font-size: 34px;
  font-weight: bold;
  color: #222;
}
#author{
  width: 300px;
  height: auto;
  margin: 0 auto;
  font-size: 14px;
  font-weight: bold;
  color: #555;
  margin-top: 15px;
  padding-top: 10px;
  border-top: 1px solid #ccc;
}
#articleBox{
  width: 100%;
  height: auto;
  margin: 0 auto;
}
#articleInner{
  width: 1250px;
  height: auto;
  margin: 0 auto;
  padding-top: 35px;
}
#sidebar{
  width: 300px;
  height: auto;
  float: right;
}
.sidebarTitle{
  width: 100%;
  height: auto;
  font-size: 20px;
  text-align: left;
  font-weight: bold;
  color: #333;
  padding-bottom: 10px;
  border-bottom: 2px solid #ccc;
}
.sidebarNative{
  width: 100%;
  height: auto;
  margin: 0 auto;
  margin-top: 15px;
}
.nativeImg{
  width: 45%;
  height: auto;
  float: left;
}
.nativeText{
  width: 52%;
  height: auto;
  float: right;
  font-size: 13px;
  text-align: left;
  color: #444;
}
.nativeText:hover{
  text-decoration: underline;
}


.sidebarImg{
  width: 100%;
  height: auto;
  margin-top: 15px;
}
.sideBarText{
  width: 100%;
  height: auto;
  font-size: 17px;
  text-align: left;
  color: #333;
  margin-top: 10px;
}
#mainContent{
  width: 800px;
  height: auto;
  float: left;
  padding-bottom: 30px;
}
.articleImg{
  width: 100%;
  height: auto;
  margin: 0 auto;
  padding-bottom: 20px;
}
.articleImgsmall{
  width: 72%;
  height: auto;
  margin: 0 auto;
  padding-bottom: 20px;
}
.articleSubheader{
  width: 100%;
  height: auto;
  margin: 0 auto;
  padding-bottom: 15px;
  font-size: 22px;
  font-weight: bold;
  line-height: 28px;
  color: #17191c;
}
.blockQuote{
  width: calc(90% - 50px);
  height: auto;
  margin: 0 auto;
  border-left: 10px solid #ccc;
  background-color: #f9f9f9;
  background-image: url(../img/blockquote.png);
  background-repeat: no-repeat;
  line-height: 28px;
	padding: 10px 20px 10px 40px;
  margin-bottom: 20px;
}
.articleText{
  width: 100%;
  height: auto;
  margin: 0 auto;
  /*padding-bottom: 20px;*/
  font-size: 17px;
  line-height: 26px;
  color: #333;
}
.articleIndent{
  width: 90%;
  height: auto;
  margin: 0 auto;
  /*padding-bottom: 20px;*/
  font-size: 17px;
  line-height: 26px;
  color: #333;
}
.articleButton{
  width: calc(100% - 20px);
  height: auto;
  margin: 0 auto;
  padding: 8px;
  color: #fff;
  font-family: 'Open Sans';
  font-size: 18px;
  font-weight: bold;
  text-align: center;
  background-image: linear-gradient(to bottom,#f0ad4e 0,#eb9316 100%);
  background-repeat: repeat-x;
  border: 1px solid #e67919;
  border-radius: 4px;
}

.commentBreak{
	width:100%;
	border-bottom: 1px solid #198fff;
	margin:0 auto;
	height:80px;
}
#map {
  width: 700px;
  height: 405px
}
#footer{
  width: 100%;
  height: auto;
  margin: 0 auto;
  margin-top:60px;
  background: #5a787c;
}
#footerInner{
  width: 1040px;
  height: auto;
  margin: 0 auto;
  padding: 25px 0px;
  color: #fff;
  font-family: 'Roboto';
  font-size: 14px;
  text-align: center;
}
.linkLine{
  width: 300px;
  height: auto;
  margin: 0 auto;
  padding-top: 15px;
  color: #fff;
  font-family: 'Roboto';
  font-size: 14px;
  text-align: center;
}
.articleSubimg{
  width: 500px;
  height: auto;
  margin: 0 auto;
  padding-bottom: 20px;
}
.imageSub{
  width: 100%;
  height: auto;
  margin: 0 auto;
  padding-bottom: 20px;
  text-align: center;
  font-size: 16px;
  color: #777;
  font-style: italic;
}
li{
  padding-bottom: 15px;
}
.finalBox{
  width: calc(100% - 42px);
  height: auto;
  margin: 0 auto;
  padding: 30px 20px;
  border: 1px solid #dedede;
  margin-top: 30px;
  margin-bottom: 30px;
}
.articleButton{
  width: calc(100% - 20px);
  height: auto;
  margin: 0 auto;
  padding: 10px;
  color: #fff;
  font-family: 'Roboto';
  font-size: 30px;
  text-align: center;
  background: #63d021;
  border: none;
  outline: none;
}
.articleButton:hover{
  background: #49a511;
}
.updateBox{
  width: 100%;
  height: auto;
  margin: 0 auto;
  margin-bottom: 20px;
}
.updateTop{
  width: calc(100% - 20px);
  height: auto;
  margin: 0 auto;
  background: #459ef7;
  color: #fff;
  padding: 20px 10px;
  border-radius: 5px;
  font-size: 20px;
  font-weight: 700;
}
.updateBot{
  width: calc(100% - 20px);
  height: auto;
  margin: 0 auto;
  background: #f4f4c3;
  color: #111;
  padding: 20px 10px;
  border-radius: 2px;
  font-size: 18px;
  font-weight: 400;
}
.paperBox{
  width: calc(100% - 50px);
  height: auto;
  margin: 0 auto;
  padding: 25px;
  margin-bottom: 25px;
  background: url(../img/paperbg.jpg);
  background-repeat: repeat;
  box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.8);
}
.paperTitle{
  width: 100%;
  height: auto;
  color: #222;
  font-size: 24px;
  font-weight: 700;
  text-align: center;
  padding-bottom: 20px;
}
.paperText{
  width: 100%;
  height: auto;
  color: #222;
  font-size: 18px;
  font-weight: 400;
  text-align: left;
  padding-bottom: 20px;
}
.reviewBox{
  width: calc(100% - 50px);
  height: auto;
  padding: 25px;
  border-bottom: 1px solid #ddd;
}
.namePic{
  width: 34px;
  height: 34px;
  background: #a7a7a7;
  border-radius: 50%;
  float: left;
  position: relative;
  text-align: center;
  color: #fff;
  line-height: 34px;
  font-size: 20px;
}
.nameCheck{
  width: 12px;
  height: 12px;
  position: absolute;
  right: 0;
  bottom: 0;
  z-index: 10;
}
.dateRight{
  width: 120px;
  height: auto;
  float: right;
  font-size: 14px;
  color: #777;
}
.reviewHeader{
  width: calc(100% - 184px);
  height: 34px;
  float: left;
  margin-left: 15px;
}
.rh1{
  width: 100%;
  height: 20px;
  text-align: left;
  font-size: 14px;
  color: #777;
  line-height: 20px;
}
.rh2{
  width: 100%;
  height: 14px;
}
.reviewText{
  width: 100%;
  height: auto;
  margin-top: 15px;
  font-size: 16px;
  font-style: italic;
  color: #333;
}


@media screen and (max-width: 1600px) {
  body{
    padding-top: 10px;
  }
  #mainBox{
    width: 100%;
  }
  #headerInner,
  #titleInner,
  #articleInner{
    width: 1250px;
  }
  #mainContent{
    width: 750px;
  }
}

@media screen and (max-width: 1250px) {
  #headerInner,
  #titleInner,
  #articleInner{
    width: 95%;
  }
  .barLeft{
    width: 120px;
    font-size: 15px;
  }
  .barRight{
    width: 170px;
    font-size: 12px;
  }
  .barCenter{
    width: calc(100% - 290px);
    font-size: 11px;
  }
  #mainContent{
    width: 100%;
  }
  #sidebar{
    display: none;
  }
  #footerInner{
    width: 95%;
    font-size: 12px;
    padding: 20px 0px;
  }
  .imgSubheader{
    padding-bottom: 12px;
    font-size: 18px;
    line-height: 24px;
  }
  .articleImgsmall{
    width: 80%;
  }
  .articleSubheader{
    padding-bottom: 12px;
    font-size: 26px;
    line-height: 30px;
  }
  .articleText,
  .articleIndent{
    padding-bottom: 12px;
    font-size: 22px;
    line-height: 32px;
  }
  .articleButton{
    font-size: 24px;
  }
  #footerInner{
    width: 95%;
    font-size: 11px;
    padding: 15px 0px;
  }
  #map{
    transform: scale(0.8);
    margin-left: -80px;
  }
  .updateTop{
    width: calc(100% - 16px);
    padding: 16px 8px;
    font-size: 18px;
  }
  .updateBot{
    width: calc(100% - 16px);
    padding: 16px 8px;
    font-size: 17px;
  }
  .rh1{
    font-size: 11px;
  }
}
@media screen and (max-width: 750px) {
  .blockQuote{
		font-size:18px;
		line-height:24px;
  }
  .articleSubimg{
    width: 80%;
  }
}
</style>


</head>
<body>
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '552365194970012');
fbq('track', 'PageView');
fbq('track', 'ViewContent', {
  content_ids: ['<?php echo $_GET['utm_term'] ?>'],
  content_type: 'product',
  content_category: ['tidycar']
});
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=552365194970012&ev=PageView&noscript=1"
/></noscript>
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->



<div id="mainBox">
  <div id="header">
    <div id="headerInner">
      <div id="logoLeft">
        <img src="../img/logo1.png" height="100%" />
      </div>
      <div id="textRight">
        Advertisement - Sponsored by TidyCar
      </div>
      <div class="clear"></div>
    </div>
  </div>



  <div id="titleBox">
    <div id="titleInner">
      <div id="headline">
      Neck Reading Light
      </div>
      <div id="author">
        Maggie Williams | <?=date('l\, F d\, Y',strtotime('-9 days'));?>
      </div>
    </div>
  </div>


  <div id="articleBox">
    <div id="articleInner">
      <div id="sidebar">
        <div class="sidebarTitle">
          Sponsored By:
        </div>
        <div class="sidebarImg">
          <a href="https://about.att.com/pages/5g/how-5g-works.html" target="_blank">
            <img src="../img/attban.jpg" width="100%" />
          </a>
        </div>
        <div class="sidebarImg">
          <a href="https://www.mazdausa.com/vehicles/2020-cx-3" target="_blank">
            <img src="../img/mazdaban.jpg" width="100%" />
          </a>
        </div>
      </div>

      <div id="mainContent">
        <div class="articleImg" style="width:50%;">
          <img src="./img/splash.jpg" width="100%" />
        </div>

    <div class="articleText">
      <p>
        My relationship with sleep has always 
        been off and on. Some nights I’m exhausted and I’m out as soon as my head hits the pillow, 
        but other nights I like to stay up a little late and do some reading. I don’t think staying 
        up a bit past my ‘bedtime’ is a big deal, but my husband disagrees. If I so much as turn on 
        the lamp on my nightstand, he acts like I just dumped a bucket of water in his face. 
        “It’s too bright,” he complains from under his pillow. I take pity on the man and shut my light off, 
        but FORGET trying to read in the dark. I couldn’t do that when I was in my 20s, let alone now that 
        I’m almost 50. 
      </p>

      <p>
        But yes, I’ve been reading a lot lately…and if I am so inclined to read at night, 
        it has to be in a separate room from my husband. Even though it’s a tiny nightstand lamp, 
        apparently it’s too bright and will jolt him awake instantly.
      </p>

      <p>
        I have tried a few different things to make it a bit more bearable for him when I stay up later than him, 
        but it seemed like even the backlight from devices was bothering him. He tried not to say anything about it, 
        but I noticed him tossing and turning a lot. I’m not a huge fan of the electronics anyway, because even 
        when their backlight is good, something about the contrast with the darkness and reading in the dark 
        just strains my eyes; that, or I have to zoom in so far I’m reading about three or four sentences per 
        ‘page’ on the phone, and the constant swiping is irritating.
      </p>

      <p>
        I was at a local gadget store in my home town, trying to find something that could help solve 
        this problem, when one of the workers approached me and asked if I needed help. I told her about how 
        I can’t read in the dark, but my husband can’t sleep with any amount of light on, so I’m frustrated. 
        To my surprise, she knew exactly what to recommend for that.
      </p>


      <div class="blockQuote">
         <i>
            “I’m actually not supposed to say anything about this specific product because we don’t carry it in store, but you can find it on the official website,” she said. “It’s called <a class="articleLink" href="<?=$exitLink;?>">[Product Name]</a>, and the word is getting out about it. I think nowadays a lot more people are turning to reading, drawing, and knitting as a form of stress relief, and the only down time we get to ourselves seems to be at the end of the day. You’re the third person I’ve recommended it to this week!”
		    </i>
      </div>

      <p>I was intrigued. “I agree with that. Reading is my favorite hobby right now. But my husband is very sensitive to lights. What makes this [Product Name] any different?”</p>

      <div class="blockQuote">
         <i>
          She told me, “It doesn’t need batteries, so when you wear it around your neck and shoulders it weighs practically nothing, and that’s the thing…they designed it with a special narrow beam light that’s bright enough for you to see right in front of you, but it doesn’t light up the surrounding area. You should get on the <a class="articleLink" href="<?=$exitLink;?>">website</a> and give it a look!”
		    </i>
      </div>

      <p>
        That sounded too good to be true, but the girl sounded confident, and I was willing to give anything a try at this point. I rushed to the internet to do some research on the [Product Name].
      </p>

      </div>
    <div class="articleSubheader">
      What Is It And How Does It Work?
    </div>
    <div class="articleImgsmall" style="width:50%;">
      <img src="./img/product.jpg" width="100%" />
    </div>
    <div class="articleText">
      <p><a class="articleLink" href="<?=$exitLink;?>">[Product Name]</a> is a rechargeable LED neck light that makes it possible to read in the dark without disturbing your partner. Feel like drawing, writing, knitting or hand-sewing, any desktop activity, really? Now you can slip on your [Product Name], flip the lights on and adjust the two articulating arms to find the perfect angle, and with 3 useful color temperatures (yellow, warm white and cool white) you can tailor the light quality to your own preferences.</p>

      <p>Increase productivity! Decrease stress!.</p>

      <p>[Product Name] is an improved design of the standard book light, with a ton of advantages, like the special narrow beam angle (90 degree) design, which is bright enough to illuminate the area you are positioned at, but dim enough not to disturb your partner. No flickering, and a built-in blue light filter design with LED beads to decrease possibility of eyestrain. The [Product Name] contains a rechargeable 1000mAh battery that is incredibly lightweight and provides up to 80 hours of non-diminishing brightness.</p>
    </div>
    <div class="articleSubheader">
      But…Is It Really Worth All This Hype?
    </div>
    <div class="articleText">
      <p>So far, the <a class="articleLink" href="<?=$exitLink;?>">[Product Name]</a> has sold over 5 million units directly to consumers, even without the help of being sold in stores. [Product Name] has been SELLING OUT every time new stock becomes available, it’s become THAT popular.</p>

      <p>And, it’s all from word of mouth. People just like you are loving it so much that they’re posting about it on instagram and telling everyone they know about it!</p>
    </div>
    <div class="articleImgsmall" style="width:60%;">
      <img src="./img/IGpost.jpg" width="100%" style="border: 1px solid #ddd;" />
    </div>
    <div class="articleImgsmall" style="width:60%;">
      <img src="./img/IGpost2.jpg" width="100%" style="border: 1px solid #ddd;" />
    </div>
    <div class="articleText">
      <p><a class="articleLink" href="<?=$exitLink;?>">[Product Name]</a> has started to develop a cult following, and with over 7,000 5-star reviews, it makes sense. Here’s what customers are saying about it:</p>
    </div>
    <div class="reviewBox">
      <div class="namePic">
        M
        <div class="nameCheck">
          <img src="../img/revcheck.png" width="100%" />
        </div>
      </div>
      <div class="reviewHeader">
        <div class="rh1">
          <span style="font-weight: 700; color: #444; font-size: 15px;">Marcus L.</span> Verified Buyer
        </div>
        <div class="rh2">
          <img src="../img/stars.png" height="100%" />
        </div>
      </div>
      <div class="dateRight">
        5/27/21
      </div>
      <div class="clear"></div>
      <div class="reviewText">
      I’m actually beyond impressed with this device. After unpacking and a quick 20 minute charge it was ready for use. It looks large but I’m so impressed with how light it is. I didn’t even notice it around my neck. The “arms” are totally adjustable and move in your direction choice with no effort.
      </div>
    </div>
    <div class="reviewBox">
      <div class="namePic">
        S
        <div class="nameCheck">
          <img src="../img/revcheck.png" width="100%" />
        </div>
      </div>
      <div class="reviewHeader">
        <div class="rh1">
          <span style="font-weight: 700; color: #444; font-size: 15px;">Selena A.</span> Verified Buyer
        </div>
        <div class="rh2">
          <img src="../img/stars.png" height="100%" />
        </div>
      </div>
      <div class="dateRight">
        6/2/21
      </div>
      <div class="clear"></div>
      <div class="reviewText">
      The 3 light brightness levels are distinctly different brightness levels and really do offer great light for reading, looking in small dark spaces and Etc. I have used it now 3 hours on and off and have as yet not needed to charge it. Customer service was also impeccable. 5 stars all round
      </div>
    </div>
    <div class="reviewBox" style="border-bottom: none;">
      <div class="namePic">
        D
        <div class="nameCheck">
          <img src="../img/revcheck.png" width="100%" />
        </div>
      </div>
      <div class="reviewHeader">
        <div class="rh1">
          <span style="font-weight: 700; color: #444; font-size: 15px;">Dom C.</span> Verified Buyer
        </div>
        <div class="rh2">
          <img src="../img/stars.png" height="100%" />
        </div>
      </div>
      <div class="dateRight">
        6/8/21
      </div>
      <div class="clear"></div>
      <div class="reviewText">
      My mother still can’t stop talking about what a wonderful idea it is. How thrilled she is to be able to see everything, without contorting her body in strange ways, just to get the right amount of light. I sent her another one so she could have one in her bedroom, and one elsewhere. I ended up getting myself one also. I love it. It really is a simple idea, that makes life easier.


      </div>
    </div>
    <div class="articleText">
      <p>After the store worker confided in me, and reading the incredible reviews that backed up her claims, I was sold. I knew I needed to try <a class="articleLink" href="<?=$exitLink;?>">[Product Name]</a> for myself.</p>
    </div>
    <div class="articleSubheader">
      I Tried It Myself.
    </div>
    <div class="articleText">
      <p>I’ve been addicted to reading for years, but it hasn’t been a perfect experience because I can be a bit of a night owl, and my husband certainly is not. That all changed once I got my [Product Name] in the mail 2 days after I placed the order on the <a class="articleLink" href="<?=$exitLink;?>">official website.</a></p>

      <div class="articleImg" style="width:55%;">
        <img src="./img/unboxing.jpg" width="100%" />
      </div>

	  <p>As soon as I had it in my hands, I could tell it was well worth what I’d paid for it; the material was sturdy, looked great, and when I put it on it really did feel weightless, no strain on my neck at all. I plugged it into the charger and vowed to try it out later that night.</p>

      <p>
        I couldn’t help but get excited, so I waited for my husband to fall asleep, and then I pulled my <a class="articleLink" href="<?=$exitLink;?>">[Product Name]</a> from my night table, flipped it on and…it was glorious. I tried cycling it through all three light settings, and it didn’t matter if I had it on the weakest or the brightest, my husband stayed asleep and didn’t notice a thing. I immediately pulled up the latest book I’d been reading, and I can’t tell you how satisfying it was to read without straining my eyes. It allowed me to immerse myself in the book—I didn’t have to worry about the light waking up my husband at all.
      </p>

      <div class="articleImg" style="width:55%;">
        <img src="./img/splash.jpg" width="100%" />
      </div>

      <p>
        I was amazed. I loved my [Product Name] from the first time I used it. It was a night and day difference, and I knew I would be using this every evening. My husband didn’t even know for the first week that I had started using it, because it never woke him up! I just happened to start reading before he fell asleep and he asked me about it, so I told him I’d been using it for a week, and he actually said he like the [Product Name] because it felt like the light was being projected AWAY from him, rather than AT him.
      </p>
    </div>
    <div class="articleSubheader">
    Here’s What I Found…
    </div>
    <div class="articleText">
      <p>
        I found another use for my <a class="articleLink" href="<?=$exitLink;?>">[Product Name]</a>; knitting! I’m able to knit in total darkness—with the laser-focused beam of light from my [Product Name] giving me a full, clear view. That’s the magic of this innovative neck light; it shines perfectly where I angle it and even after a few hours of knitting, I don’t feel the weight of it bearing down on my neck and shoulders at all.
      </p>

      <div class="articleImg" style="width:55%;">
        <img src="./img/knitting.jpg" width="100%"/>
      </div>

      <p>
        After I got over this initial burst of excitement, I realized my daughter would benefit from one of these, too. I ordered her one from the website and gave it to her for her birthday. She tried it out for a few days with her lap cushion desktop that she does her college homework on, and she has been raving about it ever since!
      </p>

      <div class="articleImg" style="width:55%;">
        <img src="./img/daughter.jpg" width="100%"/>
      </div>
    </div>
    <div class="articleSubheader">
      Is It Worth It?
    </div>
    <div class="articleText">
      <p>	Of course! It’s been about six months, and my <a class="articleLink" href="<?=$exitLink;?>">[Product Name]</a> is still sturdy and functioning perfectly. I’ve been spreading the word, and even getting my friends their own [Product Name]s for their birthdays and holidays, and it’s really caught on.</p>

      <p>
        I wouldn’t have conceived of this myself, but apparently a lot of my family likes to bring their [Product Names] for camping trips, and I could see how it would be useful to have them after they told me about it. My brother, too, he’s into all the tech computer repair stuff, and he said the [Product Name] is far superior to a head lamp, and he’s so grateful I got him one for his birthday because he doesn’t get neck cramps from wearing those head lamps constantly. I’m just glad that I found something that works, and that it’s doing so much good for my family, too.
      </p>

      <div class="articleImg" style="width:55%;">
        <img src="./img/repair.jpg" width="100%"/>
      </div>

      </div>
    <div class="updateBox">
      <div class="updateTop">
        UPDATE
      </div>
      <div class="updateBot">
        <b>UPDATE <?=date('l\, F d\, Y',strtotime('-0 days'));?></b> - Ever since <a class="articleLink" href="<?=$exitLink;?>">[Product Name]</a> was featured on TV, an incredible amount of buzz has been generated and has since sold over 5 million units. Due to its popularity and positive reviews, the company is so confident in their product that they are now offering a <b>one-time discount of 50% off. To see if they are still available, click on the button below.</b>
      </div>
    </div>


    <a href="<?=$exitLink;?>">
      <div class="articleButton">
        Apply Discount & Check Availability >>
      </div>
    </a>





        <div class="commentBreak" style="margin-bottom: 30px;"></div>
        <!-- Load comments -->
        <?
        $commentsUrl= 'http://blackin.top/comments/tidycar.php'; // comments location
        $commentsCh = curl_init();
        $commentsTimeout = 5;
        curl_setopt($commentsCh,CURLOPT_URL,$commentsUrl);
        curl_setopt($commentsCh,CURLOPT_RETURNTRANSFER,1);
        curl_setopt($commentsCh,CURLOPT_CONNECTTIMEOUT,$commentsTimeout);
        $commentsData = curl_exec($commentsCh);
        curl_close($commentsCh);
        echo $commentsData;
        ?>
        <!-- End comments -->







      </div>
      <div class="clear"></div>
    </div>
  </div>
</div>







<!--Footer-->
<div id="footer">
  <div id="footerInner">
    THIS IS AN ADVERTISEMENT AND NOT AN ACTUAL NEWS ARTICLE, BLOG, OR CONSUMER PROTECTION UPDATE
    <br /><br />
    MARKETING DISCLOSURE: This website is a market place. As such you should know that the owner has a monetary connection to the product and services advertised on the site. The owner receives payment whenever a qualified lead is referred but that is the extent of it.
    <br /><br />
    ADVERTISING DISCLOSURE: This website and the products & services referred to on the site are advertising marketplaces. This website is an advertisement and not a news publication. Any photographs of persons used on this site are models. The owner of this site and of the products and services referred to on this site only provides a service where consumers can obtain and compare.
    <br /><br />
    © <?=date('Y'); ?> All Rights Reserved.
    <br /><br />
      <a href="../contact.php" class="textLink" target="_blank" style="color: white;">Contact Us</a> -
      <a href="../terms.php" class="textLink" target="_blank" style="color: white;">Terms & Conditions</a> -
      <a href="../privacy.php" class="textLink" target="_blank" style="color: white;">Privacy Policy</a>
    <? include_once('../dmca.php'); ?>
  </div>
</div>
</body>
</html>
