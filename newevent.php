<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php include 'header.php';?>
        <div id="wrap">
       <table id="addevent">
           <tr>
               <td>Title </td><td><input type="text" name="title" value="" /></td>
           </tr>
           <tr>
               <td>Location </td><td><input type="text" name="location" value="" /></td>
           </tr>
           <tr>
               <td>Category </td><td><select>
                      <option value="cat1">category 1</option>
                      <option value="cat2">category 2</option>
                      <option value="cat3">category 3</option>
                      <option value="cat4">category 4</option>
                    </select>        </td>
           </tr>
           <tr>
               <td>Date </td><td><input type="text" name="date" value="" /></td>
           </tr>
           <tr>
               <td>Description </td><td><textarea name="description" rows="5" cols="40"></textarea></td>
           </tr>
           <tr>
               <td>Pictures </td><td><input type="text" name="picture" value="" /></td>
           </tr>
           <tr>
               <td> </td><td><button type="button" class="btn btn-primary">Submit</button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="button" class="btn btn-primary">Cancel</button></td>
           </tr>
       </table>
            </div>
       <?php include 'footer.php';?>
    </body>
   
</html>