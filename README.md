# ascii table

[![Latest Stable Version](https://poser.pugx.org/ltd-beget/ascii-table/version)](https://packagist.org/packages/ltd-beget/ascii-table) 
[![Total Downloads](https://poser.pugx.org/ltd-beget/ascii-table/downloads)](https://packagist.org/packages/ltd-beget/ascii-table)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/LTD-Beget/ascii-table/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/LTD-Beget/ascii-table/?branch=master)
[![License MIT](http://img.shields.io/badge/license-MIT-blue.svg?style=flat)](https://github.com/LTD-Beget/ascii-table/blob/master/LICENSE)

Php library with ascii table enum.

## Installation

```shell
composer require ltd-beget/ascii-table
```

## Usage
```php

<?php
    require(__DIR__ . '/vendor/autoload.php');
    
    use LTDBeget\ascii\AsciiChar;
    
    $backspace = AsciiChar::BACKSPACE();
    $backspace->getName();
    $backspace->getValue();
    $backspace->is(AsciiChar::BACKSPACE);
    $backspace->isControlChar();
    $backspace->isHorizontalSpace();
    $backspace->isVerticalSpace();
    $backspace->isWhiteSpace();
    $backspace->isPrintableChar();
    $backspace->isLetter();
    $backspace->isDigit();
    $backspace->isExtended();
```

## License
released under the MIT License.
See the [bundled LICENSE file](LICENSE) for details.
