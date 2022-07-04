<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

#[Route(path: '/')]
class IndexController
{
    public function __construct(
        private string $tempFilesFolder,
        private string $propertyPhotosFolder,
        private SluggerInterface $slugger,
    ) {
    }

    public function __invoke(): JsonResponse
    {
        dd($this->tempFilesFolder, $this->propertyPhotosFolder, $this->slugger);

        return new JsonResponse();
    }
}
