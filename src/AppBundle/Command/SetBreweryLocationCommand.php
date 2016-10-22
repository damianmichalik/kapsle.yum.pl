<?php
/**
 * Created by PhpStorm.
 * User: Damian
 * Date: 2016-10-22
 * Time: 11:41
 */

namespace AppBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class SetBreweryLocationCommand extends ContainerAwareCommand
{

    protected function configure()
    {
        $this->setName('app:set-brewery-locations');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Zaczynam geokodowanie');
        $em = $this->getContainer()->get('doctrine')->getManager();
        $breweries = $this->getContainer()->get('doctrine')->getRepository('AppBundle:Brewery')->findAll();
        foreach ($breweries as $breweryItem) {
            $output->writeln('Geokodowanie dla browaru: '.$breweryItem->getName());
            $address = $breweryItem->getAddressToGeocode();
            $lat = null;
            $lng = null;
            try {
                $geocoderResult = $this->getContainer()
                    ->get('bazinga_geocoder.geocoder')
                    ->using('cache')->geocode($address);

                if ($geocoderResult->count() > 0) {
                    $lat = $geocoderResult->first()->getLatitude();
                    $lng = $geocoderResult->first()->getLongitude();
                    $breweryItem->setLat($lat);
                    $breweryItem->setLng($lng);
                    $em->persist($breweryItem);
                }
            } catch (\Exception $ex) {
                $lat = null;
                $lng = null;
            }
        }
        $em->flush();
        $output->writeln('Geokodowanie zakonczone');
    }
}
