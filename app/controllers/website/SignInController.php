<?php

namespace app\controllers\website;

use app\views\View;

/**
 * Home controller
 * 
 * HTML file: ./view/pages/home.html
 * 
 * @package app\controller
 */ 
class SignInController extends WebsitePageController {

    /**
     * Return the content of home view
     * 
     * @return string home rendered page
     */
    public static function getSignIn() {

        // Home view

        $header = View::render('website/html/auth/header');


        $main = View::render('website/html/auth/signIn', [
            'h1' => 'What is boilerplate and why do we use it?',
            'p' => 'In computer programming, boilerplate code or boilerplate refers to sections of code that have to be 
            included in many places with little or no alteration. It is often used when referring to languages that are considered verbose, 
            i.e. the programmer must write a lot of code to do minimal jobs.'
        ]);

        $footer = View::render('website/html/auth/footer');

        // Return page view
        return parent::getPage('SignIn', $header, $main, $footer, ['css' => 'app/views/pages/website/css/signIn.css']);
    }

}
