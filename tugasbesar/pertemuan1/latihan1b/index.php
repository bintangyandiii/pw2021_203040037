<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style> 
    .tabel{
        background-color: blueviolet;
    }

    .baris{
        background-color:blanchedalmond;
    }
</style>
</head>
<body>    
    <table border ="1" cellpadding="10" cellspacing="0">
        <tr class="tabel">
        <th></th>
        <?php for ($i=1; $i <=5 ; $i++): ?>
            <th>kolom <? = $i; ?></th>
        <?php endfor ; ?>

        </tr>

        <?php for ($i=1; $i <=5 ; $i++) : ?>
        <?php if ($i %2 == 0 )?>

            <tr class="baris">

        <?php  ;?>
        <?php for ($j=1; $j <=1 ; $j++) :?>
                <th><?= "baris $i" ;?></th>
                <?php endfor ;?>
                <?php for ($j=1; $j <=5 ; $j++) :?>
                    <td><?= "baris ke $i,kolom ke$j" ?></td>
                <?php endfor?>
            </tr>

        <?php endfor?>
    </table>

</body>
</html>