# Group 類別

## 取得類別清單 [/categories]

### 取得類別清單 [GET]

  + Request
    + Headers
      ```
      Authorization: Bearer {access_token}
      ```

  + Response 200 (application/json)
    + Attributes (Base Object)
      + `data` (array[Main Category Object])

  + Response 401 (application/json)
    + Attributes (401 Error)

  + Response 500 (application/json)
    + Attributes (500 Error)

## 類別 [/category/{type}]

### 新增類別 [POST]

  + Parameters
    + type: `main-category` (string, required) - category 類型，目前有 main-category 和 sub-category

  + Request (application/json)
    + Headers
      ```
      Authorization: Bearer {access_token}
      ```
    + Body
      ```
      {
          icon_id: 5,
          name: "圖書"
      }
      ```

  + Response 200 (application/json)
    + Attributes (Base Object)
        + `data` (Category Object)
            + id: 3 (number)
            + name: 圖書
            + icon_id: 5 (number)

  + Response 401 (application/json)
    + Attributes (401 Error)

  + Response 422 (application/json)
    + Attributes (422 Error)

  + Response 500 (application/json)
    + Attributes (500 Error)

## 針對單一類別 [/category/{type}/{id}]

### 修改類別 [PUT]

  + Parameters
    + type: `main-category` (string, required) - category 類型，目前有 main-category 和 sub-category
    + id: `3` (number, required) - category id

  + Request (application/json)
    + Headers
      ```
      Authorization: Bearer {access_token}
      ```
    + Body
      ```
      {
          icon_id: 5,
          name: "生活"
      }
      ```

  + Response 200 (application/json)
    + Attributes (Base Object)
        + `data` (Category Object)
            + id: 3 (number)
            + name: 生活
            + icon_id: 5 (number)

  + Response 401 (application/json)
    + Attributes (401 Error)

  + Response 422 (application/json)
    + Attributes (422 Error)

  + Response 500 (application/json)
    + Attributes (500 Error)

### 修改類別 [DELETE]

  + Parameters
    + type: `main-category` (string, required) - category 類型，目前有 main-category 和 sub-category
    + id: `3` (number, required) - category id

  + Request (application/json)
    + Headers
      ```
      Authorization: Bearer {access_token}
      ```

  + Response 200 (application/json)
    + Attributes (Base Object)

  + Response 401 (application/json)
    + Attributes (401 Error)

  + Response 422 (application/json)
    + Attributes (422 Error)

  + Response 500 (application/json)
    + Attributes (500 Error)
