<?php

namespace AppBundle\EventListener;

use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\HttpFoundation\Request;

class RequestListener
{
    public function onKernelRequest(GetResponseEvent $event)
    {
        $request = $event->getRequest();

        if ($this->isRequestJson($request))
        {
            $parameters = json_decode($request->getContent(),true);

            if($parameters === null)
            {
                $errorCode = json_last_error();

                if($errorCode !== JSON_ERROR_NONE)
                {
                    throw new BadRequestHttpException(json_last_error_msg(), null, $errorCode);
                }
            }

            if(is_array($parameters))
            {
                $request->request->add($parameters);
            }
        }
    }

    private function isRequestJson(Request $request)
    {
        return (strpos($request->headers->get('content-type'), 'application/json') !== false);
    }
}