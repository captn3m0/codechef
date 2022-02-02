---
{"category_name":"easy","problem_code":"AMR15D","problem_name":"Bhallaladeva","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"suh_ash2008","problem_tester":null,"date_added":"11-10-2015","tags":{"0":"acmamr15","1":"basic","2":"dynamic","3":"easy","4":"sorting","5":"suh_ash2008"},"editorial_url":"http://discuss.codechef.com/problems/AMR15D","time":{"view_start_date":1453401000,"submit_start_date":1453401000,"visible_start_date":1453401000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Bhallaladeva was an evil king who ruled the kingdom of Maahishmati. He wanted to erect a 100ft golden statue of himself and he looted gold from several places for this. He even looted his own people, by using the following unfair strategy:</p>
<p>There are <b>N</b> houses in Maahishmati, and the <b>i<sup>th</sup></b> house has <b>A<sub>i</sub></b> gold plates. Each gold plate costs exactly 1 <b>Nimbda</b>, which is the unit of currency in the kingdom of Maahishmati. Bhallaladeva would choose an integer <b>K</b>, and loots all the houses in several steps. In each step:</p>
<ol>
<li>He would choose a house <b>i</b> which hasn't been looted yet, pay the owner exactly <b>A<sub>i</sub></b> Nimbdas, and take away all the gold plates in that house (Hence, he also ends up looting this house).</li>
<li>He would now choose <b>atmost K</b> houses which haven't been looted yet and take away all the gold plates from these houses without paying a single Nimbda (Yes, he takes all of them for free).
</li>
</ol>

<p>He repeats the above steps until all the <b>N</b> houses have been looted. Your task is to devise a strategy for Bhallaladeva to loot the houses in some order, so that the number of nimbdas he has to pay is <b>minimium</b>. You'll also be given multiple values of <b>K</b> (<b>Q</b> of them to be precise), and you need to find the minimum number of nimbdas for each of these values.</p>
<h3>Input</h3>
<p>The first line of input consists of a single integer <b>N</b> denoting the number of houses in Maahishmati. The second line of input consists of <b>N</b> space separated integers denoting <b>A<sub>1</sub>, A<sub>2</sub>, ..., A<sub>N</sub></b>, where <b>A<sub>i</sub></b> denotes the number of gold plates in the <b>i<sup>th</sup></b> house. The third line of input consists of a single integer <b>Q</b> denoting the number of values of <b>K</b> to follow. Each of the following <b>Q</b> lines consist of a single integer, where the value on the <b>i<sup>th</sup></b> line denotes the value of K for the <b>i<sup>th</sup></b> query.
</p>
<h3>Output</h3>
<p>Output exactly <b>Q</b> integers on separate lines, where the output on the <b>i<sup>th</sup></b> line denotes the answer for the <b>i<sup>th</sup></b> value of <b>K</b>.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>Q</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>0</b> ≤ <b>K</b> ≤ <b>N-1</b></li>
<li><b>1</b> ≤ <b>A<sub>i</sub></b> ≤ <b>10<sup>4</sup></b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
4
3 2 1 4
2
0
2

<b>Output:</b>
10
3
</pre><h3>Explanation</h3>
<p><b>For the first query</b>, <b>K = 0</b>. Hence, Bhallaladeva cannot take gold plates from any of the houses for free. It will cost him 3 + 2 + 1 + 4 = <b>10</b> nimbdas.</p>
<p><b>For the second query</b>, <b>K = 2</b>. In the first step Bhallaladeva can pay <b>2</b> nimbdas for gold plates in house number 2, and take the gold in houses 1 and 4 for free (Note that house 1 has 3 gold plates and house 4 has 4 gold plates). Now, he has looted houses 1, 2 &amp; 4. Now in the second step, he loots house 3, by paying <b>1</b> nimbda. Hence, the total cost = 1 + 2 = <b>3</b>. Note that there might be multiple ways to achieve the minimum cost, and we have explained only one of them.</p>
