<?php
/**
 * MobileDashboard JSON-REST API.
 *
 * @author Ondrej Donek, <ondrejd@gmail.com>
 * @license GNU General Public License Version 3 http://www.gnu.org/licenses/gpl.txt
 * @link https://github.com/MobileDashboard/server-php for canonical repository
 * 
 * @link http://php.net/manual/en/features.commandline.webserver.php for more details about PHP built-in server
 */

/**
 * Base URL of the site.
 * @var string
 */
define('BASE_URL', 'http://localhost:8000/');

/**
 * Default language.
 * @var string
 */
define('DEFAULT_LANG', 'cs');

/**
 * Used language.
 * @var string $lang
 */
$lang = DEFAULT_LANG;

/**
 * Dummy translate function.
 * @param string $str
 * @param string $lang
 * @return void
 * @todo Implement "__()" method.
 */
function __($str, $lang = DEFAUL_LANG) {
    return $str;
}

/**
 * Dummy translate function.
 * @param string $str
 * @param string $lang
 * @return void
 * @todo Implement "_e()" method.
 */
function _e($str, $lang) {
    echo __($str, $lang);
}

/**
 * Constructs inner URL.
 * @param string $path
 * @return string
 */
function url($path = '') {
	return BASE_URL . $path;
}

/**
 * Current request URI.
 * @var string $uri
 */
$uri = ltrim($_SERVER['REQUEST_URI'], '/');
if (empty($uri)) {
	$uri = 'home';
}

?><!DOCTYPE html>
<html lang="cs">
    <head>
        <meta charset="utf-8">
        <title><?php _e('Mobilní nástěnka', $lang);?></title>
        <link rel="stylesheet" media="all" href="css/style.css">
    </head>
    <body class="<?php echo $uri;?> lang-<?php echo $lang;?>">
        <header>
            <h1><?php _e('Mobilní nástěnka', $lang);?></h1>
        </header>
        <div class="body">
        	<?php if ($uri == 'home'):?>
			<div class="button-container">
				<button class="button" type="button" id="login-button">
					<span><?php _e('Přihlášení', $lang);?></span>
				</button>
			</div>
			<div class="button-container">
				<button class="button" type="button" id="info-button">
					<span><?php _e('Více informací', $lang);?></span>
				</button>
			</div>
            <?php elseif ($uri == 'login'):?>
            <form name="login-form" method="post" enctype="application/x-www-form-urlencoded">
				<div class="form-group">
					<input type="text" name="login" id="login-input" required="required">
					<label class="control-label" for="login-input"><?php _e('Přihlašovací jméno', $lang);?></label>
					<i class="bar"></i>
				</div>
				<div class="form-group">
					<input type="password" name="password" id="password-input" required="required">
					<label class="control-label" for="password-input"><?php _e('Heslo', $lang);?></label>
					<i class="bar"></i>
				</div>
				<div class="button-container">
					<button class="button" type="submit">
						<span><?php _e('Přihlásit se', $lang);?></span>
					</button>
				</div>
            </form>
            <?php endif; ?>
        </div>
        <footer>
            <ul>
                <li><a href="https://github.com/MobileDashboard/" title="<?php _e('Repositář projektu na serveru GitHub', $lang);?>" target="_blank"><img src="img/github.png"></a></li>
            </ul>
        </footer>
		<?php if ($uri == 'home'):?>
        <script type="text/javascript">
document.addEventListener("DOMContentLoaded", function() {
	var btn1 = document.getElementById("login-button");
	var btn2 = document.getElementById("info-button");

	btn1.addEventListener("click", function() {
		document.location = "<?php echo url('login');?>";
	});
	btn2.addEventListener("click", function() {
		document.location = "<?php echo url('info');?>";
	});
});
		</script>
		<?php elseif ($uri == 'login'):?>
        <script type="text/javascript">
document.addEventListener("DOMContentLoaded", function() {
	document.getElementById("login-input").value = "";
	document.getElementById("password-input").value = "";
});
        </script>
        <?php endif; ?>
    </body>
</html>
