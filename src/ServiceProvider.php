<?php
/**
 * This file is part of Formular.
 *
 * (c) Philippe Gerber
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace bigwhoop\Formular\Provider\Laravel;
use bigwhoop\Formular\Form\Bootstrap3Form;

/**
 * @author Philippe Gerber <philippe@bigwhoop.ch>
 */
class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    protected $defer = false;

    
    /**
     * {@inheritdoc}
     */
    public function boot()
    {
        $this->package('bigwhoop/formular');
    }
    

    /**
     * {@inheritdoc}
     */
    public function register()
    {
        $this->app['formular'] = function() {
            return new Bootstrap3Form([
                'csrf_element_name'  => '_token',
                'csrf_element_value' => \Session::token(),
            ]);
        };
    }
    

    /**
     * {@inheritdoc}
     */
    public function provides()
    {
        return [];
    }
}
