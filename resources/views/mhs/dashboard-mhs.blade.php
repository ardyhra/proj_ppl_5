<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Mahasiswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">

    <!-- Navbar -->
    <nav class="bg-blue-500 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a class="text-2xl font-bold" href="#">SISKARA</a>
            <div class="space-x-4">
                <a href="#" class="hover:underline">Home</a>
                <a href="#" class="hover:underline">About</a>
                <a href="#" class="hover:underline">Profile</a>
            </div>
        </div>
    </nav>

    <div class="flex">
        <!-- Sidebar -->
        <aside class="w-1/5 bg-blue-500 h-screen p-4 text-white">
            <div class="text-center mb-6">
                <img src="profile.jpg" alt="Profile" class="w-24 h-24 mx-auto bg-gray-400 rounded-full mb-3">
                <h2 class="text-lg font-bold">Budi Setiawan</h2>
                <p class="text-sm text-gray-200">NIM 24060122100102</p>
                <button class="w-full bg-blue-600 py-1 mt-2 text-sm rounded-full">Mahasiswa</button>
                <a href="{{ route('login') }}" class="text-sm w-full bg-red-700 py-1 rounded-full mt-2 block text-center">Logout</a>
            </div>
            <nav class="space-y-4">
                <a href="#" class="block py-2 px-3 bg-gray-700 rounded-lg text-white">Dashboard</a>
                <a href="#" class="block py-2 px-3 bg-gray-300 rounded-lg text-gray-700">Her Registrasi</a>
                <a href="pengisianirs-mhs" class="block py-2 px-3 bg-gray-300 rounded-lg text-gray-700">Pengisian IRS</a>
                <a href="irs-mhs" class="block py-2 px-3 bg-gray-300 rounded-lg text-gray-700">IRS</a>
                <a href="#" class="block py-2 px-3 bg-gray-300 rounded-lg text-gray-700">KHS</a>
                <a href="#" class="block py-2 px-3 bg-gray-300 rounded-lg text-gray-700">Transkrip</a>
                <a href="#" class="block py-2 px-3 bg-gray-300 rounded-lg text-gray-700">Konsultasi</a>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="w-4/5 p-8">
            <!-- Status Akademik -->
            <div class="mb-6">
                <h3 class="text-2xl font-bold mb-2">Status Akademik</h3>
                <p>Dosen Wali: Adit Saputra, S.Kom, M.Kom (NIP: 122341431414143415)</p>
                <p>Semester Akademik Sekarang: 2024/2025 Ganjil</p>
                <p>Semester Studi: 4</p>
                <p>Status: -</p>
            </div>

            <!-- Prestasi Akademik -->
            <div class="grid grid-cols-2 gap-4 mb-6">
                <div class="p-4 bg-gray-300 rounded-lg text-center">
                    <h3 class="text-lg font-semibold">IPK</h3>
                    <p class="text-4xl font-bold">3.81</p>
                </div>
                <div class="p-4 bg-gray-300 rounded-lg text-center">
                    <h3 class="text-lg font-semibold">SKS</h3>
                    <p class="text-4xl font-bold">85</p>
                </div>
            </div>

            <!-- Informasi Perubahan Jadwal -->
            <div class="mb-6">
                <h3 class="text-2xl font-bold mb-2">Informasi Perubahan Jadwal Mata Kuliah</h3>
                <table class="w-full bg-white rounded-lg overflow-hidden shadow-lg">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="py-2 px-4 text-left">No</th>
                            <th class="py-2 px-4 text-left">Mata Kuliah</th>
                            <th class="py-2 px-4 text-left">Pertemuan</th>
                            <th class="py-2 px-4 text-left">Jadwal Pengganti</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b">
                            <td class="py-2 px-4">1</td>
                            <td class="py-2 px-4">Teori Bahasa dan Otomata</td>
                            <td class="py-2 px-4">2</td>
                            <td class="py-2 px-4">Jumat, 30 Agustus 2024, 15:30 - 18:50, A103</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Jadwal Kuliah -->
            <div class="mb-6">
                <h3 class="text-2xl font-bold mb-2">Jadwal Kuliah - September 2024</h3>
                <table class="w-full bg-white rounded-lg overflow-hidden shadow-lg">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="py-2 px-4 text-left">Senin</th>
                            <th class="py-2 px-4 text-left">Selasa</th>
                            <th class="py-2 px-4 text-left">Rabu</th>
                            <th class="py-2 px-4 text-left">Kamis</th>
                            <th class="py-2 px-4 text-left">Jumat</th>
                            <th class="py-2 px-4 text-left">Sabtu</th>
                            <th class="py-2 px-4 text-left">Minggu</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b">
                            <td class="py-2 px-4">13:00 Teori Bah...</td>
                            <td class="py-2 px-4">09:40 Pembelaj...</td>
                            <td class="py-2 px-4">09:40 Pembelaj...</td>
                            <td class="py-2 px-4">15:40 Komputas...</td>
                            <td class="py-2 px-4">07:00 Sistem In...</td>
                            <td class="py-2 px-4"></td>
                            <td class="py-2 px-4"></td>
                        </tr>
                        <tr>
                            <td class="py-2 px-4">13:00 Teori Bah...</td>
                            <td class="py-2 px-4">09:40 Pembelaj...</td>
                            <td class="py-2 px-4">09:40 Pembelaj...</td>
                            <td class="py-2 px-4">15:40 Komputas...</td>
                            <td class="py-2 px-4">07:00 Sistem In...</td>
                            <td class="py-2 px-4"></td>
                            <td class="py-2 px-4"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>

    <!-- Footer -->
    <footer class="bg-blue-700 text-white text-center py-4">
        <p>©2024 SISKARA - Don't Forget To Follow Diponegoro University Social Media!</p>
    </footer>
    
</body>
</html>
