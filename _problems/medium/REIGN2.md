---
{"category_name":"medium","problem_code":"REIGN2","problem_name":"Reign 2","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"kostya_by","problem_tester":"shangjingbo","date_added":"28-11-2013","tags":{"0":"cook62","1":"dynamic","2":"easy","3":"greedy","4":"kostya_by"},"editorial_url":"http://discuss.codechef.com/problems/REIGN2","time":{"view_start_date":1442773706,"submit_start_date":1442773706,"visible_start_date":1442773800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a href="/download/translated/COOK62/mandarin/REIGN2.pdf" target="_blank">Mandarin Chinese</a> and <a href="/download/translated/COOK62/russian/REIGN2.pdf" target="_blank">Russian</a> as well.</h3>
<p>Crueland is a dangerous region following ancient traditions. Every day, there are confrontations among local rulers, and thus many civilians are forced to be refugees. The only recognized way of resolving issues in Crueland is by means of physical power.</p>
<p>King George is thought to be one of the most reasonable and careful rulers in Crueland. As a reasonable ruler, he understands that the best defense is a good offense. Therefore, he decided to conquer some castles and lands to frighten his enemies.</p>
<p>There are <b>N</b> castles that can be conquered by George. As a careful ruler, he won't let his people die without a strong reason. After careful solitary consideration, he has decided to conquer <b>exactly K</b> castles during the next <b>K</b> days, an aim he plans to achieve by conquering one castle every day for the next <b>K</b> days.</p>
<p>As reported by King George's spies, <b>A<sub>i</sub> + (j - 1) × B<sub>i</sub></b> enemy knights will be protecting the <b>i</b><sup>th</sup> castle during the <b>j</b><sup>th</sup> day. When attacking a castle, if the King sends as many knights as those defending it, it's sufficient to be conquer that castle. Another requirement is that one knight cannot be sent to conquer two different castles.</p>
<p>Now, you are the <em>Hand of the King</em>. Though caring about the King is your duty, you know that he is a tyrant and you want people to learn the truth about him. Thus, you want to sabotage George's military campaign: maximize the total number of knights used during all the conquests. In this way, his subjects will learn that he doesn't care about them too much. As you are the king's trusted advisor, you can choose a set of <b>K</b> castles, that the king should conquer. George trusts you enough, so you are assured that he will conquer exactly the set of castles you chose. After you provide a set of castles, George will choose the order in which he will conquer them. You can assume that George always chooses the order which minimizes the total number of knights used during all the conquests.</p>
<p>Your task is to find the maximum possible total number of knights that can be used during the campaign and reached by delegating a set of <b>K</b> castles to conquer. Also, you are not sure about the value of <b>K</b>, so you should find the optimal answer for each <b>K = 1, 2, ... , N</b>.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of a test case description contains a single integer <b>N</b>.</p>
<p>The second line of the description contains <b>N</b> integers, where the <b>i</b><sup>th</sup> denotes <b>A<sub>i</sub></b>.</p>
<p>The third line of the description contains <b>N</b> integers, where the <b>i</b><sup>th</sup> denotes <b>B<sub>i</sub></b>.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing <b>N</b> integers: the maximal possible total number of knights used during all the campaign for each <b>K = 1, 2, ... , N</b>.</p>
<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 10</li>
<li>1 ≤ <b>N</b> ≤ 5000</li>
<li>0 ≤ <b>A<sub>i</sub></b>, <b>B<sub>i</sub></b> ≤ 10<sup>9</sup></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
4
3 1 1 5
4 5 3 4
5
4 6 4 4 3
9 6 7 9 8

<b>Output:</b>
5 12 21 31
6 17 36 61 91

</pre>