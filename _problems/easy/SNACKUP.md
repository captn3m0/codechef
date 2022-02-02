---
{"category_name":"easy","problem_code":"SNACKUP","problem_name":"SnackUp","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.5","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"alei","problem_tester":"deadwing97","date_added":"30-05-2017","tags":{"0":"ad","1":"alei","2":"constructive","3":"cook83","4":"easy"},"editorial_url":"https://discuss.codechef.com/problems/SNACKUP","time":{"view_start_date":1497812400,"submit_start_date":1497812400,"visible_start_date":1497812400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK83/mandarin/SNACKUP.pdf">mandarin chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK83/russian/SNACKUP.pdf">russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK83/vietnamese/SNACKUP.pdf">vietnamese</a> as well.</h3>


<p>
This year CodeChef is organizing the SnackUp cooking contest. The favorite to win is of course our beautiful Chef Ada.
</p>
<p>
There are <b>n</b> judges in the contest, and for simplicity let's enumerate judges from 1 to <b>n</b>. 
</p>
<p>
Ada has an uncountable repertoire of delicious recipes, but for the contest she choose only <b>n</b> of them. Let's also enumerate the recipes from 1 to <b>n</b>.
</p>
<p>
Ada is going to show off her cooking skills in many rounds, and we are going to help her organizing them! One round is structured as follows:
<ul>
<li> We will choose <b>k</b> distinct recipes and Ada will prepare two identical dishes for each of them.</li>
<li> We will choose <b>k</b> distinct judges for the round.</li>
<li> We will send <b>k</b> invitation letters (one for each of the chosen judges). Each letter must contain the number of the judge, and two distinct integers denoting the ids of the recipes that he is going to taste. </li>
<li>Two different judges can taste the same recipe, but it must be from different dishes. </li>
<li>Ada does not like to waste food, so the letters must be designed in such a way that every prepared dish is tasted.</li>
</li>
</ul>
You can arbitrarily decide the number of rounds and the number of invited judges in each round, but as a rule of the contest at the end of all rounds each judge must have tasted every recipe exactly twice.
</ul>

<h3>Input</h3>
<p>
The first line of input contains one number <b>T</b>, the number of test cases.
Each test case consist of one line containing an integer <b>n</b>, the number of judges.
</p>
<h3>Output</h3>
<p>
For each testcase, in the first line, print <b>r</b> the number of rounds, then describe each round as follows.
</p>
<p>
In the first line of each round, print <b>k</b>, the number of invited judges.</p>
<p>In the next <b>k</b> lines, print the invitation letters as three space separated integers: <b>j</b>, <b>x</b>, <b>y</b> denoting the id of the judge, and the ids of the recipe that he is going to taste. Note that <b>x</b> should not be equal to <b>y</b>.
</p>

<h3>Constraints</h3>
<li>1 ≤ <b>T</b> ≤ 100</li>
<li>2 ≤ <b>n</b> ≤ 100</li>


<h3>Example</h3>
<pre>
<b>Input:</b>
1
2

<b>Output:</b>
2
2
1 1 2
2 1 2
2
1 1 2
2 1 2
</pre>



