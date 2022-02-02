---
{"category_name":"medium","problem_code":"SHUFFL","problem_name":"Shuffling","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"CAML","6":"CLOJ","7":"CLPS","8":"COB","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"kotlin","24":"LISP clisp","25":"LISP sbcl","26":"LUA","27":"NEM","28":"NICE","29":"NODEJS","30":"PAS fpc","31":"PAS gpc","32":"PERL","33":"PERL6","34":"PHP","35":"PIKE","36":"PRLG","37":"PYPY","38":"PYTH","39":"PYTH 3.5","40":"RUBY","41":"rust","42":"SCALA","43":"SCM chicken","44":"SCM guile","45":"SCM qobi","46":"ST","47":"swift","48":"TCL","49":"TEXT","50":"WSPC"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"mgch","problem_tester":"alex_2oo8","date_added":"20-11-2017","tags":{"0":"easy","1":"ltime54","2":"mgch"},"editorial_url":"https://discuss.codechef.com/problems/SHUFFL","time":{"view_start_date":1511629200,"submit_start_date":1511629200,"visible_start_date":1511629200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME54/mandarin/SHUFFL.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME54/russian/SHUFFL.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME54/vietnamese/SHUFFL.pdf">Vietnamese</a> as well.</h3>
<p> </p>Chef simulating the next process, imagine that we have an array <b>A</b> = {<b>1</b>, <b>2</b>, ..., <b>M</b>}. Split it into two arrays with equal size with odd and even indexes from it. After that let's erase in each array numbers on the place [<b>S</b>*<b>X</b>/<b>Y</b>], where <b>S</b> denoting the size of array and merge these arrays(the first element of the second array will be after the last element of the first array), after the first operation <b>A</b> will contain exactly <b>M</b>-2 elements after that, after the second operations <b>M</b>-4 and so on. Chef making this procedure until <b>A</b> has more than <b>2</b> elements. In the end he wants to know the value of bitwise XOR elements that remain. He needs your help!

<h3>Input</h3>
<ul>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.
The first line of each test case contains three non-negative integers <b>M</b>, <b>X</b> and <b>Y</b>.
</ul>
<p> </p>

<h3>Output</h3>
<ul>
Output in a single line the value of bitwise XOR of two elements that remain in the array <b>A</b> after <b>M</b>/2-1 operations split/merge as described above.
</ul>
<p> </p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>1000</b></li>
<li><b>1</b> ≤ <b>M</b> ≤ <b>10<sup>6</sup></b> </li>
<li><b>M</b> is even </li>
<li><b>0</b> ≤ <b>X</b> < <b>Y</b> ≤ <b>10<sup>6</sup></b> </li>
<li> Sum of <b>M</b> over all test cases ≤ <b>5*10<sup>6</sup></b> </li>
</ul>
<p> </p>
<h3>Subtasks</h3>
<ul>
 <li><b>Subtask #1: (30 points) </b> Sum of <b>M</b> over all test cases  ≤ <b>10<sup>4</sup></b> </li>
 <li><b>Subtask #2: (10 points) </b> <b>X</b> = <b>0</b> </li>
 <li><b>Subtask #3: (60 points) </b> Original constraints</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
1
6 1 2

<b>Output:</b>
4
</pre>
<p> </p>
<h3>Explanation</h3>
<p><b>Example case 1.</b> Initially we have A = {1, 2, 3, 4, 5, 6}. After splitting in two arrays we will have A' = {1, 3, 5} and B' = {2, 4, 6}. Let's erase from 0-indexed A' and B' elements with index = [3*1/2]=1(3 and 4 respectively). After that merge A' and B' -> A = {1, 5, 2, 6}, split A once again in A' = {1, 2} and B' = {5, 6} and erase elements with index = [2*1/2]=1(2 and 6 respectively), merge arrays A' and B' -> A = {1, 5}. Answer is bitwise XOR of 1 and 5 = 4. </p>