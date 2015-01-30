set :application, "KAPSLE"
set :domain,      "kapsle.yum.pl"
set :deploy_to,   "/home/michol12/public_html/kapsle.yum.pl"
set :app_path,    "app"
set :user,        "michol12"

set  :deploy_via,    :copy
#set :repository,  "git@bitbucket.org:damianmichalik/kapsle.yum.pl.git"
set :repository,  "file:///var/www/kapsle.yum.pl"
set :scm,         :git
# Or: `accurev`, `bzr`, `cvs`, `darcs`, `subversion`, `mercurial`, `perforce`, or `none`
set :copy_vendors, true
set :use_composer, false

set :model_manager, "doctrine"
# Or: `propel`

role :web,        domain                         # Your HTTP server, Apache/etc
role :app,        domain, :primary => true       # This may be the same as your `Web` server

set  :keep_releases,  3
set :use_sudo, false
set :ssh_options, { :forward_agent => true }

# Be more verbose by uncommenting the following line
# logger.level = Logger::MAX_LEVEL