---
{"category_name":"medium","problem_code":"PPLUCKY","problem_name":"Polo the Penguin and the Lucky String","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"witua","problem_tester":null,"date_added":"21-09-2013","tags":{"0":"bit","1":"cook39","2":"fenwick","3":"medium","4":"segment","5":"witua"},"editorial_url":"http://discuss.codechef.com/problems/PPLUCKY","time":{"view_start_date":1382293800,"submit_start_date":1382293800,"visible_start_date":1382293800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in Russian <a target="_blank" href="http://www.codechef.com/download/translated/COOK39/russian/PPLUCKY.pdf">here</a></h3>
<p>Polo, the Penguin, likes lucky strings - the strings that consist only of lucky digits <b>4</b> and <b>7</b>.</p>
<p>He has a lucky string <b>S</b>. Digits in this string are numbered from left to right starting with <b>1</b>. He performs the following operations on the string while it is possible to do so:</p>
<ol>
<li> Find a set of all positions,<b> P, </b>such that for every position <b>i</b> in <b>P,</b> <b>S[i] = 4</b> and <b>S[i+1] = 7</b>. (For example, if <b>S = 744744747</b>, then <b>P = {3, 6, 8}</b>.) Add all elements in <b>P</b> to the result. If there is no such position, then STOP. </li>
<li> Erase all digits in string <b>S</b> with positions <b>i </b>and<b> i + 1</b> for all <b>i</b> in the set <b>P</b>. After erasing all such digits from <b>S</b> repeat <b>Step 1</b>. (For example, the new <b>S</b> <b>= 744</b>)</li>
</ol>
<p> </p>
<p>Find the result that he will get at the end.</p>
<h3>Input</h3>
<p> The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows. The first line of each test case contains a single integer <b>N</b> denoting the size of the string <b>S</b>. The second line contains the lucky string <b>S</b>.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing the answer to the corresponding test case.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100,000</b></li>
<li><b>1</b> ≤ <b>|S|</b> ≤ <b>100,000</b></li>
<li>The total length of all strings will not exceed <b>100,000</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
  2
  4
  4747
  10
  4447477747
  
<b>Output:</b>
  4
  20
</pre><h3> </h3>
<h3>Explanation</h3>
<p><b>Example case 1.</b> In this case, there is just a single iteration. Since <b>P = {1, 3}</b>, the answer is <b>1 + 3 = 4</b>.</p>
<p><b>Example case 2.</b> In this case, there are three iterations. On the first iteration <b>P = {3, 5, 9}</b>. On the second iteration <b>S = 4477, P = {2}</b>. On the third iteration <b>S = 47, P = {1}</b>. So the answer is <b>3 + 5 + 9 + 2 + 1 = 20</b>.</p>
<p> </p>
