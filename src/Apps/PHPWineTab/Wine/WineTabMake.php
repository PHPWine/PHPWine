<?php 

namespace PHPWineVanillaFlavour\Apps\PHPWineTab\Wine;

/**
 * @copyright (c) 2022 PHPWine\VanillaFlavour - PHPWineTab (Apps) v1.0 Cooked by nielsoffice 
 *
 * MIT License
 *
 * PHPWine\VanillaFlavour - PHPWineTab (Apps) v1.0 free software: you can redistribute it and/or modify.
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 *
 * @category   PHPWineTab
 * @package    PHPWineTab Apps of PHP Wine extend optimizer to crud features
 *            
 *            
 * @author    Leinner Zednanref <nielsoffice.wordpress.php@gmail.com>
 * @license   MIT License
 * @link      https://github.com/nielsofficeofficial/PHPWineTab
 * @link      https://github.com/nielsofficeofficial/PHPWine/blob/PHPWine_Vanilla_Flavour/README.md
 * @link      https://www.facebook.com/nielsofficeofficial
 * @version   v1.0 wine 2.0
 * @since     10.20.222
 *
 */

interface WineTabMake { 

    /**
     * Defined: @var @property array_Container_properties
     * @since 1.0.0.0 supprt PHPWine v2.0
     * @since 10.20.2022 **/ 
    public function TabTitle( array $Properties = [] ) :  void;

    /**
     * Defined: @var @property array_Container_properties
     * @since 1.0.0.0 supprt PHPWine v2.0
     * @since 10.20.2022 **/ 
    public function TabValue( array $Properties = [] ) :  void;

    /**
     * Defined: @var @property array_Container_properties
     * @since 1.0.0.0 supprt PHPWine v2.0
     * @since 10.20.2022 **/ 
    public function renderedTabsTitle() : void;
    
    /**
     * Defined: @var @property array_Container_properties
     * @since 1.0.0.0 supprt PHPWine v2.0
     * @since 10.20.2022 **/ 
    public function renderTabsTitle() : string;

    /**
     * Defined: @var @property array_Container_properties
     * @since 1.0.0.0 supprt PHPWine v2.0
     * @since 10.20.2022 **/ 
    public function renderedTabsValue() : void;

    /**
     * Defined: @var @property array_Container_properties
     * @since 1.0.0.0 supprt PHPWine v2.0
     * @since 10.20.2022 **/ 
    public function renderTabsValue() : string;


}