<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Shapath</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?=base_url()?>assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet">




    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?=base_url()?>assets/css/style.css" rel="stylesheet">
    <style>
        /* Hide volunteer section on screens less than 1024 pixels wide */
        @media (max-width: 1023px) {
            .volunteer {
                display: none;

            }
        }
    </style>

    <style>
        #music-toggle {
            /* Existing styles */
            position: fixed;
            bottom: 10px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 1000;
            display: none;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
            transition: background-color 0.3s ease, transform 0.3s ease;
            opacity: 0;
            /* Start with the button invisible */
            animation: fadeIn 1s ease forwards, float 2s ease-in-out infinite;
        }

        #music-toggle:hover {
            background-color: #45a049;
            transform: translateX(-50%) scale(1.1);
            /* Slightly increase size on hover */
        }

        /* Fade-in animation */
        @keyframes fadeIn {
            to {
                opacity: 1;
            }
        }

        /* Floating animation */
        @keyframes float {

            0%,
            100% {
                transform: translateX(-50%) translateY(0);
            }

            50% {
                transform: translateX(-50%) translateY(-10px);
            }
        }
    </style>

    <?php
       
       if(!empty($header_link)){
           foreach($header_link as $link){
               echo "<link href='".base_url()."assets/css/".$link."' rel='stylesheet'>";
           }

       };
           
       
   ?>
