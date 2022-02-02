---
{"category_name":"easy","problem_code":"PLAYFIT","problem_name":"Fit to Play","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"vamsi_kavala","problem_tester":"laycurse","date_added":"20-01-2012","tags":{"0":"april12","1":"easy","2":"vamsi_kavala"},"editorial_url":"http://discuss.codechef.com/problems/PLAYFIT","time":{"view_start_date":1334137605,"submit_start_date":1334137605,"visible_start_date":1334136600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p><i>Who's interested in football?</i></p>
<p>Rayne Wooney has been one of the top players for his football club for the last few years. But unfortunately, he got injured during a game a few months back and has been out of play ever since.</p>
<p>He's got proper treatment and is eager to go out and play for his team again. Before doing that, he has to prove to his fitness to the coach and manager of the team. Rayne has been playing practice matches for the past few days. He's played N practice matches in all.</p>
<p>He wants to convince the coach and the manager that he's improved over time and that his injury no longer affects his game. To increase his chances of getting back into the team, he's decided to show them stats of any 2 of his practice games. The coach and manager will look into the goals scored in both the games and see how much he's improved. If the number of goals scored in the 2nd game(the game which took place later) is greater than that in 1st, then he has a chance of getting in. Tell Rayne what is the maximum improvement in terms of goal difference that he can show to maximize his chances of getting into the team. If he hasn't improved over time, he's not fit to play. Scoring equal number of goals in 2 matches will not be considered an improvement. Also, he will be declared unfit if he doesn't have enough matches to show an improvement.</p>
<p><h3>Input:</h3>
The first line of the input contains a single integer T, the number of test cases.
Each test case begins with a single integer N, the number of practice matches Rayne has played.<br />
The next line contains N integers. The ith integer, gi, on this line represents the number of goals Rayne scored in his ith practice match. The matches are given in chronological order i.e. j &gt; i means match number j took place after match number i.</p>

<p><h3>Output:</h3>
For each test case output a single line containing the maximum goal difference that Rayne can show to his coach and manager. If he's not fit yet, print "UNFIT".</p>

<p><h3>Constraints:</h3>
1&lt;=T&lt;=10<br />
1&lt;=N&lt;=100000<br />
0&lt;=gi&lt;=1000000 (Well, Rayne's a legend! You can expect him to score so many goals!)</p>

<h3>Example:</h3>

<b>Input:</b><br />
3<br />
6<br />
3 7 1 4 2 4<br />
5<br />
5 4 3 2 1<br />
5<br />
4 3 2 2 3<br />
<br />
<b>Output:</b><br />
4<br />
UNFIT<br />
1<br />
<br />
<p><b>Explanation:</b><br />
In the first test case, Rayne can choose the first and second game. Thus he gets a difference of 7-3=4 goals. Any other pair would give him a lower improvement.
In the second test case, Rayne has not been improving in any match. Thus he's declared UNFIT.</p>
<p><b><i>Note:</i></b> Large input data. Use faster I/O methods. Prefer scanf,printf over cin/cout.</p>