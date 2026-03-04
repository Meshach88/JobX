<div>
    <!-- Simplicity is an acquired taste. - Katharine Gerould -->
    <label for="{{ $name }}" class="mb-1 flex items-center">
        <input type="radio" name="{{ $name }}" id="{{ $name }}" value=""
            @checked(!request($name)) />
        <span class="ml-1">All</span>
    </label>
    @foreach($options as $option)
    <label for="{{ $option }}" class="mb-1 flex items-center">
        <input type="radio" name="{{ $name }}" id='{{ $option }}' value="{{ $option }}"
        @checked(request($name)=== $option ) />
        <span class="ml-1">{{Str::ucfirst($option)}}</span>
    </label>
    @endforeach
</div>