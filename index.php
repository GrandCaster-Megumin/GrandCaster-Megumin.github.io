<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World</title>
    <style>
        #hello {
            font-size: 2em;
            transition: color 0.5s;
        }
    </style>
</head>
<body>
    <h1 id="hello">Hello, World!</h1>
    <button id="changeColorButton">改變顏色</button>

    <script>
        const colors = ['black', 'red', 'blue', 'green'];
        let currentColorIndex = 0;

        document.getElementById('changeColorButton').addEventListener('click', () => {
            document.getElementById('hello').style.color = colors[currentColorIndex];
            currentColorIndex = (currentColorIndex + 1) % colors.length; // 循環顏色
        });
    </script>
</body>
</html>
<!--
    git add --all
    git commit -m "描述"
    git push -u origin main
-->