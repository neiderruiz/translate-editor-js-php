<?php

namespace Neiderruiz\TranslateEditorJs;

use Neiderruiz\TranslateEditorJs\Traits\MakeTranslateBlocks;

class TranslateBlocks
{
    use MakeTranslateBlocks;

    protected $blocks;
    protected $inputLanguage;
    protected $outputLanguage;

    public function __construct($blocks, $inputLanguage = 'es', $outputLanguage = 'en')
    {
        $this->blocks = $blocks;
        $this->inputLanguage = $inputLanguage;
        $this->outputLanguage = $outputLanguage;
    }

    public function translateBlocks()
    {
        return $this->makeTranslateBlock($this->blocks, $this->inputLanguage, $this->outputLanguage);
    }
}
