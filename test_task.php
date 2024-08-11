<?php
// $array = [
//     "x" =>["a"=>1 ,"b"=> 2, "s"=>3 , "d"=>4 , "f"=>5 ],
//     "y"=>["a1"=>1 ,"b1"=> 2, "s1"=>3 , "d1"=>9 , "f1"=>5,"g1"=>6 ],
//     "z"=>["a2"=>1 ,"b3"=> 2, "s4"=>3  ]
// ];
    
// $maxkey=0;
// $maxarray ;
 
// foreach ($array as $key => $x){
  

//     $count = count($x);

//     if ($count> $maxkey){
//         $maxkey = $count;
//         $maxarray = $x;
//     }


//     $maxele = max($maxarray);
    

   



// // $array1=[
// //     "apple"=>"red",
// //     "banana"=>"yellow",
// //     "taste"=>[
// //         "apple"=>"Sweet",
// //         "banana"=>"sweet"
// //     ]
    
// // ]

  
// //    echo $count ;
// }

// print_r($maxarray);

// echo $maxele;



// // print_r($maxarray);


// // echo "max element id :\n";
// // echo max($maxarray);

// $arr = ["a"=>1 ,"b"=> 2, "s"=>3 , "d"=>4 , "f"=>5 ];

// $temp;
// $arr2;

// foreach($arr as $key=>$val){
    
    
//     $temp = $key;
//     $key= $val ;
//     $val = $temp ;
//     $arr2 = [$key => $val];
    
    
    
// }

// $arr2 = array_flip($arr);

// print_r($arr2);

$array = array( "FName"=>"John", "LName"=>"Doe");
print_r(array_change_key_case($array, CASE_LOWER));




 
?>