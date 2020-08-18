<?php

declare(strict_types=1);

namespace Setono\SyliusFeedPlugin\Validator;

use Setono\SyliusFeedPlugin\Exception\UndefinedBlockException;
use Twig\Environment;

final class TemplateValidator implements TemplateValidatorInterface
{
    /** @var Environment */
    private $twig;

    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }

    public function validate(string $template): void
    {
        $templateWrapper = $this->twig->load($template);
        $requiredBlocks = ['extension', 'item'];

        foreach ($requiredBlocks as $requiredBlock) {
            if (!$templateWrapper->hasBlock($requiredBlock)) {
                throw new UndefinedBlockException($requiredBlock, $requiredBlocks);
            }
        }
    }
}
