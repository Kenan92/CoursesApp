OUTPUT_FILE=~/.ssh/id_rsa
PUBLIC_FILE=~/.ssh/id_rsa.pub
if ! test -f $OUTPUT_FILE; then
        ssh-keygen -t rsa -b 4096 -N "" -q -f $OUTPUT_FILE
        cat $PUBLIC_FILE >> ~/.ssh/authorized_keys
        echo -e "Host localhost \n\tStrictHostKeyChecking no \n\tUserKnownHostsFile=/dev/null" >> ~/.ssh/config
fi
