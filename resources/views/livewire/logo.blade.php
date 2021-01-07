<div class="mx-auto relative logo @if ($darkMode) dark @endif">
        <span class="logo-icon">
            <i class="far fa-list-alt"></i>
        </span>
    <span class="absolute create uppercase">Create</span>
    <span class="absolute resume uppercase">Resume</span>

    <style>
        .logo {
            width: 85px;
            padding: 0;
        }

        .create,
        .resume {
            font-size: 10px !important;
            font-weight: 800 !important;
            color: #c7ddea;
            letter-spacing: 2px;
            font-family: "Poppins", sans-serif !important;
        }

        .create {
            top: 3px;
            left: 35px;
        }

        .resume {
            top: 14px;
            left: 35px;
        }

        .logo-icon i {
            font-size: 30px !important;
            color: #c7ddea;
        }

        .dark.logo .logo-icon i,
        .dark.logo .resume,
        .dark.logo .create {
            color: #125379;
        }

    </style>
</div>
