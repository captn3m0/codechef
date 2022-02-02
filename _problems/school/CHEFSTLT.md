---
{"category_name":"school","problem_code":"CHEFSTLT","problem_name":"Chef and Two Strings","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"furko","problem_tester":"xcwgf666","date_added":"14-06-2015","tags":{"0":"cakewalk","1":"furko","2":"ltime25","3":"string"},"editorial_url":"http://discuss.codechef.com/problems/CHEFSTLT","time":{"view_start_date":1435480200,"submit_start_date":1435480200,"visible_start_date":1435480200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME25/mandarin/CHEFSTLT.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME25/russian/CHEFSTLT.pdf">Russian</a>.</h3>
<p>Chef has found two very old sheets of paper, each of which originally contained a string of lowercase Latin letters. The strings on both the sheets have equal lengths. However, since the sheets are very old, some letters have become unreadable.</p>
<p>Chef would like to estimate the <i>difference</i> between these strings. Let's assume that the first string is named <b>S1</b>, and the second <b>S2</b>. The unreadable symbols are specified with the question mark symbol <tt>'?'</tt>. The <i>difference</i> between the strings equals to the number of positions <b>i</b>, such that <b>S1<sub>i</sub></b> is not equal to <b>S2<sub>i</sub></b>, where <b>S1<sub>i</sub></b> and <b>S2<sub>i</sub></b> denote the symbol at the <b>i</b> the position in <b>S1</b> and <b>S2</b>, respectively.</p>
<p>Chef would like to know the minimal and the maximal difference between the two strings, if he changes all unreadable symbols to lowercase Latin letters. Now that you're fully aware of Chef's programming <emph>expertise</emph>, you might have guessed that he needs you help solving this problem as well. Go on, help him!</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of a test case contains a string <b>S1</b>.</p>
<p>The second line of a test case contains a string <b>S2</b>. </p>
<p>Both strings consist of lowercase Latin letters and question marks in places where the symbols are unreadable.</p>
<h3>Output</h3>
<p>For each test case, output the minimal and the maximal difference between two given strings separated with a single space.</p>
<h3>Constraints</h3>
<p>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>|S1|, |S2|</b> ≤ <b>100</b></li>
<li>Subtask 1 (25 points): <b>|S1| = 1</b></li>
<li>Subtask 2 (10 points): neither <b>S1</b> nor <b>S2</b> contains unreadable symbols</li>
<li>Subtask 3 (65 points): <b>1</b> ≤ <b>|S1|, |S2|</b> ≤ <b>100</b></li>
</ul>
</p>
<h3>Example</h3>
<pre><b>Input:</b>
<tt>3
a?c
??b
???a
???a
?abac
aba?w</tt>

<b>Output:</b>
<tt>1 3
0 3
3 5</tt>
</pre><h3>Explanation</h3>
<p><b>Example case 1</b>. You can change the question marks in the strings so that you obtain <b>S1</b> = <tt>abc</tt> and <b>S2</b> = <tt>abb</tt>. Then <b>S1</b> and <b>S2</b> will differ in one position. On the other hand, you can change the letters so that <b>S1</b> = <tt>abc</tt> and <b>S2</b> = <tt>bab</tt>. Then, the strings will differ in all three positions.</p>
<p><b>Example case 2</b>. Change the question marks this way: <b>S1</b> = <tt>dcba</tt>, <b>S2</b> = <tt>dcba</tt>, then the strings will differ in <b>0</b> positions. You can also change the question marks so that <b>S1</b> = <tt>aaaa</tt>, <b>S2</b> = <tt>dcba</tt>, then the strings will differ in <b>3</b> positions.</p>
<p><b>Example case 3</b>. Change the question marks this way: <b>S1</b> = <tt>aabac</tt>, <b>S2</b> = <tt>abaaw</tt>, then the strings will differ in <b>3</b> positions. Then, change the question marks this way: <b>S1</b> = <tt>xabac</tt>, <b>S2</b> = <tt>abayw</tt>, then they will differ in <b>5</b> positions.</p>
