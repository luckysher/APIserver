# APIserver
API Server is a Rest full API written in PHP. This api serves the various demo configurations.



Get Game configurations request:-
================================

curl -XGET http://localhost/PHPapi/api.php/getconfig?type=game

    response:
        {
            "window": {
                        "width":"500px",
                        "height":"500px"
                      },
            "user":   {
                        "name":"San",
                        "score":"100",
                        "level":"5"
                       },
            "price": {
                         "Rs":"650",
                         "$":"10"
                     }
        }


Get Desktop configurations request:-
================================

curl -XGET http://localhost/PHPapi/api.php/getconfig?type=desktop