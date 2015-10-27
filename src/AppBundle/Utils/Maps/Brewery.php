<?php

namespace AppBundle\Utils\Maps;

use Ivory\GoogleMap\Map;
use Ivory\GoogleMap\MapTypeId;
use Ivory\GoogleMap\Overlays\InfoWindow;

class Brewery extends Map {
    
    private $marker;
    
    public function __construct() {
        
        parent::__construct();

        $this->setPrefixJavascriptVariable('map_');
        $this->setHtmlContainerId('map_canvas');

        $this->setAsync(false);
                
        $this->setBound(-2.1, -3.9, 2.6, 1.4, true, true);

        $this->setMapOption('mapTypeId', MapTypeId::ROADMAP);
        $this->setMapOption('mapTypeId', 'roadmap');

        $this->setMapOption('disableDefaultUI', true);
        $this->setMapOption('disableDoubleClickZoom', true);
        $this->setMapOptions(array(
            'disableDefaultUI'       => true,
            'disableDoubleClickZoom' => true,
        ));
        
        $this->setLanguage('pl');
        
    }
    
    public function setMapZoom($zoom)
    {
        $this->setMapOption('zoom', (int)$zoom);
    }

    public function setMapDimension($width, $height) 
    {
        $this->setStylesheetOption('width', (int)$width . 'px');
        $this->setStylesheetOption('height', (int)$height . 'px');
        $this->setStylesheetOptions(array(
            'width'  => (int)$width . 'px',
            'height' => (int)$height . 'px'
        ));
    }
    
    public function setMarkerService($marker)
    {
        $this->marker = $marker;
    }
    
    public function addMarkersByGeocodedAddresses($geocodedAddresses, $windowContent)
    {
        foreach($geocodedAddresses as $result)
        {
            
            $infoWindow = new InfoWindow();
            $infoWindow->setContent($windowContent);

            // Position the marker
            $this->marker->setPosition($result->getGeometry()->getLocation());
            $this->setCenter($result->getGeometry()->getLocation());
            $this->marker->setInfoWindow($infoWindow);
            
            // Add the marker to the map
            $this->addMarker($this->marker);
        }   
    }
    
}
