---
{"languages_supported":{"0":"NA"},"title":"KNIGHTMV","category":"NA","old_version":true,"problem_code":"KNIGHTMV","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>
Chef develops his own computer program for playing chess. He is at the very beginning. At first he needs to write the module that will receive moves written by the players and analyze it. The module will receive a string and it should report at first whether this string represents the correct pair of cells on the chess board (we call such strings correct) and then report whether it represents the correct move depending on the situation on the chess board. Chef always has troubles with analyzing <a href="//en.wikipedia.org/wiki/Knight_%28chess%29">knight moves</a>. So at first he needs a test program that can say whether a given string is correct and then whether it represents a correct knight move (irregardless of the situation on the chess board). The cell on the chessboard is represented as a string of two characters: first character is a lowercase Latin letter from <b>a</b> to <b>h</b> and the second character is a digit from <b>1</b> to <b>8</b>. The string represents the correct pair of cells on the chess board if it composed of 5 characters where first two characters represent the cell where chess figure was, 3rd character is the dash <b>"-"</b> and the last two characters represent the destination cell.

<h3>Input</h3>
</p><p> The first line contains a single integer <b>T &lt;= 50000</b>, the number of test cases. <b>T</b> test cases follow. The only line of each test case contains a non-empty string composed the characters with ASCII-codes from 32 to 126. The length of the string is not greater than <b>10</b>.

<h3>Output</h3>
</p><p> For each test case, output a single line containing the word <b>"Error"</b> if the corresponding string does not represent the correct pair of cells on the chess board. Otherwise output <b>"Yes"</b> if this pair of cells represents the correct knight move and <b>"No"</b> otherwise.

<h3>Example</h3>

<pre>
<b>Input:</b>
4
a1-b3
d2-h8
a3 c4
ErrorError

<b>Output:</b>
Yes
No
Error
Error
</pre></p>    