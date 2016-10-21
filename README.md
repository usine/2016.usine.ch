# usine.ch

To get started:

*  Have [VirtualBox](https://www.virtualbox.org/) and [Vagrant](https://www.vagrantup.com/) installed
*  Install the Vagrant hosts updater: ```vagrant plugin install vagrant-hostsupdater```
*  Clone the [VVV repo](https://github.com/Varying-Vagrant-Vagrants/VVV): ```git clone https://github.com/Varying-Vagrant-Vagrants/VVV.git; cd VVV```
*  Optionally update vagrant box: ```vagrant box update```
*  Clone this repo into the www directory of your Vagrant as www/usine.ch: ```cd www; git clone https://github.com/usine/usine.ch.git; cd ..```
*  If your Vagrant is running, run vagrant halt
*  Followed by vagrant up --provision. Perhaps a cup of tea now? The provisioning may take a while

Then you can visit http://local.usine.dev/
