<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}

    <input wire:model="search" name="search" type="text" class="input search-input" list="mylist" placeholder="Ara.." />
@if(!empty($query))
    <datalist id="mylist">
    @foreach($datalist as $rs)
            <option value="{{$rs->title}}">{{$rs->category->title}}</option>
        @endforeach
    </datalist>
    @endif
</div>
