<!DOCTYPE html>
<html>

<head>
    <title>Terima Kasih</title>
    @include('layouts.components.script')
</head>

<body>
    <div class="relative isolate px-6 pt-14 lg:px-8" id="first">
        <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80"
            aria-hidden="true">
            <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
                style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
            </div>
        </div>
        <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
            <div class="hidden sm:mb-8 sm:flex sm:justify-center">
                <div
                    class="relative rounded-full px-3 py-1 text-sm leading-6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
                    Announcing our next round of funding. <a href="#" class="font-semibold text-indigo-600"><span
                            class="absolute inset-0" aria-hidden="true"></span>Read more <span
                            aria-hidden="true">&rarr;</span></a>
                </div>
            </div>
            <div class="text-center">
                <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Terima Kasih Telah Mendaftar!
                </h1>
                <p class="mt-6 text-lg leading-8 text-gray-600">Kami telah mengirimkan email konfirmasi ke alamat yang
                    Anda berikan.</p>
                <div class="mt-10 flex items-center justify-center gap-x-6">
                    <p class="mt-6 text-lg leading-8 text-gray-600">page ini akan tertutup dalam <span
                            id="countdown"></span> detik</p>
                </div>
            </div>
        </div>
        <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]"
            aria-hidden="true">
            <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]"
                style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
            </div>
        </div>
    </div>

    <script>
        function hitungDetikDanRedirect(detik) {
            const countdown = document.getElementById('countdown');

            let sisaDetik = detik;

            const interval = setInterval(function() {
                countdown.textContent = sisaDetik;
                sisaDetik--;

                if (sisaDetik < 0) {
                    clearInterval(interval);
                    window.location.href = "{{ route('app') }}";
                }
            }, 1000);
        }
        hitungDetikDanRedirect(10);
    </script>
</body>

</html>
