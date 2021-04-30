<h6 class="text-center">
    <button class="btn btn-light" onclick="authMe()">Login With Metamask</button>
</h6>
@push('js')
<script src="https://unpkg.com/@metamask/detect-provider/dist/detect-provider.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/ethereumjs/browser-builds/dist/ethereumjs-tx/ethereumjs-tx-1.3.3.min.js">
</script>
@include('js')
@endpush
