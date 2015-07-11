# mgoogle
Laravel wrapper for MGoogle package.

Setup:

Add to your providers array in config/app.php

```
    MGoogleLaravel\MGoogleServiceProvider::class,
```

Run vendor:publish to generate the app/mgoogle.php configuration file.

```
    php artisan vendor:publish
```

This package simplifies the Google API usage to:

```
    $MGAPI = new MGAPI();
    if( $MGAPI ) {
        $CalendarAPI = $MGAPI->calendar();
        $calendars = $CalendarAPI->getCalendars();
    }
```


More in :

[Project page](http://google.mraiur.com)
[MGoogle Package](https://github.com/mraiur/mgoogle)
