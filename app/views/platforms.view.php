<?php

class PlatformsView {

    
    private $smarty;

    public function __construct() {

        $this->smarty = new Smarty();
        $this->smarty->assign('basehref', BASE_URL);
    }

    //Ver home
    function showHome($logged) { 

        //colocar en el header login o logout segun si se esta logeado o no.
        $this->smarty->assign('logged', $logged);
        $this->smarty->display('templates/home.tpl');   
    }

    //mostrar lista plataformas
    function showAllPlatforms($platforms, $logged) {

        $this->smarty->assign('platforms', $platforms);
        $this->smarty->assign('logged', $logged);
       $this->smarty->display('templates/showAllPlatforms.tpl');
    }

    //elegir una plataforma y ver series en base a la eleccion
    function searchByPlatform($platforms, $logged) { 

        $this->smarty->assign('logged', $logged);
        $this->smarty->assign('platforms', $platforms);
       $this->smarty->display('templates/form_search.tpl');
    }

    //lista de series filtrada por plataformas
    function showSeriesByPlatform($series, $logged)  {

        $this->smarty->assign('logged', $logged);
        $this->smarty->assign('series', $series);
        $this->smarty->display('templates/showFiltredSeries.tpl');
    }

     //formulario para actualizar plataforma
     function formUpdatePlatform($id, $series, $platforms, $logged) {

        $this->smarty->assign('logged', $logged);
        $this->smarty->assign('id', $id);
        $this->smarty->assign('series', $series);
        $this->smarty->assign('platforms', $platforms);
        $this->smarty->display('templates/updatePlatform.tpl');
    }

    //mensaje de error si el formulario esta vacio
    function showErrorEmptyForm($logged) {

        $this->smarty->assign('logged', $logged);
        $this->smarty->assign('error', 'Datos vacios!');
        $this->smarty->display('templates/emptyError.tpl');
    }

    function showDeleteError($logged) {

        $this->smarty->assign('logged', $logged);
        $this->smarty->assign('error', 'No se puede borrar esa plataforma, se encuentra en uso.');
        $this->smarty->display('templates/deleteError.tpl');
    }

 } 