<?php
namespace Alertas;

class Alert{

    public $title;
    private $text;
    private $action;
    private $type;
    private $action2;

    private function render(){
        echo "
            <html>
            <head>
                <script src=\"//cdn.jsdelivr.net/npm/sweetalert2@10\"></script>
            </head>
            <body>
                <script>
                Swal.fire({
                  icon: '$this->type',
                  title: '$this->title',
                  text: '$this->text',
                }).then(function() {
                    window.location.href = '$this->action';
                });
                </script>
            </body>
            </html>
        ";
    }

    private function render2(){
        echo "
            <html>
            <head>
                <script src=\"//cdn.jsdelivr.net/npm/sweetalert2@10\"></script>
            </head>
            <body>
                <script>
                Swal.fire({
                    title: '$this->title',
                    text: '$this->text',
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Sim',
                    cancelButtonText: 'Não'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = '$this->action';
                    }else{
                        window.location.href = '$this->action2';
                    }
                });
                </script>
            </body>
            </html>
        ";
    }

    public static function success($title, $text, $action){
        $alerta = new Alert();
        $alerta->type = "success";
        $alerta->title = $title;
        $alerta->text = $text;
        $alerta->action = $action;
        $alerta->render();
    }

    public static function error($title, $text, $action){
        $alerta = new Alert();
        $alerta->type = "error";
        $alerta->title = $title;
        $alerta->text = $text;
        $alerta->action = $action;
        $alerta->render();
    }

    public static function info($title, $text, $action){
        $alerta = new Alert();
        $alerta->type = "info";
        $alerta->title = $title;
        $alerta->text = $text;
        $alerta->action = $action;
        $alerta->render();
    }

    public static function warning($title, $text, $action){
        $alerta = new Alert();
        $alerta->type = "info";
        $alerta->title = $title;
        $alerta->text = $text;
        $alerta->action = $action;
        $alerta->render();
    }

    public static function question($title, $text, $actionYes, $actionNo){
        $alerta = new Alert();
        $alerta->type = "info";
        $alerta->title = $title;
        $alerta->text = $text;
        $alerta->action = $actionYes;
        $alerta->action2 = $actionNo;
        $alerta->render2();
    }
}