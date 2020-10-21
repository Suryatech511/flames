<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>flames</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript">
    first_array = new Array();
    second_array = new Array();
    final_string = new Array();

    function compare(form)
    {
     name1 = (form.fname.value);
     name2 = (form.sname.value);

     first_array = name1.toLowerCase().replace(/ /gi,"").split('');
     second_array = name2.toLowerCase().replace(/ /gi,"").split('');

     for(i in first_array)
     {
      for(j in second_array)
      {
       if((first_array[i] == second_array[j]) && (first_array[i]!='') && (second_array[j]!=''))
       {
        first_array[i] = '';
        second_array[j] = '';
       }
      }
     }

    for(i=0; i<=first_array.length; i++)
    {
     if(first_array[i]=='')
     {
      first_array.splice(i,1);
     }
    }

    for(j=0; j<=second_array.length; j++)
    {
     if(second_array[j]=='')
     {
      second_array.splice(j,1);
     }
    }
    final_string = first_array.toString().replace(/,/gi,"") + second_array.toString().replace(/,/gi,"");
    l = final_string.length;
    result(l);
    }

    function result(n)
    {
     string = "flames";
     number = n;
     process = new Array();

     while(string.length>=2)
     {
      var j=0;
      process = [];
      position = number%string.length;

      if(position!=0)
      {
       for(i=position+1; i<=string.length; i++)
       {
        process[j] = string.charAt(i-1);
        j++;
       }

       for(i=0; i<=position-2; i++)
       {
        process[j] = string.charAt(i);
        j++;
       }
       string = process.toString().replace(/,/gi,"");
      }
      else
      {
       string = string.slice(0,-1);
      }
     }
     display(string);
    }

    function display(s)
    {
     if(s=='f')
     {
      window.location.href = "Animation_1/connection.php?s="+s+"";
     }
     if(s=='l')
     {
      window.location.href = "Animation_1/connection.php?s="+s+"";
     }
     if(s=='a')
     {
      window.location.href = "Animation_1/connection.php?s="+s+"";
     }
     if(s=='m')
     {
      window.location.href = "Animation_1/connection.php?s="+s+"";
     }
     if(s=='e')
     {

          window.location.href = "Animation_1/connection.php?s="+s+"";
     }
     if(s=='s')
     {
      window.location.href = "Animation_1/connection.php?s="+s+"";
     }
    }
    </script>
  </head>
  <body id="particles-js">
    <div class="header">
      <h1>love connection</h1>
    </div>

   <div class="container">
   <form>
          <div class="form-group">
            <label for="sel1" id="label">ENTER YOUR NAME</label>
              <input class="form-control" type="text" name="fname" id="sel1">
            <br>
            <label for="sel2" id="label">ENTER YOUR PARTNER NAME</label>
            <input class="form-control" type="text" name="sname" id="sel2">
          </div>
    <input type="button" value="Submit" id="button"  class="btn btn-success" onclick="compare(this.form)">
  </form>

  </div>
  <script type="text/javascript" src="bg/particles.js"></script>
  <script type="text/javascript" src="bg/app.js"></script>

   <footer class="footer">&copy Powered by Umesh Pogu &amp Suresh CH</footer>
  </body>
</html>
