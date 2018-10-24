<?php
	switch ($_SERVER['REQUEST_URI']){
    	case '/':
        	require_once 'docs/home.php';
        	break;

        case '/contact':
        	require_once 'docs/contact.php';
        	break;

        case '/about':
        	require_once 'docs/about.php';
        	break;

        case '/portfolio';
        	require_once 'docs/portfolio.php';
        	break;

        case '/prices';
        	require_once 'docs/prices.php';
        	break;

        case '/services';
            require_once 'docs/services.php';
            break;

        case '/discounts';
            require_once 'docs/discounts.php';
            break;

        case '/form';
            require_once 'form.php';
            break;

        default:
        	require_once 'docs/errors/404.html';
	}
?>