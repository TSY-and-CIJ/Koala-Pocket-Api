# Group 商家

## 取得商家資訊清單 [/shops]

### 取得商家清單 [GET]

  + Request
    + Headers
      ```
      Authorization: Bearer {access_token}
      ```

  + Response 200 (application/json)
    + Attributes (Base Object)
      + `data` (array[Shop Object])

  + Response 401 (application/json)
    + Attributes (401 Error)

  + Response 500 (application/json)
    + Attributes (500 Error)

## 商家 [/shop]

### 新增商家 [POST]

  + Request (application/json)
    + Headers
      ```
      Authorization: Bearer {access_token}
      ```
    + Body
      ```
      {
          name: "costco"
      }
      ```

  + Response 200 (application/json)
      + Attributes (Base Object)
        + `data` (Shop Object)

  + Response 401 (application/json)
    + Attributes (401 Error)

  + Response 422 (application/json)
      + Attributes (422 Error)

  + Response 500 (application/json)
      + Attributes (500 Error)

## 針對單一商家 [/shop/{id}]

### 修改商家 [PUT]

  + Parameters
    + id: `1` (number, required) - category id

  + Request (application/json)
    + Headers
      ```
      Authorization: Bearer {access_token}
      ```
    + Body
      ```
      {
          name: "costco"
      }
      ```

  + Response 200 (application/json)
    + Attributes (Base Object)
      + `data` (Shop Object)

  + Response 401 (application/json)
    + Attributes (401 Error)

  + Response 422 (application/json)
    + Attributes (422 Error)

  + Response 500 (application/json)
    + Attributes (500 Error)

### 刪除商家 [DELETE]

  + Parameters
    + id: `1` (number, required) - category id

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
