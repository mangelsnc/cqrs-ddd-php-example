<?php

namespace CodelyTv\Context\Video\Module\VideoLike\Application\Create;

use CodelyTv\Context\Video\Module\Video\Domain\VideoId;

final class CreateVideoLikeCommandHandler
{
    /**
     * @var VideoLikeCreator
     */
    private $creator;

    public function __construct(VideoLikeCreator $creator)
    {

        $this->creator = $creator;
    }

    public function __invoke(CreateVideoLikeCommand $command) : void
    {
        $id = new VideoLikeId($command->getVideoLikeId());
        $videoId = new VideoId($command->getVideoId());
        $userId = new UserId($command->getUserId());

        $this->creator->create($id, $videoId, $userId);
    }
}