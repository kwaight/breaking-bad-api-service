# Laravel Breaking Bad API Wrapper
API wrapper to connect to Breaking Bad.

## Install
Install the package by adding this to your composer.json file
```
    "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/kwaight/breaking-bad-api-service.git"
        }
    ],
    ...
    "require": {
        ...
        "kwaight/breaking-bad-api-service": "dev-master"
    },

```
 
Optionally load the config to change the base url
```
php artisan vendor:publish --tag=breaking-bad-api-config
```

## Usage
### Search Name
The search name method will allow you to search characters based on an input query string.
```
$service = new kwaight\BreakingBadApiService\BreakingBadService();
$service->searchCharactersByQuery('Walter');
```

Output is an array of character objects 
```
[
    {
        "char_id": 1,
        "name": "Walter White",
        "birthday": "09-07-1958",
        "occupation": [
            "High School Chemistry Teacher",
            "Meth King Pin"
        ],
        "img": "https://images.amcnetworks.com/amc.com/wp-content/uploads/2015/04/cast_bb_700x1000_walter-white-lg.jpg",
        "status": "Presumed dead",
        "nickname": "Heisenberg",
        "appearance": [1, 2, 3, 4, 5 ],
        "portrayed": "Bryan Cranston",
        "category": "Breaking Bad",
        "better_call_saul_appearance": [1, 2, 3, 4, 5 ]
    },
    {
        "char_id": 4,
        "name": "Walter White Jr.",
        "birthday": "07-08-1993",
        "occupation": [
            "Meth Dealer"
        ],
        "img": "https://media1.popsugar-assets.com/files/thumbor/WeLUSvbAMS_GL4iELYAUzu7Bpv0/fit-in/1024x1024/filters:format_auto-!!-:strip_icc-!!-/2018/01/12/910/n/1922283/fb758e62b5daf3c9_TCDBRBA_EC011/i/RJ-Mitte-Walter-White-Jr.jpg",
        "status": "Alive",
        "nickname": "Flynn",
        "appearance": [1, 2, 3, 4, 5 ],
        "portrayed": "RJ Mitte",
        "category": "Breaking Bad",
        "better_call_saul_appearance": [1, 2, 3, 4, 5 ]
    }
]
```
