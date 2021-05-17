# PHP-Digital-Certificate-Generator-
It's a simple PHP code to generate Digital Certificates,created using PHP Graphics Draw (GD ) and FPDF libraries.

![alt text](https://github.com/Code-Theft/PHP-Certificate-Generator-/blob/6720d90332ed3429f6f667bf8c0d70f27e34619a/demo/demo.png)
### How to Customize

	1.Change Font
		-add the path of  your random font  in `validate.php` line 15
		
	2.Change certificate
		-Upload your certificate layout to `assest` directory as `poster.jpg'
		or
		-add the path of the stock image in `validate.php` line 9
		
	3.Converting from JPG to PNG	
		-the current code is designed to generate JPEG image using PHP GD ,you can generate PNG image too
			Refer : `https://www.php.net/manual/en/function.imagepng.php' 
			
			
![alt text](https://github.com/Code-Theft/PHP-Certificate-Generator-/blob/8703c481e25d632187db9cc7602a614da9f47c2e/demo/demo1.png?raw=true)	
		
