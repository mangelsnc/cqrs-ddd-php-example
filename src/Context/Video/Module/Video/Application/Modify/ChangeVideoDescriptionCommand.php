<?php

namespace CodelyTv\Context\Video\Module\Video\Application\Modify;

use CodelyTv\Shared\Domain\Bus\Command\Command;
use CodelyTv\Types\ValueObject\Uuid;

final class ChangeVideoDescriptionCommand extends Command
{
    private $videoId;
    private $description;

    public function __construct(Uuid $commandId, string $videoId, string $description)
    {
        parent::__construct($commandId);

        $this->videoId = $videoId;
        $this->description = $description;
    }

    public function getVideoId() : string
    {
        return $this->videoId;
    }

    public function getDescription() : string
    {
        return $this->description;
    }


}