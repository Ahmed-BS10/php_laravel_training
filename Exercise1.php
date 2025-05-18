<?php

// Installation steps for PHP

echo "=== Steps to Install XAMPP & PHP ===\n\n" .

    "1. Download and Install XAMPP:\n" .
    "- Get XAMPP from: https://www.apachefriends.org/download.html\n" .
    "- Install and launch XAMPP.\n" .
    "- Start Apache and MySQL from the XAMPP Control Panel.\n" .
    "- Verify by opening http://localhost in your browser.\n\n" .

    "2. Verify PHP Installation:\n" .
    "- Create a file named `info.php` inside the `htdocs` folder.\n" .
    "- Add the following code: `<?php phpinfo(); ?>`\n" .
    "- Open your browser and visit: http://localhost/info.php\n\n" .

    "3. Running PHP via Command Line (Optional):\n" .
    "- Open Command Prompt and type: `php -v`\n" .
    "- If PHP is installed correctly, it will show the PHP version.\n\n" .

    "4. Running Your First PHP Script:\n" .
    "- Create a new file `test.php` in `htdocs`.\n" .
    "- Add: `<?php echo 'Hello, PHP!'; ?>`\n" .
    "- Open http://localhost/test.php in your browser.\n\n" .

    "✅ XAMPP and PHP are now ready to use!\n\n";

    $num = 1;
    echo $num . " is " . gettype($num);
    echo "\n";

    $string = "Hello, I am a string";
    echo $string . " is " . gettype($string);
    echo "\n";

    $float = 1.1;
    echo $float . " is " . gettype($float);
    echo "\n";

    $bool = true;
    echo $bool . " is " . gettype($bool);
    echo "\n";

    $array = [1, 2, 3, 'a', 'b', 'c'];
    print_r($array);
    echo "\n";

    $null = null;
    echo $null . " is " . gettype($null);
    echo "\n";

    $object = new stdClass();
        echo $object . " is " . gettype($object);
        echo "\n";





    echo "=== PHP Syntax ===\n\n";
    echo "Hi iam Ahmed ";
    echo "How Are you?";




    
    $string = "Hello, I am a string";
    echo $string . " is " . gettype($string);
    echo "\n";

    $float = 1.1;
    echo $float . " is " . gettype($float);
    echo "\n";

    $bool = true;
    echo $bool . " is " . gettype($bool);
    echo "\n";

    $array = [1, 2, 3, 'a', 'b', 'c'];
    print_r($array);
    echo "\n";

    $null = null;
    echo $null . " is " . gettype($null);
    echo "\n";

    $object = new stdClass();
        echo $object . " is " . gettype($object);
        echo "\n";