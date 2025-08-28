<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EgyMedia - Login</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Changa:wght@200..800&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#b32025',
                        dark: '#222222',
                        light: '#d1d5db',
                        footer: '#1f2937',
                    },
                    fontFamily: {
                        sans: ['Changa', 'sans-serif'],
                    },
                    animation: {
                        'float': 'float 3s ease-in-out infinite',
                        'slide-up': 'slideUp 0.8s ease-out forwards',
                        'slide-right': 'slideRight 0.8s ease-out forwards',
                        'fade-in': 'fadeIn 0.8s ease-out forwards',
                        'scale-in': 'scaleIn 0.8s ease-out forwards',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-10px)' },
                        },
                        slideUp: {
                            '0%': { transform: 'translateY(50px)', opacity: '0' },
                            '100%': { transform: 'translateY(0)', opacity: '1' },
                        },
                        slideRight: {
                            '0%': { transform: 'translateX(-50px)', opacity: '0' },
                            '100%': { transform: 'translateX(0)', opacity: '1' },
                        },
                        fadeIn: {
                            '0%': { opacity: '0' },
                            '100%': { opacity: '1' },
                        },
                        scaleIn: {
                            '0%': { transform: 'scale(0.95)', opacity: '0' },
                            '100%': { transform: 'scale(1)', opacity: '1' },
                        }
                    }
                }
            }
        }
    </script>
    <style>
        /* Custom styles beyond Tailwind */
        .pattern-background {
            background-image: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='%23b32025' fill-opacity='0.1' fill-rule='evenodd'/%3E%3C/svg%3E");
        }
        
        .hover-lift {
            transition: all 0.3s ease;
        }
        
        .hover-lift:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        
        .input-focus-effect {
            position: relative;
        }
        
        .input-focus-effect::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background-color: #b32025;
            transition: width 0.3s ease;
        }
        
        .input-focus-effect:focus-within::after {
            width: 100%;
        }
        
        .error-shake {
            animation: shake 0.5s cubic-bezier(.36,.07,.19,.97) both;
        }
        
        @keyframes shake {
            10%, 90% { transform: translate3d(-1px, 0, 0); }
            20%, 80% { transform: translate3d(2px, 0, 0); }
            30%, 50%, 70% { transform: translate3d(-4px, 0, 0); }
            40%, 60% { transform: translate3d(4px, 0, 0); }
        }
        
        .ripple {
            position: absolute;
            border-radius: 50%;
            transform: scale(0);
            animation: ripple 0.8s linear;
            background-color: rgba(255, 255, 255, 0.3);
        }
        
        @keyframes ripple {
            to {
                transform: scale(2);
                opacity: 0;
            }
        }
    </style>
</head>
<body class="font-sans text-dark min-h-screen pattern-background flex items-center justify-center p-4">
    <!-- Animated Elements -->
    <div class="absolute top-20 left-1/4 w-64 h-64 bg-primary rounded-full mix-blend-multiply filter blur-3xl opacity-10 animate-float"></div>
    <div class="absolute bottom-20 right-1/3 w-80 h-80 bg-primary rounded-full mix-blend-multiply filter blur-3xl opacity-5" style="animation: float 4s ease-in-out infinite reverse"></div>
    
    <div class="container max-w-md mx-auto">
        <div class="flex flex-col bg-white rounded-2xl shadow-2xl overflow-hidden">
            <!-- Left Side - Login Form -->
            <div class="p-8 md:p-12 relative z-10 opacity-0 animate-slide-up" style="animation-delay: 0.3s">
                <!-- Logo -->
                <div class="mb-10">
                    <a href="#" class="flex space-x-2">
                        <div class="relative h-20 w-20 flex items-center justify-center">
                            <div class="absolute inset-0 bg-primary rounded-full opacity-40"></div>
                            <img src="{{ asset('images/logo.png') }}" alt="EgyMedia Logo" class="h-10 w-10 rounded-full object-cover">
                        </div>
                    </a>
                </div>

                <h1 class="text-3xl font-bold text-dark mb-2">{{ __('dashboard.welcome_back') }}</h1>
                <p class="text-gray-600 mb-8">{{ __('dashboard.login_description') }}</p>
                
                @foreach ($errors->all() as $error)
                    <div class="mb-4 p-3 bg-red-100 text-red-700 rounded-lg shadow-md text-xs" role="alert">
                        <strong>{{ $error }}</strong>
                    </div>
                @endforeach
                @session('success')
                    <div class="mb-4 p-3 bg-green-100 text-green-700 rounded-lg shadow-md text-xs" role="alert">
                        <strong>{{ session('success') }}</strong>
                    </div>
                @endif
                <!-- Login Form -->
                <form class="space-y-6" method="POST" action="">
                    @csrf
                    <div class="input-focus-effect">
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">{{ __('validation.attributes.email') }}</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                                </svg>
                            </div>
                            <input type="text" id="email" name="email" class="block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary/20 transition-all duration-300" placeholder="{{ __('validation.attributes.email') }}" value="{{ old('email') }}" required>
                        </div>
                    </div>
                    
                    <!-- Password Input -->
                    <div class="input-focus-effect">
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-1">{{ __('validation.attributes.password') }}</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                </svg>
                            </div>
                            <input type="password" id="password" name="password" class="block w-full pl-10 pr-10 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary/20 transition-all duration-300" placeholder="{{ __('validation.attributes.password') }}" required>
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                                <button type="button" id="togglePassword" class="text-gray-400 hover:text-gray-600 focus:outline-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" id="eyeIcon">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor" id="eyeSlashIcon">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Remember Me & Forgot Password -->
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input type="checkbox" id="remember" name="remember" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                            <label for="remember" class="ml-2 block text-sm text-gray-700">{{ __('validation.attributes.remember_me') }}</label>
                        </div>
                        <a href="#" class="text-sm font-medium text-primary hover:text-primary/80 transition-colors duration-300">{{ __('auth.forgot_password') }}</a>
                    </div>
                    
                    <!-- Login Button -->
                    <div>
                        <button type="submit" id="loginButton" class="relative overflow-hidden w-full bg-primary hover:bg-primary/90 text-white font-semibold py-3 px-4 rounded-lg transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg">
                            <span class="relative z-10">{{ __('auth.login') }}</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
        <script>
        document.addEventListener('DOMContentLoaded', function() {
            const togglePassword = document.getElementById('togglePassword');
            const passwordInput = document.getElementById('password');
            const eyeIcon = document.getElementById('eyeIcon');
            const eyeSlashIcon = document.getElementById('eyeSlashIcon');
            
            togglePassword.addEventListener('click', function() {
                const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                passwordInput.setAttribute('type', type);
                
                eyeIcon.classList.toggle('hidden');
                eyeSlashIcon.classList.toggle('hidden');
                });
            });
            
        </script>
    <x-switch-language />
</body>
</html>