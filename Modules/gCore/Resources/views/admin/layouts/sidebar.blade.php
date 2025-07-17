<aside class="admin-sidebar">
    <div class="sidebar-header">
        <h3>Governetix</h3>
    </div>
    <nav class="sidebar-nav">
        <ul>
            {{-- Nivel 1: admin/overview --}}
            <li><a href="#"><i class="fas fa-chart-line"></i> Overview</a></li>
            {{-- Nivel 1: admin/modules --}}
            <li><a href="#"><i class="fas fa-cubes"></i> Modules</a></li>
            {{-- Nivel 1: admin/users --}}
            <li><a href="#"><i class="fas fa-users"></i> Users</a></li>

            {{-- Nivel 1: admin/core --}}
            <li><a href="{{ route('admin.core.welcome') }}"><i class="fas fa-cogs"></i> Core</a>
                <ul>
                    {{-- Nivel 2: admin/core/test-exception --}}
                    <li><a href="{{ route('admin.core.test-exception') }}"><i class="fas fa-bug"></i> Test Exception</a></li>

                    {{-- Nivel 2: admin/core/translations --}}
                    <li><a href="{{ route('admin.core.translations.index') }}"><i class="fas fa-language"></i> Translations</a>
                        <ul>
                            {{-- Nivel 3: admin/core/translations/create --}}
                            <li><a href="{{ route('admin.core.translations.create') }}"><i class="fas fa-plus"></i> Create</a></li>
                        </ul>
                    </li>

                    {{-- Nivel 2: admin/core/settings --}}
                    <li><a href="{{ route('admin.core.settings.index') }}"><i class="fas fa-sliders-h"></i> Settings</a>
                        <ul>
                            {{-- Nivel 3: admin/core/settings/create --}}
                            <li><a href="{{ route('admin.core.settings.create') }}"><i class="fas fa-plus"></i> Create</a></li>
                        </ul>
                    </li>

                    {{-- Nivel 2: admin/core/style --}}
                    <li><a href="#"><i class="fas fa-paint-brush"></i> Style</a>
                        <ul>
                            {{-- Nivel 3: admin/core/style/theme, format, visual, form, table, charts, maps --}}
                            <li><a href="{{ route('admin.core.css-themes.index') }}"><i class="fas fa-palette"></i> Theme</a></li>
                            <li><a href="{{ route('admin.core.style.format') }}"><i class="fas fa-font"></i> Format</a></li>
                            <li><a href="{{ route('admin.core.style.visual') }}"><i class="fas fa-eye"></i> Visual</a></li>
                            <li><a href="{{ route('admin.core.style.form') }}"><i class="fas fa-wpforms"></i> Form</a></li>
                            <li><a href="{{ route('admin.core.style.table') }}"><i class="fas fa-table"></i> Table</a></li>
                            <li><a href="{{ route('admin.core.style.charts') }}"><i class="fas fa-chart-bar"></i> Charts</a></li>
                            <li><a href="{{ route('admin.core.style.maps') }}"><i class="fas fa-map"></i> Maps</a></li>
                        </ul>
                    </li>

                    {{-- Nivel 2: admin/core/feature-flags --}}
                    <li><a href="{{ route('admin.core.feature-flags.index') }}"><i class="fas fa-toggle-on"></i> Feature Flags</a></li>
                </ul>
            </li>

            {{-- Nivel 1: admin/backup --}}
            <li><a href="#"><i class="fas fa-archive"></i> Backup</a>
                <ul>
                    {{-- Nivel 2: admin/backup/create, admin/backup/restore --}}
                    <li><a href="#"><i class="fas fa-plus-square"></i> Create</a></li>
                    <li><a href="#"><i class="fas fa-undo"></i> Restore</a></li>
                </ul>
            </li>

            {{-- Nivel 1: admin/tools --}}
            <li><a href="#"><i class="fas fa-tools"></i> Tools</a></li>

            {{-- Nivel 1: admin/audit-log --}}
            <li><a href="#"><i class="fas fa-history"></i> Audit Log</a></li>

            {{-- Nivel 1: admin/monitor --}}
            <li><a href="#"><i class="fas fa-desktop"></i> Monitor</a>
                <ul>
                    {{-- Nivel 2: admin/monitor/logs, admin/monitor/errors, admin/monitor/modules --}}
                    <li><a href="{{ route('admin.monitor.logs.index') }}"><i class="fas fa-file-alt"></i> Logs</a></li>
                    <li><a href="{{ route('admin.monitor.errors.index') }}"><i class="fas fa-exclamation-triangle"></i> Errors</a></li>
                    <li><a href="{{ route('admin.monitor.modules.index') }}"><i class="fas fa-boxes"></i> Modules</a></li>
                </ul>
            </li>

            {{-- Nivel 1: dashboard --}}
            <li><a href="#"><i class="fas fa-user-circle"></i> Dashboard</a>
                <ul>
                    {{-- Nivel 2: dashboard/overview, dashboard/profile, dashboard/settings, dashboard/{module-name} --}}
                    <li><a href="#"><i class="fas fa-chart-pie"></i> Overview</a></li>
                    <li><a href="#"><i class="fas fa-user"></i> Profile</a></li>
                    <li><a href="#"><i class="fas fa-sliders-h"></i> Settings</a></li>
                    <li><a href="#"><i class="fas fa-puzzle-piece"></i> Modules</a></li>
                </ul>
            </li>
        </ul>
    </nav>
</aside>