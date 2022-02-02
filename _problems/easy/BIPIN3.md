---
{"category_name":"easy","problem_code":"BIPIN3","problem_name":"Help Watson Escape","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"bipin2","problem_tester":"xcwgf666","date_added":"8-01-2016","tags":{"0":"april16","1":"bipin2","2":"fastmodexp","3":"simple"},"editorial_url":"http://discuss.codechef.com/problems/BIPIN3","time":{"view_start_date":1460374200,"submit_start_date":1460374200,"visible_start_date":1460374200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/APRIL16/mandarin/BIPIN3.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/APRIL16/russian/BIPIN3.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/APRIL16/vietnamese/BIPIN3.pdf">Vietnamese</a> as well.</h3>
<p><b>Zombies zombies everywhere!!</b> </p>
<p>In a parallel world of zombies, there are <b>N</b> zombies. There are infinite number of unused cars, each of same model only differentiated by the their colors. The cars are of<b> K</b> colors.
</p>
<p>
A zombie parent can give birth to any number of zombie-children (possibly zero), i.e. each zombie will have its parent except the <em>head</em> zombie which was born in the winters by combination of ice and fire.
</p>
<p>
Now, zombies are having great difficulties to commute to their offices without cars, so they decided to use the cars available. Every zombie will need only one car. <em>Head</em> zombie called a meeting regarding this, in which he will allow each zombie to select a car for him.
</p>
<p>
Out of all the cars, the <em>head</em> zombie chose one of cars for him. Now, he called his children to choose the cars for them. After that they called their children and so on till each of the zombie had a car. Head zombie knew that it won't be a good idea to allow children to have cars of same color as that of parent, as they might mistakenly use that. So, he enforced this rule during the selection of cars.
</p>
<p>Professor James Moriarty is a criminal mastermind and has trapped Watson again in the zombie world. Sherlock somehow manages to go there and met the <em>head</em> zombie. Head zombie told Sherlock that they will let Watson free if and only if Sherlock manages to tell him the maximum number of ways in which the cars can be selected by <b>N </b>Zombies among all possible hierarchies. A hierarchy represents parent-child relationships among the <b>N</b> zombies. Since the answer may be large, output the answer modulo <b>10<sup>9</sup> + 7</b>. Sherlock can not compute big numbers, so he confides you to solve this for him.
</p>
<h3>Input</h3>
<p>The first line consists of a single integer <b>T</b>, the number of test-cases.<br />
Each test case consists of two space-separated integers <b>N</b> and <b>K</b>, denoting number of zombies and the possible number of colors of the cars respectively.
</p>
<h3>Output</h3>
<p>For each test-case, output a single line denoting the answer of the problem.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10^9</b></li>
<li><b>1</b> ≤ <b>K</b> ≤ <b>10^9</b></li>
</ul>
<h3>Subtasks</h3>
<p>
<b>Subtask #1 : (10 points)</b></p>
<ul>
<b>
<li><b>1</b> ≤ <b>T</b> ≤ <b>20</b></li>
<li>1 ≤ N, K ≤ 10</li>
<p></p></b>
</ul>

<p>
<b>Subtask 2 : (20 points) </b><br /></p>
<ul>
<b>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li>1 ≤ N, K ≤ 10000</li>
<p></p></b>
</ul>

<p>
<b>Subtask 3 : (70 points) </b><br /></p>
<ul>
<b>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li>1 ≤ N, K ≤ 10^9</li>
<p></p></b>
</ul>

<h3>Example</h3>
<pre><b>Input</b>
2
2 2
3 3
<b>Output:</b>
2
12
</pre><h3>Explanation
<p>In the first sample test case, there are 2 zombies. Let us name them Z1 and Z2. Let one hierarchy be one in which Z1 is parent of Z2. There are 2 colors, suppose red and blue. If Z1 takes red, then Z2 should take a blue. If Z1 takes blue, then Z2 should take red. <br />
Note that one other possible hierarchy could be one in which Z2 is a parent of Z1. In that hierarchy also, number of possible ways of assigning cars is 2.<br />
So there maximum number of possible ways is 2.
</p>
<p>
In the second example, we have 3 Zombies say Z1, Z2, Z3 and cars of 3 colors, suppose red, blue and green.<br />
A hierarchy to maximize the number of possibilities is Z1 is the parent of Z2, Z2 is the parent of Z3.<br />
Zombie Z1 can choose one of red, blue or green cars. Z2 can choose one of the remaining two colors (as its car's color can not be same as its parent car.). Z3 can also choose his car in two colors, (one of them could be color same as Z1, and other being the color which is not same as cars of both Z1 and Z2.). This way, there can be 12 different ways of selecting the cars.
</p>
</h3>