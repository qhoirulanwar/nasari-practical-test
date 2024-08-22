<div>
    {{-- <h1>Login</h1>
    <form wire:submit.prevent="login">
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" wire:model="email" required autofocus>
            @error('email') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div>
            <label for="password">Password:</label>
            <input>
            @error('password') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div>
            <button type="submit">Login</button>
        </div>
    </form> --}}
    <div class="video-background">
        <video autoplay loop muted>
            <source src="assets/background_video.mp4" type="video/mp4">
        </video>
    </div>
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="login-container p-5 rounded shadow">
            <h2 class="mb-4">Silakan login</h2>
            <form wire:submit.prevent="login">
                <div class="form-group mb-3">
                    <x-feathericon-mail class="text-primary me-2" />
                    <input type="email" id="email" wire:model="email" required autofocus class="form-control"
                        placeholder="Masukkan username">
                </div>
                <div class="form-group mb-4">
                    <x-feathericon-lock class="text-primary me-2" />
                    <input type="password" id="password" wire:model="password" required class="form-control"
                        placeholder="Masukkan password">
                </div>
                @error('email') <div class="error d-flex justify-content-center mb-3">{{ $message }}</div> @enderror
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-info">Login</button>
                </div>
            </form>
        </div>
    </div>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .video-background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            overflow: hidden;
        }

        .video-background::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            /* Transparent black overlay */
        }

        .video-background video {
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .login-container {
            max-width: 600px;
            width: 100%;
            position: relative;
            z-index: 1;
            background-color: rgba(255, 255, 255, 0.8);
            /* Semi-transparent white background */
            backdrop-filter: blur(5px);
            /* Optional: adds a slight blur effect */
        }

        .login-container h2 {
            text-align: center;
            margin-bottom: 30px;
        }

        .form-group {
            display: flex;
            align-items: center;
        }

        .form-group i {
            margin-right: 10px;
        }
    </style>
    <script>
        feather.replace();
    </script>
</div>