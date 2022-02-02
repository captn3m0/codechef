---
{"category_name":"challenge","problem_code":"AMBIDEX","problem_name":"Ambidextrous Chefs","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"CS2","6":"PAS fpc","7":"PAS gpc","8":"RUBY","9":"PHP","10":"GO","11":"NODEJS","12":"HASK","13":"SCALA","14":"D","15":"PERL","16":"FORT","17":"WSPC","18":"ADA","19":"CAML","20":"ICK","21":"BF","22":"ASM","23":"CLPS","24":"PRLG","25":"ICON","26":"SCM qobi","27":"PIKE","28":"ST","29":"NICE","30":"LUA","31":"BASH","32":"NEM","33":"LISP sbcl","34":"LISP clisp","35":"SCM guile","36":"JS","37":"ERL","38":"TCL","39":"PERL6","40":"TEXT","41":"CLOJ","42":"FS"},"max_timelimit":1.07572,"source_sizelimit":50000,"problem_author":"pieguy","problem_tester":"laycurse","date_added":"11-10-2011","tags":{"0":"challenge","1":"jan12","2":"pieguy"},"editorial_url":"http://discuss.codechef.com/problems/AMBIDEX","time":{"view_start_date":1326290794,"submit_start_date":1326290794,"visible_start_date":1326290794,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
A recent spike in demand for competent chefs has caused the emergence of a highly specialized training program,
in which chefs are trained to use 2 tools simultaneously (one in each hand).
These chefs, called "ambidextrous chefs", can theoretically perform the same work as 2 ordinary chefs.
The problem with these ambidextrous chefs is that their training is so specific that they cannot use any
tools except for the 2 tools they can use simultaneously.
</p>
<p>
Head Chef wants to form chef teams of ambidextrous chefs.
In order to form a complete team, for every tool present there must be at least one chef capable of operating it.
Chef wants to create as many teams as possible, but at the same time hire as few chefs as possible.  See the scoring section for details.
</p>
<h3>Input</h3>
<p>Input begins with an integer T, the number of test cases.
Each test case begins with 2 integers N and M.
N is the number of different tools, and M the number of ambidextrous chefs.
2 lines follow with exactly M integers each, each between 1 and N.
The i-th integer of each line indicates a tool that the i-th chef can use.
It is guaranteed that the i-th integer of the first line will be different from the i-th integer of the second line.
It is further guaranteed that each tool will be usable by at least one chef.
</p>
<h3>Output</h3>
<p>For each test case, output M integers on a line, one per ambidextrous chef.
The number should be 0 if the chef should not be hired.
Otherwise, the number should be any positive number not exceeding 10000 to indicate the team to which that chef should be assigned.
Chefs with the same team number will be assigned to the same team.
</p>
<h3>Scoring</h3>
<p>
Your score for each test case is (C*N-H)/M, where C is the number of complete chef teams formed, N is the number of tools, H is the total number of chefs hired, and M is the total number of chefs.
If this value is non-positive for any test case, the submission will be judged "Wrong Answer" instead.
Your score for each test file is the average of the scores for the individual test cases.
Your overall score is the average of your scores on the individual test files.
Note that optimal solutions are not required, but better solutions will earn more points.
</p>

<h3>Sample Input</h3>
<pre>2
5 9
5 1 5 5 1 3 4 4 1
3 2 2 3 5 1 2 2 4
8 12
6 6 8 7 1 1 6 5 3 8 7 6
2 8 1 5 8 2 7 7 1 3 4 4
</pre>

<h3>Sample Output</h3>
<pre>2 2 1 3 3 1 3 2 1
2 0 1 1 2 1 0 2 2 1 2 1

</pre>
<p>The score for the first test case is (3*5-9)/9 = 0.666667,
and the score for the second test case is (2*8-10)/12 = 0.5.
Hence the overall score is 0.583333.
</p>

<h3>Test case generation</h3>
<p>
For each official test file, T is 10.  For each test case, N is chosen
randomly between 10 and 100, inclusive, and M between 200 and 1000,
inclusive.  Then ceiling(2*M/(N-1)) of each type of tool is placed in
a sack, and one by one each of the chefs will randomly remove 2
different tools from the sack.  If after all chefs have selected tools
there is a tool that none of the chefs selected, the process is
restarted with the same values of N and M.
</p>