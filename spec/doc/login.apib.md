# Group Login

## Login [/login]

### 登入 [POST]

  + Request (application/json)
    ```
    {
        account: "sasa",
        password: "jdalgehogwhegowet"
    }
    ```

  + Response 200 (application/json)
    + Attributes (Base Object)
      + `data` (object)
          + `access_token`: dasgsgljsndlfsajoi23tnglkbdasg23 (string, required)
          + `token_type`: Bearer (string, required)

  + Response 401 (application/json)
    + Attributes (401 Error)
        + message: Account: sasa is not found.

  + Response 404 (application/json)
    + Attributes (404 Error)
        + message: Wrong Password.

  + Response 422 (application/json)
    + Attributes (422 Error)

  + Response 500 (application/json)
    + Attributes (500 Error)
