---
{"category_name":"medium","problem_code":"TASTRMAT","problem_name":"String Matching","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"tuananh93","problem_tester":"stzgd","date_added":"6-12-2014","tags":{"0":"fft","1":"hard","2":"ltime19","3":"tuananh93"},"editorial_url":"http://discuss.codechef.com/problems/TASTRMAT","time":{"view_start_date":1419755400,"submit_start_date":1419755400,"visible_start_date":1419755400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME19/mandarin/TASTRMAT.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME19/russian/TASTRMAT.pdf">Russian</a>.</h3>
<p>In this problem we will have a few definitions as described below:</p>
<ul>
<li><b>Binary string</b>: A string containing only characters '0' and '1'.</li>
<li><b>Hamming distance</b> of the two binary string of the same length is the number of the positions where the two strings have<br />
  different characters. eg. the hamming distance of "0<b>10</b>101<b>0</b>1" and<br />
  "0<b>01</b>101<b>1</b>1" is 3, the hamming distance of a binary string with itself is 0.</li>
<li><b>Sub-string</b> of a string is a segment of contiguous characters of that string.</li>
</ul>

<p>
You would be given two binary strings <b>A</b> and <b>B</b> with the length of <b>N</b> and <b>M</b> respectively.<br />
You need to calculate the Hamming distance between <b>B</b> and every sub-strings of length <b>M</b> of <b>A</b>.
</p>
<p>
For this problem, you will be given a fixed string <b>A</b>. There will be <b>K</b> queries each containing a string representing <b>B</b>.
</p>
<h3>Input</h3>
<ul>
<li>The first line contains the binary string <b>A</b>.</li>
<li>The next line contains an integer <b>K</b>.</li>
<li>Each of the next <b>K</b> lines contains a binary string <b>B</b>.</li>
</ul>
<h3>Output</h3>
<p>To avoid generating large output, for each query string <b>B</b> instead of printing <b>N - M + 1</b> values of Hamming distance between<br />
sub-strings of <b>A</b> and <b>B</b> in the order of the position of the sub-string in <b>A</b>, you only need to print<br />
the <b>hash value</b> of this sequence as described below.</p>
<p>Let s[0..<b>L</b> -1] be a sequence of <b>L</b> integers. The recursive function f(s) will return the hash value of s.</p>
<ul>
<li>if <b>L</b> = 1, f(s) = s[0] mod <b>1000000007</b></li>
<li>Otherwise, f(s) = (f(s[0..<b>L</b>-2]) * <b>100001</b> + s[<b>L</b>-1]) mod <b>1000000007</b></li>
</ul>

<p>So overall, your output should be <b>K</b> lines, each containing the hash value corresponding to the query string <b>B</b>.</p>
<h3>Constraints</h3>
<p>
<b>20 points:</b></p>
<ul>
<li><b>1</b> ≤ <b>M ≤ N</b> ≤ <b>1000</b></li>
<li><b>1</b> ≤ <b>K</b> ≤ <b>5</b></li>
</ul>

<p>
<b>40 points:</b></p>
<ul>
<li><b>1</b> ≤ <b>M ≤ N</b> ≤ <b>50000</b></li>
<li><b>1</b> ≤ <b>K</b> ≤ <b>5</b></li>
</ul>

<p>
<b>40 points:</b></p>
<ul>
<li><b>1</b> ≤ <b>M ≤ N</b> ≤ <b>100000</b></li>
<li><b>1</b> ≤ <b>K</b> ≤ <b>5</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
10101
3
101
00
0101

<b>Output:</b>
300003
993599731
400004
</pre><h3>Explanation:</h3>
<p><b>First test case: </b> <b>A</b> = "10101", <b>B</b> = "101".<br />
The Hamming distances sequence will be (0, 3, 0) and the hash value of this sequence is 300003.</p>
<p><b>Second test case: </b> <b>A</b> = "10101", <b>B</b> = "00". The Hamming distances sequence will be (1, 1, 1, 1)<br />
and the hash of this sequence is 993599731.</p>
<p><b>Third test case:</b> <b>A</b> = "10101", <b>B</b> = "0101". The Hamming distances sequence will be (4, 0)<br />
and the hash value of this sequence is ((4 mod 1000000007) * 100001 + 0) mod 1000000007 = 400004.</p>
