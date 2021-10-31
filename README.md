# persian-pdf

This is a project create Persian pdf with laravel by the using of [niklasravnsborg](https://github.com/niklasravnsborg/laravel-pdf) library which is mPDF wrapper.

# About the package
This package supports auto-discovery features of Laravel 5.5+, You only need to manually add the service provider and alias if working on Laravel version lower then 5.5

## Installation
Require this package in your `composer.json` or install it by running:
```
composer require niklasravnsborg/laravel-pdf

```
To start using Laravel, add the Service Provider and the Facade to your `config/app.php`:
```
'providers' => [
	// ...
	niklasravnsborg\LaravelPdf\PdfServiceProvider::class
]
```
```
'aliases' => [
	// ...
	'PDF' => niklasravnsborg\LaravelPdf\Facades\Pdf::class
]
```
Now, you should publish package's config file to your config directory by using following command:
```
php artisan vendor:publish
```
## Basic Usage
To use Laravel PDF add something like this to one of your controllers. You can pass data to a view in `/resources/views`.
```
use PDF;

function generate_pdf() {
	$data = [
		'foo' => 'bar'
	];
	$pdf = PDF::loadView('pdf.document', $data);
	return $pdf->stream('document.pdf');
}
```
For more information and other methods and setting visit the [niklasravnsborg](https://github.com/niklasravnsborg/laravel-pdf) page.

For Persian font setting in Persian language visit [virgool](https://virgool.io/laravel-community/%D9%84%D8%A7%D8%B1%D8%A7%D9%88%D9%84-pdf-%DA%A9%D8%A7%D8%B1%D8%A7%DA%A9%D8%AA%D8%B1-%D9%81%D8%A7%D8%B1%D8%B3%DB%8C-%D8%AF%D8%BA%D8%AF%D8%BA%D9%87-%D9%86%DB%8C%D8%B3%D8%AA-cuw16ywt90n8) page.

Hope it was useful. 🤗🤗😊😊😉😉

