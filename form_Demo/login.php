<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>Form Demo</title>
</head>
<body class="font-mono bg-gray-400">
		<!-- Container -->
		<div class="container mx-auto">
			<div class="flex justify-center px-6 my-12">
				<!-- Row -->
				<div class="w-full xl:w-3/4 lg:w-11/12 flex">
					<!-- Col -->
					<div
						class="w-full h-auto bg-gray-400 hidden lg:block lg:w-5/12 bg-cover rounded-l-lg"
						style="background-image: url('https://source.unsplash.com/Mv9hjnEUHR4/600x800')"
					></div>
					<!-- Col -->
					<div class="w-full lg:w-7/12 bg-white p-5 rounded-lg lg:rounded-l-none">
						<h3 class="pt-4 text-2xl text-center">Login</h3>

						<form class="px-8 pt-6 pb-8 mb-4 bg-white rounded" action="./authentication.php" method="POST">
                        
							<div class="mb-4">
								<label class="block mb-2 text-sm font-bold text-gray-700" for="email">
									Email
								</label>
								<input
									class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
									id="email"
									type="email"
                                    name="email"
									placeholder="Email"
								/>
							</div>

                            <div class="mb-4">
								<label class="block mb-2 text-sm font-bold text-gray-700" for="email">
									Password
								</label>
								<input
									class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
									id="password"
									type="password"
                                    name="password"
									placeholder="Password"
								/>
							</div>                        

							<div class="mb-6 text-center">
								<button
									class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700 focus:outline-none focus:shadow-outline"
									type="submit" name="login">
									Login
								</button>
							</div>
							<hr class="mb-6 border-t" />
							
							<div class="text-center">
								<a class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800" href="./index.php">
									You Don't have an account? Register!
								</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>