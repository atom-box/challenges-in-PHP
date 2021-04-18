# Challenges
## Someone else's tests
In this case, someone else wrote the tests: [Exercism PHP](https://exercism.io/tracks/php). These run in phpunit
## My solutions
My solution code is mostly in the Service directory of the [ExercismBundle](https://github.com/atom-box/challenges-in-PHP/tree/master/src/ExercismBundle/Service).

## Deploy notes
PHPUnit installed (Installed twice: due to an error message during `Composer install` I reinstalled by the `wget` way)    
This was built with only the skeleton install of Symfony.  
PHPUnit useage:  
`./vendor/bin/phpunit src/ExercismBundle/Tests/hamming_test.php`

