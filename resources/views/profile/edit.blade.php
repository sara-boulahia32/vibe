<x-app-layout>
    <x-slot name="header">
        <h2 class="font-light text-xl text-rose-100 leading-tight tracking-widest uppercase">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-10 bg-gradient-to-r from-gray-900 via-gray-800 to-gray-900 min-h-screen">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Main container with sidebar layout -->
            <div class="flex flex-col md:flex-row gap-6">
                <!-- Sidebar with profile navigation -->
                <div class="w-full md:w-1/4">
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <div class="p-4 bg-indigo-50">
                            <h3 class="text-indigo-800 font-semibold text-lg">Profile Settings</h3>
                        </div>
                        <div class="p-4">
                            <ul class="space-y-2">
                                <li class="px-3 py-2 bg-indigo-100 rounded-md text-indigo-700 font-medium">
                                    <i class="fa-solid fa-user mr-2"></i> Personal Info
                                </li>
                                <li class="px-3 py-2 text-gray-600 hover:bg-gray-100 rounded-md transition">
                                    <i class="fa-solid fa-shield-halved mr-2"></i> Security
                                </li>
                                <li class="px-3 py-2 text-gray-600 hover:bg-gray-100 rounded-md transition">
                                    <i class="fa-solid fa-bell mr-2"></i> Notifications
                                </li>
                                <li class="px-3 py-2 text-gray-600 hover:bg-gray-100 rounded-md transition">
                                    <i class="fa-solid fa-link mr-2"></i> Connected Apps
                                </li>
                                <li class="px-3 py-2 text-red-500 hover:bg-red-50 rounded-md transition">
                                    <i class="fa-solid fa-trash mr-2"></i> Delete Account
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <!-- Main content area -->
                <div class="w-full md:w-3/4 space-y-6">
                    <!-- Profile Information Card -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <div class="border-b border-gray-200">
                            <div class="px-6 py-4 flex justify-between items-center">
                                <h3 class="text-lg font-medium text-indigo-700">
                                    <i class="fa-solid fa-user-pen mr-2"></i> Personal Information
                                </h3>
                                <span class="px-3 py-1 bg-indigo-100 text-indigo-600 text-xs rounded-full">
                                    Required
                                </span>
                            </div>
                        </div>
                        <div class="px-6 py-5">
                            @include('profile.partials.update-profile-information-form')
                        </div>
                    </div>

                    <!-- Password Update Card -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <div class="border-b border-gray-200">
                            <div class="px-6 py-4 flex justify-between items-center">
                                <h3 class="text-lg font-medium text-indigo-700">
                                    <i class="fa-solid fa-key mr-2"></i> Password Settings
                                </h3>
                                <span class="px-3 py-1 bg-amber-100 text-amber-600 text-xs rounded-full">
                                    Security
                                </span>
                            </div>
                        </div>
                        <div class="px-6 py-5">
                            @include('profile.partials.update-password-form')
                        </div>
                    </div>
@include('profile.partials.delete-user-form')
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>