<?php

namespace Domolife\EnoceanBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;

use Domolife\EnoceanBundle\Entity\Device;

class FlyportController extends Controller
{
    public function getdataAction($data, Request $request)
    {
//        $url = '127.0.0.1:8021';
//        $ch = curl_init();
//        curl_setopt($ch, CURLOPT_URL, $url);
//        curl_setopt($ch, CURLOPT_HEADER, TRUE);
//        curl_setopt($ch, CURLOPT_NOBODY, TRUE); // remove body
//        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
//        $head = curl_exec($ch);
//        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
//        curl_close($ch);

        $data = json_decode($data, true);
        $em = $this->get('doctrine')->getEntityManager();

        $device = new Device();
        $device->setId($data['ID']);
        $device->setType($data['type']);
        $device->setData($data['data']);
        $device->setTime(new \DateTime('now', new \DateTimeZone('Europe/Paris')));
        $em->persist($device);
        $em->flush();

        return new Response('ok', 200);
    }

}
