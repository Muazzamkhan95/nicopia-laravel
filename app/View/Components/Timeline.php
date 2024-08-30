<?php
// app/Http/Livewire/Timeline.php
namespace App\Http\Livewire;

use Livewire\Component;

class Timeline extends Component
{
    public $title;
    public $url;
    public $description;
    public $categories = [];

    public $timelineItems = [];

    public function addTimelineItem()
    {
        // Add the current form data to the timelineItems array
        $this->timelineItems[] = [
            'title' => $this->title,
            'url' => $this->url,
            'description' => $this->description,
            'categories' => $this->categories,
        ];

        // Reset form fields
        $this->title = '';
        $this->url = '';
        $this->description = '';
        $this->categories = [];
    }

    public function submitTimeline()
    {
        // Perform AJAX request using Livewire methods
        // For example, you can use HTTP client here to send the data to your Laravel route/controller
    }

    public function render()
    {
        return view('components.dashboard.timeline');
    }
}
