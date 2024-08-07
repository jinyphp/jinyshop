{{-- 회원 가입양식 --}}

{{-- <div class="mb-3">
    <label for="signupFullnameInput" class="form-label">
        Full Name
    </label>
    <input type="text" class="form-control" id="signupFullnameInput"
        required name="name"
        placeholder="회원명을 입력해 주세요"
        :value="old('name')" />
    <div class="invalid-feedback">Please enter full name</div>
</div> --}}
<x-register-name>

</x-register-name>

{{-- <div class="mb-3">
    <label for="signupEmailInput" class="form-label">
        Email
        <span class="text-danger">*</span>
    </label>
    <input type="email" class="form-control"
        id="signupEmailInput"
        required name="email"
        placeholder="Enter your email"
        :value="old('email')" />
    <div class="invalid-feedback">Please enter email.</div>
</div> --}}
<x-register-email>

</x-register-email>

{{-- <div class="mb-3">
    <label for="formSignUpPassword" class="form-label">Password</label>
    <div class="password-field position-relative">
        <input type="password" class="form-control fakePassword"
            id="formSignUpPassword"
            required name="password"
            placeholder="Enter your password" />
        <span><i class="bi bi-eye-slash passwordToggler"></i></span>
        <div class="invalid-feedback">Please enter password.</div>
    </div>
</div> --}}

<x-register-password>

</x-register-password>

{{-- <div class="mb-3">
    <label for="formSignUpConfirmPassword" class="form-label">
        Confirm Password
    </label>
    <div class="password-field position-relative">
        <input type="password" class="form-control fakePassword"
        id="formSignUpConfirmPassword" required
            name="password_confirmation" />
        <span><i class="bi bi-eye-slash passwordToggler"></i></span>
        <div class="invalid-feedback">Please enter password.</div>
    </div>
</div> --}}

<x-register-password-confirm>

</x-register-password-confirm>

<div class="mb-3">
    <div class="mb-4 d-flex align-items-center justify-content-between">
        <div class="form-check">
            <input class="form-check-input" type="checkbox"
            id="signupCheckTextCheckbox" name="terms" />
            <label class="form-check-label ms-2"
                for="signupCheckTextCheckbox">
                <a href="#">Terms of Use</a>
                &
                <a href="#">Privacy Policy</a>
            </label>
        </div>
    </div>
</div>

<div class="d-grid">
    {{-- <button class="btn btn-primary" type="submit">{{ __('Register') }}</button> --}}
    <x-register-submit class="btn-lg w-100">
        {{ __('Register') }}
    </x-register-submit>

</div>


