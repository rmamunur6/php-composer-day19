<?php
    require_once 'vendor/autoload.php';

    use App\classes\Example;
    use App\classes\Student;
    Student::addition();
    if(isset($_POST['btn']))
    {
        $result=Example::wordCharacterCount($_POST);
    }
?>

<form action="" method="post">
    <table>
        <tr>
            <th>Enter your String</th>
            <td><input type="text" name="given_string" size="50"></td>
        </tr>
        <tr>
            <th>Total Number of Word</th>
            <td><input type="text" name="total_number" value="<?php echo $result['word_length']?>"></td>
        </tr>
        <tr>
            <th>Toal Number of Character</th>
            <td><input type="text" name="total_character" value="<?php echo $result['string_length']?>"></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="Submit"></td>
        </tr>
    </table>

</form>
