

<?php
$file = 'https://github.com/sahinibrahimli/Mehemmed/files/572489/cv.pdf';
$filename = 'SH.CV.pdf';
header('Content-type: application/pdf');
header('Content-Disposition: inline; filename="' . $filename . '"');
header('Content-Transfer-Encoding: binary');
header('Accept-Ranges: bytes');
@readfile($file);
?>


Contact GitHub API Training Shop Blog About
© 2016 GitHub, Inc. Term
