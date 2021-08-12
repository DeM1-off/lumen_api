# Lumen PHP Framework
packages used-> 
- flipbox/lumen-generator
- guzzlehttp/guzzle
- illuminate/mail
- illuminate/notifications
- tymon/jwt-auth
## Example Preview
post-> create new user
-  https://domain.com/api/user/register


 controller AuthController.php, Model User 
  seed UserSeed, Factory UserFactory
- post-> login
-  https://domain.com/api/user/sign-in


  controller PasswordController, Model User 
- post-> Send new password in email
- https://domain.com/api/user/recover-password
- post-> Reset new password
- https://domain.com/api/user/reset

controller CompanyController.php, Model Company 
  seed CompanySeed, Factory CompanyFactory,CompanyResource
- get->  company user
- https://domain.com/api/user/companies
- post-> creaty new company for user
- https://domain.com/api/user/companies



## Requirements 

- PHP >= 7.4.0

## Installation

- Just clone the project to anywhere in your computer. 
-Run  composer install  <br>
- php artisan migrate 
- php artisam db:seed 

Now you are done. 
<br>

` php artisan serve ` and open the project on the browser. 

