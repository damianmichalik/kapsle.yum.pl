<?php
/**
 * Created by PhpStorm.
 * User: Damian
 * Date: 2017-03-19
 * Time: 09:31
 */

namespace AppBundle\Form\Type;

use AppBundle\Utils\MomentFormatConverter;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\OptionsResolver;
/**
 * Defines the custom form field type used to manipulate datetime values across
 * Bootstrap Date\Time Picker javascript plugin.
 *
 * See http://symfony.com/doc/current/cookbook/form/create_custom_field_type.html
 *
 * @author Yonel Ceruto <yonelceruto@gmail.com>
 */
class DateTimePickerType extends AbstractType
{
    private $formatConverter;

    public function __construct()
    {
        $this->formatConverter = new MomentFormatConverter();
    }
    /**
     * {@inheritdoc}
     */
    public function buildView(FormView $view, FormInterface $form, array $options)
    {
        $view->vars['attr']['data-date-format'] = $this->formatConverter->convert($options['format']);
        $view->vars['attr']['data-date-locale'] = \Locale::getDefault();
    }
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'widget' => 'single_text',
        ]);
    }
    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return DateTimeType::class;
    }
}