<?php 

 namespace PHPWineOptimizedHtml\doctrine;

 /**
 * @copyright (c) 2023 Optimized Html Cooked by nielsoffice
 *
 * MIT License
 *
 * Optimized Html free software: you can redistribute it and/or modify.
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
 * @category   PHPLibrary Optimized HTML
 *
 *
 * @author    Leinner Zednanref <nielsoffice.wordpress.php@gmail.com>
 * @license   MIT License
 * @link      https://github.com/PHPWine/PHPWine/tree/main
 * @link      https://github.com/PHPWine/PHPWine/README.md
 * @link      https://phpwine.github.io/documents/
 * @version   v2.0
 * @since     10.26.2023
 * @since     11.05.2023
 *
 */

 Class Doctrine extends \PHPWineOptimizedHtml\Doctrine\Layout  {
  

    public function __construct(array ...$wine_layout)
    {

      parent::__construct(
      ...$wine_layout
    );

      
    }     

 }

    