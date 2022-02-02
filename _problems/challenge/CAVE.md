---
{"category_name":"challenge","problem_code":"CAVE","problem_name":"Mushroom Cave","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"CS2","6":"PAS fpc","7":"PAS gpc","8":"RUBY","9":"PHP","10":"GO","11":"NODEJS","12":"HASK","13":"SCALA","14":"D","15":"PERL","16":"FORT","17":"WSPC","18":"ADA","19":"CAML","20":"ICK","21":"BF","22":"ASM","23":"CLPS","24":"PRLG","25":"ICON","26":"SCM qobi","27":"PIKE","28":"ST","29":"NICE","30":"LUA","31":"BASH","32":"NEM","33":"LISP sbcl","34":"LISP clisp","35":"SCM guile","36":"JS","37":"ERL","38":"TCL","39":"PERL6","40":"TEXT","41":"CLOJ","42":"FS"},"max_timelimit":0.85034,"source_sizelimit":50000,"problem_author":"pieguy","problem_tester":"gamabunta","date_added":"26-02-2011","tags":{"0":"challenge","1":"june11","2":"pieguy"},"editorial_url":"http://discuss.codechef.com/problems/CAVE","time":{"view_start_date":1307944762,"submit_start_date":1307944762,"visible_start_date":1307944714,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Chef is exploring a large cave looking for exotic mushrooms.

It is very dark in the cave, so Chef uses torches to help him see.
Torches do not last forever, so as Chef explores the cave he must find new torches to light.
Specifically, once Chef picks up a torch, he may only travel K steps before it will burn out.
If Chef doesn't find another torch within K steps, he will likely be eaten by a grue.
Whenever Chef finds a torch, he immediately lights it, and drops any currently held torch to the ground, rendering it unusable.
Chef wants to explore as much of the cave as possible before exiting.
Chef begins at the northwest corner of the cave and must end at the southeast corner.
</p>
<p>You will be given the layout of the cave, including the locations of all torches.
Your task is to plot a route through the cave from the northwest corner to the southeast corner that visits as many distinct cells of the cave as possible.
Chef must be able to follow your route without running out of torch light.  Chef must also still have a burning torch when he finishes the route.
Note that optimal routes are not required, and your submission will be scored relative to others' submissions.
Any route that leads Chef from the northwest corner to the southeast corner will be accepted.
</p>

<h3>Input</h3>
<p>Input will begin with an integer T, the number of test cases (between 3 and 10).
Each test case begins with 3 integers M, N, K (M, N ≤ 100, 2 ≤ K ≤ 15).
M and N are the dimensions of the cave, K is the duration of each torch.
M lines follow of N characters each, describing the cave.
Rows proceed from north to south, and columns from west to east.
A '.' character indicates an empty cell, a '#' character indicates an impassable cell, and a 't' character indicates a torch.
The cell in the northwest corner will always be a 't', and the cell in the southeast corner will never be '#'.
</p>

<h3>Output</h3>
<p>For each test case, output a string of 'N', 'W', 'S', and 'E' characters 
(corresponding to the cardinal directions <b>N</b>orth, <b>W</b>est, <b>S</b>outh, and <b>E</b>ast, respectively)
giving a route from the northwest corner to southeast.
It is guaranteed that at least one such route will exist.</p>

<h3>Scoring</h3>
<p>Your score for each test case is the total number of cells visited by your route
(visiting the same cell multiple times only counts once toward the total) divided by the total number of passable cells.
Your score for each file is the average of your scores on the individual test cases.
Your overall score is the average of your scores on the individual test files.
</p>

<h3>Sample Input</h3>
<pre><code>2
4 5 3
ttttt
.##..
.t...
##t..
6 6 4
tt#...
...##t
...tt.
..t.t#
....t.
..t..t
</code></pre>

<h3>Sample Output</h3>
<pre>SSEESEE
SENSSSESSENNNWEEENSWSSESWE

</pre>

<p>
The score for the first test case is 8/16=0.5.
The score for the second test case is 23/32=0.71875.
The overall score is thus (0.5+0.71875)/2=0.609375.
Note that the solution to the first test case is unique (in particular, the solution "EEEESSS" is invalid because Chef would run out of torch light during his final step), but in the second test case there are many alternate solutions
(including some that visit more than 23 distinct cells).
</p>

<h3>Test Case Generation</h3>
<p>
M and N are chosen randomly and uniformly between 10 and 100, inclusive,
and K is chosen randomly and uniformly between 2 and 15.
Additionally, a real number D is chosen randomly and uniformly between .05 and .2, inclusive.
Each cell is chosen as '#' with probability D, 't' with probability (1-D)/K, and '.' with probability (1-D)*(K-1)/K.
If no valid path exists from the northwest to southeast corner, the process is restarted with the same values of M, N, K, and D.
</p>