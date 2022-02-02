---
{"category_name":"easy","problem_code":"STRBIT","problem_name":"How to Repaint a Fence","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"witua","problem_tester":"iscsi","date_added":"19-03-2015","tags":{"0":"bit","1":"cook56","2":"easy","3":"segment","4":"witua"},"editorial_url":"http://discuss.codechef.com/problems/STRBIT","time":{"view_start_date":1427049000,"submit_start_date":1427049000,"visible_start_date":1427049000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK56/mandarin/STRBIT.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK56/russian/STRBIT.pdf">Russian</a> as well.</h3>
<p>
John's barn has a fence consisting of <b>N</b> consecutive parts numbered from left to right starting from <b>1</b> to <b>N</b>. Each part is initially painted in one of two colors: red or green, whose information is provided you by a string <b>C</b>. The color of <b>i</b>-th part <b>C<sub>i</sub></b> will be equal to 'R' if the color of the part is red and 'G' if it is green.
</p>
<p>
John decided to paint the whole fence in green color. To make the mundane process of painting more entertaining he decided to do it using the following process.<br />
Every minute (until the whole fence is painted green) he will do the following steps:</p>
<ul>
<li>
Choose any part of the fence that is painted red. Let's denote the index of this part as <b>X</b>.
</li>
<li>
For each part with indices <b>X</b>, <b>X+1</b>, ..., <b>min(N, X + K - 1)</b>, flip the color of the corresponding part from red to green and from green to red by repainting.
</li>
</ul>

<p>
John is wondering how fast he can repaint the fence. Please help him in finding the minimum number of minutes required in repainting.
</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of each test case contains the two integers <b>N</b> and <b>K</b>.</p>
<p>The next line contains the string <b>C</b>.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing the answer to the corresponding test case.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>N</b>, <b>K</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>C</b> will consist only of uppercase English characters 'R' and 'G'.</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
1
7 3
RGGRGRG

<b>Output:</b>
4
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> One optimal solution (with 4 steps) looks like this:</p>
<ul>
<li>
Choose the 1-st character (1-based index) and get "GRRRGRG".
</li>
<li>
Choose the 2-st character (1-based index) and get "GGGGGRG".
</li>
<li>
Choose the 6-th character (1-based index) and get "GGGGGGR".
</li>
<li>
Choose the 7-th charatcer (1-based index) and get "GGGGGGG".
</li>
<li>
Now repainting is done :) It took total 4 steps. Hence answer is 4.
</li>
</ul>
