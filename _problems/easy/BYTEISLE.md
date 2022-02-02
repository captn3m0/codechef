---
{"languages_supported":{"0":"NA"},"title":"BYTEISLE","category":"NA","old_version":true,"problem_code":"BYTEISLE","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>A long school holiday has come, and you decided to visit the famous Byte Island. You know there are only two types of Bytelandians: Byteknights and Byteknaves. A Byteknight always tells the truth, whereas a Byteknave always lies.</p>

<p>It is known that there are <i>N</i> Bytelandians in the island, and now you meet all of them. You are curious about their types. Because you are a smart logician, you don't want to ask them questions that immediately reveal their types (that's too boring). Instead, to each Bytelandian you ask, "How many Byteknights are there here?"</p>

<p>To your surprise, they also don't answer your questions directly. Instead, the <i>i</i>-th Bytelandian answers of the form "The number of Byteknights here is between <i>a<sub>i</sub></i> and <i>b<sub>i</sub></i>, inclusive". You record all answers in your pocket note.</p>

<p>Now that you have collected all information you need, determine the type of each Bytelandian.</p>

<h3>Input</h3>
<p>The first line contains a single integer <i>T</i>, the number of test cases. <i>T</i> test cases follow. The first line of each test case contains a single integer <i>N</i>. <i>N</i> lines follow. The <i>i</i>-th line contains two integers <i>a<sub>i</sub></i> and <i>b<sub>i</sub></i>.</p>

<h3>Output</h3>
<p>For each test case, output two lines. In the first line, output a single integer indicating the number of different solutions, modulo 1000000007. In the next line, output the lexicographically smallest solution. A solution is a string consisting of <i>N</i> characters, where the <i>i</i>-th character of the string is '1' if the <i>i</i>-th Bytelandian is a Byteknight, or '0' in case of a Byteknave. It is guaranteed that there is at least one valid solution.</p>

<h3>Example</h3>
<pre>
<b>Input:</b>
3
1
0 1
4
1 4
2 4
3 4
4 4
3
1 2
0 0
1 3

<b>Output:</b>
1
1
5
0000
1
101
</pre>

<h3>Constraints</h3>
<ul>
<li>1 &lt;= <i>T</i> &lt;= 5</li>
<li>1 &lt;= <i>N</i> &lt;= 50000</li>
<li>0 &lt;= <i>a<sub>i</sub></i> &lt;= <i>b<sub>i</sub></i> &lt;= <i>N</i></li>
</ul>    