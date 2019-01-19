<?php
	require_once 'config.php';
	
	$total_banners = 4;
	$banner_titles = array (
		"ילד צריך מגע. לא מסך מגע.",
		"אין מסכים בשעת הסעודה",
		"הילדים שלי חושבים מחוץ לקופסה",
		"לא על הטאבלט לבדו יחיה האדם"
	);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <?php require_once $loc . $assetsDir . 'meta.php'; ?>
      
    <link href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Assistant:200,300,400,600,700,800" rel="stylesheet" />
    <link type="text/css" href="css/reset.css" rel="stylesheet" media="screen" />
    <link type="text/css" href="css/style.css" rel="stylesheet" media="screen" />
    <link type="text/css" href="css/accessibility.css" rel="stylesheet" media="screen" />
    <!--[if lt IE 9]>
      <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.8.1/jquery-ui.js"></script>
    <script type="text/javascript" src="js/respond.min.js"></script>
    <script type="text/javascript" src="js/jquery.mousewheel-3.0.6.pack.js"></script>
    <script type="text/javascript" src="js/jquery.scrollTo.js"></script>
    <script type="text/javascript" src="http://clalit-info.co.il/campaigns/assets/simplebar.js"></script>
    <script type="text/javascript" language="javascript">
      var meta_gtm = "";
      var meta_domain = "";
    </script>
  </head>
    
  <body>
    <div id="fb-root"></div>
    <div id="wrapper">
      <?php require_once $loc . $assetsDir . 'accessibility.php'; ?>
      <header>
        <h1>Clalit</h1>
        <h2><span>כללית מציגה:</span><br />המלצות לבריאות הילדים בעידן הדיגיטלי</h2>
        <nav>
          <ul>
            <li class="btn">המלצות<span>לבריאות הילדים</span></li>
            <li class="btn">אמנה<span>&nbsp;</span>משפחתית</li>
            <li class="btn">כתבות<span>&nbsp;</span>חשובות</li>
            <li class="btn">6 כללי הזהב<span>לבריאות הילדים</span></li>
          </ul>
        </nav>
      </header>
          
      <section id="section1" class="section right box-shadow">
        <h2>המלצות לבריאות הילדים בעידן הדיגיטלי</h2>
        <p>אנחנו חיים בעולם דיגיטלי ומוצאים את עצמנו רוב היום מול מסכים: סמארטפון, טאבלט, לפטופ, מחשב נייח ואיך לא - הטלוויזיה! אנחנו כבר מקרה אבוד... אבל מה בנוגע לילדים? אותם אפשר וצריך להרגיל למציאות אחרת, כזאת שמאפשרת להם לגדול באמת, בלי הפרעות על המרקע.<br />בשנים האחרונות מתפרסמים יותר ויותר מחקרים שמהם עולה שהמסכים מזיקים לילדים שלנו. אז מה עושים? ארזנו לכם 5 המלצות של איגוד רופאי הילדים שיעזרו לכם ולילדים שלכם לחיות בצורה בריאה יותר בעולם הדיגיטלי הזה שלנו. <a href="http://www.clalit.co.il/he/your_health/kids/Pages/health_in_the_digital_age.aspx" target="_blank">להמשך קריאה &gt;&gt;</a></p>
        <div class="article-img img-shadow">
          <img src="images/articles/img1.jpg" alt="Children at play" title="המלצות לבריאות הילדים בעידן הדיגיטלי" />
        </div>
      </section>

      <section id="section2" class="section right box-shadow">
        <h2>אמנה משפחתית</h2>
        <h4>מדפיסים. חותמים. משתפים.</h4>
        <p>רוצים להדפיס, לחתום ולתלות על המקרר?</p>
        <div class="btn">
          <small>לחצו &gt;&gt;</small>
        </div>
      </section>
          
      <section id="section3" class="section left box-shadow">
        <h2>כתבות שחשובות לבריאות הילדים</h2>

        <div class="article-excerpt">
          <div class="article-img img-shadow">
            <img src="images/articles/thumb3.jpg" alt="Family quality time" title="השפעת הטכנולוגיה על המוח של הילדים שלכם" />
          </div>
          <div class="article-txt">
            <h4>השפעת הטכנולוגיה על המוח של הילדים שלכם</h4>
            <p>ילדים לא מתקשרים אחד עם השני בגלל הסמארטפונים, סובלים מבעיות קשב וריכוז עקב התמכרותם למחשבים וחשופים יותר לאלימות כתוצאה מהרשתות החברתיות. בטוחים שזה נכון? לפני שמאשימים את הטכנולוגיה בכל הדברים הרעים, הגיע הזמן לנפץ כמה מיתוסים ולהבין את עולמם של הילדים</p>
            <a href="http://www.ynet.co.il/articles/0,7340,L-4829141,00.html" target="_blank">להמשך קריאה &gt;&gt;</a>
          </div>
        </div>

        <div class="article-excerpt">
          <div class="article-img img-shadow">
            <img src="images/articles/thumb4.jpg" alt="Too much radiation" title="צפייה במסכים - מה היא עושה לנו?" />
          </div>
          <div class="article-txt">
            <h4>צפייה במסכים - מה היא עושה לנו?</h4>
            <p>אנחנו והילדים מבלים הרבה זמן מול מסכי המחשב, הטלוויזיה והסמארטפונים. הצפייה הזאת אולי מהנה, אבל האם היא בריאה לנו? האמת שלא ממש. מה קורה אם מתבוננים יותר מדי במסכים, מהם כללי הצפייה הנכונים, כמה שעות מומלצות ביום וממה חשוב להימנע?</p>
            <a href="http://www.clalit.co.il/he/your_health/kids/childs/Pages/kids_and_screens_2.aspx" target="_blank">להמשך קריאה &gt;&gt;</a>
          </div>
        </div>

        <div class="article-excerpt">
          <div class="article-img img-shadow">
            <img src="images/articles/thumb2.jpg" alt="Child achievements" title="על דיאטת מסכים כבר שמעתם?" />
          </div>
          <div class="article-txt">
            <h4>על דיאטת מסכים כבר שמעתם?</h4>
            <p>כשם שרקדן לא יכול להאשים את הרצפה שהתעקמה, גם אנחנו לא יכולים להפיל את כל זוועות העולם על הטכנולוגיה, ולתלות את כל האשמה על ההתנהגויות לא רצויות של ילדים ונוער על המסכים. אבל אנחנו כן יכולים לקחת אחריות על המינונים וההשפעות על חיי ילדינו. מה עושים? טוב ששאלתם</p>
            <a href="http://www.mako.co.il/tv-the-mission-amazonas/season1-health_in_digital_days/Article-6c4b6057ee3d551006.htm?sCh=5ea829d5af4b5510&pId=173113802" target="_blank">להמשך קריאה &gt;&gt;</a>
          </div>
        </div>

        <div class="article-excerpt">
          <div class="article-img img-shadow">
            <img src="images/articles/thumb1.jpg" alt="Parents watch" title="מה המסך עושה למוח של הילדים שלנו?" />
          </div>
          <div class="article-txt">
            <h4>מה המסך עושה למוח של הילדים שלנו?</h4>
            <p>האם צריך למנוע או להגביל שימוש במסכים? האם אכן קיימת התמכרות למסכים? כיצד מסכים משפיעים על דימוי הגוף? האם הם אכן פוגעים בראייה ובעצמות?<br />ד&quot;ר איילת הלוי, נוירולוגית מ&quot;כללית&quot;, עם התשובות</p>
            <a href="http://www.mako.co.il/tv-the-mission-amazonas/season1-health_in_digital_days/Article-4abb3492eb4c551006.htm?sCh=5ea829d5af4b5510&pId=173113802" target="_blank">להמשך קריאה &gt;&gt;</a>
          </div>
        </div>

        <div class="article-excerpt">
          <div class="article-img img-shadow">
            <img src="images/articles/thumb5.jpg" alt="Parents watch" title="טלוויזיה לפני השינה - כך היא פוגעת בילדים" />
          </div>
          <div class="article-txt">
            <h4>טלוויזיה לפני השינה - כך היא פוגעת בילדים</h4>
            <p>מחקרים מוכיחים שצפייה של ילדים בטלוויזיה בשעות הערב גורמת לבעיות באיכות וכמות השינה, במיוחד כשמדובר בילדים קטנים.<br />אז איך נגרום להם להתנתק מהמסכים ולמצוא דרכים טובות יותר להירדם?</p>
            <a href="http://www.ynet.co.il/articles/0,7340,L-4832180,00.html " target="_blank">להמשך קריאה &gt;&gt;</a>
          </div>
        </div>
      </section>
          
      <aside id="blue-box" class="box-shadow">
        <h4>הדפיסו ושתפו בקליק אחד&nbsp;&nbsp;
        <span>
          <div class="arrows">
            <div class="arrow bounce"></div>
            <div class="arrow bounce"></div>
          </div>
        </span>
        </h4>
        <?php
          for($j = 0; $j < $total_banners; $j++) {
          echo '<img src="images/articles/banner-thumb' . ($j+1) . '.jpg" class="img-shadow" alt="' . $banner_titles[$j] . '" title="' . $banner_titles[$j] . '" />';
          }
        ?>
      </aside>

      <aside id="green-box" class="box-shadow">
        <h4>רוצים לגלות את 6 כללי הזהב לבריאות הילדים?</h4>
        <h6>הקליקו
        <span>
          <div class="arrows">
            <div class="arrow bounce"></div>
            <div class="arrow bounce"></div>
          </div>
        </span>
        </h6>
      </aside>
      <div id="twisted"></div>
    </div>
      
    <div id="popups">
      <!-- Banner Popup -->
      <div id="banner-popup" class="details right box-shadow">
        <?php
          for($i = 0; $i < $total_banners; $i++) {
          echo '<div class="share-banner">';
          echo '<img src="images/stickers/banner' . ($i+1) . '.jpg" class="img-shadow" alt="' . $banner_titles[$i] . '" title="' . $banner_titles[$i] . '" />';
          echo '<div class="share-icons print" title="הדפסה">Print</div>';
          echo '<div class="share-icons whatsapp" title="שיתוף בוואטסאפ">Share via Whatsapp</div>';
          echo '<div class="share-icons facebook" title="שיתוף בפייסבוק">Share on Facebook</div>';
          echo '</div>';
          }
        ?>
        <div class="close-btn">סגירה</div>
      </div>
          
      <!-- Rules Popup -->
      <div id="rules-popup" class="details box-shadow">
        <h4>כללי הזהב<span></span>לבריאות הילדים</h4>
        <ol>
          <li>מומלץ להקפיד על שתיית מים בלבד והפחתת משקאות ממותקים</li>
          <li>יש להפחית את צריכת המזון המהיר (ג'אנק פוד)</li>
          <li>מומלץ להפחית את שעות &quot;אי הפעילות&quot; של הילדים</li>
          <li>במקביל, יש להגדיל את כמות הזמן המוקדשת לפעילות גופנית ותנועה</li>
          <li>מומלץ לקיים ארוחה משפחתית אחת ביום לפחות סביב השולחן (כולם מוזמנים, חוץ מהסמארטפונים)</li>
          <li>יש לצמצם ככל שניתן את החשיפה למסכים</li>
        </ol>
        <div class="close-btn">סגירה</div>
      </div>
          
      <!-- Signup Popup -->
      <div id="signup-popup" class="details box-shadow">
        <h4>אמנה משפחתית</h4>
        <h5>אנו, בני משפחת<span>_</span><br />מתוך אהבה ודאגה הדדית זה לזה, מתחייבים לעשות כל מה שביכולתנו כדי לשמור על חיים בריאים של כל בני המשפחה:</h5>
        <ol>
          <li>
            <h6>דוגמה אישית</h6>
            <p>אנו, ההורים, מבטיחים להוות דוגמה חיובית לילדינו, כדי שנחיה חיים בריאים וארוכים ביחד.</p>
          </li>
          <li>
            <h6>פעילות גופנית</h6>
            <p>נשתדל לקיים יותר פעילות גופנית משותפת, כמו הליכה, ריצה, רכיבה על אופניים, נלך יותר ברגל ונשחק בחצר ביחד.</p>
          </li>
          <li>
            <h6>צפייה משותפת</h6>
            <p>כשצופים בטלוויזיה או באמצעי תקשורת אלקטרוניים אחרים, נשתדל לקיים צפייה משותפת של ההורים עם הילדים ונשוחח על התכנים שאנו רואים. נשתדל שלא לאכול מול הטלוויזיה.</p>
          </li>
          <li>
            <h6>הגבלת זמן המסכים</h6>
            <p>נעשה כל מאמץ כדי להגביל את זמן המסך:</p>
            <ul>
              <li>שעתיים ביום לכל היותר לילדים בגיל בית הספר</li>
              <li>שעה ביום לילדים בגיל הגן</li>
              <li>נשתדל למנוע מתינוקות מתחת לגיל שנתיים להיחשף לאמצעי תקשורת אלקטרוניים</li>
            </ul>
          </li>
          <li>
            <h6>אזורים נקיים ממסכים</h6>
            <p>נגדיר אזורים ללא מסכים בבית - אזורים שאין אישור להכניס אליהם סמארטפון, טאבלט, מחשב או טלוויזיה.<br />כך נוכל להיות מרוכזים אחד בשני ובסביבה - לא רק במסך - ולשמור על איכות החיים ועל הרגלי שינה בריאים.</p>
          </li>
        </ol>
        <blockquote>ובאנו על החתום:</blockquote>
              
        <div class="share-icons facebook" title="שיתוף בפייסבוק">Share on Facebook</div>
        <div class="share-icons whatsapp" title="שיתוף בוואטסאפ">Share via Whatsapp</div>
        <div class="share-icons print" title="הדפסה">Print</div>
        
        <small>כללית מאחלת לכם המשך צפייה מהנה ו...בריאה!</small>
        <div class="close-btn">סגירה</div>
      </div>
    </div>
      
    <script type="text/javascript" src="js/custom.js"></script>
    <script type="text/javascript" src="http://clalit-info.co.il/campaigns/assets/accessibility.js"></script>
    <script src="https://connect.facebook.net/en_US/all.js"></script>
    <script type="text/javascript" charset="utf-8">
      FB.init({
        appId:'1727159104206782', 
        status:true, 
        cookie:true, 
        xfbml:true,
        oauth:true
      });
    </script>
      
    <?php
      // require google tag manager template
      require_once $loc . $assetsDir . 'clalit_gtm.php';
    ?>
  </body>
</html>
