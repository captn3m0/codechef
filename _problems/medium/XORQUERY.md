---
{"category_name":"medium","problem_code":"XORQUERY","problem_name":"Chef and XOR Queries","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"usaxena95","problem_tester":null,"date_added":"18-11-2017","tags":{"0":"acm17kgp","1":"dsu","2":"kgp17rol","3":"med","4":"tree","5":"usaxena95","6":"xor"},"editorial_url":"https://discuss.codechef.com/problems/XORQUERY","time":{"view_start_date":1515875400,"submit_start_date":1515875400,"visible_start_date":1515875400,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Mr. X has given the Chef an undirected tree T with <b>n</b> nodes numbered from 1 to <b>n</b>. Each edge <b>e</b><sub>i</sub> of the tree has a non-negative integer <b>w</b><sub>i</sub> written on it. But the edge weights are hidden from you. You have access only to the structure of the tree. ie. you know all the edges <b>e</b><sub>i</sub>.</p>

<p>Mr. X. has taught Chef how to compute the function f(<b>u</b>, <b>v</b>) = Bitwise <i>XOR</i> of all the numbers present on the edges in the unique path from <b>u</b> to <b>v</b>.</p>

<p>He now wants to test his disciple's understanding of this function. He tells the Chef various values of this function one by one. Since Mr. X. wants to test Chef's skills, this information could be wrong sometimes. You being good friends with the Chef have been asked to help him out to pass the test.</p>

<p>Total <b>Q</b> events occur each of which can be in one of the following forms:</p>
<ul>
<li><b>1 u v r</b>: <br /> Mr. X says that f(<b>u</b>, <b>v</b>) = <b>r</b>. For this type of event you must print:
<ul>
<li><i>AC</i> if the given information is consistent with all the previous information that you have accepted as AC  and there is <i>no way</i> you can argue that this information is wrong. Accept this new information as correct.</li>
<li><i>WA</i> when you can prove that the given information is wrong and does not fit in with the previously <i>AC</i> events.</li>
</ul>
</li>
<li><b>2 u v</b>:<br /> Print the value of f(<b>u</b>, <b>v</b>) using only the information provided in the previously <i>AC</i> events. <br /> 
	If it is not possible to correctly determine this value based on only previously <i>AC</i> events print -1.</li>
</ul>

<h3>Input</h3>
<ul>
<li>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>

<li>First line of each test case contains two space separated integers <b>n</b> and <b>Q</b> denoting the number of nodes and number of events respectively.</li>

<li>Each of the next <b>n</b> - 1 lines contains two space separated integers <b>u v</b> denoting that there is an edge between <b>u</b> and <b>v</b> in the tree.</li>

<li>Description of <b>Q</b> events follow. Each line follows one of these two formats:
<ul>
<li><b>1 u v r</b>, denoting first type of event.</li>
<li><b>2 u v</b>, denoting second type of event.</li>
</ul>
</ul>
<h3>Output</h3>
<p>For each event print the answer to the event as described.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>2000</b></li>
<li><b>1</b> ≤ <b>n</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>Q </b>≤ <b>2 * 10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>u, v</b> ≤ <b>n</b> </li>
<li><b>1</b> ≤ sum of <b>n</b> over all the testcases ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ sum of <b>Q</b> over all the testcases ≤ <b>2 * 10<sup>5</sup></b></li>
<li><b>0 ≤ r ≤ 2 * 10<sup>9</sup></b></li>
<li><b>0 ≤ w<sub>i</sub></b></li>
<li>The graph represented by <b>e<sub>i</sub></b> is a tree</li>
</ul>

<h3>Example</h3>
<pre>
<b>Input</b>
1
4 6
1 2
2 3
3 4
1 1 1 10
1 1 2 2
1 2 3 4
1 1 3 7
2 1 3
2 3 4 

<b>Output</b>
WA
AC
AC
WA
6
-1 
</pre>

<h3>Explanation</h3>
<ul>
<li>Event 1: f(1, 1) cannot be 10. Since there is no edge between 1 and 1, it must be 0 ⇒ <i>WA</i></li>
<li>Event 2: You cannot argue that f(1, 2) cannot be 2. Therefore you accept it ⇒ <i>AC</i>. Thus now we know that the weight of the edge between 1 and 2 is 2.</li>
<li>Event 3: You cannot argue that f(2, 3) cannot be 4. Therefore you accept it  ⇒ <i>AC</i>. Thus now we know that the weight of the edge between 2 and 3 is 4.</li>
<li>Event 4: f(1, 3) is xor of weights of edges 1-2 and 2-3 = 2 xor 4 = 6. Given information is wrong ⇒ <i>WA</i></li>
<li>Event 5: f(1, 3) is 6 as calculated above ⇒ 6</li>
<li>Event 6: f(3, 4) cannot be answered using only the above information ⇒ -1</li>
</ul>
