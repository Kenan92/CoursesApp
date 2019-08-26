Courses App Project
==

In this repository we will put all our work on the an application to help university teachers
create interactive and nice courses and use them in their lectures and practical sessions.

Install
==

To install our app for development purposes you need the following software:
* [vagrant](https://www.vagrantup.com): It is used to provision virtual machines for development environment, here it will
  create a single VM to host our web application and the database. It can be installed from [here](https://www.vagrantup.com/downloads.html)
  Choose your platform and install, it works on Linux, Mac and Windows.
* [virtualbox](https://www.virtualbox.org): vagrant is just an interface for another tool that will create the VMs, here we will use virtualbox
  which is default provider for vagrant. It can be downloaded from [here](https://www.virtualbox.org/wiki/Downloads)
  Choose your platform and install, it works on Linux, Mac and Windows.

Clone this repository using this command `git clone git@github.com:Kenan92/CoursesApp.git`

Run this command `vagrant up` using a shell in the directory where the file `Vagrantfile` exists or any sub-directory inside it.

**Hint for windows users** for unknown reasons so far the last command will fail use this command `chcp 1252` to fix it every
  time you want to run vagrant.

The first time you run vagrant it will pull down `ubuntu/bionic64` box from the internet and run the provision script, if for
any reasons the process is interrupted after the shell provision script has started use this command `vagrant provision` to start it again.

Now you need to login to the newly created VM with this command `vagrant ssh` and execute this command `deploy`

**Hint for Windows users** The command `vagrant ssh` may fail if you run it from the powershell or command line
  so please run it from git bash to make it work. Git bash can be downloaded from [here](https://git-scm.com)

The last command will run ansible playbook to configure the VM for running our app, it will install apache web server, php and
some php extensions along with composer and run composer for you.

We did not so far configure apache2 to serve our app so to serve the application use this command `runapp`, this will create
a server using PHP's built-in server and serve our application, use `CTRL+C` to quit the server.

Now browse using your favorite web browser to this address to see the main page: `http://localhost:8080/`, it is empty for now, we will
add content later, stay tuned.

Issues
==
If you had any issues in the install process please create github issues for them [here](https://github.com/Kenan92/CoursesApp/issues/new) and we will look at them
as soon as possible.
