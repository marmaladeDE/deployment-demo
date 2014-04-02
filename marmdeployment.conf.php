<?php
/**
 * Configuration example
 * 
 * @author Joscha Krug<krug@marmalade.de>
 */

// dir      = path to module relative to marmdeployment.config.php
// ref      = a position in git. Could be a hash, a branch or a tag
// remote   = the remote of the git repo. Will be used to initialize the repo if it dousnt exist yet.

$config = array(
    'demo' => array(
        'modules' => array(
            'ocb_cleartmp' => array(
                'dir'     => 'modules/ocb_cleartmp',
                'ref'     => 'master',
                'remote'  => 'git@github.com:OXIDCookbook/ocb_cleartmp.git'
            ),
            'ocb_cache' => array(
                'dir'     => 'modules/ocb_staticcache',
                'ref'     => 'master',
                'remote'  => 'git@github.com:OXIDCookbook/ocb_cache.git'
            ),
            'HDI Report' => array(
                'dir'     => 'modules/hdiReport',
                'ref'     => 'marmalade_stable',
                'remote'  => 'git@github.com:marmaladeDE/HDI-Report.git'
            ),
            //Yes! Cool stuff! Script will update itself!
            'marmdeployment' => array(
                'dir'     => 'marmdeployment',
                'ref'     => 'stable',
                'remote'  => 'git@github.com:jkrug/marmDeployment.git'
            ),
        ),
        'project' => array(
            'ref'     => 'master',
            'remote'  => 'git@github.com:marmaladeDE/deployment-demo.git'
        ),
    )
);