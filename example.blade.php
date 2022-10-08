<x-app-layout>
    <x-slot name="header">
        <x-title>
            <h1 class="text-2xl text-bold">
                Card Type Radio Buttons
            </h1>
        </x-title>
    </x-slot>
    <script src="//unpkg.com/alpinejs"></script>
    <div
        class="md:max-w-4xl mx-auto pt-8 pb-6 md:flex md:justify-between items-end border-b-2 border-grey">
        <div class="text-2xl text-blue-800 mb-4 md:mb-0">
            Change Plan
        </div>
        <div>
            <a href="#" class="no-underline text-blue-800 hover:underline">Cancel your plan</a>
        </div>
    </div>
    <div x-data="{activePlan: ''}">
    <div  class="md:max-w-4xl mx-auto py-8 md:flex md:justify-between md:flex-wrap">
        <x-card-radio planName="Hobby" planGigs="1" planDollars="5" ></x-card-radio>
        <x-card-radio planName="Growth" planGigs="5" planDollars="10" ></x-card-radio>
        <x-card-radio planName="Business" planGigs="10" planDollars="15" ></x-card-radio>
        <x-card-radio planName="Enterprise" planGigs="20" planDollars="20" >
        </x-card-radio>
       
    </div>
     Active Plan: <span x-text="activePlan"></span>
    </div>
</x-app-layout>
