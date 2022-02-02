---
{"category_name":"challenge","problem_code":"BFORG","problem_name":"The Secret Fellowship of Byteland","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"TEXT","44":"SCM chicken","45":"CLOJ","46":"COB","47":"FS"},"max_timelimit":3.4,"source_sizelimit":50000,"problem_author":"admin","problem_tester":null,"date_added":"1-12-2008","tags":{"0":"admin"},"time":{"view_start_date":1232519266,"submit_start_date":1232519266,"visible_start_date":1232519266,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>The relationship between The University of Byteland and King Johnny was never a friendly one. The king was the easy-going, open-minded sort of person who is prepared to turn a blind eye to the embezzlement of public funds, but inwardly revolts at the thought of money going to waste, and supporting a university was to the king a perfect example of a waste of money. On the other hand, the chancellor of the university showed no tolerance whatsoever, and frequently stated in public that Byteland was being governed by a monarch who took terrible decisions when he was drunk and even worse ones when he was sober. After some time of bad-tempered coexistence, the king had had enough and decided to close down the university. However, the king's councillors advised against this move, suggesting it might cause social unrest. The king yielded to their advice, and instead established a law which banned all organisations, clubs and associations active at the university.</p>
<p>
This action had a rather curious effect on the usually lazy students of the university. They had never before even thought of organising any sort of fellowship, but now they immediately decided they needed to set one up. And this is how the <i>Secret Fellowship</i> came to life.
<p>
The main problem that faced the management of the Fellowship was to organise members' meetings in such a way as to minimise the risk to the participants. It was decided that the <i>n</i> members of the fellowship should be split into <i>k</i> secret divisions, each consisting of at least 2 members. All members belonging to the same division would then meet regularly, and they would take it in turns to host the meetings of the division in their houses.
<p>
But one more important factor has to be taken into account -- the laziness of students. It is therefore your task to form the divisions in such a way that the furthest distance a student may ever be asked to walk is as short as possible.

<h3>Input</h3>
<p>The first line of input contains a single integer t, the number of test cases (t=1000). t test cases follow.
<p>
Each test cases starts with a line containing two integers <i>n k</i>, denoting the number of students and the number of divisions to be formed, respectively (2<=2<i>k</i><=<i>n</i><=200). Each of the next <i>n</i> lines contains two integers <i>x<sub>i</sub> y<sub>i</sub></i> each (-1000 <= <i>x<sub>i</sub>,y<sub>i</sub></i> <= 1000), denoting the coordinates of the houses of successive students.

<h3>Output</h3>
<p>
For the <i>i</i>-th test case output a line with the text <tt>case <i>i</i> Y</tt> or <tt>case <i>i</i> N</tt>, specifying whether you wish to solve the given case. Then in the former case print exactly <i>k</i> lines. Each line should start with integer <i>n<sub>j</sub></i> (<i>n<sub>j</sub></i>>=2) and be followed by a space separated list of exactly <i>n<sub>j</sub></i> increasing integers <i>s<sub>jl</sub></i>, denoting the students belonging to the <i>j</i>-th division, numbered in input order (1<=<i>s<sub>jl</sub></i><=n). All divisions must be disjoint and the sum of all numbers <i>n<sub>j</sub></i> must equal <i>n</i>.

<h3>Score</h3>
<p>
The score awarded to your program is the total of scores for the test cases you chose to solve.
<p>
For each solved test case you will receive <i>diam</i> / (<i>d</i>*<i>k</i>) points, where <i>diam</i> denotes the distance between the two furthest houses of members of the fellowship, and <i>d</i> is the distance between the two furthest houses of members belonging to the same division.

<h3>Example</h3>

<pre>
<b>Input:</b>
2
6 3
0 0
1 0
0 1
1 1
2 0
2 1
6 2
0 0
1 0
0 1
1 1
2 0
2 1
6 2
0 0
1 0
0 1
1 1
2 0
2 1

<b>Output:</b>
case 1 Y
3 1 2 4
3 3 5 6
case 2 Y
3 1 2 5
3 3 4 6
case 3 Y
2 1 3
4 2 4 5 6

<b>Score:</b>
1.849003

</pre>

<p align=justify><i>Bonus info:</i> If score = <i>xxx</i>.<i>xxxaaa</i>, <i>aaa</i> means the number of test cases with Y answer.
