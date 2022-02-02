---
{"languages_supported":{"0":"NA"},"title":"STREDUC","category":"NA","old_version":true,"problem_code":"STREDUC","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>Give a string s of length l, and a set S of n sample string(s). We do reduce the string s using the set S by this way:</p>
<ul>
<li>Wherever S<sub>i</sub> appears as a consecutive substring of the string s, you can delete (or not) it.</li>
<li>After each deletion, you will get a new string s by joining the part to the left and to the right of the deleted substring.</li>
</ul>
<p> </p>
<h3>Request</h3>
<p>By that way, try to reduce the given string s to get a new string of minimum length. You can do delete for unlimited times.</p>
<h3>Input</h3>
<p> </p>
<ul>
<li>The first line contains the string s.</li>
<li>The second line contains the integer n.</li>
<li>Within the last n lines, the i-th line contains the string S<sub>i</sub>.</li>
</ul>
<p> </p>
<h3>Output</h3>
<p>Output on a single line an integer which is the minimum length found.</p>
<h3>Example</h3>
<p><b>Input:</b></p>
<pre>aaabccd
3
abc
ac
aaa
</pre>
<p><b>Output:</b></p>
<pre>2
</pre>
<h3>Limitations</h3>
<p> </p>
<ul>
<li>0&lt;l≤250</li>
<li>0&lt;n≤30</li>
<li>0&lt;|S<sub>i</sub>|≤20</li>
</ul>
<p> </p>
<p><b>NOTE: </b>Because the testcases were created in Windows environment so it may be  different from the Unix systems. The problems occur when using getline  or gets because they  tend to read '\r'.  Instead using scanf("%s") or cin suffices for the  given problem.</p>
<p></p>    