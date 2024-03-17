<?php

$name = "Minn Khant Ko";
$weight = '130lbs';
$sanKyi = "ကမ်းမနား သေစမ်း";
$text = "   abc   ";
$text2 = "xxxabcdxx";

// echo strlen(trim($text));
// echo "\n";

// echo trim($text2, "x");
// echo "\n";

// echo $name;
// echo $weight;

// echo "My name is $name";
// echo 'My name is $name';

echo substr($name, 5, 7);
echo "\n";
// echo substr($sanKyi, 4, 2);
// echo mb_substr($sanKyi, 4, 2);
echo "\n";

echo str_pad("aaa", 6, "x", STR_PAD_LEFT);
echo "\n";
echo "\n";

print_r(explode(" ", $name));
echo "\n";
echo implode(", ", ["a", "b", "c"]);
echo "\n";

echo "<h1>Hello world</h1>";
echo "\n";

$jsScript = htmlentities("<script>alert('Hehe')</script>");
// echo html_entity_decode($jsScript);
// echo htmlspecialchars("<script>alert('Hehe')</script>");
echo "\n";

// password protection
// easy
echo "asdffdsa";
echo "<br>";
echo "<br>";
echo md5("asdffdsa");
echo "<br>";
echo "<br>";
echo md5("asdffdsa");
// same output for md5

// always changing due to encrypt algo. hit f5 and see
echo "<br>";
echo "<br>";
echo password_hash("asdffdsa", PASSWORD_DEFAULT);
echo "<br>";
echo "<br>";
echo password_hash("asdffdsa", PASSWORD_DEFAULT);
echo "<br>";
echo "<br>";
echo password_hash("asdffdsa", PASSWORD_DEFAULT);