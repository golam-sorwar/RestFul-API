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
