<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		.a
		{
			width: 60px;
			height: 30px;
			border: 0;
			background-color: rgba(0, 0, 0, 0.8);
			font-size: 20px;
			color: white;
		}
        
		a{color:white;text-decoration:none;}
	</style>
</head>
<body>

<?php 
	error_reporting(0);	
	header("content-type:text/html;charset=UTF-8");
	$conn = mysqli_connect(   
                'localhost',  /* The host to connect to 连接MySQL地址 */   
                'root',      /* The user to connect as 连接MySQL用户名 */   
                'wanghuiming',  /* The password to use 连接MySQL密码 */   
                'FinalLib');
	if(!$conn)
    {   
        echo"数据库连接失败";
        exit();
    }
	else{		    
        if (@$_POST['content'] == 0) {
            if (@$_POST['attribute'] == 0) {
                if (@$_POST['section'] == 0) {
                    if (@$_POST['order'] == 0) {
                        $query = "select * from book where category= '{$_POST['cont']}' and year>='{$_POST['cont1']}' 
                        and year<= '{$_POST['cont2']}' order by category asc";
                    } else {
                        $query = "select * from book where category= '{$_POST['cont']}' and year>='{$_POST['cont1']}' 
                        and year<= '{$_POST['cont2']}' order by category desc";
                    }

                } else if (@$_POST['section'] == 1) {
                    if (@$_POST['order'] == 0) {
                        $query = "select * from book where category= '{$_POST['cont']}' and price>='{$_POST['cont1']}' 
                        and price<= '{$_POST['cont2']}' order by category asc";
                    } else {
                        $query = "select * from book where category= '{$_POST['cont']}' and price>='{$_POST['cont1']}' 
                        and price<= '{$_POST['cont2']}' order by category desc";
                    }
                } else if (@$_POST['section'] == 2){
                    if (@$_POST['order'] == 0) {
                        $query = "select * from book where category= '{$_POST['cont']}' order by category asc";
                    } else {
                        $query = "select * from book where category= '{$_POST['cont']}'  order by category desc";
                    }
                }
            }

            if (@$_POST['attribute'] == 1) {
                if (@$_POST['section'] == 0) {
                    if (@$_POST['order'] == 0) {
                        $query = "select * from book where category= '{$_POST['cont']}' and year>='{$_POST['cont1']}' 
                        and year<= '{$_POST['cont2']}' order by title asc";
                    } else {
                        $query = "select * from book where category= '{$_POST['cont']}' and year>='{$_POST['cont1']}' 
                        and year<= '{$_POST['cont2']}' order by title desc";
                    }

                } else if (@$_POST['section'] == 1) {
                    if (@$_POST['order'] == 0) {
                        $query = "select * from book where category= '{$_POST['cont']}' and price>='{$_POST['cont1']}' 
                        and price<= '{$_POST['cont2']}' order by title asc";
                    } else {
                        $query = "select * from book where category= '{$_POST['cont']}' and price>='{$_POST['cont1']}' 
                        and price<= '{$_POST['cont2']}' order by title desc";
                    }
                } else if (@$_POST['section'] == 2){
                    if (@$_POST['order'] == 0) {
                        $query = "select * from book where category= '{$_POST['cont']}' order by title asc";
                    } else {
                        $query = "select * from book where category= '{$_POST['cont']}'  order by title desc";
                    }
                }
            }

            if (@$_POST['attribute'] == 2) {
                if (@$_POST['section'] == 0) {
                    if (@$_POST['order'] == 0) {
                        $query = "select * from book where category= '{$_POST['cont']}' and year>='{$_POST['cont1']}' 
                        and year<= '{$_POST['cont2']}' order by press asc";
                    } else {
                        $query = "select * from book where category= '{$_POST['cont']}' and year>='{$_POST['cont1']}' 
                        and year<= '{$_POST['cont2']}' order by press desc";
                    }

                } else if (@$_POST['section'] == 1) {
                    if (@$_POST['order'] == 0) {
                        $query = "select * from book where category= '{$_POST['cont']}' and price>='{$_POST['cont1']}' 
                        and price<= '{$_POST['cont2']}' order by press asc";
                    } else {
                        $query = "select * from book where category= '{$_POST['cont']}' and price>='{$_POST['cont1']}' 
                        and price<= '{$_POST['cont2']}' order by press desc";
                    }
                } else if (@$_POST['section'] == 2){
                    if (@$_POST['order'] == 0) {
                        $query = "select * from book where category= '{$_POST['cont']}' order by press asc";
                    } else {
                        $query = "select * from book where category= '{$_POST['cont']}'  order by press desc";
                    }
                }
            }

            if (@$_POST['attribute'] == 3) {
                if (@$_POST['section'] == 0) {
                    if (@$_POST['order'] == 0) {
                        $query = "select * from book where category= '{$_POST['cont']}' and year>='{$_POST['cont1']}' 
                        and year<= '{$_POST['cont2']}' order by year asc";
                    } else {
                        $query = "select * from book where category= '{$_POST['cont']}' and year>='{$_POST['cont1']}' 
                        and year<= '{$_POST['cont2']}' order by year desc";
                    }

                } else if (@$_POST['section'] == 1) {
                    if (@$_POST['order'] == 0) {
                        $query = "select * from book where category= '{$_POST['cont']}' and price>='{$_POST['cont1']}' 
                        and price<= '{$_POST['cont2']}' order by year asc";
                    } else {
                        $query = "select * from book where category= '{$_POST['cont']}' and price>='{$_POST['cont1']}' 
                        and price<= '{$_POST['cont2']}' order by year desc";
                    }
                } else if (@$_POST['section'] == 2){
                    if (@$_POST['order'] == 0) {
                        $query = "select * from book where category= '{$_POST['cont']}' order by year asc";
                    } else {
                        $query = "select * from book where category= '{$_POST['cont']}'  order by year desc";
                    }
                }
            }

            if (@$_POST['attribute'] == 4) {
                if (@$_POST['section'] == 0) {
                    if (@$_POST['order'] == 0) {
                        $query = "select * from book where category= '{$_POST['cont']}' and year>='{$_POST['cont1']}' 
                        and year<= '{$_POST['cont2']}' order by author asc";
                    } else {
                        $query = "select * from book where category= '{$_POST['cont']}' and year>='{$_POST['cont1']}' 
                        and year<= '{$_POST['cont2']}' order by author desc";
                    }

                } else if (@$_POST['section'] == 1) {
                    if (@$_POST['order'] == 0) {
                        $query = "select * from book where category= '{$_POST['cont']}' and price>='{$_POST['cont1']}' 
                        and price<= '{$_POST['cont2']}' order by author asc";
                    } else {
                        $query = "select * from book where category= '{$_POST['cont']}' and price>='{$_POST['cont1']}' 
                        and price<= '{$_POST['cont2']}' order by author desc";
                    }
                } else if (@$_POST['section'] == 2){
                    if (@$_POST['order'] == 0) {
                        $query = "select * from book where category= '{$_POST['cont']}' order by author asc";
                    } else {
                        $query = "select * from book where category= '{$_POST['cont']}'  order by author desc";
                    }
                }
            }

            if (@$_POST['attribute'] == 5) {
                if (@$_POST['section'] == 0) {
                    if (@$_POST['order'] == 0) {
                        $query = "select * from book where category= '{$_POST['cont']}' and year>='{$_POST['cont1']}' 
                        and year<= '{$_POST['cont2']}' order by price asc";
                    } else {
                        $query = "select * from book where category= '{$_POST['cont']}' and year>='{$_POST['cont1']}' 
                        and year<= '{$_POST['cont2']}' order by price desc";
                    }

                } else if (@$_POST['section'] == 1) {
                    if (@$_POST['order'] == 0) {
                        $query = "select * from book where category= '{$_POST['cont']}' and price>='{$_POST['cont1']}' 
                        and price<= '{$_POST['cont2']}' order by price asc";
                    } else {
                        $query = "select * from book where category= '{$_POST['cont']}' and price>='{$_POST['cont1']}' 
                        and price<= '{$_POST['cont2']}' order by price desc";
                    }
                } else if (@$_POST['section'] == 2){
                    if (@$_POST['order'] == 0) {
                        $query = "select * from book where category= '{$_POST['cont']}' order by price asc";
                    } else {
                        $query = "select * from book where category= '{$_POST['cont']}'  order by price desc";
                    }
                }
            } /*else {
                $query = "select * from book where category= '{$_POST['cont']}' order by title asc";
            }*/
        }

            if (@$_POST['content'] == 1) {
                if (@$_POST['attribute'] == 0) {
                    if (@$_POST['section'] == 0) {
                        if (@$_POST['order'] == 0) {
                            $query = "select * from book where title= '{$_POST['cont']}' and year>='{$_POST['cont1']}' 
                        and year<= '{$_POST['cont2']}' order by category asc";
                        } else {
                            $query = "select * from book where title= '{$_POST['cont']}' and year>='{$_POST['cont1']}' 
                        and year<= '{$_POST['cont2']}' order by category desc";
                        }

                    } else if (@$_POST['section'] == 1) {
                        if (@$_POST['order'] == 0) {
                            $query = "select * from book where title= '{$_POST['cont']}' and price>='{$_POST['cont1']}' 
                        and price<= '{$_POST['cont2']}' order by category asc";
                        } else {
                            $query = "select * from book where title= '{$_POST['cont']}' and price>='{$_POST['cont1']}' 
                        and price<= '{$_POST['cont2']}' order by category desc";
                        }
                    } else if (@$_POST['section'] == 2){
                        if (@$_POST['order'] == 0) {
                            $query = "select * from book where title= '{$_POST['cont']}' order by category asc";
                        } else {
                            $query = "select * from book where title= '{$_POST['cont']}'  order by category desc";
                        }
                    }
                }

                if (@$_POST['attribute'] == 1) {
                    if (@$_POST['section'] == 0) {
                        if (@$_POST['order'] == 0) {
                            $query = "select * from book where title= '{$_POST['cont']}' and year>='{$_POST['cont1']}' 
                        and year<= '{$_POST['cont2']}' order by title asc";
                        } else {
                            $query = "select * from book where title= '{$_POST['cont']}' and year>='{$_POST['cont1']}' 
                        and year<= '{$_POST['cont2']}' order by title desc";
                        }

                    } else if (@$_POST['section'] == 1) {
                        if (@$_POST['order'] == 0) {
                            $query = "select * from book where title= '{$_POST['cont']}' and price>='{$_POST['cont1']}' 
                        and price<= '{$_POST['cont2']}' order by title asc";
                        } else {
                            $query = "select * from book where category= '{$_POST['cont']}' and price>='{$_POST['cont1']}' 
                        and price<= '{$_POST['cont2']}' order by title desc";
                        }
                    } else if (@$_POST['section'] == 2){
                        if (@$_POST['order'] == 0) {
                            $query = "select * from book where title= '{$_POST['cont']}' order by title asc";
                        } else {
                            $query = "select * from book where title= '{$_POST['cont']}'  order by title desc";
                        }
                    }
                }

                if (@$_POST['attribute'] == 2) {
                    if (@$_POST['section'] == 0) {
                        if (@$_POST['order'] == 0) {
                            $query = "select * from book where title= '{$_POST['cont']}' and year>='{$_POST['cont1']}' 
                        and year<= '{$_POST['cont2']}' order by press asc";
                        } else {
                            $query = "select * from book where title= '{$_POST['cont']}' and year>='{$_POST['cont1']}' 
                        and year<= '{$_POST['cont2']}' order by press desc";
                        }

                    } else if (@$_POST['section'] == 1) {
                        if (@$_POST['order'] == 0) {
                            $query = "select * from book where title= '{$_POST['cont']}' and price>='{$_POST['cont1']}' 
                        and price<= '{$_POST['cont2']}' order by press asc";
                        } else {
                            $query = "select * from book where title= '{$_POST['cont']}' and price>='{$_POST['cont1']}' 
                        and price<= '{$_POST['cont2']}' order by press desc";
                        }
                    } else if (@$_POST['section'] == 2){
                        if (@$_POST['order'] == 0) {
                            $query = "select * from book where title= '{$_POST['cont']}' order by press asc";
                        } else {
                            $query = "select * from book where title= '{$_POST['cont']}'  order by press desc";
                        }
                    }
                }

                if (@$_POST['attribute'] == 3) {
                    if (@$_POST['section'] == 0) {
                        if (@$_POST['order'] == 0) {
                            $query = "select * from book where title= '{$_POST['cont']}' and year>='{$_POST['cont1']}' 
                        and year<= '{$_POST['cont2']}' order by year asc";
                        } else {
                            $query = "select * from book where title= '{$_POST['cont']}' and year>='{$_POST['cont1']}' 
                        and year<= '{$_POST['cont2']}' order by year desc";
                        }

                    } else if (@$_POST['section'] == 1) {
                        if (@$_POST['order'] == 0) {
                            $query = "select * from book where title= '{$_POST['cont']}' and price>='{$_POST['cont1']}' 
                        and price<= '{$_POST['cont2']}' order by year asc";
                        } else {
                            $query = "select * from book where title= '{$_POST['cont']}' and price>='{$_POST['cont1']}' 
                        and price<= '{$_POST['cont2']}' order by year desc";
                        }
                    } else if (@$_POST['section'] == 2){
                        if (@$_POST['order'] == 0) {
                            $query = "select * from book where title= '{$_POST['cont']}' order by year asc";
                        } else {
                            $query = "select * from book where title= '{$_POST['cont']}'  order by year desc";
                        }
                    }
                }

                if (@$_POST['attribute'] == 4) {
                    if (@$_POST['section'] == 0) {
                        if (@$_POST['order'] == 0) {
                            $query = "select * from book where title= '{$_POST['cont']}' and year>='{$_POST['cont1']}' 
                        and year<= '{$_POST['cont2']}' order by author asc";
                        } else {
                            $query = "select * from book where titley= '{$_POST['cont']}' and year>='{$_POST['cont1']}' 
                        and year<= '{$_POST['cont2']}' order by author desc";
                        }

                    } else if (@$_POST['section'] == 1) {
                        if (@$_POST['order'] == 0) {
                            $query = "select * from book where title= '{$_POST['cont']}' and price>='{$_POST['cont1']}' 
                        and price<= '{$_POST['cont2']}' order by author asc";
                        } else {
                            $query = "select * from book where title= '{$_POST['cont']}' and price>='{$_POST['cont1']}' 
                        and price<= '{$_POST['cont2']}' order by author desc";
                        }
                    } else if (@$_POST['section'] == 2){
                        if (@$_POST['order'] == 0) {
                            $query = "select * from book where title= '{$_POST['cont']}' order by author asc";
                        } else {
                            $query = "select * from book where title= '{$_POST['cont']}'  order by author desc";
                        }
                    }
                }

                if (@$_POST['attribute'] == 5) {
                    if (@$_POST['section'] == 0) {
                        if (@$_POST['order'] == 0) {
                            $query = "select * from book where title= '{$_POST['cont']}' and year>='{$_POST['cont1']}' 
                        and year<= '{$_POST['cont2']}' order by price asc";
                        } else {
                            $query = "select * from book where title= '{$_POST['cont']}' and year>='{$_POST['cont1']}' 
                        and year<= '{$_POST['cont2']}' order by price desc";
                        }

                    } else if (@$_POST['section'] == 1) {
                        if (@$_POST['order'] == 0) {
                            $query = "select * from book where title= '{$_POST['cont']}' and price>='{$_POST['cont1']}' 
                        and price<= '{$_POST['cont2']}' order by price asc";
                        } else {
                            $query = "select * from book where title= '{$_POST['cont']}' and price>='{$_POST['cont1']}' 
                        and price<= '{$_POST['cont2']}' order by price desc";
                        }
                    } else if (@$_POST['section'] == 2){
                        if (@$_POST['order'] == 0) {
                            $query = "select * from book where title= '{$_POST['cont']}' order by price asc";
                        } else {
                            $query = "select * from book where title= '{$_POST['cont']}'  order by price desc";
                        }
                    }
                }
                /*else{
                    $query = "select * from book where title= '{$_POST['cont']}' order by title asc";
                }*/
            }

            if (@$_POST['content'] == 2) {
                if (@$_POST['attribute'] == 0) {
                    if (@$_POST['section'] == 0) {
                        if (@$_POST['order'] == 0) {
                            $query = "select * from book where press= '{$_POST['cont']}' and year>='{$_POST['cont1']}' 
                        and year<= '{$_POST['cont2']}' order by category asc";
                        } else {
                            $query = "select * from book where press= '{$_POST['cont']}' and year>='{$_POST['cont1']}' 
                        and year<= '{$_POST['cont2']}' order by category desc";
                        }

                    } else if (@$_POST['section'] == 1) {
                        if (@$_POST['order'] == 0) {
                            $query = "select * from book where press= '{$_POST['cont']}' and price>='{$_POST['cont1']}' 
                        and price<= '{$_POST['cont2']}' order by category asc";
                        } else {
                            $query = "select * from book where press= '{$_POST['cont']}' and price>='{$_POST['cont1']}' 
                        and price<= '{$_POST['cont2']}' order by category desc";
                        }
                    } else if (@$_POST['section'] == 2){
                        if (@$_POST['order'] == 0) {
                            $query = "select * from book where press= '{$_POST['cont']}' order by category asc";
                        } else {
                            $query = "select * from book where press= '{$_POST['cont']}'  order by category desc";
                        }
                    }
                }

                if (@$_POST['attribute'] == 1) {
                    if (@$_POST['section'] == 0) {
                        if (@$_POST['order'] == 0) {
                            $query = "select * from book where press= '{$_POST['cont']}' and year>='{$_POST['cont1']}' 
                        and year<= '{$_POST['cont2']}' order by title asc";
                        } else {
                            $query = "select * from book where press= '{$_POST['cont']}' and year>='{$_POST['cont1']}' 
                        and year<= '{$_POST['cont2']}' order by title desc";
                        }

                    } else if (@$_POST['section'] == 1) {
                        if (@$_POST['order'] == 0) {
                            $query = "select * from book where press= '{$_POST['cont']}' and price>='{$_POST['cont1']}' 
                        and price<= '{$_POST['cont2']}' order by title asc";
                        } else {
                            $query = "select * from book where press= '{$_POST['cont']}' and price>='{$_POST['cont1']}' 
                        and price<= '{$_POST['cont2']}' order by title desc";
                        }
                    } else {
                        if (@$_POST['order'] == 0) {
                            $query = "select * from book where press= '{$_POST['cont']}' order by title asc";
                        } else {
                            $query = "select * from book where press= '{$_POST['cont']}'  order by title desc";
                        }
                    }
                }

                if (@$_POST['attribute'] == 2) {
                    if (@$_POST['section'] == 0) {
                        if (@$_POST['order'] == 0) {
                            $query = "select * from book where press= '{$_POST['cont']}' and year>='{$_POST['cont1']}' 
                        and year<= '{$_POST['cont2']}' order by press asc";
                        } else {
                            $query = "select * from book where press= '{$_POST['cont']}' and year>='{$_POST['cont1']}' 
                        and year<= '{$_POST['cont2']}' order by press desc";
                        }

                    } else if (@$_POST['section'] == 1) {
                        if (@$_POST['order'] == 0) {
                            $query = "select * from book where press= '{$_POST['cont']}' and price>='{$_POST['cont1']}' 
                        and price<= '{$_POST['cont2']}' order by press asc";
                        } else {
                            $query = "select * from book where press= '{$_POST['cont']}' and price>='{$_POST['cont1']}' 
                        and price<= '{$_POST['cont2']}' order by press desc";
                        }
                    } else if (@$_POST['section'] == 2){
                        if (@$_POST['order'] == 0) {
                            $query = "select * from book where press= '{$_POST['cont']}' order by press asc";
                        } else {
                            $query = "select * from book where press= '{$_POST['cont']}'  order by press desc";
                        }
                    }
                }

                if (@$_POST['attribute'] == 3) {
                    if (@$_POST['section'] == 0) {
                        if (@$_POST['order'] == 0) {
                            $query = "select * from book where press= '{$_POST['cont']}' and year>='{$_POST['cont1']}' 
                        and year<= '{$_POST['cont2']}' order by year asc";
                        } else {
                            $query = "select * from book where press= '{$_POST['cont']}' and year>='{$_POST['cont1']}' 
                        and year<= '{$_POST['cont2']}' order by year desc";
                        }

                    } else if (@$_POST['section'] == 1) {
                        if (@$_POST['order'] == 0) {
                            $query = "select * from book where press= '{$_POST['cont']}' and price>='{$_POST['cont1']}' 
                        and price<= '{$_POST['cont2']}' order by year asc";
                        } else {
                            $query = "select * from book where press= '{$_POST['cont']}' and price>='{$_POST['cont1']}' 
                        and price<= '{$_POST['cont2']}' order by year desc";
                        }
                    } else if (@$_POST['section'] == 2){
                        if (@$_POST['order'] == 0) {
                            $query = "select * from book where press= '{$_POST['cont']}' order by year asc";
                        } else {
                            $query = "select * from book where press= '{$_POST['cont']}'  order by year desc";
                        }
                    }
                }

                if (@$_POST['attribute'] == 4) {
                    if (@$_POST['section'] == 0) {
                        if (@$_POST['order'] == 0) {
                            $query = "select * from book where press= '{$_POST['cont']}' and year>='{$_POST['cont1']}' 
                        and year<= '{$_POST['cont2']}' order by author asc";
                        } else {
                            $query = "select * from book where press= '{$_POST['cont']}' and year>='{$_POST['cont1']}' 
                        and year<= '{$_POST['cont2']}' order by author desc";
                        }

                    } else if (@$_POST['section'] == 1) {
                        if (@$_POST['order'] == 0) {
                            $query = "select * from book where press= '{$_POST['cont']}' and price>='{$_POST['cont1']}' 
                        and price<= '{$_POST['cont2']}' order by author asc";
                        } else {
                            $query = "select * from book where press= '{$_POST['cont']}' and price>='{$_POST['cont1']}' 
                        and price<= '{$_POST['cont2']}' order by author desc";
                        }
                    } else if (@$_POST['section'] == 2){
                        if (@$_POST['order'] == 0) {
                            $query = "select * from book where press= '{$_POST['cont']}' order by author asc";
                        } else {
                            $query = "select * from book where press= '{$_POST['cont']}'  order by author desc";
                        }
                    }
                }

                if (@$_POST['attribute'] == 5) {
                    if (@$_POST['section'] == 0) {
                        if (@$_POST['order'] == 0) {
                            $query = "select * from book where press= '{$_POST['cont']}' and year>='{$_POST['cont1']}' 
                        and year<= '{$_POST['cont2']}' order by price asc";
                        } else {
                            $query = "select * from book where press= '{$_POST['cont']}' and year>='{$_POST['cont1']}' 
                        and year<= '{$_POST['cont2']}' order by price desc";
                        }

                    } else if (@$_POST['section'] == 1) {
                        if (@$_POST['order'] == 0) {
                            $query = "select * from book where press= '{$_POST['cont']}' and price>='{$_POST['cont1']}' 
                        and price<= '{$_POST['cont2']}' order by price asc";
                        } else {
                            $query = "select * from book where press= '{$_POST['cont']}' and price>='{$_POST['cont1']}' 
                        and price<= '{$_POST['cont2']}' order by price desc";
                        }
                    } else if (@$_POST['section'] == 2){
                        if (@$_POST['order'] == 0) {
                            $query = "select * from book where press= '{$_POST['cont']}' order by price asc";
                        } else {
                            $query = "select * from book where press= '{$_POST['cont']}'  order by price desc";
                        }
                    }
                }
                /*else{
                    $query = "select * from book where press= '{$_POST['cont']}' order by title asc";
                }*/
            }

            if (@$_POST['content'] == 3) {
                if (@$_POST['attribute'] == 0) {
                    if (@$_POST['section'] == 0) {
                        if (@$_POST['order'] == 0) {
                            $query = "select * from book where author= '{$_POST['cont']}' and year>='{$_POST['cont1']}' 
                        and year<= '{$_POST['cont2']}' order by category asc";
                        } else {
                            $query = "select * from book where author= '{$_POST['cont']}' and year>='{$_POST['cont1']}' 
                        and year<= '{$_POST['cont2']}' order by category desc";
                        }

                    } else if (@$_POST['section'] == 1) {
                        if (@$_POST['order'] == 0) {
                            $query = "select * from book where author= '{$_POST['cont']}' and price>='{$_POST['cont1']}' 
                        and price<= '{$_POST['cont2']}' order by category asc";
                        } else {
                            $query = "select * from book where author= '{$_POST['cont']}' and price>='{$_POST['cont1']}' 
                        and price<= '{$_POST['cont2']}' order by category desc";
                        }
                    } else if (@$_POST['section'] == 2){
                        if (@$_POST['order'] == 0) {
                            $query = "select * from book where author= '{$_POST['cont']}' order by category asc";
                        } else {
                            $query = "select * from book where author= '{$_POST['cont']}'  order by category desc";
                        }
                    }
                }

                if (@$_POST['attribute'] == 1) {
                    if (@$_POST['section'] == 0) {
                        if (@$_POST['order'] == 0) {
                            $query = "select * from book where author= '{$_POST['cont']}' and year>='{$_POST['cont1']}' 
                        and year<= '{$_POST['cont2']}' order by title asc";
                        } else {
                            $query = "select * from book where author= '{$_POST['cont']}' and year>='{$_POST['cont1']}' 
                        and year<= '{$_POST['cont2']}' order by title desc";
                        }

                    } else if (@$_POST['section'] == 1) {
                        if (@$_POST['order'] == 0) {
                            $query = "select * from book where author= '{$_POST['cont']}' and price>='{$_POST['cont1']}' 
                        and price<= '{$_POST['cont2']}' order by title asc";
                        } else {
                            $query = "select * from book where author= '{$_POST['cont']}' and price>='{$_POST['cont1']}' 
                        and price<= '{$_POST['cont2']}' order by title desc";
                        }
                    } else if (@$_POST['section'] == 2){
                        if (@$_POST['order'] == 0) {
                            $query = "select * from book where author= '{$_POST['cont']}' order by title asc";
                        } else {
                            $query = "select * from book where author= '{$_POST['cont']}'  order by title desc";
                        }
                    }
                }

                if (@$_POST['attribute'] == 2) {
                    if (@$_POST['section'] == 0) {
                        if (@$_POST['order'] == 0) {
                            $query = "select * from book where author= '{$_POST['cont']}' and year>='{$_POST['cont1']}' 
                        and year<= '{$_POST['cont2']}' order by press asc";
                        } else {
                            $query = "select * from book where author= '{$_POST['cont']}' and year>='{$_POST['cont1']}' 
                        and year<= '{$_POST['cont2']}' order by press desc";
                        }

                    } else if (@$_POST['section'] == 1) {
                        if (@$_POST['order'] == 0) {
                            $query = "select * from book where author= '{$_POST['cont']}' and price>='{$_POST['cont1']}' 
                        and price<= '{$_POST['cont2']}' order by press asc";
                        } else {
                            $query = "select * from book where author= '{$_POST['cont']}' and price>='{$_POST['cont1']}' 
                        and price<= '{$_POST['cont2']}' order by press desc";
                        }
                    } else if (@$_POST['section'] == 2){
                        if (@$_POST['order'] == 0) {
                            $query = "select * from book where author= '{$_POST['cont']}' order by press asc";
                        } else {
                            $query = "select * from book where author= '{$_POST['cont']}'  order by press desc";
                        }
                    }
                }

                if (@$_POST['attribute'] == 3) {
                    if (@$_POST['section'] == 0) {
                        if (@$_POST['order'] == 0) {
                            $query = "select * from book where author= '{$_POST['cont']}' and year>='{$_POST['cont1']}' 
                        and year<= '{$_POST['cont2']}' order by year asc";
                        } else {
                            $query = "select * from book where author= '{$_POST['cont']}' and year>='{$_POST['cont1']}' 
                        and year<= '{$_POST['cont2']}' order by year desc";
                        }

                    } else if (@$_POST['section'] == 1) {
                        if (@$_POST['order'] == 0) {
                            $query = "select * from book where author= '{$_POST['cont']}' and price>='{$_POST['cont1']}' 
                        and price<= '{$_POST['cont2']}' order by year asc";
                        } else {
                            $query = "select * from book where author= '{$_POST['cont']}' and price>='{$_POST['cont1']}' 
                        and price<= '{$_POST['cont2']}' order by year desc";
                        }
                    } else if (@$_POST['section'] == 2){
                        if (@$_POST['order'] == 0) {
                            $query = "select * from book where author= '{$_POST['cont']}' order by year asc";
                        } else {
                            $query = "select * from book where author= '{$_POST['cont']}'  order by year desc";
                        }
                    }
                }

                if (@$_POST['attribute'] == 4) {
                    if (@$_POST['section'] == 0) {
                        if (@$_POST['order'] == 0) {
                            $query = "select * from book where author= '{$_POST['cont']}' and year>='{$_POST['cont1']}' 
                        and year<= '{$_POST['cont2']}' order by author asc";
                        } else {
                            $query = "select * from book where author= '{$_POST['cont']}' and year>='{$_POST['cont1']}' 
                        and year<= '{$_POST['cont2']}' order by author desc";
                        }

                    } else if (@$_POST['section'] == 1) {
                        if (@$_POST['order'] == 0) {
                            $query = "select * from book where author= '{$_POST['cont']}' and price>='{$_POST['cont1']}' 
                        and price<= '{$_POST['cont2']}' order by author asc";
                        } else {
                            $query = "select * from book where author= '{$_POST['cont']}' and price>='{$_POST['cont1']}' 
                        and price<= '{$_POST['cont2']}' order by author desc";
                        }
                    } else if (@$_POST['section'] == 2){
                        if (@$_POST['order'] == 0) {
                            $query = "select * from book where author= '{$_POST['cont']}' order by author asc";
                        } else {
                            $query = "select * from book where author= '{$_POST['cont']}'  order by author desc";
                        }
                    }
                }

                if (@$_POST['attribute'] == 5) {
                    if (@$_POST['section'] == 0) {
                        if (@$_POST['order'] == 0) {
                            $query = "select * from book where author= '{$_POST['cont']}' and year>='{$_POST['cont1']}' 
                        and year<= '{$_POST['cont2']}' order by price asc";
                        } else {
                            $query = "select * from book where author= '{$_POST['cont']}' and year>='{$_POST['cont1']}' 
                        and year<= '{$_POST['cont2']}' order by price desc";
                        }

                    } else if (@$_POST['section'] == 1) {
                        if (@$_POST['order'] == 0) {
                            $query = "select * from book where author= '{$_POST['cont']}' and price>='{$_POST['cont1']}' 
                        and price<= '{$_POST['cont2']}' order by price asc";
                        } else {
                            $query = "select * from book where author= '{$_POST['cont']}' and price>='{$_POST['cont1']}' 
                        and price<= '{$_POST['cont2']}' order by price desc";
                        }
                    } else if (@$_POST['section'] == 2){
                        if (@$_POST['order'] == 0) {
                            $query = "select * from book where author= '{$_POST['cont']}' order by price asc";
                        } else {
                            $query = "select * from book where author= '{$_POST['cont']}'  order by price desc";
                        }
                    }
                }
                /*else{
                    $query = "select * from book where author= '{$_POST['cont']}' order by title asc";
                }*/
            }

            else if(@$_POST['content'] ==4){
                if (@$_POST['attribute'] == 0) {
                    if (@$_POST['section'] == 0) {
                        if (@$_POST['order'] == 0) {
                            $query = "select * from book where year>='{$_POST['cont1']}' 
                        and year<= '{$_POST['cont2']}' order by category asc";
                        } else {
                            $query = "select * from book where year>='{$_POST['cont1']}' 
                        and year<= '{$_POST['cont2']}' order by category desc";
                        }

                    } else if (@$_POST['section'] == 1) {
                        if (@$_POST['order'] == 0) {
                            $query = "select * from book where price>='{$_POST['cont1']}' 
                        and price<= '{$_POST['cont2']}' order by category asc";
                        } else {
                            $query = "select * from book where price>='{$_POST['cont1']}' 
                        and price<= '{$_POST['cont2']}' order by category desc";
                        }
                    } else if (@$_POST['section'] == 2){
                        if (@$_POST['order'] == 0) {
                            $query = "select * from book order by category asc";
                        } else {
                            $query = "select * from book  order by category desc";
                        }
                    }
                }

                if (@$_POST['attribute'] == 1) {
                    if (@$_POST['section'] == 0) {
                        if (@$_POST['order'] == 0) {
                            $query = "select * from book where year>='{$_POST['cont1']}' 
                        and year<= '{$_POST['cont2']}' order by title asc";
                        } else {
                            $query = "select * from book where year>='{$_POST['cont1']}' 
                        and year<= '{$_POST['cont2']}' order by title desc";
                        }

                    } else if (@$_POST['section'] == 1) {
                        if (@$_POST['order'] == 0) {
                            $query = "select * from book where price>='{$_POST['cont1']}' 
                        and price<= '{$_POST['cont2']}' order by title asc";
                        } else {
                            $query = "select * from book where price>='{$_POST['cont1']}' 
                        and price<= '{$_POST['cont2']}' order by title desc";
                        }
                    } else if (@$_POST['section'] == 2){
                        if (@$_POST['order'] == 0) {
                            $query = "select * from book order by title asc";
                        } else {
                            $query = "select * from book order by title desc";
                        }
                    }
                }

                if (@$_POST['attribute'] == 2) {
                    if (@$_POST['section'] == 0) {
                        if (@$_POST['order'] == 0) {
                            $query = "select * from book where year>='{$_POST['cont1']}' 
                        and year<= '{$_POST['cont2']}' order by press asc";
                        } else {
                            $query = "select * from book where year>='{$_POST['cont1']}' 
                        and year<= '{$_POST['cont2']}' order by press desc";
                        }

                    } else if (@$_POST['section'] == 1) {
                        if (@$_POST['order'] == 0) {
                            $query = "select * from book where price>='{$_POST['cont1']}' 
                        and price<= '{$_POST['cont2']}' order by press asc";
                        } else {
                            $query = "select * from book where price>='{$_POST['cont1']}' 
                        and price<= '{$_POST['cont2']}' order by press desc";
                        }
                    } else if (@$_POST['section'] == 2){
                        if (@$_POST['order'] == 0) {
                            $query = "select * from book order by press asc";
                        } else {
                            $query = "select * from book order by press desc";
                        }
                    }
                }

                if (@$_POST['attribute'] == 3) {
                    if (@$_POST['section'] == 0) {
                        if (@$_POST['order'] == 0) {
                            $query = "select * from book where year>='{$_POST['cont1']}' 
                        and year<= '{$_POST['cont2']}' order by year asc";
                        } else {
                            $query = "select * from book where year>='{$_POST['cont1']}' 
                        and year<= '{$_POST['cont2']}' order by year desc";
                        }

                    } else if (@$_POST['section'] == 1) {
                        if (@$_POST['order'] == 0) {
                            $query = "select * from book where price>='{$_POST['cont1']}' 
                        and price<= '{$_POST['cont2']}' order by year asc";
                        } else {
                            $query = "select * from book where price>='{$_POST['cont1']}' 
                        and price<= '{$_POST['cont2']}' order by year desc";
                        }
                    } else if (@$_POST['section'] == 2){
                        if (@$_POST['order'] == 0) {
                            $query = "select * from book order by year asc";
                        } else {
                            $query = "select * from book order by year desc";
                        }
                    }
                }

                if (@$_POST['attribute'] == 4) {
                    if (@$_POST['section'] == 0) {
                        if (@$_POST['order'] == 0) {
                            $query = "select * from book where year>='{$_POST['cont1']}' 
                        and year<= '{$_POST['cont2']}' order by author asc";
                        } else {
                            $query = "select * from book where year>='{$_POST['cont1']}' 
                        and year<= '{$_POST['cont2']}' order by author desc";
                        }

                    } else if (@$_POST['section'] == 1) {
                        if (@$_POST['order'] == 0) {
                            $query = "select * from book where price>='{$_POST['cont1']}' 
                        and price<= '{$_POST['cont2']}' order by author asc";
                        } else {
                            $query = "select * from book where price>='{$_POST['cont1']}' 
                        and price<= '{$_POST['cont2']}' order by author desc";
                        }
                    } else if (@$_POST['section'] == 2){
                        if (@$_POST['order'] == 0) {
                            $query = "select * from book order by author asc";
                        } else {
                            $query = "select * from book order by author desc";
                        }
                    }
                }

                if (@$_POST['attribute'] == 5) {
                    if (@$_POST['section'] == 0) {
                        if (@$_POST['order'] == 0) {
                            $query = "select * from book where year>='{$_POST['cont1']}' 
                        and year<= '{$_POST['cont2']}' order by price asc";
                        } else {
                            $query = "select * from book where year>='{$_POST['cont1']}' 
                        and year<= '{$_POST['cont2']}' order by price desc";
                        }

                    } else if (@$_POST['section'] == 1) {
                        if (@$_POST['order'] == 0) {
                            $query = "select * from book where price>='{$_POST['cont1']}' 
                        and price<= '{$_POST['cont2']}' order by price asc";
                        } else {
                            $query = "select * from book where price>='{$_POST['cont1']}' 
                        and price<= '{$_POST['cont2']}' order by price desc";
                        }
                    } else if (@$_POST['section'] == 2){
                        if (@$_POST['order'] == 0) {
                            $query = "select * from book order by price asc";
                        } else {
                            $query = "select * from book order by price desc";
                        }
                    }
                }
                /*else{
                    $query = "select * from book order by title asc";
                }*/
            }


	    $rs = mysqli_query($conn, $query);
?>
		<table border = "1px" style = "margin-top: 20px;margin-left: 20px;width: 900px;">
			<thead>
				<tr>
					<th style = "width: 100px;height: 30px"><h4>书号</h4></th>
				    <th><h4>类别</h4></th>
				    <th><h4>书名</h4></th>
				    <th><h4>出版社</h4></th>
				    <th><h4>年份</h4></th>
				    <th><h4>作者</h4></th>
				    <th><h4>价格</h4></th>
				    <th><h4>藏书量</h4></th>
				    <th><h4>库存</h4></th>
				</tr>
			</thead>
<?php
	    $var = 0;
	    while (mysqli_fetch_row($rs) == ture) {
			$bno = mysqli_result($rs, 'bno');
			$category = mysqli_result($rs, 'category');
			$title = mysqli_result($rs, 'title');
			$press = mysqli_result($rs, 'press');
			$year = mysqli_result($rs, 'year');
			$author = mysqli_result($rs, 'author');
			$price = mysqli_result($rs, 'price');
			$total = mysqli_result($rs, 'total');
			$stock = mysqli_result($rs, 'stock');
	        $bno = iconv('GB2312', 'UTF-8', $bno);$category = iconv('GB2312', 'UTF-8', $category);$title = iconv('GB2312', 'UTF-8', $title);$press = iconv('GB2312', 'UTF-8', $press);$year = iconv('GB2312', 'UTF-8', $year);$author = iconv('GB2312', 'UTF-8', $author);$price = iconv('GB2312', 'UTF-8', $price);$total = iconv('GB2312', 'UTF-8', $total);$stock = iconv('GB2312', 'UTF-8', $stock);
?>
				<tr>
	                <td style = "width: 100px;height: 30px"><?php echo $bno;?></td>
	                <td><?php echo $category;?></td>
	                <td><?php echo $title;?></td>
	                <td><?php echo $press;?></td>
	                <td><?php echo $year;?></td>
	                <td><?php echo $author;?></td>
	                <td><?php echo $price;?></td>
	                <td><?php echo $total;?></td>
	                <td><?php echo $stock;?></td>		                	                
	            </tr>
<?php
	                if (isset($bno))
	                    $var++;
	                if ($var == 50)
	                    break;
	    }
	    if ($var == 0) {
	                echo "<script>alert('没有符合条件的书！')</script>";
	    }
	}
?>
			</table>
			<br/>
			<hr/>
			<br/>
			<table border = 0 style = "margin-top: 20px;margin-left: 20px;width: 900px;">
				<tr><td style = "width: 100px"></td><td style = "width: 100px"></td><td style = "width: 100px"></td><td style = "width: 100px"></td><td style = "width: 100px"></td><td style = "width: 100px"></td><td style = "width: 100px"></td><td style = "width: 100px"></td><td style = "width: 100px"><p class = "a" align="center"><a href="d2.php" target="tiaozhuan">返回</a></p></td></tr>
			</table>
</body>
</html>