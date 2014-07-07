
BILNA README

run conposer.phar install

changes log
1. changes monolog bundle version to 2.4.*
2. run composer.phar update symfony/monolog-bundle
3. on folder app/logs create folder for each logging mechanism. the structure will like :
	- api
		- error
		- info
	- db
		- error
		- info	
	- payment
		- error
		- info	
	- sys
		- error
		- info
4. log format
   	- Timestamp
	- Hostname
	- Process
	- Code Location
	- IP Address
	- Request ID
	- Parameter Value
	- Who Committed This	  