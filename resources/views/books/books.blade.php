
<html>
<head>
  <title>Book Cave</title>
  <link href="https://fonts.googleapis.com/css?family=Raleway:600,900" rel="stylesheet">
</head>
<body>



  <p class="heading">Books Cave Gallery</p>
  <p class="headingv">Have a good time exploring book cave, dont forget to rate them as well!</p>
  <p class="headingv">Be generous! share a book collection!<a href="/books/create"
         > <button class="btn btn-success">Create Book!</button></a></p>

  <div class="gallery-image">
  @foreach($book as $books)
    <div class="img-box">
    <img src="https://picsum.photos/350/250?image=494" alt="" />
      <div class="transparent-box">
        <div class="caption">
          <p>Title: {{$books->title}}</p>
          <p class="opacity-low">Book description: {{$books->description}}</p>
          <p>Publisher: {{$books->publisher}}</p>
          <a href="/books/{{ $books->id }}"
         > <button class="btn btn-success">Rate Me!</button></a>
         
        </div>
      </div> 
    </div>
  
  @endforeach
</body>
</html>
<style>

 {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

body {
  font-family: Raleway;
  background-color: #202125;
}

.heading {
    text-align: center;
    font-size: 2.0em;
    padding: 40px;
    color: white;
}




.headingv {
    text-align: center;
    font-size: 1.0em;
    padding: 20px;
    color: white;
}

.gallery-image {
  padding: 20px;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}

.gallery-image img {
  height: 250px;
  width: 350px;
  transform: scale(1.0);
  transition: transform 0.4s ease;
}

.img-box {
  box-sizing: content-box;
  margin: 10px;
  height: 250px;
  width: 350px;
  overflow: hidden;
  display: inline-block;
  color: white;
  position: relative;
  background-color: white;
}

.caption {
  position: absolute;
  bottom: 5px;
  left: 20px;
  opacity: 0.0;
  transition: transform 0.3s ease, opacity 0.3s ease;
}

.transparent-box {
  height: 250px;
  width: 350px;
  background-color:rgba(0, 0, 0, 0);
  position: absolute;
  top: 0;
  left: 0;
  transition: background-color 0.3s ease;
}

.img-box:hover img { 
  transform: scale(1.1);
}

.img-box:hover .transparent-box {
  background-color:rgba(0, 0, 0, 0.5);
}

.img-box:hover .caption {
  transform: translateY(-20px);
  opacity: 1.0;
}

.img-box:hover {
  cursor: pointer;
}

.caption > p:nth-child(2) {
  font-size: 0.8em;
}

.opacity-low {
  opacity: 0.5;
}



.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: #1abc9c;
  color: black;
  text-align: center;
}


.headerv {
  padding: 20px;
  text-align: center;
  background: #1abc9c;
  color: white;
  font-size: 90px;
}



</style>


<div class="footer">
    <p>@Codegoddesstosin 2019</p>
  </div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript"></script>