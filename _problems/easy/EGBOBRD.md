---
{"category_name":"easy","problem_code":"EGBOBRD","problem_name":"Bread","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"egor_bobyk","problem_tester":"mugurelionut","date_added":"11-12-2014","tags":{"0":"egor_bobyk","1":"implementation","2":"july15","3":"maths","4":"simple"},"editorial_url":"http://discuss.codechef.com/problems/EGBOBRD","time":{"view_start_date":1436779800,"submit_start_date":1436779800,"visible_start_date":1436779800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JULY15/mandarin/EGBOBRD.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/JULY15/russian/EGBOBRD.pdf">Russian</a>.</h3>
<p>Some chefs go for a tour lasting <b>N</b> days. They take packages of bread for food. Each package has <b>K</b> pieces of breads. On the <b>i<sup>th</sup></b> day, they eat <b>A</b><sub>i</sub> pieces of bread.</p>
<p>Unfortunately, chefs are very lazy people, and they always forget to close the package of breads, so <b>each day</b> the last piece of bread becomes exposed to mold (a fungus), and is no longer suitable for eating. Such a bad piece is not eaten, and is instead thrown away. </p>
<p>Let us take an example. If <b>K</b> = 4 and <b>N</b> = 3, then <b>A = {3, 1, 2}</b>. Chefs have packages of bread each having 4 pieces of bread, and their travel lasts 3 days. In the first day, they must eat 3 pieces of bread. So they open new package of bread and eat 3 pieces. They forget to close the package, so the 4<sup>th</sup> piece becomes bad. In the next day, they want to eat one piece of bread. And in the first package we don't have any good pieces of bread left, so they open a new package of bread and eat one piece from that. On the 3<sup>rd</sup> day, they want to eat 2 pieces of bread. In the second package, we have three pieces, and one of them is bad; so we have 2 good pieces. They eat 2 pieces from this package. So they must buy 2 packages of bread.</p>
<p>Please help chefs in finding out the minimum number of packages of breads they should take with them on the tour.</p>
<h3>Input</h3>
<ul>
<li>The first line of input contains a single integer <b>T</b> denoting the number of test cases.</li>
<li>The first line of each test contains two space separated integers <b>N</b> and <b>K</b>.</li>
<li>The next line of each test case contains <b>N</b> space separated integers denoting the number of pieces of bread the chefs want to eat each day.</li>
</ul>
<h3>Output</h3>
<p>For each of the <b>T</b> test cases, output a single line - minimum number of packages of bread the chefs should take.</p>
<h3>Constraints and Subtasks</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
</ul>
<p> </p>
<p><b>Subtask 1: 15 points</b></p>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>K</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>A</b><sub>i</sub> ≤ <b>100</b></li>
</ul>
<p> </p>
<p><b>Subtask 2: 25 points</b></p>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10^5</b></li>
<li><b>1</b> ≤ <b>K</b> ≤ <b>10^6</b></li>
<li><b>1</b> ≤ <b>A</b><sub>i</sub> ≤ <b>10^6</b></li>
</ul>
<p> </p>
<p><b>Subtask 3: 60 points</b></p>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10^5</b></li>
<li><b>1</b> ≤ <b>K</b> ≤ <b>10^11</b></li>
<li><b>1</b> ≤ <b>A</b><sub>i</sub> ≤ <b>10^6</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
3
3 4
3 1 2
1 1
1
2 4
8 8

<b>Output:</b>
2
1
4
</pre><h3>Explanation</h3>
<p>
Test case <b>1</b> has already been explained in the statement.
</p>
<p>
In test case <b>2</b>, we have one day tour and packages with one piece each. In the first day, we have to eat one piece of bread, so we open a package and eat one piece. Tour ended, and our answer is 1.
</p>
<p>
In test case <b>3</b>, we have a two days tour, and packages with 4 pieces of bread each. In the first day, we have to eat 8 pieces. We need to open two packages and eat all the pieces. In the second day, we have to eat 8 pieces again. We open two packages and eat all pieces. Tour ended. Answer is 4.
</p>
