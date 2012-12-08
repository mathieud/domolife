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
        $url = '127.0.0.1:8021';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HEADER, TRUE);
        curl_setopt($ch, CURLOPT_NOBODY, TRUE); // remove body
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $head = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

//        $em = $this->get('doctrine')->getEntityManager();
//
//        if ($data){
//            $data = json_decode($data);
//            $rep = $em->getRepository("DomolifeEnoceanBundle:Device");
//            if(is_array($res = $rep->find($data->ID))){
//
//            }
//            else{
//                $device = new Device();
//                $device->id = $data->ID;
//                $device->type = $data->type;
//                $em->persist();
//                $em->flush();
//            }
//        }

        return new Response('ok', 200);
    }

}
