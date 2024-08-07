<x-www-app>
    <x-page-center>
        <div class="text-center mt-4">
            <h1 class="h2">회원 로그인</h1>
            <p class="lead">Sign in to your account to continue</p>
        </div>

        <!-- Session Status -->
        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <div class="card">
            <div class="card-body">
                @if (session('error'))
                    <div class="alert alert-warning alert-dismissible" role="alert">
                        <div class="alert-message">
                            {{ session('error') }}
                        </div>
                    </div>
                @endif

                <x-login-form>
                  @includeIf('jinyauth::login.form')
                </x-login-form>

                <br>

                <div class="text-center">
                    아직 회원이 아니세요? <a href="/register">회원가입</a>
                </div>
            </div>
        </div>
    </x-page-center>
</x-www-app>
