<?php 

class CoreController {

    /**
     * Methods that display the view (protected to get available in all controllers)
     *
     * @return void
     */
    protected function show($viewName, $viewData = []) {

        // set $router in global to retrieve it in all views
        global $router;

        // define the absolute url for our assets
        $viewData['assetsBaseUri'] = '/assets/';

        require __DIR__ . '/../Views/header.tpl.php';
        require __DIR__ . "/../Views/{$viewName}.tpl.php";
        require __DIR__ . '/../Views/footer.tpl.php';
    }

    /**
     * Method to redirect the user, in every controller
     *
     * @return void
     */
    protected function redirect($route) {

        global $router;

        header('Location: '. $router->generate($route));
    }
}