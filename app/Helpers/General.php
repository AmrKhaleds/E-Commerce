<?php

    /**
     * @return Akeissa - to test helper
     */
    function getLanguage(){
        App\Models\Language::active()->Selectin()->get();
    }