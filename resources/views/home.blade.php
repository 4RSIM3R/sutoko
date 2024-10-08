@extends('layouts.guest')

@section('content')
    <div class="bg-white">
        <main class="mx-auto w-full max-w-7xl px-6 pb-16 pt-10 sm:pb-24 lg:px-8">
            <img class="mx-auto h-10 w-auto sm:h-12" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                alt="Your Company">
            <div class="mx-auto mt-8 max-w-2xl text-center">
                <h1 class="mt-4 text-xl font-bold tracking-tight text-gray-900">This page does not exist</h1>
                <p class="mt-2 text-sm text-gray-600">Sorry, we couldn’t find the
                    page you’re looking for.</p>
            </div>
            <div class="mx-auto mt-16 flow-root max-w-lg sm:mt-20">
                <h2 class="sr-only">Popular pages</h2>
                <ul role="list" class="-mt-6 divide-y divide-gray-900/5 border-b border-gray-900/5">
                    <li class="relative flex gap-x-6 py-3">
                        <div
                            class="flex h-10 w-10 flex-none items-center justify-center rounded-lg shadow-sm ring-1 ring-gray-900/10">
                            <svg class="h-6 w-6 text-indigo-600" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                <path
                                    d="M11.25 4.533A9.707 9.707 0 006 3a9.735 9.735 0 00-3.25.555.75.75 0 00-.5.707v14.25a.75.75 0 001 .707A8.237 8.237 0 016 18.75c1.995 0 3.823.707 5.25 1.886V4.533zM12.75 20.636A8.214 8.214 0 0118 18.75c.966 0 1.89.166 2.75.47a.75.75 0 001-.708V4.262a.75.75 0 00-.5-.707A9.735 9.735 0 0018 3a9.707 9.707 0 00-5.25 1.533v16.103z" />
                            </svg>
                        </div>
                        <div class="flex-auto">
                            <h3 class="text-sm font-semibold leading-6 text-gray-900">
                                <a href="#">
                                    <span class="absolute inset-0" aria-hidden="true"></span>
                                    Documentation
                                </a>
                            </h3>
                            <p class="mt-2 text-sm leading-6 text-gray-600">Learn how to integrate our tools with your app.
                            </p>
                        </div>
                        <div class="flex-none self-center">
                            <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                    </li>
                    <li class="relative flex gap-x-6 py-3">
                        <div
                            class="flex h-10 w-10 flex-none items-center justify-center rounded-lg shadow-sm ring-1 ring-gray-900/10">
                            <svg class="h-6 w-6 text-indigo-600" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                <path
                                    d="M11.25 4.533A9.707 9.707 0 006 3a9.735 9.735 0 00-3.25.555.75.75 0 00-.5.707v14.25a.75.75 0 001 .707A8.237 8.237 0 016 18.75c1.995 0 3.823.707 5.25 1.886V4.533zM12.75 20.636A8.214 8.214 0 0118 18.75c.966 0 1.89.166 2.75.47a.75.75 0 001-.708V4.262a.75.75 0 00-.5-.707A9.735 9.735 0 0018 3a9.707 9.707 0 00-5.25 1.533v16.103z" />
                            </svg>
                        </div>
                        <div class="flex-auto">
                            <h3 class="text-sm font-semibold leading-6 text-gray-900">
                                <a href="#">
                                    <span class="absolute inset-0" aria-hidden="true"></span>
                                    Documentation
                                </a>
                            </h3>
                            <p class="mt-2 text-sm leading-6 text-gray-600">Learn how to integrate our tools with your app.
                            </p>
                        </div>
                        <div class="flex-none self-center">
                            <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                    </li>
                    <li class="relative flex gap-x-6 py-3">
                        <div
                            class="flex h-10 w-10 flex-none items-center justify-center rounded-lg shadow-sm ring-1 ring-gray-900/10">
                            <svg class="h-6 w-6 text-indigo-600" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                <path
                                    d="M11.25 4.533A9.707 9.707 0 006 3a9.735 9.735 0 00-3.25.555.75.75 0 00-.5.707v14.25a.75.75 0 001 .707A8.237 8.237 0 016 18.75c1.995 0 3.823.707 5.25 1.886V4.533zM12.75 20.636A8.214 8.214 0 0118 18.75c.966 0 1.89.166 2.75.47a.75.75 0 001-.708V4.262a.75.75 0 00-.5-.707A9.735 9.735 0 0018 3a9.707 9.707 0 00-5.25 1.533v16.103z" />
                            </svg>
                        </div>
                        <div class="flex-auto">
                            <h3 class="text-sm font-semibold leading-6 text-gray-900">
                                <a href="#">
                                    <span class="absolute inset-0" aria-hidden="true"></span>
                                    Documentation
                                </a>
                            </h3>
                            <p class="mt-2 text-sm leading-6 text-gray-600">Learn how to integrate our tools with your app.
                            </p>
                        </div>
                        <div class="flex-none self-center">
                            <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                    </li>
                </ul>
            </div>
        </main>
    </div>
@endsection
