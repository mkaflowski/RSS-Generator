# RSS-Generator
PHP/Python website generating rss after uploading audio files

You can upload files directly by navigation to example folder. It will run run.php after that. It will convert aac to ogg and generate rss.
File uploading is based on https://github.com/Oros42/tiny_DnDUp.

## Installation

Form converter you need ffmpeg and:

    pip install pydub
    
## Configuration:
RSS generating is based on https://github.com/amsehili/genRSS and you need to configure run.php.

```php
//AAC TO OGG CONVERTING
$command = escapeshellcmd('python '.$filePath.'/converter.py exampleZ');
echo 'python '.$filePath.'/converter.py';
$output = shell_exec($command);
echo $output;

//GENERATING RSS
$command = escapeshellcmd('python '.$filePath.'/generator.py --dirname '.$filePath.'/do_dechy --extensions "aac,mp3,ogg" 
	--title "RSS Title" -H https://hostname.com
	--description "Lorem Ipsum Desription"
     	--image https://test.jpeg
               --sort-creation -H https://host.pl
               --author "Authors"
               --out '.$filePath.'/example/rss.rss');
$output = shell_exec($command);
echo $output;```

