# -*- mode: ruby -*-
# vi: set ft=ruby :

# Vagrantfile API/syntax version. Don't touch unless you know what you're doing!
VAGRANTFILE_API_VERSION = "2"

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|

  config.vm.box = "raring64"
  config.vm.box_url = "http://cloud-images.ubuntu.com/vagrant/raring/current/raring-server-cloudimg-amd64-vagrant-disk1.box"
#  config.vm.box_url = "http://files.vagrantup.com/precise64.box"
  config.vm.hostname = "kyoto.drupal"
 
  # For vagrant share to work, uncomment the following forwarding setting. 
#  config.vm.network "forwarded_port", guest: 80, host: 8080
  config.vm.network "private_network", ip: "172.28.128.3"

  # disabled due to VirtualBox 4.3.10 bug, for details, see https://github.com/mitchellh/vagrant/issues/3341
  config.vbguest.auto_update = false

  # VVV style mount
  config.vm.synced_folder ".", "/vagrant", disabled: true
  config.vm.synced_folder "www/", "/srv/www/", :owner => "www-data", :mount_options => [ "dmode=775", "fmode=774" ]  

  config.vm.provision :ansible do |ansible|
    ansible.playbook = "provision/drupal.yml"
    ansible.sudo = true
    ansible.host_key_checking = false 
    ansible.tags = ['package']
    ansible.verbose = "vv"
  end

end
