# Group 商家

## 取得商家資訊清單 [/shops]
   
### 取得商家清單 [GET]
 
  + Response 200 (application/json)
    ```
    [
        status: 200,
        message: "",
        data: [
            {
                id: 1,
                name: "麥當勞"
            },
            {
                id: 2,
                name: "Costco"
            }
        ]    
    ]
    ```

## 商家 [/shop]
 
### 新增商家 [POST]

  + Request (application/json)
    ```
    {
        name: "屈臣氏" 
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
                  name: "屈臣氏"
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

### 修改商家 [PUT]

  + Request (application/json)
    ```
    {
        id: 2
        name: "家樂福" 
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
                  name: "家樂福"
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

### 刪除商家 [DELETE]

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
          data: null    
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
