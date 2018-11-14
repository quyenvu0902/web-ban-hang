<?php
$bien="làm hoài ko dc";
                                            	
                                               
                                if(strlen($bien) > 5)
                                {
                                    $output = mb_substr($bien, 0, 5, "UTF-8");
                                    while(substr($output, -1) != " ")
                                    {
                                        $output = substr($output, 0, strlen($output)-1);
                                    }
                                    $output = $output." ...";
                                    echo $output;
                                }
                                else
                                    echo $bien;
                            ?>