<?php

namespace app\controllers\website;

use app\views\View;

/**
 * SignUp controller
 * 
 * HTML file: ./view/pages/auth/signUp.html
 * 
 * @package app\controller
 */ 
class SignUpController extends WebsitePageController {

    /**
     * Return the content of sign up view
     * 
     * @return string sign up rendered page
     */
    public static function getSignUp() {

        // SignUp view

        $header = View::render('website/html/auth/header');

        $main = View::render('website/html/auth/signUp');

        $footer = View::render('website/html/auth/footer');

        // Return page view
        
        return parent::getPage('Cadastrar-se no Lemonade', $header, $main, $footer, ['css' => 'app/views/pages/website/css/signUp.css', 'js' => 'app/views/pages/website/js/dist/signup.js']);
    }

    /**
     * 
     * 
     * @param Request $request
     */
    public static function postSignUp($request) {

        $postVars = $request->getPostVars();

        echo '<pre>';
        print_r($postVars);
        echo '</pre>';
    }

}