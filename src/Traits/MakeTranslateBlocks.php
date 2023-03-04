<?php

namespace Neiderruiz\TranslateEditorJs\Traits;

use neiderruiz\translatorphp\Traits\TranslateTrait;

trait MakeTranslateBlocks
{
    use TranslateTrait;

    public function makeTranslateBlock($blocks, string $inputLanguage = 'es', string $outputLanguage = 'en')
    {
        $newBlocks = new \stdClass();
        foreach ($blocks as $key => $value) {
            if ($key == 'blocks') {
                $newBlocks->$key = [];
                foreach ($value as $valor => $item) {
                    if ($item->type == 'paragraph' || $item->type == 'header') {
                        $data = $item;
                        $data->data->text = $this->translate($item->data->text, $outputLanguage, $inputLanguage);
                        $newBlocks->$key[] = $data;
                        continue;
                    }

                    if ($item->type == 'list') {
                        $data = $item;
                        $translate = $item->data;
                        $translate->items = array_map(function ($text) use ($outputLanguage, $inputLanguage) {
                            return $this->translate($text, $outputLanguage, $inputLanguage);
                        }, $item->data->items);
                        $data->data = $translate;
                        $newBlocks->$key[] = $data;
                        continue;
                    }


                    if ($item->type == 'image') {
                        $data = $item;
                        $data->data->caption = $this->translate($item->data->caption, $outputLanguage, $inputLanguage);
                        $newBlocks->$key[] = $data;
                        continue;
                    }

                    if ($item->type == 'warning') {
                        $data = $item;
                        $data->data->title = $this->translate($item->data->title, $outputLanguage, $inputLanguage);
                        $data->data->message = $this->translate($item->data->message, $outputLanguage, $inputLanguage);
                        $newBlocks->$key[] = $data;
                        continue;
                    }

                    if ($item->type == 'quote') {
                        $data = $item;
                        $data->data->text = $this->translate($item->data->text, $outputLanguage, $inputLanguage);
                        $data->data->caption = $this->translate($item->data->caption, $outputLanguage, $inputLanguage);
                        $newBlocks->$key[] = $data;
                        continue;
                    }
                    if ($item->type == 'checklist') {
                        $data = $item;
                        $translate = $item->data;
                        $translate->items = array_map(function ($itemCheck) use ($outputLanguage, $inputLanguage) {
                            $itemCheck->text =  $this->translate($itemCheck->text, $outputLanguage, $inputLanguage);
                            return $itemCheck;
                        }, $item->data->items);
                        $data->data = $translate;
                        $newBlocks->$key[] = $data;
                        continue;
                    }

                    if ($item->type == 'table') {
                        $data = $item;
                        $translate = $item->data;
                        $translate->content = array_map(function ($itemTable) use ($outputLanguage, $inputLanguage) {
                            $itemTable = array_map(function ($text) use  ($outputLanguage, $inputLanguage) {
                                return $this->translate($text, $outputLanguage, $inputLanguage);
                            }, $itemTable);
                            return $itemTable;
                        }, $item->data->content);
                        $data->data = $translate;
                        $newBlocks->$key[] = $data;
                        continue;
                    }

                    if($item->type == 'embed'){
                        $data = $item;
                        $data->data->caption = $this->translate($item->data->caption, $outputLanguage, $inputLanguage);
                        $newBlocks->$key[] = $data;
                        continue;
                    }

                    if($item->type == 'code'){
                        $data = $item;
                        $newBlocks->$key[] = $data;
                        continue;
                    }
                    $data = $item;
                    $newBlocks->$key[] = $data;
                }
            } else {
                $newBlocks->$key = $value;
            }
        }
        return $blocks;
    }
}
