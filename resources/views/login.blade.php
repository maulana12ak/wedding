<!DOCTYPE html>
<html lang="en" dir="ltr" class="fi min-h-screen"><head>
        
<meta charset="utf-8">
        <meta name="csrf-token" content="q4CKRKMQYgIonef8SvUs6X82fzMO6rqSHwbVKZFO">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        
        
        <title>
            Login -  Laravel
        </title>

        

        <style>
            [x-cloak=''],
            [x-cloak='x-cloak'],
            [x-cloak='1'] {
                display: none !important;
            }

            @media (max-width: 1023px) {
                [x-cloak='-lg'] {
                    display: none !important;
                }
            }

            @media (min-width: 1024px) {
                [x-cloak='lg'] {
                    display: none !important;
                }
            }
        </style>

        <link href="https://coba.cloudborneo.com/css/filament/forms/forms.css?v=3.2.127.0" rel="stylesheet" data-navigate-track="">
                <link href="https://coba.cloudborneo.com/css/filament/support/support.css?v=3.2.127.0" rel="stylesheet" data-navigate-track="">
    
<style>
    :root {
         --danger-50:254, 242, 242;  --danger-100:254, 226, 226;  --danger-200:254, 202, 202;  --danger-300:252, 165, 165;  --danger-400:248, 113, 113;  --danger-500:239, 68, 68;  --danger-600:220, 38, 38;  --danger-700:185, 28, 28;  --danger-800:153, 27, 27;  --danger-900:127, 29, 29;  --danger-950:69, 10, 10;  --gray-50:250, 250, 250;  --gray-100:244, 244, 245;  --gray-200:228, 228, 231;  --gray-300:212, 212, 216;  --gray-400:161, 161, 170;  --gray-500:113, 113, 122;  --gray-600:82, 82, 91;  --gray-700:63, 63, 70;  --gray-800:39, 39, 42;  --gray-900:24, 24, 27;  --gray-950:9, 9, 11;  --info-50:239, 246, 255;  --info-100:219, 234, 254;  --info-200:191, 219, 254;  --info-300:147, 197, 253;  --info-400:96, 165, 250;  --info-500:59, 130, 246;  --info-600:37, 99, 235;  --info-700:29, 78, 216;  --info-800:30, 64, 175;  --info-900:30, 58, 138;  --info-950:23, 37, 84;  --primary-50:255, 247, 237;  --primary-100:255, 237, 213;  --primary-200:254, 215, 170;  --primary-300:253, 186, 116;  --primary-400:251, 146, 60;  --primary-500:249, 115, 22;  --primary-600:234, 88, 12;  --primary-700:194, 65, 12;  --primary-800:154, 52, 18;  --primary-900:124, 45, 18;  --primary-950:67, 20, 7;  --success-50:240, 253, 244;  --success-100:220, 252, 231;  --success-200:187, 247, 208;  --success-300:134, 239, 172;  --success-400:74, 222, 128;  --success-500:34, 197, 94;  --success-600:22, 163, 74;  --success-700:21, 128, 61;  --success-800:22, 101, 52;  --success-900:20, 83, 45;  --success-950:5, 46, 22;  --warning-50:255, 251, 235;  --warning-100:254, 243, 199;  --warning-200:253, 230, 138;  --warning-300:252, 211, 77;  --warning-400:251, 191, 36;  --warning-500:245, 158, 11;  --warning-600:217, 119, 6;  --warning-700:180, 83, 9;  --warning-800:146, 64, 14;  --warning-900:120, 53, 15;  --warning-950:69, 26, 3;     }
</style>

        <link rel="preload" as="style" href="https://coba.cloudborneo.com/build/assets/app-CY6Y8rjH.css"><link rel="stylesheet" href="https://coba.cloudborneo.com/build/assets/app-CY6Y8rjH.css" data-navigate-track="reload">
        
            <link rel="preconnect" href="https://fonts.bunny.net">
            <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&amp;display=swap" rel="stylesheet">
        

        <style>
            :root {
                --font-family: 'Inter';
                --sidebar-width: 20rem;
                --collapsed-sidebar-width: 4.5rem;
                --default-theme-mode: system;
            }
        </style>

        
        

                    <script>
                const theme = localStorage.getItem('theme') ?? 'system'
                if (
                    theme === 'dark' ||
                    (theme === 'system' &&
                        window.matchMedia('(prefers-color-scheme: dark)')
                            .matches)
                ) {
                    document.documentElement.classList.add('dark')
                }
            </script>
        
        
    <!-- Livewire Styles --><style>[wire\:loading][wire\:loading], [wire\:loading\.delay][wire\:loading\.delay], [wire\:loading\.inline-block][wire\:loading\.inline-block], [wire\:loading\.inline][wire\:loading\.inline], [wire\:loading\.block][wire\:loading\.block], [wire\:loading\.flex][wire\:loading\.flex], [wire\:loading\.table][wire\:loading\.table], [wire\:loading\.grid][wire\:loading\.grid], [wire\:loading\.inline-flex][wire\:loading\.inline-flex] {display: none;}[wire\:loading\.delay\.none][wire\:loading\.delay\.none], [wire\:loading\.delay\.shortest][wire\:loading\.delay\.shortest], [wire\:loading\.delay\.shorter][wire\:loading\.delay\.shorter], [wire\:loading\.delay\.short][wire\:loading\.delay\.short], [wire\:loading\.delay\.default][wire\:loading\.delay\.default], [wire\:loading\.delay\.long][wire\:loading\.delay\.long], [wire\:loading\.delay\.longer][wire\:loading\.delay\.longer], [wire\:loading\.delay\.longest][wire\:loading\.delay\.longest] {display: none;}[wire\:offline][wire\:offline] {display: none;}[wire\:dirty]:not(textarea):not(input):not(select) {display: none;}:root {--livewire-progress-bar-color: #2299dd;}[x-cloak] {display: none !important;}</style>
<style>/* Make clicks pass-through */

    #nprogress {
      pointer-events: none;
    }

    #nprogress .bar {
      background: var(--livewire-progress-bar-color, #29d);

      position: fixed;
      z-index: 1031;
      top: 0;
      left: 0;

      width: 100%;
      height: 2px;
    }

    /* Fancy blur effect */
    #nprogress .peg {
      display: block;
      position: absolute;
      right: 0px;
      width: 100px;
      height: 100%;
      box-shadow: 0 0 10px var(--livewire-progress-bar-color, #29d), 0 0 5px var(--livewire-progress-bar-color, #29d);
      opacity: 1.0;

      -webkit-transform: rotate(3deg) translate(0px, -4px);
          -ms-transform: rotate(3deg) translate(0px, -4px);
              transform: rotate(3deg) translate(0px, -4px);
    }

    /* Remove these to get rid of the spinner */
    #nprogress .spinner {
      display: block;
      position: fixed;
      z-index: 1031;
      top: 15px;
      right: 15px;
    }

    #nprogress .spinner-icon {
      width: 18px;
      height: 18px;
      box-sizing: border-box;

      border: solid 2px transparent;
      border-top-color: var(--livewire-progress-bar-color, #29d);
      border-left-color: var(--livewire-progress-bar-color, #29d);
      border-radius: 50%;

      -webkit-animation: nprogress-spinner 400ms linear infinite;
              animation: nprogress-spinner 400ms linear infinite;
    }

    .nprogress-custom-parent {
      overflow: hidden;
      position: relative;
    }

    .nprogress-custom-parent #nprogress .spinner,
    .nprogress-custom-parent #nprogress .bar {
      position: absolute;
    }

    @-webkit-keyframes nprogress-spinner {
      0%   { -webkit-transform: rotate(0deg); }
      100% { -webkit-transform: rotate(360deg); }
    }
    @keyframes nprogress-spinner {
      0%   { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }
    </style></head>

    <body class="fi-body fi-panel-app min-h-screen bg-gray-50 font-normal text-gray-950 antialiased dark:bg-gray-950 dark:text-white">
        

        <div class="fi-simple-layout flex min-h-screen flex-col items-center">
        
        <div class="fi-simple-main-ctn flex w-full flex-grow items-center justify-center">
            <main class="fi-simple-main my-16 w-full bg-white px-6 py-12 shadow-sm ring-1 ring-gray-950/5 dark:bg-gray-900 dark:ring-white/10 sm:rounded-xl sm:px-12 max-w-lg">
                <div wire:snapshot="{&quot;data&quot;:{&quot;data&quot;:[{&quot;email&quot;:null,&quot;password&quot;:null,&quot;remember&quot;:false},{&quot;s&quot;:&quot;arr&quot;}],&quot;mountedActions&quot;:[[],{&quot;s&quot;:&quot;arr&quot;}],&quot;mountedActionsArguments&quot;:[[],{&quot;s&quot;:&quot;arr&quot;}],&quot;mountedActionsData&quot;:[[],{&quot;s&quot;:&quot;arr&quot;}],&quot;defaultAction&quot;:null,&quot;defaultActionArguments&quot;:null,&quot;componentFileAttachments&quot;:[[],{&quot;s&quot;:&quot;arr&quot;}],&quot;mountedFormComponentActions&quot;:[[],{&quot;s&quot;:&quot;arr&quot;}],&quot;mountedFormComponentActionsArguments&quot;:[[],{&quot;s&quot;:&quot;arr&quot;}],&quot;mountedFormComponentActionsData&quot;:[[],{&quot;s&quot;:&quot;arr&quot;}],&quot;mountedFormComponentActionsComponents&quot;:[[],{&quot;s&quot;:&quot;arr&quot;}],&quot;mountedInfolistActions&quot;:[[],{&quot;s&quot;:&quot;arr&quot;}],&quot;mountedInfolistActionsData&quot;:[[],{&quot;s&quot;:&quot;arr&quot;}],&quot;mountedInfolistActionsComponent&quot;:null,&quot;mountedInfolistActionsInfolist&quot;:null},&quot;memo&quot;:{&quot;id&quot;:&quot;9EqnU9GlWuaGiIACD2hv&quot;,&quot;name&quot;:&quot;filament.pages.auth.login&quot;,&quot;path&quot;:&quot;app\/login&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;children&quot;:[],&quot;scripts&quot;:[],&quot;assets&quot;:[],&quot;errors&quot;:[],&quot;locale&quot;:&quot;en&quot;},&quot;checksum&quot;:&quot;2428fcef2e7cbab88f19d5532fcf900f8643137c53ece468e04c9e4e1c15fb91&quot;}" wire:effects="{&quot;url&quot;:{&quot;defaultAction&quot;:{&quot;as&quot;:&quot;action&quot;,&quot;use&quot;:&quot;replace&quot;,&quot;alwaysShow&quot;:false,&quot;except&quot;:null},&quot;defaultActionArguments&quot;:{&quot;as&quot;:&quot;actionArguments&quot;,&quot;use&quot;:&quot;replace&quot;,&quot;alwaysShow&quot;:false,&quot;except&quot;:null}}}" wire:id="9EqnU9GlWuaGiIACD2hv" class="fi-simple-page">
    

    <section class="grid auto-cols-fr gap-y-6">
        <header class="fi-simple-header flex flex-col items-center">
    <!--[if BLOCK]><![endif]-->        <!--[if BLOCK]><![endif]-->        <div class="fi-logo flex text-xl font-bold leading-5 tracking-tight text-gray-950 dark:text-white mb-4">
            Laravel
        </div>
    <!--[if ENDBLOCK]><![endif]-->

            

<!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
    <!--[if ENDBLOCK]><![endif]-->

    <!--[if BLOCK]><![endif]-->        <h1 class="fi-simple-header-heading text-center text-2xl font-bold tracking-tight text-gray-950 dark:text-white">
            Sign in
        </h1>
    <!--[if ENDBLOCK]><![endif]-->

    <!--[if BLOCK]><![endif]-->        <p class="fi-simple-header-subheading mt-2 text-center text-sm text-gray-500 dark:text-gray-400">
            or

            <!--[if BLOCK]><![endif]-->    <a href="https://coba.cloudborneo.com/app/register" wire:navigate="" class="fi-link group/link relative inline-flex items-center justify-center outline-none fi-size-md fi-link-size-md gap-1.5 fi-color-custom fi-color-primary fi-ac-action fi-ac-link-action">
        <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

        <span class="font-semibold text-sm text-custom-600 dark:text-custom-400 group-hover/link:underline group-focus-visible/link:underline" style="--c-400:var(--primary-400);--c-600:var(--primary-600);">
            sign up for an account
        </span>

        <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
    </a><!--[if ENDBLOCK]><![endif]-->
        </p>
    <!--[if ENDBLOCK]><![endif]-->
</header>

        <!--[if BLOCK]><![endif]-->             <!--[if ENDBLOCK]><![endif]-->

    

    <form method="post" x-data="{ isProcessing: false }" x-on:submit="if (isProcessing) $event.preventDefault()" x-on:form-processing-started="isProcessing = true" x-on:form-processing-finished="isProcessing = false" class="fi-form grid gap-y-6" id="form" wire:submit="authenticate">
    <div style="--cols-default: repeat(1, minmax(0, 1fr));" class="grid grid-cols-[--cols-default] fi-fo-component-ctn gap-6" x-data="{}" x-on:form-validation-error.window="if ($event.detail.livewireId !== '9EqnU9GlWuaGiIACD2hv') {
                return
            }

            $nextTick(() => {
                let error = $el.querySelector('[data-validation-error]')

                if (! error) {
                    return
                }

                let elementToExpand = error

                while (elementToExpand) {
                    elementToExpand.dispatchEvent(new CustomEvent('expand'))

                    elementToExpand = elementToExpand.parentNode
                }

                setTimeout(
                    () =>
                        error.closest('[data-field-wrapper]').scrollIntoView({
                            behavior: 'smooth',
                            block: 'start',
                            inline: 'start',
                        }),
                    200,
                )
        })">
    <!--[if BLOCK]><![endif]-->        
        <div style="--col-span-default: span 1 / span 1;" class="col-[--col-span-default]" wire:key="9EqnU9GlWuaGiIACD2hv.data.email.Filament\Forms\Components\TextInput">
    <!--[if BLOCK]><![endif]-->                <div data-field-wrapper="" class="fi-fo-field-wrp">
    <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

    <div class="grid gap-y-2">
        <!--[if BLOCK]><![endif]-->            <div class="flex items-center gap-x-3 justify-between ">
                <!--[if BLOCK]><![endif]-->                    <label class="fi-fo-field-wrp-label inline-flex items-center gap-x-3" for="data.email">
    

    <span class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
        
        Email address<!--[if BLOCK]><![endif]--><sup class="text-danger-600 dark:text-danger-400 font-medium">*</sup>
        <!--[if ENDBLOCK]><![endif]-->
    </span>

    
</label>
                <!--[if ENDBLOCK]><![endif]-->

                <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
            </div>
        <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]-->            <div class="grid auto-cols-fr gap-y-2">
                <div class="fi-input-wrp flex rounded-lg shadow-sm ring-1 transition duration-75 bg-white dark:bg-white/5 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-2 ring-gray-950/10 dark:ring-white/20 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-600 dark:[&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-500 fi-fo-text-input overflow-hidden">
    <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

    <div class="fi-input-wrp-input min-w-0 flex-1">
        <input class="fi-input block w-full border-none py-1.5 text-base text-gray-950 transition duration-75 placeholder:text-gray-400 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.400)] dark:text-white dark:placeholder:text-gray-500 dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] dark:disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.500)] sm:text-sm sm:leading-6 bg-white/0 ps-3 pe-3" autocomplete="on" autofocus="autofocus" id="data.email" required="required" type="email" wire:model="data.email" tabindex="1">
    </div>

    <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
</div>

    <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

                <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

                <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
            </div>
        <!--[if ENDBLOCK]><![endif]-->
    </div>
</div>

            <!--[if ENDBLOCK]><![endif]-->
</div>
            
        <div style="--col-span-default: span 1 / span 1;" class="col-[--col-span-default]" wire:key="9EqnU9GlWuaGiIACD2hv.data.password.Filament\Forms\Components\TextInput">
    <!--[if BLOCK]><![endif]-->                <div data-field-wrapper="" class="fi-fo-field-wrp">
    <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

    <div class="grid gap-y-2">
        <!--[if BLOCK]><![endif]-->            <div class="flex items-center gap-x-3 justify-between ">
                <!--[if BLOCK]><![endif]-->                    <label class="fi-fo-field-wrp-label inline-flex items-center gap-x-3" for="data.password">
    

    <span class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
        
        Password<!--[if BLOCK]><![endif]--><sup class="text-danger-600 dark:text-danger-400 font-medium">*</sup>
        <!--[if ENDBLOCK]><![endif]-->
    </span>

    
</label>
                <!--[if ENDBLOCK]><![endif]-->

                <!--[if BLOCK]><![endif]-->                    <div class="fi-fo-field-wrp-hint flex items-center gap-x-3 text-sm">
    <!--[if BLOCK]><![endif]-->        <span class="fi-fo-field-wrp-hint-label text-gray-500 fi-color-gray" style="--c-400:var(--gray-400);--c-600:var(--gray-600);">
            <!--[if BLOCK]><![endif]-->    <a href="https://coba.cloudborneo.com/app/password-reset/request" wire:navigate="" class="fi-link group/link relative inline-flex items-center justify-center outline-none fi-size-md fi-link-size-md gap-1.5 fi-color-custom fi-color-primary" tabindex="3">
        <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

        <span class="font-semibold text-sm text-custom-600 dark:text-custom-400 group-hover/link:underline group-focus-visible/link:underline" style="--c-400:var(--primary-400);--c-600:var(--primary-600);">
            Forgot password?
        </span>

        <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
    </a><!--[if ENDBLOCK]><![endif]-->
        </span>
    <!--[if ENDBLOCK]><![endif]-->

    <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

    <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
</div>
                <!--[if ENDBLOCK]><![endif]-->
            </div>
        <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]-->            <div class="grid auto-cols-fr gap-y-2">
                <div class="fi-input-wrp flex rounded-lg shadow-sm ring-1 transition duration-75 bg-white dark:bg-white/5 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-2 ring-gray-950/10 dark:ring-white/20 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-600 dark:[&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-500 fi-fo-text-input overflow-hidden" x-data="{ isPasswordRevealed: false }">
    <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

    <div class="fi-input-wrp-input min-w-0 flex-1">
        <input class="fi-input block w-full border-none py-1.5 text-base text-gray-950 transition duration-75 placeholder:text-gray-400 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.400)] dark:text-white dark:placeholder:text-gray-500 dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] dark:disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.500)] sm:text-sm sm:leading-6 bg-white/0 ps-3 pe-3 [&amp;::-ms-reveal]:hidden" autocomplete="current-password" id="data.password" required="required" wire:model="data.password" x-bind:type="isPasswordRevealed ? 'text' : 'password'" tabindex="2" type="password">
    </div>

    <!--[if BLOCK]><![endif]-->        <div class="fi-input-wrp-suffix flex items-center gap-x-3 pe-3 border-s border-gray-200 ps-3 dark:border-white/10">
            <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

            <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

            <!--[if BLOCK]><![endif]-->                <div class="flex items-center gap-3">
                    <!--[if BLOCK]><![endif]-->                        <!--[if BLOCK]><![endif]-->    <button style="--c-300:var(--gray-300);--c-400:var(--gray-400);--c-500:var(--gray-500);--c-600:var(--gray-600);" class="fi-icon-btn relative flex items-center justify-center rounded-lg outline-none transition duration-75 focus-visible:ring-2 -m-1.5 h-8 w-8 text-gray-400 hover:text-gray-500 focus-visible:ring-primary-600 dark:text-gray-500 dark:hover:text-gray-400 dark:focus-visible:ring-primary-500 fi-color-gray fi-ac-action fi-ac-icon-btn-action" title="Show password" type="button" wire:loading.attr="disabled" x-on:click="isPasswordRevealed = true" x-show="! isPasswordRevealed">
        <!--[if BLOCK]><![endif]-->            <span class="sr-only">
                Show password
            </span>
        <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]-->    <svg class="fi-icon-btn-icon h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
  <path d="M10 12.5a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"></path>
  <path fill-rule="evenodd" d="M.664 10.59a1.651 1.651 0 0 1 0-1.186A10.004 10.004 0 0 1 10 3c4.257 0 7.893 2.66 9.336 6.41.147.381.146.804 0 1.186A10.004 10.004 0 0 1 10 17c-4.257 0-7.893-2.66-9.336-6.41ZM14 10a4 4 0 1 1-8 0 4 4 0 0 1 8 0Z" clip-rule="evenodd"></path>
</svg><!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
    </button>
<!--[if ENDBLOCK]><![endif]-->

                                            <!--[if BLOCK]><![endif]-->    <button style="--c-300: var(--gray-300); --c-400: var(--gray-400); --c-500: var(--gray-500); --c-600: var(--gray-600); display: none;" class="fi-icon-btn relative flex items-center justify-center rounded-lg outline-none transition duration-75 focus-visible:ring-2 -m-1.5 h-8 w-8 text-gray-400 hover:text-gray-500 focus-visible:ring-primary-600 dark:text-gray-500 dark:hover:text-gray-400 dark:focus-visible:ring-primary-500 fi-color-gray fi-ac-action fi-ac-icon-btn-action" title="Hide password" type="button" wire:loading.attr="disabled" x-on:click="isPasswordRevealed = false" x-show="isPasswordRevealed">
        <!--[if BLOCK]><![endif]-->            <span class="sr-only">
                Hide password
            </span>
        <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]-->    <svg class="fi-icon-btn-icon h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
  <path fill-rule="evenodd" d="M3.28 2.22a.75.75 0 0 0-1.06 1.06l14.5 14.5a.75.75 0 1 0 1.06-1.06l-1.745-1.745a10.029 10.029 0 0 0 3.3-4.38 1.651 1.651 0 0 0 0-1.185A10.004 10.004 0 0 0 9.999 3a9.956 9.956 0 0 0-4.744 1.194L3.28 2.22ZM7.752 6.69l1.092 1.092a2.5 2.5 0 0 1 3.374 3.373l1.091 1.092a4 4 0 0 0-5.557-5.557Z" clip-rule="evenodd"></path>
  <path d="m10.748 13.93 2.523 2.523a9.987 9.987 0 0 1-3.27.547c-4.258 0-7.894-2.66-9.337-6.41a1.651 1.651 0 0 1 0-1.186A10.007 10.007 0 0 1 2.839 6.02L6.07 9.252a4 4 0 0 0 4.678 4.678Z"></path>
</svg><!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
    </button>
<!--[if ENDBLOCK]><![endif]-->

                    <!--[if ENDBLOCK]><![endif]-->
                </div>
            <!--[if ENDBLOCK]><![endif]-->
        </div>
    <!--[if ENDBLOCK]><![endif]-->
</div>

    <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

                <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

                <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
            </div>
        <!--[if ENDBLOCK]><![endif]-->
    </div>
</div>

            <!--[if ENDBLOCK]><![endif]-->
</div>
            
        <div style="--col-span-default: span 1 / span 1;" class="col-[--col-span-default]" wire:key="9EqnU9GlWuaGiIACD2hv.data.remember.Filament\Forms\Components\Checkbox">
    <!--[if BLOCK]><![endif]-->                <div data-field-wrapper="" class="fi-fo-field-wrp">
    <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

    <div class="grid gap-y-2">
        <!--[if BLOCK]><![endif]-->            <div class="flex items-center gap-x-3 justify-between ">
                <!--[if BLOCK]><![endif]-->                    <label class="fi-fo-field-wrp-label inline-flex items-center gap-x-3" for="data.remember">
    <input type="checkbox" class="fi-checkbox-input rounded border-none bg-white shadow-sm ring-1 transition duration-75 checked:ring-0 focus:ring-2 focus:ring-offset-0 disabled:pointer-events-none disabled:bg-gray-50 disabled:text-gray-50 disabled:checked:bg-current disabled:checked:text-gray-400 dark:bg-white/5 dark:disabled:bg-transparent dark:disabled:checked:bg-gray-600 text-primary-600 ring-gray-950/10 focus:ring-primary-600 checked:focus:ring-primary-500/50 dark:text-primary-500 dark:ring-white/20 dark:checked:bg-primary-500 dark:focus:ring-primary-500 dark:checked:focus:ring-primary-400/50 dark:disabled:ring-white/10" id="data.remember" wire:loading.attr="disabled" wire:model="data.remember">

    <span class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
        
        Remember me<!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
    </span>

    
</label>
                <!--[if ENDBLOCK]><![endif]-->

                <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
            </div>
        <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
    </div>
</div>

            <!--[if ENDBLOCK]><![endif]-->
</div>
    <!--[if ENDBLOCK]><![endif]-->
</div>


        <!--[if BLOCK]><![endif]-->    <div class="fi-form-actions">
        <!--[if BLOCK]><![endif]-->    <div class="fi-ac gap-3 grid grid-cols-[repeat(auto-fit,minmax(0,1fr))]">
        <!--[if BLOCK]><![endif]-->            <!--[if BLOCK]><![endif]-->                <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

<button x-data="{
            form: null,
            isProcessing: false,
            processingMessage: null,
        }" x-init="
            form = $el.closest('form')

            form?.addEventListener('form-processing-started', (event) => {
                isProcessing = true
                processingMessage = event.detail.message
            })

            form?.addEventListener('form-processing-finished', () => {
                isProcessing = false
            })
        " x-bind:class="{ 'enabled:opacity-70 enabled:cursor-wait': isProcessing }" style="--c-400:var(--primary-400);--c-500:var(--primary-500);--c-600:var(--primary-600);" class="fi-btn relative grid-flow-col items-center justify-center font-semibold outline-none transition duration-75 focus-visible:ring-2 rounded-lg fi-color-custom fi-btn-color-primary fi-color-primary fi-size-md fi-btn-size-md gap-1.5 px-3 py-2 text-sm inline-grid shadow-sm bg-custom-600 text-white hover:bg-custom-500 focus-visible:ring-custom-500/50 dark:bg-custom-500 dark:hover:bg-custom-400 dark:focus-visible:ring-custom-400/50 fi-ac-action fi-ac-btn-action" type="submit" wire:loading.attr="disabled" x-bind:disabled="isProcessing">
    <!--[if BLOCK]><![endif]-->        <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]-->            <svg fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="animate-spin fi-btn-icon transition duration-75 h-5 w-5 text-white" wire:loading.delay.default="" wire:target="authenticate">
    <path clip-rule="evenodd" d="M12 19C15.866 19 19 15.866 19 12C19 8.13401 15.866 5 12 5C8.13401 5 5 8.13401 5 12C5 15.866 8.13401 19 12 19ZM12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill-rule="evenodd" fill="currentColor" opacity="0.2"></path>
    <path d="M2 12C2 6.47715 6.47715 2 12 2V5C8.13401 5 5 8.13401 5 12H2Z" fill="currentColor"></path>
</svg>
        <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]-->            <svg fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="animate-spin fi-btn-icon transition duration-75 h-5 w-5 text-white" x-show="isProcessing" style="display: none;">
    <path clip-rule="evenodd" d="M12 19C15.866 19 19 15.866 19 12C19 8.13401 15.866 5 12 5C8.13401 5 5 8.13401 5 12C5 15.866 8.13401 19 12 19ZM12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill-rule="evenodd" fill="currentColor" opacity="0.2"></path>
    <path d="M2 12C2 6.47715 6.47715 2 12 2V5C8.13401 5 5 8.13401 5 12H2Z" fill="currentColor"></path>
</svg>
        <!--[if ENDBLOCK]><![endif]-->
    <!--[if ENDBLOCK]><![endif]-->

    <span x-show="! isProcessing" class="fi-btn-label">
        Sign in
    </span>

    <!--[if BLOCK]><![endif]-->        <span x-show="isProcessing" x-text="processingMessage" class="fi-btn-label" style="display: none;"></span>
    <!--[if ENDBLOCK]><![endif]-->

    <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

    <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
</button>

            <!--[if ENDBLOCK]><![endif]-->
        <!--[if ENDBLOCK]><![endif]-->
    </div>
<!--[if ENDBLOCK]><![endif]-->
    </div>
<!--[if ENDBLOCK]><![endif]-->
</form>
    </section>

    <!--[if BLOCK]><![endif]-->        <!--[if BLOCK]><![endif]-->    <form wire:submit.prevent="callMountedAction">
        
        <div aria-modal="true" role="dialog" x-data="{
        isOpen: false,

        livewire: null,

        close: function () {
            this.isOpen = false

            this.$refs.modalContainer.dispatchEvent(
                new CustomEvent('modal-closed', { id: '9EqnU9GlWuaGiIACD2hv-action' }),
            )
        },

        open: function () {
            this.$nextTick(() => {
                this.isOpen = true

                                    this.$dispatch('ax-modal-opened')
                
                this.$refs.modalContainer.dispatchEvent(
                    new CustomEvent('modal-opened', { id: '9EqnU9GlWuaGiIACD2hv-action' }),
                )
            })
        },
    }" x-on:close-modal.window="if ($event.detail.id === '9EqnU9GlWuaGiIACD2hv-action') close()" x-on:open-modal.window="if ($event.detail.id === '9EqnU9GlWuaGiIACD2hv-action') open()" x-trap.noscroll="isOpen" x-bind:class="{
        'fi-modal-open': isOpen,
    }" class="fi-modal block">
    <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

    <div x-show="isOpen" style="display: none;">
        <div aria-hidden="true" x-show="isOpen" x-transition.duration.300ms.opacity="" class="fi-modal-close-overlay fixed inset-0 z-40 bg-gray-950/50 dark:bg-gray-950/75" style="display: none;"></div>

        <div class="fixed inset-0 z-40 overflow-y-auto cursor-pointer">
            <div x-ref="modalContainer" x-on:click.self="
                        document.activeElement.selectionStart === undefined &amp;&amp;
                            document.activeElement.selectionEnd === undefined &amp;&amp;
                            $dispatch('close-modal', { id: '9EqnU9GlWuaGiIACD2hv-action' })
                    " class="relative grid min-h-full grid-rows-[1fr_auto_1fr] justify-items-center sm:grid-rows-[1fr_auto_3fr] p-4" x-on:closed-form-component-action-modal.window="if (($event.detail.id === '9EqnU9GlWuaGiIACD2hv') &amp;&amp; $wire.mountedActions.length) open()" x-on:modal-closed.stop="const mountedActionShouldOpenModal = false


                if (! mountedActionShouldOpenModal) {
                    return
                }

                if ($wire.mountedFormComponentActions.length) {
                    return
                }

                $wire.unmountAction(false, false)" x-on:opened-form-component-action-modal.window="if ($event.detail.id === '9EqnU9GlWuaGiIACD2hv') close()">
                <div x-data="{ isShown: false }" x-init="
                        $nextTick(() => {
                            isShown = isOpen
                            $watch('isOpen', () => (isShown = isOpen))
                        })
                    " x-on:keydown.window.escape="$dispatch('close-modal', { id: '9EqnU9GlWuaGiIACD2hv-action' })" x-show="isShown" x-transition:enter="duration-300" x-transition:leave="duration-300" x-transition:enter-start="scale-95 opacity-0" x-transition:enter-end="scale-100 opacity-100" x-transition:leave-start="scale-100 opacity-100" x-transition:leave-end="scale-95 opacity-0" class="fi-modal-window pointer-events-auto relative row-start-2 flex w-full cursor-default flex-col bg-white shadow-xl ring-1 ring-gray-950/5 dark:bg-gray-900 dark:ring-white/10 mx-auto rounded-xl hidden max-w-sm" style="display: none;">
                    <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

                    <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

                    <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
                </div>
            </div>
        </div>
    </div>
</div>
    </form>

    <!--[if ENDBLOCK]><![endif]-->

<!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

<!--[if BLOCK]><![endif]-->    <form wire:submit.prevent="callMountedInfolistAction">
        
        <div aria-modal="true" role="dialog" x-data="{
        isOpen: false,

        livewire: null,

        close: function () {
            this.isOpen = false

            this.$refs.modalContainer.dispatchEvent(
                new CustomEvent('modal-closed', { id: '9EqnU9GlWuaGiIACD2hv-infolist-action' }),
            )
        },

        open: function () {
            this.$nextTick(() => {
                this.isOpen = true

                                    this.$dispatch('ax-modal-opened')
                
                this.$refs.modalContainer.dispatchEvent(
                    new CustomEvent('modal-opened', { id: '9EqnU9GlWuaGiIACD2hv-infolist-action' }),
                )
            })
        },
    }" x-on:close-modal.window="if ($event.detail.id === '9EqnU9GlWuaGiIACD2hv-infolist-action') close()" x-on:open-modal.window="if ($event.detail.id === '9EqnU9GlWuaGiIACD2hv-infolist-action') open()" x-trap.noscroll="isOpen" x-bind:class="{
        'fi-modal-open': isOpen,
    }" class="fi-modal block">
    <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

    <div x-show="isOpen" style="display: none;">
        <div aria-hidden="true" x-show="isOpen" x-transition.duration.300ms.opacity="" class="fi-modal-close-overlay fixed inset-0 z-40 bg-gray-950/50 dark:bg-gray-950/75" style="display: none;"></div>

        <div class="fixed inset-0 z-40 overflow-y-auto cursor-pointer">
            <div x-ref="modalContainer" x-on:click.self="
                        document.activeElement.selectionStart === undefined &amp;&amp;
                            document.activeElement.selectionEnd === undefined &amp;&amp;
                            $dispatch('close-modal', { id: '9EqnU9GlWuaGiIACD2hv-infolist-action' })
                    " class="relative grid min-h-full grid-rows-[1fr_auto_1fr] justify-items-center sm:grid-rows-[1fr_auto_3fr] p-4" x-on:closed-form-component-action-modal.window="if (($event.detail.id === '9EqnU9GlWuaGiIACD2hv') &amp;&amp; $wire.mountedInfolistActions.length) open()" x-on:modal-closed.stop="const mountedInfolistActionShouldOpenModal = false


                if (! mountedInfolistActionShouldOpenModal) {
                    return
                }

                if ($wire.mountedFormComponentActions.length) {
                    return
                }

                $wire.unmountInfolistAction(false, false)" x-on:opened-form-component-action-modal.window="if ($event.detail.id === '9EqnU9GlWuaGiIACD2hv') close()">
                <div x-data="{ isShown: false }" x-init="
                        $nextTick(() => {
                            isShown = isOpen
                            $watch('isOpen', () => (isShown = isOpen))
                        })
                    " x-on:keydown.window.escape="$dispatch('close-modal', { id: '9EqnU9GlWuaGiIACD2hv-infolist-action' })" x-show="isShown" x-transition:enter="duration-300" x-transition:leave="duration-300" x-transition:enter-start="scale-95 opacity-0" x-transition:enter-end="scale-100 opacity-100" x-transition:leave-start="scale-100 opacity-100" x-transition:leave-end="scale-95 opacity-0" class="fi-modal-window pointer-events-auto relative row-start-2 flex w-full cursor-default flex-col bg-white shadow-xl ring-1 ring-gray-950/5 dark:bg-gray-900 dark:ring-white/10 mx-auto rounded-xl hidden max-w-sm" style="display: none;">
                    <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

                    <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

                    <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
                </div>
            </div>
        </div>
    </div>
</div>
    </form>

    <!--[if ENDBLOCK]><![endif]-->

<!--[if BLOCK]><![endif]-->    
    <form wire:submit.prevent="callMountedFormComponentAction">
        <div aria-modal="true" role="dialog" x-data="{
        isOpen: false,

        livewire: null,

        close: function () {
            this.isOpen = false

            this.$refs.modalContainer.dispatchEvent(
                new CustomEvent('modal-closed', { id: '9EqnU9GlWuaGiIACD2hv-form-component-action' }),
            )
        },

        open: function () {
            this.$nextTick(() => {
                this.isOpen = true

                                    this.$dispatch('ax-modal-opened')
                
                this.$refs.modalContainer.dispatchEvent(
                    new CustomEvent('modal-opened', { id: '9EqnU9GlWuaGiIACD2hv-form-component-action' }),
                )
            })
        },
    }" x-on:close-modal.window="if ($event.detail.id === '9EqnU9GlWuaGiIACD2hv-form-component-action') close()" x-on:open-modal.window="if ($event.detail.id === '9EqnU9GlWuaGiIACD2hv-form-component-action') open()" x-trap.noscroll="isOpen" x-bind:class="{
        'fi-modal-open': isOpen,
    }" class="fi-modal block">
    <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

    <div x-show="isOpen" style="display: none;">
        <div aria-hidden="true" x-show="isOpen" x-transition.duration.300ms.opacity="" class="fi-modal-close-overlay fixed inset-0 z-40 bg-gray-950/50 dark:bg-gray-950/75" style="display: none;"></div>

        <div class="fixed inset-0 z-40 overflow-y-auto cursor-pointer">
            <div x-ref="modalContainer" x-on:click.self="
                        document.activeElement.selectionStart === undefined &amp;&amp;
                            document.activeElement.selectionEnd === undefined &amp;&amp;
                            $dispatch('close-modal', { id: '9EqnU9GlWuaGiIACD2hv-form-component-action' })
                    " class="relative grid min-h-full grid-rows-[1fr_auto_1fr] justify-items-center sm:grid-rows-[1fr_auto_3fr] p-4" x-on:modal-closed.stop="const mountedFormComponentActionShouldOpenModal = false


                if (mountedFormComponentActionShouldOpenModal) {
                    $wire.unmountFormComponentAction(false, false)
                }">
                <div x-data="{ isShown: false }" x-init="
                        $nextTick(() => {
                            isShown = isOpen
                            $watch('isOpen', () => (isShown = isOpen))
                        })
                    " x-on:keydown.window.escape="$dispatch('close-modal', { id: '9EqnU9GlWuaGiIACD2hv-form-component-action' })" x-show="isShown" x-transition:enter="duration-300" x-transition:leave="duration-300" x-transition:enter-start="scale-95 opacity-0" x-transition:enter-end="scale-100 opacity-100" x-transition:leave-start="scale-100 opacity-100" x-transition:leave-end="scale-95 opacity-0" class="fi-modal-window pointer-events-auto relative row-start-2 flex w-full cursor-default flex-col bg-white shadow-xl ring-1 ring-gray-950/5 dark:bg-gray-900 dark:ring-white/10 mx-auto rounded-xl hidden max-w-sm" style="display: none;">
                    <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

                    <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

                    <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
                </div>
            </div>
        </div>
    </div>
</div>
    </form>

    <!--[if ENDBLOCK]><![endif]-->
    <!--[if ENDBLOCK]><![endif]-->

    
</div>
            </main>
        </div>

        
    </div>

        <div wire:snapshot="{&quot;data&quot;:{&quot;isFilamentNotificationsComponent&quot;:true,&quot;notifications&quot;:[[],{&quot;class&quot;:&quot;Filament\\Notifications\\Collection&quot;,&quot;s&quot;:&quot;wrbl&quot;}]},&quot;memo&quot;:{&quot;id&quot;:&quot;RNiJ3zT2aLNoqm3P9XkW&quot;,&quot;name&quot;:&quot;filament.livewire.notifications&quot;,&quot;path&quot;:&quot;app\/login&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;children&quot;:[],&quot;scripts&quot;:[],&quot;assets&quot;:[],&quot;errors&quot;:[],&quot;locale&quot;:&quot;en&quot;},&quot;checksum&quot;:&quot;7d0825422a79a8ccab2337346891ea6c0b9502bdb8183e07cd757ba5e6f5457c&quot;}" wire:effects="{&quot;listeners&quot;:[&quot;notificationsSent&quot;,&quot;notificationSent&quot;,&quot;notificationClosed&quot;]}" wire:id="RNiJ3zT2aLNoqm3P9XkW">
    <div class="fi-no pointer-events-none fixed inset-4 z-50 mx-auto flex gap-3 items-end flex-col-reverse justify-end" role="status">
        <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
    </div>

    <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
</div>

        

        <script>
        window.filamentData = []    </script>

            
            <script src="https://coba.cloudborneo.com/js/filament/notifications/notifications.js?v=3.2.127.0" data-navigate-once="" data-navigate-track=""></script>
        
                
            <script src="https://coba.cloudborneo.com/js/filament/support/async-alpine.js?v=3.2.127.0" data-navigate-once="" data-navigate-track=""></script>
        
                
            <script src="https://coba.cloudborneo.com/js/filament/support/support.js?v=3.2.127.0" data-navigate-once="" data-navigate-track=""></script>
        
                
            <script src="https://coba.cloudborneo.com/js/filament/filament/echo.js?v=3.2.127.0" data-navigate-once="" data-navigate-track=""></script>
        
                
            <script src="https://coba.cloudborneo.com/js/filament/filament/app.js?v=3.2.127.0" data-navigate-once="" data-navigate-track=""></script>
        
    
<style>
    :root {
            }
</style>

        
        
        

        
    <!-- Livewire Scripts -->
<script src="/livewire/livewire.js?id=38dc8241" data-csrf="q4CKRKMQYgIonef8SvUs6X82fzMO6rqSHwbVKZFO" data-update-uri="/livewire/update" data-navigate-once="true"></script>


</body></html>