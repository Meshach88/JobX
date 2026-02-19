<x-layout>
    @foreach($jobs as $job)
    <x-card class="mb-4">
        <div class="flex justify-between mb-4">
            <h2 class="text-lg font-medium">{{$job->title}}</h2>
            <div class="text-slate-500">${{number_format($job->salary)}}</div>
        </div>
        <p class="text-sm text-slate-500">
            {{ nl2br($job->description) }}
        </p>
    </x-card>
    @endforeach
</x-layout>