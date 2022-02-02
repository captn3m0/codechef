---
{"category_name":"challenge","problem_code":"KITCHEN","problem_name":"Large Kitchen","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"CS2","6":"PAS fpc","7":"PAS gpc","8":"RUBY","9":"PHP","10":"GO","11":"NODEJS","12":"HASK","13":"SCALA","14":"D","15":"PERL","16":"FORT","17":"WSPC","18":"ADA","19":"CAML","20":"ICK","21":"BF","22":"ASM","23":"CLPS","24":"PRLG","25":"ICON","26":"SCM qobi","27":"PIKE","28":"ST","29":"NICE","30":"LUA","31":"BASH","32":"NEM","33":"LISP sbcl","34":"LISP clisp","35":"SCM guile","36":"JS","37":"ERL","38":"TCL","39":"PERL6","40":"TEXT","41":"CLOJ","42":"FS"},"max_timelimit":1.6,"source_sizelimit":50000,"problem_author":"gennady.korotkevich","problem_tester":"gamabunta","date_added":"7-06-2011","tags":{"0":"challenge","1":"gennady","2":"july11"},"editorial_url":"http://discuss.codechef.com/problems/KITCHEN","time":{"view_start_date":1310376771,"submit_start_date":1310376771,"visible_start_date":1310376722,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>There is a large kitchen in one of the largest Chef's restaurants. Well, to be honest, that's not a real kitchen yet, since there's nothing in it. The first thing to do now is to place cookers, ovens, tables and other stuff. You are to help Chef in this issue.<br /><br />

The kitchen-to-be can be imagined as a rectangular grid with N rows and M columns consisting of N*M equal cells which are currently empty. As unlikely as it may seem, each piece of the aforementioned stuff takes exactly one cell of the grid. Chef would like to use as many cells as possible for the stuff, but there's just one restriction: there should be no "closed" areas at the kitchen -- areas which can't be reached without moving anything, otherwise it would be too hard for chefs to pick up, for example, a fallen knife. In other words, there should exist <b>no</b> sequences of used cells X<sub>1</sub>, X<sub>2</sub>, ..., X<sub>K</sub>, K &gt; 2, such that for every i between 1 and K-1, inclusive, cells X<sub>i</sub> and X<sub>i+1</sub> are neighbouring, cells X<sub>1</sub> and X<sub>K</sub> are neighbouring too, and no cell is repeated twice. Two cells are called neighbouring if they share a common side.<br /><br />

Yet there is another strange restriction. The set of used cells must be <i>connected</i>, that is, for every pair of used cells there should exist a sequence of used cells X<sub>1</sub>, X<sub>2</sub>, ..., X<sub>K</sub> such that X<sub>1</sub> is one of these cells, X<sub>K</sub> is another one, and for every i between 1 and K-1, inclusive, cells X<sub>i</sub> and X<sub>i+1</sub> are neighbouring. <br /><br />

Your task is to use as many cells as possible under these restrictions. Note that this is a challenge problem: you don't have to find the optimal solution, it's enough to find any of them (but the better is your solution, the more points you receive).

<h3>Input</h3>
</p><p>Input will begin with an integer T, the number of test cases (no more than 30). Each test case consists of 2 integers N and M (N, M ≤ 100), which denote the dimensions of the kitchen.

<h3>Output</h3>
</p><p>For each test case output exactly N lines containing exactly M characters each, describing the final state of the kitchen. A '#' character should represent a cell which can be used for placing something, and a '.' character should represent a cell which should remain free. You may separate the answers for consecutive test cases with empty lines.

<h3>Scoring</h3>
</p><p>Your score for each test case is one hundred times the total number of used cells in your output divided by the total number of cells (in fact, this number indicates the percentage of used cells in your solution). Your score for each file is the average of your scores on the individual test cases. Your overall score is the average of your scores on the individual test files. 

<h3>Example</h3>

<pre>
<b>Input:</b>
2
4 4
5 8

<b>Output:</b>
<code>
.###
##.#
#.##
##.#

#.#.#.#.
###.####
.#.#.#.#
##.###..
.###.###
</code>
</pre>

The score for the first test case is 100*12/16 = 75. The score for the second test case is 100*26/40 = 65. The overall score is thus (75+65)/2 = 70. Note that the solution to the first test case is optimal (there is no correct output with a larger number of used cells), but in the second test case there exist several solutions with more than 26 used cells. 

<h3>Test Case Generation</h3>
</p><p>Every official input file contains exactly 30 test cases. In every test case M and N are chosen randomly and uniformly between 10 and 100, inclusive.</p>