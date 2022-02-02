---
{"category_name":"easy","problem_code":"GERALD04","problem_name":"Chef and Girlfriend","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"gerald","problem_tester":"rustinpiece","date_added":"9-12-2013","tags":{"0":"cook41","1":"easy","2":"gerald","3":"programming"},"editorial_url":"http://discuss.codechef.com/problems/GERALD04","time":{"view_start_date":1387737000,"submit_start_date":1387737000,"visible_start_date":1387737000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in Mandarin Chinese <a target="_blank" href="http://www.codechef.com/download/translated/COOK41/mandarin/GERALD04.pdf">here</a></h3>
<h3> Read problems statements in Russian <a target="_blank" href="http://www.codechef.com/download/translated/COOK41/russian/GERALD04.docx">here</a></h3>
<h3>Problem Statement</h3>
<p>One day Chef is waiting his girlfriend on the bus station. The girlfriend said that she will be at <b>time<sub>1</sub></b>. Chef went to the bus station at <b>time<sub>2</sub></b>. When Chef has reached the bus station he realized that he forgot a gift for his better half in his home.<br />
Chef knows that someone can reach his home in <b>dist</b> minutes (his girlfriend also needs <b>dist</b> minutes to get Chef's home after she arrived at the bus station). So, Chef came up with two plans for present the gift:</p>
<p>i. The first one is to wait for his girlfriend at the bus station. And then go to the home together with her. When Chef and his girlfriend will reach the home he will present his gift. </p>
<p>ii. The second one is to call the girlfriend and ask her to go to his home when she will reach the bus station. And after calling he will go to the home, take the gift, and go towards the girlfriend. When they meet each other he will present his gift (they can meet at any position of the road or at the bus station). It's known that girlfriend and Chef uses the same road between bus station and Chef's home.</p>
<p>Please, help Chef to estimate the time in minutes for each of his plans. </p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows. <br /> Each test case contains of three lines. The first line contains <b>time<sub>1</sub></b>, the second line contains <b>time<sub>2</sub></b>, and the third line contains <b>dist</b>. </p>
<h3>Output</h3>
<p>For each test case output a single line containing two real numbers - the time for the first plan and the time for the second one. Print real numbers with exactly one decimal digit after the dot.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10000</b>;</li>
<li><b>1</b> ≤ <b>dist</b> ≤ <b>180</b>.</li>
<li>Two times are given in form <b>HH:MM</b> (usual time from 00:00 to 23:59), and these two times are from the same day. It's guaranteed that Chef will be at bus station strictly earlier that his girlfriend.</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
3
10:00
09:00
10
10:00
09:00
30
10:00
09:00
60

<b>Output:</b>
70.0 60.0
90.0 60.0
120.0 90.0
</pre>