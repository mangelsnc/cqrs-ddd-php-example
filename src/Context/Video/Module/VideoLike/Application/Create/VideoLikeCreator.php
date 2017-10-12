<?php

namespace CodelyTv\Context\Video\Module\VideoLike\Application\Create;

use CodelyTv\Context\Video\Module\Video\Domain\VideoId;

final class VideoLikeCreator
{
    /**
     * @var VideoLikeRepository
     */
    private $repository;

    public function __construct(VideoLikeRepository $repository)
    {
        $this->repository = $repository;
    }

    public function create(VideoLikeId $id, VideoId $videoId, UserId $userId)
    {
        $videoLike = VideoLike::like($id, $videoId, $userId);

        $this->repository->save($videoLike);
    }
}