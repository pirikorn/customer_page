<x-nav-link :href="route('customer.form')" :active="request()->routeIs('customer.form')">
    {{ __('Create customer') }}
</x-nav-link>
