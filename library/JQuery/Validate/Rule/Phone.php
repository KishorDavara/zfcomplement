<?php
/**
 * Created by PhpStorm.
 * User: perdro
 * Date: 12/11/14
 * Time: 10:09
 */

namespace ZfComplement\JQuery\Validate\Rule;


class Phone extends AbstractRule
{
    use RuleTrait;

    protected $_role='phone';
    protected $_message = '';
    protected $_jsFile='validate.cpf.js';
}