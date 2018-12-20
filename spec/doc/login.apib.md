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
      ```
      [
          status: 200,
          message: "",
          data: [
            id: 1,
            projects: [
              {
                id: 1,
                name: "個人"
              },
              {
                id: 2,
                name: "共同"
              }
            ]
          ]    
      ]
      ```
      
  + Response 401 (application/json)
      ```
      [
          status: 401,
          message: "Login Failed!",
          data: null    
      ]
      ```
