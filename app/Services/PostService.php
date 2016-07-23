<?php

declare(strict_types = 1);

namespace App\Services;

use App\Repositories\PostRepository;

class PostService
{
    /** @var  PostRepository */
    private $postRepository;

    /**
     * PostService constructor.
     * @param PostRepository $postRepository
     */
    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    /**
     * @param int $id
     * @param string $default
     * @return string
     */
    public function showTitle(int $id, string $default)
    {
        return $this->postRepository
            ->getTitle($id, $default)
            ->title;
    }
}