---
{"category_name":"hard","problem_code":"STRQUER","problem_name":"Strange Queries","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"CAML","6":"CLOJ","7":"CLPS","8":"COB","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"kotlin","24":"LISP clisp","25":"LISP sbcl","26":"LUA","27":"NEM","28":"NICE","29":"NODEJS","30":"PAS fpc","31":"PAS gpc","32":"PERL","33":"PERL6","34":"PHP","35":"PIKE","36":"PRLG","37":"PYPY","38":"PYTH","39":"PYTH 3.5","40":"RUBY","41":"rust","42":"SCALA","43":"SCM chicken","44":"SCM guile","45":"SCM qobi","46":"ST","47":"swift","48":"TCL","49":"TEXT","50":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"mgch","problem_tester":"alex_2oo8","date_added":"20-11-2017","tags":{"0":"ltime54","1":"medium","2":"mgch","3":"treap"},"editorial_url":"https://discuss.codechef.com/problems/STRQUER","time":{"view_start_date":1511629200,"submit_start_date":1511629200,"visible_start_date":1511629200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME54/mandarin/STRQUER.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME54/russian/STRQUER.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME54/vietnamese/STRQUER.pdf">Vietnamese</a> as well.</h3>
Chef has a set of integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b>. Define the Chef's number for the set as a minimal sum of penalties of the connections between numbers from this set(each number must be connected with at least one other number), if size of the set more or equal than <b>2</b>, and <b>0</b> otherwise. The connection between numbers <b>x</b> and <b>y</b> has a penalty equal the absolute value |<b>x</b>-<b>y</b>|. Chef can add elements in the set and remove elements from it, after every such operation he wants to know the Chef's number for his set. Please help him to solve this complicated task.

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.
The first line of each test case contains two positive integers <b>N</b> denoting the number of elements in the set and <b>Q</b> denoting the number of operations performed by Chef. The second line contains <b>N</b> space-separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b> denoting the set <b>A</b>, all numbers in <b>A</b> are pairwise distinct. Next <b>Q</b> lines contains two integers - <b>type</b> and <b>x</b>. <b>type</b> = 1 <b>x</b> denoting that Chef adding the number <b>x</b> in the set, it's guaranteed that <b>x</b> not in the set. <b>type</b> = 2 <b>x</b> denoting that Chef erases element <b>x</b> from it, it's guaranteed that <b>x</b> exists there.
</ul>
<p> </p>

<h3>Output</h3>
After every add/erase operation of Chef output a Chef's number for the set <b>A</b>.
<p> </p>

<h3>Constraints</h3>
<p>Should contain all the constraints on the input data that you may have. Format it like:</p>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>1000</b></li>
<li><b>1</b> ≤ <b>N</b>, <b>Q</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>A<sub>i</sub> </b>, <b>x</b> ≤ <b>10<sup>9</sup></b></li>
<li><b>1</b> ≤ <b>type</b> ≤ <b>2</b></li>
<li> Sum of <b>N</b> over all test cases ≤ <b>2*10<sup>5</sup></b></li>
<li> Sum of <b>Q</b> over all test cases ≤ <b>2*10<sup>5</sup></b></li>
</ul>
<p> </p>
<h3>Subtasks</h3>
<ul>
 <li><b>Subtask #1: (27 points) </b> sum of <b>N</b> over all test cases ≤ <b>5*10<sup>3</sup></b> and sum of <b>Q</b> over all test cases ≤ <b>5*10<sup>3</sup></b> </li>
 <li><b>Subtask #2: (24 points) </b> </b> sum of <b>N</b> over all test cases ≤ <b>5*10<sup>4</sup></b> and sum of <b>Q</b> over all test cases ≤ <b>5*10<sup>4</sup></b></li>
 <li><b>Subtask #3: (49 points) </b> Original constraints</li>
</ul>
<p> </p>

<h3>Example</h3>
<pre><b>Input:</b>
1
4 4
1 7 2 4
1 3
1 6
2 1
2 7

<b>Output:</b>
5
3
3
3.
</pre>
<p> </p>
<h3>Explanation</h3>
<p><b>Example case 1.</b> After the first operation <b>A</b> will be = {1, 7, 2, 4, 3} , the Chef's number for the <b>A</b> can be computed with next connections: <b>1</b> with <b>2</b>, <b>2</b> with <b>3</b> and <b>7</b> with <b>4</b>, sum of this values |<b>1</b>-<b>2</b>|+|<b>2</b>-<b>3</b>|+|<b>7</b>-<b>4</b>|=<b>5</b>. After the second operation <b>A</b> = {1, 7, 2, 4, 3, 6}, Chef's number = |<b>1</b>-<b>2</b>|+|<b>4</b>-<b>3</b>|+|<b>7</b>-<b>6</b>| = 3. After the third operation <b>A</b> = {7, 2, 4, 3, 6}, Chef's number = |<b>4</b>-<b>3</b>|+|<b>2</b>-<b>3</b>|+|<b>7</b>-<b>6</b>| = 3</p>. Finally <b>A</b> = {2, 4, 3, 6} and Chef's number = |<b>3</b>-<b>2</b>|+|<b>6</b>-<b>4</b>|=3.