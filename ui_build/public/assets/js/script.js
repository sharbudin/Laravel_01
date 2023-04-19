const   body = document.querySelector("body"),
        sidebar = document.querySelector(".sidebar"),
        toggle = document.querySelector(".toggle"),
        searchBtn = document.querySelector(".search-box");


        toggle.addEventListener("click", () =>{
            sidebar.classList.toggle("close");
            var chkwidth = document.getElementById("dashboard-table").style.width;
            var link_hover = document.getElementsByClassName("link-hover")[1].style.width;
            var chkleft = document.getElementById("toggle-button1").style.left;
            if(chkwidth > "1100px") {
                document.getElementById("dashboard-table").style.width = '1100px';
                document.getElementById("dashboard-table").style.left = '10px';
                document.getElementById("dashboard-table1").style.width = '1100px';
                document.getElementById("dashboard-table1").style.left = '10px';
            } else {
                document.getElementById("dashboard-table").style.left = '25px';
                document.getElementById("dashboard-table").style.width = '1250px';
                document.getElementById("dashboard-table1").style.left = '25px';
                document.getElementById("dashboard-table1").style.width = '1250px';
            }
            if(link_hover == "212px") {
                for (let i = 0; i <= 6; i++) {
                    document.getElementsByClassName("link-hover")[i].style.width = '60px';
                }

            } else {
                for (let i = 0; i <= 6; i++) {
                    document.getElementsByClassName("link-hover")[i].style.width = '212px';
                }
            }
            if(chkleft == "203px") {
                    document.getElementById("toggle-button1").style.left = '52px';
            } else {
                document.getElementById("toggle-button1").style.left = '203px';
            }
        });


        function buttonColor(){
            document.getElementById("button").style.backgroundColor = '#0033A1';
        }
