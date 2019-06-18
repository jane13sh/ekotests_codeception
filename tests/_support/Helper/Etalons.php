<?php

namespace Helper;

// here you can define custom actions
// all public methods declared in helper class will be available in $I

use Codeception\Lib\ModuleContainer;
use DateTime;
class Etalons extends \Codeception\Module
{

    public function getIngredientsValidListJson()
    {
        $ingredients_valid_list = '[
        {
        "stores": [],
        "created": "2018-10-22T14:39:29.6964767+03:00",
        "blockedActions": {
            "RemoveIngredient": [
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Д - 0",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Д - 1",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Д - 2",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Сух - 1",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Сух - 2"
            ]
        },
        "id": 1,
        "name": "Солома пшеничная",
        "type": 3,
        "dryMatter": 0.86,
        "lossType": 0,
        "lossCount": 0,
        "dynamicDryMatter": false,
        "isUnderweight": false,
        "digiStarInterchangeCode": "SolPsh"
        },
    {
        "stores": [],
        "created": "2018-10-22T14:39:29.3780567+03:00",
        "blockedActions": {
            "RemoveIngredient": [
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Д - 0",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Д - 1",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Д - 2",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Сух - 1",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Сух - 2",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Нетели",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Т 12 - 18",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Т 6 - 12",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Т 2 - 6",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Д - 3"
            ]
        },
        "id": 2,
        "name": "Комбикорм № 20",
        "type": 1,
        "dryMatter": 0.88,
        "lossType": 0,
        "lossCount": 0,
        "dynamicDryMatter": false,
        "isUnderweight": false,
        "digiStarInterchangeCode": "Kom 20"
    },
    {
        "stores": [],
        "created": "2018-10-22T14:39:29.017326+03:00",
        "blockedActions": {
            "RemoveIngredient": [
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Д - 0",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Д - 1"
            ]
        },
        "id": 3,
        "name": "Комбикорм № 11",
        "type": 1,
        "dryMatter": 0.89,
        "lossType": 0,
        "lossCount": 0,
        "dynamicDryMatter": false,
        "isUnderweight": false,
        "digiStarInterchangeCode": "Kom 11"
    },
    {
        "stores": [],
        "created": "2018-10-22T14:39:28.8445806+03:00",
        "blockedActions": {},
        "id": 4,
        "name": "Барда сухая",
        "type": 1,
        "dryMatter": 0.9,
        "lossType": 0,
        "lossCount": 0,
        "dynamicDryMatter": false,
        "isUnderweight": false,
        "digiStarInterchangeCode": "Barda"
    },
    {
        "stores": [],
        "created": "2018-10-22T14:39:28.6324753+03:00",
        "blockedActions": {
            "RemoveIngredient": [
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Д - 0",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Д - 1",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Д - 2",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Сух - 2"
            ]
        },
        "id": 5,
        "name": "Соя",
        "type": 1,
        "dryMatter": 0.9,
        "lossType": 0,
        "lossCount": 0,
        "dynamicDryMatter": false,
        "isUnderweight": false,
        "digiStarInterchangeCode": "Soya"
    },
    {
        "stores": [],
        "created": "2018-10-22T14:39:28.3253748+03:00",
        "blockedActions": {
            "RemoveIngredient": [
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Д - 0",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Д - 1",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Д - 2",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Сух - 2",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Нетели",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Т 12 - 18",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Т 6 - 12",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Д - 3"
            ]
        },
        "id": 6,
        "name": "Рапс",
        "type": 1,
        "dryMatter": 0.9,
        "lossType": 0,
        "lossCount": 0,
        "dynamicDryMatter": false,
        "isUnderweight": false,
        "digiStarInterchangeCode": "Raps"
    },
    {
        "stores": [],
        "created": "2018-10-22T14:39:26.6602072+03:00",
        "blockedActions": {},
        "id": 7,
        "name": "Комбикором № 1",
        "type": 1,
        "dryMatter": 0.92,
        "lossType": 0,
        "lossCount": 0,
        "dynamicDryMatter": false,
        "isUnderweight": false,
        "digiStarInterchangeCode": "Komb 1"
    },
    {
        "stores": [],
        "created": "2018-10-22T14:39:26.8706689+03:00",
        "blockedActions": {
            "RemoveIngredient": [
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Сух - 1"
            ]
        },
        "id": 8,
        "name": "Премикс коровы",
        "type": 1,
        "dryMatter": 0.99,
        "lossType": 0,
        "lossCount": 0,
        "dynamicDryMatter": false,
        "isUnderweight": false,
        "digiStarInterchangeCode": "PreKor"
    },
    {
        "stores": [],
        "created": "2018-10-22T14:39:28.1109395+03:00",
        "blockedActions": {
            "RemoveIngredient": [
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Сух - 2"
            ]
        },
        "id": 9,
        "name": "Комбикорм № 2",
        "type": 1,
        "dryMatter": 0.9,
        "lossType": 0,
        "lossCount": 0,
        "dynamicDryMatter": false,
        "isUnderweight": false,
        "digiStarInterchangeCode": "Komb 2"
    },
    {
        "stores": [],
        "created": "2018-10-22T14:39:27.9166204+03:00",
        "blockedActions": {
            "RemoveIngredient": [
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Д - 0"
            ]
        },
        "id": 10,
        "name": "Глицерин",
        "type": 1,
        "dryMatter": 1,
        "lossType": 0,
        "lossCount": 0,
        "dynamicDryMatter": false,
        "isUnderweight": false,
        "digiStarInterchangeCode": "Glizer"
    },
    {
        "stores": [],
        "created": "2018-10-22T14:39:26.4665383+03:00",
        "blockedActions": {
            "RemoveIngredient": [
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Д - 0",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Д - 1",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Д - 2",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Сух - 1",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Сух - 2",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Нетели",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Т 12 - 18",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Т 6 - 12",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Т 2 - 6",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Д - 3"
            ]
        },
        "id": 11,
        "name": "Сенаж ",
        "type": 3,
        "dryMatter": 0.4,
        "lossType": 0,
        "lossCount": 0,
        "dynamicDryMatter": true,
        "isUnderweight": false,
        "digiStarInterchangeCode": "Senazh"
    },
    {
        "stores": [],
        "created": "2018-10-22T14:39:26.2259582+03:00",
        "blockedActions": {
            "RemoveIngredient": [
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Д - 0",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Д - 1",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Д - 2",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Сух - 1",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Сух - 2",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Нетели",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Т 12 - 18",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Т 6 - 12",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Т 2 - 6",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Д - 3"
            ]
        },
        "id": 12,
        "name": "Силос",
        "type": 3,
        "dryMatter": 0.26,
        "lossType": 0,
        "lossCount": 0,
        "dynamicDryMatter": true,
        "isUnderweight": false,
        "digiStarInterchangeCode": "Silos"
    },
    {
        "stores": [],
        "created": "2018-10-22T14:39:27.7096584+03:00",
        "blockedActions": {
            "RemoveIngredient": [
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Д - 1",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Д - 2",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Сух - 1",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Нетели",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Т 12 - 18",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Т 6 - 12",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Т 2 - 6",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Д - 3"
            ]
        },
        "id": 14,
        "name": "Сено",
        "type": 3,
        "dryMatter": 0.86,
        "lossType": 0,
        "lossCount": 0,
        "dynamicDryMatter": false,
        "isUnderweight": false,
        "digiStarInterchangeCode": "Seno"
    },
    {
        "stores": [],
        "created": "2018-10-22T14:39:27.4935732+03:00",
        "blockedActions": {
            "RemoveIngredient": [
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Т 2 - 6"
            ]
        },
        "id": 15,
        "name": "Комбикорм № 3",
        "type": 1,
        "dryMatter": 0.88,
        "lossType": 0,
        "lossCount": 0,
        "dynamicDryMatter": false,
        "isUnderweight": false,
        "digiStarInterchangeCode": "Komb 3"
    },
    {
        "stores": [],
        "created": "2018-10-22T14:39:27.2940602+03:00",
        "blockedActions": {
            "RemoveIngredient": [
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Д - 2",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Д - 3"
            ]
        },
        "id": 16,
        "name": "Комбикорм № 12",
        "type": 1,
        "dryMatter": 0.89,
        "lossType": 0,
        "lossCount": 0,
        "dynamicDryMatter": false,
        "isUnderweight": false,
        "digiStarInterchangeCode": "Komb12"
    },
    {
        "stores": [],
        "created": "2018-10-22T14:39:27.0791555+03:00",
        "blockedActions": {
            "RemoveIngredient": [
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Нетели",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Т 12 - 18",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Т 6 - 12"
            ]
        },
        "id": 17,
        "name": "Премикс телки",
        "type": 1,
        "dryMatter": 0.95,
        "lossType": 0,
        "lossCount": 0,
        "dynamicDryMatter": false,
        "isUnderweight": false,
        "digiStarInterchangeCode": "PreTel"
    }
    ]';


        return $ingredients_valid_list;
    }

    public function getIngredientsValidListByIdJson()
    {
        $ingredient_json =  '{
    "stores": [],
    "created": "2018-10-22T14:39:29.6964767+03:00",
    "blockedActions": {
        "RemoveIngredient": [
            "Ингредиент нельзя удалить, т.к. он входит с состав рациона Д - 0",
            "Ингредиент нельзя удалить, т.к. он входит с состав рациона Д - 1",
            "Ингредиент нельзя удалить, т.к. он входит с состав рациона Д - 2",
            "Ингредиент нельзя удалить, т.к. он входит с состав рациона Сух - 1",
            "Ингредиент нельзя удалить, т.к. он входит с состав рациона Сух - 2"
        ]
    },
    "id": 1,
    "name": "Солома пшеничная",
    "type": 3,
    "dryMatter": 0.86,
    "lossType": 0,
    "lossCount": 0,
    "dynamicDryMatter": false,
    "isUnderweight": false,
    "digiStarInterchangeCode": "SolPsh"
}';

    return $ingredient_json;
    }

    public function getJsonForIngredientUpdate()  {


        $update_ingredient_json = '{
        "stores": [],
        "created": "2018-10-22T14:39:29.017326+03:00",
        "blockedActions": {
            "RemoveIngredient": [
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Д - 0",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Д - 1"
            ]
        },
        "id": 3,
        "name": "Комбикорм № 11 updated",
        "type": 3,
        "dryMatter": 0.50,
        "lossType": 0,
        "lossCount": 0,
        "dynamicDryMatter": true,
        "isUnderweight": true,
        "digiStarInterchangeCode": "Kom 22"
    }';

        return $update_ingredient_json;

    }

    public function getJsonForIngredientCreate()  {


        $create_ingredient_json =
        '{
        "id": 13,
        "name": "in test created ingredient",
        "description": "description",
        "type": 1,
        "dryMatter": 0.5,
        "lossType": 0,
        "lossCount": 0,
        "price": 0,
        "dynamicDryMatter": true,
        "isUnderweight": true,
        "windLossProportion": 0,
        "digiStarInterchangeCode": "123456"
    }';

        return $create_ingredient_json;

    }


    public function getRationsValidListJson()
    {  $rations_valid_list = '[
    {
        "ingredients": [
            {
                "name": "Солома пшеничная",
                "ingredientId": 1,
                "ordinalNumber": 0,
                "dryWeight": 1,
                "ptoRotation": 0
            },
            {
                "name": "Комбикорм № 20",
                "ingredientId": 2,
                "ordinalNumber": 1,
                "dryWeight": 2.5,
                "ptoRotation": 0
            },
            {
                "name": "Комбикорм № 11",
                "ingredientId": 3,
                "ordinalNumber": 2,
                "dryWeight": 3,
                "ptoRotation": 0
            },
            {
                "name": "Соя",
                "ingredientId": 5,
                "ordinalNumber": 3,
                "dryWeight": 2,
                "ptoRotation": 0
            },
            {
                "name": "Рапс",
                "ingredientId": 6,
                "ordinalNumber": 4,
                "dryWeight": 0.55,
                "ptoRotation": 0
            },
            {
                "name": "Глицерин",
                "ingredientId": 10,
                "ordinalNumber": 5,
                "dryWeight": 0.45,
                "ptoRotation": 0
            },
            {
                "name": "Сенаж ",
                "ingredientId": 11,
                "ordinalNumber": 6,
                "dryWeight": 2.5,
                "ptoRotation": 0
            },
            {
                "name": "Силос",
                "ingredientId": 12,
                "ordinalNumber": 7,
                "dryWeight": 7,
                "ptoRotation": 0
            }
        ],
        "name": "Д - 0",
        "density": 380,
        "isPremix": false,
        "dryMatterProportion": 0.433484174187265,
        "compensationMode": 0,
        "waterWeight": 0,
        "waterPtoRotation": 720,
        "digiStarInterchangeCode": "D  0",
        "id": 1
    },
    {
        "ingredients": [
            {
                "name": "Солома пшеничная",
                "ingredientId": 1,
                "ordinalNumber": 0,
                "dryWeight": 0.7,
                "ptoRotation": 0
            },
            {
                "name": "Сено",
                "ingredientId": 14,
                "ordinalNumber": 1,
                "dryWeight": 1,
                "ptoRotation": 0
            },
            {
                "name": "Комбикорм № 20",
                "ingredientId": 2,
                "ordinalNumber": 2,
                "dryWeight": 7.2,
                "ptoRotation": 0
            },
            {
                "name": "Комбикорм № 11",
                "ingredientId": 3,
                "ordinalNumber": 3,
                "dryWeight": 4,
                "ptoRotation": 0
            },
            {
                "name": "Соя",
                "ingredientId": 5,
                "ordinalNumber": 4,
                "dryWeight": 1.8,
                "ptoRotation": 0
            },
            {
                "name": "Рапс",
                "ingredientId": 6,
                "ordinalNumber": 5,
                "dryWeight": 0.8,
                "ptoRotation": 0
            },
            {
                "name": "Сенаж ",
                "ingredientId": 11,
                "ordinalNumber": 6,
                "dryWeight": 3.35,
                "ptoRotation": 0
            },
            {
                "name": "Силос",
                "ingredientId": 12,
                "ordinalNumber": 7,
                "dryWeight": 6.15,
                "ptoRotation": 0
            }
        ],
        "name": "Д - 1",
        "density": 370,
        "isPremix": false,
        "dryMatterProportion": 0.480024459591148,
        "compensationMode": 0,
        "waterWeight": 2.51,
        "waterPtoRotation": 0,
        "digiStarInterchangeCode": "D 1",
        "id": 2
    },
    {
        "ingredients": [
            {
                "name": "Солома пшеничная",
                "ingredientId": 1,
                "ordinalNumber": 0,
                "dryWeight": 0.5,
                "ptoRotation": 0
            },
            {
                "name": "Сено",
                "ingredientId": 14,
                "ordinalNumber": 1,
                "dryWeight": 1.5,
                "ptoRotation": 0
            },
            {
                "name": "Комбикорм № 12",
                "ingredientId": 16,
                "ordinalNumber": 2,
                "dryWeight": 4,
                "ptoRotation": 0
            },
            {
                "name": "Комбикорм № 20",
                "ingredientId": 2,
                "ordinalNumber": 3,
                "dryWeight": 6,
                "ptoRotation": 0
            },
            {
                "name": "Соя",
                "ingredientId": 5,
                "ordinalNumber": 4,
                "dryWeight": 1.6,
                "ptoRotation": 0
            },
            {
                "name": "Рапс",
                "ingredientId": 6,
                "ordinalNumber": 5,
                "dryWeight": 1,
                "ptoRotation": 0
            },
            {
                "name": "Сенаж ",
                "ingredientId": 11,
                "ordinalNumber": 6,
                "dryWeight": 3.6,
                "ptoRotation": 0
            },
            {
                "name": "Силос",
                "ingredientId": 12,
                "ordinalNumber": 7,
                "dryWeight": 6.8,
                "ptoRotation": 0
            }
        ],
        "name": "Д - 2",
        "density": 400,
        "isPremix": false,
        "dryMatterProportion": 0.470005381918702,
        "compensationMode": 0,
        "waterWeight": 1.51,
        "waterPtoRotation": 0,
        "digiStarInterchangeCode": "D 2",
        "id": 4
    },
    {
        "ingredients": [
            {
                "name": "Солома пшеничная",
                "ingredientId": 1,
                "ordinalNumber": 0,
                "dryWeight": 1.5,
                "ptoRotation": 0
            },
            {
                "name": "Сено",
                "ingredientId": 14,
                "ordinalNumber": 1,
                "dryWeight": 2,
                "ptoRotation": 0
            },
            {
                "name": "Комбикорм № 20",
                "ingredientId": 2,
                "ordinalNumber": 2,
                "dryWeight": 0.8,
                "ptoRotation": 0
            },
            {
                "name": "Премикс коровы",
                "ingredientId": 8,
                "ordinalNumber": 3,
                "dryWeight": 0.15,
                "ptoRotation": 0
            },
            {
                "name": "Сенаж ",
                "ingredientId": 11,
                "ordinalNumber": 4,
                "dryWeight": 4.3,
                "ptoRotation": 0
            },
            {
                "name": "Силос",
                "ingredientId": 12,
                "ordinalNumber": 5,
                "dryWeight": 4.25,
                "ptoRotation": 0
            }
        ],
        "name": "Сух - 1",
        "density": 400,
        "isPremix": false,
        "dryMatterProportion": 0.40339437939957,
        "compensationMode": 0,
        "waterWeight": 0,
        "waterPtoRotation": 0,
        "digiStarInterchangeCode": "SUH 1",
        "id": 5
    },
    {
        "ingredients": [
            {
                "name": "Солома пшеничная",
                "ingredientId": 1,
                "ordinalNumber": 0,
                "dryWeight": 1.5,
                "ptoRotation": 0
            },
            {
                "name": "Комбикорм № 20",
                "ingredientId": 2,
                "ordinalNumber": 1,
                "dryWeight": 1.65,
                "ptoRotation": 0
            },
            {
                "name": "Соя",
                "ingredientId": 5,
                "ordinalNumber": 2,
                "dryWeight": 1,
                "ptoRotation": 0
            },
            {
                "name": "Рапс",
                "ingredientId": 6,
                "ordinalNumber": 3,
                "dryWeight": 0.6,
                "ptoRotation": 0
            },
            {
                "name": "Комбикорм № 2",
                "ingredientId": 9,
                "ordinalNumber": 4,
                "dryWeight": 1.37,
                "ptoRotation": 0
            },
            {
                "name": "Сенаж ",
                "ingredientId": 11,
                "ordinalNumber": 5,
                "dryWeight": 2,
                "ptoRotation": 0
            },
            {
                "name": "Силос",
                "ingredientId": 12,
                "ordinalNumber": 6,
                "dryWeight": 4.88,
                "ptoRotation": 0
            }
        ],
        "name": "Сух - 2",
        "density": 380,
        "isPremix": false,
        "dryMatterProportion": 0.423612598787805,
        "compensationMode": 0,
        "waterWeight": 0,
        "waterPtoRotation": 0,
        "digiStarInterchangeCode": "SUH 2",
        "id": 6
    },
    {
        "ingredients": [
            {
                "name": "Сено",
                "ingredientId": 14,
                "ordinalNumber": 0,
                "dryWeight": 3,
                "ptoRotation": 0
            },
            {
                "name": "Комбикорм № 20",
                "ingredientId": 2,
                "ordinalNumber": 1,
                "dryWeight": 2,
                "ptoRotation": 0
            },
            {
                "name": "Рапс",
                "ingredientId": 6,
                "ordinalNumber": 2,
                "dryWeight": 0.5,
                "ptoRotation": 0
            },
            {
                "name": "Премикс телки",
                "ingredientId": 17,
                "ordinalNumber": 3,
                "dryWeight": 0.15,
                "ptoRotation": 0
            },
            {
                "name": "Сенаж ",
                "ingredientId": 11,
                "ordinalNumber": 4,
                "dryWeight": 3.4,
                "ptoRotation": 0
            },
            {
                "name": "Силос",
                "ingredientId": 12,
                "ordinalNumber": 5,
                "dryWeight": 3.95,
                "ptoRotation": 0
            }
        ],
        "name": "Нетели",
        "density": 400,
        "isPremix": false,
        "dryMatterProportion": 0.430936502565573,
        "compensationMode": 0,
        "waterWeight": 0,
        "waterPtoRotation": 0,
        "digiStarInterchangeCode": "NETELI",
        "id": 7
    },
    {
        "ingredients": [
            {
                "name": "Сено",
                "ingredientId": 14,
                "ordinalNumber": 0,
                "dryWeight": 2,
                "ptoRotation": 0
            },
            {
                "name": "Комбикорм № 20",
                "ingredientId": 2,
                "ordinalNumber": 1,
                "dryWeight": 2.1,
                "ptoRotation": 0
            },
            {
                "name": "Рапс",
                "ingredientId": 6,
                "ordinalNumber": 2,
                "dryWeight": 0.6,
                "ptoRotation": 0
            },
            {
                "name": "Премикс телки",
                "ingredientId": 17,
                "ordinalNumber": 3,
                "dryWeight": 0.15,
                "ptoRotation": 0
            },
            {
                "name": "Сенаж ",
                "ingredientId": 11,
                "ordinalNumber": 4,
                "dryWeight": 4,
                "ptoRotation": 0
            },
            {
                "name": "Силос",
                "ingredientId": 12,
                "ordinalNumber": 5,
                "dryWeight": 4.15,
                "ptoRotation": 0
            }
        ],
        "name": "Т 12 - 18",
        "density": 400,
        "isPremix": false,
        "dryMatterProportion": 0.412724029145611,
        "compensationMode": 0,
        "waterWeight": 0,
        "waterPtoRotation": 0,
        "digiStarInterchangeCode": "T12 18",
        "id": 8
    },
    {
        "ingredients": [
            {
                "name": "Сено",
                "ingredientId": 14,
                "ordinalNumber": 0,
                "dryWeight": 1,
                "ptoRotation": 0
            },
            {
                "name": "Комбикорм № 20",
                "ingredientId": 2,
                "ordinalNumber": 1,
                "dryWeight": 2.15,
                "ptoRotation": 0
            },
            {
                "name": "Рапс",
                "ingredientId": 6,
                "ordinalNumber": 2,
                "dryWeight": 0.9,
                "ptoRotation": 0
            },
            {
                "name": "Премикс телки",
                "ingredientId": 17,
                "ordinalNumber": 3,
                "dryWeight": 0.15,
                "ptoRotation": 0
            },
            {
                "name": "Сенаж ",
                "ingredientId": 11,
                "ordinalNumber": 4,
                "dryWeight": 1.9,
                "ptoRotation": 0
            },
            {
                "name": "Силос",
                "ingredientId": 12,
                "ordinalNumber": 5,
                "dryWeight": 1.9,
                "ptoRotation": 0
            }
        ],
        "name": "Т 6 - 12",
        "density": 400,
        "isPremix": false,
        "dryMatterProportion": 0.475580160762112,
        "compensationMode": 0,
        "waterWeight": 0,
        "waterPtoRotation": 0,
        "digiStarInterchangeCode": "T 6 12",
        "id": 9
    },
    {
        "ingredients": [
            {
                "name": "Сено",
                "ingredientId": 14,
                "ordinalNumber": 0,
                "dryWeight": 0.35,
                "ptoRotation": 0
            },
            {
                "name": "Комбикорм № 3",
                "ingredientId": 15,
                "ordinalNumber": 1,
                "dryWeight": 2.1,
                "ptoRotation": 0
            },
            {
                "name": "Комбикорм № 20",
                "ingredientId": 2,
                "ordinalNumber": 2,
                "dryWeight": 0.4,
                "ptoRotation": 0
            },
            {
                "name": "Сенаж ",
                "ingredientId": 11,
                "ordinalNumber": 3,
                "dryWeight": 0.35,
                "ptoRotation": 0
            },
            {
                "name": "Силос",
                "ingredientId": 12,
                "ordinalNumber": 4,
                "dryWeight": 0.8,
                "ptoRotation": 0
            }
        ],
        "name": "Т 2 - 6",
        "density": 400,
        "isPremix": false,
        "dryMatterProportion": 0.555570300389922,
        "compensationMode": 0,
        "waterWeight": 0,
        "waterPtoRotation": 0,
        "digiStarInterchangeCode": "T 2 6",
        "id": 10
    },
    {
        "ingredients": [
            {
                "name": "Сено",
                "ingredientId": 14,
                "ordinalNumber": 0,
                "dryWeight": 2,
                "ptoRotation": 0
            },
            {
                "name": "Комбикорм № 12",
                "ingredientId": 16,
                "ordinalNumber": 1,
                "dryWeight": 3.5,
                "ptoRotation": 0
            },
            {
                "name": "Комбикорм № 20",
                "ingredientId": 2,
                "ordinalNumber": 2,
                "dryWeight": 2,
                "ptoRotation": 0
            },
            {
                "name": "Рапс",
                "ingredientId": 6,
                "ordinalNumber": 3,
                "dryWeight": 1,
                "ptoRotation": 0
            },
            {
                "name": "Сенаж ",
                "ingredientId": 11,
                "ordinalNumber": 4,
                "dryWeight": 6.75,
                "ptoRotation": 0
            },
            {
                "name": "Силос",
                "ingredientId": 12,
                "ordinalNumber": 5,
                "dryWeight": 6.75,
                "ptoRotation": 0
            }
        ],
        "name": "Д - 3",
        "density": 380,
        "isPremix": false,
        "dryMatterProportion": 0.419218959742354,
        "compensationMode": 0,
        "waterWeight": 0,
        "waterPtoRotation": 0,
        "digiStarInterchangeCode": "D 3",
        "id": 11
    }
]';
    return $rations_valid_list;


    }

    public function getRationsValidListJsonById()
    {  $ration_json = '{
    "ingredients": [
        {
            "name": "Солома пшеничная",
            "ingredientId": 1,
            "ordinalNumber": 0,
            "dryWeight": 0.5,
            "ptoRotation": 0
        },
        {
            "name": "Сено",
            "ingredientId": 14,
            "ordinalNumber": 1,
            "dryWeight": 1.5,
            "ptoRotation": 0
        },
        {
            "name": "Комбикорм № 12",
            "ingredientId": 16,
            "ordinalNumber": 2,
            "dryWeight": 4,
            "ptoRotation": 0
        },
        {
            "name": "Комбикорм № 20",
            "ingredientId": 2,
            "ordinalNumber": 3,
            "dryWeight": 6,
            "ptoRotation": 0
        },
        {
            "name": "Соя",
            "ingredientId": 5,
            "ordinalNumber": 4,
            "dryWeight": 1.6,
            "ptoRotation": 0
        },
        {
            "name": "Рапс",
            "ingredientId": 6,
            "ordinalNumber": 5,
            "dryWeight": 1,
            "ptoRotation": 0
        },
        {
            "name": "Сенаж ",
            "ingredientId": 11,
            "ordinalNumber": 6,
            "dryWeight": 3.6,
            "ptoRotation": 0
        },
        {
            "name": "Силос",
            "ingredientId": 12,
            "ordinalNumber": 7,
            "dryWeight": 6.8,
            "ptoRotation": 0
        }
    ],
    "name": "Д - 2",
    "density": 400,
    "isPremix": false,
    "dryMatterProportion": 0.470005381918702,
    "compensationMode": 0,
    "waterWeight": 1.51,
    "waterPtoRotation": 0,
    "digiStarInterchangeCode": "D 2",
    "id": 4
}';

        return $ration_json;


    }

    public function getJsonForRationCreate() {
        $create_ration_json = '{
    "ingredients": [
        {
            "name": "Сено",
            "ingredientId": 14,
            "ordinalNumber": 0,
            "dryWeight": 0.35,
            "ptoRotation": 0
        },
        {
            "name": "Комбикорм № 3",
            "ingredientId": 15,
            "ordinalNumber": 1,
            "dryWeight": 2.1,
            "ptoRotation": 0
        },
        {
            "name": "Комбикорм № 20",
            "ingredientId": 2,
            "ordinalNumber": 2,
            "dryWeight": 0.4,
            "ptoRotation": 0
        },
        {
            "name": "Сенаж ",
            "ingredientId": 11,
            "ordinalNumber": 3,
            "dryWeight": 0.35,
            "ptoRotation": 0
        },
        {
            "name": "Силос",
            "ingredientId": 12,
            "ordinalNumber": 4,
            "dryWeight": 0.8,
            "ptoRotation": 0
        }
    ],
    "id": 61,
    "name": "ration create in test",
    "density": 700,
    "isPremix": false,
    "compensationMode": 0,
    "waterWeight": 1,
    "waterPtoRotation": 1,
    "digiStarInterchangeCode": "177777"
}';

            return $create_ration_json;

    }

    public function getJsonForRationUpdate() {

        $update_ration_json = '{
        "ingredients": [
            {
                "name": "Солома пшеничная",
                "ingredientId": 1,
                "ordinalNumber": 0,
                "dryWeight": 0.5,
                "ptoRotation": 0
            },
            {
                "name": "Сено",
                "ingredientId": 14,
                "ordinalNumber": 1,
                "dryWeight": 1.5,
                "ptoRotation": 0
            },
            {
                "name": "Силос",
                "ingredientId": 12,
                "ordinalNumber": 2,
                "dryWeight": 6.8,
                "ptoRotation": 0
            }
        ],
        "name": "Д - 2",
        "density": 450,
        "isPremix": false,
        "compensationMode": 0,
        "waterWeight": 1.51,
        "waterPtoRotation": 0,
        "digiStarInterchangeCode": "D2upd",
        "id": 4
    }';

        return $update_ration_json;



    }



    public function getMixersValidListJson()
    {  $mixers_valid_list = '[
    {
        "id": 1,
        "name": "30",
        "description": "",
        "volume": 30
    },
    {
        "id": 2,
        "name": "15",
        "description": "",
        "volume": 15
    }
]';
        return $mixers_valid_list;


    }

    public function getMixersValidListJsonById()
    {  $mixer_json = '{
    "id": 1,
    "name": "30",
    "description": "",
    "volume": 30
}';

        return $mixer_json;


    }

    public function getJsonForMixerCreate() {
        $create_mixer_json = '{
        "id": 5,
        "name": "mixer in test create",
        "description": "fifth description",
        "volume": 30
        }';

        return $create_mixer_json;

    }

    public function getJsonForMixerUpdate() {

        $update_mixer_json = '{
        "id": 1,
        "name": "30 name",
        "description": "",
        "volume": 31
        }';

        return $update_mixer_json;



    }


    public function getFeedingPlansValidListJson()
    {  $feed_plans_valid_list = '[
    {
        "blockedActions": {
            "RemoveFeedingPlan": [
                "Нельзя удалить расписание, так как с ним связаны секции коровника: 32,15,31"
            ]
        },
        "name": "Д - 0 100%",
        "rationId": 1,
        "parts": [
            1
        ],
        "id": 1
    },
    {
        "blockedActions": {
            "RemoveFeedingPlan": [
                "Нельзя удалить расписание, так как с ним связаны секции коровника: 10,54,Копытчик,12"
            ]
        },
        "name": "Д - 1 100%",
        "rationId": 2,
        "parts": [
            1
        ],
        "id": 4
    },
    {
        "blockedActions": {
            "RemoveFeedingPlan": [
                "Нельзя удалить расписание, так как с ним связаны секции коровника: 72,73"
            ]
        },
        "name": "Сух - 1",
        "rationId": 5,
        "parts": [
            1
        ],
        "id": 5
    },
    {
        "blockedActions": {
            "RemoveFeedingPlan": [
                "Нельзя удалить расписание, так как с ним связаны секции коровника: 11,16,13,74"
            ]
        },
        "name": "Сух - 2",
        "rationId": 6,
        "parts": [
            1
        ],
        "id": 6
    },
    {
        "blockedActions": {},
        "name": "Т 12 - 18",
        "rationId": 8,
        "parts": [
            1
        ],
        "id": 7
    },
    {
        "blockedActions": {
            "RemoveFeedingPlan": [
                "Нельзя удалить расписание, так как с ним связаны секции коровника: 64,61-63"
            ]
        },
        "name": "Т 6 - 12",
        "rationId": 9,
        "parts": [
            1
        ],
        "id": 8
    },
    {
        "blockedActions": {
            "RemoveFeedingPlan": [
                "Нельзя удалить расписание, так как с ним связаны секции коровника: Навес"
            ]
        },
        "name": "Т 2 - 6",
        "rationId": 10,
        "parts": [
            1
        ],
        "id": 9
    },
    {
        "blockedActions": {
            "RemoveFeedingPlan": [
                "Нельзя удалить расписание, так как с ним связаны секции коровника: 21,22,23,24,43,44,41,42"
            ]
        },
        "name": "Д - 1 50/50 %",
        "rationId": 2,
        "parts": [
            0.5,
            0.5
        ],
        "id": 10
    },
    {
        "blockedActions": {
            "RemoveFeedingPlan": [
                "Нельзя удалить расписание, так как с ним связаны секции коровника: 53"
            ]
        },
        "name": "Д - 2 100%",
        "rationId": 4,
        "parts": [
            1
        ],
        "id": 11
    },
    {
        "blockedActions": {
            "RemoveFeedingPlan": [
                "Нельзя удалить расписание, так как с ним связаны секции коровника: 71,65"
            ]
        },
        "name": "Нетели",
        "rationId": 7,
        "parts": [
            1
        ],
        "id": 13
    },
    {
        "blockedActions": {},
        "name": "Сух - 1 50/50%",
        "rationId": 5,
        "parts": [
            0.5,
            0.5
        ],
        "id": 16
    },
    {
        "blockedActions": {},
        "name": "Д - 2 50/50%",
        "rationId": 4,
        "parts": [
            0.5,
            0.5
        ],
        "id": 18
    },
    {
        "blockedActions": {},
        "name": "Т 2-6 50/50%",
        "rationId": 10,
        "parts": [
            0.5,
            0.5
        ],
        "id": 19
    },
    {
        "blockedActions": {},
        "name": "Д - 0 50/50%",
        "rationId": 1,
        "parts": [
            0.5,
            0.5
        ],
        "id": 20
    },
    {
        "blockedActions": {},
        "name": "Д - 3 100%",
        "rationId": 11,
        "parts": [
            1
        ],
        "id": 21
    },
    {
        "blockedActions": {
            "RemoveFeedingPlan": [
                "Нельзя удалить расписание, так как с ним связаны секции коровника: 52,51"
            ]
        },
        "name": "Д - 3 50/50%",
        "rationId": 11,
        "parts": [
            0.5,
            0.5
        ],
        "id": 22
    },
    {
        "blockedActions": {},
        "name": "Д - 1 45/55%",
        "rationId": 2,
        "parts": [
            0.45,
            0.55
        ],
        "id": 23
    }
]';
        return $feed_plans_valid_list;


    }

    public function getFeedingPlansListJsonById()
    {  $feed_plan_json = '{
    "blockedActions": {
        "RemoveFeedingPlan": [
            "Нельзя удалить расписание, так как с ним связаны секции коровника: 21,22,23,24,43,44,41,42"
        ]
    },
    "name": "Д - 1 50/50 %",
    "rationId": 2,
    "parts": [
        0.5,
        0.5
    ],
    "id": 10
}';
        return $feed_plan_json;


    }

    public function getJsonForFeedingPlanCreate() {
        $create_feed_plan_json = '{
         "id": 77,
         "name": "plan created in test",
         "rationId": 1,
         "parts": [
         0.5,
         0.5
         ]
         }';

        return $create_feed_plan_json;

    }

    public function getJsonForFeedingPlanUpdate() {

        $update_feed_plan_json = '{
       "id": 10,
       "name": "new name Д - 1 50/50 %",
       "rationId": 1,
       "parts": [
       0.5,
       0.5
       ]
       }';

        return $update_feed_plan_json;



    }


    public function getStorageUnitsValidListJson()
    {  $storages_valid_list = '[
    {
        "blockedActions": {
            "RemoveIngredientStorageUnit": [
                "Нельзя удалить ячейку, так как с ней связаны активные задания: задания на кормление за 18.06.2018 (1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14), за 28.06.2018 (16)"
            ],
            "ChangeIngredientStorageUnit": [
                "Нельзя изменить ингредиент ячейки, так как с ней связаны активные задания: задания на кормление за 18.06.2018 (1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14), за 28.06.2018 (16)"
            ]
        },
        "name": "Силос",
        "description": "",
        "ingredientId": 12,
        "amount": 2547973,
        "id": 1
    },
    {
        "blockedActions": {
            "RemoveIngredientStorageUnit": [
                "Нельзя удалить ячейку, так как с ней связаны активные задания: задания на кормление за 18.06.2018 (1)"
            ],
            "ChangeIngredientStorageUnit": [
                "Нельзя изменить ингредиент ячейки, так как с ней связаны активные задания: задания на кормление за 18.06.2018 (1)"
            ]
        },
        "name": "Комбикорм № 1",
        "description": "",
        "ingredientId": 7,
        "amount": 0,
        "id": 2
    },
    {
        "blockedActions": {
            "RemoveIngredientStorageUnit": [
                "Нельзя удалить ячейку, так как с ней связаны активные задания: задания на кормление за 18.06.2018 (1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14), за 28.06.2018 (16)"
            ],
            "ChangeIngredientStorageUnit": [
                "Нельзя изменить ингредиент ячейки, так как с ней связаны активные задания: задания на кормление за 18.06.2018 (1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14), за 28.06.2018 (16)"
            ]
        },
        "name": "Сенаж 17",
        "description": "",
        "ingredientId": 11,
        "amount": 632336,
        "id": 4
    },
    {
        "blockedActions": {
            "RemoveIngredientStorageUnit": [
                "Нельзя удалить ячейку, так как с ней связаны активные задания: задания на кормление за 18.06.2018 (3, 5, 7)"
            ],
            "ChangeIngredientStorageUnit": [
                "Нельзя изменить ингредиент ячейки, так как с ней связаны активные задания: задания на кормление за 18.06.2018 (3, 5, 7)"
            ]
        },
        "name": "Премикс телки",
        "description": "",
        "ingredientId": 17,
        "amount": 1125,
        "id": 5
    },
    {
        "blockedActions": {
            "RemoveIngredientStorageUnit": [
                "Нельзя удалить ячейку, так как с ней связаны активные задания: задания на кормление за 18.06.2018 (8, 9, 14)"
            ],
            "ChangeIngredientStorageUnit": [
                "Нельзя изменить ингредиент ячейки, так как с ней связаны активные задания: задания на кормление за 18.06.2018 (8, 9, 14)"
            ]
        },
        "name": "Комбикорм № 12",
        "description": "",
        "ingredientId": 16,
        "amount": 5999,
        "id": 6
    },
    {
        "name": "Комбикорм № 3",
        "description": "",
        "ingredientId": 15,
        "amount": 6926,
        "id": 7
    },
    {
        "blockedActions": {
            "RemoveIngredientStorageUnit": [
                "Нельзя удалить ячейку, так как с ней связаны активные задания: задания на кормление за 18.06.2018 (2, 3, 4, 5, 6, 8, 10, 12, 13, 14), за 28.06.2018 (16)"
            ],
            "ChangeIngredientStorageUnit": [
                "Нельзя изменить ингредиент ячейки, так как с ней связаны активные задания: задания на кормление за 18.06.2018 (2, 3, 4, 5, 6, 8, 10, 12, 13, 14), за 28.06.2018 (16)"
            ]
        },
        "name": "Сено",
        "description": "",
        "ingredientId": 14,
        "amount": 12641,
        "id": 8
    },
    {
        "blockedActions": {
            "RemoveIngredientStorageUnit": [
                "Нельзя удалить ячейку, так как с ней связаны активные задания: задания на кормление за 18.06.2018 (1)"
            ],
            "ChangeIngredientStorageUnit": [
                "Нельзя изменить ингредиент ячейки, так как с ней связаны активные задания: задания на кормление за 18.06.2018 (1)"
            ]
        },
        "name": "Глицерин",
        "description": "",
        "ingredientId": 10,
        "amount": 1551,
        "id": 9
    },
    {
        "name": "Комбикорм № 2",
        "description": "",
        "ingredientId": 9,
        "amount": 858,
        "id": 10
    },
    {
        "blockedActions": {
            "RemoveIngredientStorageUnit": [
                "Нельзя удалить ячейку, так как с ней связаны активные задания: задания на кормление за 18.06.2018 (11)"
            ],
            "ChangeIngredientStorageUnit": [
                "Нельзя изменить ингредиент ячейки, так как с ней связаны активные задания: задания на кормление за 18.06.2018 (11)"
            ]
        },
        "name": "Премикс коровы",
        "description": "",
        "ingredientId": 8,
        "amount": 967,
        "id": 11
    },
    {
        "blockedActions": {
            "RemoveIngredientStorageUnit": [
                "Нельзя удалить ячейку, так как с ней связаны активные задания: задания на кормление за 18.06.2018 (1, 2, 4, 6, 8, 9, 10, 12, 13, 14), за 28.06.2018 (16)"
            ],
            "ChangeIngredientStorageUnit": [
                "Нельзя изменить ингредиент ячейки, так как с ней связаны активные задания: задания на кормление за 18.06.2018 (1, 2, 4, 6, 8, 9, 10, 12, 13, 14), за 28.06.2018 (16)"
            ]
        },
        "name": "Рапс",
        "description": "",
        "ingredientId": 6,
        "amount": 490588,
        "id": 12
    },
    {
        "blockedActions": {
            "RemoveIngredientStorageUnit": [
                "Нельзя удалить ячейку, так как с ней связаны активные задания: задания на кормление за 18.06.2018 (1, 2, 3, 4, 6, 8, 10, 12, 13, 14), за 28.06.2018 (16)"
            ],
            "ChangeIngredientStorageUnit": [
                "Нельзя изменить ингредиент ячейки, так как с ней связаны активные задания: задания на кормление за 18.06.2018 (1, 2, 3, 4, 6, 8, 10, 12, 13, 14), за 28.06.2018 (16)"
            ]
        },
        "name": "Соя",
        "description": "",
        "ingredientId": 5,
        "amount": 485263,
        "id": 13
    },
    {
        "blockedActions": {
            "RemoveIngredientStorageUnit": [
                "Нельзя удалить ячейку, так как с ней связаны активные задания: задания на кормление за 18.06.2018 (1, 2, 3, 4, 5, 6, 8, 9, 10, 11, 12, 13, 14), за 28.06.2018 (16)"
            ],
            "ChangeIngredientStorageUnit": [
                "Нельзя изменить ингредиент ячейки, так как с ней связаны активные задания: задания на кормление за 18.06.2018 (1, 2, 3, 4, 5, 6, 8, 9, 10, 11, 12, 13, 14), за 28.06.2018 (16)"
            ]
        },
        "name": "Барда сухая",
        "description": "",
        "ingredientId": 4,
        "amount": 2578,
        "id": 14
    },
    {
        "blockedActions": {
            "RemoveIngredientStorageUnit": [
                "Нельзя удалить ячейку, так как с ней связаны активные задания: задания на кормление за 18.06.2018 (1, 2, 4, 6, 10, 12, 13), за 28.06.2018 (16)"
            ],
            "ChangeIngredientStorageUnit": [
                "Нельзя изменить ингредиент ячейки, так как с ней связаны активные задания: задания на кормление за 18.06.2018 (1, 2, 4, 6, 10, 12, 13), за 28.06.2018 (16)"
            ]
        },
        "name": "Комбикорм № 11",
        "description": "",
        "ingredientId": 3,
        "amount": 478905,
        "id": 15
    },
    {
        "blockedActions": {
            "RemoveIngredientStorageUnit": [
                "Нельзя удалить ячейку, так как с ней связаны активные задания: задания на кормление за 18.06.2018 (1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14), за 28.06.2018 (16)"
            ],
            "ChangeIngredientStorageUnit": [
                "Нельзя изменить ингредиент ячейки, так как с ней связаны активные задания: задания на кормление за 18.06.2018 (1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14), за 28.06.2018 (16)"
            ]
        },
        "name": "Комбикорм № 20",
        "description": "",
        "ingredientId": 2,
        "amount": 437246,
        "id": 16
    },
    {
        "blockedActions": {
            "RemoveIngredientStorageUnit": [
                "Нельзя удалить ячейку, так как с ней связаны активные задания: задания на кормление за 18.06.2018 (1, 7, 11)"
            ],
            "ChangeIngredientStorageUnit": [
                "Нельзя изменить ингредиент ячейки, так как с ней связаны активные задания: задания на кормление за 18.06.2018 (1, 7, 11)"
            ]
        },
        "name": "Солома пшеничная",
        "description": "",
        "ingredientId": 1,
        "amount": 100189,
        "id": 17
    }
]';
        return $storages_valid_list;


    }

    public function getStorageUnitsListJsonById()
    {  $storage_json = '{
    "blockedActions": {
        "RemoveIngredientStorageUnit": [
            "Нельзя удалить ячейку, так как с ней связаны активные задания: задания на кормление за 18.06.2018 (2, 3, 4, 5, 6, 8, 10, 12, 13, 14), за 28.06.2018 (16)",
            "Нельзя удалить ячейку, так как с ней связаны активные задания: задания на кормление за 18.06.2018 (2, 3, 4, 5, 6, 8, 10, 12, 13, 14), за 28.06.2018 (16)",
            "Нельзя удалить ячейку, так как с ней связаны активные задания: задания на кормление за 18.06.2018 (2, 4, 6, 10, 12, 13), за 28.06.2018 (16)",
            "Нельзя удалить ячейку, так как с ней связаны активные задания: задания на кормление за 18.06.2018 (2, 3, 4, 5, 6, 8, 10, 12, 13, 14), за 28.06.2018 (16)",
            "Нельзя удалить ячейку, так как с ней связаны активные задания: задания на кормление за 18.06.2018 (2, 3, 4, 6, 8, 10, 12, 13, 14), за 28.06.2018 (16)",
            "Нельзя удалить ячейку, так как с ней связаны активные задания: задания на кормление за 18.06.2018 (2, 4, 6, 8, 10, 12, 13, 14), за 28.06.2018 (16)",
            "Нельзя удалить ячейку, так как с ней связаны активные задания: задания на кормление за 18.06.2018 (2, 3, 4, 5, 6, 8, 10, 12, 13, 14), за 28.06.2018 (16)",
            "Нельзя удалить ячейку, так как с ней связаны активные задания: задания на кормление за 18.06.2018 (2, 3, 4, 5, 6, 8, 10, 12, 13, 14), за 28.06.2018 (16)",
            "Нельзя удалить ячейку, так как с ней связаны активные задания: задания на кормление за 18.06.2018 (2, 4, 6, 10, 12, 13), за 28.06.2018 (16)",
            "Нельзя удалить ячейку, так как с ней связаны активные задания: задания на кормление за 18.06.2018 (3, 5)",
            "Нельзя удалить ячейку, так как с ней связаны активные задания: задания на кормление за 18.06.2018 (5)",
            "Нельзя удалить ячейку, так как с ней связаны активные задания: задания на кормление за 18.06.2018 (8, 14)"
        ],
        "ChangeIngredientStorageUnit": [
            "Нельзя изменить ингредиент ячейки, так как с ней связаны активные задания: задания на кормление за 18.06.2018 (2, 3, 4, 5, 6, 8, 10, 12, 13, 14), за 28.06.2018 (16)",
            "Нельзя изменить ингредиент ячейки, так как с ней связаны активные задания: задания на кормление за 18.06.2018 (2, 3, 4, 5, 6, 8, 10, 12, 13, 14), за 28.06.2018 (16)",
            "Нельзя изменить ингредиент ячейки, так как с ней связаны активные задания: задания на кормление за 18.06.2018 (2, 4, 6, 10, 12, 13), за 28.06.2018 (16)",
            "Нельзя изменить ингредиент ячейки, так как с ней связаны активные задания: задания на кормление за 18.06.2018 (2, 3, 4, 5, 6, 8, 10, 12, 13, 14), за 28.06.2018 (16)",
            "Нельзя изменить ингредиент ячейки, так как с ней связаны активные задания: задания на кормление за 18.06.2018 (2, 3, 4, 6, 8, 10, 12, 13, 14), за 28.06.2018 (16)",
            "Нельзя изменить ингредиент ячейки, так как с ней связаны активные задания: задания на кормление за 18.06.2018 (2, 4, 6, 8, 10, 12, 13, 14), за 28.06.2018 (16)",
            "Нельзя изменить ингредиент ячейки, так как с ней связаны активные задания: задания на кормление за 18.06.2018 (2, 3, 4, 5, 6, 8, 10, 12, 13, 14), за 28.06.2018 (16)",
            "Нельзя изменить ингредиент ячейки, так как с ней связаны активные задания: задания на кормление за 18.06.2018 (2, 3, 4, 5, 6, 8, 10, 12, 13, 14), за 28.06.2018 (16)",
            "Нельзя изменить ингредиент ячейки, так как с ней связаны активные задания: задания на кормление за 18.06.2018 (2, 4, 6, 10, 12, 13), за 28.06.2018 (16)",
            "Нельзя изменить ингредиент ячейки, так как с ней связаны активные задания: задания на кормление за 18.06.2018 (3, 5)",
            "Нельзя изменить ингредиент ячейки, так как с ней связаны активные задания: задания на кормление за 18.06.2018 (5)",
            "Нельзя изменить ингредиент ячейки, так как с ней связаны активные задания: задания на кормление за 18.06.2018 (8, 14)"
        ]
    },
    "name": "Сено",
    "description": "",
    "ingredientId": 14,
    "amount": 12641,
    "id": 8
}';
        return $storage_json;


    }

    public function getJsonForStorageUnitsCreate() {
        $create_storage_json = '{
        "id": 20,
        "name": "storage in test created",
        "description": "description",
        "ingredientId": 14,
        "amount": 5000
        }';

        return $create_storage_json;

    }

    public function getJsonForStorageUnitsCreated() {
        $created_storage_json = '{
    "ingredient": {
        "id": 14,
        "name": "Сено",
        "type": 3,
        "dryMatter": 0.86,
        "lossType": 0,
        "lossCount": 0,
        "dynamicDryMatter": false,
        "isUnderweight": false,
        "digiStarInterchangeCode": "Seno"
    },
    "blockedActions": {},
    "name": "storage in test created",
    "description": "description",
    "ingredientId": 14,
    "amount": 5000,
    "id": 20
}';

        return $created_storage_json;

    }

    public function getJsonForStorageUnitsUpdate()
    {

        $update_storage_json = '
         {
        "id": 1,
        "name": "Силос updated",
        "description": "update",
        "ingredientId": 10,
        "amount": 7777
         }';

        return $update_storage_json;
    }

    public function getJsonForStorageUnitsUpdated() {

         $updated_storage_json = '{
    "ingredient": {
        "id": 10,
        "name": "Глицерин",
        "type": 1,
        "dryMatter": 1,
        "lossType": 0,
        "lossCount": 0,
        "dynamicDryMatter": false,
        "isUnderweight": false,
        "digiStarInterchangeCode": "Glizer"
    },
    "blockedActions": {
        "RemoveIngredientStorageUnit": [
            "Нельзя удалить ячейку, так как с ней связаны активные задания: задания на кормление за 18.06.2018 (1, 7, 11)",
            "Нельзя удалить ячейку, так как с ней связаны активные задания: задания на кормление за 18.06.2018 (1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14), за 28.06.2018 (16)",
            "Нельзя удалить ячейку, так как с ней связаны активные задания: задания на кормление за 18.06.2018 (1, 2, 4, 6, 10, 12, 13), за 28.06.2018 (16)",
            "Нельзя удалить ячейку, так как с ней связаны активные задания: задания на кормление за 18.06.2018 (1, 2, 3, 4, 5, 6, 8, 9, 10, 11, 12, 13, 14), за 28.06.2018 (16)",
            "Нельзя удалить ячейку, так как с ней связаны активные задания: задания на кормление за 18.06.2018 (1, 2, 3, 4, 6, 8, 10, 12, 13, 14), за 28.06.2018 (16)",
            "Нельзя удалить ячейку, так как с ней связаны активные задания: задания на кормление за 18.06.2018 (1, 2, 4, 6, 8, 9, 10, 12, 13, 14), за 28.06.2018 (16)",
            "Нельзя удалить ячейку, так как с ней связаны активные задания: задания на кормление за 18.06.2018 (1)",
            "Нельзя удалить ячейку, так как с ней связаны активные задания: задания на кормление за 18.06.2018 (1)",
            "Нельзя удалить ячейку, так как с ней связаны активные задания: задания на кормление за 18.06.2018 (1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14), за 28.06.2018 (16)",
            "Нельзя удалить ячейку, так как с ней связаны активные задания: задания на кормление за 18.06.2018 (1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14), за 28.06.2018 (16)",
            "Нельзя удалить ячейку, так как с ней связаны активные задания: задания на кормление за 18.06.2018 (2, 3, 4, 5, 6, 8, 10, 12, 13, 14), за 28.06.2018 (16)",
            "Нельзя удалить ячейку, так как с ней связаны активные задания: задания на кормление за 18.06.2018 (2, 4, 6, 10, 12, 13), за 28.06.2018 (16)",
            "Нельзя удалить ячейку, так как с ней связаны активные задания: задания на кормление за 18.06.2018 (3, 5, 7)",
            "Нельзя удалить ячейку, так как с ней связаны активные задания: задания на кормление за 18.06.2018 (5, 7)",
            "Нельзя удалить ячейку, так как с ней связаны активные задания: задания на кормление за 18.06.2018 (8, 9, 14)",
            "Нельзя удалить ячейку, так как с ней связаны активные задания: задания на кормление за 18.06.2018 (11)"
        ],
        "ChangeIngredientStorageUnit": [
            "Нельзя изменить ингредиент ячейки, так как с ней связаны активные задания: задания на кормление за 18.06.2018 (1, 7, 11)",
            "Нельзя изменить ингредиент ячейки, так как с ней связаны активные задания: задания на кормление за 18.06.2018 (1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14), за 28.06.2018 (16)",
            "Нельзя изменить ингредиент ячейки, так как с ней связаны активные задания: задания на кормление за 18.06.2018 (1, 2, 4, 6, 10, 12, 13), за 28.06.2018 (16)",
            "Нельзя изменить ингредиент ячейки, так как с ней связаны активные задания: задания на кормление за 18.06.2018 (1, 2, 3, 4, 5, 6, 8, 9, 10, 11, 12, 13, 14), за 28.06.2018 (16)",
            "Нельзя изменить ингредиент ячейки, так как с ней связаны активные задания: задания на кормление за 18.06.2018 (1, 2, 3, 4, 6, 8, 10, 12, 13, 14), за 28.06.2018 (16)",
            "Нельзя изменить ингредиент ячейки, так как с ней связаны активные задания: задания на кормление за 18.06.2018 (1, 2, 4, 6, 8, 9, 10, 12, 13, 14), за 28.06.2018 (16)",
            "Нельзя изменить ингредиент ячейки, так как с ней связаны активные задания: задания на кормление за 18.06.2018 (1)",
            "Нельзя изменить ингредиент ячейки, так как с ней связаны активные задания: задания на кормление за 18.06.2018 (1)",
            "Нельзя изменить ингредиент ячейки, так как с ней связаны активные задания: задания на кормление за 18.06.2018 (1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14), за 28.06.2018 (16)",
            "Нельзя изменить ингредиент ячейки, так как с ней связаны активные задания: задания на кормление за 18.06.2018 (1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14), за 28.06.2018 (16)",
            "Нельзя изменить ингредиент ячейки, так как с ней связаны активные задания: задания на кормление за 18.06.2018 (2, 3, 4, 5, 6, 8, 10, 12, 13, 14), за 28.06.2018 (16)",
            "Нельзя изменить ингредиент ячейки, так как с ней связаны активные задания: задания на кормление за 18.06.2018 (2, 4, 6, 10, 12, 13), за 28.06.2018 (16)",
            "Нельзя изменить ингредиент ячейки, так как с ней связаны активные задания: задания на кормление за 18.06.2018 (3, 5, 7)",
            "Нельзя изменить ингредиент ячейки, так как с ней связаны активные задания: задания на кормление за 18.06.2018 (5, 7)",
            "Нельзя изменить ингредиент ячейки, так как с ней связаны активные задания: задания на кормление за 18.06.2018 (8, 9, 14)",
            "Нельзя изменить ингредиент ячейки, так как с ней связаны активные задания: задания на кормление за 18.06.2018 (11)"
        ]
    },
    "name": "Силос updated",
    "description": "update",
    "ingredientId": 10,
    "amount": 7777,
    "id": 1
}';

            return $updated_storage_json;



    }


    public function getCattleHousesSectionsValidListJson()
    {  $chouses_valid_list = '[
    {
        "physiologicalGroups": [
            {
                "name": "Д - 0",
                "physiologicalGroupId": 1,
                "headCount": 62
            }
        ],
        "name": "32",
        "feedingPlanId": 1,
        "appetite": 0.78,
        "ordinalNumber": 2,
        "notCombine": false,
        "mixerId": 2,
        "kind": 0,
        "digiStarInterchangeCode": "32",
        "id": 1
    },
    {
        "physiologicalGroups": [
            {
                "name": "Д - 0",
                "physiologicalGroupId": 1,
                "headCount": 7
            }
        ],
        "name": "15",
        "feedingPlanId": 1,
        "appetite": 0.48,
        "ordinalNumber": 3,
        "notCombine": false,
        "mixerId": 2,
        "kind": 0,
        "digiStarInterchangeCode": "15",
        "id": 3
    },
    {
        "physiologicalGroups": [
            {
                "name": "Д - 1",
                "physiologicalGroupId": 2,
                "headCount": 112
            }
        ],
        "name": "21",
        "feedingPlanId": 10,
        "appetite": 0.93,
        "ordinalNumber": 7,
        "notCombine": false,
        "mixerId": 1,
        "kind": 0,
        "digiStarInterchangeCode": "21",
        "id": 4
    },
    {
        "physiologicalGroups": [
            {
                "name": "Д - 1",
                "physiologicalGroupId": 2,
                "headCount": 113
            }
        ],
        "name": "22",
        "feedingPlanId": 10,
        "appetite": 0.88,
        "ordinalNumber": 8,
        "notCombine": false,
        "mixerId": 1,
        "kind": 0,
        "digiStarInterchangeCode": "22",
        "id": 5
    },
    {
        "physiologicalGroups": [
            {
                "name": "Д - 1",
                "physiologicalGroupId": 2,
                "headCount": 110
            }
        ],
        "name": "23",
        "feedingPlanId": 10,
        "appetite": 0.74,
        "ordinalNumber": 5,
        "notCombine": false,
        "mixerId": 1,
        "kind": 0,
        "digiStarInterchangeCode": "23",
        "id": 6
    },
    {
        "physiologicalGroups": [
            {
                "name": "Д - 1",
                "physiologicalGroupId": 2,
                "headCount": 111
            }
        ],
        "name": "24",
        "feedingPlanId": 10,
        "appetite": 0.79,
        "ordinalNumber": 6,
        "notCombine": false,
        "mixerId": 1,
        "kind": 0,
        "digiStarInterchangeCode": "24",
        "id": 7
    },
    {
        "physiologicalGroups": [
            {
                "name": "Д - 1",
                "physiologicalGroupId": 2,
                "headCount": 35
            }
        ],
        "name": "10",
        "feedingPlanId": 4,
        "appetite": 0.87,
        "ordinalNumber": 12,
        "notCombine": false,
        "mixerId": 1,
        "kind": 0,
        "digiStarInterchangeCode": "10",
        "id": 8
    },
    {
        "physiologicalGroups": [
            {
                "name": "Т 2-6",
                "physiologicalGroupId": 8,
                "headCount": 374
            }
        ],
        "name": "Навес",
        "feedingPlanId": 9,
        "appetite": 1.44,
        "ordinalNumber": 9,
        "notCombine": false,
        "mixerId": 2,
        "kind": 0,
        "digiStarInterchangeCode": "Naves",
        "id": 9
    },
    {
        "physiologicalGroups": [
            {
                "name": "Д - 1",
                "physiologicalGroupId": 2,
                "headCount": 152
            }
        ],
        "name": "43",
        "feedingPlanId": 10,
        "appetite": 0.88,
        "ordinalNumber": 10,
        "notCombine": false,
        "mixerId": 1,
        "kind": 0,
        "digiStarInterchangeCode": "43",
        "id": 11
    },
    {
        "physiologicalGroups": [
            {
                "name": "Д - 1",
                "physiologicalGroupId": 2,
                "headCount": 151
            }
        ],
        "name": "44",
        "feedingPlanId": 10,
        "appetite": 0.97,
        "ordinalNumber": 11,
        "notCombine": false,
        "mixerId": 1,
        "kind": 0,
        "digiStarInterchangeCode": "44",
        "id": 12
    },
    {
        "physiologicalGroups": [
            {
                "name": "Т 6-12",
                "physiologicalGroupId": 9,
                "headCount": 55
            }
        ],
        "name": "64",
        "feedingPlanId": 8,
        "appetite": 0.8,
        "ordinalNumber": 15,
        "notCombine": false,
        "mixerId": 1,
        "kind": 0,
        "digiStarInterchangeCode": "64",
        "id": 15
    },
    {
        "physiologicalGroups": [
            {
                "name": "Д - 1",
                "physiologicalGroupId": 2,
                "headCount": 145
            }
        ],
        "name": "41",
        "feedingPlanId": 10,
        "appetite": 0.81,
        "ordinalNumber": 16,
        "notCombine": false,
        "mixerId": 1,
        "kind": 0,
        "digiStarInterchangeCode": "41",
        "id": 16
    },
    {
        "physiologicalGroups": [
            {
                "name": "Д - 1",
                "physiologicalGroupId": 2,
                "headCount": 144
            }
        ],
        "name": "42",
        "feedingPlanId": 10,
        "appetite": 1.01,
        "ordinalNumber": 17,
        "notCombine": false,
        "mixerId": 1,
        "kind": 0,
        "digiStarInterchangeCode": "42",
        "id": 17
    },
    {
        "physiologicalGroups": [
            {
                "name": "Нетели",
                "physiologicalGroupId": 6,
                "headCount": 15
            },
            {
                "name": "Сух - 1",
                "physiologicalGroupId": 4,
                "headCount": 94
            }
        ],
        "name": "72",
        "feedingPlanId": 5,
        "appetite": 0.97,
        "ordinalNumber": 22,
        "notCombine": false,
        "mixerId": 1,
        "kind": 0,
        "digiStarInterchangeCode": "72",
        "id": 18
    },
    {
        "physiologicalGroups": [
            {
                "name": "Д - 2",
                "physiologicalGroupId": 3,
                "headCount": 154
            }
        ],
        "name": "53",
        "feedingPlanId": 11,
        "appetite": 0.82,
        "ordinalNumber": 20,
        "notCombine": false,
        "mixerId": 1,
        "kind": 0,
        "digiStarInterchangeCode": "53",
        "id": 21
    },
    {
        "physiologicalGroups": [
            {
                "name": "Д - 1",
                "physiologicalGroupId": 2,
                "headCount": 145
            }
        ],
        "name": "54",
        "feedingPlanId": 4,
        "appetite": 0.96,
        "ordinalNumber": 23,
        "notCombine": false,
        "mixerId": 1,
        "kind": 0,
        "digiStarInterchangeCode": "54",
        "id": 22
    },
    {
        "physiologicalGroups": [
            {
                "name": "Д - 3",
                "physiologicalGroupId": 14,
                "headCount": 121
            }
        ],
        "name": "52",
        "feedingPlanId": 22,
        "appetite": 0.82,
        "ordinalNumber": 25,
        "notCombine": false,
        "mixerId": 1,
        "kind": 0,
        "digiStarInterchangeCode": "52",
        "id": 23
    },
    {
        "physiologicalGroups": [
            {
                "name": "Д - 3",
                "physiologicalGroupId": 14,
                "headCount": 105
            }
        ],
        "name": "51",
        "feedingPlanId": 22,
        "appetite": 0.74,
        "ordinalNumber": 24,
        "notCombine": false,
        "mixerId": 1,
        "kind": 0,
        "digiStarInterchangeCode": "51",
        "id": 24
    },
    {
        "physiologicalGroups": [
            {
                "name": "Д - 0",
                "physiologicalGroupId": 1,
                "headCount": 62
            }
        ],
        "name": "31",
        "feedingPlanId": 1,
        "appetite": 0.78,
        "ordinalNumber": 1,
        "notCombine": false,
        "mixerId": 2,
        "kind": 0,
        "digiStarInterchangeCode": "31",
        "id": 26
    },
    {
        "physiologicalGroups": [
            {
                "name": "Д - 1",
                "physiologicalGroupId": 2,
                "headCount": 1
            }
        ],
        "name": "Копытчик",
        "feedingPlanId": 4,
        "appetite": 0.67,
        "ordinalNumber": 4,
        "notCombine": false,
        "mixerId": 1,
        "kind": 0,
        "digiStarInterchangeCode": "Kopit",
        "id": 28
    },
    {
        "physiologicalGroups": [
            {
                "name": "Нетели",
                "physiologicalGroupId": 6,
                "headCount": 27
            },
            {
                "name": "Сух - 2",
                "physiologicalGroupId": 5,
                "headCount": 62
            }
        ],
        "name": "11",
        "feedingPlanId": 6,
        "appetite": 0.95,
        "ordinalNumber": 28,
        "notCombine": false,
        "mixerId": 1,
        "kind": 0,
        "digiStarInterchangeCode": "11",
        "id": 29
    },
    {
        "physiologicalGroups": [
            {
                "name": "Сух - 2",
                "physiologicalGroupId": 5,
                "headCount": 23
            },
            {
                "name": "Нетели",
                "physiologicalGroupId": 6,
                "headCount": 36
            }
        ],
        "name": "16",
        "feedingPlanId": 6,
        "appetite": 0.85,
        "ordinalNumber": 27,
        "notCombine": false,
        "mixerId": 1,
        "kind": 0,
        "digiStarInterchangeCode": "16",
        "id": 30
    },
    {
        "physiologicalGroups": [
            {
                "name": "Нетели",
                "physiologicalGroupId": 6,
                "headCount": 115
            }
        ],
        "name": "71",
        "feedingPlanId": 13,
        "appetite": 0.85,
        "ordinalNumber": 19,
        "notCombine": false,
        "mixerId": 1,
        "kind": 0,
        "digiStarInterchangeCode": "71",
        "id": 33
    },
    {
        "physiologicalGroups": [
            {
                "name": "Сух - 2",
                "physiologicalGroupId": 5,
                "headCount": 18
            },
            {
                "name": "Нетели",
                "physiologicalGroupId": 6,
                "headCount": 27
            }
        ],
        "name": "13",
        "feedingPlanId": 6,
        "appetite": 0.9,
        "ordinalNumber": 26,
        "notCombine": false,
        "mixerId": 1,
        "kind": 0,
        "digiStarInterchangeCode": "13",
        "id": 36
    },
    {
        "physiologicalGroups": [
            {
                "name": "Д - 1",
                "physiologicalGroupId": 2,
                "headCount": 20
            }
        ],
        "name": "12",
        "feedingPlanId": 4,
        "appetite": 0.78,
        "ordinalNumber": 13,
        "notCombine": false,
        "mixerId": 1,
        "kind": 0,
        "digiStarInterchangeCode": "12",
        "id": 39
    },
    {
        "physiologicalGroups": [
            {
                "name": "Сух - 1",
                "physiologicalGroupId": 4,
                "headCount": 109
            },
            {
                "name": "Нетели",
                "physiologicalGroupId": 6,
                "headCount": 1
            }
        ],
        "name": "73",
        "feedingPlanId": 5,
        "appetite": 1.03,
        "ordinalNumber": 21,
        "notCombine": false,
        "mixerId": 1,
        "kind": 0,
        "digiStarInterchangeCode": "73",
        "id": 41
    },
    {
        "physiologicalGroups": [
            {
                "name": "Т 12-18",
                "physiologicalGroupId": 10,
                "headCount": 304
            }
        ],
        "name": "61-63",
        "feedingPlanId": 8,
        "appetite": 0.62,
        "ordinalNumber": 14,
        "notCombine": false,
        "mixerId": 1,
        "kind": 0,
        "digiStarInterchangeCode": "61 63",
        "id": 43
    },
    {
        "physiologicalGroups": [
            {
                "name": "Нетели",
                "physiologicalGroupId": 6,
                "headCount": 111
            }
        ],
        "name": "65",
        "feedingPlanId": 13,
        "appetite": 0.8,
        "ordinalNumber": 18,
        "notCombine": false,
        "mixerId": 1,
        "kind": 0,
        "digiStarInterchangeCode": "65",
        "id": 45
    },
    {
        "physiologicalGroups": [
            {
                "name": "Сух - 2",
                "physiologicalGroupId": 5,
                "headCount": 16
            },
            {
                "name": "Нетели",
                "physiologicalGroupId": 6,
                "headCount": 51
            }
        ],
        "name": "74",
        "feedingPlanId": 6,
        "appetite": 1,
        "ordinalNumber": 29,
        "notCombine": false,
        "mixerId": 1,
        "kind": 0,
        "digiStarInterchangeCode": "74",
        "id": 46
    }
    ]';
        return $chouses_valid_list;


    }

    public function getCattleHousesSectionListJsonById()
    {  $section_json = '
       {
    "physiologicalGroups": [
        {
            "name": "Д - 0",
            "physiologicalGroupId": 1,
            "headCount": 7
        }
    ],
    "name": "15",
    "feedingPlanId": 1,
    "appetite": 0.48,
    "ordinalNumber": 3,
    "notCombine": false,
    "mixerId": 2,
    "kind": 0,
    "digiStarInterchangeCode": "15",
    "id": 3
    }';
        return $section_json;


    }

    public function getJsonForCattleHousesCreate() {
        $create_section_json = '{
    "physiologicalGroups": [
        {
            "name": "Нетели",
            "physiologicalGroupId": 6,
            "headCount": 211
        }
    ],
    "name": "section in test created",
    "feedingPlanId": 13,
    "appetite": 0.8,
    "ordinalNumber": 30,
    "notCombine": false,
    "mixerId": 1,
    "kind": 0,
    "digiStarInterchangeCode": "47",
    "id": 47
}';

        return $create_section_json;

    }

    public function getJsonForCattleHousesUpdate()
    {

        $update_section_json = '{
    "physiologicalGroups": [
        {
            "name": "Нетели",
            "physiologicalGroupId": 6,
            "headCount": 111
        }
    ],
    "name": "65 update",
    "feedingPlanId": 13,
    "appetite": 0.8,
    "ordinalNumber": 18,
    "notCombine": true,
    "mixerId": 2,
    "kind": 1,
    "digiStarInterchangeCode": "65",
    "id": 45
}';

        return $update_section_json;
    }



    public function getCompoundFeedValidListJson()
    {  $chouses_valid_list = '';
        return $chouses_valid_list;


    }

    public function getJsonForCombicormCreate() {
        $create_combicorm_json = '{
      "composition": [
        {
          "ingredientId": 5,
          "ordinalNumber": 1,
          "dryWeight": 0.5,
          "mixingTime": "00:00:00"
        },
        {
          "ingredientId": 6,
          "ordinalNumber": 2,
          "dryWeight": 0.5,
          "mixingTime": "00:00:00"
        }
      ],
      "name": "combicorm",
      "description": "description",
      "density": 600,
      "digiStarInterchangeCode": "12345"
      }';

        return $create_combicorm_json;

    }

    public function getJsonForCombicormCreated() {
            $created_combicorm_json = '{
    "dryMatterProportion": 0.9,
    "composition": [
        {
            "name": "Соя",
            "ingredientId": 5,
            "ordinalNumber": 1,
            "dryWeight": 0.5,
            "mixingTime": "00:00:00"
        },
        {
            "name": "Рапс",
            "ingredientId": 6,
            "ordinalNumber": 2,
            "dryWeight": 0.5,
            "mixingTime": "00:00:00"
        }
    ],
    "blockedActions": {},
    "name": "combicorm",
    "description": "description",
    "density": 600,
    "digiStarInterchangeCode": "12345",
    "id": 18
}';

        return $created_combicorm_json;

    }

    public function getJsonForUpdateIngeredientsOrderInCombicorm() {
        $created_combicorm_json = '{
    "dryMatterProportion": 0.9,
    "composition": [
        {
            "name": "Соя",
            "ingredientId": 5,
            "ordinalNumber": 2,
            "dryWeight": 0.5,
            "mixingTime": "00:20:00"
        },
        {
            "name": "Рапс",
            "ingredientId": 6,
            "ordinalNumber": 1,
            "dryWeight": 0.5,
            "mixingTime": "00:10:00"
        }
    ],
    "blockedActions": {},
    "name": "combicorm updated",
    "description": "description updated",
    "density": 777,
    "digiStarInterchangeCode": "54321",
    "id": 18
}';

        return $created_combicorm_json;

    }

    public function getJsonForCombicormContainsCombicormCreate() {
        $create_combicorm_json = '{
          "composition": [
            {
              "ingredientId": 18,
              "ordinalNumber": 1,
              "dryWeight": 1,
              "mixingTime": "00:01:00"
            }
          ],
        
          "name": "combicorm2",
          "description": "description",
          "density": 1,
          "digiStarInterchangeCode": "c12346"
        }';

        return $create_combicorm_json;

    }



    public function getJsonForCombicormAsIngredient() {
        $cobicorm_ingredient_json = '{
    "stores": [],
    "blockedActions": {
        "ChangeIngredientTypeFromCompoundFeed": [
            "Нельзя изменить тип ингредиента, так как с ним связан рецепт на приготовление корма"
        ]
    },
    "composition": [
        {
            "ingredientId": 5,
            "ordinalNumber": 1,
            "dryWeight": 0.5,
            "weight": 0.555556,
            "mixingTime": "00:00:00"
        },
        {
            "ingredientId": 6,
            "ordinalNumber": 2,
            "dryWeight": 0.5,
            "weight": 0.555556,
            "mixingTime": "00:00:00"
        }
    ],
    "name": "combicorm",
    "description": "description",
    "type": 4,
    "dryMatter": 0.9,
    "lossType": 0,
    "lossCount": 0,
    "price": 0,
    "dynamicDryMatter": false,
    "isUnderweight": false,
    "digiStarInterchangeCode": "12345",
    "id": 18
}';

        return $cobicorm_ingredient_json;

    }

    public function getJsonForCombicormFeedUpdate()
    {

        $update_section_json = '{
        "physiologicalGroups": [
        {
            "name": "Нетели",
            "physiologicalGroupId": 6,
            "headCount": 211
        }
        ],
        "id": 45,
        "name": "65",
        "feedingPlanId": 13,
        "appetite": 0.8,
        "ordinalNumber": 18,
        "notCombine": false,
        "mixerId": 1,
        "digiStarInterchangeCode": "65"
        }';

        return $update_section_json;
    }



    public function getPhysiologicalGroupValidListJson()
    {  $phys_groups_valid_list = '[
    {
        "sections": [],
        "name": "Д - 0",
        "id": 1
    },
    {
        "sections": [],
        "name": "Д - 1",
        "id": 2
    },
    {
        "sections": [],
        "name": "Д - 2",
        "id": 3
    },
    {
        "sections": [],
        "name": "Сух - 1",
        "id": 4
    },
    {
        "sections": [],
        "name": "Сух - 2",
        "id": 5
    },
    {
        "sections": [],
        "name": "Нетели",
        "id": 6
    },
    {
        "sections": [],
        "name": "Т 0-2",
        "id": 7
    },
    {
        "sections": [],
        "name": "Т 2-6",
        "id": 8
    },
    {
        "sections": [],
        "name": "Т 6-12",
        "id": 9
    },
    {
        "sections": [],
        "name": "Т 12-18",
        "id": 10
    },
    {
        "sections": [],
        "name": "Т ст 18",
        "id": 11
    },
    {
        "sections": [],
        "name": "Б 0-2",
        "id": 12
    },
    {
        "sections": [],
        "name": "Д - 3",
        "id": 14
    }
]';
        return $phys_groups_valid_list;


    }

    public function getPhysiologicalGroupJsonById()
    {  $group_json = '{
        "sections": [],
        "name": "Сух - 1",
        "description": "",
        "id": 4
    }';
        return $group_json;


    }

    public function getJsonForPhysiologicalGroupsCreate() {
        $create_group_json = '{
    "sections": [],
    "name": "in test created group",
    "description": "345",
    "id": 16
}';

        return $create_group_json;

    }

    public function getJsonForPhysiologicalGroupUpdate()
    {

        $update_group_json = '{
    "sections": [],
    "name": "Т 12-18 updated",
    "description": "description",
    "id": 10
}';

        return $update_group_json;
    }


    public function getOperatorsListJson()
    {  $phys_operators_valid_list = '';
        return $phys_operators_valid_list;


    }

    public function getOperatorsJsonById()
    {  $operator_json = '';
        return $operator_json;


    }

    public function getJsonForOpertorsCreate() {
        $create_operators_json = '';

        return $create_operators_json;

    }

    public function getJsonForOperatorsUpdate()
    {

        $update_operators_json = '';

        return $update_operators_json;
    }


    public function getSectionsAppetiteHistoryListArray() {
        // поскольку история аппетита возвращается всегда за последние 6 дней,
        // формируем массив, содержащий последние даты
        // текущая
        $date0 = date('Y-m-d');
        // предыдущая
        $date1 = new DateTime('-1 days');
        // приводим к формату строки, иначе в массив не положить
        $date1 = date_format($date1, 'Y-m-d');
        $date2 = new DateTime('-2 days');
        $date2 = date_format($date2, 'Y-m-d');
        $date3 = new DateTime('-3 days');
        $date3 = date_format($date3, 'Y-m-d');
        $date4 = new DateTime('-4 days');
        $date4 = date_format($date4, 'Y-m-d');
        $date5 = new DateTime('-5 days');
        $date5 = date_format($date5, 'Y-m-d');
        $date6 = new DateTime('-6 days');
        $date6 = date_format($date6, 'Y-m-d');

        $array_date = array(
            $date6  => null,
            $date5 => null,
            $date4 => null,
            $date3 => null,
            $date2 => null,
            $date1 => null,
            $date0 => null
        );

        $appetite_history = array(
    array(
        "id" => 1,
        "name" => "32",
        "appetite" => 0.78,
        "appetiteHistory" => $array_date
    ),
    array(
        "id" => 3,
        "name" => "15",
        "appetite" => 0.48,
        "appetiteHistory" => $array_date
    ),
    array(
        "id" => 4,
        "name" => "21",
        "appetite" => 0.93,
        "appetiteHistory" => $array_date
    ),
    array(
        "id" => 5,
        "name" => "22",
        "appetite" => 0.88,
        "appetiteHistory" => $array_date
    ),
    array(
        "id" => 6,
        "name" => "23",
        "appetite" => 0.74,
        "appetiteHistory" => $array_date
    ),
    array(
        "id" => 7,
        "name" => "24",
        "appetite" => 0.79,
        "appetiteHistory" => $array_date
    ),
    array(
        "id" => 8,
        "name" => "10",
        "appetite" => 0.87,
        "appetiteHistory" => $array_date
    ),
    array(
        "id" => 9,
        "name" => "Навес",
        "appetite" => 1.44,
        "appetiteHistory" => $array_date
    ),
    array(
        "id" => 11,
        "name" => "43",
        "appetite" => 0.88,
        "appetiteHistory" => $array_date
    ),
    array(
        "id" => 12,
        "name" => "44",
        "appetite" => 0.97,
        "appetiteHistory" => $array_date
    ),
    array(
        "id" => 15,
        "name" => "64",
        "appetite" => 0.8,
        "appetiteHistory" => $array_date
    ),
    array(
        "id" => 16,
        "name" => "41",
        "appetite" => 0.81,
        "appetiteHistory" => $array_date
    ),
    array(
        "id" => 17,
        "name" => "42",
        "appetite" => 1.01,
        "appetiteHistory" => $array_date
    ),
    array(
        "id" => 18,
        "name" => "72",
        "appetite" => 0.97,
        "appetiteHistory" => $array_date
    ),
    array(
        "id" => 21,
        "name" => "53",
        "appetite" => 0.82,
        "appetiteHistory" => $array_date
    ),
    array(
        "id" => 22,
        "name" => "54",
        "appetite" => 0.96,
        "appetiteHistory" => $array_date
    ),
    array(
        "id" => 23,
        "name" => "52",
        "appetite" => 0.82,
        "appetiteHistory" => $array_date
    ),
    array(
        "id" => 24,
        "name" => "51",
        "appetite" => 0.74,
        "appetiteHistory" => $array_date
    ),
    array(
        "id" => 26,
        "name" => "31",
        "appetite" => 0.78,
        "appetiteHistory" => $array_date
    ),
    array(
        "id" => 28,
        "name" => "Копытчик",
        "appetite" => 0.67,
        "appetiteHistory" => $array_date
    ),
    array(
        "id" => 29,
        "name" => "11",
        "appetite" => 0.95,
        "appetiteHistory" => $array_date
    ),
    array(
        "id" => 30,
        "name" => "16",
        "appetite" => 0.85,
        "appetiteHistory" => $array_date
    ),
    array(
        "id" => 33,
        "name" => "71",
        "appetite" => 0.85,
        "appetiteHistory" => $array_date
    ),
    array(
        "id" => 36,
        "name" => "13",
        "appetite" => 0.9,
        "appetiteHistory" => $array_date
    ),
    array(
        "id" => 39,
        "name" => "12",
        "appetite" => 0.78,
        "appetiteHistory" => $array_date
    ),
    array(
        "id" => 41,
        "name" => "73",
        "appetite" => 1.03,
        "appetiteHistory" => $array_date
    ),
    array(
        "id" => 43,
        "name" => "61-63",
        "appetite" => 0.62,
        "appetiteHistory" => $array_date
    ),
    array(
        "id" => 45,
        "name" => "65",
        "appetite" => 0.8,
        "appetiteHistory" => $array_date
    ),
    array(
        "id" => 46,
        "name" => "74",
        "appetite" => 1,
        "appetiteHistory" => $array_date
    )
);



      return $appetite_history;

    }
    public function getIngredientsHistoryListArray() {
       $ingr_array =
           array(
               array(
                   array(
                       "id" => 1,
                       "name" => "Солома пшеничная",
                       "type" => 3,
                       "dryMatter" => 0.86,
                       "lossType" => 0,
                       "lossCount" => 0,
                       "dynamicDryMatter" => false,
                       "isUnderweight" => false,
                       "digiStarInterchangeCode" => "SolPsh",
                       "created" => "2018-10-22T14:39:29.6962862+03:00"
                   )
               ),
            array(
                array(
                    "id" => 2,
                    "name" => "Комбикорм № 20",
                    "type" => 1,
                    "dryMatter" => 0.88,
                    "lossType" => 0,
                    "lossCount" => 0,
                    "dynamicDryMatter" => false,
                    "isUnderweight" => false,
                    "digiStarInterchangeCode" => "Kom 20",
                    "created" => "2018-10-22T14:39:29.3779298+03:00"
                )
            ),

            array(
                array(
                    "id" => 3,
                    "name" => "Комбикорм № 11",
                    "type" => 1,
                    "dryMatter" => 0.89,
                    "lossType" => 0,
                    "lossCount" => 0,
                    "dynamicDryMatter" => false,
                    "isUnderweight" => false,
                    "digiStarInterchangeCode" => "Kom 11",
                    "created" => "2018-10-22T14:39:29.0172083+03:00"
                )
            ),
            array(
                array(
                    "id" => 4,
                    "name" => "Барда сухая",
                    "type" => 1,
                    "dryMatter" => 0.9,
                    "lossType" => 0,
                    "lossCount" => 0,
                    "dynamicDryMatter" => false,
                    "isUnderweight" => false,
                    "digiStarInterchangeCode" => "Barda",
                    "created" => "2018-10-22T14:39:28.8444475+03:00"
                )
            ),

            array(
                array(
                    "id" => 5,
                    "name" => "Соя",
                    "type" => 1,
                    "dryMatter" => 0.9,
                    "lossType" => 0,
                    "lossCount" => 0,
                    "dynamicDryMatter" => false,
                    "isUnderweight" => false,
                    "digiStarInterchangeCode" => "Soya",
                    "created" => "2018-10-22T14:39:28.6317568+03:00"
                )
            ));

        return $ingr_array;

    }


    public function getLeftowersListJson() {
        $leftowers_json = '[
    {
        "section": {
            "id": 1,
            "name": "32"
        },
        "sectionId": 1,
        "weight": 212,
        "weightProportion": 0.1,
        "accumulationStartDate": "2019-01-29T00:00:00+03:00",
        "evaluationDate": "2019-01-29T23:00:00+03:00",
        "autoFormed": false,
        "id": 1
    },
    {
        "section": {
            "id": 3,
            "name": "15"
        },
        "sectionId": 3,
        "weight": 37,
        "weightProportion": 0.25,
        "accumulationStartDate": "2019-01-29T00:00:00+03:00",
        "evaluationDate": "2019-01-29T23:00:00+03:00",
        "autoFormed": false,
        "id": 2
    },
    {
        "section": {
            "id": 4,
            "name": "21"
        },
        "sectionId": 4,
        "weight": 1627,
        "weightProportion": 0.3,
        "accumulationStartDate": "2019-01-29T00:00:00+03:00",
        "evaluationDate": "2019-01-29T23:00:00+03:00",
        "autoFormed": false,
        "id": 3
    },
    {
        "section": {
            "id": 5,
            "name": "22"
        },
        "sectionId": 5,
        "weight": 777,
        "weightProportion": 0.15,
        "accumulationStartDate": "2019-01-29T00:00:00+03:00",
        "evaluationDate": "2019-01-29T23:00:00+03:00",
        "autoFormed": false,
        "id": 4
    },
    {
        "section": {
            "id": 6,
            "name": "23"
        },
        "sectionId": 6,
        "weight": 350,
        "weightProportion": 0.0825,
        "accumulationStartDate": "2019-01-29T00:00:00+03:00",
        "evaluationDate": "2019-01-29T23:00:00+03:00",
        "autoFormed": false,
        "id": 5
    },
    {
        "section": {
            "id": 7,
            "name": "24"
        },
        "sectionId": 7,
        "weight": 548,
        "weightProportion": 0.12,
        "accumulationStartDate": "2019-01-29T00:00:00+03:00",
        "evaluationDate": "2019-01-29T23:00:00+03:00",
        "autoFormed": false,
        "id": 6
    },
    {
        "section": {
            "id": 8,
            "name": "10"
        },
        "sectionId": 8,
        "weight": 872,
        "weightProportion": 0.55,
        "accumulationStartDate": "2019-01-29T00:00:00+03:00",
        "evaluationDate": "2019-01-29T23:00:00+03:00",
        "autoFormed": false,
        "id": 7
    },
    {
        "section": {
            "id": 9,
            "name": "Навес"
        },
        "sectionId": 9,
        "weight": 194,
        "weightProportion": 0.05,
        "accumulationStartDate": "2019-01-29T00:00:00+03:00",
        "evaluationDate": "2019-01-29T23:00:00+03:00",
        "autoFormed": false,
        "id": 8
    },
    {
        "section": {
            "id": 11,
            "name": "43"
        },
        "sectionId": 11,
        "weight": 209,
        "weightProportion": 0.03,
        "accumulationStartDate": "2019-01-29T00:00:00+03:00",
        "evaluationDate": "2019-01-29T23:00:00+03:00",
        "autoFormed": false,
        "id": 9
    },
    {
        "section": {
            "id": 12,
            "name": "44"
        },
        "sectionId": 12,
        "weight": 153,
        "weightProportion": 0.02,
        "accumulationStartDate": "2019-01-29T00:00:00+03:00",
        "evaluationDate": "2019-01-29T23:00:00+03:00",
        "autoFormed": false,
        "id": 10
    },
    {
        "section": {
            "id": 15,
            "name": "64"
        },
        "sectionId": 15,
        "weight": 1,
        "weightProportion": 0.0014000000000000002,
        "accumulationStartDate": "2019-01-29T00:00:00+03:00",
        "evaluationDate": "2019-01-29T23:00:00+03:00",
        "autoFormed": false,
        "id": 11
    },
    {
        "section": {
            "id": 16,
            "name": "41"
        },
        "sectionId": 16,
        "weight": 4,
        "weightProportion": 0.0007000000000000001,
        "accumulationStartDate": "2019-01-29T00:00:00+03:00",
        "evaluationDate": "2019-01-29T23:00:00+03:00",
        "autoFormed": false,
        "id": 12
    },
    {
        "section": {
            "id": 17,
            "name": "42"
        },
        "sectionId": 17,
        "weight": 3787,
        "weightProportion": 0.5,
        "accumulationStartDate": "2019-01-29T00:00:00+03:00",
        "evaluationDate": "2019-01-29T23:00:00+03:00",
        "autoFormed": false,
        "id": 13
    },
    {
        "section": {
            "id": 18,
            "name": "72"
        },
        "sectionId": 18,
        "weight": 22,
        "weightProportion": 0.006500000000000001,
        "accumulationStartDate": "2019-01-29T00:00:00+03:00",
        "evaluationDate": "2019-01-29T23:00:00+03:00",
        "autoFormed": false,
        "id": 14
    },
    {
        "section": {
            "id": 21,
            "name": "53"
        },
        "sectionId": 21,
        "weight": 202,
        "weightProportion": 0.03,
        "accumulationStartDate": "2019-01-29T00:00:00+03:00",
        "evaluationDate": "2019-01-29T23:00:00+03:00",
        "autoFormed": false,
        "id": 15
    },
    {
        "section": {
            "id": 22,
            "name": "54"
        },
        "sectionId": 22,
        "weight": 943,
        "weightProportion": 0.13,
        "accumulationStartDate": "2019-01-29T00:00:00+03:00",
        "evaluationDate": "2019-01-29T23:00:00+03:00",
        "autoFormed": false,
        "id": 16
    },
    {
        "section": {
            "id": 23,
            "name": "52"
        },
        "sectionId": 23,
        "weight": 521,
        "weightProportion": 0.1,
        "accumulationStartDate": "2019-01-29T00:00:00+03:00",
        "evaluationDate": "2019-01-29T23:00:00+03:00",
        "autoFormed": false,
        "id": 17
    },
    {
        "section": {
            "id": 24,
            "name": "51"
        },
        "sectionId": 24,
        "weight": 82,
        "weightProportion": 0.02,
        "accumulationStartDate": "2019-01-29T00:00:00+03:00",
        "evaluationDate": "2019-01-29T23:00:00+03:00",
        "autoFormed": false,
        "id": 18
    },
    {
        "section": {
            "id": 26,
            "name": "31"
        },
        "sectionId": 26,
        "weight": 100,
        "weightProportion": 0.0472,
        "accumulationStartDate": "2019-01-29T00:00:00+03:00",
        "evaluationDate": "2019-01-29T23:00:00+03:00",
        "autoFormed": false,
        "id": 19
    },
    {
        "section": {
            "id": 28,
            "name": "Копытчик"
        },
        "sectionId": 28,
        "weight": 1,
        "weightProportion": 0.0286,
        "accumulationStartDate": "2019-01-29T00:00:00+03:00",
        "evaluationDate": "2019-01-29T23:00:00+03:00",
        "autoFormed": false,
        "id": 20
    },
    {
        "section": {
            "id": 29,
            "name": "11"
        },
        "sectionId": 29,
        "weight": 22,
        "weightProportion": 0.0085,
        "accumulationStartDate": "2019-01-29T00:00:00+03:00",
        "evaluationDate": "2019-01-29T23:00:00+03:00",
        "autoFormed": false,
        "id": 21
    },
    {
        "section": {
            "id": 30,
            "name": "16"
        },
        "sectionId": 30,
        "weight": 339,
        "weightProportion": 0.22,
        "accumulationStartDate": "2019-01-29T00:00:00+03:00",
        "evaluationDate": "2019-01-29T23:00:00+03:00",
        "autoFormed": false,
        "id": 22
    },
    {
        "section": {
            "id": 33,
            "name": "71"
        },
        "sectionId": 33,
        "weight": 265,
        "weightProportion": 0.09,
        "accumulationStartDate": "2019-01-29T00:00:00+03:00",
        "evaluationDate": "2019-01-29T23:00:00+03:00",
        "autoFormed": false,
        "id": 23
    },
    {
        "section": {
            "id": 36,
            "name": "13"
        },
        "sectionId": 36,
        "weight": 236,
        "weightProportion": 0.19,
        "accumulationStartDate": "2019-01-29T00:00:00+03:00",
        "evaluationDate": "2019-01-29T23:00:00+03:00",
        "autoFormed": false,
        "id": 24
    },
    {
        "section": {
            "id": 39,
            "name": "12"
        },
        "sectionId": 39,
        "weight": 41,
        "weightProportion": 0.05,
        "accumulationStartDate": "2019-01-29T00:00:00+03:00",
        "evaluationDate": "2019-01-29T23:00:00+03:00",
        "autoFormed": false,
        "id": 25
    },
    {
        "section": {
            "id": 41,
            "name": "73"
        },
        "sectionId": 41,
        "weight": 11,
        "weightProportion": 0.003,
        "accumulationStartDate": "2019-01-29T00:00:00+03:00",
        "evaluationDate": "2019-01-29T23:00:00+03:00",
        "autoFormed": false,
        "id": 26
    },
    {
        "section": {
            "id": 43,
            "name": "61-63"
        },
        "sectionId": 43,
        "weight": 5,
        "weightProportion": 0.0016,
        "accumulationStartDate": "2019-01-29T00:00:00+03:00",
        "evaluationDate": "2019-01-29T23:00:00+03:00",
        "autoFormed": false,
        "id": 27
    },
    {
        "section": {
            "id": 45,
            "name": "65"
        },
        "sectionId": 45,
        "weight": 33,
        "weightProportion": 0.0123,
        "accumulationStartDate": "2019-01-29T00:00:00+03:00",
        "evaluationDate": "2019-01-29T23:00:00+03:00",
        "autoFormed": false,
        "id": 28
    },
    {
        "section": {
            "id": 46,
            "name": "74"
        },
        "sectionId": 46,
        "weight": 2035,
        "weightProportion": 0.99,
        "accumulationStartDate": "2019-01-29T00:00:00+03:00",
        "evaluationDate": "2019-01-29T23:00:00+03:00",
        "autoFormed": false,
        "id": 29
    },
    {
        "section": {
            "id": 47,
            "name": "77"
        },
        "sectionId": 47,
        "weight": 3,
        "weightProportion": 0.0023,
        "accumulationStartDate": "2019-01-29T00:00:00+03:00",
        "evaluationDate": "2019-01-29T23:00:00+03:00",
        "autoFormed": false,
        "id": 30
    }
]'
          ;

        return $leftowers_json;

    }


    public function getClonedLeftowersListJson() {
        $leftowers_json = '[
    {
        "section": {
            "id": 1,
            "name": "32"
        },
        "sectionId": 1,
        "weight": 212,
        "weightProportion": 0.1,
        "accumulationStartDate": "2019-01-29T21:00:00+00:00",
        "evaluationDate": "2019-01-30T20:00:00+00:00",
        "autoFormed": true,
        "id": 31
    },
    {
        "section": {
            "id": 3,
            "name": "15"
        },
        "sectionId": 3,
        "weight": 37,
        "weightProportion": 0.25,
        "accumulationStartDate": "2019-01-29T21:00:00+00:00",
        "evaluationDate": "2019-01-30T20:00:00+00:00",
        "autoFormed": true,
        "id": 58
    },
    {
        "section": {
            "id": 4,
            "name": "21"
        },
        "sectionId": 4,
        "weight": 1627,
        "weightProportion": 0.3,
        "accumulationStartDate": "2019-01-29T21:00:00+00:00",
        "evaluationDate": "2019-01-30T20:00:00+00:00",
        "autoFormed": true,
        "id": 57
    },
    {
        "section": {
            "id": 5,
            "name": "22"
        },
        "sectionId": 5,
        "weight": 777,
        "weightProportion": 0.15,
        "accumulationStartDate": "2019-01-29T21:00:00+00:00",
        "evaluationDate": "2019-01-30T20:00:00+00:00",
        "autoFormed": true,
        "id": 56
    },
    {
        "section": {
            "id": 6,
            "name": "23"
        },
        "sectionId": 6,
        "weight": 350,
        "weightProportion": 0.0825,
        "accumulationStartDate": "2019-01-29T21:00:00+00:00",
        "evaluationDate": "2019-01-30T20:00:00+00:00",
        "autoFormed": true,
        "id": 55
    },
    {
        "section": {
            "id": 7,
            "name": "24"
        },
        "sectionId": 7,
        "weight": 548,
        "weightProportion": 0.12,
        "accumulationStartDate": "2019-01-29T21:00:00+00:00",
        "evaluationDate": "2019-01-30T20:00:00+00:00",
        "autoFormed": true,
        "id": 54
    },
    {
        "section": {
            "id": 8,
            "name": "10"
        },
        "sectionId": 8,
        "weight": 872,
        "weightProportion": 0.55,
        "accumulationStartDate": "2019-01-29T21:00:00+00:00",
        "evaluationDate": "2019-01-30T20:00:00+00:00",
        "autoFormed": true,
        "id": 53
    },
    {
        "section": {
            "id": 9,
            "name": "Навес"
        },
        "sectionId": 9,
        "weight": 194,
        "weightProportion": 0.05,
        "accumulationStartDate": "2019-01-29T21:00:00+00:00",
        "evaluationDate": "2019-01-30T20:00:00+00:00",
        "autoFormed": true,
        "id": 52
    },
    {
        "section": {
            "id": 11,
            "name": "43"
        },
        "sectionId": 11,
        "weight": 209,
        "weightProportion": 0.03,
        "accumulationStartDate": "2019-01-29T21:00:00+00:00",
        "evaluationDate": "2019-01-30T20:00:00+00:00",
        "autoFormed": true,
        "id": 51
    },
    {
        "section": {
            "id": 12,
            "name": "44"
        },
        "sectionId": 12,
        "weight": 153,
        "weightProportion": 0.02,
        "accumulationStartDate": "2019-01-29T21:00:00+00:00",
        "evaluationDate": "2019-01-30T20:00:00+00:00",
        "autoFormed": true,
        "id": 50
    },
    {
        "section": {
            "id": 15,
            "name": "64"
        },
        "sectionId": 15,
        "weight": 1,
        "weightProportion": 0.0014000000000000002,
        "accumulationStartDate": "2019-01-29T21:00:00+00:00",
        "evaluationDate": "2019-01-30T20:00:00+00:00",
        "autoFormed": true,
        "id": 49
    },
    {
        "section": {
            "id": 16,
            "name": "41"
        },
        "sectionId": 16,
        "weight": 4,
        "weightProportion": 0.0007000000000000001,
        "accumulationStartDate": "2019-01-29T21:00:00+00:00",
        "evaluationDate": "2019-01-30T20:00:00+00:00",
        "autoFormed": true,
        "id": 48
    },
    {
        "section": {
            "id": 17,
            "name": "42"
        },
        "sectionId": 17,
        "weight": 3787,
        "weightProportion": 0.5,
        "accumulationStartDate": "2019-01-29T21:00:00+00:00",
        "evaluationDate": "2019-01-30T20:00:00+00:00",
        "autoFormed": true,
        "id": 47
    },
    {
        "section": {
            "id": 18,
            "name": "72"
        },
        "sectionId": 18,
        "weight": 22,
        "weightProportion": 0.006500000000000001,
        "accumulationStartDate": "2019-01-29T21:00:00+00:00",
        "evaluationDate": "2019-01-30T20:00:00+00:00",
        "autoFormed": true,
        "id": 46
    },
    {
        "section": {
            "id": 21,
            "name": "53"
        },
        "sectionId": 21,
        "weight": 202,
        "weightProportion": 0.03,
        "accumulationStartDate": "2019-01-29T21:00:00+00:00",
        "evaluationDate": "2019-01-30T20:00:00+00:00",
        "autoFormed": true,
        "id": 45
    },
    {
        "section": {
            "id": 22,
            "name": "54"
        },
        "sectionId": 22,
        "weight": 942,
        "weightProportion": 0.13,
        "accumulationStartDate": "2019-01-29T21:00:00+00:00",
        "evaluationDate": "2019-01-30T20:00:00+00:00",
        "autoFormed": true,
        "id": 44
    },
    {
        "section": {
            "id": 23,
            "name": "52"
        },
        "sectionId": 23,
        "weight": 521,
        "weightProportion": 0.1,
        "accumulationStartDate": "2019-01-29T21:00:00+00:00",
        "evaluationDate": "2019-01-30T20:00:00+00:00",
        "autoFormed": true,
        "id": 43
    },
    {
        "section": {
            "id": 24,
            "name": "51"
        },
        "sectionId": 24,
        "weight": 82,
        "weightProportion": 0.02,
        "accumulationStartDate": "2019-01-29T21:00:00+00:00",
        "evaluationDate": "2019-01-30T20:00:00+00:00",
        "autoFormed": true,
        "id": 42
    },
    {
        "section": {
            "id": 26,
            "name": "31"
        },
        "sectionId": 26,
        "weight": 100,
        "weightProportion": 0.0472,
        "accumulationStartDate": "2019-01-29T21:00:00+00:00",
        "evaluationDate": "2019-01-30T20:00:00+00:00",
        "autoFormed": true,
        "id": 41
    },
    {
        "section": {
            "id": 28,
            "name": "Копытчик"
        },
        "sectionId": 28,
        "weight": 1,
        "weightProportion": 0.0286,
        "accumulationStartDate": "2019-01-29T21:00:00+00:00",
        "evaluationDate": "2019-01-30T20:00:00+00:00",
        "autoFormed": true,
        "id": 40
    },
    {
        "section": {
            "id": 29,
            "name": "11"
        },
        "sectionId": 29,
        "weight": 22,
        "weightProportion": 0.0085,
        "accumulationStartDate": "2019-01-29T21:00:00+00:00",
        "evaluationDate": "2019-01-30T20:00:00+00:00",
        "autoFormed": true,
        "id": 39
    },
    {
        "section": {
            "id": 30,
            "name": "16"
        },
        "sectionId": 30,
        "weight": 339,
        "weightProportion": 0.22,
        "accumulationStartDate": "2019-01-29T21:00:00+00:00",
        "evaluationDate": "2019-01-30T20:00:00+00:00",
        "autoFormed": true,
        "id": 38
    },
    {
        "section": {
            "id": 33,
            "name": "71"
        },
        "sectionId": 33,
        "weight": 265,
        "weightProportion": 0.09,
        "accumulationStartDate": "2019-01-29T21:00:00+00:00",
        "evaluationDate": "2019-01-30T20:00:00+00:00",
        "autoFormed": true,
        "id": 37
    },
    {
        "section": {
            "id": 36,
            "name": "13"
        },
        "sectionId": 36,
        "weight": 236,
        "weightProportion": 0.19,
        "accumulationStartDate": "2019-01-29T21:00:00+00:00",
        "evaluationDate": "2019-01-30T20:00:00+00:00",
        "autoFormed": true,
        "id": 36
    },
    {
        "section": {
            "id": 39,
            "name": "12"
        },
        "sectionId": 39,
        "weight": 41,
        "weightProportion": 0.05,
        "accumulationStartDate": "2019-01-29T21:00:00+00:00",
        "evaluationDate": "2019-01-30T20:00:00+00:00",
        "autoFormed": true,
        "id": 35
    },
    {
        "section": {
            "id": 41,
            "name": "73"
        },
        "sectionId": 41,
        "weight": 11,
        "weightProportion": 0.003,
        "accumulationStartDate": "2019-01-29T21:00:00+00:00",
        "evaluationDate": "2019-01-30T20:00:00+00:00",
        "autoFormed": true,
        "id": 34
    },
    {
        "section": {
            "id": 43,
            "name": "61-63"
        },
        "sectionId": 43,
        "weight": 5,
        "weightProportion": 0.0016,
        "accumulationStartDate": "2019-01-29T21:00:00+00:00",
        "evaluationDate": "2019-01-30T20:00:00+00:00",
        "autoFormed": true,
        "id": 33
    },
    {
        "section": {
            "id": 45,
            "name": "65"
        },
        "sectionId": 45,
        "weight": 33,
        "weightProportion": 0.0123,
        "accumulationStartDate": "2019-01-29T21:00:00+00:00",
        "evaluationDate": "2019-01-30T20:00:00+00:00",
        "autoFormed": true,
        "id": 32
    },
    {
        "section": {
            "id": 46,
            "name": "74"
        },
        "sectionId": 46,
        "weight": 2035,
        "weightProportion": 0.99,
        "accumulationStartDate": "2019-01-29T21:00:00+00:00",
        "evaluationDate": "2019-01-30T20:00:00+00:00",
        "autoFormed": true,
        "id": 59
    },
    {
        "section": {
            "id": 47,
            "name": "77"
        },
        "sectionId": 47,
        "weight": 3,
        "weightProportion": 0.0023,
        "accumulationStartDate": "2019-01-29T21:00:00+00:00",
        "evaluationDate": "2019-01-30T20:00:00+00:00",
        "autoFormed": true,
        "id": 60
    }
]'
        ;

        return $leftowers_json;

    }




    public function getCombiTasksNewListJson() {
        $combi_tasks_json = '[
    {
        "dailyNumber": 1,
        "ingredientLoadings": [
            {
                "ingredientStorageUnitId": 4,
                "ingredientStorageUnit": {
                    "name": "Сенаж 17",
                    "description": "",
                    "weight": 590930,
                    "id": 4
                },
                "ingredientId": 11,
                "ingredient": {
                    "name": "Сенаж ",
                    "type": 3,
                    "dryMatterProportion": 0.4,
                    "digiStarInterchangeCode": "Senazh",
                    "isUnderweight": false,
                    "id": 11
                },
                "targetOrdinalNumber": 1,
                "targetWeight": 88,
                "targetDryWeight": 36,
                "targetMixingTime": "00:00:00",
                "loadingStatus": 0,
                "ptoRotationStatus": 0
            },
            {
                "ingredientStorageUnitId": 14,
                "ingredientStorageUnit": {
                    "name": "Барда сухая",
                    "description": "",
                    "weight": 4000,
                    "id": 14
                },
                "ingredientId": 4,
                "ingredient": {
                    "name": "Барда сухая",
                    "type": 1,
                    "dryMatterProportion": 0.9,
                    "digiStarInterchangeCode": "Barda",
                    "isUnderweight": false,
                    "id": 4
                },
                "targetOrdinalNumber": 2,
                "targetWeight": 56,
                "targetDryWeight": 51,
                "targetMixingTime": "00:00:00",
                "loadingStatus": 0,
                "ptoRotationStatus": 0
            },
            {
                "ingredientStorageUnitId": 8,
                "ingredientStorageUnit": {
                    "name": "Сено",
                    "description": "",
                    "weight": 119286,
                    "id": 8
                },
                "ingredientId": 14,
                "ingredient": {
                    "name": "Сено",
                    "type": 3,
                    "dryMatterProportion": 0.86,
                    "digiStarInterchangeCode": "Seno",
                    "isUnderweight": false,
                    "id": 14
                },
                "targetOrdinalNumber": 3,
                "targetWeight": 18,
                "targetDryWeight": 16,
                "targetMixingTime": "00:00:00",
                "loadingStatus": 0,
                "ptoRotationStatus": 0
            }
        ],
        "compoundFeedUnloading": {
            "ingredientStorageUnitId": 18,
            "ingredientStorageUnit": {
                "name": "Комбикорм КК-63",
                "description": "",
                "weight": 2998876,
                "id": 18
            },
            "targetDryWeight": 101,
            "targetWeight": 162,
            "actualDryMatterProportion": 1,
            "unloadingStatus": 0
        },
        "type": 1,
        "compoundFeed": {
            "id": 18,
            "name": "Комбикорм КК-63",
            "density": 600,
            "digiStarInterchangeCode": "komb63",
            "dryMatterProportion": 0.62305,
            "composition": [
                {
                    "name": "Сенаж ",
                    "ingredientId": 11,
                    "ordinalNumber": 1,
                    "dryWeight": 0.35,
                    "mixingTime": "00:00:00"
                },
                {
                    "name": "Барда сухая",
                    "ingredientId": 4,
                    "ordinalNumber": 2,
                    "dryWeight": 0.5,
                    "mixingTime": "00:00:00"
                },
                {
                    "name": "Сено",
                    "ingredientId": 14,
                    "ordinalNumber": 3,
                    "dryWeight": 0.15,
                    "mixingTime": "00:00:00"
                }
            ]
        },
        "mixer": {
            "id": 2,
            "name": "15",
            "description": "",
            "volume": 15
        },
        "status": 0,
        "executionDate": "2019-01-30",
        "id": 1
    }
    ]'
        ;

        return $combi_tasks_json;

    }






    public function getTasksListString() {
        $feeding_tasks = '[
    {
        "sections": [
            {
                "sectionId": 28,
                "weight": 35,
                "actualWeight": 0,
                "section": {
                    "id": 28,
                    "name": "Копытчик",
                    "feedingPlanId": 4,
                    "feedingPlan": {
                        "id": 4,
                        "name": "Д - 1 100%",
                        "rationId": 2,
                        "ration": {
                            "id": 2,
                            "name": "Д - 1",
                            "ingredients": [
                                {
                                    "ingredientId": 1,
                                    "dryWeight": 0.7,
                                    "ordinalNumber": 0,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 14,
                                    "dryWeight": 1,
                                    "ordinalNumber": 1,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 2,
                                    "dryWeight": 7.2,
                                    "ordinalNumber": 2,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 3,
                                    "dryWeight": 4,
                                    "ordinalNumber": 3,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 5,
                                    "dryWeight": 1.8,
                                    "ordinalNumber": 4,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 6,
                                    "dryWeight": 0.8,
                                    "ordinalNumber": 5,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 11,
                                    "dryWeight": 3.35,
                                    "ordinalNumber": 6,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 12,
                                    "dryWeight": 6.15,
                                    "ordinalNumber": 7,
                                    "ptoRotation": 0
                                }
                            ],
                            "isPremix": false,
                            "density": 370,
                            "waterWeight": 2.51,
                            "digiStarInterchangeCode": "D 1",
                            "compensationMode": 0,
                            "waterPtoRotation": 0
                        },
                        "parts": [
                            1
                        ]
                    },
                    "physiologicalGroups": [
                        {
                            "physiologicalGroupId": 2,
                            "headCount": 1,
                            "physiologicalGroup": {
                                "id": 2,
                                "name": "Д - 1"
                            }
                        }
                    ],
                    "appetite": 0.67,
                    "ordinalNumber": 4,
                    "digiStarInterchangeCode": "Kopit",
                    "mixerId": 1,
                    "notCombine": false,
                    "kind": 0
                },
                "ordinalNumber": 4
            },
            {
                "sectionId": 6,
                "weight": 2120,
                "actualWeight": 0,
                "section": {
                    "id": 6,
                    "name": "23",
                    "feedingPlanId": 10,
                    "feedingPlan": {
                        "id": 10,
                        "name": "Д - 1 50/50 %",
                        "rationId": 2,
                        "ration": {
                            "id": 2,
                            "name": "Д - 1",
                            "ingredients": [
                                {
                                    "ingredientId": 1,
                                    "dryWeight": 0.7,
                                    "ordinalNumber": 0,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 14,
                                    "dryWeight": 1,
                                    "ordinalNumber": 1,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 2,
                                    "dryWeight": 7.2,
                                    "ordinalNumber": 2,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 3,
                                    "dryWeight": 4,
                                    "ordinalNumber": 3,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 5,
                                    "dryWeight": 1.8,
                                    "ordinalNumber": 4,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 6,
                                    "dryWeight": 0.8,
                                    "ordinalNumber": 5,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 11,
                                    "dryWeight": 3.35,
                                    "ordinalNumber": 6,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 12,
                                    "dryWeight": 6.15,
                                    "ordinalNumber": 7,
                                    "ptoRotation": 0
                                }
                            ],
                            "isPremix": false,
                            "density": 370,
                            "waterWeight": 2.51,
                            "digiStarInterchangeCode": "D 1",
                            "compensationMode": 0,
                            "waterPtoRotation": 0
                        },
                        "parts": [
                            0.5,
                            0.5
                        ]
                    },
                    "physiologicalGroups": [
                        {
                            "physiologicalGroupId": 2,
                            "headCount": 110,
                            "physiologicalGroup": {
                                "id": 2,
                                "name": "Д - 1"
                            }
                        }
                    ],
                    "appetite": 0.74,
                    "ordinalNumber": 5,
                    "digiStarInterchangeCode": "23",
                    "mixerId": 1,
                    "notCombine": false,
                    "kind": 0
                },
                "ordinalNumber": 5
            },
            {
                "sectionId": 7,
                "weight": 2283,
                "actualWeight": 0,
                "section": {
                    "id": 7,
                    "name": "24",
                    "feedingPlanId": 10,
                    "feedingPlan": {
                        "id": 10,
                        "name": "Д - 1 50/50 %",
                        "rationId": 2,
                        "ration": {
                            "id": 2,
                            "name": "Д - 1",
                            "ingredients": [
                                {
                                    "ingredientId": 1,
                                    "dryWeight": 0.7,
                                    "ordinalNumber": 0,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 14,
                                    "dryWeight": 1,
                                    "ordinalNumber": 1,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 2,
                                    "dryWeight": 7.2,
                                    "ordinalNumber": 2,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 3,
                                    "dryWeight": 4,
                                    "ordinalNumber": 3,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 5,
                                    "dryWeight": 1.8,
                                    "ordinalNumber": 4,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 6,
                                    "dryWeight": 0.8,
                                    "ordinalNumber": 5,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 11,
                                    "dryWeight": 3.35,
                                    "ordinalNumber": 6,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 12,
                                    "dryWeight": 6.15,
                                    "ordinalNumber": 7,
                                    "ptoRotation": 0
                                }
                            ],
                            "isPremix": false,
                            "density": 370,
                            "waterWeight": 2.51,
                            "digiStarInterchangeCode": "D 1",
                            "compensationMode": 0,
                            "waterPtoRotation": 0
                        },
                        "parts": [
                            0.5,
                            0.5
                        ]
                    },
                    "physiologicalGroups": [
                        {
                            "physiologicalGroupId": 2,
                            "headCount": 111,
                            "physiologicalGroup": {
                                "id": 2,
                                "name": "Д - 1"
                            }
                        }
                    ],
                    "appetite": 0.79,
                    "ordinalNumber": 6,
                    "digiStarInterchangeCode": "24",
                    "mixerId": 1,
                    "notCombine": false,
                    "kind": 0
                },
                "ordinalNumber": 6
            },
            {
                "sectionId": 4,
                "weight": 2712,
                "actualWeight": 0,
                "section": {
                    "id": 4,
                    "name": "21",
                    "feedingPlanId": 10,
                    "feedingPlan": {
                        "id": 10,
                        "name": "Д - 1 50/50 %",
                        "rationId": 2,
                        "ration": {
                            "id": 2,
                            "name": "Д - 1",
                            "ingredients": [
                                {
                                    "ingredientId": 1,
                                    "dryWeight": 0.7,
                                    "ordinalNumber": 0,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 14,
                                    "dryWeight": 1,
                                    "ordinalNumber": 1,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 2,
                                    "dryWeight": 7.2,
                                    "ordinalNumber": 2,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 3,
                                    "dryWeight": 4,
                                    "ordinalNumber": 3,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 5,
                                    "dryWeight": 1.8,
                                    "ordinalNumber": 4,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 6,
                                    "dryWeight": 0.8,
                                    "ordinalNumber": 5,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 11,
                                    "dryWeight": 3.35,
                                    "ordinalNumber": 6,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 12,
                                    "dryWeight": 6.15,
                                    "ordinalNumber": 7,
                                    "ptoRotation": 0
                                }
                            ],
                            "isPremix": false,
                            "density": 370,
                            "waterWeight": 2.51,
                            "digiStarInterchangeCode": "D 1",
                            "compensationMode": 0,
                            "waterPtoRotation": 0
                        },
                        "parts": [
                            0.5,
                            0.5
                        ]
                    },
                    "physiologicalGroups": [
                        {
                            "physiologicalGroupId": 2,
                            "headCount": 112,
                            "physiologicalGroup": {
                                "id": 2,
                                "name": "Д - 1"
                            }
                        }
                    ],
                    "appetite": 0.93,
                    "ordinalNumber": 7,
                    "digiStarInterchangeCode": "21",
                    "mixerId": 1,
                    "notCombine": false,
                    "kind": 0
                },
                "ordinalNumber": 7
            },
            {
                "sectionId": 5,
                "weight": 2589,
                "actualWeight": 0,
                "section": {
                    "id": 5,
                    "name": "22",
                    "feedingPlanId": 10,
                    "feedingPlan": {
                        "id": 10,
                        "name": "Д - 1 50/50 %",
                        "rationId": 2,
                        "ration": {
                            "id": 2,
                            "name": "Д - 1",
                            "ingredients": [
                                {
                                    "ingredientId": 1,
                                    "dryWeight": 0.7,
                                    "ordinalNumber": 0,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 14,
                                    "dryWeight": 1,
                                    "ordinalNumber": 1,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 2,
                                    "dryWeight": 7.2,
                                    "ordinalNumber": 2,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 3,
                                    "dryWeight": 4,
                                    "ordinalNumber": 3,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 5,
                                    "dryWeight": 1.8,
                                    "ordinalNumber": 4,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 6,
                                    "dryWeight": 0.8,
                                    "ordinalNumber": 5,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 11,
                                    "dryWeight": 3.35,
                                    "ordinalNumber": 6,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 12,
                                    "dryWeight": 6.15,
                                    "ordinalNumber": 7,
                                    "ptoRotation": 0
                                }
                            ],
                            "isPremix": false,
                            "density": 370,
                            "waterWeight": 2.51,
                            "digiStarInterchangeCode": "D 1",
                            "compensationMode": 0,
                            "waterPtoRotation": 0
                        },
                        "parts": [
                            0.5,
                            0.5
                        ]
                    },
                    "physiologicalGroups": [
                        {
                            "physiologicalGroupId": 2,
                            "headCount": 113,
                            "physiologicalGroup": {
                                "id": 2,
                                "name": "Д - 1"
                            }
                        }
                    ],
                    "appetite": 0.88,
                    "ordinalNumber": 8,
                    "digiStarInterchangeCode": "22",
                    "mixerId": 1,
                    "notCombine": false,
                    "kind": 0
                },
                "ordinalNumber": 8
            }
        ],
        "stores": [
            {
                "storeId": 17,
                "weight": 152,
                "actualWeight": 0,
                "order": 0,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 17,
                    "name": "Солома пшеничная",
                    "ingredientId": 1,
                    "amount": 100189,
                    "ingredient": {
                        "id": 1,
                        "name": "Солома пшеничная",
                        "dryMatter": 0.86,
                        "type": 3,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": false,
                        "digiStarInterchangeCode": "SolPsh",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:29.696+00:00"
                    }
                }
            },
            {
                "storeId": 8,
                "weight": 217,
                "actualWeight": 0,
                "order": 1,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 8,
                    "name": "Сено",
                    "ingredientId": 14,
                    "amount": 12641,
                    "ingredient": {
                        "id": 14,
                        "name": "Сено",
                        "dryMatter": 0.86,
                        "type": 3,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": false,
                        "digiStarInterchangeCode": "Seno",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:27.709+00:00"
                    }
                }
            },
            {
                "storeId": 16,
                "weight": 1530,
                "actualWeight": 0,
                "order": 2,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 16,
                    "name": "Комбикорм № 20",
                    "ingredientId": 2,
                    "amount": 437246,
                    "ingredient": {
                        "id": 2,
                        "name": "Комбикорм № 20",
                        "dryMatter": 0.88,
                        "type": 1,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": false,
                        "digiStarInterchangeCode": "Kom 20",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:29.378+00:00"
                    }
                }
            },
            {
                "storeId": 15,
                "weight": 841,
                "actualWeight": 0,
                "order": 3,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 15,
                    "name": "Комбикорм № 11",
                    "ingredientId": 3,
                    "amount": 478905,
                    "ingredient": {
                        "id": 3,
                        "name": "Комбикорм № 11",
                        "dryMatter": 0.89,
                        "type": 1,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": false,
                        "digiStarInterchangeCode": "Kom 11",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:29.017+00:00"
                    }
                }
            },
            {
                "storeId": 13,
                "weight": 374,
                "actualWeight": 0,
                "order": 4,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 13,
                    "name": "Соя",
                    "ingredientId": 5,
                    "amount": 485263,
                    "ingredient": {
                        "id": 5,
                        "name": "Соя",
                        "dryMatter": 0.9,
                        "type": 1,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": false,
                        "digiStarInterchangeCode": "Soya",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:28.632+00:00"
                    }
                }
            },
            {
                "storeId": 12,
                "weight": 166,
                "actualWeight": 0,
                "order": 5,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 12,
                    "name": "Рапс",
                    "ingredientId": 6,
                    "amount": 490588,
                    "ingredient": {
                        "id": 6,
                        "name": "Рапс",
                        "dryMatter": 0.9,
                        "type": 1,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": false,
                        "digiStarInterchangeCode": "Raps",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:28.325+00:00"
                    }
                }
            },
            {
                "storeId": 4,
                "weight": 1566,
                "actualWeight": 0,
                "order": 6,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 4,
                    "name": "Сенаж 17",
                    "ingredientId": 11,
                    "amount": 632336,
                    "ingredient": {
                        "id": 11,
                        "name": "Сенаж",
                        "dryMatter": 0.4,
                        "type": 3,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": true,
                        "digiStarInterchangeCode": "Senazh",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:26.466+00:00"
                    }
                }
            },
            {
                "storeId": 1,
                "weight": 4424,
                "actualWeight": 0,
                "order": 7,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 1,
                    "name": "Силос",
                    "ingredientId": 12,
                    "amount": 2547973,
                    "ingredient": {
                        "id": 12,
                        "name": "Силос",
                        "dryMatter": 0.26,
                        "type": 3,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": true,
                        "digiStarInterchangeCode": "Silos",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:26.225+00:00"
                    }
                }
            }
        ],
        "feedingNumber": 0,
        "waterTargetWeight": 470,
        "waterActualWeight": 0,
        "dailyNumber": 1,
        "waterTargetPtoRotation": 0,
        "waterActualPtoRotation": 0,
        "date": "2019-01-21",
        "created": "2019-01-21T16:12:24.325+00:00",
        "state": 0,
        "mixer": {
            "id": 1,
            "name": "30",
            "volume": 30
        },
        "id": 5048
    },
    {
        "sections": [
            {
                "sectionId": 11,
                "weight": 3483,
                "actualWeight": 0,
                "section": {
                    "id": 11,
                    "name": "43",
                    "feedingPlanId": 10,
                    "feedingPlan": {
                        "id": 10,
                        "name": "Д - 1 50/50 %",
                        "rationId": 2,
                        "ration": {
                            "id": 2,
                            "name": "Д - 1",
                            "ingredients": [
                                {
                                    "ingredientId": 1,
                                    "dryWeight": 0.7,
                                    "ordinalNumber": 0,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 14,
                                    "dryWeight": 1,
                                    "ordinalNumber": 1,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 2,
                                    "dryWeight": 7.2,
                                    "ordinalNumber": 2,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 3,
                                    "dryWeight": 4,
                                    "ordinalNumber": 3,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 5,
                                    "dryWeight": 1.8,
                                    "ordinalNumber": 4,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 6,
                                    "dryWeight": 0.8,
                                    "ordinalNumber": 5,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 11,
                                    "dryWeight": 3.35,
                                    "ordinalNumber": 6,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 12,
                                    "dryWeight": 6.15,
                                    "ordinalNumber": 7,
                                    "ptoRotation": 0
                                }
                            ],
                            "isPremix": false,
                            "density": 370,
                            "waterWeight": 2.51,
                            "digiStarInterchangeCode": "D 1",
                            "compensationMode": 0,
                            "waterPtoRotation": 0
                        },
                        "parts": [
                            0.5,
                            0.5
                        ]
                    },
                    "physiologicalGroups": [
                        {
                            "physiologicalGroupId": 2,
                            "headCount": 152,
                            "physiologicalGroup": {
                                "id": 2,
                                "name": "Д - 1"
                            }
                        }
                    ],
                    "appetite": 0.88,
                    "ordinalNumber": 10,
                    "digiStarInterchangeCode": "43",
                    "mixerId": 1,
                    "notCombine": false,
                    "kind": 0
                },
                "ordinalNumber": 10
            },
            {
                "sectionId": 12,
                "weight": 3814,
                "actualWeight": 0,
                "section": {
                    "id": 12,
                    "name": "44",
                    "feedingPlanId": 10,
                    "feedingPlan": {
                        "id": 10,
                        "name": "Д - 1 50/50 %",
                        "rationId": 2,
                        "ration": {
                            "id": 2,
                            "name": "Д - 1",
                            "ingredients": [
                                {
                                    "ingredientId": 1,
                                    "dryWeight": 0.7,
                                    "ordinalNumber": 0,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 14,
                                    "dryWeight": 1,
                                    "ordinalNumber": 1,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 2,
                                    "dryWeight": 7.2,
                                    "ordinalNumber": 2,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 3,
                                    "dryWeight": 4,
                                    "ordinalNumber": 3,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 5,
                                    "dryWeight": 1.8,
                                    "ordinalNumber": 4,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 6,
                                    "dryWeight": 0.8,
                                    "ordinalNumber": 5,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 11,
                                    "dryWeight": 3.35,
                                    "ordinalNumber": 6,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 12,
                                    "dryWeight": 6.15,
                                    "ordinalNumber": 7,
                                    "ptoRotation": 0
                                }
                            ],
                            "isPremix": false,
                            "density": 370,
                            "waterWeight": 2.51,
                            "digiStarInterchangeCode": "D 1",
                            "compensationMode": 0,
                            "waterPtoRotation": 0
                        },
                        "parts": [
                            0.5,
                            0.5
                        ]
                    },
                    "physiologicalGroups": [
                        {
                            "physiologicalGroupId": 2,
                            "headCount": 151,
                            "physiologicalGroup": {
                                "id": 2,
                                "name": "Д - 1"
                            }
                        }
                    ],
                    "appetite": 0.97,
                    "ordinalNumber": 11,
                    "digiStarInterchangeCode": "44",
                    "mixerId": 1,
                    "notCombine": false,
                    "kind": 0
                },
                "ordinalNumber": 11
            },
            {
                "sectionId": 8,
                "weight": 1586,
                "actualWeight": 0,
                "section": {
                    "id": 8,
                    "name": "10",
                    "feedingPlanId": 4,
                    "feedingPlan": {
                        "id": 4,
                        "name": "Д - 1 100%",
                        "rationId": 2,
                        "ration": {
                            "id": 2,
                            "name": "Д - 1",
                            "ingredients": [
                                {
                                    "ingredientId": 1,
                                    "dryWeight": 0.7,
                                    "ordinalNumber": 0,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 14,
                                    "dryWeight": 1,
                                    "ordinalNumber": 1,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 2,
                                    "dryWeight": 7.2,
                                    "ordinalNumber": 2,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 3,
                                    "dryWeight": 4,
                                    "ordinalNumber": 3,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 5,
                                    "dryWeight": 1.8,
                                    "ordinalNumber": 4,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 6,
                                    "dryWeight": 0.8,
                                    "ordinalNumber": 5,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 11,
                                    "dryWeight": 3.35,
                                    "ordinalNumber": 6,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 12,
                                    "dryWeight": 6.15,
                                    "ordinalNumber": 7,
                                    "ptoRotation": 0
                                }
                            ],
                            "isPremix": false,
                            "density": 370,
                            "waterWeight": 2.51,
                            "digiStarInterchangeCode": "D 1",
                            "compensationMode": 0,
                            "waterPtoRotation": 0
                        },
                        "parts": [
                            1
                        ]
                    },
                    "physiologicalGroups": [
                        {
                            "physiologicalGroupId": 2,
                            "headCount": 35,
                            "physiologicalGroup": {
                                "id": 2,
                                "name": "Д - 1"
                            }
                        }
                    ],
                    "appetite": 0.87,
                    "ordinalNumber": 12,
                    "digiStarInterchangeCode": "10",
                    "mixerId": 1,
                    "notCombine": false,
                    "kind": 0
                },
                "ordinalNumber": 12
            },
            {
                "sectionId": 39,
                "weight": 812,
                "actualWeight": 0,
                "section": {
                    "id": 39,
                    "name": "12",
                    "feedingPlanId": 4,
                    "feedingPlan": {
                        "id": 4,
                        "name": "Д - 1 100%",
                        "rationId": 2,
                        "ration": {
                            "id": 2,
                            "name": "Д - 1",
                            "ingredients": [
                                {
                                    "ingredientId": 1,
                                    "dryWeight": 0.7,
                                    "ordinalNumber": 0,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 14,
                                    "dryWeight": 1,
                                    "ordinalNumber": 1,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 2,
                                    "dryWeight": 7.2,
                                    "ordinalNumber": 2,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 3,
                                    "dryWeight": 4,
                                    "ordinalNumber": 3,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 5,
                                    "dryWeight": 1.8,
                                    "ordinalNumber": 4,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 6,
                                    "dryWeight": 0.8,
                                    "ordinalNumber": 5,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 11,
                                    "dryWeight": 3.35,
                                    "ordinalNumber": 6,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 12,
                                    "dryWeight": 6.15,
                                    "ordinalNumber": 7,
                                    "ptoRotation": 0
                                }
                            ],
                            "isPremix": false,
                            "density": 370,
                            "waterWeight": 2.51,
                            "digiStarInterchangeCode": "D 1",
                            "compensationMode": 0,
                            "waterPtoRotation": 0
                        },
                        "parts": [
                            1
                        ]
                    },
                    "physiologicalGroups": [
                        {
                            "physiologicalGroupId": 2,
                            "headCount": 20,
                            "physiologicalGroup": {
                                "id": 2,
                                "name": "Д - 1"
                            }
                        }
                    ],
                    "appetite": 0.78,
                    "ordinalNumber": 13,
                    "digiStarInterchangeCode": "12",
                    "mixerId": 1,
                    "notCombine": false,
                    "kind": 0
                },
                "ordinalNumber": 13
            }
        ],
        "stores": [
            {
                "storeId": 17,
                "weight": 152,
                "actualWeight": 0,
                "order": 0,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 17,
                    "name": "Солома пшеничная",
                    "ingredientId": 1,
                    "amount": 100189,
                    "ingredient": {
                        "id": 1,
                        "name": "Солома пшеничная",
                        "dryMatter": 0.86,
                        "type": 3,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": false,
                        "digiStarInterchangeCode": "SolPsh",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:29.696+00:00"
                    }
                }
            },
            {
                "storeId": 8,
                "weight": 216,
                "actualWeight": 0,
                "order": 1,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 8,
                    "name": "Сено",
                    "ingredientId": 14,
                    "amount": 12641,
                    "ingredient": {
                        "id": 14,
                        "name": "Сено",
                        "dryMatter": 0.86,
                        "type": 3,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": false,
                        "digiStarInterchangeCode": "Seno",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:27.709+00:00"
                    }
                }
            },
            {
                "storeId": 16,
                "weight": 1523,
                "actualWeight": 0,
                "order": 2,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 16,
                    "name": "Комбикорм № 20",
                    "ingredientId": 2,
                    "amount": 437246,
                    "ingredient": {
                        "id": 2,
                        "name": "Комбикорм № 20",
                        "dryMatter": 0.88,
                        "type": 1,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": false,
                        "digiStarInterchangeCode": "Kom 20",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:29.378+00:00"
                    }
                }
            },
            {
                "storeId": 15,
                "weight": 837,
                "actualWeight": 0,
                "order": 3,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 15,
                    "name": "Комбикорм № 11",
                    "ingredientId": 3,
                    "amount": 478905,
                    "ingredient": {
                        "id": 3,
                        "name": "Комбикорм № 11",
                        "dryMatter": 0.89,
                        "type": 1,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": false,
                        "digiStarInterchangeCode": "Kom 11",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:29.017+00:00"
                    }
                }
            },
            {
                "storeId": 13,
                "weight": 372,
                "actualWeight": 0,
                "order": 4,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 13,
                    "name": "Соя",
                    "ingredientId": 5,
                    "amount": 485263,
                    "ingredient": {
                        "id": 5,
                        "name": "Соя",
                        "dryMatter": 0.9,
                        "type": 1,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": false,
                        "digiStarInterchangeCode": "Soya",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:28.632+00:00"
                    }
                }
            },
            {
                "storeId": 12,
                "weight": 165,
                "actualWeight": 0,
                "order": 5,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 12,
                    "name": "Рапс",
                    "ingredientId": 6,
                    "amount": 490588,
                    "ingredient": {
                        "id": 6,
                        "name": "Рапс",
                        "dryMatter": 0.9,
                        "type": 1,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": false,
                        "digiStarInterchangeCode": "Raps",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:28.325+00:00"
                    }
                }
            },
            {
                "storeId": 4,
                "weight": 1559,
                "actualWeight": 0,
                "order": 6,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 4,
                    "name": "Сенаж 17",
                    "ingredientId": 11,
                    "amount": 632336,
                    "ingredient": {
                        "id": 11,
                        "name": "Сенаж",
                        "dryMatter": 0.4,
                        "type": 3,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": true,
                        "digiStarInterchangeCode": "Senazh",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:26.466+00:00"
                    }
                }
            },
            {
                "storeId": 1,
                "weight": 4404,
                "actualWeight": 0,
                "order": 7,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 1,
                    "name": "Силос",
                    "ingredientId": 12,
                    "amount": 2547973,
                    "ingredient": {
                        "id": 12,
                        "name": "Силос",
                        "dryMatter": 0.26,
                        "type": 3,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": true,
                        "digiStarInterchangeCode": "Silos",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:26.225+00:00"
                    }
                }
            }
        ],
        "feedingNumber": 0,
        "waterTargetWeight": 467,
        "waterActualWeight": 0,
        "dailyNumber": 2,
        "waterTargetPtoRotation": 0,
        "waterActualPtoRotation": 0,
        "date": "2019-01-21",
        "created": "2019-01-21T16:12:24.516+00:00",
        "state": 0,
        "mixer": {
            "id": 1,
            "name": "30",
            "volume": 30
        },
        "id": 5049
    },
    {
        "sections": [
            {
                "sectionId": 43,
                "weight": 3171,
                "actualWeight": 0,
                "section": {
                    "id": 43,
                    "name": "61-63",
                    "feedingPlanId": 8,
                    "feedingPlan": {
                        "id": 8,
                        "name": "Т 6 - 12",
                        "rationId": 9,
                        "ration": {
                            "id": 9,
                            "name": "Т 6 - 12",
                            "ingredients": [
                                {
                                    "ingredientId": 14,
                                    "dryWeight": 1,
                                    "ordinalNumber": 0,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 2,
                                    "dryWeight": 2.15,
                                    "ordinalNumber": 1,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 6,
                                    "dryWeight": 0.9,
                                    "ordinalNumber": 2,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 17,
                                    "dryWeight": 0.15,
                                    "ordinalNumber": 3,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 11,
                                    "dryWeight": 1.9,
                                    "ordinalNumber": 4,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 12,
                                    "dryWeight": 1.9,
                                    "ordinalNumber": 5,
                                    "ptoRotation": 0
                                }
                            ],
                            "isPremix": false,
                            "density": 400,
                            "waterWeight": 0,
                            "digiStarInterchangeCode": "T 6 12",
                            "compensationMode": 0,
                            "waterPtoRotation": 0
                        },
                        "parts": [
                            1
                        ]
                    },
                    "physiologicalGroups": [
                        {
                            "physiologicalGroupId": 10,
                            "headCount": 304,
                            "physiologicalGroup": {
                                "id": 10,
                                "name": "Т 12-18"
                            }
                        }
                    ],
                    "appetite": 0.62,
                    "ordinalNumber": 14,
                    "digiStarInterchangeCode": "61 63",
                    "mixerId": 1,
                    "notCombine": false,
                    "kind": 0
                },
                "ordinalNumber": 14
            },
            {
                "sectionId": 15,
                "weight": 740,
                "actualWeight": 0,
                "section": {
                    "id": 15,
                    "name": "64",
                    "feedingPlanId": 8,
                    "feedingPlan": {
                        "id": 8,
                        "name": "Т 6 - 12",
                        "rationId": 9,
                        "ration": {
                            "id": 9,
                            "name": "Т 6 - 12",
                            "ingredients": [
                                {
                                    "ingredientId": 14,
                                    "dryWeight": 1,
                                    "ordinalNumber": 0,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 2,
                                    "dryWeight": 2.15,
                                    "ordinalNumber": 1,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 6,
                                    "dryWeight": 0.9,
                                    "ordinalNumber": 2,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 17,
                                    "dryWeight": 0.15,
                                    "ordinalNumber": 3,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 11,
                                    "dryWeight": 1.9,
                                    "ordinalNumber": 4,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 12,
                                    "dryWeight": 1.9,
                                    "ordinalNumber": 5,
                                    "ptoRotation": 0
                                }
                            ],
                            "isPremix": false,
                            "density": 400,
                            "waterWeight": 0,
                            "digiStarInterchangeCode": "T 6 12",
                            "compensationMode": 0,
                            "waterPtoRotation": 0
                        },
                        "parts": [
                            1
                        ]
                    },
                    "physiologicalGroups": [
                        {
                            "physiologicalGroupId": 9,
                            "headCount": 55,
                            "physiologicalGroup": {
                                "id": 9,
                                "name": "Т 6-12"
                            }
                        }
                    ],
                    "appetite": 0.8,
                    "ordinalNumber": 15,
                    "digiStarInterchangeCode": "64",
                    "mixerId": 1,
                    "notCombine": false,
                    "kind": 0
                },
                "ordinalNumber": 15
            }
        ],
        "stores": [
            {
                "storeId": 8,
                "weight": 270,
                "actualWeight": 0,
                "order": 0,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 8,
                    "name": "Сено",
                    "ingredientId": 14,
                    "amount": 12641,
                    "ingredient": {
                        "id": 14,
                        "name": "Сено",
                        "dryMatter": 0.86,
                        "type": 3,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": false,
                        "digiStarInterchangeCode": "Seno",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:27.709+00:00"
                    }
                }
            },
            {
                "storeId": 16,
                "weight": 568,
                "actualWeight": 0,
                "order": 1,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 16,
                    "name": "Комбикорм № 20",
                    "ingredientId": 2,
                    "amount": 437246,
                    "ingredient": {
                        "id": 2,
                        "name": "Комбикорм № 20",
                        "dryMatter": 0.88,
                        "type": 1,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": false,
                        "digiStarInterchangeCode": "Kom 20",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:29.378+00:00"
                    }
                }
            },
            {
                "storeId": 12,
                "weight": 232,
                "actualWeight": 0,
                "order": 2,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 12,
                    "name": "Рапс",
                    "ingredientId": 6,
                    "amount": 490588,
                    "ingredient": {
                        "id": 6,
                        "name": "Рапс",
                        "dryMatter": 0.9,
                        "type": 1,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": false,
                        "digiStarInterchangeCode": "Raps",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:28.325+00:00"
                    }
                }
            },
            {
                "storeId": 5,
                "weight": 37,
                "actualWeight": 0,
                "order": 3,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 5,
                    "name": "Премикс телки",
                    "ingredientId": 17,
                    "amount": 1125,
                    "ingredient": {
                        "id": 17,
                        "name": "Премикс телки",
                        "dryMatter": 0.95,
                        "type": 1,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": false,
                        "digiStarInterchangeCode": "PreTel",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:27.079+00:00"
                    }
                }
            },
            {
                "storeId": 4,
                "weight": 1104,
                "actualWeight": 0,
                "order": 4,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 4,
                    "name": "Сенаж 17",
                    "ingredientId": 11,
                    "amount": 632336,
                    "ingredient": {
                        "id": 11,
                        "name": "Сенаж",
                        "dryMatter": 0.4,
                        "type": 3,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": true,
                        "digiStarInterchangeCode": "Senazh",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:26.466+00:00"
                    }
                }
            },
            {
                "storeId": 1,
                "weight": 1699,
                "actualWeight": 0,
                "order": 5,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 1,
                    "name": "Силос",
                    "ingredientId": 12,
                    "amount": 2547973,
                    "ingredient": {
                        "id": 12,
                        "name": "Силос",
                        "dryMatter": 0.26,
                        "type": 3,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": true,
                        "digiStarInterchangeCode": "Silos",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:26.225+00:00"
                    }
                }
            }
        ],
        "feedingNumber": 0,
        "dailyNumber": 3,
        "date": "2019-01-21",
        "created": "2019-01-21T16:12:24.536+00:00",
        "state": 0,
        "mixer": {
            "id": 1,
            "name": "30",
            "volume": 30
        },
        "id": 5050
    },
    {
        "sections": [
            {
                "sectionId": 16,
                "weight": 3058,
                "actualWeight": 0,
                "section": {
                    "id": 16,
                    "name": "41",
                    "feedingPlanId": 10,
                    "feedingPlan": {
                        "id": 10,
                        "name": "Д - 1 50/50 %",
                        "rationId": 2,
                        "ration": {
                            "id": 2,
                            "name": "Д - 1",
                            "ingredients": [
                                {
                                    "ingredientId": 1,
                                    "dryWeight": 0.7,
                                    "ordinalNumber": 0,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 14,
                                    "dryWeight": 1,
                                    "ordinalNumber": 1,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 2,
                                    "dryWeight": 7.2,
                                    "ordinalNumber": 2,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 3,
                                    "dryWeight": 4,
                                    "ordinalNumber": 3,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 5,
                                    "dryWeight": 1.8,
                                    "ordinalNumber": 4,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 6,
                                    "dryWeight": 0.8,
                                    "ordinalNumber": 5,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 11,
                                    "dryWeight": 3.35,
                                    "ordinalNumber": 6,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 12,
                                    "dryWeight": 6.15,
                                    "ordinalNumber": 7,
                                    "ptoRotation": 0
                                }
                            ],
                            "isPremix": false,
                            "density": 370,
                            "waterWeight": 2.51,
                            "digiStarInterchangeCode": "D 1",
                            "compensationMode": 0,
                            "waterPtoRotation": 0
                        },
                        "parts": [
                            0.5,
                            0.5
                        ]
                    },
                    "physiologicalGroups": [
                        {
                            "physiologicalGroupId": 2,
                            "headCount": 145,
                            "physiologicalGroup": {
                                "id": 2,
                                "name": "Д - 1"
                            }
                        }
                    ],
                    "appetite": 0.81,
                    "ordinalNumber": 16,
                    "digiStarInterchangeCode": "41",
                    "mixerId": 1,
                    "notCombine": false,
                    "kind": 0
                },
                "ordinalNumber": 16
            },
            {
                "sectionId": 17,
                "weight": 3787,
                "actualWeight": 0,
                "section": {
                    "id": 17,
                    "name": "42",
                    "feedingPlanId": 10,
                    "feedingPlan": {
                        "id": 10,
                        "name": "Д - 1 50/50 %",
                        "rationId": 2,
                        "ration": {
                            "id": 2,
                            "name": "Д - 1",
                            "ingredients": [
                                {
                                    "ingredientId": 1,
                                    "dryWeight": 0.7,
                                    "ordinalNumber": 0,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 14,
                                    "dryWeight": 1,
                                    "ordinalNumber": 1,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 2,
                                    "dryWeight": 7.2,
                                    "ordinalNumber": 2,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 3,
                                    "dryWeight": 4,
                                    "ordinalNumber": 3,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 5,
                                    "dryWeight": 1.8,
                                    "ordinalNumber": 4,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 6,
                                    "dryWeight": 0.8,
                                    "ordinalNumber": 5,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 11,
                                    "dryWeight": 3.35,
                                    "ordinalNumber": 6,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 12,
                                    "dryWeight": 6.15,
                                    "ordinalNumber": 7,
                                    "ptoRotation": 0
                                }
                            ],
                            "isPremix": false,
                            "density": 370,
                            "waterWeight": 2.51,
                            "digiStarInterchangeCode": "D 1",
                            "compensationMode": 0,
                            "waterPtoRotation": 0
                        },
                        "parts": [
                            0.5,
                            0.5
                        ]
                    },
                    "physiologicalGroups": [
                        {
                            "physiologicalGroupId": 2,
                            "headCount": 144,
                            "physiologicalGroup": {
                                "id": 2,
                                "name": "Д - 1"
                            }
                        }
                    ],
                    "appetite": 1.01,
                    "ordinalNumber": 17,
                    "digiStarInterchangeCode": "42",
                    "mixerId": 1,
                    "notCombine": false,
                    "kind": 0
                },
                "ordinalNumber": 17
            }
        ],
        "stores": [
            {
                "storeId": 17,
                "weight": 107,
                "actualWeight": 0,
                "order": 0,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 17,
                    "name": "Солома пшеничная",
                    "ingredientId": 1,
                    "amount": 100189,
                    "ingredient": {
                        "id": 1,
                        "name": "Солома пшеничная",
                        "dryMatter": 0.86,
                        "type": 3,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": false,
                        "digiStarInterchangeCode": "SolPsh",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:29.696+00:00"
                    }
                }
            },
            {
                "storeId": 8,
                "weight": 153,
                "actualWeight": 0,
                "order": 1,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 8,
                    "name": "Сено",
                    "ingredientId": 14,
                    "amount": 12641,
                    "ingredient": {
                        "id": 14,
                        "name": "Сено",
                        "dryMatter": 0.86,
                        "type": 3,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": false,
                        "digiStarInterchangeCode": "Seno",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:27.709+00:00"
                    }
                }
            },
            {
                "storeId": 16,
                "weight": 1075,
                "actualWeight": 0,
                "order": 2,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 16,
                    "name": "Комбикорм № 20",
                    "ingredientId": 2,
                    "amount": 437246,
                    "ingredient": {
                        "id": 2,
                        "name": "Комбикорм № 20",
                        "dryMatter": 0.88,
                        "type": 1,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": false,
                        "digiStarInterchangeCode": "Kom 20",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:29.378+00:00"
                    }
                }
            },
            {
                "storeId": 15,
                "weight": 591,
                "actualWeight": 0,
                "order": 3,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 15,
                    "name": "Комбикорм № 11",
                    "ingredientId": 3,
                    "amount": 478905,
                    "ingredient": {
                        "id": 3,
                        "name": "Комбикорм № 11",
                        "dryMatter": 0.89,
                        "type": 1,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": false,
                        "digiStarInterchangeCode": "Kom 11",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:29.017+00:00"
                    }
                }
            },
            {
                "storeId": 13,
                "weight": 263,
                "actualWeight": 0,
                "order": 4,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 13,
                    "name": "Соя",
                    "ingredientId": 5,
                    "amount": 485263,
                    "ingredient": {
                        "id": 5,
                        "name": "Соя",
                        "dryMatter": 0.9,
                        "type": 1,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": false,
                        "digiStarInterchangeCode": "Soya",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:28.632+00:00"
                    }
                }
            },
            {
                "storeId": 12,
                "weight": 117,
                "actualWeight": 0,
                "order": 5,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 12,
                    "name": "Рапс",
                    "ingredientId": 6,
                    "amount": 490588,
                    "ingredient": {
                        "id": 6,
                        "name": "Рапс",
                        "dryMatter": 0.9,
                        "type": 1,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": false,
                        "digiStarInterchangeCode": "Raps",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:28.325+00:00"
                    }
                }
            },
            {
                "storeId": 4,
                "weight": 1101,
                "actualWeight": 0,
                "order": 6,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 4,
                    "name": "Сенаж 17",
                    "ingredientId": 11,
                    "amount": 632336,
                    "ingredient": {
                        "id": 11,
                        "name": "Сенаж",
                        "dryMatter": 0.4,
                        "type": 3,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": true,
                        "digiStarInterchangeCode": "Senazh",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:26.466+00:00"
                    }
                }
            },
            {
                "storeId": 1,
                "weight": 3109,
                "actualWeight": 0,
                "order": 7,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 1,
                    "name": "Силос",
                    "ingredientId": 12,
                    "amount": 2547973,
                    "ingredient": {
                        "id": 12,
                        "name": "Силос",
                        "dryMatter": 0.26,
                        "type": 3,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": true,
                        "digiStarInterchangeCode": "Silos",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:26.225+00:00"
                    }
                }
            }
        ],
        "feedingNumber": 0,
        "waterTargetWeight": 330,
        "waterActualWeight": 0,
        "dailyNumber": 4,
        "waterTargetPtoRotation": 0,
        "waterActualPtoRotation": 0,
        "date": "2019-01-21",
        "created": "2019-01-21T16:12:24.549+00:00",
        "state": 0,
        "mixer": {
            "id": 1,
            "name": "30",
            "volume": 30
        },
        "id": 5051
    },
    {
        "sections": [
            {
                "sectionId": 45,
                "weight": 2679,
                "actualWeight": 0,
                "section": {
                    "id": 45,
                    "name": "65",
                    "feedingPlanId": 13,
                    "feedingPlan": {
                        "id": 13,
                        "name": "Нетели",
                        "rationId": 7,
                        "ration": {
                            "id": 7,
                            "name": "Нетели",
                            "ingredients": [
                                {
                                    "ingredientId": 14,
                                    "dryWeight": 3,
                                    "ordinalNumber": 0,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 2,
                                    "dryWeight": 2,
                                    "ordinalNumber": 1,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 6,
                                    "dryWeight": 0.5,
                                    "ordinalNumber": 2,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 17,
                                    "dryWeight": 0.15,
                                    "ordinalNumber": 3,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 11,
                                    "dryWeight": 3.4,
                                    "ordinalNumber": 4,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 12,
                                    "dryWeight": 3.95,
                                    "ordinalNumber": 5,
                                    "ptoRotation": 0
                                }
                            ],
                            "isPremix": false,
                            "density": 400,
                            "waterWeight": 0,
                            "digiStarInterchangeCode": "NETELI",
                            "compensationMode": 0,
                            "waterPtoRotation": 0
                        },
                        "parts": [
                            1
                        ]
                    },
                    "physiologicalGroups": [
                        {
                            "physiologicalGroupId": 6,
                            "headCount": 111,
                            "physiologicalGroup": {
                                "id": 6,
                                "name": "Нетели"
                            }
                        }
                    ],
                    "appetite": 0.8,
                    "ordinalNumber": 18,
                    "digiStarInterchangeCode": "65",
                    "mixerId": 1,
                    "notCombine": false,
                    "kind": 0
                },
                "ordinalNumber": 18
            },
            {
                "sectionId": 33,
                "weight": 2949,
                "actualWeight": 0,
                "section": {
                    "id": 33,
                    "name": "71",
                    "feedingPlanId": 13,
                    "feedingPlan": {
                        "id": 13,
                        "name": "Нетели",
                        "rationId": 7,
                        "ration": {
                            "id": 7,
                            "name": "Нетели",
                            "ingredients": [
                                {
                                    "ingredientId": 14,
                                    "dryWeight": 3,
                                    "ordinalNumber": 0,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 2,
                                    "dryWeight": 2,
                                    "ordinalNumber": 1,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 6,
                                    "dryWeight": 0.5,
                                    "ordinalNumber": 2,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 17,
                                    "dryWeight": 0.15,
                                    "ordinalNumber": 3,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 11,
                                    "dryWeight": 3.4,
                                    "ordinalNumber": 4,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 12,
                                    "dryWeight": 3.95,
                                    "ordinalNumber": 5,
                                    "ptoRotation": 0
                                }
                            ],
                            "isPremix": false,
                            "density": 400,
                            "waterWeight": 0,
                            "digiStarInterchangeCode": "NETELI",
                            "compensationMode": 0,
                            "waterPtoRotation": 0
                        },
                        "parts": [
                            1
                        ]
                    },
                    "physiologicalGroups": [
                        {
                            "physiologicalGroupId": 6,
                            "headCount": 115,
                            "physiologicalGroup": {
                                "id": 6,
                                "name": "Нетели"
                            }
                        }
                    ],
                    "appetite": 0.85,
                    "ordinalNumber": 19,
                    "digiStarInterchangeCode": "71",
                    "mixerId": 1,
                    "notCombine": false,
                    "kind": 0
                },
                "ordinalNumber": 19
            }
        ],
        "stores": [
            {
                "storeId": 8,
                "weight": 651,
                "actualWeight": 0,
                "order": 0,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 8,
                    "name": "Сено",
                    "ingredientId": 14,
                    "amount": 12641,
                    "ingredient": {
                        "id": 14,
                        "name": "Сено",
                        "dryMatter": 0.86,
                        "type": 3,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": false,
                        "digiStarInterchangeCode": "Seno",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:27.709+00:00"
                    }
                }
            },
            {
                "storeId": 16,
                "weight": 424,
                "actualWeight": 0,
                "order": 1,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 16,
                    "name": "Комбикорм № 20",
                    "ingredientId": 2,
                    "amount": 437246,
                    "ingredient": {
                        "id": 2,
                        "name": "Комбикорм № 20",
                        "dryMatter": 0.88,
                        "type": 1,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": false,
                        "digiStarInterchangeCode": "Kom 20",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:29.378+00:00"
                    }
                }
            },
            {
                "storeId": 12,
                "weight": 104,
                "actualWeight": 0,
                "order": 2,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 12,
                    "name": "Рапс",
                    "ingredientId": 6,
                    "amount": 490588,
                    "ingredient": {
                        "id": 6,
                        "name": "Рапс",
                        "dryMatter": 0.9,
                        "type": 1,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": false,
                        "digiStarInterchangeCode": "Raps",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:28.325+00:00"
                    }
                }
            },
            {
                "storeId": 5,
                "weight": 29,
                "actualWeight": 0,
                "order": 3,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 5,
                    "name": "Премикс телки",
                    "ingredientId": 17,
                    "amount": 1125,
                    "ingredient": {
                        "id": 17,
                        "name": "Премикс телки",
                        "dryMatter": 0.95,
                        "type": 1,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": false,
                        "digiStarInterchangeCode": "PreTel",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:27.079+00:00"
                    }
                }
            },
            {
                "storeId": 4,
                "weight": 1586,
                "actualWeight": 0,
                "order": 4,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 4,
                    "name": "Сенаж 17",
                    "ingredientId": 11,
                    "amount": 632336,
                    "ingredient": {
                        "id": 11,
                        "name": "Сенаж",
                        "dryMatter": 0.4,
                        "type": 3,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": true,
                        "digiStarInterchangeCode": "Senazh",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:26.466+00:00"
                    }
                }
            },
            {
                "storeId": 1,
                "weight": 2834,
                "actualWeight": 0,
                "order": 5,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 1,
                    "name": "Силос",
                    "ingredientId": 12,
                    "amount": 2547973,
                    "ingredient": {
                        "id": 12,
                        "name": "Силос",
                        "dryMatter": 0.26,
                        "type": 3,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": true,
                        "digiStarInterchangeCode": "Silos",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:26.225+00:00"
                    }
                }
            }
        ],
        "feedingNumber": 0,
        "dailyNumber": 5,
        "date": "2019-01-21",
        "created": "2019-01-21T16:12:24.564+00:00",
        "state": 0,
        "mixer": {
            "id": 1,
            "name": "30",
            "volume": 30
        },
        "id": 5052
    },
    {
        "sections": [
            {
                "sectionId": 21,
                "weight": 6717,
                "actualWeight": 0,
                "section": {
                    "id": 21,
                    "name": "53",
                    "feedingPlanId": 11,
                    "feedingPlan": {
                        "id": 11,
                        "name": "Д - 2 100%",
                        "rationId": 4,
                        "ration": {
                            "id": 4,
                            "name": "Д - 2",
                            "ingredients": [
                                {
                                    "ingredientId": 1,
                                    "dryWeight": 0.5,
                                    "ordinalNumber": 0,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 14,
                                    "dryWeight": 1.5,
                                    "ordinalNumber": 1,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 16,
                                    "dryWeight": 4,
                                    "ordinalNumber": 2,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 2,
                                    "dryWeight": 6,
                                    "ordinalNumber": 3,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 5,
                                    "dryWeight": 1.6,
                                    "ordinalNumber": 4,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 6,
                                    "dryWeight": 1,
                                    "ordinalNumber": 5,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 11,
                                    "dryWeight": 3.6,
                                    "ordinalNumber": 6,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 12,
                                    "dryWeight": 6.8,
                                    "ordinalNumber": 7,
                                    "ptoRotation": 0
                                }
                            ],
                            "isPremix": false,
                            "density": 400,
                            "waterWeight": 1.51,
                            "digiStarInterchangeCode": "D 2",
                            "compensationMode": 0,
                            "waterPtoRotation": 0
                        },
                        "parts": [
                            1
                        ]
                    },
                    "physiologicalGroups": [
                        {
                            "physiologicalGroupId": 3,
                            "headCount": 154,
                            "physiologicalGroup": {
                                "id": 3,
                                "name": "Д - 2"
                            }
                        }
                    ],
                    "appetite": 0.82,
                    "ordinalNumber": 20,
                    "digiStarInterchangeCode": "53",
                    "mixerId": 1,
                    "notCombine": false,
                    "kind": 0
                },
                "ordinalNumber": 20
            }
        ],
        "stores": [
            {
                "storeId": 17,
                "weight": 73,
                "actualWeight": 0,
                "order": 0,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 17,
                    "name": "Солома пшеничная",
                    "ingredientId": 1,
                    "amount": 100189,
                    "ingredient": {
                        "id": 1,
                        "name": "Солома пшеничная",
                        "dryMatter": 0.86,
                        "type": 3,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": false,
                        "digiStarInterchangeCode": "SolPsh",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:29.696+00:00"
                    }
                }
            },
            {
                "storeId": 8,
                "weight": 220,
                "actualWeight": 0,
                "order": 1,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 8,
                    "name": "Сено",
                    "ingredientId": 14,
                    "amount": 12641,
                    "ingredient": {
                        "id": 14,
                        "name": "Сено",
                        "dryMatter": 0.86,
                        "type": 3,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": false,
                        "digiStarInterchangeCode": "Seno",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:27.709+00:00"
                    }
                }
            },
            {
                "storeId": 6,
                "weight": 568,
                "actualWeight": 0,
                "order": 2,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 6,
                    "name": "Комбикорм № 12",
                    "ingredientId": 16,
                    "amount": 5999,
                    "ingredient": {
                        "id": 16,
                        "name": "Комбикорм № 12",
                        "dryMatter": 0.89,
                        "type": 1,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": false,
                        "digiStarInterchangeCode": "Komb12",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:27.294+00:00"
                    }
                }
            },
            {
                "storeId": 16,
                "weight": 861,
                "actualWeight": 0,
                "order": 3,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 16,
                    "name": "Комбикорм № 20",
                    "ingredientId": 2,
                    "amount": 437246,
                    "ingredient": {
                        "id": 2,
                        "name": "Комбикорм № 20",
                        "dryMatter": 0.88,
                        "type": 1,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": false,
                        "digiStarInterchangeCode": "Kom 20",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:29.378+00:00"
                    }
                }
            },
            {
                "storeId": 13,
                "weight": 224,
                "actualWeight": 0,
                "order": 4,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 13,
                    "name": "Соя",
                    "ingredientId": 5,
                    "amount": 485263,
                    "ingredient": {
                        "id": 5,
                        "name": "Соя",
                        "dryMatter": 0.9,
                        "type": 1,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": false,
                        "digiStarInterchangeCode": "Soya",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:28.632+00:00"
                    }
                }
            },
            {
                "storeId": 12,
                "weight": 140,
                "actualWeight": 0,
                "order": 5,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 12,
                    "name": "Рапс",
                    "ingredientId": 6,
                    "amount": 490588,
                    "ingredient": {
                        "id": 6,
                        "name": "Рапс",
                        "dryMatter": 0.9,
                        "type": 1,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": false,
                        "digiStarInterchangeCode": "Raps",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:28.325+00:00"
                    }
                }
            },
            {
                "storeId": 4,
                "weight": 1137,
                "actualWeight": 0,
                "order": 6,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 4,
                    "name": "Сенаж 17",
                    "ingredientId": 11,
                    "amount": 632336,
                    "ingredient": {
                        "id": 11,
                        "name": "Сенаж",
                        "dryMatter": 0.4,
                        "type": 3,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": true,
                        "digiStarInterchangeCode": "Senazh",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:26.466+00:00"
                    }
                }
            },
            {
                "storeId": 1,
                "weight": 3303,
                "actualWeight": 0,
                "order": 7,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 1,
                    "name": "Силос",
                    "ingredientId": 12,
                    "amount": 2547973,
                    "ingredient": {
                        "id": 12,
                        "name": "Силос",
                        "dryMatter": 0.26,
                        "type": 3,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": true,
                        "digiStarInterchangeCode": "Silos",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:26.225+00:00"
                    }
                }
            }
        ],
        "feedingNumber": 0,
        "waterTargetWeight": 191,
        "waterActualWeight": 0,
        "dailyNumber": 6,
        "waterTargetPtoRotation": 0,
        "waterActualPtoRotation": 0,
        "date": "2019-01-21",
        "created": "2019-01-21T16:12:24.579+00:00",
        "state": 0,
        "mixer": {
            "id": 1,
            "name": "30",
            "volume": 30
        },
        "id": 5053
    },
    {
        "sections": [
            {
                "sectionId": 41,
                "weight": 3651,
                "actualWeight": 0,
                "section": {
                    "id": 41,
                    "name": "73",
                    "feedingPlanId": 5,
                    "feedingPlan": {
                        "id": 5,
                        "name": "Сух - 1",
                        "rationId": 5,
                        "ration": {
                            "id": 5,
                            "name": "Сух - 1",
                            "ingredients": [
                                {
                                    "ingredientId": 1,
                                    "dryWeight": 1.5,
                                    "ordinalNumber": 0,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 14,
                                    "dryWeight": 2,
                                    "ordinalNumber": 1,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 2,
                                    "dryWeight": 0.8,
                                    "ordinalNumber": 2,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 8,
                                    "dryWeight": 0.15,
                                    "ordinalNumber": 3,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 11,
                                    "dryWeight": 4.3,
                                    "ordinalNumber": 4,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 12,
                                    "dryWeight": 4.25,
                                    "ordinalNumber": 5,
                                    "ptoRotation": 0
                                }
                            ],
                            "isPremix": false,
                            "density": 400,
                            "waterWeight": 0,
                            "digiStarInterchangeCode": "SUH 1",
                            "compensationMode": 0,
                            "waterPtoRotation": 0
                        },
                        "parts": [
                            1
                        ]
                    },
                    "physiologicalGroups": [
                        {
                            "physiologicalGroupId": 4,
                            "headCount": 109,
                            "physiologicalGroup": {
                                "id": 4,
                                "name": "Сух - 1"
                            }
                        },
                        {
                            "physiologicalGroupId": 6,
                            "headCount": 1,
                            "physiologicalGroup": {
                                "id": 6,
                                "name": "Нетели"
                            }
                        }
                    ],
                    "appetite": 1.03,
                    "ordinalNumber": 21,
                    "digiStarInterchangeCode": "73",
                    "mixerId": 1,
                    "notCombine": false,
                    "kind": 0
                },
                "ordinalNumber": 21
            },
            {
                "sectionId": 18,
                "weight": 3407,
                "actualWeight": 0,
                "section": {
                    "id": 18,
                    "name": "72",
                    "feedingPlanId": 5,
                    "feedingPlan": {
                        "id": 5,
                        "name": "Сух - 1",
                        "rationId": 5,
                        "ration": {
                            "id": 5,
                            "name": "Сух - 1",
                            "ingredients": [
                                {
                                    "ingredientId": 1,
                                    "dryWeight": 1.5,
                                    "ordinalNumber": 0,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 14,
                                    "dryWeight": 2,
                                    "ordinalNumber": 1,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 2,
                                    "dryWeight": 0.8,
                                    "ordinalNumber": 2,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 8,
                                    "dryWeight": 0.15,
                                    "ordinalNumber": 3,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 11,
                                    "dryWeight": 4.3,
                                    "ordinalNumber": 4,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 12,
                                    "dryWeight": 4.25,
                                    "ordinalNumber": 5,
                                    "ptoRotation": 0
                                }
                            ],
                            "isPremix": false,
                            "density": 400,
                            "waterWeight": 0,
                            "digiStarInterchangeCode": "SUH 1",
                            "compensationMode": 0,
                            "waterPtoRotation": 0
                        },
                        "parts": [
                            1
                        ]
                    },
                    "physiologicalGroups": [
                        {
                            "physiologicalGroupId": 6,
                            "headCount": 15,
                            "physiologicalGroup": {
                                "id": 6,
                                "name": "Нетели"
                            }
                        },
                        {
                            "physiologicalGroupId": 4,
                            "headCount": 94,
                            "physiologicalGroup": {
                                "id": 4,
                                "name": "Сух - 1"
                            }
                        }
                    ],
                    "appetite": 0.97,
                    "ordinalNumber": 22,
                    "digiStarInterchangeCode": "72",
                    "mixerId": 1,
                    "notCombine": false,
                    "kind": 0
                },
                "ordinalNumber": 22
            }
        ],
        "stores": [
            {
                "storeId": 17,
                "weight": 382,
                "actualWeight": 0,
                "order": 0,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 17,
                    "name": "Солома пшеничная",
                    "ingredientId": 1,
                    "amount": 100189,
                    "ingredient": {
                        "id": 1,
                        "name": "Солома пшеничная",
                        "dryMatter": 0.86,
                        "type": 3,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": false,
                        "digiStarInterchangeCode": "SolPsh",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:29.696+00:00"
                    }
                }
            },
            {
                "storeId": 8,
                "weight": 509,
                "actualWeight": 0,
                "order": 1,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 8,
                    "name": "Сено",
                    "ingredientId": 14,
                    "amount": 12641,
                    "ingredient": {
                        "id": 14,
                        "name": "Сено",
                        "dryMatter": 0.86,
                        "type": 3,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": false,
                        "digiStarInterchangeCode": "Seno",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:27.709+00:00"
                    }
                }
            },
            {
                "storeId": 16,
                "weight": 199,
                "actualWeight": 0,
                "order": 2,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 16,
                    "name": "Комбикорм № 20",
                    "ingredientId": 2,
                    "amount": 437246,
                    "ingredient": {
                        "id": 2,
                        "name": "Комбикорм № 20",
                        "dryMatter": 0.88,
                        "type": 1,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": false,
                        "digiStarInterchangeCode": "Kom 20",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:29.378+00:00"
                    }
                }
            },
            {
                "storeId": 11,
                "weight": 33,
                "actualWeight": 0,
                "order": 3,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 11,
                    "name": "Премикс коровы",
                    "ingredientId": 8,
                    "amount": 967,
                    "ingredient": {
                        "id": 8,
                        "name": "Премикс коровы",
                        "dryMatter": 0.99,
                        "type": 1,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": false,
                        "digiStarInterchangeCode": "PreKor",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:26.87+00:00"
                    }
                }
            },
            {
                "storeId": 4,
                "weight": 2355,
                "actualWeight": 0,
                "order": 4,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 4,
                    "name": "Сенаж 17",
                    "ingredientId": 11,
                    "amount": 632336,
                    "ingredient": {
                        "id": 11,
                        "name": "Сенаж",
                        "dryMatter": 0.4,
                        "type": 3,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": true,
                        "digiStarInterchangeCode": "Senazh",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:26.466+00:00"
                    }
                }
            },
            {
                "storeId": 1,
                "weight": 3580,
                "actualWeight": 0,
                "order": 5,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 1,
                    "name": "Силос",
                    "ingredientId": 12,
                    "amount": 2547973,
                    "ingredient": {
                        "id": 12,
                        "name": "Силос",
                        "dryMatter": 0.26,
                        "type": 3,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": true,
                        "digiStarInterchangeCode": "Silos",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:26.225+00:00"
                    }
                }
            }
        ],
        "feedingNumber": 0,
        "dailyNumber": 7,
        "date": "2019-01-21",
        "created": "2019-01-21T16:12:24.602+00:00",
        "state": 0,
        "mixer": {
            "id": 1,
            "name": "30",
            "volume": 30
        },
        "id": 5054
    },
    {
        "sections": [
            {
                "sectionId": 22,
                "weight": 7250,
                "actualWeight": 0,
                "section": {
                    "id": 22,
                    "name": "54",
                    "feedingPlanId": 4,
                    "feedingPlan": {
                        "id": 4,
                        "name": "Д - 1 100%",
                        "rationId": 2,
                        "ration": {
                            "id": 2,
                            "name": "Д - 1",
                            "ingredients": [
                                {
                                    "ingredientId": 1,
                                    "dryWeight": 0.7,
                                    "ordinalNumber": 0,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 14,
                                    "dryWeight": 1,
                                    "ordinalNumber": 1,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 2,
                                    "dryWeight": 7.2,
                                    "ordinalNumber": 2,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 3,
                                    "dryWeight": 4,
                                    "ordinalNumber": 3,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 5,
                                    "dryWeight": 1.8,
                                    "ordinalNumber": 4,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 6,
                                    "dryWeight": 0.8,
                                    "ordinalNumber": 5,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 11,
                                    "dryWeight": 3.35,
                                    "ordinalNumber": 6,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 12,
                                    "dryWeight": 6.15,
                                    "ordinalNumber": 7,
                                    "ptoRotation": 0
                                }
                            ],
                            "isPremix": false,
                            "density": 370,
                            "waterWeight": 2.51,
                            "digiStarInterchangeCode": "D 1",
                            "compensationMode": 0,
                            "waterPtoRotation": 0
                        },
                        "parts": [
                            1
                        ]
                    },
                    "physiologicalGroups": [
                        {
                            "physiologicalGroupId": 2,
                            "headCount": 145,
                            "physiologicalGroup": {
                                "id": 2,
                                "name": "Д - 1"
                            }
                        }
                    ],
                    "appetite": 0.96,
                    "ordinalNumber": 23,
                    "digiStarInterchangeCode": "54",
                    "mixerId": 1,
                    "notCombine": false,
                    "kind": 0
                },
                "ordinalNumber": 23
            }
        ],
        "stores": [
            {
                "storeId": 17,
                "weight": 113,
                "actualWeight": 0,
                "order": 0,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 17,
                    "name": "Солома пшеничная",
                    "ingredientId": 1,
                    "amount": 100189,
                    "ingredient": {
                        "id": 1,
                        "name": "Солома пшеничная",
                        "dryMatter": 0.86,
                        "type": 3,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": false,
                        "digiStarInterchangeCode": "SolPsh",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:29.696+00:00"
                    }
                }
            },
            {
                "storeId": 8,
                "weight": 162,
                "actualWeight": 0,
                "order": 1,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 8,
                    "name": "Сено",
                    "ingredientId": 14,
                    "amount": 12641,
                    "ingredient": {
                        "id": 14,
                        "name": "Сено",
                        "dryMatter": 0.86,
                        "type": 3,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": false,
                        "digiStarInterchangeCode": "Seno",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:27.709+00:00"
                    }
                }
            },
            {
                "storeId": 16,
                "weight": 1139,
                "actualWeight": 0,
                "order": 2,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 16,
                    "name": "Комбикорм № 20",
                    "ingredientId": 2,
                    "amount": 437246,
                    "ingredient": {
                        "id": 2,
                        "name": "Комбикорм № 20",
                        "dryMatter": 0.88,
                        "type": 1,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": false,
                        "digiStarInterchangeCode": "Kom 20",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:29.378+00:00"
                    }
                }
            },
            {
                "storeId": 15,
                "weight": 626,
                "actualWeight": 0,
                "order": 3,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 15,
                    "name": "Комбикорм № 11",
                    "ingredientId": 3,
                    "amount": 478905,
                    "ingredient": {
                        "id": 3,
                        "name": "Комбикорм № 11",
                        "dryMatter": 0.89,
                        "type": 1,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": false,
                        "digiStarInterchangeCode": "Kom 11",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:29.017+00:00"
                    }
                }
            },
            {
                "storeId": 13,
                "weight": 278,
                "actualWeight": 0,
                "order": 4,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 13,
                    "name": "Соя",
                    "ingredientId": 5,
                    "amount": 485263,
                    "ingredient": {
                        "id": 5,
                        "name": "Соя",
                        "dryMatter": 0.9,
                        "type": 1,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": false,
                        "digiStarInterchangeCode": "Soya",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:28.632+00:00"
                    }
                }
            },
            {
                "storeId": 12,
                "weight": 124,
                "actualWeight": 0,
                "order": 5,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 12,
                    "name": "Рапс",
                    "ingredientId": 6,
                    "amount": 490588,
                    "ingredient": {
                        "id": 6,
                        "name": "Рапс",
                        "dryMatter": 0.9,
                        "type": 1,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": false,
                        "digiStarInterchangeCode": "Raps",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:28.325+00:00"
                    }
                }
            },
            {
                "storeId": 4,
                "weight": 1166,
                "actualWeight": 0,
                "order": 6,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 4,
                    "name": "Сенаж 17",
                    "ingredientId": 11,
                    "amount": 632336,
                    "ingredient": {
                        "id": 11,
                        "name": "Сенаж",
                        "dryMatter": 0.4,
                        "type": 3,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": true,
                        "digiStarInterchangeCode": "Senazh",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:26.466+00:00"
                    }
                }
            },
            {
                "storeId": 1,
                "weight": 3293,
                "actualWeight": 0,
                "order": 7,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 1,
                    "name": "Силос",
                    "ingredientId": 12,
                    "amount": 2547973,
                    "ingredient": {
                        "id": 12,
                        "name": "Силос",
                        "dryMatter": 0.26,
                        "type": 3,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": true,
                        "digiStarInterchangeCode": "Silos",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:26.225+00:00"
                    }
                }
            }
        ],
        "feedingNumber": 0,
        "waterTargetWeight": 349,
        "waterActualWeight": 0,
        "dailyNumber": 8,
        "waterTargetPtoRotation": 0,
        "waterActualPtoRotation": 0,
        "date": "2019-01-21",
        "created": "2019-01-21T16:12:24.616+00:00",
        "state": 0,
        "mixer": {
            "id": 1,
            "name": "30",
            "volume": 30
        },
        "id": 5055
    },
    {
        "sections": [
            {
                "sectionId": 24,
                "weight": 2039,
                "actualWeight": 0,
                "section": {
                    "id": 24,
                    "name": "51",
                    "feedingPlanId": 22,
                    "feedingPlan": {
                        "id": 22,
                        "name": "Д - 3 50/50%",
                        "rationId": 11,
                        "ration": {
                            "id": 11,
                            "name": "Д - 3",
                            "ingredients": [
                                {
                                    "ingredientId": 14,
                                    "dryWeight": 2,
                                    "ordinalNumber": 0,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 16,
                                    "dryWeight": 3.5,
                                    "ordinalNumber": 1,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 2,
                                    "dryWeight": 2,
                                    "ordinalNumber": 2,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 6,
                                    "dryWeight": 1,
                                    "ordinalNumber": 3,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 11,
                                    "dryWeight": 6.75,
                                    "ordinalNumber": 4,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 12,
                                    "dryWeight": 6.75,
                                    "ordinalNumber": 5,
                                    "ptoRotation": 0
                                }
                            ],
                            "isPremix": false,
                            "density": 380,
                            "waterWeight": 0,
                            "digiStarInterchangeCode": "D 3",
                            "compensationMode": 0,
                            "waterPtoRotation": 0
                        },
                        "parts": [
                            0.5,
                            0.5
                        ]
                    },
                    "physiologicalGroups": [
                        {
                            "physiologicalGroupId": 14,
                            "headCount": 105,
                            "physiologicalGroup": {
                                "id": 14,
                                "name": "Д - 3"
                            }
                        }
                    ],
                    "appetite": 0.74,
                    "ordinalNumber": 24,
                    "digiStarInterchangeCode": "51",
                    "mixerId": 1,
                    "notCombine": false,
                    "kind": 0
                },
                "ordinalNumber": 24
            },
            {
                "sectionId": 23,
                "weight": 2603,
                "actualWeight": 0,
                "section": {
                    "id": 23,
                    "name": "52",
                    "feedingPlanId": 22,
                    "feedingPlan": {
                        "id": 22,
                        "name": "Д - 3 50/50%",
                        "rationId": 11,
                        "ration": {
                            "id": 11,
                            "name": "Д - 3",
                            "ingredients": [
                                {
                                    "ingredientId": 14,
                                    "dryWeight": 2,
                                    "ordinalNumber": 0,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 16,
                                    "dryWeight": 3.5,
                                    "ordinalNumber": 1,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 2,
                                    "dryWeight": 2,
                                    "ordinalNumber": 2,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 6,
                                    "dryWeight": 1,
                                    "ordinalNumber": 3,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 11,
                                    "dryWeight": 6.75,
                                    "ordinalNumber": 4,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 12,
                                    "dryWeight": 6.75,
                                    "ordinalNumber": 5,
                                    "ptoRotation": 0
                                }
                            ],
                            "isPremix": false,
                            "density": 380,
                            "waterWeight": 0,
                            "digiStarInterchangeCode": "D 3",
                            "compensationMode": 0,
                            "waterPtoRotation": 0
                        },
                        "parts": [
                            0.5,
                            0.5
                        ]
                    },
                    "physiologicalGroups": [
                        {
                            "physiologicalGroupId": 14,
                            "headCount": 121,
                            "physiologicalGroup": {
                                "id": 14,
                                "name": "Д - 3"
                            }
                        }
                    ],
                    "appetite": 0.82,
                    "ordinalNumber": 25,
                    "digiStarInterchangeCode": "52",
                    "mixerId": 1,
                    "notCombine": false,
                    "kind": 0
                },
                "ordinalNumber": 25
            }
        ],
        "stores": [
            {
                "storeId": 8,
                "weight": 206,
                "actualWeight": 0,
                "order": 0,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 8,
                    "name": "Сено",
                    "ingredientId": 14,
                    "amount": 12641,
                    "ingredient": {
                        "id": 14,
                        "name": "Сено",
                        "dryMatter": 0.86,
                        "type": 3,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": false,
                        "digiStarInterchangeCode": "Seno",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:27.709+00:00"
                    }
                }
            },
            {
                "storeId": 6,
                "weight": 348,
                "actualWeight": 0,
                "order": 1,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 6,
                    "name": "Комбикорм № 12",
                    "ingredientId": 16,
                    "amount": 5999,
                    "ingredient": {
                        "id": 16,
                        "name": "Комбикорм № 12",
                        "dryMatter": 0.89,
                        "type": 1,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": false,
                        "digiStarInterchangeCode": "Komb12",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:27.294+00:00"
                    }
                }
            },
            {
                "storeId": 16,
                "weight": 201,
                "actualWeight": 0,
                "order": 2,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 16,
                    "name": "Комбикорм № 20",
                    "ingredientId": 2,
                    "amount": 437246,
                    "ingredient": {
                        "id": 2,
                        "name": "Комбикорм № 20",
                        "dryMatter": 0.88,
                        "type": 1,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": false,
                        "digiStarInterchangeCode": "Kom 20",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:29.378+00:00"
                    }
                }
            },
            {
                "storeId": 12,
                "weight": 98,
                "actualWeight": 0,
                "order": 3,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 12,
                    "name": "Рапс",
                    "ingredientId": 6,
                    "amount": 490588,
                    "ingredient": {
                        "id": 6,
                        "name": "Рапс",
                        "dryMatter": 0.9,
                        "type": 1,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": false,
                        "digiStarInterchangeCode": "Raps",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:28.325+00:00"
                    }
                }
            },
            {
                "storeId": 4,
                "weight": 1493,
                "actualWeight": 0,
                "order": 4,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 4,
                    "name": "Сенаж 17",
                    "ingredientId": 11,
                    "amount": 632336,
                    "ingredient": {
                        "id": 11,
                        "name": "Сенаж",
                        "dryMatter": 0.4,
                        "type": 3,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": true,
                        "digiStarInterchangeCode": "Senazh",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:26.466+00:00"
                    }
                }
            },
            {
                "storeId": 1,
                "weight": 2297,
                "actualWeight": 0,
                "order": 5,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 1,
                    "name": "Силос",
                    "ingredientId": 12,
                    "amount": 2547973,
                    "ingredient": {
                        "id": 12,
                        "name": "Силос",
                        "dryMatter": 0.26,
                        "type": 3,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": true,
                        "digiStarInterchangeCode": "Silos",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:26.225+00:00"
                    }
                }
            }
        ],
        "feedingNumber": 0,
        "dailyNumber": 9,
        "date": "2019-01-21",
        "created": "2019-01-21T16:12:24.63+00:00",
        "state": 0,
        "mixer": {
            "id": 1,
            "name": "30",
            "volume": 30
        },
        "id": 5056
    },
    {
        "sections": [
            {
                "sectionId": 36,
                "weight": 1243,
                "actualWeight": 0,
                "section": {
                    "id": 36,
                    "name": "13",
                    "feedingPlanId": 6,
                    "feedingPlan": {
                        "id": 6,
                        "name": "Сух - 2",
                        "rationId": 6,
                        "ration": {
                            "id": 6,
                            "name": "Сух - 2",
                            "ingredients": [
                                {
                                    "ingredientId": 1,
                                    "dryWeight": 1.5,
                                    "ordinalNumber": 0,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 2,
                                    "dryWeight": 1.65,
                                    "ordinalNumber": 1,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 5,
                                    "dryWeight": 1,
                                    "ordinalNumber": 2,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 6,
                                    "dryWeight": 0.6,
                                    "ordinalNumber": 3,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 9,
                                    "dryWeight": 1.37,
                                    "ordinalNumber": 4,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 11,
                                    "dryWeight": 2,
                                    "ordinalNumber": 5,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 12,
                                    "dryWeight": 4.88,
                                    "ordinalNumber": 6,
                                    "ptoRotation": 0
                                }
                            ],
                            "isPremix": false,
                            "density": 380,
                            "waterWeight": 0,
                            "digiStarInterchangeCode": "SUH 2",
                            "compensationMode": 0,
                            "waterPtoRotation": 0
                        },
                        "parts": [
                            1
                        ]
                    },
                    "physiologicalGroups": [
                        {
                            "physiologicalGroupId": 5,
                            "headCount": 18,
                            "physiologicalGroup": {
                                "id": 5,
                                "name": "Сух - 2"
                            }
                        },
                        {
                            "physiologicalGroupId": 6,
                            "headCount": 27,
                            "physiologicalGroup": {
                                "id": 6,
                                "name": "Нетели"
                            }
                        }
                    ],
                    "appetite": 0.9,
                    "ordinalNumber": 26,
                    "digiStarInterchangeCode": "13",
                    "mixerId": 1,
                    "notCombine": false,
                    "kind": 0
                },
                "ordinalNumber": 26
            },
            {
                "sectionId": 30,
                "weight": 1539,
                "actualWeight": 0,
                "section": {
                    "id": 30,
                    "name": "16",
                    "feedingPlanId": 6,
                    "feedingPlan": {
                        "id": 6,
                        "name": "Сух - 2",
                        "rationId": 6,
                        "ration": {
                            "id": 6,
                            "name": "Сух - 2",
                            "ingredients": [
                                {
                                    "ingredientId": 1,
                                    "dryWeight": 1.5,
                                    "ordinalNumber": 0,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 2,
                                    "dryWeight": 1.65,
                                    "ordinalNumber": 1,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 5,
                                    "dryWeight": 1,
                                    "ordinalNumber": 2,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 6,
                                    "dryWeight": 0.6,
                                    "ordinalNumber": 3,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 9,
                                    "dryWeight": 1.37,
                                    "ordinalNumber": 4,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 11,
                                    "dryWeight": 2,
                                    "ordinalNumber": 5,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 12,
                                    "dryWeight": 4.88,
                                    "ordinalNumber": 6,
                                    "ptoRotation": 0
                                }
                            ],
                            "isPremix": false,
                            "density": 380,
                            "waterWeight": 0,
                            "digiStarInterchangeCode": "SUH 2",
                            "compensationMode": 0,
                            "waterPtoRotation": 0
                        },
                        "parts": [
                            1
                        ]
                    },
                    "physiologicalGroups": [
                        {
                            "physiologicalGroupId": 5,
                            "headCount": 23,
                            "physiologicalGroup": {
                                "id": 5,
                                "name": "Сух - 2"
                            }
                        },
                        {
                            "physiologicalGroupId": 6,
                            "headCount": 36,
                            "physiologicalGroup": {
                                "id": 6,
                                "name": "Нетели"
                            }
                        }
                    ],
                    "appetite": 0.85,
                    "ordinalNumber": 27,
                    "digiStarInterchangeCode": "16",
                    "mixerId": 1,
                    "notCombine": false,
                    "kind": 0
                },
                "ordinalNumber": 27
            },
            {
                "sectionId": 29,
                "weight": 2595,
                "actualWeight": 0,
                "section": {
                    "id": 29,
                    "name": "11",
                    "feedingPlanId": 6,
                    "feedingPlan": {
                        "id": 6,
                        "name": "Сух - 2",
                        "rationId": 6,
                        "ration": {
                            "id": 6,
                            "name": "Сух - 2",
                            "ingredients": [
                                {
                                    "ingredientId": 1,
                                    "dryWeight": 1.5,
                                    "ordinalNumber": 0,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 2,
                                    "dryWeight": 1.65,
                                    "ordinalNumber": 1,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 5,
                                    "dryWeight": 1,
                                    "ordinalNumber": 2,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 6,
                                    "dryWeight": 0.6,
                                    "ordinalNumber": 3,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 9,
                                    "dryWeight": 1.37,
                                    "ordinalNumber": 4,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 11,
                                    "dryWeight": 2,
                                    "ordinalNumber": 5,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 12,
                                    "dryWeight": 4.88,
                                    "ordinalNumber": 6,
                                    "ptoRotation": 0
                                }
                            ],
                            "isPremix": false,
                            "density": 380,
                            "waterWeight": 0,
                            "digiStarInterchangeCode": "SUH 2",
                            "compensationMode": 0,
                            "waterPtoRotation": 0
                        },
                        "parts": [
                            1
                        ]
                    },
                    "physiologicalGroups": [
                        {
                            "physiologicalGroupId": 6,
                            "headCount": 27,
                            "physiologicalGroup": {
                                "id": 6,
                                "name": "Нетели"
                            }
                        },
                        {
                            "physiologicalGroupId": 5,
                            "headCount": 62,
                            "physiologicalGroup": {
                                "id": 5,
                                "name": "Сух - 2"
                            }
                        }
                    ],
                    "appetite": 0.95,
                    "ordinalNumber": 28,
                    "digiStarInterchangeCode": "11",
                    "mixerId": 1,
                    "notCombine": false,
                    "kind": 0
                },
                "ordinalNumber": 28
            },
            {
                "sectionId": 46,
                "weight": 2056,
                "actualWeight": 0,
                "section": {
                    "id": 46,
                    "name": "74",
                    "feedingPlanId": 6,
                    "feedingPlan": {
                        "id": 6,
                        "name": "Сух - 2",
                        "rationId": 6,
                        "ration": {
                            "id": 6,
                            "name": "Сух - 2",
                            "ingredients": [
                                {
                                    "ingredientId": 1,
                                    "dryWeight": 1.5,
                                    "ordinalNumber": 0,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 2,
                                    "dryWeight": 1.65,
                                    "ordinalNumber": 1,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 5,
                                    "dryWeight": 1,
                                    "ordinalNumber": 2,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 6,
                                    "dryWeight": 0.6,
                                    "ordinalNumber": 3,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 9,
                                    "dryWeight": 1.37,
                                    "ordinalNumber": 4,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 11,
                                    "dryWeight": 2,
                                    "ordinalNumber": 5,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 12,
                                    "dryWeight": 4.88,
                                    "ordinalNumber": 6,
                                    "ptoRotation": 0
                                }
                            ],
                            "isPremix": false,
                            "density": 380,
                            "waterWeight": 0,
                            "digiStarInterchangeCode": "SUH 2",
                            "compensationMode": 0,
                            "waterPtoRotation": 0
                        },
                        "parts": [
                            1
                        ]
                    },
                    "physiologicalGroups": [
                        {
                            "physiologicalGroupId": 5,
                            "headCount": 16,
                            "physiologicalGroup": {
                                "id": 5,
                                "name": "Сух - 2"
                            }
                        },
                        {
                            "physiologicalGroupId": 6,
                            "headCount": 51,
                            "physiologicalGroup": {
                                "id": 6,
                                "name": "Нетели"
                            }
                        }
                    ],
                    "appetite": 1,
                    "ordinalNumber": 29,
                    "digiStarInterchangeCode": "74",
                    "mixerId": 1,
                    "notCombine": false,
                    "kind": 0
                },
                "ordinalNumber": 29
            }
        ],
        "stores": [
            {
                "storeId": 17,
                "weight": 422,
                "actualWeight": 0,
                "order": 0,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 17,
                    "name": "Солома пшеничная",
                    "ingredientId": 1,
                    "amount": 100189,
                    "ingredient": {
                        "id": 1,
                        "name": "Солома пшеничная",
                        "dryMatter": 0.86,
                        "type": 3,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": false,
                        "digiStarInterchangeCode": "SolPsh",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:29.696+00:00"
                    }
                }
            },
            {
                "storeId": 16,
                "weight": 454,
                "actualWeight": 0,
                "order": 1,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 16,
                    "name": "Комбикорм № 20",
                    "ingredientId": 2,
                    "amount": 437246,
                    "ingredient": {
                        "id": 2,
                        "name": "Комбикорм № 20",
                        "dryMatter": 0.88,
                        "type": 1,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": false,
                        "digiStarInterchangeCode": "Kom 20",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:29.378+00:00"
                    }
                }
            },
            {
                "storeId": 13,
                "weight": 269,
                "actualWeight": 0,
                "order": 2,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 13,
                    "name": "Соя",
                    "ingredientId": 5,
                    "amount": 485263,
                    "ingredient": {
                        "id": 5,
                        "name": "Соя",
                        "dryMatter": 0.9,
                        "type": 1,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": false,
                        "digiStarInterchangeCode": "Soya",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:28.632+00:00"
                    }
                }
            },
            {
                "storeId": 12,
                "weight": 161,
                "actualWeight": 0,
                "order": 3,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 12,
                    "name": "Рапс",
                    "ingredientId": 6,
                    "amount": 490588,
                    "ingredient": {
                        "id": 6,
                        "name": "Рапс",
                        "dryMatter": 0.9,
                        "type": 1,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": false,
                        "digiStarInterchangeCode": "Raps",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:28.325+00:00"
                    }
                }
            },
            {
                "storeId": 10,
                "weight": 369,
                "actualWeight": 0,
                "order": 4,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 10,
                    "name": "Комбикорм № 2",
                    "ingredientId": 9,
                    "amount": 858,
                    "ingredient": {
                        "id": 9,
                        "name": "Комбикорм № 2",
                        "dryMatter": 0.9,
                        "type": 1,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": false,
                        "digiStarInterchangeCode": "Komb 2",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:28.11+00:00"
                    }
                }
            },
            {
                "storeId": 4,
                "weight": 1211,
                "actualWeight": 0,
                "order": 5,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 4,
                    "name": "Сенаж 17",
                    "ingredientId": 11,
                    "amount": 632336,
                    "ingredient": {
                        "id": 11,
                        "name": "Сенаж",
                        "dryMatter": 0.4,
                        "type": 3,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": true,
                        "digiStarInterchangeCode": "Senazh",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:26.466+00:00"
                    }
                }
            },
            {
                "storeId": 1,
                "weight": 4546,
                "actualWeight": 0,
                "order": 6,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 1,
                    "name": "Силос",
                    "ingredientId": 12,
                    "amount": 2547973,
                    "ingredient": {
                        "id": 12,
                        "name": "Силос",
                        "dryMatter": 0.26,
                        "type": 3,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": true,
                        "digiStarInterchangeCode": "Silos",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:26.225+00:00"
                    }
                }
            }
        ],
        "feedingNumber": 0,
        "dailyNumber": 10,
        "date": "2019-01-21",
        "created": "2019-01-21T16:12:24.645+00:00",
        "state": 0,
        "mixer": {
            "id": 1,
            "name": "30",
            "volume": 30
        },
        "id": 5057
    },
    {
        "sections": [
            {
                "sectionId": 6,
                "weight": 2120,
                "actualWeight": 0,
                "section": {
                    "id": 6,
                    "name": "23",
                    "feedingPlanId": 10,
                    "feedingPlan": {
                        "id": 10,
                        "name": "Д - 1 50/50 %",
                        "rationId": 2,
                        "ration": {
                            "id": 2,
                            "name": "Д - 1",
                            "ingredients": [
                                {
                                    "ingredientId": 1,
                                    "dryWeight": 0.7,
                                    "ordinalNumber": 0,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 14,
                                    "dryWeight": 1,
                                    "ordinalNumber": 1,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 2,
                                    "dryWeight": 7.2,
                                    "ordinalNumber": 2,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 3,
                                    "dryWeight": 4,
                                    "ordinalNumber": 3,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 5,
                                    "dryWeight": 1.8,
                                    "ordinalNumber": 4,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 6,
                                    "dryWeight": 0.8,
                                    "ordinalNumber": 5,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 11,
                                    "dryWeight": 3.35,
                                    "ordinalNumber": 6,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 12,
                                    "dryWeight": 6.15,
                                    "ordinalNumber": 7,
                                    "ptoRotation": 0
                                }
                            ],
                            "isPremix": false,
                            "density": 370,
                            "waterWeight": 2.51,
                            "digiStarInterchangeCode": "D 1",
                            "compensationMode": 0,
                            "waterPtoRotation": 0
                        },
                        "parts": [
                            0.5,
                            0.5
                        ]
                    },
                    "physiologicalGroups": [
                        {
                            "physiologicalGroupId": 2,
                            "headCount": 110,
                            "physiologicalGroup": {
                                "id": 2,
                                "name": "Д - 1"
                            }
                        }
                    ],
                    "appetite": 0.74,
                    "ordinalNumber": 5,
                    "digiStarInterchangeCode": "23",
                    "mixerId": 1,
                    "notCombine": false,
                    "kind": 0
                },
                "ordinalNumber": 5
            },
            {
                "sectionId": 7,
                "weight": 2283,
                "actualWeight": 0,
                "section": {
                    "id": 7,
                    "name": "24",
                    "feedingPlanId": 10,
                    "feedingPlan": {
                        "id": 10,
                        "name": "Д - 1 50/50 %",
                        "rationId": 2,
                        "ration": {
                            "id": 2,
                            "name": "Д - 1",
                            "ingredients": [
                                {
                                    "ingredientId": 1,
                                    "dryWeight": 0.7,
                                    "ordinalNumber": 0,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 14,
                                    "dryWeight": 1,
                                    "ordinalNumber": 1,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 2,
                                    "dryWeight": 7.2,
                                    "ordinalNumber": 2,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 3,
                                    "dryWeight": 4,
                                    "ordinalNumber": 3,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 5,
                                    "dryWeight": 1.8,
                                    "ordinalNumber": 4,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 6,
                                    "dryWeight": 0.8,
                                    "ordinalNumber": 5,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 11,
                                    "dryWeight": 3.35,
                                    "ordinalNumber": 6,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 12,
                                    "dryWeight": 6.15,
                                    "ordinalNumber": 7,
                                    "ptoRotation": 0
                                }
                            ],
                            "isPremix": false,
                            "density": 370,
                            "waterWeight": 2.51,
                            "digiStarInterchangeCode": "D 1",
                            "compensationMode": 0,
                            "waterPtoRotation": 0
                        },
                        "parts": [
                            0.5,
                            0.5
                        ]
                    },
                    "physiologicalGroups": [
                        {
                            "physiologicalGroupId": 2,
                            "headCount": 111,
                            "physiologicalGroup": {
                                "id": 2,
                                "name": "Д - 1"
                            }
                        }
                    ],
                    "appetite": 0.79,
                    "ordinalNumber": 6,
                    "digiStarInterchangeCode": "24",
                    "mixerId": 1,
                    "notCombine": false,
                    "kind": 0
                },
                "ordinalNumber": 6
            },
            {
                "sectionId": 4,
                "weight": 2712,
                "actualWeight": 0,
                "section": {
                    "id": 4,
                    "name": "21",
                    "feedingPlanId": 10,
                    "feedingPlan": {
                        "id": 10,
                        "name": "Д - 1 50/50 %",
                        "rationId": 2,
                        "ration": {
                            "id": 2,
                            "name": "Д - 1",
                            "ingredients": [
                                {
                                    "ingredientId": 1,
                                    "dryWeight": 0.7,
                                    "ordinalNumber": 0,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 14,
                                    "dryWeight": 1,
                                    "ordinalNumber": 1,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 2,
                                    "dryWeight": 7.2,
                                    "ordinalNumber": 2,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 3,
                                    "dryWeight": 4,
                                    "ordinalNumber": 3,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 5,
                                    "dryWeight": 1.8,
                                    "ordinalNumber": 4,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 6,
                                    "dryWeight": 0.8,
                                    "ordinalNumber": 5,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 11,
                                    "dryWeight": 3.35,
                                    "ordinalNumber": 6,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 12,
                                    "dryWeight": 6.15,
                                    "ordinalNumber": 7,
                                    "ptoRotation": 0
                                }
                            ],
                            "isPremix": false,
                            "density": 370,
                            "waterWeight": 2.51,
                            "digiStarInterchangeCode": "D 1",
                            "compensationMode": 0,
                            "waterPtoRotation": 0
                        },
                        "parts": [
                            0.5,
                            0.5
                        ]
                    },
                    "physiologicalGroups": [
                        {
                            "physiologicalGroupId": 2,
                            "headCount": 112,
                            "physiologicalGroup": {
                                "id": 2,
                                "name": "Д - 1"
                            }
                        }
                    ],
                    "appetite": 0.93,
                    "ordinalNumber": 7,
                    "digiStarInterchangeCode": "21",
                    "mixerId": 1,
                    "notCombine": false,
                    "kind": 0
                },
                "ordinalNumber": 7
            },
            {
                "sectionId": 5,
                "weight": 2589,
                "actualWeight": 0,
                "section": {
                    "id": 5,
                    "name": "22",
                    "feedingPlanId": 10,
                    "feedingPlan": {
                        "id": 10,
                        "name": "Д - 1 50/50 %",
                        "rationId": 2,
                        "ration": {
                            "id": 2,
                            "name": "Д - 1",
                            "ingredients": [
                                {
                                    "ingredientId": 1,
                                    "dryWeight": 0.7,
                                    "ordinalNumber": 0,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 14,
                                    "dryWeight": 1,
                                    "ordinalNumber": 1,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 2,
                                    "dryWeight": 7.2,
                                    "ordinalNumber": 2,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 3,
                                    "dryWeight": 4,
                                    "ordinalNumber": 3,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 5,
                                    "dryWeight": 1.8,
                                    "ordinalNumber": 4,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 6,
                                    "dryWeight": 0.8,
                                    "ordinalNumber": 5,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 11,
                                    "dryWeight": 3.35,
                                    "ordinalNumber": 6,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 12,
                                    "dryWeight": 6.15,
                                    "ordinalNumber": 7,
                                    "ptoRotation": 0
                                }
                            ],
                            "isPremix": false,
                            "density": 370,
                            "waterWeight": 2.51,
                            "digiStarInterchangeCode": "D 1",
                            "compensationMode": 0,
                            "waterPtoRotation": 0
                        },
                        "parts": [
                            0.5,
                            0.5
                        ]
                    },
                    "physiologicalGroups": [
                        {
                            "physiologicalGroupId": 2,
                            "headCount": 113,
                            "physiologicalGroup": {
                                "id": 2,
                                "name": "Д - 1"
                            }
                        }
                    ],
                    "appetite": 0.88,
                    "ordinalNumber": 8,
                    "digiStarInterchangeCode": "22",
                    "mixerId": 1,
                    "notCombine": false,
                    "kind": 0
                },
                "ordinalNumber": 8
            }
        ],
        "stores": [
            {
                "storeId": 17,
                "weight": 152,
                "actualWeight": 0,
                "order": 0,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 17,
                    "name": "Солома пшеничная",
                    "ingredientId": 1,
                    "amount": 100189,
                    "ingredient": {
                        "id": 1,
                        "name": "Солома пшеничная",
                        "dryMatter": 0.86,
                        "type": 3,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": false,
                        "digiStarInterchangeCode": "SolPsh",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:29.696+00:00"
                    }
                }
            },
            {
                "storeId": 8,
                "weight": 217,
                "actualWeight": 0,
                "order": 1,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 8,
                    "name": "Сено",
                    "ingredientId": 14,
                    "amount": 12641,
                    "ingredient": {
                        "id": 14,
                        "name": "Сено",
                        "dryMatter": 0.86,
                        "type": 3,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": false,
                        "digiStarInterchangeCode": "Seno",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:27.709+00:00"
                    }
                }
            },
            {
                "storeId": 16,
                "weight": 1525,
                "actualWeight": 0,
                "order": 2,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 16,
                    "name": "Комбикорм № 20",
                    "ingredientId": 2,
                    "amount": 437246,
                    "ingredient": {
                        "id": 2,
                        "name": "Комбикорм № 20",
                        "dryMatter": 0.88,
                        "type": 1,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": false,
                        "digiStarInterchangeCode": "Kom 20",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:29.378+00:00"
                    }
                }
            },
            {
                "storeId": 15,
                "weight": 838,
                "actualWeight": 0,
                "order": 3,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 15,
                    "name": "Комбикорм № 11",
                    "ingredientId": 3,
                    "amount": 478905,
                    "ingredient": {
                        "id": 3,
                        "name": "Комбикорм № 11",
                        "dryMatter": 0.89,
                        "type": 1,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": false,
                        "digiStarInterchangeCode": "Kom 11",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:29.017+00:00"
                    }
                }
            },
            {
                "storeId": 13,
                "weight": 373,
                "actualWeight": 0,
                "order": 4,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 13,
                    "name": "Соя",
                    "ingredientId": 5,
                    "amount": 485263,
                    "ingredient": {
                        "id": 5,
                        "name": "Соя",
                        "dryMatter": 0.9,
                        "type": 1,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": false,
                        "digiStarInterchangeCode": "Soya",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:28.632+00:00"
                    }
                }
            },
            {
                "storeId": 12,
                "weight": 166,
                "actualWeight": 0,
                "order": 5,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 12,
                    "name": "Рапс",
                    "ingredientId": 6,
                    "amount": 490588,
                    "ingredient": {
                        "id": 6,
                        "name": "Рапс",
                        "dryMatter": 0.9,
                        "type": 1,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": false,
                        "digiStarInterchangeCode": "Raps",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:28.325+00:00"
                    }
                }
            },
            {
                "storeId": 4,
                "weight": 1561,
                "actualWeight": 0,
                "order": 6,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 4,
                    "name": "Сенаж 17",
                    "ingredientId": 11,
                    "amount": 632336,
                    "ingredient": {
                        "id": 11,
                        "name": "Сенаж",
                        "dryMatter": 0.4,
                        "type": 3,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": true,
                        "digiStarInterchangeCode": "Senazh",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:26.466+00:00"
                    }
                }
            },
            {
                "storeId": 1,
                "weight": 4408,
                "actualWeight": 0,
                "order": 7,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 1,
                    "name": "Силос",
                    "ingredientId": 12,
                    "amount": 2547973,
                    "ingredient": {
                        "id": 12,
                        "name": "Силос",
                        "dryMatter": 0.26,
                        "type": 3,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": true,
                        "digiStarInterchangeCode": "Silos",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:26.225+00:00"
                    }
                }
            }
        ],
        "feedingNumber": 1,
        "waterTargetWeight": 468,
        "waterActualWeight": 0,
        "dailyNumber": 11,
        "waterTargetPtoRotation": 0,
        "waterActualPtoRotation": 0,
        "date": "2019-01-21",
        "created": "2019-01-21T16:12:24.661+00:00",
        "state": 0,
        "mixer": {
            "id": 1,
            "name": "30",
            "volume": 30
        },
        "id": 5058
    },
    {
        "sections": [
            {
                "sectionId": 11,
                "weight": 3483,
                "actualWeight": 0,
                "section": {
                    "id": 11,
                    "name": "43",
                    "feedingPlanId": 10,
                    "feedingPlan": {
                        "id": 10,
                        "name": "Д - 1 50/50 %",
                        "rationId": 2,
                        "ration": {
                            "id": 2,
                            "name": "Д - 1",
                            "ingredients": [
                                {
                                    "ingredientId": 1,
                                    "dryWeight": 0.7,
                                    "ordinalNumber": 0,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 14,
                                    "dryWeight": 1,
                                    "ordinalNumber": 1,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 2,
                                    "dryWeight": 7.2,
                                    "ordinalNumber": 2,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 3,
                                    "dryWeight": 4,
                                    "ordinalNumber": 3,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 5,
                                    "dryWeight": 1.8,
                                    "ordinalNumber": 4,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 6,
                                    "dryWeight": 0.8,
                                    "ordinalNumber": 5,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 11,
                                    "dryWeight": 3.35,
                                    "ordinalNumber": 6,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 12,
                                    "dryWeight": 6.15,
                                    "ordinalNumber": 7,
                                    "ptoRotation": 0
                                }
                            ],
                            "isPremix": false,
                            "density": 370,
                            "waterWeight": 2.51,
                            "digiStarInterchangeCode": "D 1",
                            "compensationMode": 0,
                            "waterPtoRotation": 0
                        },
                        "parts": [
                            0.5,
                            0.5
                        ]
                    },
                    "physiologicalGroups": [
                        {
                            "physiologicalGroupId": 2,
                            "headCount": 152,
                            "physiologicalGroup": {
                                "id": 2,
                                "name": "Д - 1"
                            }
                        }
                    ],
                    "appetite": 0.88,
                    "ordinalNumber": 10,
                    "digiStarInterchangeCode": "43",
                    "mixerId": 1,
                    "notCombine": false,
                    "kind": 0
                },
                "ordinalNumber": 10
            },
            {
                "sectionId": 12,
                "weight": 3814,
                "actualWeight": 0,
                "section": {
                    "id": 12,
                    "name": "44",
                    "feedingPlanId": 10,
                    "feedingPlan": {
                        "id": 10,
                        "name": "Д - 1 50/50 %",
                        "rationId": 2,
                        "ration": {
                            "id": 2,
                            "name": "Д - 1",
                            "ingredients": [
                                {
                                    "ingredientId": 1,
                                    "dryWeight": 0.7,
                                    "ordinalNumber": 0,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 14,
                                    "dryWeight": 1,
                                    "ordinalNumber": 1,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 2,
                                    "dryWeight": 7.2,
                                    "ordinalNumber": 2,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 3,
                                    "dryWeight": 4,
                                    "ordinalNumber": 3,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 5,
                                    "dryWeight": 1.8,
                                    "ordinalNumber": 4,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 6,
                                    "dryWeight": 0.8,
                                    "ordinalNumber": 5,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 11,
                                    "dryWeight": 3.35,
                                    "ordinalNumber": 6,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 12,
                                    "dryWeight": 6.15,
                                    "ordinalNumber": 7,
                                    "ptoRotation": 0
                                }
                            ],
                            "isPremix": false,
                            "density": 370,
                            "waterWeight": 2.51,
                            "digiStarInterchangeCode": "D 1",
                            "compensationMode": 0,
                            "waterPtoRotation": 0
                        },
                        "parts": [
                            0.5,
                            0.5
                        ]
                    },
                    "physiologicalGroups": [
                        {
                            "physiologicalGroupId": 2,
                            "headCount": 151,
                            "physiologicalGroup": {
                                "id": 2,
                                "name": "Д - 1"
                            }
                        }
                    ],
                    "appetite": 0.97,
                    "ordinalNumber": 11,
                    "digiStarInterchangeCode": "44",
                    "mixerId": 1,
                    "notCombine": false,
                    "kind": 0
                },
                "ordinalNumber": 11
            },
            {
                "sectionId": 16,
                "weight": 3058,
                "actualWeight": 0,
                "section": {
                    "id": 16,
                    "name": "41",
                    "feedingPlanId": 10,
                    "feedingPlan": {
                        "id": 10,
                        "name": "Д - 1 50/50 %",
                        "rationId": 2,
                        "ration": {
                            "id": 2,
                            "name": "Д - 1",
                            "ingredients": [
                                {
                                    "ingredientId": 1,
                                    "dryWeight": 0.7,
                                    "ordinalNumber": 0,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 14,
                                    "dryWeight": 1,
                                    "ordinalNumber": 1,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 2,
                                    "dryWeight": 7.2,
                                    "ordinalNumber": 2,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 3,
                                    "dryWeight": 4,
                                    "ordinalNumber": 3,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 5,
                                    "dryWeight": 1.8,
                                    "ordinalNumber": 4,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 6,
                                    "dryWeight": 0.8,
                                    "ordinalNumber": 5,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 11,
                                    "dryWeight": 3.35,
                                    "ordinalNumber": 6,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 12,
                                    "dryWeight": 6.15,
                                    "ordinalNumber": 7,
                                    "ptoRotation": 0
                                }
                            ],
                            "isPremix": false,
                            "density": 370,
                            "waterWeight": 2.51,
                            "digiStarInterchangeCode": "D 1",
                            "compensationMode": 0,
                            "waterPtoRotation": 0
                        },
                        "parts": [
                            0.5,
                            0.5
                        ]
                    },
                    "physiologicalGroups": [
                        {
                            "physiologicalGroupId": 2,
                            "headCount": 145,
                            "physiologicalGroup": {
                                "id": 2,
                                "name": "Д - 1"
                            }
                        }
                    ],
                    "appetite": 0.81,
                    "ordinalNumber": 16,
                    "digiStarInterchangeCode": "41",
                    "mixerId": 1,
                    "notCombine": false,
                    "kind": 0
                },
                "ordinalNumber": 16
            }
        ],
        "stores": [
            {
                "storeId": 17,
                "weight": 162,
                "actualWeight": 0,
                "order": 0,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 17,
                    "name": "Солома пшеничная",
                    "ingredientId": 1,
                    "amount": 100189,
                    "ingredient": {
                        "id": 1,
                        "name": "Солома пшеничная",
                        "dryMatter": 0.86,
                        "type": 3,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": false,
                        "digiStarInterchangeCode": "SolPsh",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:29.696+00:00"
                    }
                }
            },
            {
                "storeId": 8,
                "weight": 231,
                "actualWeight": 0,
                "order": 1,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 8,
                    "name": "Сено",
                    "ingredientId": 14,
                    "amount": 12641,
                    "ingredient": {
                        "id": 14,
                        "name": "Сено",
                        "dryMatter": 0.86,
                        "type": 3,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": false,
                        "digiStarInterchangeCode": "Seno",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:27.709+00:00"
                    }
                }
            },
            {
                "storeId": 16,
                "weight": 1627,
                "actualWeight": 0,
                "order": 2,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 16,
                    "name": "Комбикорм № 20",
                    "ingredientId": 2,
                    "amount": 437246,
                    "ingredient": {
                        "id": 2,
                        "name": "Комбикорм № 20",
                        "dryMatter": 0.88,
                        "type": 1,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": false,
                        "digiStarInterchangeCode": "Kom 20",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:29.378+00:00"
                    }
                }
            },
            {
                "storeId": 15,
                "weight": 894,
                "actualWeight": 0,
                "order": 3,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 15,
                    "name": "Комбикорм № 11",
                    "ingredientId": 3,
                    "amount": 478905,
                    "ingredient": {
                        "id": 3,
                        "name": "Комбикорм № 11",
                        "dryMatter": 0.89,
                        "type": 1,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": false,
                        "digiStarInterchangeCode": "Kom 11",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:29.017+00:00"
                    }
                }
            },
            {
                "storeId": 13,
                "weight": 398,
                "actualWeight": 0,
                "order": 4,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 13,
                    "name": "Соя",
                    "ingredientId": 5,
                    "amount": 485263,
                    "ingredient": {
                        "id": 5,
                        "name": "Соя",
                        "dryMatter": 0.9,
                        "type": 1,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": false,
                        "digiStarInterchangeCode": "Soya",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:28.632+00:00"
                    }
                }
            },
            {
                "storeId": 12,
                "weight": 177,
                "actualWeight": 0,
                "order": 5,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 12,
                    "name": "Рапс",
                    "ingredientId": 6,
                    "amount": 490588,
                    "ingredient": {
                        "id": 6,
                        "name": "Рапс",
                        "dryMatter": 0.9,
                        "type": 1,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": false,
                        "digiStarInterchangeCode": "Raps",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:28.325+00:00"
                    }
                }
            },
            {
                "storeId": 4,
                "weight": 1665,
                "actualWeight": 0,
                "order": 6,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 4,
                    "name": "Сенаж 17",
                    "ingredientId": 11,
                    "amount": 632336,
                    "ingredient": {
                        "id": 11,
                        "name": "Сенаж",
                        "dryMatter": 0.4,
                        "type": 3,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": true,
                        "digiStarInterchangeCode": "Senazh",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:26.466+00:00"
                    }
                }
            },
            {
                "storeId": 1,
                "weight": 4703,
                "actualWeight": 0,
                "order": 7,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 1,
                    "name": "Силос",
                    "ingredientId": 12,
                    "amount": 2547973,
                    "ingredient": {
                        "id": 12,
                        "name": "Силос",
                        "dryMatter": 0.26,
                        "type": 3,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": true,
                        "digiStarInterchangeCode": "Silos",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:26.225+00:00"
                    }
                }
            }
        ],
        "feedingNumber": 1,
        "waterTargetWeight": 499,
        "waterActualWeight": 0,
        "dailyNumber": 12,
        "waterTargetPtoRotation": 0,
        "waterActualPtoRotation": 0,
        "date": "2019-01-21",
        "created": "2019-01-21T16:12:24.678+00:00",
        "state": 0,
        "mixer": {
            "id": 1,
            "name": "30",
            "volume": 30
        },
        "id": 5059
    },
    {
        "sections": [
            {
                "sectionId": 17,
                "weight": 3787,
                "actualWeight": 0,
                "section": {
                    "id": 17,
                    "name": "42",
                    "feedingPlanId": 10,
                    "feedingPlan": {
                        "id": 10,
                        "name": "Д - 1 50/50 %",
                        "rationId": 2,
                        "ration": {
                            "id": 2,
                            "name": "Д - 1",
                            "ingredients": [
                                {
                                    "ingredientId": 1,
                                    "dryWeight": 0.7,
                                    "ordinalNumber": 0,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 14,
                                    "dryWeight": 1,
                                    "ordinalNumber": 1,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 2,
                                    "dryWeight": 7.2,
                                    "ordinalNumber": 2,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 3,
                                    "dryWeight": 4,
                                    "ordinalNumber": 3,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 5,
                                    "dryWeight": 1.8,
                                    "ordinalNumber": 4,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 6,
                                    "dryWeight": 0.8,
                                    "ordinalNumber": 5,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 11,
                                    "dryWeight": 3.35,
                                    "ordinalNumber": 6,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 12,
                                    "dryWeight": 6.15,
                                    "ordinalNumber": 7,
                                    "ptoRotation": 0
                                }
                            ],
                            "isPremix": false,
                            "density": 370,
                            "waterWeight": 2.51,
                            "digiStarInterchangeCode": "D 1",
                            "compensationMode": 0,
                            "waterPtoRotation": 0
                        },
                        "parts": [
                            0.5,
                            0.5
                        ]
                    },
                    "physiologicalGroups": [
                        {
                            "physiologicalGroupId": 2,
                            "headCount": 144,
                            "physiologicalGroup": {
                                "id": 2,
                                "name": "Д - 1"
                            }
                        }
                    ],
                    "appetite": 1.01,
                    "ordinalNumber": 17,
                    "digiStarInterchangeCode": "42",
                    "mixerId": 1,
                    "notCombine": false,
                    "kind": 0
                },
                "ordinalNumber": 17
            }
        ],
        "stores": [
            {
                "storeId": 17,
                "weight": 59,
                "actualWeight": 0,
                "order": 0,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 17,
                    "name": "Солома пшеничная",
                    "ingredientId": 1,
                    "amount": 100189,
                    "ingredient": {
                        "id": 1,
                        "name": "Солома пшеничная",
                        "dryMatter": 0.86,
                        "type": 3,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": false,
                        "digiStarInterchangeCode": "SolPsh",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:29.696+00:00"
                    }
                }
            },
            {
                "storeId": 8,
                "weight": 85,
                "actualWeight": 0,
                "order": 1,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 8,
                    "name": "Сено",
                    "ingredientId": 14,
                    "amount": 12641,
                    "ingredient": {
                        "id": 14,
                        "name": "Сено",
                        "dryMatter": 0.86,
                        "type": 3,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": false,
                        "digiStarInterchangeCode": "Seno",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:27.709+00:00"
                    }
                }
            },
            {
                "storeId": 16,
                "weight": 595,
                "actualWeight": 0,
                "order": 2,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 16,
                    "name": "Комбикорм № 20",
                    "ingredientId": 2,
                    "amount": 437246,
                    "ingredient": {
                        "id": 2,
                        "name": "Комбикорм № 20",
                        "dryMatter": 0.88,
                        "type": 1,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": false,
                        "digiStarInterchangeCode": "Kom 20",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:29.378+00:00"
                    }
                }
            },
            {
                "storeId": 15,
                "weight": 327,
                "actualWeight": 0,
                "order": 3,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 15,
                    "name": "Комбикорм № 11",
                    "ingredientId": 3,
                    "amount": 478905,
                    "ingredient": {
                        "id": 3,
                        "name": "Комбикорм № 11",
                        "dryMatter": 0.89,
                        "type": 1,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": false,
                        "digiStarInterchangeCode": "Kom 11",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:29.017+00:00"
                    }
                }
            },
            {
                "storeId": 13,
                "weight": 145,
                "actualWeight": 0,
                "order": 4,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 13,
                    "name": "Соя",
                    "ingredientId": 5,
                    "amount": 485263,
                    "ingredient": {
                        "id": 5,
                        "name": "Соя",
                        "dryMatter": 0.9,
                        "type": 1,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": false,
                        "digiStarInterchangeCode": "Soya",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:28.632+00:00"
                    }
                }
            },
            {
                "storeId": 12,
                "weight": 65,
                "actualWeight": 0,
                "order": 5,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 12,
                    "name": "Рапс",
                    "ingredientId": 6,
                    "amount": 490588,
                    "ingredient": {
                        "id": 6,
                        "name": "Рапс",
                        "dryMatter": 0.9,
                        "type": 1,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": false,
                        "digiStarInterchangeCode": "Raps",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:28.325+00:00"
                    }
                }
            },
            {
                "storeId": 4,
                "weight": 609,
                "actualWeight": 0,
                "order": 6,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 4,
                    "name": "Сенаж 17",
                    "ingredientId": 11,
                    "amount": 632336,
                    "ingredient": {
                        "id": 11,
                        "name": "Сенаж",
                        "dryMatter": 0.4,
                        "type": 3,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": true,
                        "digiStarInterchangeCode": "Senazh",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:26.466+00:00"
                    }
                }
            },
            {
                "storeId": 1,
                "weight": 1720,
                "actualWeight": 0,
                "order": 7,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 1,
                    "name": "Силос",
                    "ingredientId": 12,
                    "amount": 2547973,
                    "ingredient": {
                        "id": 12,
                        "name": "Силос",
                        "dryMatter": 0.26,
                        "type": 3,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": true,
                        "digiStarInterchangeCode": "Silos",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:26.225+00:00"
                    }
                }
            }
        ],
        "feedingNumber": 1,
        "waterTargetWeight": 183,
        "waterActualWeight": 0,
        "dailyNumber": 13,
        "waterTargetPtoRotation": 0,
        "waterActualPtoRotation": 0,
        "date": "2019-01-21",
        "created": "2019-01-21T16:12:24.694+00:00",
        "state": 0,
        "mixer": {
            "id": 1,
            "name": "30",
            "volume": 30
        },
        "id": 5060
    },
    {
        "sections": [
            {
                "sectionId": 24,
                "weight": 2039,
                "actualWeight": 0,
                "section": {
                    "id": 24,
                    "name": "51",
                    "feedingPlanId": 22,
                    "feedingPlan": {
                        "id": 22,
                        "name": "Д - 3 50/50%",
                        "rationId": 11,
                        "ration": {
                            "id": 11,
                            "name": "Д - 3",
                            "ingredients": [
                                {
                                    "ingredientId": 14,
                                    "dryWeight": 2,
                                    "ordinalNumber": 0,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 16,
                                    "dryWeight": 3.5,
                                    "ordinalNumber": 1,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 2,
                                    "dryWeight": 2,
                                    "ordinalNumber": 2,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 6,
                                    "dryWeight": 1,
                                    "ordinalNumber": 3,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 11,
                                    "dryWeight": 6.75,
                                    "ordinalNumber": 4,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 12,
                                    "dryWeight": 6.75,
                                    "ordinalNumber": 5,
                                    "ptoRotation": 0
                                }
                            ],
                            "isPremix": false,
                            "density": 380,
                            "waterWeight": 0,
                            "digiStarInterchangeCode": "D 3",
                            "compensationMode": 0,
                            "waterPtoRotation": 0
                        },
                        "parts": [
                            0.5,
                            0.5
                        ]
                    },
                    "physiologicalGroups": [
                        {
                            "physiologicalGroupId": 14,
                            "headCount": 105,
                            "physiologicalGroup": {
                                "id": 14,
                                "name": "Д - 3"
                            }
                        }
                    ],
                    "appetite": 0.74,
                    "ordinalNumber": 24,
                    "digiStarInterchangeCode": "51",
                    "mixerId": 1,
                    "notCombine": false,
                    "kind": 0
                },
                "ordinalNumber": 24
            },
            {
                "sectionId": 23,
                "weight": 2603,
                "actualWeight": 0,
                "section": {
                    "id": 23,
                    "name": "52",
                    "feedingPlanId": 22,
                    "feedingPlan": {
                        "id": 22,
                        "name": "Д - 3 50/50%",
                        "rationId": 11,
                        "ration": {
                            "id": 11,
                            "name": "Д - 3",
                            "ingredients": [
                                {
                                    "ingredientId": 14,
                                    "dryWeight": 2,
                                    "ordinalNumber": 0,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 16,
                                    "dryWeight": 3.5,
                                    "ordinalNumber": 1,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 2,
                                    "dryWeight": 2,
                                    "ordinalNumber": 2,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 6,
                                    "dryWeight": 1,
                                    "ordinalNumber": 3,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 11,
                                    "dryWeight": 6.75,
                                    "ordinalNumber": 4,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 12,
                                    "dryWeight": 6.75,
                                    "ordinalNumber": 5,
                                    "ptoRotation": 0
                                }
                            ],
                            "isPremix": false,
                            "density": 380,
                            "waterWeight": 0,
                            "digiStarInterchangeCode": "D 3",
                            "compensationMode": 0,
                            "waterPtoRotation": 0
                        },
                        "parts": [
                            0.5,
                            0.5
                        ]
                    },
                    "physiologicalGroups": [
                        {
                            "physiologicalGroupId": 14,
                            "headCount": 121,
                            "physiologicalGroup": {
                                "id": 14,
                                "name": "Д - 3"
                            }
                        }
                    ],
                    "appetite": 0.82,
                    "ordinalNumber": 25,
                    "digiStarInterchangeCode": "52",
                    "mixerId": 1,
                    "notCombine": false,
                    "kind": 0
                },
                "ordinalNumber": 25
            }
        ],
        "stores": [
            {
                "storeId": 8,
                "weight": 206,
                "actualWeight": 0,
                "order": 0,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 8,
                    "name": "Сено",
                    "ingredientId": 14,
                    "amount": 12641,
                    "ingredient": {
                        "id": 14,
                        "name": "Сено",
                        "dryMatter": 0.86,
                        "type": 3,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": false,
                        "digiStarInterchangeCode": "Seno",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:27.709+00:00"
                    }
                }
            },
            {
                "storeId": 6,
                "weight": 348,
                "actualWeight": 0,
                "order": 1,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 6,
                    "name": "Комбикорм № 12",
                    "ingredientId": 16,
                    "amount": 5999,
                    "ingredient": {
                        "id": 16,
                        "name": "Комбикорм № 12",
                        "dryMatter": 0.89,
                        "type": 1,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": false,
                        "digiStarInterchangeCode": "Komb12",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:27.294+00:00"
                    }
                }
            },
            {
                "storeId": 16,
                "weight": 201,
                "actualWeight": 0,
                "order": 2,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 16,
                    "name": "Комбикорм № 20",
                    "ingredientId": 2,
                    "amount": 437246,
                    "ingredient": {
                        "id": 2,
                        "name": "Комбикорм № 20",
                        "dryMatter": 0.88,
                        "type": 1,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": false,
                        "digiStarInterchangeCode": "Kom 20",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:29.378+00:00"
                    }
                }
            },
            {
                "storeId": 12,
                "weight": 98,
                "actualWeight": 0,
                "order": 3,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 12,
                    "name": "Рапс",
                    "ingredientId": 6,
                    "amount": 490588,
                    "ingredient": {
                        "id": 6,
                        "name": "Рапс",
                        "dryMatter": 0.9,
                        "type": 1,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": false,
                        "digiStarInterchangeCode": "Raps",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:28.325+00:00"
                    }
                }
            },
            {
                "storeId": 4,
                "weight": 1493,
                "actualWeight": 0,
                "order": 4,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 4,
                    "name": "Сенаж 17",
                    "ingredientId": 11,
                    "amount": 632336,
                    "ingredient": {
                        "id": 11,
                        "name": "Сенаж",
                        "dryMatter": 0.4,
                        "type": 3,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": true,
                        "digiStarInterchangeCode": "Senazh",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:26.466+00:00"
                    }
                }
            },
            {
                "storeId": 1,
                "weight": 2297,
                "actualWeight": 0,
                "order": 5,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 1,
                    "name": "Силос",
                    "ingredientId": 12,
                    "amount": 2547973,
                    "ingredient": {
                        "id": 12,
                        "name": "Силос",
                        "dryMatter": 0.26,
                        "type": 3,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": true,
                        "digiStarInterchangeCode": "Silos",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:26.225+00:00"
                    }
                }
            }
        ],
        "feedingNumber": 1,
        "dailyNumber": 14,
        "date": "2019-01-21",
        "created": "2019-01-21T16:12:24.711+00:00",
        "state": 0,
        "mixer": {
            "id": 1,
            "name": "30",
            "volume": 30
        },
        "id": 5061
    },
    {
        "sections": [
            {
                "sectionId": 26,
                "weight": 2120,
                "actualWeight": 0,
                "section": {
                    "id": 26,
                    "name": "31",
                    "feedingPlanId": 1,
                    "feedingPlan": {
                        "id": 1,
                        "name": "Д - 0 100%",
                        "rationId": 1,
                        "ration": {
                            "id": 1,
                            "name": "Д - 0",
                            "ingredients": [
                                {
                                    "ingredientId": 1,
                                    "dryWeight": 1,
                                    "ordinalNumber": 0,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 2,
                                    "dryWeight": 2.5,
                                    "ordinalNumber": 1,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 3,
                                    "dryWeight": 3,
                                    "ordinalNumber": 2,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 5,
                                    "dryWeight": 2,
                                    "ordinalNumber": 3,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 6,
                                    "dryWeight": 0.55,
                                    "ordinalNumber": 4,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 10,
                                    "dryWeight": 0.45,
                                    "ordinalNumber": 5,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 11,
                                    "dryWeight": 2.5,
                                    "ordinalNumber": 6,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 12,
                                    "dryWeight": 7,
                                    "ordinalNumber": 7,
                                    "ptoRotation": 0
                                }
                            ],
                            "isPremix": false,
                            "density": 380,
                            "waterWeight": 0,
                            "digiStarInterchangeCode": "D  0",
                            "compensationMode": 0,
                            "waterPtoRotation": 720
                        },
                        "parts": [
                            1
                        ]
                    },
                    "physiologicalGroups": [
                        {
                            "physiologicalGroupId": 1,
                            "headCount": 62,
                            "physiologicalGroup": {
                                "id": 1,
                                "name": "Д - 0"
                            }
                        }
                    ],
                    "appetite": 0.78,
                    "ordinalNumber": 1,
                    "digiStarInterchangeCode": "31",
                    "mixerId": 2,
                    "notCombine": false,
                    "kind": 0
                },
                "ordinalNumber": 1
            },
            {
                "sectionId": 1,
                "weight": 2120,
                "actualWeight": 0,
                "section": {
                    "id": 1,
                    "name": "32",
                    "feedingPlanId": 1,
                    "feedingPlan": {
                        "id": 1,
                        "name": "Д - 0 100%",
                        "rationId": 1,
                        "ration": {
                            "id": 1,
                            "name": "Д - 0",
                            "ingredients": [
                                {
                                    "ingredientId": 1,
                                    "dryWeight": 1,
                                    "ordinalNumber": 0,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 2,
                                    "dryWeight": 2.5,
                                    "ordinalNumber": 1,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 3,
                                    "dryWeight": 3,
                                    "ordinalNumber": 2,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 5,
                                    "dryWeight": 2,
                                    "ordinalNumber": 3,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 6,
                                    "dryWeight": 0.55,
                                    "ordinalNumber": 4,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 10,
                                    "dryWeight": 0.45,
                                    "ordinalNumber": 5,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 11,
                                    "dryWeight": 2.5,
                                    "ordinalNumber": 6,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 12,
                                    "dryWeight": 7,
                                    "ordinalNumber": 7,
                                    "ptoRotation": 0
                                }
                            ],
                            "isPremix": false,
                            "density": 380,
                            "waterWeight": 0,
                            "digiStarInterchangeCode": "D  0",
                            "compensationMode": 0,
                            "waterPtoRotation": 720
                        },
                        "parts": [
                            1
                        ]
                    },
                    "physiologicalGroups": [
                        {
                            "physiologicalGroupId": 1,
                            "headCount": 62,
                            "physiologicalGroup": {
                                "id": 1,
                                "name": "Д - 0"
                            }
                        }
                    ],
                    "appetite": 0.78,
                    "ordinalNumber": 2,
                    "digiStarInterchangeCode": "32",
                    "mixerId": 2,
                    "notCombine": false,
                    "kind": 0
                },
                "ordinalNumber": 2
            },
            {
                "sectionId": 3,
                "weight": 147,
                "actualWeight": 0,
                "section": {
                    "id": 3,
                    "name": "15",
                    "feedingPlanId": 1,
                    "feedingPlan": {
                        "id": 1,
                        "name": "Д - 0 100%",
                        "rationId": 1,
                        "ration": {
                            "id": 1,
                            "name": "Д - 0",
                            "ingredients": [
                                {
                                    "ingredientId": 1,
                                    "dryWeight": 1,
                                    "ordinalNumber": 0,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 2,
                                    "dryWeight": 2.5,
                                    "ordinalNumber": 1,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 3,
                                    "dryWeight": 3,
                                    "ordinalNumber": 2,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 5,
                                    "dryWeight": 2,
                                    "ordinalNumber": 3,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 6,
                                    "dryWeight": 0.55,
                                    "ordinalNumber": 4,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 10,
                                    "dryWeight": 0.45,
                                    "ordinalNumber": 5,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 11,
                                    "dryWeight": 2.5,
                                    "ordinalNumber": 6,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 12,
                                    "dryWeight": 7,
                                    "ordinalNumber": 7,
                                    "ptoRotation": 0
                                }
                            ],
                            "isPremix": false,
                            "density": 380,
                            "waterWeight": 0,
                            "digiStarInterchangeCode": "D  0",
                            "compensationMode": 0,
                            "waterPtoRotation": 720
                        },
                        "parts": [
                            1
                        ]
                    },
                    "physiologicalGroups": [
                        {
                            "physiologicalGroupId": 1,
                            "headCount": 7,
                            "physiologicalGroup": {
                                "id": 1,
                                "name": "Д - 0"
                            }
                        }
                    ],
                    "appetite": 0.48,
                    "ordinalNumber": 3,
                    "digiStarInterchangeCode": "15",
                    "mixerId": 2,
                    "notCombine": false,
                    "kind": 0
                },
                "ordinalNumber": 3
            }
        ],
        "stores": [
            {
                "storeId": 17,
                "weight": 116,
                "actualWeight": 0,
                "order": 0,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 17,
                    "name": "Солома пшеничная",
                    "ingredientId": 1,
                    "amount": 100189,
                    "ingredient": {
                        "id": 1,
                        "name": "Солома пшеничная",
                        "dryMatter": 0.86,
                        "type": 3,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": false,
                        "digiStarInterchangeCode": "SolPsh",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:29.696+00:00"
                    }
                }
            },
            {
                "storeId": 16,
                "weight": 284,
                "actualWeight": 0,
                "order": 1,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 16,
                    "name": "Комбикорм № 20",
                    "ingredientId": 2,
                    "amount": 437246,
                    "ingredient": {
                        "id": 2,
                        "name": "Комбикорм № 20",
                        "dryMatter": 0.88,
                        "type": 1,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": false,
                        "digiStarInterchangeCode": "Kom 20",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:29.378+00:00"
                    }
                }
            },
            {
                "storeId": 15,
                "weight": 337,
                "actualWeight": 0,
                "order": 2,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 15,
                    "name": "Комбикорм № 11",
                    "ingredientId": 3,
                    "amount": 478905,
                    "ingredient": {
                        "id": 3,
                        "name": "Комбикорм № 11",
                        "dryMatter": 0.89,
                        "type": 1,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": false,
                        "digiStarInterchangeCode": "Kom 11",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:29.017+00:00"
                    }
                }
            },
            {
                "storeId": 13,
                "weight": 222,
                "actualWeight": 0,
                "order": 3,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 13,
                    "name": "Соя",
                    "ingredientId": 5,
                    "amount": 485263,
                    "ingredient": {
                        "id": 5,
                        "name": "Соя",
                        "dryMatter": 0.9,
                        "type": 1,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": false,
                        "digiStarInterchangeCode": "Soya",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:28.632+00:00"
                    }
                }
            },
            {
                "storeId": 12,
                "weight": 61,
                "actualWeight": 0,
                "order": 4,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 12,
                    "name": "Рапс",
                    "ingredientId": 6,
                    "amount": 490588,
                    "ingredient": {
                        "id": 6,
                        "name": "Рапс",
                        "dryMatter": 0.9,
                        "type": 1,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": false,
                        "digiStarInterchangeCode": "Raps",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:28.325+00:00"
                    }
                }
            },
            {
                "storeId": 9,
                "weight": 45,
                "actualWeight": 0,
                "order": 5,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 9,
                    "name": "Глицерин",
                    "ingredientId": 10,
                    "amount": 1551,
                    "ingredient": {
                        "id": 10,
                        "name": "Глицерин",
                        "dryMatter": 1,
                        "type": 1,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": false,
                        "digiStarInterchangeCode": "Glizer",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:27.916+00:00"
                    }
                }
            },
            {
                "storeId": 4,
                "weight": 626,
                "actualWeight": 0,
                "order": 6,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 4,
                    "name": "Сенаж 17",
                    "ingredientId": 11,
                    "amount": 632336,
                    "ingredient": {
                        "id": 11,
                        "name": "Сенаж",
                        "dryMatter": 0.4,
                        "type": 3,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": true,
                        "digiStarInterchangeCode": "Senazh",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:26.466+00:00"
                    }
                }
            },
            {
                "storeId": 1,
                "weight": 2694,
                "actualWeight": 0,
                "order": 7,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 1,
                    "name": "Силос",
                    "ingredientId": 12,
                    "amount": 2547973,
                    "ingredient": {
                        "id": 12,
                        "name": "Силос",
                        "dryMatter": 0.26,
                        "type": 3,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": true,
                        "digiStarInterchangeCode": "Silos",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:26.225+00:00"
                    }
                }
            }
        ],
        "feedingNumber": 0,
        "dailyNumber": 15,
        "date": "2019-01-21",
        "created": "2019-01-21T16:12:24.728+00:00",
        "state": 0,
        "mixer": {
            "id": 2,
            "name": "15",
            "volume": 15
        },
        "id": 5062
    },
    {
        "sections": [
            {
                "sectionId": 9,
                "weight": 3878,
                "actualWeight": 0,
                "section": {
                    "id": 9,
                    "name": "Навес",
                    "feedingPlanId": 9,
                    "feedingPlan": {
                        "id": 9,
                        "name": "Т 2 - 6",
                        "rationId": 10,
                        "ration": {
                            "id": 10,
                            "name": "Т 2 - 6",
                            "ingredients": [
                                {
                                    "ingredientId": 14,
                                    "dryWeight": 0.35,
                                    "ordinalNumber": 0,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 15,
                                    "dryWeight": 2.1,
                                    "ordinalNumber": 1,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 2,
                                    "dryWeight": 0.4,
                                    "ordinalNumber": 2,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 11,
                                    "dryWeight": 0.35,
                                    "ordinalNumber": 3,
                                    "ptoRotation": 0
                                },
                                {
                                    "ingredientId": 12,
                                    "dryWeight": 0.8,
                                    "ordinalNumber": 4,
                                    "ptoRotation": 0
                                }
                            ],
                            "isPremix": false,
                            "density": 400,
                            "waterWeight": 0,
                            "digiStarInterchangeCode": "T 2 6",
                            "compensationMode": 0,
                            "waterPtoRotation": 0
                        },
                        "parts": [
                            1
                        ]
                    },
                    "physiologicalGroups": [
                        {
                            "physiologicalGroupId": 8,
                            "headCount": 374,
                            "physiologicalGroup": {
                                "id": 8,
                                "name": "Т 2-6"
                            }
                        }
                    ],
                    "appetite": 1.44,
                    "ordinalNumber": 9,
                    "digiStarInterchangeCode": "Naves",
                    "mixerId": 2,
                    "notCombine": false,
                    "kind": 0
                },
                "ordinalNumber": 9
            }
        ],
        "stores": [
            {
                "storeId": 8,
                "weight": 219,
                "actualWeight": 0,
                "order": 0,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 8,
                    "name": "Сено",
                    "ingredientId": 14,
                    "amount": 12641,
                    "ingredient": {
                        "id": 14,
                        "name": "Сено",
                        "dryMatter": 0.86,
                        "type": 3,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": false,
                        "digiStarInterchangeCode": "Seno",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:27.709+00:00"
                    }
                }
            },
            {
                "storeId": 7,
                "weight": 1285,
                "actualWeight": 0,
                "order": 1,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 7,
                    "name": "Комбикорм № 3",
                    "ingredientId": 15,
                    "amount": 6926,
                    "ingredient": {
                        "id": 15,
                        "name": "Комбикорм № 3",
                        "dryMatter": 0.88,
                        "type": 1,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": false,
                        "digiStarInterchangeCode": "Komb 3",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:27.493+00:00"
                    }
                }
            },
            {
                "storeId": 16,
                "weight": 245,
                "actualWeight": 0,
                "order": 2,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 16,
                    "name": "Комбикорм № 20",
                    "ingredientId": 2,
                    "amount": 437246,
                    "ingredient": {
                        "id": 2,
                        "name": "Комбикорм № 20",
                        "dryMatter": 0.88,
                        "type": 1,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": false,
                        "digiStarInterchangeCode": "Kom 20",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:29.378+00:00"
                    }
                }
            },
            {
                "storeId": 4,
                "weight": 471,
                "actualWeight": 0,
                "order": 3,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 4,
                    "name": "Сенаж 17",
                    "ingredientId": 11,
                    "amount": 632336,
                    "ingredient": {
                        "id": 11,
                        "name": "Сенаж",
                        "dryMatter": 0.4,
                        "type": 3,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": true,
                        "digiStarInterchangeCode": "Senazh",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:26.466+00:00"
                    }
                }
            },
            {
                "storeId": 1,
                "weight": 1657,
                "actualWeight": 0,
                "order": 4,
                "ptoRotations": 0,
                "actualPtoRotations": 0,
                "store": {
                    "id": 1,
                    "name": "Силос",
                    "ingredientId": 12,
                    "amount": 2547973,
                    "ingredient": {
                        "id": 12,
                        "name": "Силос",
                        "dryMatter": 0.26,
                        "type": 3,
                        "lossType": 0,
                        "lossCount": 0,
                        "dynamicDryMatter": true,
                        "digiStarInterchangeCode": "Silos",
                        "isUnderweight": false,
                        "created": "2018-10-22T11:39:26.225+00:00"
                    }
                }
            }
        ],
        "feedingNumber": 0,
        "dailyNumber": 16,
        "date": "2019-01-21",
        "created": "2019-01-21T16:12:24.746+00:00",
        "state": 0,
        "mixer": {
            "id": 2,
            "name": "15",
            "volume": 15
        },
        "id": 5063
    }
]'
            ;

        return $feeding_tasks;

    }
}
