Vagrant.configure("2") do |config|
  config.vm.define "coursphp" do |coursphp|
    coursphp.vm.box = "bento/debian-10"
    coursphp.vm.network "forwarded_port", guest: 8000, host: 8000
    coursphp.vm.hostname = "coursphp"
    coursphp.vm.network 'private_network',
          ip: "192.168.33.10"
    coursphp.vm.network :forwarded_port,
      guest:        8000,
      host:         8000,
      auto_correct: true
    coursphp.vm.network :forwarded_port,
      guest:        7102,
      host:         22,
      auto_correct: true
    coursphp.vm.provider :virtualbox do |virtualbox|
      virtualbox.customize ['modifyvm', :id, '--memory', "2048"]
      virtualbox.customize ['modifyvm', :id, '--cpus', "1"]
      virtualbox.name = coursphp.vm.hostname
    end
    coursphp.vm.synced_folder "./", "/var/www",
      # type: 'nfs',
      # :nfs => { :mount_options => ['rw', 'dmode="777"', 'fmode="666"'] }
      create: true
    coursphp.vm.provision "shell",
      inline: "sudo apt-get install php7.3-cli -y"
  end
end
