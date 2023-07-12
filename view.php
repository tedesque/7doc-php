<?php

class View {

    /**
     * Renderiza a view de acordo com o template enviado
     *
     * @param string $template Nome da template a ser renderizado
     */
    public function render_view($template)
    {
        $viewFilePath = VIEW_FOLDER . $template . '.view';
        $viewContent = file_get_contents($viewFilePath);
        echo $viewContent;    
    }
}