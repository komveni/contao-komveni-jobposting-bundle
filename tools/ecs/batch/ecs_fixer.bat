:: Run easy-coding-standard (ecs) via this batch file inside your IDE e.g. PhpStorm (Windows only)
:: Install inside PhpStorm the  "Batch Script Support" plugin
cd..
cd..
cd..
cd..
cd..
cd..
php vendor\bin\ecs check vendor/komveni/contao-komveni-jobposting-bundle/src --fix --config vendor/komveni/contao-komveni-jobposting-bundle/tools/ecs/config.php
php vendor\bin\ecs check vendor/komveni/contao-komveni-jobposting-bundle/contao --fix --config vendor/komveni/contao-komveni-jobposting-bundle/tools/ecs/config.php
php vendor\bin\ecs check vendor/komveni/contao-komveni-jobposting-bundle/config --fix --config vendor/komveni/contao-komveni-jobposting-bundle/tools/ecs/config.php
php vendor\bin\ecs check vendor/komveni/contao-komveni-jobposting-bundle/templates --fix --config vendor/komveni/contao-komveni-jobposting-bundle/tools/ecs/config.php
php vendor\bin\ecs check vendor/komveni/contao-komveni-jobposting-bundle/tests --fix --config vendor/komveni/contao-komveni-jobposting-bundle/tools/ecs/config.php
