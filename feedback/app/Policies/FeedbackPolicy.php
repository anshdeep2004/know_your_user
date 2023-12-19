<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Feed;

class FeedbackPolicy
{
    /**
     * Create a new policy instance.
     */
    public function update(User $user, Feed $feedback_id): bool
    {
        return $feedback_id->user()->is($user);
    }
}
