# APIserver
API Server is a Rest full API written in PHP. This api serves the various demo configurations.



Get game configurations request:-
=====================

curl -XGET http://192.168.1.100/PHPapi/api.php/getconfig?type=game

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