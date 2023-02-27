[![Github](https://img.shields.io/badge/-GitHub-000?style=flat&logo=Github&logoColor=white)](https://www.tiktok.com/@neiderruiz_)
[![Github](https://img.shields.io/badge/-TikTok-000?style=flat&logo=Tiktok&logoColor=white)](https://www.tiktok.com/@neiderruiz_)
[![Linkedin](https://img.shields.io/badge/-Instagram-%23E4405F?style=flat&logo=Instagram&logoColor=white)](https://www.instagram.com/neiderruiz_/)
[![Gmail](https://img.shields.io/badge/-YouTube-FF0000?style=flat&logo=YouTube&logoColor=white)](https://www.youtube.com/@neiderruiz)
[![Gmail](https://img.shields.io/badge/-FaceBook-3b5998?style=flat&logo=FaceBook&logoColor=white)](https://www.youtube.com/@neiderruiz)

# !important i use this library the editorjs in my frontend project

- [editorjs](https://editorjs.io/) is a block-styled editor for building beautiful content. It is a simple and easy to use library that allows you to create a custom editor for your project. It is a simple and easy to use library that allows you to create a custom editor for your project.

# How use

- tha's simple

## install

```bash
composer require neiderruiz/translate-editor-js
```

## use

```php
// import class
use Neiderruiz\TranslateEditorJs\TranslateBlocks;

// create instance

$yourBlock = 'your json';   
$inputLang = 'es';
$outputLang = 'en';
$translate = new TranslateBlocks(json_decode($yourBlock),$inputLang, $outputLang);
// yout block is json
$result = $translate->translateBlocks();

// $result is json when you can use in editorjs

```

## use trait

```php

use Neiderruiz\TranslateEditorJs\Traits\TranslateBlocks;

class YourClass
{
    use TranslateBlocks;
    // your code

    public function yourMethod()
    {
        $yourBlock = 'your json';   
        $inputLang = 'es';
        $outputLang = 'en';
        $result = $this->translateBlocks(json_decode($yourBlock),$inputLang, $outputLang);
        // $result is json when you can use in editorjs
    }
}

```

## Example structure entry

```json
{
    "time": 1677447641819,
    "blocks": [
        {
            "type": "paragraph",
            "data": {
                "text": "mi parrafo"
            }
        },
        {
            "id": "605c5Lx4q9",
            "type": "header",
            "data": {
                "text": "h2 cabecera",
                "level": 6
            }
        },
        {
            "id": "WtVEQ3ycUz",
            "type": "list",
            "data": {
                "style": "ordered",
                "items": [
                    "primer item",
                    "segundo item",
                    "tercer item"
                ]
            }
        },
        {
            "id": "J5a_cFw4RL",
            "type": "image",
            "data": {
                "file": {
                    "url": "http://localhost:8000/storage/images/article/lg/95614461843.jpg"
                },
                "caption": "imagen de salida laravel",
                "withBorder": false,
                "stretched": false,
                "withBackground": false
            }
        },
        {
            "id": "VmuTfohBzO",
            "type": "warning",
            "data": {
                "title": "mi titulo de alerta",
                "message": "alerta mensaje"
            }
        },
        {
            "id": "RFgpoQLNdU",
            "type": "quote",
            "data": {
                "text": "quote ejemplo",
                "caption": "ejemplo caption",
                "alignment": "left"
            }
        },
        {
            "id": "W8E8c3uiZy",
            "type": "checklist",
            "data": {
                "items": [
                    {
                        "text": "tarea realizada",
                        "checked": false
                    },
                    {
                        "text": "añadir nueva tarea",
                        "checked": false
                    }
                ]
            }
        },
        {
            "id": "maXaenLJKG",
            "type": "delimiter",
            "data": {}
        },
        {
            "id": "c-Fv4R20X7",
            "type": "linkTool",
            "data": {
                "link": "https://www.youtube.com/@neiderruiz",
                "meta": {}
            }
        },
        {
            "id": "SGl1B6Pw7G",
            "type": "table",
            "data": {
                "withHeadings": true,
                "content": [
                    [
                        "primero",
                        "segundo",
                        "tercero"
                    ],
                    [
                        "primer texto",
                        "segundo texto",
                        "tercer texto"
                    ]
                ]
            }
        }
    ],
    "version": "2.24.3"
}
```

## example outour translate


```json
{
    "time": 1677447641819,
    "blocks": [
        {
            "type": "paragraph",
            "data": {
                "text": "my paragraph"
            }
        },
        {
            "id": "605c5Lx4q9",
            "type": "header",
            "data": {
                "text": "h2 header",
                "level": 6
            }
        },
        {
            "id": "WtVEQ3ycUz",
            "type": "list",
            "data": {
                "style": "ordered",
                "items": [
                    "first item",
                    "second item",
                    "third item"
                ]
            }
        },
        {
            "id": "J5a_cFw4RL",
            "type": "image",
            "data": {
                "file": {
                    "url": "http://localhost:8000/storage/images/article/lg/95614461843.jpg"
                },
                "caption": "laravel image output",
                "withBorder": false,
                "stretched": false,
                "withBackground": false
            }
        },
        {
            "id": "VmuTfohBzO",
            "type": "warning",
            "data": {
                "title": "my warning title",
                "message": "warning message"
            }
        },
        {
            "id": "RFgpoQLNdU",
            "type": "quote",
            "data": {
                "text": "quote example",
                "caption": "enter caption",
                "alignment": "left"
            }
        },
        {
            "id": "W8E8c3uiZy",
            "type": "checklist",
            "data": {
                "items": [
                    {
                        "text": "task done",
                        "checked": false
                    },
                    {
                        "text": "add new task",
                        "checked": false
                    }
                ]
            }
        },
        {
            "id": "maXaenLJKG",
            "type": "delimiter",
            "data": {}
        },
        {
            "id": "c-Fv4R20X7",
            "type": "linkTool",
            "data": {
                "link": "https://www.youtube.com/@neiderruiz",
                "meta": {}
            }
        },
        {
            "id": "SGl1B6Pw7G",
            "type": "table",
            "data": {
                "withHeadings": true,
                "content": [
                    [
                        "first",
                        "second",
                        "third"
                    ],
                    [
                        "text first",
                        "second text",
                        "third text"
                    ]
                ]
            }
        }
    ],
    "version": "2.24.3"
}
```
