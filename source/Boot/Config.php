<?php
/**
 * DATABASE
*/


if ($_SERVER['HTTP_HOST'] == "localhost") {
    define("CONF_DB_HOST", "localhost");
    define("CONF_DB_USER", "root");
    define("CONF_DB_PASS", "");
    define("CONF_DB_NAME", "coffecode");
}else{
    define("CONF_DB_HOST", "localhost");
    define("CONF_DB_USER", "--");
    define("CONF_DB_PASS", "--");
    define("CONF_DB_NAME", "--");
}




/**
 * PROJECT URLs
 */
define("CONF_URL_BASE", "https://coffecode.com.br");
define("CONF_URL_TEST", "https://localhost/coffecode");

define("BOT_TELEGRAM_TOKEN", "5483687962:AAH-H1HFd9jVcmOpCHjleiRq6R47RaVDudA");
define("ID_CHANEL_TELEGRAN", "@LogsMecadoDeTerras");

/**
 * SITE
 */
define("CONF_SITE_NAME", "Coffe Code");
define("CONF_SITE_TITLE", "Framework Coffe Code");
define("CONF_SITE_DESC", "Faça suas aplicações com o melhor Framework");
define("CONF_SITE_LANG", "pt_BR");
define("CONF_SITE_DOMAIN", "cofecode.com.br");


/**
 * SOCIAL
 */
define("CONF_SOCIAL_TWITTER_CREATOR", "@creator");
define("CONF_SOCIAL_TWITTER_PUBLISHER", "@creator");

/**
 * DATES
 */
define("CONF_DATE_BR", "d/m/Y H:i:s");
define("CONF_DATE_APP", "Y-m-d H:i:s");

/**
 * PASSWORD
 */
define("CONF_PASSWD_MIN_LEN", 8);
define("CONF_PASSWD_MAX_LEN", 40);
define("CONF_PASSWD_ALGO", PASSWORD_DEFAULT);
define("CONF_PASSWD_OPTION", ["cost" => 10]);

/**
 * VIEW
 */
define("CONF_VIEW_PATH", __DIR__ . "/../../shared/views");
define("CONF_VIEW_EXT", "php");
define("CONF_VIEW_THEME", "welcome");
define("CONF_VIEW_TEST", "plugins");
define("CONF_VIEW_APP", "app");

/**
 * UPLOAD
 */
define("CONF_UPLOAD_DIR", "storage");
define("CONF_UPLOAD_IMAGE_DIR", "images");
define("CONF_UPLOAD_FILE_DIR", "files");
define("CONF_UPLOAD_MEDIA_DIR", "medias");

/**
 * IMAGES
 */
define("CONF_IMAGE_CACHE", CONF_UPLOAD_DIR . "/" . CONF_UPLOAD_IMAGE_DIR . "/cache");
define("CONF_IMAGE_SIZE", 2000);
define("CONF_IMAGE_QUALITY", ["jpg" => 75, "png" => 5]);

/**
 * MAIL
 */
define("CONF_MAIL_HOST", "smtp.sendgrid.net");
define("CONF_MAIL_PORT", "587");
define("CONF_MAIL_USER", "apikey");
define("CONF_MAIL_PASS", "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");
define("CONF_MAIL_SENDER", ["name" => "Robson V. Leite", "address" => "sender@email.com"]);
define("CONF_MAIL_SUPPORT", "sender@support.com");
define("CONF_MAIL_OPTION_LANG", "br");
define("CONF_MAIL_OPTION_HTML", true);
define("CONF_MAIL_OPTION_AUTH", true);
define("CONF_MAIL_OPTION_SECURE", "tls");
define("CONF_MAIL_OPTION_CHARSET", "utf-8");

