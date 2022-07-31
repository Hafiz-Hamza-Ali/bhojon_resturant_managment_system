<!DOCTYPE html>
<html lang="en">
    <form method="POST" action="billplzpost.php">
        <input type="text" name='name' required placeholder="Payer Name Here">
        <input type="text" name='email' required placeholder="PayerEmailHere@gmail.com">
        <input type="hidden" name="mobile" value="60121234567">
        <input type="hidden" name="amount" value="<?= $total_amount ?>">
        <input type="hidden" name="reference_1_label" value="">
        <input type="hidden" name="reference_1" value="7">
        <input type="hidden" name="reference_2_label" value="">
        <input type="hidden" name="reference_2" value="7">
        <input type="hidden" name="description" value ="apa2">
        <input type="hidden" name="collection_id" value ="1figltyc">
        <input type="submit">
    </form>
</html>
