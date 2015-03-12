task :upload_parameters do
  origin_file = "app/config/parameters_prod.yml"
  destination_file = latest_release + "/app/config/parameters.yml" # Notice the
  latest_release

  try_sudo "mkdir -p #{File.dirname(destination_file)}"
  top.upload(origin_file, destination_file)
end

before "deploy:share_childs", "upload_parameters"

set :application, "KAPSLE"
set :domain, "kapsle.yum.pl"
set :deploy_to, "/home/michol12/public_html/kapsle.yum.pl"
set :app_path, "app"
set :user, "michol12"

set :repository, "git@bitbucket.org:damianmichalik/kapsle.yum.pl.git"

set :scm, :git
# Or: `accurev`, `bzr`, `cvs`, `darcs`, `subversion`, `mercurial`, `perforce`, or `none`
set :model_manager, "doctrine"
# Or: `propel`
role :web, domain # Your HTTP server, Apache/etc
role :app, domain, :primary => true # This may be the same as your `Web` server
set :keep_releases, 2
set :use_sudo, false
set :ssh_options, { :forward_agent => true }
# Be more verbose by uncommenting the following line
logger.level = Logger::MAX_LEVEL