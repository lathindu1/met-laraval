<div class="card shadow bo-none">
    <div class="card-body">
        <h5 class="card-title">Using Metamask</h5>
        <h6 class="mb-4">Click To Signup/SignIn Using Metamask</h6>
        <button class="btn btn-danger" onclick="authMe()">Login / Register</button>
    </div>
</div>
@push('js')
<script src="https://unpkg.com/@metamask/detect-provider/dist/detect-provider.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/ethereumjs/browser-builds/dist/ethereumjs-tx/ethereumjs-tx-1.3.3.min.js">
</script>
@include('js')
@endpush
