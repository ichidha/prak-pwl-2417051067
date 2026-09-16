<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Card Retro Style</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#f4f4f0] min-h-screen flex items-center justify-center p-4 font-mono">

    <div class="w-full max-w-sm bg-white border-2 border-black rounded-2xl p-6 shadow-[6px_6px_0px_0px_#000] flex flex-col items-center space-y-4">
        
        <div class="w-24 h-24 rounded-full bg-[#82ced9] border-2 border-black flex items-center justify-center overflow-hidden shadow-[4px_4px_0px_0px_#000] mb-2">
            <svg class="w-16 h-16 text-black mt-2" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
            </svg>
        </div>

        <div class="w-full space-y-3.5">
            <div class="w-full bg-[#82ced9] border-2 border-black rounded-xl p-3 text-center font-bold text-black text-lg shadow-[4px_4px_0px_0px_#000]">
                {{ $nama }}
            </div>

            <div class="w-full bg-[#82ced9] border-2 border-black rounded-xl p-3 text-center font-bold text-black text-lg shadow-[4px_4px_0px_0px_#000]">
                {{ $kelas }}
            </div>

            <div class="w-full bg-[#82ced9] border-2 border-black rounded-xl p-3 text-center font-bold text-black text-lg shadow-[4px_4px_0px_0px_#000]">
                {{ $npm }}
            </div>
        </div>

        <a href="https://forms.gle/BK1ozYJpWnYfLB1SA" target="_blank" class="w-full mt-2 bg-[#fcd34d] border-2 border-black rounded-xl p-3 text-center font-bold text-black shadow-[4px_4px_0px_0px_#000] hover:translate-x-[2px] hover:translate-y-[2px] hover:shadow-[2px_2px_0px_0px_#000] transition-all">
            Kumpul Tugas & Daftar Hadir
        </a>

    </div>

</body>
</html>