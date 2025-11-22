<?php 
    $model['title'] = "Notifikasi";
    $model['description'] = "Aktivitas terbaru di akun Anda";
    $model['menus'] = [['text' => 'Notifikasi', 'url' => '#', 'active' => true]];

    include __DIR__ . '/../../template/header.php'; 
    include __DIR__ . '/../../partials/MainHeader.php'; 
    include __DIR__ . '/../../template/sidebar.php';
?>

<div class="min-h-screen bg-mainBg text-mainText pt-20 pb-24 md:pl-24 md:pt-8 transition-colors duration-300">
    
    <div class="max-w-2xl mx-auto px-4">
        
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-xl font-bold">Minggu Ini</h2>
            <button class="text-blue-500 text-sm font-medium hover:underline">Tandai sudah dibaca</button>
        </div>

        <div class="space-y-2">

            <div class="flex items-center gap-4 p-4 rounded-2xl hover:bg-mainGray/10 transition-colors cursor-pointer group">
                <div class="relative">
                    <div class="w-12 h-12 rounded-full bg-gray-700 overflow-hidden border border-mainGray">
                        <img src="/assets/default.jpg" class="w-full h-full object-cover">
                    </div>
                    <div class="absolute -bottom-1 -right-1 w-6 h-6 bg-red-500 rounded-full flex items-center justify-center text-white border-2 border-mainBg">
                        <ion-icon name="heart" class="text-xs"></ion-icon>
                    </div>
                </div>
                <div class="flex-grow">
                    <p class="text-sm text-mainText">
                        <span class="font-bold">siti_aminah</span> menyukai postingan Anda: "Liburan seru di Bali..."
                    </p>
                    <p class="text-xs text-mainGray mt-1">2 jam yang lalu</p>
                </div>
                <div class="w-10 h-10 rounded bg-gray-600 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1514888286974-6c03e2ca1dba?auto=format&fit=crop&w=100" class="w-full h-full object-cover opacity-80 group-hover:opacity-100">
                </div>
            </div>

            <div class="flex items-center gap-4 p-4 rounded-2xl hover:bg-mainGray/10 transition-colors cursor-pointer">
                <div class="relative">
                    <div class="w-12 h-12 rounded-full bg-gray-700 overflow-hidden border border-mainGray">
                        <img src="/assets/default.jpg" class="w-full h-full object-cover">
                    </div>
                    <div class="absolute -bottom-1 -right-1 w-6 h-6 bg-blue-500 rounded-full flex items-center justify-center text-white border-2 border-mainBg">
                        <ion-icon name="person-add" class="text-xs"></ion-icon>
                    </div>
                </div>
                <div class="flex-grow">
                    <p class="text-sm text-mainText">
                        <span class="font-bold">budi_santoso</span> mulai mengikuti Anda.
                    </p>
                    <p class="text-xs text-mainGray mt-1">5 jam yang lalu</p>
                </div>
                <button class="px-4 py-1.5 bg-blue-600 text-white text-xs font-bold rounded-full hover:bg-blue-500">
                    Ikuti Balik
                </button>
            </div>

            <div class="flex items-center gap-4 p-4 rounded-2xl hover:bg-mainGray/10 transition-colors cursor-pointer">
                <div class="relative">
                    <div class="w-12 h-12 rounded-full bg-gray-700 overflow-hidden border border-mainGray">
                        <img src="/assets/default.jpg" class="w-full h-full object-cover">
                    </div>
                    <div class="absolute -bottom-1 -right-1 w-6 h-6 bg-green-500 rounded-full flex items-center justify-center text-white border-2 border-mainBg">
                        <ion-icon name="chatbubble" class="text-xs"></ion-icon>
                    </div>
                </div>
                <div class="flex-grow">
                    <p class="text-sm text-mainText">
                        <span class="font-bold">ani_kue</span> berkomentar: "Wah, resepnya boleh dibagi dong kak!"
                    </p>
                    <p class="text-xs text-mainGray mt-1">1 hari yang lalu</p>
                </div>
            </div>

        </div>
    </div>
</div>