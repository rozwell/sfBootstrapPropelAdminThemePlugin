[?php if ($sf_user->hasFlash('success') || $sf_user->hasFlash('notice') || $sf_user->hasFlash('info') || $sf_user->hasFlash('warning') || $sf_user->hasFlash('error')): ?]
    <div class="sf-flashes">
        [?php if ($sf_user->hasFlash('success')): ?]
            <div class="alert alert-success">
                [?php foreach($sf_user->getFlash('success') as $flash): ?]
                    <i class="fa fa-check-circle"></i>
                    [?php echo (is_array($flash) ? __($flash[0], $flash[1]) : __($flash)).'<br/>'; ?]
                [?php endforeach; ?]
            </div>
        [?php endif; ?]

        [?php if ($sf_user->hasFlash('notice')): ?]
            <div class="alert alert-success">
                [?php foreach($sf_user->getFlash('notice') as $flash): ?]
                    <i class="fa fa-check-circle"></i>
                    [?php echo (is_array($flash) ? __($flash[0], $flash[1]) : __($flash)).'<br/>'; ?]
                [?php endforeach; ?]
            </div>
        [?php endif; ?]

        [?php if ($sf_user->hasFlash('info')): ?]
            <div class="alert alert-info">
                [?php foreach($sf_user->getFlash('info') as $flash): ?]
                    <i class="fa fa-info-circle"></i>
                    [?php echo (is_array($flash) ? __($flash[0], $flash[1]) : __($flash)).'<br/>'; ?]
                [?php endforeach; ?]
            </div>
        [?php endif; ?]

        [?php if ($sf_user->hasFlash('warning')): ?]
            <div class="alert alert-warning">
                [?php foreach($sf_user->getFlash('warning') as $flash): ?]
                    <i class="fa fa-warning"></i>
                    [?php echo (is_array($flash) ? __($flash[0], $flash[1]) : __($flash)).'<br/>'; ?]
                [?php endforeach; ?]
            </div>
        [?php endif; ?]

        [?php if ($sf_user->hasFlash('error')): ?]
            <div class="alert alert-danger">
                [?php foreach($sf_user->getFlash('error') as $flash): ?]
                    <i class="fa fa-exclamation-circle"></i>
                    [?php echo (is_array($flash) ? __($flash[0], $flash[1]) : __($flash)).'<br/>'; ?]
                [?php endforeach; ?]
            </div>
        [?php endif; ?]
    </div>
[?php endif; ?]
