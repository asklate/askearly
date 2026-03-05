<div class="footer">
    <p><span class="caps">AskEarly dot NET</span> is the brain child of Kyle Eggleston Copyright &copy; 2023-<?php echo date("Y");?></p>
    <p>This site doesn't track cookies, so no worries there. If in the future I decide to do something with cookies, a banner will appear here.</p>
<?php
echo "<p>Page loaded in " . number_format(microtime(true) - $_SERVER['REQUEST_TIME_FLOAT'], 4) . " seconds.</p>";
?>
</div>
</body>
</html>