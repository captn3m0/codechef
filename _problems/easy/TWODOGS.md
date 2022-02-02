---
{"category_name":"easy","problem_code":"TWODOGS","problem_name":"Make Him Happy","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"adurysk","problem_tester":"gerald","date_added":"6-11-2013","tags":{"0":"adurysk","1":"easy","2":"feb14"},"editorial_url":"http://discuss.codechef.com/problems/TWODOGS","time":{"view_start_date":1392629400,"submit_start_date":1392629400,"visible_start_date":1392629400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/FEB14/mandarin/TWODOGS.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/FEB14/russian/TWODOGS.pdf">Russian</a>.</h3>
<p>In Chef's house there are <b>N</b> apples lying in a row on the floor. These apples are numbered from <b>1</b> (left most one) to <b>N</b> (right most one). The types of apples are also numbered by positive integers, and the type of apple <b>i</b> is <b>T<sub>i</sub></b>.</p>
<p>Chef has recently brought two trained dogs. Both of the dogs are too intelligent to know the smell of each type of apple. If Chef gives a dog an integer <b>x</b>, and releases it at one end of the row of apples, then the dog smells each apple one by one. Once the dog find an apple of type <b>x</b>, the dog picks the apple and back to Chef's room immidiately. If there is no apple of type <b>x</b>, then the dog will back without any apples.</p>
<p>Now Chef wants to eat two apples as soon as possible. Here the apples must have distinct types, and the sum of the types must be equal to <b>K</b>. Chef can release the dogs from either of the ends, namely, he can leave (both at left end) or (both at right end) or (one at left end and one at right end) and he can release them at the same time. The dogs take one second to smell each apple. However the dogs can run rapidly, so the time for moving can be ignored. What is the minimum time (in seconds) to get the desired apples from his dogs?</p>
<h3>Input</h3>
<p>The first line of input contains two space-separated integers <b>N</b> and <b>K</b>, denoting the number of apples and the required sum respectively. Then the next line contains <b>N</b> space-separated integers <b>T<sub>1</sub></b>, <b>T<sub>2</sub></b>, ..., <b>T<sub>N</sub></b>, denoting the types of the apples.</p>
<h3>Output</h3>
<p>Print one integer describing the minimum number of seconds that Chef needs to wait till he gets the desired apples. If Chef cannot get the desired apples, then output "-1" without quotes.</p>
<h3>Constraints</h3>
<ul>
<li><b>2 ≤ N ≤ 500000 (5 × 10<sup>5</sup>)</b></li>
<li><b>1 ≤ K ≤ 1000000 (10<sup>6</sup>)</b></li>
<li><b>1 ≤ T<sub>i</sub> ≤ 1000000 (10<sup>6</sup>)</b></li>
</ul>
<h3>Example</h3>
<pre><b>Sample Input 1:</b>
5 5
2 4 3 2 1

<b>Sample Output 1:</b>
2

<b>Sample Input 2:</b>
5 5
2 4 9 2 5

<b>Sample Output 2:</b>
-1
</pre><h3>Explanation</h3>
<p>In the first example, if Chef leaves the first dog from left and gives it integer <b>4</b>, and the second dog from right and gives it integer <b>1</b>, then the first dog takes <b>2</b> seconds and the second dog takes <b>1</b> second to get the apples. Thus Chef needs to wait <b>2</b> seconds. In any other way, Chef can't get the desired apples in less than <b>2</b> seconds.</p>
<p>In the second example, Chef cannot get two apples such that the sum of their types is <b>5</b> so the answer is "-1".</p>
