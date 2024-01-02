<!-- Sidebar -->
<aside class="navbar navbar-vertical navbar-expand-lg" data-bs-theme="dark">
  <div class="container-fluid">
    <x-navbar-brand url="/" logo="static/logo.svg" />

    <div class="collapse navbar-collapse" id="sidebar-menu">
      <ul class="navbar-nav pt-lg-3">
        <x-nav-item title="Home" url=".">
          <x-slot name="icon">
            <x-icons.checkbox-icon />
          </x-slot>
        </x-nav-item>
        <x-nav-dropdown title="Interface" icon="">
          <x-slot name="icon">
            <x-icons.checkbox-icon />
          </x-slot>
          <x-dropdown-menu>
            <div class="dropdown-menu-column">
              <x-dropdown-menu-item url="./accordion.html">Accordion</x-dropdown-menu-item>
            </div>
          </x-dropdown-menu>
        </x-nav-dropdown>
        <x-nav-item title="Flights" url="./flights" icon="">
          <x-slot name="icon">
            <x-icons.checkbox-icon />
          </x-slot>
        </x-nav-item>
      </ul>
    </div>
  </div>
</aside>