# Assignment8

## Route Creation

- Create a route in your routes file (web.php or api.php based on your Laravel version)
```bash
Route::get('/profile/{id}', 'ProfileController@index');
```
## ProfileController

- Create a new controller named ProfileController using artisan:

```
php artisan make:controller ProfileController
```
## Method

```
index(Request $request)
```
## Parameters
```
$id (required)->id;
```
## Profile Data

  - Name: "Donal Trump"
  - Age: 75

## Cookie Details
   - Name: access_token
   - Value: 123-XYZ
   - Expiration: 1 minute
   - Path: /
   - Domain: (auto-detected from the server)
   - Secure: No
   - HTTP Only: Yes

   # Usage

   ## Route
   - Endpoint: /profile/{id}
   - Method: GET

   - Example Request

   ```
   GET /profile/123

   ```





 