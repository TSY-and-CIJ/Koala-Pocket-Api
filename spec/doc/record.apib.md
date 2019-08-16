# data structures
## Record Object (object)
+ `id`: 1 (number, required)
+ `date`: 2019-08-13 (string, required)
+ `action`: 1 (number, required)
+ `account` (Acount Object, required)
+ `price`: 149 (number, required)
+ `project_id`: 1 (number, required)
+ `category` (Category Object, required)
+ `shop` (Shop Object, required, nullable)

# Group 紀錄

## 紀錄 [/record]

### 新增紀錄 [POST]

  + Request (application/json)
    ```
    {
        "date": "2019-08-13",
        "action": 1,
        "account_id": 1,
        "price": 149,
        "project_id": 1,
        "sub_category_id": 1,
        "shop": null
    }
    ```

  + Response 200 (application/json)
    + Attributes (Base Object)
      + `data` (Record Object)

  + Response 401 (application/json)
    + Attributes (401 Error)

  + Response 422 (application/json)
    + Attributes (422 Error)

  + Response 500 (application/json)
    + Attributes (500 Error)

## 單筆記錄 [/record/{id}]

### 取得紀錄 [GET]

  + Parameters
    + id: `1` (number, required) - record id

  + Request
    + Headers
      ```
      Authorization: Bearer {access_token}
      ```

  + Response 200 (application/json)
    + Attributes (Base Object)
      + `data` (Record Object)

  + Response 401 (application/json)
    + Attributes (401 Error)

  + Response 404 (application/json)
    + Attributes (404 Error)

  + Response 500 (application/json)
    + Attributes (500 Error)

### 修改紀錄 [PUT]

  + Parameters
    + id: `1` (number, required) - record id

  + Request
    + Headers
      ```
      Authorization: Bearer {access_token}
      ```

  + Request (application/json)
    ```
    {
        "date": "2019-08-13",
        "action": 1,
        "account_id": 1,
        "price": 149,
        "project_id": 1,
        "sub_category_id": 1,
        "shop": null
    }
    ```

  + Response 200 (application/json)
    + Attributes (Base Object)
      + `data` (Record Object)

  + Response 401 (application/json)
    + Attributes (401 Error)

  + Response 404 (application/json)
    + Attributes (404 Error)

  + Response 422 (application/json)
    + Attributes (422 Error)

  + Response 500 (application/json)
    + Attributes (500 Error)

### 刪除紀錄 [DELETE]

  + Parameters
    + id: `1` (number, required) - record id

  + Request
    + Headers
      ```
      Authorization: Bearer {access_token}
      ```
  + Response 200 (application/json)
    + Attributes (Base Object)

  + Response 401 (application/json)
    + Attributes (401 Error)

  + Response 500 (application/json)
    + Attributes (500 Error)
