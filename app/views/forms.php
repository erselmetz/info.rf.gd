<!DOCTYPE html>
<html lang="en" class="has-aside-left has-aside-mobile-transition has-navbar-fixed-top has-aside-expanded">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Forms - Admin One HTML - Bulma Admin Dashboard</title>

    <!-- Bulma is included -->
    <link rel="stylesheet" href="<?= assets('css/main.min.css') ?>">

    <!-- jquery ui -->
    <link rel="stylesheet" href="<?= assets('css/jquery-ui.min.css') ?>">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
</head>

<body>
    <div id="app">
        <nav id="navbar-main" class="navbar is-fixed-top">
            <div class="navbar-brand">
                <a class="navbar-item is-hidden-desktop jb-aside-mobile-toggle">
                    <span class="icon"><i class="mdi mdi-forwardburger mdi-24px"></i></span>
                </a>
                <div class="navbar-item has-control">
                    <div class="control"><input placeholder="Search everywhere..." class="input"></div>
                </div>
            </div>
            <div class="navbar-brand is-right">
                <a class="navbar-item is-hidden-desktop jb-navbar-menu-toggle" data-target="navbar-menu">
                    <span class="icon"><i class="mdi mdi-dots-vertical"></i></span>
                </a>
            </div>
            <div class="navbar-menu fadeIn animated faster" id="navbar-menu">
                <div class="navbar-end">
                    <div class="navbar-item has-dropdown has-dropdown-with-icons has-divider has-user-avatar is-hoverable">
                        <a class="navbar-link is-arrowless">
                            <div class="is-user-avatar">
                                <img src="https://avatars.dicebear.com/v2/initials/john-doe.svg" alt="John Doe">
                            </div>
                            <div class="is-user-name">
                                <span>John Doe</span>
                            </div>
                            <span class="icon"><i class="mdi mdi-chevron-down"></i></span>
                        </a>
                        <div class="navbar-dropdown">
                            <a href="profile" class="navbar-item">
                                <span class="icon"><i class="mdi mdi-account"></i></span>
                                <span>My Profile</span>
                            </a>
                            <a class="navbar-item">
                                <span class="icon"><i class="mdi mdi-settings"></i></span>
                                <span>Settings</span>
                            </a>
                            <a class="navbar-item">
                                <span class="icon"><i class="mdi mdi-email"></i></span>
                                <span>Messages</span>
                            </a>
                            <hr class="navbar-divider">
                            <a class="navbar-item">
                                <span class="icon"><i class="mdi mdi-logout"></i></span>
                                <span>Log Out</span>
                            </a>
                        </div>
                    </div>
                    <a href="https://justboil.me/bulma-admin-template/free-html-dashboard/" title="About" class="navbar-item has-divider is-desktop-icon-only">
                        <span class="icon"><i class="mdi mdi-help-circle-outline"></i></span>
                        <span>About</span>
                    </a>
                    <a title="Log out" class="navbar-item is-desktop-icon-only">
                        <span class="icon"><i class="mdi mdi-logout"></i></span>
                        <span>Log out</span>
                    </a>
                </div>
            </div>
        </nav>
        <aside class="aside is-placed-left is-expanded">
            <div class="aside-tools">
                <div class="aside-tools-label">
                    <span><b>Admin</b> One HTML</span>
                </div>
            </div>
            <div class="menu is-menu-main">
                <p class="menu-label">General</p>
                <ul class="menu-list">
                    <li>
                        <a href="index" class="has-icon">
                            <span class="icon"><i class="mdi mdi-desktop-mac"></i></span>
                            <span class="menu-item-label">Dashboard</span>
                        </a>
                    </li>
                </ul>
                <p class="menu-label">Examples</p>
                <ul class="menu-list">
                    <li>
                        <a href="tables" class="has-icon">
                            <span class="icon"><i class="mdi mdi-table"></i></span>
                            <span class="menu-item-label">Tables</span>
                        </a>
                    </li>
                    <li>
                        <a href="forms" class="is-active has-icon">
                            <span class="icon"><i class="mdi mdi-square-edit-outline"></i></span>
                            <span class="menu-item-label">Forms</span>
                        </a>
                    </li>
                    <li>
                        <a href="profile" class="has-icon">
                            <span class="icon"><i class="mdi mdi-account-circle"></i></span>
                            <span class="menu-item-label">Profile</span>
                        </a>
                    </li>
                    <li>
                        <a class="has-icon has-dropdown-icon">
                            <span class="icon"><i class="mdi mdi-view-list"></i></span>
                            <span class="menu-item-label">Submenus</span>
                            <div class="dropdown-icon">
                                <span class="icon"><i class="mdi mdi-plus"></i></span>
                            </div>
                        </a>
                        <ul>
                            <li>
                                <a href="#void">
                                    <span>Sub-item One</span>
                                </a>
                            </li>
                            <li>
                                <a href="#void">
                                    <span>Sub-item Two</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <p class="menu-label">About</p>
                <ul class="menu-list">
                    <li>
                        <a href="https://github.com/vikdiesel/admin-one-bulma-dashboard" target="_blank" class="has-icon">
                            <span class="icon"><i class="mdi mdi-github-circle"></i></span>
                            <span class="menu-item-label">GitHub</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://justboil.me/bulma-admin-template/free-html-dashboard/" class="has-icon">
                            <span class="icon"><i class="mdi mdi-help-circle"></i></span>
                            <span class="menu-item-label">About</span>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>
        <section class="section is-title-bar">
            <div class="level">
                <div class="level-left">
                    <div class="level-item">
                        <ul>
                            <li>Admin</li>
                            <li>Forms</li>
                        </ul>
                    </div>
                </div>
                <div class="level-right">
                    <div class="level-item">
                        <div class="buttons is-right">
                            <a href="https://github.com/vikdiesel/admin-one-bulma-dashboard" target="_blank" class="button is-primary">
                                <span class="icon"><i class="mdi mdi-github-circle"></i></span>
                                <span>GitHub</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="hero is-hero-bar">
            <div class="hero-body">
                <div class="level">
                    <div class="level-left">
                        <div class="level-item">
                            <h1 class="title">
                                Add Info
                            </h1>
                        </div>
                    </div>
                    <div class="level-right" style="display: none;">
                        <div class="level-item"></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section is-main-section">

            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        <span class="icon"><i class="mdi mdi-ballot"></i></span>
                        Forms
                    </p>
                </header>
                <div class="card-content">
                    <div class="container">
                        <button id="addTextBox" class="button">Text Box</button>
                        <button id="addParagraph" class="button">Paragraph</button>
                        <!-- <button id="addRow" class="button">Row</button>
                        <button id="addColumn" class="button">Column</button> -->
                    </div>
                    <hr>
                    <form method="get">
                        <div id="formsArea" class="form_sortable"></div>
                        <hr>
                        <div class="container">
                            <input type="submit" value="Create" class="button is-primary">
                        </div>
                    </form>
                </div>
            </div>

        </section>

        <div id="draggable_fieldName" title="Field Name" class="modal">
            <div class="modal-background jb-modal-close"></div>
            <div class="modal-card">
                <header class="modal-card-head">
                    <p class="modal-card-title">Enter Field Name</p>
                    <button class="delete jb-modal-close" aria-label="close"></button>
                </header>
                <section class="modal-card-body">
                    <input type="text" class="input" id="dialog_fieldName_value">
                </section>
                <footer class="modal-card-foot">
                    <button class="button jb-modal-close">Cancel</button>
                    <input type="submit" class="button is-primary jb-modal-close" id="dialog_fieldName_button">
                </footer>
            </div>
            <button class="modal-close is-large jb-modal-close" aria-label="close"></button>
        </div>
    </div>

    <!-- Scripts below are for demo only -->
    <script type="text/javascript" src="<?= assets('js/main.min.js') ?>"></script>

    <!-- Icons below are for demo only. Feel free to use any icon pack. Docs: https://bulma.io/documentation/elements/icon/ -->
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.9.95/css/materialdesignicons.min.css">

    <script src="<?= assets('js/jquery.js') ?>"></script>
    <script src="<?= assets('js/jquery-ui.min.js') ?>"></script>

    <script>

        const formsArea = $("#formsArea");
        $("#addTextBox").click(function() {
            $("#draggable_fieldName").addClass('is-active');
        });

        $("#addParagraph").click(function(){
            const p = `
                <textarea class='input'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</textarea>
            `;

            formsArea.append(p);
        });

        $("#addRow").click(function(){
            const row = `
                <div class='form_droppable columns box'>

                </div>
            `;

            formsArea.append(row);

            $(".form_sortable").sortable();
            $('.form_draggable').draggable();
            $('.form_droppable').droppable();
        });

        $("#addColumn").click(function(){
            const column = `
                <div class='form_sortable form_draggable form_droppable column box'>
                
                </div>
            `;

            formsArea.append(column);

            $(".form_sortable").sortable();
            $('.form_draggable').draggable();
            $('.form_droppable').droppable();
        });

        $("#dialog_fieldName_button").click(function() {
            var fieldName_value = $("#dialog_fieldName_value");

            const form = `
            <div class='form_draggable field is-horizontal'>
                <div class='field-label is-normal'>
                    <label class='label'>` + fieldName_value.val() + `</label>
                </div>
                <div class='field-body'>
                    <div class='field'>
                        <div class='control'>
                            <input type='text' value='' class='input'/>
                        </div>
                    </div>
                </div>
            </div>`;

            formsArea.append(form);

            fieldName_value.val('');

            $(".form_sortable").sortable();
            $('.form_draggable').draggable();
        });

        $(".form_sortable").sortable();

        $("#draggable_fieldName .modal-card").draggable();
    </script>
</body>

</html>