<?php

namespace AppBundle\Utils\Maps;

use Ivory\GoogleMap\Map;
use Ivory\GoogleMap\MapTypeId;
use Ivory\GoogleMap\Overlays\InfoWindow;
use Ivory\GoogleMap\Controls\ControlPosition;
use Ivory\GoogleMap\Controls\ZoomControlStyle;
use Ivory\GoogleMap\Controls\MapTypeControlStyle;

class Brewery extends Map {
    
    private $marker;
    
    public function __construct($marker = null) {
        
        parent::__construct();
        
        $this->marker = $marker;
        
        $this->setMapOption('zoom', 12);
        $this->setMapDimension('100%', '300px');       
        $this->setPrefixJavascriptVariable('map_');
        $this->setHtmlContainerId('map_canvas');

        $this->setAsync(false);

        $this->setMapTypeControl(
            array(MapTypeId::ROADMAP, MapTypeId::SATELLITE),
            ControlPosition::TOP_RIGHT,
            MapTypeControlStyle::DEFAULT_
        );
        
        $this->setZoomControl(ControlPosition::TOP_LEFT, ZoomControlStyle::DEFAULT_);

        $this->setMapOption('disableDefaultUI', false);
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
        $this->setStylesheetOption('width', $width);
        $this->setStylesheetOption('height', $height);
        $this->setStylesheetOptions(array(
            'width'  => $width,
            'height' => $height
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
