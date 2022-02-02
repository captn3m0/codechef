---
{"category_name":"medium","problem_code":"SEATSR","problem_name":"Sereja and two strings","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"sereja","problem_tester":"shangjingbo","date_added":"5-06-2013","tags":{"0":"edit","1":"medium","2":"oct14","3":"sereja"},"editorial_url":"http://discuss.codechef.com/problems/SEATSR","time":{"view_start_date":1413192600,"submit_start_date":1413192600,"visible_start_date":1413192600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/OCT14/mandarin/SEATSR.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/OCT14/russian/SEATSR.pdf">Russian</a>.</h3>
<p>Sereja has two strings <b>s</b> and <b>w</b>. Sereja can do <b>3</b> types of operations: </p>
<ul>
<li>Remove any character from the first string, this operation takes <b>a</b> minutes of time</li>
<li>Add any character in any position of the first string, this operation takes <b>a</b> minutes of time</li>
<li>Replace some character form first string by some other character, this operation takes <b>b</b> minutes of time</li>
</ul>
<p>Sereja has <b>k</b> minutes to do some operations. Find the minimum time that Sereja needs to transform the first string to the second.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line contains string <b>s</b>. The second line contains string <b>w</b>. Both strings contain only lowercase Latin letters. The third line contains integers <b>a</b>,<b>b</b> and <b>k</b>, separated by spaces.</p>
<h3>Output</h3>
<p>For each test case on different lines print the answer to the problem - minimum time required to transform the first string to the second by the operations of the first, second and third types. If you can not transform the first string to the second for the specified time, print <b>-1</b>.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>|s|, |w|</b> ≤ <b>100000</b></li>
<li><b>0</b> ≤ <b>a, b, k</b> ≤ <b>100</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
4
aaa
bbbb
0 0 100
abab
acac
1 1 100
baaaaa
aaaaab
1 100 100
aaaaaa
bbbbbb
100 100 0

<b>Output:</b>
0
2
2
-1

</pre>