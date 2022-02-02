---
{"category_name":"challenge","problem_code":"BLOCKS","problem_name":"Block Tower","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"kotlin","42":"PERL6","43":"TEXT","44":"SCM chicken","45":"CLOJ","46":"COB","47":"FS"},"max_timelimit":1.33,"source_sizelimit":50000,"problem_author":"pieguy","problem_tester":"anshuman_singh","date_added":"9-06-2010","tags":{"0":"challenge","1":"july10","2":"pieguy"},"editorial_url":"http://discuss.codechef.com/problems/BLOCKS","time":{"view_start_date":1278915452,"submit_start_date":1278915452,"visible_start_date":1278915520,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Dave has several rectangular blocks with which he wishes to build a tower.  He may only
place a block on another if its base fits within the other's base with the edges parallel. 
So he could place a block with a base of 1x9 on top of a block with a base of 2x9, but not on top of a block
with a base of 8x8.  Help Dave make the tower as tall as
possible.  Blocks may be rotated by any multiple of 90 degrees about any axis.  Each block may only be used once, and you must use at least 3 blocks.</p>

<h3>Input:</h3>
<p>Input begins with an integer T (about 500), the number of test cases.  Each test case
begins with an integer N (chosen uniformly between 10 and 200, inclusive), the number of
blocks.  N lines follow, each containing 3 integers that give the dimensions of a block.
All dimensions are chosen uniformly between 1 and 100, inclusive.  A blank line separates
each case.</p>

<h3>Output:</h3>
<p>For each case, first ouput an integer P&gt;=3, indicating the number of blocks you wish to
use.  Follow with P lines, each containing the dimensions of a block, with the height of
the block listed first (the order of the other 2 dimensions does not matter).  Output
the blocks in order from the top of the tower to bottom of the tower.</p>

<h3>Scoring</h3>
Your score for each test case is the height of your tower divided by N.  Your total score
is the average of your scores on the individual test cases.

<h3>Sample input:</h3>
<pre>1

10
7 2 10
8 8 8
7 1 1
2 7 9
6 8 1
6 6 5
3 2 5
10 3 9
10 10 8
4 4 1</pre>


<h3>Sample output:</h3>
<pre>5
4 1 4
1 1 7
10 2 7
2 7 9
8 10 10

</pre>

<p>Score: (4+1+10+2+8)/10 = 2.5</p>