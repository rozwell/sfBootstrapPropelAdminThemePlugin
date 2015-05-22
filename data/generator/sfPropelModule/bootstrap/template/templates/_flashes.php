[?php if ($sf_user->hasFlash('notice') || $sf_user->hasFlash('info') || $sf_user->hasFlash('warning') || $sf_user->hasFlash('error')): ?]
    <div class="sf-flashes">
        [?php if ($sf_user->hasFlash('success')): ?]
            <div class="alert alert-success">
                <i class="fa fa-check-circle"></i> [?php echo __($sf_user->getFlash('success'), array(), 'sf_admin') ?]
            </div>
        [?php endif; ?]

        [?php if ($sf_user->hasFlash('notice')): ?]
            <div class="alert alert-success">
                <i class="fa fa-check-circle"></i> [?php echo __($sf_user->getFlash('notice'), array(), 'sf_admin') ?]
            </div>
        [?php endif; ?]

        [?php if ($sf_user->hasFlash('info')): ?]
            <div class="alert alert-info">
                <i class="fa fa-info-circle"></i> [?php echo __($sf_user->getFlash('info'), array(), 'sf_admin') ?]
            </div>
        [?php endif; ?]

        [?php if ($sf_user->hasFlash('warning')): ?]
            <div class="alert alert-warning">
                <i class="fa fa-warning"></i> [?php echo __($sf_user->getFlash('warning'), array(), 'sf_admin') ?]
            </div>
        [?php endif; ?]

        [?php if ($sf_user->hasFlash('error')): ?]
            <div class="alert alert-danger">
                <i class="fa fa-exclamation-circle"></i> [?php echo __($sf_user->getFlash('error'), array(), 'sf_admin') ?]
            </div>
        [?php endif; ?]
    </div>
[?php endif; ?]
