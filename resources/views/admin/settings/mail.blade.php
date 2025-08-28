@extends('admin.layouts.app')
@section('title', 'Mail Settings')
@section('content')
    <div class="grid xl:grid-cols-2 grid-cols-1 gap-6">
        <div class="card xl:col-span-2">
            <div class="card-body flex flex-col p-6">
                <header class="flex mb-5 items-center border-b border-slate-100 dark:border-slate-700 pb-5 -mx-6 px-6">
                    <div class="flex-1">
                        <div class="card-title text-slate-900 dark:text-white">
                            <iconify-icon class="me-2" icon="heroicons-outline:envelope"></iconify-icon>
                            Mail Configuration
                        </div>
                    </div>
                </header>

                {{-- Error Summary Card --}}
                @if ($errors->any())
                    <div
                        style="background-color: #f8d7da; color: #842029; padding: 1rem; border-radius: 0.375rem; margin-bottom: 1rem; border: 1px solid #f5c2c7;">
                        <strong>There were some problems with your input:</strong>
                        <ul class="mt-2 list-disc list-inside">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="card-text h-full">
                    <form class="space-y-8" method="POST" action="">
                        @csrf

                        <!-- SMTP CONFIGURATION GROUP -->
                        <div>
                            <h5 class="mb-4 text-lg font-semibold text-slate-700 dark:text-white">SMTP Configuration</h5>
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-7">

                                <!-- Mail Host -->
                                <div class="input-area relative">
                                    <label for="mail_host" class="form-label">
                                        <iconify-icon class="me-1" icon="heroicons-outline:server"></iconify-icon>
                                        SMTP Host
                                    </label>
                                    <input type="text" class="form-control @error('mail_host') is-invalid @enderror"
                                        id="mail_host" name="mail_host"
                                        value="{{ old('mail_host', $settings['mail_host'] ?? '') }}"
                                        placeholder="smtp.gmail.com">
                                    @error('mail_host')
                                        <p class="mt-1 text-red-600 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- Mail Port -->
                                <div class="input-area relative">
                                    <label for="mail_port" class="form-label">
                                        <iconify-icon class="me-1" icon="heroicons-outline:hashtag"></iconify-icon>
                                        SMTP Port
                                    </label>
                                    <input type="number" class="form-control @error('mail_port') is-invalid @enderror"
                                        id="mail_port" name="mail_port"
                                        value="{{ old('mail_port', $settings['mail_port'] ?? '') }}" placeholder="587">
                                    @error('mail_port')
                                        <p class="mt-1 text-red-600 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- Mail Encryption -->
                                <div class="input-area">
                                    <label for="mail_encryption" class="form-label">
                                        <iconify-icon class="me-1" icon="heroicons-outline:lock-closed"></iconify-icon>
                                        Encryption
                                    </label>
                                    <select id="mail_encryption" name="mail_encryption"
                                        class="form-control @error('mail_encryption') is-invalid @enderror">
                                        <option value="">None</option>
                                        <option value="tls" {{ old('mail_encryption', $settings['mail_encryption'] ?? '') == 'tls' ? 'selected' : '' }}>TLS</option>
                                        <option value="ssl" {{ old('mail_encryption', $settings['mail_encryption'] ?? '') == 'ssl' ? 'selected' : '' }}>SSL</option>
                                    </select>
                                    @error('mail_encryption')
                                        <p class="mt-1 text-red-600 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>

                            </div>
                        </div>

                        <!-- AUTHENTICATION GROUP -->
                        <div>
                            <h5 class="mb-4 text-lg font-semibold text-slate-700 dark:text-white">Authentication</h5>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-7">

                                <!-- Mail Username -->
                                <div class="input-area relative">
                                    <label for="mail_username" class="form-label">
                                        <iconify-icon class="me-1" icon="heroicons-outline:user"></iconify-icon>
                                        Username/Email
                                    </label>
                                    <input type="text" class="form-control @error('mail_username') is-invalid @enderror"
                                        id="mail_username" name="mail_username"
                                        value="{{ old('mail_username', $settings['mail_username'] ?? '') }}"
                                        placeholder="your-email@gmail.com">
                                    @error('mail_username')
                                        <p class="mt-1 text-red-600 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- Mail Password -->
                                <div class="input-area relative">
                                    <label for="mail_password" class="form-label">
                                        <iconify-icon class="me-1" icon="heroicons-outline:key"></iconify-icon>
                                        Password
                                    </label>
                                    <input type="text" class="form-control @error('mail_password') is-invalid @enderror"
                                        id="mail_password" name="mail_password"
                                        value="{{ old('mail_password', $settings['mail_password'] ?? '') }}"
                                        placeholder="Your app password">
                                    @error('mail_password')
                                        <p class="mt-1 text-red-600 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>

                            </div>
                        </div>

                        <!-- FROM ADDRESS GROUP -->
                        <div>
                            <h5 class="mb-4 text-lg font-semibold text-slate-700 dark:text-white">From Address</h5>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-7">

                                <!-- From Address -->
                                <div class="input-area relative">
                                    <label for="mail_from_address" class="form-label">
                                        <iconify-icon class="me-1" icon="heroicons-outline:at-symbol"></iconify-icon>
                                        From Email Address
                                    </label>
                                    <input type="email"
                                        class="form-control @error('mail_from_address') is-invalid @enderror"
                                        id="mail_from_address" name="mail_from_address"
                                        value="{{ old('mail_from_address', $settings['mail_from_address'] ?? '') }}"
                                        placeholder="noreply@yourwebsite.com">
                                    @error('mail_from_address')
                                        <p class="mt-1 text-red-600 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- From Name -->
                                <div class="input-area relative">
                                    <label for="mail_from_name" class="form-label">
                                        <iconify-icon class="me-1" icon="heroicons-outline:identification"></iconify-icon>
                                        From Name
                                    </label>
                                    <input type="text" class="form-control @error('mail_from_name') is-invalid @enderror"
                                        id="mail_from_name" name="mail_from_name"
                                        value="{{ old('mail_from_name', $settings['mail_from_name'] ?? '') }}"
                                        placeholder="Your Website Name">
                                    @error('mail_from_name')
                                        <p class="mt-1 text-red-600 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>

                            </div>
                        </div>

                        <div class="flex items-center justify-between mt-4">
                            <div class="space-x-2">
                                <button class="btn inline-flex justify-center btn-dark">
                                    Save Settings
                                </button>
                                <a href="{{ url()->previous() }}" class="btn inline-flex justify-center btn-secondary">
                                    Back
                                </a>
                            </div>

                            <button type="button" class="btn inline-flex justify-center btn-success"
                                onclick="testConnection()">
                                Test Connection
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        async function testConnection() {
            const button = event.target.closest('button');
            const originalText = button.innerHTML;

            // Disable button and show loading
            button.disabled = true;
            button.innerHTML = '<iconify-icon class="me-1" icon="heroicons-outline:arrow-path"></iconify-icon>Testing...';

            try {
                // Get form data
                const formData = new FormData();
                formData.append('_token', document.querySelector('input[name="_token"]').value);
                formData.append('mail_host', document.getElementById('mail_host').value);
                formData.append('mail_port', document.getElementById('mail_port').value);
                formData.append('mail_username', document.getElementById('mail_username').value);
                formData.append('mail_password', document.getElementById('mail_password').value);
                formData.append('mail_encryption', document.getElementById('mail_encryption').value);
                formData.append('mail_from_address', document.getElementById('mail_from_address').value);
                formData.append('mail_from_name', document.getElementById('mail_from_name').value);

                // Send test request
                const response = await fetch('{{ route("admin.settings.test-mail") }}', {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                });

                const result = await response.json();

                if (result.success) {
                    showNotification('success', 'Mail test successful!', result.message);
                } else {
                    showNotification('error', 'Mail test failed!', result.message);
                }

            } catch (error) {
                showNotification('error', 'Connection Error', 'Failed to test mail connection. Please try again.');
            } finally {
                // Re-enable button
                button.disabled = false;
                button.innerHTML = originalText;
            }
        }

        function showNotification(type, title, message) {
            Toastify({
                text: `${title}\n${message}`,
                duration: 5000,
                close: true,
                gravity: "top", // top or bottom
                position: "center", // left, center or right
                stopOnFocus: true,
                style: {
                    background: type === 'success'
                        ? "linear-gradient(to right, #00b09b, #96c93d)"  // success
                        : "linear-gradient(to right, #e53935, #e35d5b)", // danger
                    color: "#fff",
                    borderRadius: "8px",
                    padding: "12px 16px",
                    fontSize: "14px",
                },
                onClick: function () { }
            }).showToast();
        }
    </script>
@endsection