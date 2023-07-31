<?php
session_start();
if(!isset($_SESSION['mail']))
{
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>✨ submit panel ✨</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
<!-- <form class="m-4"> -->
    
    <!-- <div class="md:grid-cols-2">
    <div>
      <label for="first_name" class="block mt-6 text-sm font-medium text-gray-900 dark:text-white">First name</label>
      <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="John" required>
    </div>
        <div>
            <label for="last_name" class="block mt-6 text-sm font-medium text-gray-900 dark:text-white">Last name</label>
            <input type="text" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Doe" required>
        </div>
        <div>
            <label for="company" class="block mt-6 text-sm font-medium text-gray-900 dark:text-white">Company</label>
            <input type="text" id="company" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Flowbite" required>
        </div>  
        <div>
            <label for="phone" class="block mt-6 text-sm font-medium text-gray-900 dark:text-white">Phone number</label>
            <input type="tel" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required>
        </div>
        <div>
            <label for="website" class="block mt-6 text-sm font-medium text-gray-900 dark:text-white">Website URL</label>
            <input type="url" id="website" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="flowbite.com" required>
        </div>
        <div>
            <label for="visitors" class="block mt-6 text-sm font-medium text-gray-900 dark:text-white">Unique visitors (per month)</label>
            <input type="number" id="visitors" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
        </div>
    </div> -->
    <!-- <div class="mb-6">
        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
        <input type="text" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="john doe" required>
    </div>
    <div class="mb-6">
        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Whatsapp number</label>
        <input type="tel" id="number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="9632587410" minlength="10" maxlength="10" required>
    </div>
    <div class="mb-6">
        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email address</label>
        <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="john.doe@company.com" required>
    </div> 
    <div class="mb-6">
        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">MUJ Registration number</label>
        <input type="tel" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required minlength="10" maxlength="10">
    </div>  -->
    <!-- <div class="mb-6">
        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
        <input type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="•••••••••" required>
    </div>  -->
    <!-- <div class="mb-6">
        <label for="confirm_password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm password</label>
        <input type="password" id="confirm_password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="•••••••••" required>
    </div> 
    <div class="flex items-start mb-6">
        <div class="flex items-center h-5">
        <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800" required>
        </div>
        <label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">I agree with the <a href="#" class="text-blue-600 hover:underline dark:text-blue-500">terms and conditions</a>.</label>
    </div>
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button> -->
  
  


<nav class="fixed w-full z-30 top-0 backdrop-filter backdrop-blur-lg border-b border-gray-300">
    <div class="max-w-7xl mx-auto px-1">
      <div class="flex justify-between">

        <div class="flex space-x-2">
          <!-- logo -->
          <div class="hidden md:flex items-center space-x-1">
            <img class="w-2/3 py-4 
                        " src="data:image/png;base64,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" alt="MUJ" />
          </div>

          <!-- primary nav -->
          <div class="hidden md:flex items-center space-x-1">
            <!-- <a href="journey.php"
              class="font-bold py-5 px-3 text-gray-700 text-lg hover:text-gray-900 whitespace-nowrap transform hover:transition duration-500 hover:scale-105" target="_blank">🗺️Journey</a> -->
          </div>
          <div class="hidden md:flex items-center space-x-1">
            <!-- <a href="fetchdata.php"
              class="font-bold py-5 px-3 text-gray-700 text-lg hover:text-gray-900 whitespace-nowrap transform hover:transition duration-500 hover:scale-105" target="_blank">🚗Check Requests</a> -->
          </div>
      
          <div class="hidden md:flex items-center space-x-1">
            <!-- <a href="exam101.php"
              class="font-bold py-5 px-3 text-gray-700 text-lg hover:text-gray-900 whitespace-nowrap transform hover:transition duration-500 hover:scale-105" target="_blank">🆘EXAM 101</a> -->
          </div>
        </div>

        <!-- secondary nav -->
        <div class="hidden md:flex items-center space-x-1">
          <!-- <a href="https://www.linkedin.com/in/cbsameer/"
            class="font-bold py-5 px-3 text-gray-700 hover:text-gray-900 text-lg hover:text-gray-900 whitespace-nowrap transform hover:transition duration-500 hover:scale-105">🚀Connect</a> -->
            <a href="logout.php" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Log out</a>
           
        </div>

        <!-- mobile button goes here -->
        <div class="md:hidden flex items-center">
          <div class="flex sm:w-1/2 mx-auto pt-2 flex-col justify-center items-center ">
            <img class="w-2/3 py-3 
                        " src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAeoAAABnCAMAAAD46vG6AAABVlBMVEX///83NDUAAAAwLS4qJiczMDEhHR4cFxktKiv8/PwkICIXERMdGBrydjYnIyT29vaEg4Po6OjV1dWjoqN7enqxsLCPjo6XlpZycXHw8PCJiIm5ubnEw8NTUFHn5ud0c3NpaGhiYGGenZ0MAAY+Ojvc3NynpqaUk5PIyMizm5VaWFnPYTdKSEnkbjcSCw5DQEHBrqnoZziskovNvrrWysfdajflYziggXmQamDe1NH/8epaAADRw8DhWzmwl5CJX1S9VzZ2QC+vRzicenHWUzmCU0ZyOCWxQiFTAAD02tBlHwBgDgB7STq2VTbJVji/TDmhSTWLPTVoJABsLBTDjIPbopDGcVjCZknKgGzbrKC1SiuvOxSyVD6rQCO9jYacMA6pb2aZPCSvZlrKqKR7KRiLRzx7Iw93LiTmwbby0seMMBl/IACeQjeHOjOTWVOlMhyaOyCiVUJ9futpAAAgAElEQVR4nO19+5/aRrJvSzwFLJJAwIiHAIEAMRgUwayQh8x4lsMkmRn7OJ5szq7jJHY2dx+J7272///ldnXrjWDGx3HG51zq87FHSK1WdX+7qquqXwjdSY//+PV//enPj+9OeKD/4fTFNy+fHR+//ObrLx6akwN9YPqvl8cnmI6fffPVQ7NyoA9Kjz87Pnn0u9/97tHJ8ctX8kNzc6APSF98dgxIE7Cffas8NDsH+nD02IOaYH2Q6//F5EONsX7y74dm50Afjv707OR3HtbHL797aH4O9MHoi7BYf/+Bu+vRh8j/g2T6m5GsyNz23ZoYm7j6bnmHK+ZrX6yxGf709e6U8dRsV9WyWhWi9+t1uN1uBu+NuuzQ/6W169E3m+16rYzvSQOtLdRUfDkUjsQRuVuu1QWprjai9gTONFgBR1KVJpaGaJuUI2GokscuZwOJ8C817s3OkVANZ1GRqviR1Bi1heoQkpVVtTasYnbxQ877oiAJ1UEpzI8o5FhMyVYN/5CAlbKKWS+jTkqIoZkk0uzUmtDWgrUoRQuqI84w+dC9L77xbHCA+udgTcrWnEOR9FuV1xB6yWQ23wzfLk2zyVx/0Ay2lnIvwSQCuTckFr9Z7AYya9amyWS+3dDkZjmdxJQdNHmxKRWSyeJErXbZXG7aCYE9wJlmA7+bjVYOv5cpNyO1SohvViDXZF51OSs1q9Nkvt5UdrIzbTdD7DQr2SK+LFTdLLRmLZ/MDzQF/mYxo0CzaT7L4odcs8Lg5LnxsCYw02I6rQZrZDqVNI4bMcUO/jVqjOEjeQmz3kpOWUL5LKYeuezlimW+0Z4CI+l6k1aD3BwkivlWI1pSY25zUW3xZ6rCH2GkMdRvjOAzjrPn85gaC1OlyDCpVvheJ8EwObR9Lx0CoJFmGKbYDt7SClmnhTZwtrkRvZ6lmAQkk8dZJpEJtp/tTFGBYbK7Nd0oxzDJQfCOlHTgbeSAnZCAaJkQO/RDYganY4LJxukK+atmGSbv3GsWp04euJRFgkUDs5Ybe28N8g6ffNa5iV9PdEgZJNnNhWEKFDNeykMuKlRaIdDepXRUp8o2ZtI2txyq1y+PTx5RpDHUVvCRaNq4z1jE9CVB4qDkmVB1i/loZUAyjEo2zNUkhZOlQ6q26+ZUwkUqOF1WG+uDI3LVTzGp/v5M+xjL8k5uxUK0bVQyLgMx7Izj2JEwJKEGl3CaNbQHF2rUYJ2Lggs1ads5lzd5yhTcpI62a6VoK+VZt86buPll3B8Zojs70CD8BiPnJ9Ey8ueyYqxiCv/Dy2MaHT1+8vT5MvxsbsjK+R1QQ1FcJBwSksyWVDfy0paoS4ksNJNK8NWe02OQulXcdO4HoDILo0im6VCm+6GWM1tQ52shdvK72XGg1nAe2ZqfqNRzmkcIas7FK+dBDY0p5YqAmkx5vYXTKlyoS15rDkHdJblwCSbQYFCXjZpwNpJ1HtmLmNK//vbJMRBG+u069GTuvBXzkk9cHr6dD3yQn07gTriJdMZKwVfJlKRcFZTmNNDTC64sxEMNSCX9/q4zBinNhSyF94A6Wy8COwEepRA7bhlB/AMWguDWdghqNHZaSQDqGpaBvHN7nEp4fZdTAE+qvcoMQe3aF1NgUnO4Z4Mtk5CpI351sYzeJvSX758+ffLk6dPnz3+MdM2bzYJHlh77lksyqybD3aPaG+EyZ0KtjccsgfSHemZckUegAKZ+3d8BNcJ3s/W9mb4H1HmHHS3IYYAdt0RgnqT9BpF3pTMMtUsBqCtJv16wgM8iKV2ofQpB7ZKKbzrdmMh2tou4lA19l3gqr39+8/z58y9/3ESfLHRDXN5hhLMl0KIBhtJdhDvrtBZMVWFlNMxGZB0qcgxKM+01i3eCmmSajGT6XlBH2YmHmiu49hNQg3W1ShBqv9ICUA8CzKZCzYXQPaFGY1zfSWIvttLRhzZxtfjd5rRi/p+//vVv5tZ96m5x+1R4iS1B5+WbtRW2hLZ09Rjb6CXfQKFEKnKC+U4l3Jq5A2ou9KXYTN8PajQDdlIuO/FQo3rWV8Ro7BkgAahF98UQ1Pg9z6Iapzyb3qX7Qs1DtwcOrsqOos/O1kheLF/Ex2Ac4uKEV7ta2zy3NGIeedywCum8PJ+ZwXqpGKl/mXQpYDsGHFdakXwKXnZ12R1Qg+cydY1fmQXQE5FM3xNqPgHsuFbtDqi1vN/iRNaz0AJQN3w/IQA1zrrnfhy6PSZfD9b6faFGI3Bx0rzG1iMPeOw2KbZu7FfE8QRq3zZ5frcZDloUXNKcU5wmiy+YiPc6YMHLq4IwBF1CUpEitFHXtbwDalw/2c7+TN8TaiSC45rtBjlEUagBFLenrfkmMECdgQuulPVdIB/qcpGZeqzxxCPN5oc+LPeGGoH9mOhM+tH7hol4iwd7OpY4QvHPwGaXLQ6t49w0SkNwKkDrOYVrZR2mA+4ImpAYC9RXMWAxOhWpgUmZpLbVfqix5kpkvaqZTOIyfV+oKTtOKGUX1NC2CzSbpK9SAGqGhLYKCT+o5EKtCelkMuAsNHqANZMseDJxf6ipHi1sxa7n1oK39RsnPPL473/809dfP3358jNM33wD/38L9K9/4f+evvrhh9dffffnv//DnVq43Bg2mq9399akgspJt+glolU7iVBkQ2FpcZLhwJpbkSOo3Bwp5F6oS/1kZuwh7WaaDWf63lBTdtLVIIdRqAE/WsAR66MHUGfrglAXJsUQ1Eyux+bT2QiODeKm4k+53fc7QA26J9WN3uXRei6uHbn8x79/evPmKThXmJ4F6T+B/kDo7dsfMX1HPzFfr3ndQju1/xhiAqCNqE3amcJrAZsZSGXp60TZ+hXmVWQDlFkGkNsD9YxlGSlghriZDsOZvj/U+JYb2dkJNZSEYHBU8G8G+up2SIFnayUwH6PeldyhYLu91ztATSy8KNTcBYeW2JI24I1//Pz2Ocb52KVPgf7DJ4o4QfvLv/0NqhKb7byBrbqLuO8BUZNSgPpWwEgZOoyk/OAd6qeKaSAoWAAHryKRWnBCKXugjpa4n0r6mfphlV8Bap+dnVAreaqW+eBoXQDqkh8XdhS4ih8mo+FqbVwgck07oPeGerNEc/nsiljRX3353AX65PdAn34aRfs/njlgf/k3EnHRb3V+zi/P474HxB65RQeNViemEjUv/QJlijlK2VDT9qFGdeI/lO70qwO1tCPTXwNqJORoZGcn1ODbQmOusIH+MgC1vO1spcLBIodGWd/OeU+ocUdrifLa8Ze+e+tC/fsg0mG0XcH+8poUQ8caXMPdfbyrJvdoS+0mwNXkWWrOQKzAj3cPWddChiaQ8WIrAahpnKog1+8N9a5M3xXqQd5NHYCaspOWhZ1QAwhYjc0CuuuOaFkTVDiz9Zifpdy4yntCjbtZe2MZIrWr7J8cqLeQDuJNscZiTSw5WzGscwWt451rrUeFYlQA/2rAal6hfRZ9z4MEWzyVF4SaxKlSs6Oe8/NOqLOeIJPhBy/T/VCDURGOmdfybgAgCHUsO6HGjttCsqawwejBHYFRkIYtFU4VIo2WvifUZ/patGXj1jGhfyBQn5zsgNoB2xHr//s3eGV1YfArfqnHh8JHU8dXgMbZZ7oBFt2aKfX8nnQWDLaEoCZxKiblVtVdUEcz9YYfIlCLofgsqfjweHXHC3mHoI5jJwQ1DF3066FXolDz7hcp1HKedlI0Qz9wjxGmgYH3hFrWDUVbW65Iyj+9CUAdJRfrZ45YXxNmdXOtaIYeb4NXpm4oH7o3d4ARasYLggs9v7pVzytDUahJ2Iy5L9T1SKaeVo5ALQzC73USIYMRcZmke9kO4UbCZsxuqGXfQ3QpCjXlPxBCgSpK0WdaxkuGi0c7u/eDGoviammuRM94kGHM8uTRJ0Auwp984v2kWIehVpS5uVyQvLap5o35FQPWEQQwvSB4OtBBKZnAeEV3GioFiVPtgjo0eoWgAndkGoaaYyNSDdMDMoF7Zc8qw+yEUm6zE7ZWYAZMPpR7BOrS1OE0OF7txht4P3w9Tjn33hHqsF8tX2xs2+aMTWCgevXtk5NHjz6JJQI2dbpAgf+TvDA/N9BcWW1i/a2ONwEFazQ3OBqYZYPZnQYndvRxaYvOdS4S7oHQclzdHiW2wgWjUKagwV0rEGrT1+1HIcUBNEkE7fVSPufVZDE87krCZnugHqWjE62IheIrvxltnvjNpBPNU4gKpxjnXSbEPDOlFuY21CTH2KUYUtaLTzq00XXbXpuhiUQ2zCeLgv3IE/RPXaS//KvTZvH7mq3rcf6WWPBcWtwVeb3wKOc3334xqEPbWBacG4NidBLYaOqN8cHQbtGxnxKR6VRbmUp+pnTml8N4qZULKmvKZiLJJPq0urlB3ht+wF5DHDvew6g5B40qF56/VyWTw2jzlRuzNOEIWr034jkATZEkKWbJLimqPEv0nIxBL4b5hblNya3JB0DROpERb1q2tTTCw5d/Oj6hk0QduJ2JhBh/wPpTMMv+8ObNT/90ZW5uLHEuZxyKtC9eFaa5XO9IpaxKTjRXrkl58Hen3VqpVM+nc1NJpRUqq238Qq7ISg1R7bDFXG+shvrSRp5IhaJKPZKDoMpauVUADzpdLbsqL5qpRDNtN1B5WATKsYX+ZFZke7lMMBJPiZOmxWwh2RGEcY/tO41CiWWnks+H2KmrwRpQi8nAr5J6NIVvF2B2J/43LeJWxKl1wlt+XKYZd9PAXQcGIPOFvFCpSNMMQ8oxqDFpnDLTUt0WNSh3pkVSW2p4rJJXcVqok2xNdTGCyQiGKdtnIalGf//shE78hkjKI4q6c4mx/vTZf/7r7evvDF+5LnVNXuMuYBUZ8ObVSqPZbFQGtHFrzmwqGd/G9+FBqTSgKUrBJ43GoCHW4BI/CTtGKglJaOoAHuKnNblUGzgpvTrYlWkF1dRBBf8iPxuVCn4n0lXTNwbtWQYD0vfjrMo92QnqcJkNtiPgEz4d+DaPOGAeblTKql9ljQGUhKt00iybcOeTq+UK/Yjqqgp6h9wK6xPZqRJgyC2fuXxh6+j8fBPuZb74DFA9OX761VcvqYCfHL/67isyT/iT3z/77HVkxMTebJZIX12t9089+lXorkmLvzF9ZOzsprllmKKpn0WiH2QF5qPjH/Al9xTwfXT8CkEfjlvAo5PPtpdu6bp+ppjGnvGtAz00KaYln+lzPjxTFKDGkBLg/g5QO9d/JC3gD1u5zJFxpiumuXcWy4EekgBg48bm0SYsjgTq42+IcsLKHMP7Dbn/DyzWJ8+298pYLZG8uJg7OR7oIyTzdikbNuKXt+Euh0L9GbmGftu/Pj6Jg1q+XYNNJi5vtycaHuijIMu0Ls+QfbEOG+BkD5STANQnx9861/FQo6V1KaKzF6ZpbT870MdAxnJ9pnC35jJiUT/+Ngj1cQjq4zio7eXZJbLN9fLu1XoHehiab8zlSrcMdBa6TaGm8FIJD0D9chvqM6Rb+uLcPN89mfBAD07GUlkbyP48dJNC/ZJe3w21/LmI8xHfRaSbdyc50K9Nxo2C+Bc3IROcQk2dqgjUxzFQL24uOdzjx4p0A4JBELoKBWrLbHCihzwgaXCiEipVyGWlUvHW2Uez0CoNJ7H/pNKMi3odyCODE5GGjebLcyvkJT0may9f0WuQ5P1QG+Zmg00zmRO5rZkojfIkk8sV+moQ6mEmtOaZHwxxmlzvaIChLo/zuVxaEjpTNleXaRYtuOVloQ2q01w6oWpO5smOII3ZXl46uPW7ybo6PbUtpF+fnUWkGkP9JAD1MyrhO6Cen52dGshanJ6+iHO2ZqnQHhWIDGeG1zzDGKA3oAyLleBvJZOdOuhOUt7AJqFK0R256zMJMluNq+HUh25hJ80t3cB+9Y1prlGwo338PUBNtyl7DPB6UD+JgXrOWdZ6iWzd0NdxIZR61l+VSKlb3Brwy/t3YHkAuSjlGQfrajY8o0LxtgIQsu6khEGO6f2P3szow9JmbVkb5cbQdWQGutrHvzx9cvzkB3oN8D5xoMbS/iS6e5mhI+vMWNobAngMYajDs4G4/HAL/YwPNaxOplfDJDMlI/nVSHp56v70ocbaY3su4YFc4s7W1mI5X2NfywrMIeF+gaXzr8k1hZoq81iob88Qb5rGcrXeMbC1BXVDEjP+mlRKsVDjZHS1VRRqvufmGIB6mGUK6ED7yDaW2Hy9OPdVOPfLq6dPn1JFHYH6yZNfwlAbm3NsKS313bpzC+rWCHe+xfDciVioUdaZqrINtYtvAGr8Xj527s2BPFqusQBdB7Xvm+evnr6hkD4GeJ88J9dffPv0iXvfpfP1NYf/3xMRjUINCxsGyci0q3ioJ45OvhfUg2R0f5UDBYj4Jzx2lYwra+nX07+fP3/+hko59y0oc8dE+wUL+5u/hDJYWlc44YWf2xZFoS63yTyzfEgPxEPdd+zye0HdTkS3RztQgKybm4tzw5ij5QvL8vcq+suPb9/+7HSmr7Ayd5X2L89fPf8pYL/ZSLSsKwsZK+P84uYiHF51KQo1A7N4OolkaFZXLNRcgUmTu/eBWs6E9h46UIT4jWXq+lxE6zUMb3krNF7//KPrN3335tXz7721H8+fBzafhIUC5npjIgXb8Ka1tSkOpQjUCpmOCxOYg4lioW7mUnQC/H2gbiUy0e0gDhQkbW2Z2K0+XxmwQE8/dUXWx5N7+9P3bvds//z2x9feE+MUv2Kc64sbyMNa74hWRaAeUmgK/iIOoFioZylnau5eqEkIZTRL5yPrNA4UpZVhrGzlfLHGCnt5s4kxbGy/V53/c+05SfLmAisCcW1vZHtuxO5kSCgCtbOWR8iGgqMxUPOdtNsa9kHNZPutWSaXrP13tnL5/5HsS9DdVxtr32ZFYdL1S7DGrIs7YlRhqEvOcgotHQqORqFudMfs1NveZx/UqW6pVAruE3agXeSI8QrWZlwvDRPZ95n3uVLQen5zi68u7FA+2xSGWkgcdQhlQ8HRKNRKM7iN85199Sjv7ixwoN3E69rKXJu2gbXxpQmG2dXdkq1jeTaNJQxorRb47YWm3xPq/JGzUXk3FYQv3tly6W6z7Ci7Y+3SgQKkXJ/fbNaWgbtk/czCMnqzd8s5IB3iLXMTa3vF1q31ZnN+tbueQ1A3veVwSig4eifUoeGObaj5dHBn5APtIOUCC7Np6tYSu07497Vl7tfh9tkSq255fYbOzTP8om7d7JGoENQd/3IWDI7uh7qWDK8q5HvuDuyes1VJH1T4PYjTN+eWMbdXG9sCKb8x9ou1YdzCyuqlcmHbc906P9+7gCcINRfYMKIcDI7uhxrfCg1wiz13TaTvV48ThxD4O5D9Aoyzq1sD97xyvGTbHGy08IIYZLf3mvcRhLrB+jpbzAe2E9sPtZYJbzQ88lpMIFqWZxKHwOjdRG0q21ZuF9jeujJ0jMFl3LRAA7cFWzeusRzPb0THWN8/yBCEehzUw62Uv33BfqhRPxXywiWvxQRHtgpMbnsJ7YEiJJ/ZC+v6+vRyhYWHPzV0GWacbUdFjPMNhRpfa/Pb6+sry16c7Q9eBKBWQlvZDpL+ORthqFPRPBqZ4F4Tir/vWwBqOLUievTPgbaJv3yxhHD4cnNrIV03oMu2bqLiKp8vcSfN6focrW83Swh8L6+2UkUoAPVRLrhtBURRnAEKueDvK1TNxuz41M4xWRdrMekr6lbKN9g4JuXuLnGgfWRhhwtjbSjzWwV2UTCu1luhM8PcXGFR1+fai5VNhjjWN3cu06q7/lBJymRTI9GxnWRRyGWzxYbCcWJpnCSXPOKVSgZfdrSoGQDnXUkjRRZHAuu2HFmpF7LZQlVzslTyiSxb1w4R0rvINk2D9L3yxTkMWV1Zy6hlfbZeQnzlbHlDqtM2TPPu+df1LB10rnTbkiR1uk6nK3WPJPjd0uRWp00uxxWk0rvtbisKmFJP0aPD2l4YrU0TH3U7zo1RB786Pijxe5K8WIgWhnJ1rW+iUJvn1qmN5MszcbG4t+wI2T27/70T8VpJO/hTvwrJsjw/v766vlqvFIRujJstBX6hL7F8zZfYHrteznH6e+QqJaLHjRzo4cn8HBtbuMteXl7fmrJ+EdXO9pUhW1fXl0vcSWMD7vN77X3STRwmcn6EpJyfW2f6mTm3Rf1qdb31/HRxbci4i8ZprM3yjgiKRo9bLRYP3u5HSYphOId4yJvT6Ei0fXpOumjONgzjzlBZqwCWdymfuCvhgR6UOHshGtfh4OjieiWu7r+L0VEOu8Iykzosm/tYidNtZbW+vr4+XfKLuW94iXObPz+FANlCse8zWYVr51k2+ytZ3wf6FWjLa+Ivb29ub9bG3LpaWqdOiISzrq3llTk31vjZi7siZC7Jh3DGx0QxEmqdG7q1JvFRbn0NoXADIOcM/Wxt6cYm5sTEwzZWHz9xl/Nt71g5M03LpPDZF+eLmw210FaWZZr6dudrKwfx/eiJv7WRvL/n5W9Pdx6tRAnmpd1/qumBHoI4QBopl/vSmJ/rvLk3WqJwax3bbIcdRj9mUq6wYpZXN7tTGKdL0O/i+fWuDYx4GAeDkZH5YeuZj5kUDlQvhnoRK5OrF+40b7S4vYw1vWyTLPtZGveaP36gByQNy+M5h4wYHBcXV0FRNk4322jK4oUir3GDuTkg/bGTgu2pNb9Q0PayK2trEDO6rNa+BattBbPLDjGxj58wTNZqgeQlUux33nXAwOAvdp6H+WDUVCe/qffX7O+ZrFqbBteIKsPuQ86dMHUQTgy6smvlbAzR2cMXuJ82rZ1vVVGzWq+Tc8tqQl0IG26je41jN7eOBL0Hb7PZzmf1ttCq7fvy4I5WUh53/cUFZLLcoFJqVHbVwVGpESp2lY3NvzQU6hIc4FHGfyl7mtCS6pJQcnNudDuCdFQK5aZsHVJNafvARUo2WFYm1uRz3b7vTqEK7ZwVbNLZOxfcCsBl2jmItNSLPJ30t16IofyOwuylRHXXkzE0u/4eqEvsXqmTx41Rl3VPlJKgaKUO/DeMT19vRG50dimAlrMdp8wSbLkO3QVCdBYxacU2tBFuEnq/uz3lktBwp4DwBlKWCN3CtiaGcZfy44n/RXdJMPXdU1FGpMIzHfpLi7Y0/l5KlodehdfeqW/hd8KlkXY3iBVB5yP7FRtBNOtsjjgiQ/F9+BhfjE0usz7j9IzCqRqbENanOBcESz7FOG+WqpRxpy0pwQnWo3Yvyi4tRXOXWGO3arG00dwUsSlmLTDau31kGfFrcrEkymCfGiAbTnpnEDXeY1uD8tYpd3upxO5qf00iOvENoRZVOzvJPXSPFJC2HhT/yVpgkUOmSlLvkre8MxOWisRk6ubHQ3fBpV1h5oJL0zoyG1VQNcKbtn08coguOUUhom3MxTV1ukMk84i3YBEm+QVivePQU+ejZACz5K662eogtwSVj3tO/p/sVMiBpJz3o5II3g+S0gvUPRe+6ofkbd+8uRZd9VkljbdG7YJcEELOLQrjD+Iq5FCuSvhM18D3QiLR6IWFv9aL63MGJcQGBChQCnG/bBhEWufgaPPolkP8C9tY8cbKmY6g3Cow1mVsVg6Da3O1T9lx9GsV94TRLlRejcVlr5LdBAWQAwFUrUySDAQJDsHssrh14GpTpyzgCwLUGicnk1KFZXgog6twKqTHVCfQreGbcocl7V1sd3IzIhi8VJt1cFsrSEjwurRu2ltr0q4VaO0OZvjVCfkI0sgCBU6oVgTysDLFeamFkJnn9A88FHDQYpgWMFr0sSh1ypUOIN+FPOn9ZmtSHGPJ7HTgGHW6krAiCd6Ryf5CNNLNtqbhppaIbMBLaxjnlXAXpYZKgatpf48nw+MN/sbt4gwDLsP0UGTZyKYaey3KsBWd8sJJPt/fq5UpE4JrccLyHKHWK8mdSgHXTbXTR/xQBeQ0+K+DgcO8tqUEP83xqKOgEq70ehcECJZlc0ID1tp6ClCtQkPn8lUMqdBDI0klZsyo49aamBFRg0WaNBsMpl6F8Ik0vR6lOFQFNaeNRVFQQJDgRxWOJpdJVlINNNO0go4qTCdYsioVapU0KM5Rob5ibpAjU4kMNwPCNSbJITuNmn4SrgXWk/pBUCS4adhkladxq8fB6u04jVAbK7QU9Pxc7R493hxMatxnIziSQ8HyDIutz4jK1nX69675gw4laBW0HGXKYfHT+FFBrmNx0JCGujVsAVXAmtEKuPq6ABE/4hp1qBJnz5QSmoGotjv4soQwoq6uQJrcAEmVehoaoaFUqqAmgQrAE4kNm8Hf73ZQBbVCVoJYJLJM0sCZt1rPaf8dstWGCC1zQlAZsUhWRFbGTSO0AbXWcw4ZL9FUtPdg3Zl4CgW9DS1K8N0Hekyxxiptjqqx8gSK6c3f80QCTtKMQqtMY7bKFbuyKAs9h6dgKeCA2e30W2Tz3HqBYLDLMBQMLWyksCAbSy50ZMCshLl5H9PZVSH5Dv1NrQ1JwE15AHjwpBV3wZ4cDHBqGTXJsiypAzjJ7IxUgkKsHaqaccVoSPTks4VfbY7JUr5ireJkRY4kb8I537UW4iT4NpcO+0FaBrRmt4r9JqJ4XTOHauXamH4HqgtwUDv1sHAiLkubOt2BDQ2pveSLkUBXF0pgFKT8RtYk9VFhBJ76nVD+UdLv4CeOSPDwHj+lwiqrR+OxCtDHuJydOmw0Qtct5sKlQOXOdvoY4uwF0udUninUdG29uERgraHVvaJqTWoDyq6TQA9kyEPF9EFrVaD1Uu3Xgg2hB0PaV2Wom1DKEXyhK/YNaqyYy64YyFh4lMpkSJ5XnQ6/Qmxi0rILR+Wag5hfnySfQQbrE1ZQybm0DbdTG1GpgjOCVdfKwAlm4PN0gq5Ly1FqDYrGhKrgiocFQxtjqws8+ZNuSbND7SkwU8X8lgtuiSkVOvRviXyr7+6XWqLNPOttn8+5lV9yVE8jphSo++yZDm0AAAN9SURBVA5bSKw4eWPwmo3WCuJp6JO/XtzpcvvktCvF7Y2ONMKJ5nonLQCJiAsgMnErU3O7LGxr4XpKgFgMJ4512VL9MFAlg/g6Neiq0GoGIEzjOsmiEsgH1QM2N2l2Mlv360ZynZj6GD5CeKtRG+ioD+yPQAAD1nXXtZdUUkD3XPuWBxvdUpODchP14hDdxj5HFDHYXN2ISmYddUVPslXdEw4qtLXUvOJUXagZwohCDPdIKfDX33HFE6etYI+EheM6bzlfe2nosN6jzZ0nak2C8mGrZggNvsKhNv7dhEJlAQQZJIrIygg4TSu45vkB8VjKpKSC4McfW0O5jVQG1RztNSvjpGRVb3sqjkTaCzaUgG7DRFCXsZKjPk+ZQx3SKVZ5SKYqaDhGDUdfQzLKTiWHak7ZOQoQxDqrVKpoXyn7Kv6I3C+DWApeb4Olk+fqtB/nGtBxkMbN+wp+5njCRfqlvvO37mTs7vEkuqA2nLzJNvi0FHW3FKjR2cLjA1LNYaVCfCaNdr1EPHLFLnZ981183e9qQ4JEO6nJFSj8hBS+3h9pDdxH1fJd7EaxUoe26fLE8zZltoBrvZ/DWZVAQhU2VQcbUNGE0fSogSVRkjWp6UU4nJdAZI46UPMqX4JcVbbBj454/D75SGICyn8GyWbwLXLm+zjTcpcKM0wfjrWHdkuhHlLsqz5mCrBDu/uUr6HVvHpEvWqZJQ2uninJFb8p4Dc6WGXKLcdn4yeMSDJj3C9LNFXNLYqjaYqgOSKlQKnf9GyLiqugNIlpjatE84skqEfO1hlMgKVKqkOZ4ju5MRSSy5Df8lG2T8ZIWvgn1287Nd3wz3nnhpC8DFmNICVfhd+lGbYDmjPidc2yAumMAzFjbaBKAu3GBgwzJHIjZEnr4hkJWOzTsGN1qEpQlRzZEbFSdvVZszqs1WrDKkBIcZoQNLngAfSKpFbJe3JgZKPJwFdG0LXQ5sq1i61QfFys9ydjwfdumh3Y48331hsdSWirTo5avTYEA0wc1obwrXApRm30W5I2uTvNu5L63xjl+mBUAqXpdIpCLGPN3eNrH5Zmv/Ee+Mm7k7wjjT6uhX5QwBGxjJX4wQVhx2jXh6bBb73KufbrTivUBrWP7MSdKla2Q6Lwd+jL7MMoIfk33xidu79jdh9qpneN/j0UwfAqcSG5eM9GfqCtMLe5+X83tXNvBy9NRQAAAABJRU5ErkJggg==" alt="MUJ" />
          </div>
          <button class="mobile-menu-button">
            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>
        </div>

      </div>
    </div>

    <!-- mobile menu -->
    <div class="mobile-menu hidden md:hidden">
      <a href="logout.php" class="block py-2 px-4 text-sm hover:bg-gray-200">Logout</a>
      <!-- <a href="fetchdata.php" class="block py-2 px-4 text-sm hover:bg-gray-200">Check Requests</a>
      <a href="exam101.php" class="block py-2 px-4 text-sm hover:bg-gray-200" target="_blank">EXAM 101</a>
      <a href="https://www.linkedin.com/in/cbsameer/" class="block py-2 px-4 text-sm hover:bg-gray-200">Connect</a>
      <a href="https://forms.gle/ctBRnoSJk26Zk5TTA" class="block py-2 px-4 text-sm hover:bg-gray-200">Contribute</a> -->
    </div>
    <script>
      // grab everything we need
      const btn = document.querySelector("button.mobile-menu-button");
      const menu = document.querySelector(".mobile-menu");
      // add event listeners
      btn.addEventListener("click", () => {
        menu.classList.toggle("hidden");
      });
    </script>
  </nav>




<br><br><br><br><br><br>


<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $mail_id1 = $_SESSION['mail'];
        $value = $_GET['var'];
        $que1=$_POST['que1'];
        $que2=$_POST['que2'];
        $que3=$_POST['que3'];
        $que4=$_POST['que4'];
    $comment = $_POST['comment'];
    $con = mysqli_connect("localhost", "root", "", "college");
    $query = "SELECT * FROM `departments` WHERE name='$value'";
    $sql = mysqli_query($con, $query);
    $total_rows = mysqli_num_rows($sql);
    if($total_rows>0)
    {
        while($total_rows!=0)
        {
            $row = mysqli_fetch_assoc($sql);
            $num1=intval($row['Q1']);
            $num2=intval($row['Q2']);
            $num3=intval($row['Q3']);
            $num4=intval($row['Q4']);
            $num1=$num1+$que1*5;
            $num2=$num2+$que2*5;
            $num3=$num3+$que3*5;
            $num4=$num4+$que4*5;
            $total_submission=intval($row['total']);
            $total_submission = 1 + $total_submission;

            $query1 = "UPDATE `departments` SET Q1='$num1',Q2='$num2',Q3='$num3',Q4='$num4',total='$total_submission' WHERE name='$value'";
            $result = mysqli_query($con, $query1);
    
            $query5 = "UPDATE `allocations` SET checker='YES' WHERE email='$mail_id1' and dept='$value'";
            $sql5 = mysqli_query($con, $query5);

            if(!empty($comment))
            {
                $query7 = "INSERT INTO `comments` (`id`,`comment`,`dept`) VALUES (NULL,'$comment','$value')";
                $sql7 = mysqli_query($con, $query7);
            }
            else
            {
                $sql7 = true;
            }
            if($sql5&&$result&&$sql7)
            {
                echo "<script>alert('Feedback saved successfully👍'); window.location.href='submit.php'</script>";
            }
            else
            {
                echo "<script>alert('Facing some technical issue ❌'); window.location.href='submit.php'</script>";
            }

            $total_rows--;
        }
    }
    
}
    ?>

<div class="mb-5">
<h3 class="text-2xl font-bold text-center">🙏Welcome <span class="text-blue-700"><?php echo $_SESSION['mail']?></span>🙏</h3>
</div>



<?php

$con = mysqli_connect("localhost", "root", "", "college");
$mail_id=$_SESSION['mail'];
$query = "SELECT * FROM `allocations` WHERE email='$mail_id'";
$query = mysqli_query($con, $query);
$row_num = mysqli_num_rows($query);
if($row_num>0)
{
    $val = 0;
    while($row_num!=0)
    {
        $row = mysqli_fetch_assoc($query);
        if ($row['checker'] == 'NO') {
            $val = 1;
            ?>
        <section>
<form action="submit.php?var=<?php echo $row['dept']; ?>" method="POST">
    <div class="flex items-center justify-center mb-5">
    <div class="px-8 py-6 mx-4 text-left bg-white shadow-lg md:w-2/3 lg:w-2/3 sm:w-2/3 shadow-2xl shadow-gray-400">
        <h3 class="text-2xl font-bold text-center">Submit feedback for <span class="text-blue-700"><?php echo $row['dept'] ?></span></h3>
            <div class="mt-4 font-semibold">
                <div>
                    <label class="block" for="que1">Q.1) Do you agree that collaboration specially refers to the solicitation of employee consultation and participation in various issues with respect to oragnization ?<label>
                        <input type="number" placeholder="Rating"
                          class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600" name="que1" max="5" min="1" required>
                </div>
                <div class="mt-4">
                    <label class="block" for="que2">
                       Q.2) Is there a collaborative environment at MUJ and have you been part of any such collaboration ?
                        <label>
                            <input type="number" placeholder="Rating" name="que2"
                                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600" max="5" min="1" required>
                                
                </div>
                <div class="mt-4">
                    <label class="block">
                        Q.3) Belive that collaboration support is required from support function like HR, Finance, IT and General Services. Also currently there is good support of collaboration from these functions ?
                        <label>
                            <input type="number" name="que3" placeholder="Rating"
                                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600" max="5" min="1" required>
                </div>
                <div class="mt-4">
                    <label class="block">
                        Q.4) Do you get a collaborative support from leaders like Dean, Registrar and other Directors ?
                        <label>
                            <input type="number" placeholder="Rating" max="5" min="1"
                                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600" max="5" min="1" name="que4" required>
                </div>
               <div class="mt-4">
                    <label class="block" for="Detail">Q.5) Comment -> Optional<label>
                            <textarea type="text" placeholder="Comment" 
                                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600" 
                                name="comment" minlength="40"></textarea>
                </div>
                <div class="flex">
                    <button class="w-full px-6 py-2 mt-4 text-white bg-blue-600 rounded-lg hover:bg-blue-900">
                        👉 submit</button>
                </div>
            </div>
        </form>
        </section>
        <br>
        <?php
        }
        $row_num--;
    }
    if($val==0)
    {
        ?>
        <h3 class="text-2xl font-bold text-center">You Have Submitted all feedback form❗</h3>
        <?php
    }
}
else
{
?>
<h3 class="text-2xl font-bold text-center">You have not assigned any Department Yet contact admin❗</h3>
<?php
}
?>



</body>
</html>
