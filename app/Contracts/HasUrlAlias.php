<?php

namespace App\Contracts;

/**
 * Интерфейс для моделей, которые имеют алиасы.
 */
interface HasUrlAlias
{
    /**
     * Нужна реализация в модели, метод должен возвращать route() для детальной страницы.
     *
     * @return string
     */
    public function getDetailRoute(): string;

    /**
     * Нужна реализация в модели, метод должен возвращать префикс для алиаса.
     *
     * @return string
     */
    public function getAliasPrefix(): string;

    /**
     * @return void
     */
    public function createAlias(): void;

    /**
     * @return void
     */
    public function deleteAlias(): void;
}
