## rahasi

After installing API  GUARD PACKAGE YOU NEED TO REDIFINE IT IN THE SETTINGS
```php
  /** API KEYS NAMES DEFINITION */
    $apiKey->live_sk = 'live_sk'.$apiKey->generateKey();
    $apiKey->live_pk = 'live_pk'.$apiKey->generateKey();
    $apiKey->test_sk = 'test_sk'.$apiKey->generateKey();
    $apiKey->test_pk = 'test_pk'.$apiKey->generateKey();
    /** END OF THE DEFINITIONS */
```
