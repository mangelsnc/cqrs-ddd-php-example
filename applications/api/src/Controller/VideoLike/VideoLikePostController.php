<?php

namespace CodelyTv\Api\Controller\VideoLike;

use CodelyTv\Api\Infrastructure\Controller\ApiController;
use CodelyTv\Api\Infrastructure\Response\ApiHttpCreatedResponse;
use Symfony\Component\HttpFoundation\Request;

final class VideoLikePostController extends ApiController
{
    public function __invoke(Request $request)
    {
        $command = new CreateVideoLikeCommand(

        );

        $this->dispatch($command);

        return new ApiHttpCreatedResponse();
    }

    protected function exceptions(): array
    {
        return [];
    }
}