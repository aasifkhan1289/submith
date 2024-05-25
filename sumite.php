<?php

//  echo $_SERVER[ 'REQUEST_METHOD' ];
//    print_r ( $_GET );
//    echo '<br>';

//    ECHO ''.$_GET[ 'phone' ];
if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' ) {
    $name = $_POST[ 'name' ];
    $phone = $_POST[ 'phone' ];
    $email = $_POST[ 'email' ];
    // $img = $_POST[ 'img' ];
    echo '<pre>';
    echo 'img';
    // print_r( $_POST );
    // print_r( $_FILES );
    if ( isset( $_FILES ) ) {
        $file = $_FILES[ 'img' ];
        $file_name = $file[ 'name' ];
        $file_temp = $file[ 'tmp_name' ];
        $file_size = $file[ 'size' ];
        $target = 'uploding/';
        // 'uploding/img2.jpeg ';
        $path =   $target.$file_name;
        $file_extension = pathinfo( $path, PATHINFO_EXTENSION );
        if ( file_exists( $path ) ) {
            echo 'file allrede exist';
        } else {
            if ( $file_extension !== 'jpg' ) {
                echo 'placr uploding pdf files';

            } else {
                if ( move_uploaded_file( $file_temp, $path ) ) {
                    echo 'file uploding succesfully';
                } else {
                    echo 'file uploding not succesfully';
                }
            }
        }

        // echo "name:$file_name size:$file_size temp: $file_temp";

    }
    echo '</pre>';

    $name_pattern = '/^[a-zA-Z]+[a-zA-Z]+/';
    $phone_pattern = '/^[0-9]{10]$/';
    $email_pattern = '/[a-zA-Z0-9._]+@[a-zA-Z]+\.[[a-zA-Z]{2,}/';
    $isNameValid = preg_match( $name_pattern, $name );
    $isPhoneValid = preg_match( $phone_pattern, $phone );
    $isEmailValid = preg_match( $email_pattern, $email );

    echo preg_match( $name_pattern, $name );
    echo '<br>';
    if ( ! $isNameValid ) {
        echo 'placr enter valid name';

    }
    if ( ! $isPhoneValid ) {

        // echo 'placr enter valid phone';

    }
    echo 'place enter 10 diget number';
}

if ( !$isEmailValid ) {
    echo 'placr enter valid email';

}
// echo preg_match( $name_pattern, $name );
// echo '<br>';
// echo preg_match( $phone_pattern, $phone );
// echo '<br>';
// echo preg_match( $email_pattern, $email );
// echo '<br>';
echo $isNameValid &&  $isPhoneValid && $isEmailValid;
if ( $isNameValid &&  $isPhoneValid && $isEmailValid )
 {
    echo 'form sumited';
}

?>