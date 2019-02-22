# RestFul-API

### Ecommerce Restful API

API Authentication (Passport) Setup Process: <br><br>
    &nbsp; &nbsp; ->composer require laravel/passport<br>
    &nbsp; &nbsp; ->php artisan migrate<br>
    &nbsp; &nbsp; ->php artisan passport:install<br>
    &nbsp; &nbsp; ->add the **Laravel\Passport\HasApiTokens** trait to your **App\User** model<br>
    &nbsp; &nbsp; ->you should call the **Passport::routes** method within the **boot** method of your  **AuthServiceProvider**<br>
    &nbsp; &nbsp; ->Finally, in your **config/auth.php** configuration file, you should set the **driver** option of the **api** authentication guard to **passport**

**Get token**
<img width="1440" alt="screen shot 2019-02-22 at 5 10 04 pm" src="https://user-images.githubusercontent.com/31072206/53238894-c2ba7400-36c4-11e9-9e0a-cfbf8de62b5c.png">
<br>
**Authorization**
<img width="1440" alt="screen shot 2019-02-22 at 5 10 17 pm" src="https://user-images.githubusercontent.com/31072206/53238911-cc43dc00-36c4-11e9-92de-a8364af736ee.png">
<br><br>
**Create New Product with HTTP Response**
<img width="1440" alt="screen shot 2019-02-22 at 7 28 42 pm" src="https://user-images.githubusercontent.com/31072206/53245519-1e422d00-36d8-11e9-8906-3f55a2d9f659.png">
<br>
**Update Product Details with HTTP Response**
<<img width="1440" alt="screen shot 2019-02-22 at 8 09 57 pm" src="https://user-images.githubusercontent.com/31072206/53247632-08d00180-36de-11e9-8114-472e2b2fc6de.png">
