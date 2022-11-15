<?php
    const title ="Votre site de PC Gamer";
    $_date = date("d/m/Y");
    
    class Page{
        static $_css = "./css/style.css";
        public $_subtitle = "Votre article";
        static $_logo = "favicon/favicon-16x16.png";
       public  $_favicon = "../favicon_io/favicon.ico";
       public  $_manifest = "./manifest.webmanifest";
      static $_img="./asset/4711081597780_h_f_l_0.webp";

    }
    
    $_new_page = new Page;
    
?>