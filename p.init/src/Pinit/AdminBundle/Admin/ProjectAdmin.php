<?php
namespace Pinit\AdminBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class ProjectAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
    $formMapper
        ->add('name', 'text', array('label' => 'Project Name'))
        ->add('description', 'entity', array('class' => 'Pinit\ProjectBundle\Entity\Project'));

    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
    $datagridMapper
        ->add('name')
        ->add('description');
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
    $listMapper
        ->addIdentifier('name')
        ->add('description');
    }
}
