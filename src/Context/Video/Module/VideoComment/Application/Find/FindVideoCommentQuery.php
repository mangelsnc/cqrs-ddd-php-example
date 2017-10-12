<?php

namespace CodelyTv\Context\Video\Module\VideoComment\Application\Find;

use CodelyTv\Shared\Domain\Bus\Query\Query;

final class FindVideoCommentQuery implements Query
{
    private $id;

    public function __construct(string $id)
    {
        $this->id = $id;
    }

    public function id(): string
    {
        return $this->id;
    }
}