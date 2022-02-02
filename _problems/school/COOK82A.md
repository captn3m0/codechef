---
{"category_name":"school","problem_code":"COOK82A","problem_name":"La Liga","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"deadwing97","problem_tester":"kingofnumbers","date_added":"20-05-2017","tags":{"0":"cakewalk","1":"cook82","2":"deadwing97"},"time":{"view_start_date":1495391400,"submit_start_date":1495391400,"visible_start_date":1495391400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK82/mandarin/COOK82A.pdf">mandarin chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK82/russian/COOK82A.pdf">russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK82/vietnamese/COOK82A.pdf">vietnamese</a> as well.</h3>

<p>Today is the final round of La Liga, the most popular professional football league in the world. Real Madrid is playing against Malaga and Barcelona is playing against Eibar. These two matches will decide who wins the league title. Real Madrid is already 3 points ahead of Barcelona in the league standings. In fact, Real Madrid will win the league title, except for one scenario: If Real Madrid loses against Malaga, and Barcelona wins against Eibar, then the La Liga title will go to Barcelona. In any other combination of results, Real Madrid will win the title.</p>

<p>You will be given multiple scenarios for these two games, where in each one you will be given the number of goals each team scored in their respective match. A team wins a match if it scores more than the opponent. In case they score the same number of goals, it's a draw. Otherwise, the team loses the game. You are asked to tell the winner of the La Liga title in each scenario.</p>


<h3>Input</h3>
<p>
The first line contains a single number <b>T</b>, the number of scenarios.
Each scenario is described by four lines. Each line starts with a team name followed by the number of goals this team scored in its corresponding match. (Barcelona plays Eibar and Real Madrid plays Malaga). The names are given in any arbitrary order within a scenario.</p>


<h3>Output</h3>
<p>For each scenario, output a single line showing the title winner in case this scenario happens. It should be either "RealMadrid" or "Barcelona".</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ <b>500</b></li>
<li>0 ≤ number of goals scored by a team in a match ≤ <b>20</b></li>
</ul>


<h3>Example</h3>
<pre><b>Input:</b>
2
Barcelona 2
Malaga 1
RealMadrid 1
Eibar 0
Malaga 3
RealMadrid 2
Barcelona 8
Eibar 6

<b>Output:</b>
RealMadrid
Barcelona
</pre>

<h3>Explanations</h3>
<p>In the first scenario, Barcelona wins against Eibar, because they scored more goals (2 > 0). But Real Madrid draws against Malaga, because they both score 1 goal each. So, Real Madrid wins the league title.</p>

<p>In the second scenario, Barcelona wins against Eibar (8 > 6). And Real Madrid loses against Malaga (2 < 3). This satisfies the only criteria needed for Barcelona to win the title: Barcelona winning, and Real Madrid losing. Hence, Barcelona is the answer for this scenario.</p>