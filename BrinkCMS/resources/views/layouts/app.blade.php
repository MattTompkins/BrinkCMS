<div class="min-h-screen bg-gray-100">
    @include('layouts.navigation')

    {{-- Remove later or add custom head --}}
    @if ( isset( $header ) )
        <!-- Page Heading -->
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
    @endif;
    <!-- Page Content -->
    <main>
        {{ $slot }}
    </main>
</div>
