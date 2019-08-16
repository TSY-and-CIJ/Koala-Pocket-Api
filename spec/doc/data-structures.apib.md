# data structures

## Base Object (object)
### Properties
+ `status`: `200` (number, fixed-type, required)
+ `message` (string, fixed-type, required)
+ `data` (array[], fixed-type, required)

## Shop Object (object)
### Properties
+ `id`: `1` (number, required)
+ `name`: `costco` (string, required)

## Main Category Object (Category Object)
### Properties
+ `name`: 餐飲
+ `icon_id`: 1
+ `sub_category` (array, fixed-type, required)
    + (Category Object)
        + `id`: 1
        + `name`: 早餐
        + `icon_id`: null
    + (Category Object)
        + `id`: 2
        + `name`: 午餐
        + `icon_id`: 1


## Category Object (object)
### Properties
+ `id` (number, required)
+ `name`(string, required)
+ `icon_id` (number, required, nullable)

## Acount Object (object)
+ `id`: 1 (number, required)
+ `name`: 錢包 (string, required)
+ `account_type` (Acount Type Object)
+ `price`: 2000 (number, required)
+ `projects` (array, required)

## Acount Type Object (object)
+ `id`: 1 (number, required)
+ `name`: 現金 (string, required)
+ `icon_id` (number, required, nullable)

## 401 Error (Base Object)
### Properties
  + `status`: 401
  + `message`: Login Please!

## 404 Error (Base Object)
### Properties
  + `status`: 404
  + `message`: Something Not Found!

## 422 Error (Base Object)
### Properties
  + `status`: 422
  + `message`: Error Message!

## 500 Error (Base Object)
### Properties
  + `status`: 500
  + `message`: Error Message!
