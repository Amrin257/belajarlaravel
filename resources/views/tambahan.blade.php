<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>WPU Blog | Tambahan</title>

</head>
<body>
    
    <h1>{{ $name }}</h1>
    <h2>{{ $npm }}</h2>

    <script src="js/script.js"></script>
</body>
</html>

<p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia reiciendis ipsam non nobis eligendi qui quas illo nesciunt inventore, neque tempora, consequuntur, earum ab labore. Tempore laudantium deleniti neque quaerat rerum quae? Quam nemo esse expedita, quia id illo incidunt animi recusandae error officia adipisci impedit eum quos suscipit ipsum, omnis tempora.</p> <p>  Voluptatem, consequuntur facere. Beatae labore similique natus aliquam dolorum odio voluptate inventore, voluptates fuga minus? Magni ratione pariatur ut facere quam. Molestiae dolor voluptates ratione, minus obcaecati praesentium nostrum libero autem. Sunt quos ullam optio vel magnam, autem aliquid assumenda soluta minus doloremque quaerat eos alias ipsam. Eum.</p>

Category::create([
    'name' => 'Persenal',
    'slug' => 'personal'
])

Post::create([
    'title' => 'Judul Ke Tiga',
    'category_id' => '3',
    'slug' => 'judul-ke-tiga',
    'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia reiciendis ipsam non nobis',
    'body' => '<p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia reiciendis ipsam non nobis eligendi qui quas illo nesciunt inventore, neque tempora, consequuntur, earum ab labore. Tempore laudantium deleniti neque quaerat rerum quae? Quam nemo esse expedita, quia id illo incidunt animi recusandae error officia adipisci impedit eum quos suscipit ipsum, omnis tempora.</p> <p>  Voluptatem, consequuntur facere. Beatae labore similique natus aliquam dolorum odio voluptate inventore, voluptates fuga minus? Magni ratione pariatur ut facere quam. Molestiae dolor voluptates ratione, minus obcaecati praesentium nostrum libero autem. Sunt quos ullam optio vel magnam, autem aliquid assumenda soluta minus doloremque quaerat eos alias ipsam. Eum.</p>' 
])