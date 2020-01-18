<?php

namespace App\Http\View\Composers;

use App\Channel;
use Illuminate\View\View;

class ChannelComposer
{
    /**
     * The user repository implementation.
     *
     * @var Channel
     */
    protected $channel;

    /**
     * Create a new profile composer.
     *
     * @param  Channel  $channel
     * @return void
     */
    public function __construct(Channel $channel)
    {
        // Dependencies automatically resolved by service container...
        $this->channel = $channel;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('channel',$this->channel->get());
    }
}