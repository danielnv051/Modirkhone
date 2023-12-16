<p>
    <button onclick="readContacts()">Read Contacts</button>
</p>

<pre id="log"></pre>

<script>
    function readContacts() {
        var api = (navigator.contacts || navigator.mozContacts);

        if (api && !!api.select) { // new Chrome API
            api.select(['name', 'tel'], {
                    multiple: true
                })
                .then(function(contacts) {
                    consoleLog('Found ' + contacts.length + ' contacts.');
                    if (contacts.length) {
                        for (let i = 0; i < contacts.length; i++) {
                            consoleLog('First contact: ' + contacts[i].name + ' (' + contacts[i].tel[0] + ')');
                        }
                    }
                })
                .catch(function(err) {
                    consoleLog('Fetching contacts failed: ' + err.name);
                });

        }
        /*  else if (api && !!api.find) { // old Firefox OS API
                    var criteria = {
                        sortBy: 'familyName',
                        sortOrder: 'ascending'
                    };

                    api.find(criteria)
                        .then(function(contacts) {
                            consoleLog('Found ' + contacts.length + ' contacts.');
                            if (contacts.length) {
                                consoleLog('First contact: ' + contacts[0].givenName[0] + ' ' + contacts[0].familyName[0]);
                            }
                        })
                        .catch(function(err) {
                            consoleLog('Fetching contacts failed: ' + err.name);
                        });

                } else {
                    consoleLog('Contacts API not supported.');
                } */
    }

    function consoleLog(data) {
        var logElement = document.getElementById('log');
        logElement.innerHTML += data + '\n';
    }
</script>