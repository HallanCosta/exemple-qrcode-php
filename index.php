<?php

namespace chillerlan\QRCodeExamples;

use chillerlan\QRCode\{QRCode, QROptions};

require_once './vendor/autoload.php';

$url = 'https://github.com/HallanCosta';

echo '<img src="' . (new QRCode)->render($url) . '" alt="QRCode" />';