# Rockout Framework



Rockout is a PHP mini-framework that helps you quickly write simple yet powerful web applications and APIs.

## Installation

Just clone that repo in a folder 
be sure to put your domain in the file **index.php** line 4 

```php
define('SITENAME', 'your domain here');
```
put your domain also in **gulpfile.js** line 9

```javascript
const domain = 'your domain here';
```
and if you gonna use https just change **index.php** line 5
```php
define('URL', 'http://' . SITENAME); 
```

set your database in **App/Config/Database.php** line 6 to 9
```php
private $data = array(
	"host" => "localhost",
	"user" => "root",
	"pass" => "root",
	"name" => "users"
);
```

if you want to be capable of use the gulpfile you already have the configuration setted, only need to install the dependencies
```bash
$ npm install
```
and 

```bash
$ bower install
```
With it you have Rockout and all required dependencies.

## Usage

Once the mini-framework and depedencies are done you just can start gulp and just worry about work in your proyect saving yourselft a bunch of time.

Create new controllers and elements are just average **OOP** 
```php
<?php namespace Controllers;
use \Config\Views as Views;

class home extends Views
{
	public function index()
	{
		$title = 'home';
		$this->view('home', compact('title'));
	}
}
```
## Tests

To execute the test suite, you'll need to install phpunit.

```bash
$ phpunit
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover security related issues, please email nelsoncoder@gmail.com instead of using the issue tracker.

## Credits
- [All Contributors](../../contributors)

## License

The Rockout Framework is licensed under the MIT license. See [License File](LICENSE.md) for more information.
