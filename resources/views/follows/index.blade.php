<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
 <head>
  <x-app-layout>
    <x-slot-name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{__('プロフィール')}}
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto px-6">
        <x-primary-button class="mt-4 ml-4 mb-4">
            <a href='profiles/create'>プロフィールを編集する</a>
        </x-primary-button>
        
        @if(isset($follows))
        <x-primary-button class="mt-4 ml-4 mb-4">
            <a href="{{ route('unfollow',['user'=>$profile]) }}">
            フォローを解除
        </a>
        </x-primary-button>
        @else
        
        <x-primary-button class="mt-4 ml-4 mb-4">
            <a href="{{ route('follow',['user'=>$profile]) }}">
            フォロー
        </a>
        </x-primary-button>
        @endif
    </div>
  </x-app-layout>
 </head>
</html>