# Group 帳戶

## 取得帳戶清單 [/accounts]

### 取得帳戶清單 [GET]

  + Request
    + Headers
      ```
      Authorization: Bearer {access_token}
      ```

  + Response 200 (application/json)
    + Attributes (Base Object)
      + `data` (array[Acount Object])

  + Response 401 (application/json)
    + Attributes (401 Error)

  + Response 500 (application/json)
    + Attributes (500 Error)
