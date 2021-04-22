

                    function letsee() {
                        var xhr = new XMLHttpRequest();
                        xhr.open("GET", "server.php", true);
                        xhr.onload = function() {
                            if (this.status == 200) {
                                var users = JSON.parse(this.responseText);

                                var output = "";

                                for (let i in users) {
                                    output +=
                                        '<div class="user">' +

                                        '<ul>' +
                                        '<li>' + users[i].period1 + '</li>' +
                                        '<li>' + users[i].period2 + '</li>' +
                                        '</ul>'
                                    '</div>'
                                }
                                document.getElementById("users").innerHTML = output;
                            }
                        }
                        xhr.send()
                    }
