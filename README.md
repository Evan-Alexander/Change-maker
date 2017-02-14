# PHP Change Maker Webpage

#### _A webpage that tells you what coins to use for making change, 14 February 2017_

#### By _**Erica Wright & Jason Brown**_

## Description

This webpage will allow the user to enter an amount of change, the app will return the least amount of coins needed to create said change.

## Setup/Installation Requirements

1. _Fork and clone this repository from_ [gitHub]https://github.com/Evan-Alexander/Change-maker.git.
2. Run `composer install --prefer-source --no-interaction` from project root
3. Create a local server in the /web directory within the project folder using the command: __php -S localhost:8000__ (assuming you are using a mac).
4. Open the directory http://localhost:8000/ in any standard web browser.

## Specifications

|Behavior|Input|Output|
|--------|-----|------|
| Enter an amount of change. | ".50" | Two Quarters |
| Enter an amount of change. | ".45" | One quarter and two dimes |
| Enter an amount of change. | ".40" | One quarter, one nickel, and one dime. |
| Enter an amount of change. | ".41" | One quarter, one nickel, one dime, and one penny |

## Known Bugs

No known bugs.

## Support and contact details

Please contact ericaw21@gmail.com or jasontbrown99@gmail.com with questions or concerns.

## Technologies Used

* _HTML_
* _CSS_
* _Bootstrap_
* _PHP_
* _Silex_
* _Twig_
* _Composer_

## License

*MIT license*

Copyright (c) 2017 {**Erica Wright & Jason Brown**} All Rights Reserved.
