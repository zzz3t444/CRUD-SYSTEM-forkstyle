<html>

<head>
  <title>Add Data</title>
  <link rel="stylesheet" href="./style/add.css">
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</head>

<body class="montserrat">
  <div class="p-10 pt-20">
    <div class="p-10 pt-0 w-[1200px] rounded-2xl mx-auto border border-gray-600">
      <div>
        <!-- for heading -->
        <h2 class="text-5xl font-semibold text-center mt-20">Add Data</h2>
        <p class="text-center mt-10">
          <a href="index.php">Home</a>
        </p>
      </div>

      <div class="flex justify-center mt-10">
        <form action="addAction.php" method="post" name="add">
          <div class="grid gap-7 items-center">
            <div class="flex gap-3 items-center">
              <input class="p-4 w-96 rounded-lg text-sm" type="text" placeholder="Your name" name="name" />
            </div>
            <div class="flex gap-3 items-center">
              <input class="p-4 w-96 rounded-lg text-sm" type="text" name="age" placeholder="Age" />
            </div>
            <div class="flex gap-3 items-center">
              <input class="p-4 w-96 rounded-lg text-sm" type="text" name="email" placeholder="Your Email" />
            </div>
          </div>
          <div class="add-button flex border p-3 hover:scale-95 duration-300 rounded-lg justify-center mt-16">
            <input type="submit" name="submit" value="Add" />
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>