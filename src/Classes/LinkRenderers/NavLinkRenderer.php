<?php

namespace LaraZeus\Sky\Classes\LinkRenderers;

use Illuminate\Database\Eloquent\Model;

abstract class NavLinkRenderer
{
    public static string $renders;

    public function __construct(
        protected array $item
    ) {}

    // TODO: something to control these classes for end-user?
    public static string $activeClasses = 'border-b border-b-secondary-500 text-secondary-500';
    public static string $defaultActiveClass = 'border-transparent';

    abstract public function getModel(): ?Model;

    abstract public function getLink(): ?string;

    abstract public function isActiveRoute(): bool;

    public function getActiveClass(): string
    {
        return $this->isActiveRoute() ?
                self::$activeClasses :
                self::$defaultActiveClass;
    }

    /**
     * @return array{}
     */
    public function getPreparedLink(string $classes = ''): array {
        return [
            'classes' => $classes . ' ' . $this->getActiveClass(),
            'target' => $this->item['data']['target'] ?? '_self',
            'link' => $this->getLink(),
            'label' => $this->item['label'],
            'wrap' => null,
            'wrapClass' => null,
        ];
    }
}
