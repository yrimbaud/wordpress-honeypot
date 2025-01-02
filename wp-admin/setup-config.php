<?php
session_start();

$step = isset($_GET['step']) ? $_GET['step'] : '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($step == '') {
        $_SESSION['language'] = $_POST['language'] ?? '';
        header('Location: setup-config.php?step=0');
        exit;
    }
    
    if ($step == 1) {
        $logDir = 'logs';
    
        $data = [
            'date' => date('Y-m-d H:i:s'),
            'ip' => $_SERVER['REMOTE_ADDR'],
            'user_agent' => $_SERVER['HTTP_USER_AGENT'],
            'referer' => $_SERVER['HTTP_REFERER'] ?? '',
            'language' => $_POST['language'] ?? '',
            'dbname' => $_POST['dbname'] ?? '',
            'uname' => $_POST['uname'] ?? '',
            'pwd' => $_POST['pwd'] ?? '',
            'dbhost' => $_POST['dbhost'] ?? '',
            'prefix' => $_POST['prefix'] ?? ''
        ];

        $filename = $logDir . '/honeypot-' . date('Y-m-d_H-i-s').'.json';
        file_put_contents($filename, json_encode($data, JSON_PRETTY_PRINT));

        header('Location: setup-config.php');
        exit;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="robots" content="noindex,nofollow" />
    <title>WordPress &rsaquo; Setup Configuration File</title>
    <link rel="stylesheet" id="dashicons-css" href="../wp-includes/css/dashicons.min.css?ver=6.7.1" type="text/css" media="all" />
    <link rel="stylesheet" id="buttons-css" href="../wp-includes/css/buttons.min.css?ver=6.7.1" type="text/css" media="all" />
    <link rel="stylesheet" id="forms-css" href="../wp-admin/css/forms.min.css?ver=6.7.1" type="text/css" media="all" />
    <link rel="stylesheet" id="l10n-css" href="../wp-admin/css/l10n.min.css?ver=6.7.1" type="text/css" media="all" />
    <link rel="stylesheet" id="install-css" href="../wp-admin/css/install.min.css?ver=6.7.1" type="text/css" media="all" />
</head>
<body class="<?php echo $step === '' ? 'language-chooser' : ''; ?> wp-core-ui">
    <p id="logo">WordPress</p>

<?php 
if ($step === '') {
?>
    <h1 class="screen-reader-text">Select a default language</h1>
    <form id="setup" method="post" action="?step=0">
        <label class='screen-reader-text' for='language'>Select a default language</label>
<select size='14' name='language' id='language'>
<option value="" lang="en" selected="selected" data-continue="Continue" data-installed="1">English (United States)</option>
<option value="af" lang="af" data-continue="Gaan voort">Afrikaans</option>
<option value="am" lang="am" data-continue="ቀጥል">አማርኛ</option>
<option value="arg" lang="an" data-continue="Continar">Aragonés</option>
<option value="ar" lang="ar" data-continue="متابعة">العربية</option>
<option value="ary" lang="ar" data-continue="المتابعة">العربية المغربية</option>
<option value="as" lang="as" data-continue="Continue">অসমীয়া</option>
<option value="azb" lang="az" data-continue="Continue">گؤنئی آذربایجان</option>
<option value="az" lang="az" data-continue="Davam">Azərbaycan dili</option>
<option value="bel" lang="be" data-continue="Працягнуць">Беларуская мова</option>
<option value="bg_BG" lang="bg" data-continue="Напред">Български</option>
<option value="bn_BD" lang="bn" data-continue="চালিয়ে যান">বাংলা</option>
<option value="bo" lang="bo" data-continue="མུ་མཐུད་དུ།">བོད་ཡིག</option>
<option value="bs_BA" lang="bs" data-continue="Nastavi">Bosanski</option>
<option value="ca" lang="ca" data-continue="Continua">Català</option>
<option value="ceb" lang="ceb" data-continue="Padayun">Cebuano</option>
<option value="cs_CZ" lang="cs" data-continue="Pokračovat">Čeština</option>
<option value="cy" lang="cy" data-continue="Parhau">Cymraeg</option>
<option value="da_DK" lang="da" data-continue="Fortsæt">Dansk</option>
<option value="de_CH" lang="de" data-continue="Weiter">Deutsch (Schweiz)</option>
<option value="de_CH_informal" lang="de" data-continue="Weiter">Deutsch (Schweiz, Du)</option>
<option value="de_DE" lang="de" data-continue="Weiter">Deutsch</option>
<option value="de_DE_formal" lang="de" data-continue="Weiter">Deutsch (Sie)</option>
<option value="de_AT" lang="de" data-continue="Weiter">Deutsch (Österreich)</option>
<option value="dsb" lang="dsb" data-continue="Dalej">Dolnoserbšćina</option>
<option value="dzo" lang="dz" data-continue="Continue">རྫོང་ཁ</option>
<option value="el" lang="el" data-continue="Συνέχεια">Ελληνικά</option>
<option value="en_CA" lang="en" data-continue="Continue">English (Canada)</option>
<option value="en_NZ" lang="en" data-continue="Continue">English (New Zealand)</option>
<option value="en_GB" lang="en" data-continue="Continue">English (UK)</option>
<option value="en_ZA" lang="en" data-continue="Continue">English (South Africa)</option>
<option value="en_AU" lang="en" data-continue="Continue">English (Australia)</option>
<option value="eo" lang="eo" data-continue="Daŭrigi">Esperanto</option>
<option value="es_CR" lang="es" data-continue="Continuar">Español de Costa Rica</option>
<option value="es_AR" lang="es" data-continue="Continuar">Español de Argentina</option>
<option value="es_CL" lang="es" data-continue="Continuar">Español de Chile</option>
<option value="es_CO" lang="es" data-continue="Continuar">Español de Colombia</option>
<option value="es_ES" lang="es" data-continue="Continuar">Español</option>
<option value="es_PE" lang="es" data-continue="Continuar">Español de Perú</option>
<option value="es_VE" lang="es" data-continue="Continuar">Español de Venezuela</option>
<option value="es_EC" lang="es" data-continue="Continuar">Español de Ecuador</option>
<option value="es_DO" lang="es" data-continue="Continuar">Español de República Dominicana</option>
<option value="es_UY" lang="es" data-continue="Continuar">Español de Uruguay</option>
<option value="es_PR" lang="es" data-continue="Continuar">Español de Puerto Rico</option>
<option value="es_GT" lang="es" data-continue="Continuar">Español de Guatemala</option>
<option value="es_MX" lang="es" data-continue="Continuar">Español de México</option>
<option value="et" lang="et" data-continue="Jätka">Eesti</option>
<option value="eu" lang="eu" data-continue="Jarraitu">Euskara</option>
<option value="fa_IR" lang="fa" data-continue="ادامه">فارسی</option>
<option value="fa_AF" lang="fa" data-continue="ادامه">(فارسی (افغانستان</option>
<option value="fi" lang="fi" data-continue="Jatka">Suomi</option>
<option value="fr_CA" lang="fr" data-continue="Continuer">Français du Canada</option>
<option value="fr_FR" lang="fr" data-continue="Continuer">Français</option>
<option value="fr_BE" lang="fr" data-continue="Continuer">Français de Belgique</option>
<option value="fur" lang="fur" data-continue="Continue">Friulian</option>
<option value="fy" lang="fy" data-continue="Trochgean">Frysk</option>
<option value="gd" lang="gd" data-continue="Lean air adhart">Gàidhlig</option>
<option value="gl_ES" lang="gl" data-continue="Continuar">Galego</option>
<option value="gu" lang="gu" data-continue="ચાલુ રાખો">ગુજરાતી</option>
<option value="haz" lang="haz" data-continue="ادامه">هزاره گی</option>
<option value="he_IL" lang="he" data-continue="המשך">עִבְרִית</option>
<option value="hi_IN" lang="hi" data-continue="जारी रखें">हिन्दी</option>
<option value="hr" lang="hr" data-continue="Nastavi">Hrvatski</option>
<option value="hsb" lang="hsb" data-continue="Dale">Hornjoserbšćina</option>
<option value="hu_HU" lang="hu" data-continue="Folytatás">Magyar</option>
<option value="hy" lang="hy" data-continue="Շարունակել">Հայերեն</option>
<option value="id_ID" lang="id" data-continue="Lanjutkan">Bahasa Indonesia</option>
<option value="is_IS" lang="is" data-continue="Áfram">Íslenska</option>
<option value="it_IT" lang="it" data-continue="Continua">Italiano</option>
<option value="ja" lang="ja" data-continue="次へ">日本語</option>
<option value="jv_ID" lang="jv" data-continue="Nerusaké">Basa Jawa</option>
<option value="ka_GE" lang="ka" data-continue="გაგრძელება">ქართული</option>
<option value="kab" lang="kab" data-continue="Kemmel">Taqbaylit</option>
<option value="kk" lang="kk" data-continue="Жалғастыру">Қазақ тілі</option>
<option value="km" lang="km" data-continue="បន្ត">ភាសាខ្មែរ</option>
<option value="kn" lang="kn" data-continue="ಮುಂದುವರಿಸು">ಕನ್ನಡ</option>
<option value="ko_KR" lang="ko" data-continue="계속">한국어</option>
<option value="ckb" lang="ku" data-continue="به‌رده‌وام به‌">كوردی‎</option>
<option value="kir" lang="ky" data-continue="Улантуу">Кыргызча</option>
<option value="lo" lang="lo" data-continue="ຕໍ່​ໄປ">ພາສາລາວ</option>
<option value="lt_LT" lang="lt" data-continue="Tęsti">Lietuvių kalba</option>
<option value="lv" lang="lv" data-continue="Turpināt">Latviešu valoda</option>
<option value="mk_MK" lang="mk" data-continue="Продолжи">Македонски јазик</option>
<option value="ml_IN" lang="ml" data-continue="തുടരുക">മലയാളം</option>
<option value="mn" lang="mn" data-continue="Continue">Монгол</option>
<option value="mr" lang="mr" data-continue="सुरु ठेवा">मराठी</option>
<option value="ms_MY" lang="ms" data-continue="Teruskan">Bahasa Melayu</option>
<option value="my_MM" lang="my" data-continue="ဆက်လက်လုပ်ဆောင်ပါ။">ဗမာစာ</option>
<option value="nb_NO" lang="nb" data-continue="Fortsett">Norsk bokmål</option>
<option value="ne_NP" lang="ne" data-continue="जारी राख्नुहोस्">नेपाली</option>
<option value="nl_NL_formal" lang="nl" data-continue="Doorgaan">Nederlands (Formeel)</option>
<option value="nl_BE" lang="nl" data-continue="Doorgaan">Nederlands (België)</option>
<option value="nl_NL" lang="nl" data-continue="Doorgaan">Nederlands</option>
<option value="nn_NO" lang="nn" data-continue="Hald fram">Norsk nynorsk</option>
<option value="oci" lang="oc" data-continue="Contunhar">Occitan</option>
<option value="pa_IN" lang="pa" data-continue="ਜਾਰੀ ਰੱਖੋ">ਪੰਜਾਬੀ</option>
<option value="pl_PL" lang="pl" data-continue="Kontynuuj">Polski</option>
<option value="ps" lang="ps" data-continue="دوام ورکړه">پښتو</option>
<option value="pt_BR" lang="pt" data-continue="Continuar">Português do Brasil</option>
<option value="pt_PT" lang="pt" data-continue="Continuar">Português</option>
<option value="pt_PT_ao90" lang="pt" data-continue="Continuar">Português (AO90)</option>
<option value="pt_AO" lang="pt" data-continue="Continuar">Português de Angola</option>
<option value="rhg" lang="rhg" data-continue="Continue">Ruáinga</option>
<option value="ro_RO" lang="ro" data-continue="Continuă">Română</option>
<option value="ru_RU" lang="ru" data-continue="Продолжить">Русский</option>
<option value="sah" lang="sah" data-continue="Салҕаа">Сахалыы</option>
<option value="snd" lang="sd" data-continue="اڳتي هلو">سنڌي</option>
<option value="si_LK" lang="si" data-continue="දිගටම කරගෙන යන්න">සිංහල</option>
<option value="sk_SK" lang="sk" data-continue="Pokračovať">Slovenčina</option>
<option value="skr" lang="skr" data-continue="جاری رکھو">سرائیکی</option>
<option value="sl_SI" lang="sl" data-continue="Nadaljuj">Slovenščina</option>
<option value="sq" lang="sq" data-continue="Vazhdo">Shqip</option>
<option value="sr_RS" lang="sr" data-continue="Настави">Српски језик</option>
<option value="sv_SE" lang="sv" data-continue="Fortsätt">Svenska</option>
<option value="sw" lang="sw" data-continue="Endelea">Kiswahili</option>
<option value="szl" lang="szl" data-continue="Kōntynuować">Ślōnskŏ gŏdka</option>
<option value="ta_IN" lang="ta" data-continue="தொடரவும்">தமிழ்</option>
<option value="ta_LK" lang="ta" data-continue="தொடர்க">தமிழ்</option>
<option value="te" lang="te" data-continue="కొనసాగించు">తెలుగు</option>
<option value="th" lang="th" data-continue="ต่อไป">ไทย</option>
<option value="tl" lang="tl" data-continue="Magpatuloy">Tagalog</option>
<option value="tr_TR" lang="tr" data-continue="Devam">Türkçe</option>
<option value="tt_RU" lang="tt" data-continue="дәвам итү">Татар теле</option>
<option value="tah" lang="ty" data-continue="Continue">Reo Tahiti</option>
<option value="ug_CN" lang="ug" data-continue="داۋاملاشتۇرۇش">ئۇيغۇرچە</option>
<option value="uk" lang="uk" data-continue="Продовжити">Українська</option>
<option value="ur" lang="ur" data-continue="جاری رکھیں">اردو</option>
<option value="uz_UZ" lang="uz" data-continue="Davom etish">O‘zbekcha</option>
<option value="vi" lang="vi" data-continue="Tiếp tục">Tiếng Việt</option>
<option value="zh_TW" lang="zh" data-continue="繼續">繁體中文</option>
<option value="zh_HK" lang="zh" data-continue="繼續">香港中文</option>
<option value="zh_CN" lang="zh" data-continue="继续">简体中文</option>
</select>
        <p class="step"><span class="spinner"></span><input type="submit" class="button button-primary button-large" value="Continue" /></p>
    </form>
<?php
} else if ($step == 0) {
?>
    <h1 class="screen-reader-text">Before getting started</h1>
    <p>Welcome to WordPress. Before getting started, you will need to know the following items:</p>
    <ol>
        <li>Database name</li>
        <li>Database username</li>
        <li>Database password</li>
        <li>Database host</li>
        <li>Table prefix (if you want to run more than one WordPress in a single database)</li>
    </ol>
    <p>This information is being used to create a <code>wp-config.php</code> file.</p>
    <p><strong>If for any reason this automatic file creation does not work, do not worry. All this does is fill in the database information to a configuration file. You may also simply open <code>wp-config-sample.php</code> in a text editor, fill in your information, and save it as <code>wp-config.php</code>.</strong></p>
    <p>In all likelihood, these items were supplied to you by your web host. If you do not have this information, then you will need to contact them before you can continue. If you are ready&hellip;</p>
    <p class="step"><a href="?step=1" class="button button-large">Let's go!</a></p>
<?php 
} else if ($step == 1) {
?>
    <h1 class="screen-reader-text">Set up your database connection</h1>
    <form method="post">
        <p>Below you should enter your database connection details. If you are not sure about these, contact your host.</p>
        <table class="form-table" role="presentation">
            <tr>
                <th scope="row"><label for="dbname">Database Name</label></th>
                <td>
                    <input name="dbname" id="dbname" type="text" aria-describedby="dbname-desc" size="25" placeholder="wordpress" />
                    <p id="dbname-desc">The name of the database you want to use with WordPress.</p>
                </td>
            </tr>
            <tr>
                <th scope="row"><label for="uname">Username</label></th>
                <td>
                    <input name="uname" id="uname" type="text" aria-describedby="uname-desc" size="25" placeholder="username" />
                    <p id="uname-desc">Your database username.</p>
                </td>
            </tr>
            <tr>
                <th scope="row"><label for="pwd">Password</label></th>
                <td>
                    <div class="wp-pwd">
                        <input name="pwd" id="pwd" type="password" class="regular-text" data-reveal="1" aria-describedby="pwd-desc" size="25" placeholder="password" autocomplete="off" spellcheck="false" />
                    </div>
                    <p id="pwd-desc">Your database password.</p>
                </td>
            </tr>
            <tr>
                <th scope="row"><label for="dbhost">Database Host</label></th>
                <td>
                    <input name="dbhost" id="dbhost" type="text" aria-describedby="dbhost-desc" size="25" value="localhost" />
                    <p id="dbhost-desc">You should be able to get this info from your web host, if <code>localhost</code> does not work.</p>
                </td>
            </tr>
            <tr>
                <th scope="row"><label for="prefix">Table Prefix</label></th>
                <td>
                    <input name="prefix" id="prefix" type="text" aria-describedby="prefix-desc" value="wp_" size="25" />
                    <p id="prefix-desc">If you want to run multiple WordPress installations in a single database, change this.</p>
                </td>
            </tr>
        </table>
        <input type="hidden" name="language" value="<?php echo htmlspecialchars($_SESSION['language'] ?? ''); ?>" />
        <p class="step"><input type="submit" class="button button-large" value="Submit" /></p>
    </form>
<?php 
} else {
?>
    <h1>Error establishing a database connection</h1>
    <p>This either means that the username and password information is incorrect or we can't contact the database server at <code>localhost</code>. This could mean your host's database server is down.</p>
    <ul>
        <li>Are you sure you have the correct username and password?</li>
        <li>Are you sure you have typed the correct hostname?</li>
        <li>Are you sure the database server is running?</li>
    </ul>
    <p>If you're unsure what these terms mean you should probably contact your host.</p>
<?php 
}
?>
<script type="text/javascript" src="../wp-includes/js/jquery/jquery.min.js?ver=3.7.1"></script>
<script type="text/javascript" src="../wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1"></script>
<script type="text/javascript" src="../wp-admin/js/password-toggle.min.js?ver=6.7.1"></script>
<script type="text/javascript" src="../wp-admin/js/language-chooser.min.js?ver=6.7.1"></script>
</body>
</html>