---
{"category_name":"challenge","problem_code":"CHAORNOT","problem_name":"To challenge or not","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"CS2","6":"PAS fpc","7":"PAS gpc","8":"RUBY","9":"PHP","10":"GO","11":"NODEJS","12":"HASK","13":"SCALA","14":"D","15":"PERL","16":"FORT","17":"WSPC","18":"ADA","19":"CAML","20":"ICK","21":"BF","22":"ASM","23":"CLPS","24":"PRLG","25":"ICON","26":"SCM qobi","27":"PIKE","28":"ST","29":"NICE","30":"LUA","31":"BASH","32":"NEM","33":"LISP sbcl","34":"LISP clisp","35":"SCM guile","36":"JS","37":"ERL","38":"TCL","39":"PERL6","40":"TEXT","41":"CLOJ","42":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"ACRush","problem_tester":"tuananh93","date_added":"25-04-2013","tags":{"0":"ACRush","1":"challenge","2":"june13"},"editorial_url":"http://discuss.codechef.com/problems/CHAORNOT","time":{"view_start_date":1371460885,"submit_start_date":1371460885,"visible_start_date":1371460885,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Problem description.</h3>
<p> Chef became the problem writer of ACM/ICPC regional contest this year. One week before the contest, Chef came up with an interesting idea, and wrote the following problem : </p>
<p> Given <b>N</b> integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>n</sub></b>, print YES (or NO) if there exists (or not) <b>3</b> numbers that form an arithmetic sequence. All integers are between <b>0</b> and <b>99999</b> (inclusive).</p>
<p> As Chef expected, during the contest, most teams cannot figure out an efficient algorithm to solve it. But in the last minute of the contest, judges get one 10-lines submission, which is judged as correct. The short solution works as follows, if <b>N</b> > <b>2000</b>, output YES, otherwise brute-force it. </p>
<p> Chef felt extremely disappointed, and he/she believed that the solution is definitely wrong. Chef is now interested in how to challenge the submission. </p>
<p> Chef needs your help. Chef would like you to find a set of integers, such that no <b>3</b> integers form an arithmetic sequence. To make the task more challenging, you are given a list of <b>M</b> integers <b>B<sub>1</sub></b>, <b>B<sub>2</sub></b>, ..., <b>B<sub>M</sub></b>. You can only use integers from this list. The set does not require maximality, but larger sets will score more points.</p>
<h3>Input</h3>
<p> The first line of the input contains an integer <b>M</b>   denoting the length of the list. The second line contains <b>M</b> space-separated integers <b>B<sub>1</sub></b>, <b>B<sub>2</sub></b>, ..., <b>B<sub>M</sub></b> denoting the list.</p>
<h3>Output</h3>
<p>First output the integer <b>N</b> on the first line. Then output <b>N</b> integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b> on the second line.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>M</b> ≤ <b>100000</b></li>
<li><b>0</b> ≤ <b>B<sub>i</sub></b> &lt; <b>100000</b> for each <b>1</b> ≤ <b>i</b> ≤ <b>M</b></li>
</ul>
<h3>Scoring</h3>
<p>Your score for each test file is <b>100*N/M</b>. Your overall score is the average of your scores on the individual test files. The goal is to maximize your score.</p>
<h3>Example</h3>
<pre><b>Input:</b>
10
1 2 3 4 5 6 7 8 9 10

<b>Output:</b>
4
1 4 6 9

</pre><h3>Explanation</h3>
<p>This sample output would score <b>100*4/10=40</b>.</p>
<h3>Test Generation</h3>
<p> We have <b>50</b> official test cases, each of them is created as follows:<br />
An integer <b>L</b> is chosen from <b>[10000, 100000]</b> uniformly at random. An real value <b>p</b> is chosen from <b>[0.1, 0.9]</b> uniformly at random. Then each number <b>x</b> from <b>[0, L - 1]</b>, <b>x</b> is added into the list with probability <b>p</b>, independently. Regenerate the list if it's empty. </p>
