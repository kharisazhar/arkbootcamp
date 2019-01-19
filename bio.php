<?php 
    $name = 'Kharis Azhar';
    $address = "Purwokerto";
    $hobbies = array("Swimming","Coding","Music");
    $is_married = false;
    $school = [
        'highSchool' => ['SMK TELKOM PWT'],
        'university' => ['-']
    ];
    $skills = [
        'programming' => ['kotlin','js','php','java'],
        'language' => ['english','german']
    ];

    function bio($name, $address, $hobbies, $is_married, $school){
        return json_encode(array(
            'name' => $name,
            'address' => $address,
            'hobbies' => $hobbies,
            'is_married' => $is_married,
            'schools' => $school
        ),JSON_PRETTY_PRINT);
    }
    $json = bio($name, $address, $hobbies, $is_married, $school);
    echo $json;

    // $fp = fopen('results.json', 'w');
    //     fwrite($fp, json_encode($json));
    //     fclose($fp);
?>