<?php

namespace MainBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Route\RouteCollection;
use Sonata\AdminBundle\Show\ShowMapper;

class TextTranslateAdmin extends Admin
{

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('ky', 'string', array(
                'template' => 'MainBundle:Admin:text_raw_list.html.twig',
            ))
            ->add('ru', 'string', array(
                'template' => 'MainBundle:Admin:text_raw_list.html.twig',
            ))
            ->add('en', 'string', array(
                'template' => 'MainBundle:Admin:text_raw_list.html.twig',
            ))
            ->add('page', null, array('label' => 'Страница'))
            ->add('attribute')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'edit' => array(),
                )
            ))
        ;
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('ky', 'ckeditor', array(
                'attr' => array('class' => 'span10', 'rows' => 50)),
                array('required' => false))
            ->add('ru', 'ckeditor', array(
                'attr' => array('class' => 'span10', 'rows' => 50)),
                array('required' => false))
            ->add('en', 'ckeditor', array(
                'attr' => array('class' => 'span10', 'rows' => 50)),
                array('required' => false))

            ->add('page', null, array('label' => 'Страница'))
            ->add('attribute', null, array('required' => false))

        ;
    }


    protected function configureRoutes(RouteCollection $collection)
    {
//        $collection->remove('create');
        $collection->remove('delete');
    }
}
