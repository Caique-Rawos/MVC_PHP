<?php
namespace App\Controller\Pages;

use \App\Utils\View;

class Page{
    /** Metodo responsavel por retornar o header da nossa pagina generica
     * @return string
     */
    private static function getHeader(){
        return View::render("pages/header");
    }

    /** Metodo responsavel por retornar o footer da nossa pagina generica
     * @return string
     */
    private static function getFooter(){
        return View::render("pages/footer");
    }

    /** Metodo responsavel por retornar o conteudo (view) da nossa pagina generica
     * @return string
     */
    public static function getPage($title, $content){
        return View::render('Pages/page',[
        "title" => $title,
        "header" => self::getHeader(),
        "content" => $content,
        "footer" => self::getFooter()
        ]);
    }
}

?>