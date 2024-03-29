---
{"languages_supported":{"0":"NA"},"title":"LUCKPAL","category":"NA","old_version":true,"problem_code":"LUCKPAL","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3>Chef Palin, as his name suggests, is always very interested in palindromic strings. Recently, he made a pretty interesting discovery on palindromes and that made him feel really Lucky. He came across something known as Lucky Palindromes. He defines a string as being a lucky palindrome if it is a palindrome containing the string "lucky" as a substring. As always, now he wants to turn every string he comes across into a lucky palindrome. Being a chef, he is a man of patience and creativity, so he knows the operation of replacing any character of the string with any other character very well and he can perform this action infinitely many times. He wants you to write a program that can help him convert a given string to a lucky palindrome using the minimum number of operations and if several such lucky palindromes are possible, then output the lexicographically smallest one.
<br /><br />
<b>Input</b>
<br /><br />
The first line contains a single integer T &lt;= 100 the number of testcases. The following T lines each contain a string of length &lt;= 1000 and only containing characters 'a'-'z'.
<br /><br />
<b>Output</b>
<br /><br />
For each line of testcase, your program should output on a single line, the required lucky palindrome along with the minimum number of operations, both separated by a single space. If there is no lucky palindrome possible, then just output "unlucky" in a single line.
<br /><br />
<b>Example:</b>
<br /><br />
<b>Input</b>
<br /><br />
3<br />
laubcdkey<br />
luckycodechef<br />
aaaaaaaa
<br /><br />
<b>Output</b>
<br /><br />
luckykcul 8<br />
luckycocykcul 6<br />
unlucky<br />    