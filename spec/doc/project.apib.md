# data structures
## Project Object (object)
### Properties
+ `id`: 1 (number, required)
+ `name`: 共同 (string, required)

## Project User Object (object)
+ `user_id`: 1 (number, required)
+ `name`: Sasa (string, required)

# Group 專案

## 取得專案清單 [/projects]

### 取得專案清單 [GET]

  + Request
    + Headers
      ```
      Authorization: Bearer {access_token}
      ```

  + Response 200 (application/json)
    + Attributes (Base Object)
      + `data` (array[Project Object])

  + Response 401 (application/json)
    + Attributes (401 Error)

  + Response 500 (application/json)
    + Attributes (500 Error)

### 專案 User [/project-user/{project_id}]

### 取得專案 User 清單 [GET]

  + Parameters
    + project_id: `1` (number, required) - project id

  + Request
    + Headers
      ```
      Authorization: Bearer {access_token}
      ```

  + Response 200 (application/json)
    + Attributes (Base Object)
      + `data` (array[Project User Object])

  + Response 401 (application/json)
    + Attributes (401 Error)

  + Response 500 (application/json)
    + Attributes (500 Error)

### 加入專案 User [POST]

  + Parameters
    + project_id: `1` (number, required) - project id

  + Request
    + Headers
      ```
      Authorization: Bearer {access_token}
      ```
    + Body
      ```
      {
          "account": "sasa"
      }
      ```

  + Response 200 (application/json)
    + Attributes (Base Object)
      + `data` (array[])

  + Response 401 (application/json)
    + Attributes (401 Error)

  + Response 404 (application/json)
    + Attributes (404 Error)
        + message: Account: sasa is not found!

  + Response 500 (application/json)
    + Attributes (500 Error)

### 移除專案 User [DELETE]

  + Parameters
    + project_id: `1` (number, required) - project id

  + Request
    + Headers
      ```
      Authorization: Bearer {access_token}
      ```
    + Body
      ```
      {
          "account": "sasa"
      }
      ```

  + Response 200 (application/json)
    + Attributes (Base Object)
      + `data` (array[])

  + Response 401 (application/json)
    + Attributes (401 Error)

  + Response 404 (application/json)
    + Attributes (404 Error)
        + message: Account: sasa is not found!

  + Response 500 (application/json)
    + Attributes (500 Error)
