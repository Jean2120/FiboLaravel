FIBONACCI EXERCISE

To obtain each value of each index of the Fibonacci series, it is known that it is obtained from the sum of its 2 previous elements. Therefore, it will be necessary to know at least the value of the first 2, declaring it in an array:
    $array = [0,1];
To obtain the interaction to be able to know the value of the required index, we would have to use the following function:
    for($i = 2; $i <= $indice; $i++);
As "$i" is initialized to "2" because the value of index 0 and 1 is already known, the interaction will stop until "$i" is less than or equal to the index we require.
What this for() function does is feed the $array in order to obtain the value of the index that we want.
As will be seen below:
    0	0	
    1	1
    2	$arr[1] + $arr[0] = 1
    3	$arr[2] + $arr[1] = 2
    .
    .


For this exercise as an Api it is solved:
    http://fibolaravel.test/GetIndice/{n}

Main Route by my Laragon configuration: "http://fibolaravel.test"
Route GET: "GetIndice/{n}"
Index: "n"


IMPROVEMENTS:
* It can be perfectly improved by adding json-type responses as an example:
[
    'state' => 'ok',
    'info' => [
        'data' => $array[$n],
        'status' => 200,
        'name' => 'OK',
        'message' => 'Success.'
    ]
]

* Control of possible errors such as the use of letters when sending text instead of numbers in the route.
* When you come to want to know the value of large store indices form a response structure like this: "1.9039249070914E+14" would have to be worked on to structure it in full numeric format if required.
* Documentation is important so it is another point of improvement. Having documented down to the smallest point. It is synonymous with order.
* As this is a solution filling an array. This can be stored in a database so you don't have to do the interaction of all the elements each time it is requested. The database would be consulted every time a index and its value is known. The interaction would only be made for a larger unknown number and starting from the last indexes stored in the database.
