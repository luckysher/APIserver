# APIserver
API Server is a Rest full API written in PHP. This api serves the various demo configurations.



Get Game configurations request:-
================================

curl -XGET http://localhost/PHPapi/api.php/getconfig?type=game

    response:
            {
                "code"   : 200,
                "status" : "ok",
                "message":"success",
                "data":
                        {
                            "desktop":{
                                        "window":{
                                                    "width":"2400",
                                                    "height":"1800"
                                                  }
                                       }
                        }
            }



Get Desktop configurations request:-
================================

curl -XGET http://localhost/PHPapi/api.php/getconfig?type=desktop

    response:
