
<?php  
$command = escapeshellcmd('export PYTHONIOENCODING=utf8');
$output = shell_exec($command);


$locale='pl_PL.UTF-8';
setlocale(LC_ALL,$locale);
putenv('LC_ALL='.$locale);

$path = new SplFileInfo(__FILE__);
$filePath = $path->getPath();
// $command = escapeshellcmd('PYTHONIOENCODING=utf-8 python '.$filePath.'/genRSS.py');
// $output = shell_exec($command);


$command = escapeshellcmd('python '.$filePath.'/converter.py example');
echo 'python '.$filePath.'/converter.py';
$output = shell_exec($command);
echo $output;


$command = escapeshellcmd('python '.$filePath.'/generator.py --dirname '.$filePath.'/do_dechy --extensions "aac,mp3,ogg" 
	--title "RSS Title" -H https://kofii12345.usermd.net
	--description "Lorem Ipsum Desription"
     --image https://test.jpeg
               --sort-creation -H https://host.pl
               --author "Authors"
               --out '.$filePath.'/example/rss.rss');
$output = shell_exec($command);
echo $output;

?>