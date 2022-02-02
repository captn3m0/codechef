---
{"category_name":"easy","problem_code":"PRLADDU","problem_name":"DevuLand, Dinosaurs and Laddus","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"dpraveen","problem_tester":"shangjingbo","date_added":"15-09-2014","tags":{"0":"basic","1":"dpraveen","2":"easy"},"editorial_url":"http://discuss.codechef.com/problems/PRLADDU","time":{"view_start_date":1413192600,"submit_start_date":1413192600,"visible_start_date":1413192600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/OCT14/mandarin/PRLADDU.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/OCT14/russian/PRLADDU.pdf">Russian</a>.</h3>
<p>
	DevuLand is a very strange place. There are <b>n</b> villages in it. Some of the villages are occupied by dinosaurs while the remaining ones by villagers.<br />
	You are given the information of DevuLand<br />
	by an array <b>D</b> of size <b>n</b>. If <b>D[i]</b> is non-negative, it means that there are <b>D[i]</b> villagers in that village.<br />
	Otherwise, it means that are -<b>D[i]</b><br />
	dinosaurs in that village.
</p>
<p>
	It is also guaranteed that total number of villagers in DevuLand is equal to total number of dinosaurs.
</p>
<p>
Once dinosaurs got very hungry and started eating villagers. Frightened villagers gathered immediately and met their Sarpanch Deviji. Deviji, being a very daring and negotiable person, met to the head<br />
of dinosaurs. Soon both parties called a truce. It was decided that the villagers will provide laddus to<br />
the dinosaurs. So everyday, each villager will take exactly one laddu to one of the dinosaurs in such a way that no dinosaur remains hungry (note that this is possible because number of villagers is the same as the number of dinosaurs).
</p>
<p>
Actually, carrying laddus is a quite a tough job. Villagers have to use a bullock cart for that. It takes one unit of grass a bullock to<br />
carry a cart with 1 laddu for <b>1</b> kilometre. Laddus used to be very heavy in DevuLand, so a bullock cart can not carry more than one laddu.</p>
<p>It is also given distance between village indexed <b>i</b> and <b>j</b> is |<b>j</b> - <b>i</b>| (the absolute value) kilometres.
</p>
<p>
Now villagers sat down and found a strategy to feed laddus to dinosaurs so that they need to buy the least amount of grass from the nearby market.<br />
They are not very good in<br />
calculations, please find out what is the minimum number of units of grass they need to buy.
</p>
<h3>Input</h3>
<p>
First line of the input contains an integer <b>T</b> denoting number of test cases.
</p>
<p>
For each test case, there are two lines.
</p>
<p>
First line contains a single integer denoting n: number of villages.
</p>
<p>
Second line contains n space separated integers denoting the array <b>D</b>.
</p>
<h3>Output</h3>
<p>
For each test case, print a single line containing the integer corresponding to answer of the problem.
</p>
<h3>Constraints</h3>

<ul>
<li> 1 ≤ T ≤ 10^5 </li>
<li> 1 ≤ n ≤ 10^5 </li>
<li> -10^4 ≤ D[i] ≤ 10^4 </li>
<li> Sum of n over all the test cases will be ≤ 10^6 </li>
<li> It is guaranteed that sum of D[i] is zero for a single test case which ensures that there are equal number of villagers and dinosaurs. </li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
3
2
5 -5
2
-5 5
3
1 2 -3
<b>Output:</b>
5
5
4
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> Each villager in village 1, need to walk 1 km to reach to the dinosaur in 2nd village.</p>
<p><b>Example case 2.</b> Each villager in village 2, need to walk 1 km to reach to the dinosaur 1st village.</p>
<p><b>Example case 3.</b> Each villager in village 1, need to walk 2 km to reach to the dinosaur in 3rd village whereas Each villager in village 2,<br />
need to walk 1 km to reach to the dinosaur in 3rd village.</p>
