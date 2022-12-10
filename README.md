# magento-whoops
Whoops error handler for Magento 2

# Instalation:

Module yet is not available on Packagist. Please install it using local repo path:

1. Clone module locally:
``` git clone git@github.com:ikruchynskyi/magento-whoops.git magento-whoops```
2. From the root Magento project directory run: 
```composer config repositories.magento-whoops path path-to-magento-whoops-module```
3. Download module by running command:
```composer require ikruchynskyi/magento-whoops``` 
4. Enable module and register in the system:
```bin/magento module:enable Ikruchynskyi_Whoops && bin/magento setup:upgrade```


How it works:

Throw unhandled exception in any part of code, E.g:
```throw new \Exception("Whoops, something has happened...");```
