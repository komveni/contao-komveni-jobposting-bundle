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

namespace Komveni\ContaoKomveniJobpostingBundle\Controller\ContentElement;

use Contao\ContentModel;
use Contao\CoreBundle\Controller\ContentElement\AbstractContentElementController;
use Contao\CoreBundle\DependencyInjection\Attribute\AsContentElement;
use Contao\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

#[AsContentElement(category: 'jobposting_elements', template: 'ce_jobposting_listing')]
class JobpostingListingController extends AbstractContentElementController
{
    public const TYPE = 'jobposting_listing';

    protected function getResponse(Template $template, ContentModel $model, Request $request): Response
    {
        $template->text = $model->text;

        return $template->getResponse();
    }
}
