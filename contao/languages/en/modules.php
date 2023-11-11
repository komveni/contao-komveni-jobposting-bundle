<?php

declare(strict_types=1);

/*
 * This file is part of contao-komveni-jobposting-bundle.
 *
 * (c) Thomas eder 2023 <thomas@komveni.com>
 * @license GPL-3.0-or-later
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 * @link https://github.com/komveni/contao-komveni-jobposting-bundle
 */

use Komveni\ContaoKomveniJobpostingBundle\Controller\FrontendModule\JobpostingListingController;

/**
 * Backend modules
 */
$GLOBALS['TL_LANG']['MOD']['jobposting_modules'] = 'jobposting';
$GLOBALS['TL_LANG']['MOD']['jobposting_collection'] = ['jobposting', 'jobposting Description'];

/**
 * Frontend modules
 */
$GLOBALS['TL_LANG']['FMD']['jobposting_modules'] = 'jobposting';
$GLOBALS['TL_LANG']['FMD'][JobpostingListingController::TYPE] = ['jobposting', 'jobposting description'];

