<?php
// Default path where you upload files
$upload_folder="./";

// You can use multi-folders for uploading your files with :
// $upload_folders=array(URL_KEY1=>PATH1, URL_KEY2=>PATH2,...);
// Example :
// $upload_folders=array(
//     "bob"=>"./photo_bob/", // URL : http://.../tiny_DnDUp/?f=bob
//     "alice"=>"./photo_alice/" // URL : http://.../tiny_DnDUp/?f=alice
// );
$upload_folders=array("upload"=>"$upload_folder");

// Contents of the default htaccess for upload_folder
$default_htaccess="Options -ExecCGI
# -Indexes
RemoveHandler .php .phtml .php3 .php4 .php5 .html .htm .js
RemoveType .php .phtml .php3 .php4 .php5 .html .htm .js
php_flag engine off
AddType text/plain .php .phtml .php3 .php4 .php5 .html .htm .js";

// HTML contents of the default index.html for upload_folder.
// If empty, then it doesn't create index.html.
$default_index="";

// Height of preview pictures
$preview_height="400px";

// Max size for a file
$files_max_size=ini_get('upload_max_filesize');
// In your PHP conf, you should have upload_max_filesize > post_max_size !
// Example of value :
// $files_max_size="2M";
// $files_max_size="1G";

$not_allowed_chars=array("..", "/", "\\", "\n", "\r", "\0", "<", ">");
$not_allowed_files=array("", ".", "..", ".htaccess", "index.html", "index.php");

// https://www.iana.org/assignments/media-types/media-types.xhtml
$allowed_file_types=array('image/png', 'image/jpeg', 'image/gif', 'audio/mpeg', 'audio/aac');
//$allowed_file_types=null; // == allow all files
?>