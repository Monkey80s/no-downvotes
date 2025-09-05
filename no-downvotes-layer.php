<?php

class qa_html_theme_layer extends qa_html_theme_base
{
    function head_css()
    {
        parent::head_css();
        $this->output('<style>
            /* Ocultar botón de voto negativo */
            .qa-vote-down-button, 
            .qa-vote-down-disabled, 
            .qa-voted-down { 
                display: none !important; 
            }
        </style>');
    }
}
