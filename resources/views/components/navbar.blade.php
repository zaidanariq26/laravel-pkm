<div>
    <div class="navbar flex justify-between items-center p-4 text-5xl rounded-b-2xl">
        <div id="navbar-left" class="flex items-center transition-all duration-300">
            <button class="text-2xl px-4 cursor-pointer text-slate-600" onclick="toggleSidebar()">☰</button>
            <a class="navbar-item text-lg">{{ $slot }}</a>
        </div>
        <div class="navbar-right flex space-x-4">
            <a href="#" class="navbar-item text-base">Home</a>
            <a href="#" class="navbar-item text-base">About</a>
            <a href="#" class="navbar-item text-base">Contact</a>
        </div>
    </div>
</div>
