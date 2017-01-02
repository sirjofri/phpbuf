# phpbuf

a small php buffering package

## Introduction

This package is useful if you use heavy php files connecting multiple
sourcefiles. It stores the calculated files once and serves the stored files instead of the heavy ones. After updating the original, heavy files, the stored files are updated after the first request.

## Usage

In the folder of your webproject you can `git clone` the whole phpbuf project. Then change the `config.php` file to your needs. It should be self explaining.

After that simply include the phpbuf functionality to your php file that includes the heavy php files:

	include "./phpbuf/phpbuf.php";
	\phpbuf\incBuf("filename", true);

the `incBuf` line replaces your `include "file.php"` lines according to your needs.

## `incBuf`

`incBuf($filename, $buffered)` returns nothing.

`$filename` should be your filename (without path. just the filename plus extension).

`$buffered` is a boolean value. If `true` it will buffer and use the buffered version. If `false` it will always use your original heavy php file and behaves like the simple `include "filename.php"`.

## License

Just do with it what you want.
