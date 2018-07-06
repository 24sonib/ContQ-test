FROM bhanucontq
WORKDIR "/tmp"
RUN useradd bhanu
RUN echo 'bhanu:bhanu' | chpasswd
RUN yum install -y sudo 
RUN echo "bhanu        ALL=(ALL)       NOPASSWD: ALL" >> /etc/sudoers
CMD ["/bin/sh", "-c", "/usr/sbin/shellinaboxd "]
