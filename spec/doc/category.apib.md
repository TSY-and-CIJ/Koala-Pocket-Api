# Group 類別

## 取得類別清單 [/categories]

### 取得類別清單 [GET]

  + Response 200 (application/json)
    ```
    [
        status: 200,
        message: "",
        data: [
            {
                id: 1,
                icon_id: 1,
                name: "餐飲",
                sub_category: [
                    {
                        id: 1,
                        icon_id: null,
                        name: "早餐"
                    },
                    {
                        id: 2,
                        icon_id: 2,
                        name: "午餐"
                    },
                ]
            },
            {
                id: 2,
                icon_id: 3,
                name: "居家生活",
                sub_category: [
                    {
                        id: 3,
                        icon_id: 4,
                        name: "日用品"
                    }
                ]
            }
        ]    
    ]
    ```
    
## 類別 [/category/{type}]

### 新增類別 [POST]

  + Parameters
    + type: `main-category` (string, required) - category 類型，目前有 main-category 和 sub-category

  + Request (application/json)
    ```
    {
        icon_id: 5,
        name: "圖書"
    }
    ```
  
  + Response 200 (application/json)
      ```
      [
          status: 200,
          message: "",
          data: [
              {
                  id: 3,
                  icon_id: 5,
                  name: "圖書",
              }
          ]    
      ]
      ```
      
  + Response 422 (application/json)
      ```
      [
          status: 422,
          message: "Error message!",
          data: null    
      ]
      ```

### 修改類別 [PUT]

  + Parameters
    + type: `main-category` (string, required) - category 類型，目前有 main-category 和 sub-category

  + Request (application/json)
    ```
    {
        id: 2
        icon_id: 5, 
        name: "生活"
    }
    ```
  
  + Response 200 (application/json)
      ```
      [
          status: 200,
          message: "",
          data: [
              {
                  id: 2,
                  icon_id: 5,
                  name: "生活",
              }
          ]    
      ]
      ```
      
  + Response 422 (application/json)
      ```
      [
          status: 422,
          message: "Error message!",
          data: null    
      ]
      ```

### 修改類別 [DELETE]

  + Parameters
    + type: `main-category` (string, required) - category 類型，目前有 main-category 和 sub-category

  + Request (application/json)
    ```
    {
        id: 2
    }
    ```
  
  + Response 200 (application/json)
      ```
      [
          status: 200,
          message: "",
          data: null,
      ]
      ```
      
  + Response 422 (application/json)
      ```
      [
          status: 422,
          message: "Error message!",
          data: null    
      ]
      ```
