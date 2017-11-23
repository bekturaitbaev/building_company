<?php

namespace MainBundle\Services;


use Doctrine\ORM\EntityManager;

class MainService
{
    private $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function getWord($locale, $attribute)
    {
        $text = $this->em->getRepository('MainBundle:Translate')
            ->createQueryBuilder('tr')
            ->where('tr.attribute =:attribute')
            ->setParameter('attribute', $attribute)
            ->getQuery()
            ->getOneOrNullResult();

        if(!$text) return null;
        if ($locale == 'ky') {
            return $text->getKy();
        }
        if ($locale == 'ru') {
            return $text->getRu();
        }
        if ($locale == 'en') {
            return $text->getEn();
        }

        return null;
    }

    public function getText($locale, $attribute)
    {
        $text = $this->em->getRepository('MainBundle:TextTranslate')
            ->createQueryBuilder('tr')
            ->where('tr.attribute =:attribute')
            ->setParameter('attribute', $attribute)
            ->getQuery()
            ->getOneOrNullResult();

        if(!$text) return null;

        if ($locale == 'ky') {
            return $text->getKy();
        }
        if ($locale == 'ru') {
            return $text->getRu();
        }
        if ($locale == 'en') {
            return $text->getEn();
        }
        return null;
    }


    public function getPhoto($attribute)
    {
        $photo = $this->em->getRepository('MainBundle:Photo')
            ->createQueryBuilder('a')
            ->where('a.attribute =:attribute')
            ->setParameter('attribute', $attribute)
            ->getQuery()
            ->getOneOrNullResult();

        if(!$photo) return null;

        return $photo;
    }
}