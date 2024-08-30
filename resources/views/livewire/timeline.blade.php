<div>
    <div class="grid lg:grid-cols-2 md:grid-cols-1 grid-cols-1 gap-5 mt-3">
        <input wire:model="title" type="text" class="form-control" placeholder="Enter video Title">
        <input wire:model="url" type="text" class="form-control" placeholder="Enter video URL">
    </div>
    <h5>Add New</h5>
    <div class="grid lg:grid-cols-1 md:grid-cols-1 grid-cols-1 gap-5 mt-3">
        <textarea wire:model="description" cols="30" rows="4" class="form-control"></textarea>
    </div>
    <div>
        <label for="multiSelect" class="form-label">Blog</label>
        <select wire:model="categories" id="multiSelect1" class="select2 form-control w-full mt-2 py-2"
            multiple="multiple">
            <option value="option1" class="inline-block font-Inter font-normal text-sm text-slate-600">Option 1</option>
            <option value="option2" class="inline-block font-Inter font-normal text-sm text-slate-600">Option 2</option>
            <option value="option3" class="inline-block font-Inter font-normal text-sm text-slate-600">Option 3</option>
        </select>
    </div>
    <button wire:click="addTimelineItem" type="button">Add Timeline Item</button>
    <button wire:click="submitTimeline" type="button">Submit Timeline</button>
</div>
