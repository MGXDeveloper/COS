@extends('Operation.layouts.head')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @yield('second_title')
        </h2>
    </x-slot>

    @yield('contain')

</x-app-layout>    