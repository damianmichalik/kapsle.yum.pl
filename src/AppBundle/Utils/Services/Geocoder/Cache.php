<?php

namespace AppBundle\Utils\Services\Geocoder;

class Cache {
    
    protected $container;
    private $cache;
    private $geocoder;
    
    public function __construct($container) 
    {
        $this->container = $container;
        $this->cache = $container->get('doctrine_cache.providers.my_file_system_cache');
        $this->geocoder = $container->get('ivory_google_map.geocoder');
    }
    
    public function getGeocodedData($address, $cacheKey)
    {
        return $this->getFromCache($address, $cacheKey);
    }
    
    public function getFromCache($address, $cacheKey)
    {        
        $result = $this->cache->fetch($cacheKey);
        if ($result === false) {
            $result = $this->geocoder->geocode($address);
            $this->cache->save($cacheKey, $result);
        }  
        return $result;
    }
    
}
