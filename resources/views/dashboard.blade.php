<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Social Network</title>
    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Remixicon for icons -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
@php
    $user = auth()->user();
@endphp

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-xl text-yellow-50 leading-tight tracking-wide">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-8 bg-gradient-to-b from-gray-800 to-gray-900 min-h-screen">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Main Card -->
            <div class="bg-gray-900 rounded-3xl overflow-hidden border border-gray-700 shadow-2xl">
                <!-- Side Profile Layout -->
                <div class="flex flex-col md:flex-row">
                    <!-- Left Side - Profile Info -->
                    <div class="w-full md:w-1/3 bg-gray-800 p-6">
                        <div class="flex flex-col items-center">
                            <!-- Hexagonal Profile Image -->
                            <div class="relative">
                                <div class="w-36 h-36 overflow-hidden rounded-xl bg-gradient-to-br from-emerald-400 to-teal-600 p-1">
                                    <img class="w-full h-full object-cover rounded-lg"
                                        src="{{ $user->profile_photo ? asset('storage/' . $user->profile_photo) : asset('images/default-avatar.png') }}"
                                        alt="Photo de profil">
                                </div>
                                <div class="absolute -bottom-2 -right-2 bg-yellow-500 text-gray-900 rounded-full p-2">
                                    <i class="ri-verified-badge-fill text-xl"></i>
                                </div>
                            </div>

                            <!-- User Name and Tags -->
                            <h3 class="mt-6 text-2xl font-bold text-white">
                                {{ $user->pseudo ?? $user->name }}
                            </h3>
                            <span class="px-3 py-1 mt-2 text-xs font-medium bg-emerald-500/20 text-emerald-400 rounded-full">
                                Online
                            </span>
                            
                            <p class="text-gray-400 text-sm mt-2">{{ $user->email }}</p>
                            
                            <!-- Stats Grid -->
                            <div class="grid grid-cols-3 gap-2 w-full mt-6 text-center">
                                <div class="bg-gray-700/50 p-2 rounded-lg">
                                    <span class="block text-emerald-400 font-bold">142</span>
                                    <span class="text-xs text-gray-400">Posts</span>
                                </div>
                                <div class="bg-gray-700/50 p-2 rounded-lg">
                                    <span class="block text-emerald-400 font-bold">368</span>
                                    <span class="text-xs text-gray-400">Followers</span>
                                </div>
                                <div class="bg-gray-700/50 p-2 rounded-lg">
                                    <span class="block text-emerald-400 font-bold">215</span>
                                    <span class="text-xs text-gray-400">Following</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Right Side - Content Area -->
                    <div class="w-full md:w-2/3 p-6">
                        <!-- Bio Section -->
                        <div class="mb-6">
                            <h4 class="text-emerald-400 text-lg font-medium flex items-center">
                                <i class="ri-user-heart-line mr-2"></i> À propos
                            </h4>
                            <div class="p-4 mt-2 bg-gray-800/50 rounded-xl border border-gray-700">
                                <p class="text-gray-300">
                                    {{ $user->bio ? $user->bio : "Aucune bio disponible. Partagez quelque chose d'intéressant à votre sujet!" }}
                                </p>
                            </div>
                        </div>
                        
                        <!-- Recent Activity -->
                        <div class="mb-6">
                            <h4 class="text-emerald-400 text-lg font-medium flex items-center">
                                <i class="ri-time-line mr-2"></i> Activité récente
                            </h4>
                            <div class="mt-2 space-y-3">
                                <div class="flex items-center p-3 bg-gray-800/30 rounded-xl">
                                    <div class="bg-emerald-500/20 p-2 rounded-lg">
                                        <i class="ri-image-line text-emerald-400"></i>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-gray-300 text-sm">Vous avez partagé une nouvelle photo</p>
                                        <p class="text-gray-500 text-xs">Il y a 2 heures</p>
                                    </div>
                                </div>
                                <div class="flex items-center p-3 bg-gray-800/30 rounded-xl">
                                    <div class="bg-purple-500/20 p-2 rounded-lg">
                                        <i class="ri-user-add-line text-purple-400"></i>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-gray-300 text-sm">Vous avez un nouveau follower</p>
                                        <p class="text-gray-500 text-xs">Il y a 1 jour</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Action Buttons -->
                        <div class="mt-8 flex flex-col sm:flex-row space-y-3 sm:space-y-0 sm:space-x-3">
                            <a href="{{ route('profile.edit') }}"
                                class="px-4 py-3 bg-gradient-to-r from-emerald-500 to-teal-600 text-white font-medium rounded-xl flex items-center justify-center shadow-lg hover:from-emerald-600 hover:to-teal-700 transition-all">
                                <i class="ri-edit-line mr-2"></i> Modifier le profil
                            </a>
                            <form method="POST" action="{{ route('logout') }}" class="w-full sm:w-auto">
                                @csrf
                                <button type="submit"
                                    class="w-full px-4 py-3 bg-gray-700 text-white font-medium rounded-xl flex items-center justify-center hover:bg-gray-600 transition-all">
                                    <i class="ri-logout-box-line mr-2"></i> Déconnexion
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>