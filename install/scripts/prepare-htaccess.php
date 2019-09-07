<?php
/**
 * Append the following configuration to file .htaccess
 * This rewrite configuration must be printed before the WordPress rewrite (# BEGIN WordPress ...)
 */
$apiRewriteString = <<<EOD
# Pretty permalinks for API endpoints:
# 1. GraphQL: /some-url/api/graphql/
# 2. REST: /some-url/api/rest/
# 3. PoP native: /some-url/api/
<IfModule mod_rewrite.c>
RewriteEngine On
RewriteBase /

# 1. GraphQL: Rewrite from /some-url/api/graphql/ to /some-url/?scheme=api&datastructure=graphql
RewriteCond %{SCRIPT_FILENAME} !-d
RewriteCond %{SCRIPT_FILENAME} !-f
RewriteRule ^(.*)/api/graphql/?$ /$1/?scheme=api&datastructure=graphql [L,P,QSA]

# 2. REST: Rewrite from /some-url/api/rest/ to /some-url/?scheme=api&datastructure=rest
RewriteCond %{SCRIPT_FILENAME} !-d
RewriteCond %{SCRIPT_FILENAME} !-f
RewriteRule ^(.*)/api/rest/?$ /$1/?scheme=api&datastructure=rest [L,P,QSA]

# 3. PoP native: Rewrite from /some-url/api/ to /some-url/?scheme=api
RewriteCond %{SCRIPT_FILENAME} !-d
RewriteCond %{SCRIPT_FILENAME} !-f
RewriteRule ^(.*)/api/?$ /$1/?scheme=api [L,P,QSA]
</IfModule>
EOD;

// Prepend to .htaccess file
$file = $_SERVER['PWD'].'/.htaccess';
$fileContents = file_get_contents($file);
file_put_contents($file, $apiRewriteString.PHP_EOL.PHP_EOL.$fileContents);

// If the file is too big, use this other solution instead, taken from https://stackoverflow.com/questions/3332262/how-do-i-prepend-file-to-beginning
// $handle = fopen($file, "r+");
// $len = strlen($apiRewriteString);
// $final_len = filesize($file) + $len;
// $cache_old = fread($handle, $len);
// rewind($handle);
// $i = 1;
// while (ftell($handle) < $final_len) {
//   fwrite($handle, $apiRewriteString);
//   $apiRewriteString = $cache_old;
//   $cache_old = fread($handle, $len);
//   fseek($handle, $i * $len);
//   $i++;
// }
