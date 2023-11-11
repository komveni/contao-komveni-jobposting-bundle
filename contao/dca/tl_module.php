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
 * Frontend modules
 */
$GLOBALS['TL_DCA']['tl_module']['palettes'][JobpostingListingController::TYPE] = '{title_legend},name,headline,type;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID';
