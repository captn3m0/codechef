---
{"category_name":"challenge","problem_code":"BIAS","problem_name":"(Challenge) Biased Committee","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":null,"date_added":"31-01-2018","tags":{"0":"challenge","1":"feb18","2":"inversions","3":"kingofnumbers"},"editorial_url":"https://discuss.codechef.com/problems/BIAS","time":{"view_start_date":1518427800,"submit_start_date":1518427800,"visible_start_date":1518427800,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/FEB18/mandarin/BIAS.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/FEB18/russian/BIAS.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/FEB18/vietnamese/BIAS.pdf">Vietnamese</a> as well.</h3>

<p><b>N</b> contestants are participating in a competitive programming contest. Each participant has a unique id between 1 and <b>N</b> (both inclusive). There are <b>M</b> problems in the contest.</p>

<p>The organizing committee didn't announce the maximum number of points for each problem; we only know that after the contest, the ratio of the number of points gained by the participant with id <b>i</b> on problem <b>j</b> to the maximum number of points for problem <b>j</b> is equal to <b>A<sub>ij</sub>/1000000</b>, for each valid pair <b>i</b>, <b>j</b>. The total score for each participant is the sum of points gained on all problems.</p>

<p>After the contest, participants are ranked according to the total score; in case of a tie, the participant with the highest id has the best (lowest) rank.</p>

<p>For each valid <b>i</b>, let's denote the rank of the participant with id <b>i</b> by <b>R<sub>i</sub></b>. An inversion in the standings is a pair <b>i</b>, <b>j</b> such that <b>i</b> &lt; <b>j</b> and <b>R<sub>i</sub> > R<sub>j</sub></b>.</p>

<p>The committee now wants to assign maximum scores to problems. However, they can't assign the scores arbitrarily. For each problem, you are given two numbers <b>L</b> and <b>U</b> denoting the lower and upper bound for the maximum score — the maximum score for this problem has to be an integer between <b>L</b> and <b>U</b> (both inclusive).</p>

<p>The committee wants to assign the maximum scores in such a way that the number of inversions in the final standings is minimized. (That is, the best situation is when the participant with id 1 is ranked first, participant 2 is ranked second and so on.)</p>

<h3>Input</h3>
<ul>
<li>The first line of the input contains a single integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The first line of each test case contains two space-separated integers <b>N</b> and <b>M</b>.</li>
<li><b>M</b> lines follow. For each valid <b>i</b>, the <b>i</b>-th of these lines contains two space-separated integers <b>L<sub>i</sub></b> and <b>U<sub>i</sub></b> denoting the lower and upper bounds to the <b>i</b>-th problem.</li>
<li><b>N</b> more lines follow. For each valid <b>i</b>, the <b>i</b>-th of these lines contains <b>M</b> space-separated integers <b>A<sub>i1</sub>, A<sub>i2</sub>, ..., A<sub>iM</sub></b>.</li>
</ul>

<h3>Output</h3>
<p>For each test case, print a single line containing <b>M</b> space-separated integers denoting the maximum scores for the problems.</p>

<h3>Constraints</h3>

<ul>
<li>1 ≤ <b>T</b> ≤ 5</li>
<li>1 ≤ <b>N</b> ≤ 1,000</li>
<li>1 ≤ <b>M</b> ≤ 1,000</li>
<li>0 ≤ <b>A<sub>ij</sub></b> ≤ 1,000,000</b> for each valid <b>i</b>, <b>j</b></li>
<li>0 ≤ <b>L<sub>i</sub></b> ≤ <b>U<sub>i</sub></b> ≤ 1,000,000 for each valid <b>i</b></li>
</ul>

<h3>Test Generation</h3>
<p>
Each input file will contain <b>T</b> = 5 test cases with the following constraints:
<ul>
<li>first test case: <b>N</b> = 1000, <b>M</b> = 1000</li>
<li>second test case: <b>N</b> = 1000, <b>M</b> = 200</li>
<li>third test case: <b>N</b> = 1000, <b>M</b> = 50</li>
<li>fourth test case: <b>N</b> = 1000, <b>M</b> = 20</li>
<li>fifth test case: <b>N</b> = 1000, <b>M</b> = 10</li>
</ul>
</p>

<p>
The remaining parameters are selected in the following way:
<ul>
<li>for each valid <b>i</b>, <b>L<sub>i</sub></b> is selected uniformly randomly between 0 and 1000000 (both inclusive)</li>
<li>for each valid <b>i</b>, each <b>U<sub>i</sub></b> is selected uniformly randomly between <b>L<sub>i</sub></b> and 1000000 (both inclusive)</li>
<li>for each valid <b>i</b>, each <b>A<sub>ij</sub></b> is selected uniformly randomly between 0 and 1000000 (both inclusive)</li>
</ul>
</p>


<h3>Scoring</h3>
<p>
Your score for each test case is equal to max(0,<b>N</b> * (<b>N</b>-1)/ 4 - <b>inv</b>) where <b>inv</b> is the number of inversions in the final standings produced by your solution. Your total score is the sum of scores for all test cases in all test files, you should try to maximize this score. The scores visible during the contest will be computed only on 4 files. The scores based on all test files will be revealed after the contest.
</p>


<h3>Example</h3>
<pre><b>Input:</b>
1
3 3
1 10
1 10
1 10
1 5 6
2 4 5
7 4 2
<b>Output:</b>
4 6 8
</pre>

<h3>Explanation</h3>
<p><b>Example case 1:</b> participant 1 will have total score equal to (1*4 + 5*6 + 6*8)/1000000 = 82/1000000, participant 2 will have total score equal to (2*4 + 4*6 + 5*8)/1000000  = 72/1000000, participant 3 will have score equal to (7*4 + 4*6 + 2*8)/1000000 = 68/1000000, so participants will be ranked in the standings by 1, 2, 3, which has 0 inversions</p>

