<?php

/*
 * This file is part of contao-komveni-jobposting-bundle.
 *
 * (c) Thomas eder 2023 <thomas@komveni.com>
 * @license GPL-3.0-or-later
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 * @link https://github.com/komveni/contao-komveni-jobposting-bundle
 */

use Komveni\ContaoKomveniJobpostingBundle\Model\JobpostingModel;

/**
 * Backend modules
 */
$GLOBALS['BE_MOD']['jobposting_modules']['jobposting_collection'] = array(
    'tables' => array('tl_jobposting')
);

/**
 * Models
 */
$GLOBALS['TL_MODELS']['tl_jobposting'] = JobpostingModel::class;
