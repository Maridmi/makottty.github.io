<?php
	switch ($_SERVER['REQUEST_URI']){
    	case '/':
        	require_once 'pages/home.php';
        	break;

        case '/contact':
        	require_once 'pages/contact.php';
        	break;

        case '/about':
        	require_once 'pages/about.php';
        	break;

        case '/portfolio';
        	require_once 'pages/portfolio.php';
        	break;

        case '/prices';
        	require_once 'pages/prices.php';
        	break;

        case '/services';
            require_once 'pages/services.php';
            break;

        case '/discounts';
            require_once 'pages/discounts.php';
            break;

        case '/form';
            require_once 'form.php';
            break;

        default:
        	require_once 'pages/errors/404.html';
	}
?>