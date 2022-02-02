---
{"category_name":"easy","problem_code":"MAANDI","problem_name":"Maxim and Dividers","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"sereja","problem_tester":"shangjingbo","date_added":"25-05-2013","tags":{"0":"divisors","1":"number","2":"oct13","3":"sereja","4":"simple"},"editorial_url":"http://discuss.codechef.com/problems/MAANDI","time":{"view_start_date":1381743000,"submit_start_date":1381743000,"visible_start_date":1381743000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in Mandarin Chinese <a target="_blank" href="http://www.codechef.com/download/translated/OCT13/mandarin/MAANDI.pdf">here</a></h3>
<h3>Problem Statement</h3>
<p><ul>Maxim likes dividers of the numbers. Also Maxim is fond of <b>lucky numbers</b> of small elephant from Lviv city.
<p> </p>
If you remember, <b>lucky numbers</b> are positive integers whose decimal representation contains only the lucky digits <b>4</b> and <b>7</b>. For example, numbers <b>47</b>, <b>744</b>, <b>4</b> are lucky, <b>5</b>, <b>17</b>, <b>467</b> — aren't.
<p> </p>
Now Maxim is interested in the next information: what is the number of the integer positive dividers of number <b>n</b>, which are <b>overlucky</b>.
<p> </p>
We call number <b>overlucky</b> if it is possible to remove some, but not all, digits and during bonding the remaining digits we will receive a lucky number. For example, number <b>72344</b> — overlucky, because it is possible to remove digits <b>2</b> and <b>3</b>, and get number <b>744</b>, which is lucky. Number <b>223</b> isn't overlucky.</ul></p>
<p> </p>


<h3>Input</h3>

<ul>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows. Single line of each test case contains an integer <b>n</b>.</ul>
<p> </p>

<h3>Output</h3>
<ul>For each test case on different lines print the answer to the problem.</ul>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>n</b> ≤ <b>10^9</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
10
1
2
3
4
5
6
7
8
9
10

<b>Output:</b>
0
0
0
1
0
0
1
1
0
0

</pre>
<p> </p>