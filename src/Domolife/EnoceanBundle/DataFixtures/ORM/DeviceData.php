<?php

namespace Domolife\EnoceanBundle\DataFixtures\ORM;

use Domolife\EnoceanBundle\Entity\Device;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class DeviceData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $d1 = new Device();
        $d1->setId('053FEA5');
        $d1->setName('Lampe du salon');
        $d1->setType('lamp');
        $d1->setData('on');
        $manager->persist($d1);

        $d2 = new Device();
        $d2->setId('053FEA6');
        $d2->setName('Lampe de l\'entrée');
        $d2->setType('lamp');
        $d2->setData('on');
        $manager->persist($d2);

        $d3 = new Device();
        $d3->setId('053FEA7');
        $d3->setName('Lampe de la salle de bain');
        $d3->setType('lamp');
        $d3->setData('off');
        $manager->persist($d3);

        $manager->flush();
    }
}