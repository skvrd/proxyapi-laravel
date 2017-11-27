# proxyapi-laravel
This package will allow to utilize free proxy API from www.proxyapi.me with the Laravel Service Provider

# Installation

Simply run following command on your laravel5.5+ application

```
composer require skvrd/proxyapi-laravel
```

Now you can access proxy instance like so:

```
 use Skvrd\ProxyAPI\Proxy;
 
 $proxy = new Proxy();
```


```$proxy->get();``` will return json object of proxy data.


# Using API

You can use proxyapi.me API whereever you want to.
simply call http://proxyapi.me/api/proxy to get random checked proxy.

There are no limitations currently, however there are around 300 rotating working proxy total.

Please create an issue if you have any questions.


