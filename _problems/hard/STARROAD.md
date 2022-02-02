---
{"category_name":"hard","problem_code":"STARROAD","problem_name":"Roads in Stars","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":4,"source_sizelimit":50000,"problem_author":"mgch","problem_tester":null,"date_added":"27-04-2016","tags":{"0":"biginteger","1":"chinese","2":"dynamic","3":"garner","4":"matrix","5":"may16","6":"medium","7":"mgch"},"editorial_url":"http://discuss.codechef.com/problems/STARROAD","time":{"view_start_date":1463391000,"submit_start_date":1463391000,"visible_start_date":1463391000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/MAY16/mandarin/STARROAD.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/MAY16/russian/STARROAD.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/MAY16/vietnamese/STARROAD.pdf">Vietnamese</a> as well.</h3>
<p>It is a period of civil war. Rebel spaceships, striking from a hidden base, have won their first victory against the evil Galactic Empire. </p>
<p>In light of these events, Chef, the leader of the rebel alliance, wants to build safe connections in galaxy with <b>N</b> <b>stars</b>. There are <b>M</b> bidirectional <b>space roads</b> in space that connect pairs of stars together. Travelling through one space road takes 1 day. </p>
<p>To avoid detection by the Empire, Chef decided that rebels must never travel alone. Instead, they must travel using armored rebel spaceships. Each spaceship is designated two stars, and a fixed route between these stars. A <b>route</b> is just a path composed of roads that connects two stars, but to increase security, Chef added the following restrictions on routes:</p>
<ul>
<li>Each route must be traversable within at most <b>K</b> days.</li>
<li>Roads may be traversed any number times in a single route, in both directions.</li>
</ul>
<p><br /></p>
<p>After some time has passed, Chef and his engineers were able to <i>build a spaceship for every possible route between stars</i>.</p>
<p>Unfortunately, the powerful Empire discovered this and plans to destroy these spaceships to maintain control of the galaxy. Specifically, they deployed a new superweapon called the Death Starkiller Base, which is able to destroy <b>X</b> spaceships at once! It works by analyzing all spaceships that pass through Empire-controlled star systems.</p>
<p>Unfortunately, since the destruction of the Empire's two previous superweapons, the budget for the new superweapon is crippled, so the Death Starkiller Base has some severe restrictions:</p>
<ul>
<li>It can only destroy <b>exactly</b> <b>X</b> spaceships per usage. Not more, not less.</li>
<li>It can only destroy a group of spaceships if they travel between the <i>same pair of stars</i>.</li>
</ul>
<p><br /></p>
<p>Despite these flaws, the Empire still used the superweapon as many times as possible, until there aren't enough groups of spaceships any more to destroy.</p>
<p>To avoid more casualties, Chef decided to retire most of the surviving spaceships. Chef wants to retire as many spaceships as possible, but in order to stay connected, Chef wants to do this such that <i>there is still a way to get from any star to another using spaceships</i>. How many ways are there for Chef to retire spaceships so that this is satisfied?</p>
<p>Note that a spaceship can only pick up or drop off people at the start or end of its journey, so a single spaceship that happens to pass through all stars isn't enough (unless there are only two stars).</p>
<h3>Input</h3>
<p>The first line of input contains four positive integers - <b>N</b>, <b>M</b>, <b>X</b>, <b>K</b>. The next <b>M</b> lines each contains two integers <b>U</b>, <b>V</b> stars which connect by space road. All space roads are pairwise distinct.</p>
<h3>Output</h3>
<p>Output a single line containing a single integer — the solution of Chef's problem.</p>
<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>N</b> ≤ 100</li>
<li>0 ≤ <b>M</b> ≤ <b>N</b>x<b>(N-1)</b>/2</li>
<li>1 ≤ <b>K</b> ≤ 10<sup>18<sup></sup></sup></li>
<li>1 ≤ <b>X</b> ≤ 7777777</li>
<li>1 ≤ <b>U</b> &lt; <b>V</b> ≤ <b>N</b> </li>
<li> Each space road (<b>U</b>, <b>V</b>) will be in input at most once. </li>
</ul>
<h3>Subtasks</h3>
<ul>
<li><b>Subtask 1: (10 pts)</b> <b>N</b> ≤ 5.
</li>
<li><b>Subtask 2: (25 pts)</b> <b>N</b> ≤ 30.
</li>
<li><b>Subtask 3: (65 pts)</b> Original constraints.
</li>
</ul>
<h3>Example</h3>
<pre>
<b>Input:</b>
<tt>3 3 100 3
1 2
2 3
3 1
</tt>
<b>Output:</b>
<tt>75</tt>
</pre>
<pre>
<b>Input:</b>
<tt>3 3 2 3
1 2
2 3
3 1
</tt>
<b>Output:</b>
<tt>3</tt>
</pre>
<pre>
<b>Input:</b>
<tt>5 8 10000 1000000000
4 5
3 5
1 4
1 3
2 3
2 4
1 2
1 5
</tt>
<b>Output:</b>
<tt>2220611572265625</tt>
</pre><h3>Explanation:</h3>
<p>
<b>Example case 1.</b> There are five possible routes between stars 1 and 2 traversable in not more than 3 days: {1-2, 1-3-2, 1-2-1-2, 1-2-3-2, 1-3-1-2}. There are also five routes between stars 2 and 3, and also between stars 1 and 3. There are three possible plans for the remaining routes:</p>
<ul>
<li>A route remains between 1 and 2, and between 2 and 3. There are 5 x 5 = 25 ways to do this.</li>
<li>A route remains between 2 and 3, and between 3 and 1. There are 5 x 5 = 25 ways to do this.</li>
<li>A route remains between 3 and 1, and between 1 and 2. There are 5 x 5 = 25 ways to do this.</li>
</ul>
<p><br /></p>
<p>All in all, there are 25 + 25 + 25 = 75 plans.</p>
