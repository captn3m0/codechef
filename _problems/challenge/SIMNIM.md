---
{"category_name":"challenge","problem_code":"SIMNIM","problem_name":"Simultaneous Nim","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"CS2","6":"PAS fpc","7":"PAS gpc","8":"RUBY","9":"PHP","10":"GO","11":"NODEJS","12":"HASK","13":"SCALA","14":"D","15":"PERL","16":"FORT","17":"WSPC","18":"ADA","19":"CAML","20":"ICK","21":"BF","22":"ASM","23":"CLPS","24":"PRLG","25":"ICON","26":"SCM qobi","27":"PIKE","28":"ST","29":"NICE","30":"LUA","31":"BASH","32":"NEM","33":"LISP sbcl","34":"LISP clisp","35":"SCM guile","36":"JS","37":"ERL","38":"TCL","39":"PERL6","40":"TEXT","41":"CLOJ","42":"FS"},"max_timelimit":0.806755,"source_sizelimit":50000,"problem_author":"gennady.korotkevich","problem_tester":"laycurse","date_added":"24-01-2012","tags":{"0":"bruteforce","1":"challenge","2":"gauss","3":"gennady","4":"sep12"},"editorial_url":"http://discuss.codechef.com/problems/SIMNIM","time":{"view_start_date":1347346636,"submit_start_date":1347346636,"visible_start_date":1347355800,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Chef is a famous <a href="http://en.wikipedia.org/wiki/Nim">Nim</a> player. He has his own set of <b>N</b> heaps, and the <b>i</b>-th heap contains <b>A<sub>i</sub></b> stones. What is so special about this set is that with this set of stones Chef always wins when he's moving second. Chef's friends don't know the math behind the game at all, but the fact that Chef is playing with the same set of stones all the time seems suspicious to them.

</p><p>To prove that he's a really good player even with other sets, Chef decided to split his set into <b>K</b> sets so that each of the <b>N</b> original heaps is used in exactly one set. Then he's going to play <b>K</b> Nim games simultaneously with these sets. Chef's ultimate goal is letting his opponent move first in each of these <b>K</b> games and still winning all the games! To make it even more impressive, Chef wants the value of <b>K</b> to be as large as possible.

</p><p>It's of no secret that in the game of Nim a position is winning for the player moving second if XOR of all the numbers of stones in the heaps is equal to 0; for more information check <a href="http://en.wikipedia.org/wiki/Nim#Mathematical_theory">this</a>. You may assume that Chef and his opponents always play optimally -- they always win whenever they have a winning strategy.

</p><p>You are to help Chef with this separation. Note that this is a challenge problem: it's not required for <b>K</b> to be maximum possible, but the bigger is <b>K</b>, the more points you get.

<h3>Input</h3>
</p><p>The first line of the input file contains one integer <b>T</b> -- the number of test cases (no more than 10). Each test case is described by two lines. The first of them contains a single integer <b>N</b>, the second contains <b>N</b> space-separated positive integers <b>A<sub>i</sub></b> (<b>i</b> = 1..<b>N</b>).

<h3>Output</h3>
</p><p>For each test case, output one line containing exactly <b>N</b> positive integers. The <b>i</b>-th of these numbers should be the index of the game in which the <b>i</b>-th heap of stones should be involved (in the order as the heaps are given in the input). The value of <b>K</b> for this test case is then calculated as the maximum of the numbers you printed. Note that each integer between 1 and <b>K</b>, inclusive, should be presented among these numbers at least once.

<h3>Scoring</h3>

</p><p>If any of the test cases is solved incorrectly, you'll receive Wrong Answer. Incorrect answers include outputting something else than <b>N</b> positive integers for each test case, making some sets of heaps empty and making some sets of heaps losing for Chef.

</p><p><b>Note</b> that it's possible to output the answer with <b>K</b> = 1 (i.e., making no splits of the initial set is allowed). Nevertheless, if your output corresponds to <b>K</b> = 1 for <b>all</b> test cases in a single output file, you'll receive Wrong Answer as well. It's guaranteed that each official test file contains at least one test case for which a solution with <b>K</b> &gt; 1 exists.

</p><p>If all your answers are correct, your score for each test case will be calculated as 100*<b>N</b>/<b>K</b>. Your score for each file is the average of your scores on the individual test cases in this file. Your overall score is the average of your scores on the individual test files.

</p><p>Your goal is to minimize the overall score. 

<h3>Example</h3>

<pre>
<b>Input:</b>
2
7
1 2 3 4 5 6 7
6
1 1 2 2 3 3

<b>Output:</b>
1 1 1 2 2 2 2
1 2 1 2 1 2

<b>Explanation:</b>
</pre>
Both of the answers are correct. The score is 100*7/2 = 350 for the first test case and 100*6/2 = 300 for the second test case. The score for this file is thus (350+300)/2 = 325. Note that the second test case allows a better solution, 1 1 2 2 3 3.

<h3>Test Case Generation</h3>

Every official input file contains exactly 10 test cases. In each test case <b>N</b> is chosen randomly and uniformly between 10 and 1000, inclusive, and <b>M</b> is chosen randomly and uniformly between 5 and 60, inclusive. Then, the values of <b>A<sub>i</sub></b> for 1 ≤ <b>i</b> &lt; <b>N</b> are generated randomly and uniformly between 1 and 2<sup><b>M</b></sup>-1, inclusive, and the value of <b>A<sub>N</sub></b> is calculated as XOR of all other <b>A<sub>i</sub></b>'s (note that this way the generated set of heaps is certainly winning for Chef). If the value of <b>A<sub>N</sub></b> appears to be 0, the whole process of test case generation is restarted.</p>